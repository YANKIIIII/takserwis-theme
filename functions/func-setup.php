<?php
add_action('after_setup_theme', 'theme_support');
function theme_support()
{
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);


    // Custom logo.

    // If the retina setting is active, double the recommended width and height.

    add_theme_support(
        'custom-logo',
        array(
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support('title-tag');

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    add_theme_support('post-thumbnails');
    add_theme_support('post-thumbnails', array('post'));          // Только для post
    add_theme_support('post-thumbnails', array('page'));
    add_action('after_setup_theme', 'wpse16136_after_setup_theme', 11);
    function wpse16136_after_setup_theme()
    {
        add_theme_support('post-formats', array('aside', 'gallery', 'video', 'custom-fields'));
    }
    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');
    add_theme_support('menus');
}


//Add SVG Support
add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
}

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes)
{
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//** * Enable preview for webp image files.*/
function webp_is_displayable($result, $path)
{
    if ($result === false) {
        $displayable_image_types = array(IMAGETYPE_WEBP);
        $info = @getimagesize($path);

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);
add_filter('wpcf7_autop_or_not', '__return_false');

$dynamic_text = 'Перезвоните мне';
$string_name = 'call-me';
pll_register_string( $string_name, $dynamic_text, 'Title of link' );

$dynamic_text = 'Забронировать';
$string_name = 'book-header';
pll_register_string( $string_name, $dynamic_text, 'Title of link' );

$dynamic_text = 'Записаться онлайн';
$string_name = 'book-banner';
pll_register_string( $string_name, $dynamic_text, 'Title of link' );

$dynamic_text = 'Пользовательское соглашение';
$string_name = 'terms';
pll_register_string( $string_name, $dynamic_text );

$dynamic_text = 'Вернуться на главную';
$string_name = 'back-home';
pll_register_string( $string_name, $dynamic_text );
$dynamic_text = 'Руководитель';
$string_name = 'director';
pll_register_string( $string_name, $dynamic_text );

$dynamic_text = 'до';
$string_name = 'do';
pll_register_string( $string_name, $dynamic_text );

$dynamic_text = 'Подробнее';
$string_name = 'more_details';
pll_register_string( $string_name, $dynamic_text );

$dynamic_text = 'Записаться';
$string_name = 'sign_up';
pll_register_string( $string_name, $dynamic_text );

$dynamic_text = 'Выберите адрес станции СТО';
$string_name = 'choose';
pll_register_string( $string_name, $dynamic_text );

function custom_filter_wpcf7_is_tel( $result, $tel )
 { 
    $result = preg_match('/^\(?\+?(\d{0,4})?\)?[-\. ]?(\d+)$/', $tel);
 return $result;
 } 
 add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );