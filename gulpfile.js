'use strict';

import gulp from 'gulp';
import babel from 'gulp-babel';
import dartSass from 'sass'
import gulpSass from 'gulp-sass'
const sass = gulpSass(dartSass)
import autoprefixer from 'gulp-autoprefixer';
import cleancss from 'gulp-clean-css';
import concat from 'gulp-concat';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';
import scsslint from 'gulp-sass-lint';
// let browserSync = require('browser-sync').create();
import { create as bsCreate } from 'browser-sync';
const browserSync = bsCreate();
import webp from 'gulp-webp';
import gulpCopy from 'gulp-copy';
import log from 'fancy-log';
import stream from 'merge-stream';
// import webpack from 'webpack-stream';
const { task, src, series, dest, watch } = gulp
let siteUrl = 'http://takservice.local/';

/**
 * Here we set a prefix for our compiled and stylesheet and scripts.
 * Note that this should be the same as the `$themeHandlePrefix` in `func-script.php` and `func-style.php`.
 */
const themePrefix = 'callisto';

/**
 * Paths and files
 */
const srcScss = './src/scss/**/*.scss';
const srcScssDir = [
    './src/scss/layout/*',
    './src/scss/general/*',
];
const srcJsDir = './src/scripts/*';
const srcFontDir = './src/fonts/*/*';
const srcJsFiles = [
    `${srcJsDir}/*.js`,
];
const srcImgDir = './src/img/*';
const srcSlick = './src/scripts/swiper/*';

const destSlick = './assets/js/swiper';
const srclocomotive = './src/locomotive/*';

const destlocomotive = './assets/locomotive';
const destCss = './assets/css';
const destJs = './assets/js';
const destFont = './assets/fonts';
const destImgDir = './assets/img';
const destImgDirWebp = './assets/img/';

/**
 * Scss lint
 */
gulp.task('scss-lint', () => {
    return gulp.src(srcScss)
        .pipe(scsslint());
});

/**
 * Task for styles.
 *
 * Scss files are compiled and sent over to `assets/css/`.
 */
gulp.task('css', () => {
    const folders = [
        'layout',
        'general',
    ]

    ///return stream(
    // folders.map((elem) => {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({ cascade: false }))
        // .pipe(rename(`${themePrefix}.min.css`))
        .pipe(cleancss())
        // .pipe(gulpCopy(destCss))
        // .on('end', () => log('aaaaaaaaaaa'))
        .pipe(gulp.dest(destCss))
    // }
    //   )
    // );
    // return gulp.src(srcScss)
    // .pipe(sass().on('error', sass.logError))
    //     // .pipe(autoprefixer({ cascade: false }))
    //     // .pipe(rename(`${themePrefix}.min.css`))
    //     // .pipe(cleancss())
    //     // .pipe(gulpCopy(destCss))
    // .pipe(gulp.dest(destCss));
});
/**
 * Task for scripts.
 *
 * Js files are uglified and sent over to `assets/js/scripts/`.
 */
gulp.task('js', () => {
    return gulp.src(srcJsDir)

        .pipe(babel({
        }))
        .pipe(concat(`${themePrefix}.js`))
        .pipe(gulp.dest(destJs))
        .pipe(concat(`${themePrefix}.min.js`))

        .pipe(uglify())
        .pipe(gulp.dest(destJs));
});



/**
 * Task for watching styles and scripts.
 */
gulp.task('watch', () => {
    gulp.watch(srcScss, gulp.series('css'));
    gulp.watch(srcJsFiles, gulp.series('js'));
});

///// Get PHP /////
gulp.task('php', function () {
    gulp.src('./php/*.php')
        .pipe(gulp.dest('./'))
});

gulp.task('browser-sync', function () {
    browserSync.init({
        proxy: siteUrl,
        notify: false
    });
    gulp.watch(srcJsFiles, gulp.series('js')).on('change', browserSync.reload);
    gulp.watch(srcScss, gulp.series('css')).on('change', browserSync.reload);
    gulp.watch("../includes/*.php", gulp.series('php')).on('change', browserSync.reload);
    gulp.watch("../templates/*.php", gulp.series('php')).on('change', browserSync.reload);


});
gulp.task('swiper', () =>
    gulp.src(srcSlick)
        .pipe(gulp.dest(destSlick))
);
gulp.task('loco', () =>
    gulp.src(srclocomotive)
        .pipe(gulp.dest(destlocomotive))
);
gulp.task('font', () =>
    gulp.src(srcFontDir)
        .pipe(gulp.dest(destFont))
);

gulp.task('webp', () =>
    gulp.src(srcImgDir)
        .pipe(gulp.dest(destImgDir))
        .pipe(webp())
        .pipe(gulp.dest(destImgDirWebp))
);
/**
 * Default task
 */
gulp.task('default', gulp.series('webp', 'js', 'css', 'swiper', 'browser-sync'));
