
jQuery(document).ready(function ($) {

    $('.dropdown').on('click', function () {
        if ($(window).width() <= 768) {
            $(this).toggleClass('active-link').find('.dropdown-menu').slideToggle(300);

        }
    });


    $(window).scroll(function () {

        if ($(window).scrollTop() >= 100) {
            $('#wrapper-navbar  .header2').addClass('fixed_header');

        }
        else if ($(window).scrollTop() == 0) {
            $('#wrapper-navbar   .header2').removeClass('fixed_header');


        }
        else {
            $('#wrapper-navbar   .header2').removeClass('fixed_header');
        }


    });


    // $(' .swiper-container').each(function (index, value) {
    //     const swiperId = $(value).data('swiper-id'); // Получаем ID карусели из data-атрибута
    //     const swiperNav = $('.swiper-navigation[data-swiper-id="' + swiperId + '"]'); // Находим контейнер навигации по ID карусели
    //     if ($(value).hasClass('brands_slider')) {
    //         const swiper = new Swiper(value, {
    //             loop: true,
    //             slidesPerView: 3,
    //             spaceBetween: 10,
    //             navigation: {
    //                 nextEl: swiperNav.find('.swiper-button-next')[0],
    //                 prevEl: swiperNav.find('.swiper-button-prev')[0],
    //             },
    //             on: {
    //                 init: function () {
    //                     // Обновление высоты слайдов при загрузке
    //                     updateSlideHeights();
    //                 },
    //                 resize: function () {
    //                     // Обновление высоты слайдов при изменении размеров окна
    //                     updateSlideHeights();
    //                     setPadding();
    //                     showMenu();

    //                 }
    //             },
    //             breakpoints: {
    //                 // when window width is <= 320px
    //                 540: {
    //                     slidesPerView: 4,
    //                     spaceBetween: 20,
    //                 },
    //                 800: {
    //                     slidesPerView: 5.3,
    //                     spaceBetween: 20,
    //                     // loopedSlides: 9,

    //                 },
    //                 900: {
    //                     slidesPerView: 4.3,
    //                     spaceBetween: 20,
    //                     // loopedSlides: 9,

    //                 },
    //                 1200: {
    //                     slidesPerView: 7.3,
    //                     spaceBetween: 20,
    //                     // loopedSlides: 9,

    //                 },
    //                 1500: {
    //                     slidesPerView: 9.3,
    //                     spaceBetween: 20,
    //                     // loopedSlides: 9,

    //                 }

    //             }
    //         });

    //     }
    //     else if ($(value).hasClass('testimonials_slider')) {
    //         const swiper = new Swiper(value, {
    //             // speed: 800,
    //             // effect: "slide",
    //             loop: false,
    //             slidesPerView: 1,

    //             spaceBetween: 10,
    //             navigation: {
    //                 nextEl: swiperNav.find('.swiper-button-next')[0],
    //                 prevEl: swiperNav.find('.swiper-button-prev')[0],
    //             },

    //             breakpoints: {
    //                 // when window width is <= 320px
    //                 540: {
    //                     slidesPerView: 1.5,
    //                     spaceBetween: 20,
    //                 },
    //                 800: {
    //                     slidesPerView: 2.5,
    //                     spaceBetween: 20,
    //                 }


    //             }
    //         });

    //     }


    // });



});
function toggleMenu() {
    const burgerBtn = document.querySelector('.burger-btn');
    const header = document.querySelector('#wrapper-navbar .header.header2');
    burgerBtn.classList.toggle('active');
    header.classList.toggle('active');
    document.querySelector('html').classList.toggle('fixed');
    if (header.classList.contains('active')) {
        // header.style.maxHeight = `${header.scrollHeight}px`;



    } else {
        // header.style.maxHeight = '0';

    }
    console.log('open');
}

function showMenu() {

    const burgerBtn = document.querySelector('.burger-btn');
    const header = document.querySelector('#wrapper-navbar .header.header2');
    if (window.innerWidth <= 940) {
        burgerBtn.addEventListener('click', toggleMenu);
    } else {
        burgerBtn.classList.remove('active');
        header.classList.remove('active');
        burgerBtn.removeEventListener('click', toggleMenu);
        // header.style.transform = 'translateY(0%)';
        // header.style.position = 'relative';

    }
}

document.addEventListener('DOMContentLoaded', showMenu);



const popupOverlay = document.querySelector('.popup-overlay');
const openPopupBtns = document.querySelectorAll('.open-popup-btn');
const closePopupBtn = document.querySelector('.close-popup-btn');
const popupContainer = document.querySelector('.popup-container');

// show popup
function openPopup() {
    popupOverlay.style.opacity = '0';
    popupOverlay.style.display = 'flex';
    document.querySelector('html').classList.add('stop_scroll');

    setTimeout(() => {
        popupOverlay.style.opacity = '1';
    }, 10);
}

// Hide popup
function closePopup() {
    popupOverlay.style.opacity = '0';
    document.querySelector('html').classList.remove('stop_scroll');

    setTimeout(() => {
        popupOverlay.style.display = 'none';
    }, 300);
}

// Close popup when clicked outside container 
function handleOutsideClick(event) {
    if (!popupContainer.contains(event.target) && !event.target.classList.contains('open-popup-btn')) {
        closePopup();
    }
}

openPopupBtns.forEach((btn) => {
    btn.addEventListener('click', openPopup);
});

closePopupBtn.addEventListener('click', closePopup);
document.addEventListener('click', handleOutsideClick);

// function updateSlideHeights() {

//     let slides = document.querySelectorAll('.swiper-slide');

//     slides.forEach((slide) => {
//         let items = slide.querySelectorAll('.item');
//         if (items) {
//             // console.log(items);

//             items.forEach((item) => {

//                 item.style.height = slide.offsetWidth + 'px';

//             });
//         }
//     });
// }

document.addEventListener('DOMContentLoaded', function () {
    let dropdownLists = document.querySelectorAll('.language_dropdown');
    dropdownLists?.forEach(dropdownList => {
        let dropdownBtn = dropdownList.querySelector('.language_btn');
        let dropdownItems = dropdownList.querySelectorAll('.language_item');

        dropdownList.addEventListener('click', function () {
            dropdownList.classList.toggle('show');
        });
        dropdownItems.forEach(item => {
            item.addEventListener('click', function () {
                dropdownBtn.textContent = this.textContent;
                dropdownList.classList.remove('show');
            });
        });
        document.addEventListener('click', function (event) {
            let target = event.target;
            if (!dropdownBtn.contains(target) && !dropdownList.contains(target)) {
                dropdownList.classList.remove('show');
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // const lenis = new Lenis({
    //     lerp: 0,
    //     duration: 1.2,
    //     easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    // });

    // function raf(time) {
    //     lenis.raf(time);
    //     requestAnimationFrame(raf);
    // }

    // requestAnimationFrame(raf);
    const header = document.querySelector('#wrapper-navbar .header2');
    const burgerBtn = document.querySelector('.burger-btn');
    const navbarHeight = document.querySelector('#wrapper-navbar .header1').offsetHeight;
    const additionalOffset = 0;

    function handleMenuLinksClick(event) {
        event.preventDefault();

        const targetId = this.getAttribute("href").substring(2);
        const isTargetIdEndsWithSlash = targetId.endsWith('/');
        const cleanTargetId = isTargetIdEndsWithSlash ? targetId.slice(0, -1) : targetId;

        const target = document.getElementById(cleanTargetId);

        if (window.innerWidth <= 939) {
            // header.style.position = 'absolute';
            // header.style.transform = 'translateY(-100%)';
        }

        header.classList.remove('active');
        burgerBtn.classList.remove('active');
        document.querySelector('html').classList.remove('fixed');

        if (target) {
            const scrollPosition = target.offsetTop - navbarHeight - additionalOffset;

            if (scrollPosition >= 0) {
                window.scrollTo({ top: scrollPosition, behavior: 'smooth' });
            } else {
                console.error('Scroll position is invalid.');
            }

            const currentUrl = window.location.href;
            const currentHashIndex = currentUrl.indexOf("#");
            const newAnchor = cleanTargetId;

            if (currentHashIndex !== -1) {
                const newUrl = currentUrl.replace(/#.*$/, `#${newAnchor}`);
                window.history.replaceState({}, document.title, newUrl);
            } else {
                const newUrl = `${currentUrl}#${newAnchor}`;
                window.history.pushState({}, document.title, newUrl);
            }

        } else {
            console.error(`Element with ID ${cleanTargetId} not found.`);
            const currentDomain = window.location.hostname;
            window.location.href = `http://${currentDomain}/#${cleanTargetId}`;
        }
    }

    const menuLinks = document.querySelectorAll(".nav-link");
    menuLinks.forEach(link => link.addEventListener("click", handleMenuLinksClick));

    function setupMenuLinks() {
        const menuLinks = document.querySelectorAll('a[href^="/#"]');
        menuLinks.forEach(function (link) {
            link.addEventListener("click", handleMenuLinksClick);
        });
    }



    // function handleResize() {
    //     if (window.innerWidth <= 939 && !header.classList.contains('active')) {
    //         // header.style.position = 'absolute';
    //         // header.style.transform = 'translateY(-100%)';
    //     }
    //     if (window.innerWidth > 939) {
    //         // header.style.position = 'relative';
    //         // header.style.transform = 'translateY(0%)';
    //     }
    // }

    setupMenuLinks();
    // handleResize();
    // window.addEventListener('resize', handleResize);

});




function setPadding() {
    const heightHeader = document.querySelector('#wrapper-navbar .header1').offsetHeight;
    const heightHeaderWrapp = document.querySelector('#wrapper-navbar').offsetHeight;
    const mainElement = document.querySelector('main');
    if (window.innerWidth <= 939) {
        mainElement.style.paddingTop = `${heightHeader}px`;
    } else {
        mainElement.style.paddingTop = `${heightHeaderWrapp}px`;
    }
}

setPadding(); // Вызов функции для установки начального значения

window.addEventListener('resize', setPadding); // Обновление значения при изменении размеров окна

document.addEventListener('wpcf7mailsent', function (event) {
    event.preventDefault();

    var modal = document.getElementById('myModal');
    modal.style.display = 'block';
    popupOverlay.style.opacity = '0';
    document.querySelector('html').classList.remove('stop_scroll');

    setTimeout(() => {
        popupOverlay.style.display = 'none';
    }, 300);

    var closeBtn = modal.querySelector('.close');
    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Добавляем обработчик клика вне окна для закрытия модального окна
    window.addEventListener('click', function (e) {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });
});

document.querySelectorAll('.other_deals a:has(h3.black)').forEach(function (link) {
    console.log(link);
    link.addEventListener('mouseover', function () {
        link.style.color = 'black';
    });

    link.addEventListener('mouseout', function () {
        link.style.color = ''; // Вернуть исходный цвет
    });
});
// console.log(document.querySelectorAll('.other_deals a'));
// document.querySelectorAll('.other_deals a').forEach(link => {
//     const h3 = link.querySelector(' h3');
//     if (h3 && h3.classList.contains('black')) {
//         link.addEventListener('mouseover', () => {
//             link.style.color = 'black'; // Измените цвет на нужный вам
//         });
//         link.addEventListener('mouseout', () => {
//             link.style.color = ''; // Вернуть исходный цвет при уходе курсора
//         });
//     }
// });