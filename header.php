<?php
$header_options = get_field('header_options', 'option');
$footer_options = get_field('footer_options', 'option');
$footer_icon_links = $header_options['icon_links'];
$footer_icon_links_new = $header_options['icon_links_ru'];
$address = $footer_options['address'];
$address_icon = $address['icon'];
$contacts = $footer_options['contacts'];
$header_logo = $header_options['header_logo'];
$lang = $header_options['lang'];
$header_logo_tablet = $header_options['header_logo_tablet'];
$header_logo_mob = $header_options['header_logo_mobile'];

defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPNGZR98');</script>
<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="uTaOSG0_LXLqnG8BUs0jl6HmLgVCsV15-KoJ6hHZlO4" />
    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(94225487, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TEWWY6BDW1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-TEWWY6BDW1');
    </script>

    
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Tak Serwis",
  "description": "Profesjonalny serwis samochodowy w Poznaniu. Specjalizujemy się w naprawach układów kierowniczych, wymianie chłodnic i innych usługach.",
  "url": "https://takserwis.pl",
  "telephone": "+48880353599",
  "email": "biuro@takserwis.pl",
  "logo": "https://takserwis.pl/wp-content/uploads/2024/07/logo.svg",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Saturday"],
      "opens": "09:00",
      "closes": "14:00"
    }
  ],
  "address": [
    {
      "@type": "PostalAddress",
      "streetAddress": "świętego Antoniego 68C",
      "addressLocality": "Poznań",
      "postalCode": "61-359",
      "addressCountry": "PL"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "Węglowa 9/11",
      "addressLocality": "Poznań",
      "postalCode": "60-122",
      "addressCountry": "PL"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "Składowa 33",
      "addressLocality": "Poznań",
      "postalCode": "62-081",
      "addressCountry": "PL"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "Strzeszyńska 61",
      "addressLocality": "Poznań",
      "postalCode": "60-479",
      "addressCountry": "PL"
    },
  {
      "@type": "PostalAddress",
      "streetAddress": "Warszawska 39/41",
      "addressLocality": "Poznań",
      "postalCode": "61-082",
      "addressCountry": "PL"
    }
  ],
  "geo": [
    {
      "@type": "GeoCoordinates",
      "latitude": "52.362692665307804",
      "longitude": "16.936506395762724"
    },
    {
      "@type": "GeoCoordinates",
      "latitude": "52.3822830695812",
      "longitude": "16.87398525158465"
    },
    {
      "@type": "GeoCoordinates",
      "latitude": "52.43147443795602",
      "longitude": "16.78679769576598"
    },
   {
      "@type": "GeoCoordinates",
      "latitude": "52.450464959664664",
      "longitude": "16.89491271673125"
    },
   {
      "@type": "GeoCoordinates",
      "latitude": "52.4104931636485",
      "longitude": "16.96657949117528"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/takservicepoznan",
    "https://www.instagram.com/tak.serwis_/profilecard/?igsh=MWVhc3ZwNjk5dnZtcA%3D%3D",
    "https://youtube.com/@tak.serwis?si=WBYkZfmgO3ZocxGK",
    "https://www.tiktok.com/@tak.serwis?_t=8rPbn5Xdh1q&_r=1",
    "https://www.linkedin.com/company/takserwis/"
  ]
}
</script>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPNGZR98"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="site" id="page">
        <div id="wrapper-navbar">
            <div class="header1 header">
                <div class="container">
                    <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                        <div style="display: flex; align-items: center;">
                            <a href="<?php echo pll_home_url(); ?>" class="logo logo_tablet" style="margin-right: 15px;">
                                <img src="<?php echo $header_logo_tablet['url']; ?>" alt="logotype"
                                    width="<?php echo $header_logo_tablet['width']; ?>"
                                    height="<?php echo $header_logo_tablet['height']; ?>">
                            </a>
                            <a href="<?php echo pll_home_url(); ?>" class="logo logo_mobile" style="margin-right: 15px;">
                                <img src="<?php echo $header_logo_mob['url']; ?>" alt="logotype"
                                    width="<?php echo $header_logo_mob['width']; ?>"
                                    height="<?php echo $header_logo_mob['height']; ?>">
                            </a>
                        </div>
                        
                        <ul class="header_about_address">
                            <li class="soc">
                                <?php
                                $my_lang = pll_current_language();
                                if ( $my_lang == 'ru' ) {
                                ?>
                                <ul class="header_about_iconLinks">
                                    <?php foreach ($footer_icon_links_new as $link) { ?>
                                    <li>
                                        <a rel="nofollow" href="<?php echo $link['url']; ?>" target="_blank"
                                            class="header_about_iconLink">
                                            <?php if ($link['icon']) { ?>
                                            <img src="<?php echo $link['icon']['url']; ?>"
                                                alt="<?php echo $link['icon']['alt']; ?>"
                                                width="<?php echo $link['icon']['width']; ?>"
                                                height="<?php echo $link['icon']['height']; ?>">
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php
                                } elseif ( $my_lang == 'pl' ) {
                                ?>
                                <ul class="header_about_iconLinks">
                                    <?php foreach ($footer_icon_links as $link) { ?>
                                    <li>
                                        <a rel="nofollow" href="<?php echo $link['url']; ?>" target="_blank"
                                            class="header_about_iconLink">
                                            <?php if ($link['icon']) { ?>
                                            <img src="<?php echo $link['icon']['url']; ?>"
                                                alt="<?php echo $link['icon']['alt']; ?>"
                                                width="<?php echo $link['icon']['width']; ?>"
                                                height="<?php echo $link['icon']['height']; ?>">
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <li>
                                <?php if ($address_icon) { ?>
                                <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                                    width="<?php echo $address_icon['width']; ?>"
                                    height="<?php echo $address_icon['height']; ?>">
                                <?php } ?>

                                <div id="header-left-2" class="header-left infohide_grodno" style="color: #fff;">
                                    <div><?php echo pll__('Выберите адрес станции СТО','choose');?>: <span class="city-choose popmake-1038">Składowa 33, Przezmierowo</span></div>
                                    <div class="info-desc"><a href="tel:<?php the_field('phone_1',17078); ?>"><i class="fas fa-phone-alt1"></i><?php the_field('phone_1',17078); ?></a></div>						
                                    <div><?php the_field('grodno_address',17078); ?></div>
                                    <div id="header-left-working"><?php the_field('grodno_hours',17078); ?></div>
                                    <div class="cities">
                                        <div class="first_center_link">Składowa 33, Przezmierowo</div>
                                        <div class="second_center_link">Węglowa 9/11, 61-001 Poznań</div>
                                        <div class="third_center_link">Świętego Antoniego 68C, 61-359 Poznań</div>
                                        <div class="fourth_center_link">Strzeszyńska 61, 60-479 Poznań</div>
										<div class="fifth_center_link">Warszawska 39/41, 61-082 Poznań</div>
                                    </div>
                                </div>
                            </li>
                            <?php if ($contacts) { ?>
                            <?php foreach ($contacts as $contact) { ?>
                            <li class="<?php if (substr($contact['url'], 0, 4) === "tel:") { echo "phone";} ?>">
                                <a class="<?php if (substr($contact['url'], 0, 4) === "tel:") { echo "zphone";} ?>" href="<?php echo $contact['url']; ?>">
                                    <?php if ($contact['icon']) { ?>
                                    <img src="<?php echo $contact['icon']['url']; ?>"
                                        alt="<?php echo $contact['icon']['alt']; ?>"
                                        width="<?php echo $contact['icon']['width']; ?>"
                                        height="<?php echo $contact['icon']['height']; ?>">
                                    <?php } ?>
                                    <?php if ($contact['title']) { ?>
                                    <span><?php echo $contact['title']; ?></span>
                                    <?php } ?>
                                    <?php if (substr($contact['url'], 0, 4) === "tel:") { ?>
                                    <div class="wrapp-img"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.79701 0.961776C6.52632 0.235245 5.81268 -0.151456 5.13068 0.0555658L2.03706 0.993025C1.42537 1.18052 1 1.79768 1 2.50077C1 12.1644 8.05203 20 16.7493 20C17.3821 20 17.9375 19.5274 18.1063 18.8477L18.95 15.4104C19.1363 14.6526 18.7883 13.8596 18.1344 13.5589L14.7596 11.9964C14.1865 11.7308 13.5221 11.9144 13.1319 12.4496L11.7116 14.3752C9.23675 13.0745 7.23293 10.8481 6.06228 8.09818L7.7954 6.52403C8.27702 6.08655 8.44225 5.35221 8.2032 4.71552L6.79701 0.965682V0.961776Z"
                                                fill="white" />
                                        </svg></div>
                                    <?php } ?>
                                </a>
                            </li>
                            <?php }
                            } ?>
                            <li class="btn"><button class=" open-popup-btn button contrast">
                                    <?php echo pll__('Перезвоните мне','call-me');?></button></li>
                            <li class="burger-btn">
                                <div class="navbar-toggler burger-btn" data-toggle=" collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
                                    <div class="burger-menu">
                                        <div class="burger-btn__wrapper">
                                            <span class="burger-square"></span>
                                            <span class="burger-square"></span>
                                            <span class="burger-square"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="right_piece">
                            <?php
                            $my_lang = pll_current_language();
                            if ( $my_lang == 'ru' ) {
                            ?>
                            <ul class="header_about_iconLinks">
                                <?php foreach ($footer_icon_links_new  as $link) { ?>
                                <li>
                                    <a href="<?php echo $link['url']; ?>" target="_blank" class="header_about_iconLink">
                                        <?php if ($link['icon']) { ?>
                                        <img src="<?php echo $link['icon']['url']; ?>"
                                            alt="<?php echo $link['icon']['alt']; ?>"
                                            width="<?php echo $link['icon']['width']; ?>"
                                            height="<?php echo $link['icon']['height']; ?>">
                                        <?php } ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php
                            } elseif ( $my_lang == 'pl' ) {
                            ?>
                            <ul class="header_about_iconLinks">
                                <?php foreach ($footer_icon_links as $link) { ?>
                                <li>
                                    <a href="<?php echo $link['url']; ?>" target="_blank" class="header_about_iconLink">
                                        <?php if ($link['icon']) { ?>
                                        <img src="<?php echo $link['icon']['url']; ?>"
                                            alt="<?php echo $link['icon']['alt']; ?>"
                                            width="<?php echo $link['icon']['width']; ?>"
                                            height="<?php echo $link['icon']['height']; ?>">
                                        <?php } ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            
                            <div class="language_dropdown language_select">
                                <button class="language_btn ">
                                    <?php echo pll_current_language('name'); ?>
                                </button>
                                <ul class="language_list">
                                    <?php 
                                    $current_url = get_permalink();
                                    foreach (pll_the_languages(array('dropdown' => 1, 'hide_current' => 0, 'raw' => 1)) as $lang) :
                                        $language_slug = $lang['name'];
                                        if (is_post_type_archive('services')) {
                                            $translated_page_id = pll_get_post($services_id, $language_slug);
                                            $page_permalink = get_permalink($translated_page_id);
                                        } else {
                                            $page_permalink = $lang['url'];
                                        }
                                    ?>
                                    <li><a href="<?php echo esc_url($page_permalink); ?>"
                                            class="language_item sub4"><?php echo esc_html($language_slug); ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header header2">
                <div class="container">
                    <div id="menu1">
                        <ul class="header_about_address">
                            <li>
                                <?php if ($address_icon) { ?>
                                <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                                    width="<?php echo $address_icon['width']; ?>"
                                    height="<?php echo $address_icon['height']; ?>">
                                <?php } ?>
                                <div class="right_piece">
                                    <div class="language_dropdown language_select mobile_city_select">
                                        <button class="language_btn ">
                                        Składowa 33, Przezmierowo
                                        </button>
                                        <ul class="language_list">
                                            <li><a href="#"
                                                    class="language_item sub4 first_center_link">Składowa 33, Przezmierowo</a>
                                            </li>
                                            <li><a href="#"
                                                    class="language_item sub4 second_center_link">Węglowa 9/11, 61-001 Poznań</a>
                                            </li>
                                            <li><a href="#"
                                                    class="language_item sub4 third_center_link">Świętego Antoniego 68C, 61-359 Poznań</a>
                                            </li>
                                            <li><a href="#"
                                                    class="language_item sub4 fourth_center_link">Strzeszyńska 61, 60-479 Poznań</a>
                                            </li>
											<li><a href="#"
                                                    class="language_item sub4 fifth_center_link">Warszawska 39/41, 61-082 Poznań</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <?php if ($contacts) { ?>
                            <?php foreach ($contacts as $contact) { ?>
                            <li class="<?php if (substr($contact['url'], 0, 4) === "tel:") { echo "phone"; } ?>">
                                <a href="<?php echo $contact['url']; ?>">
                                    <?php if ($contact['icon']) { ?>
                                    <img src="<?php echo $contact['icon']['url']; ?>"
                                        alt="<?php echo $contact['icon']['alt']; ?>"
                                        width="<?php echo $contact['icon']['width']; ?>"
                                        height="<?php echo $contact['icon']['height']; ?>">
                                    <?php } ?>
                                    <?php if ($contact['title']) { ?>
                                    <?php echo $contact['title']; ?>
                                    <?php } ?>
                                </a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                        <div class="right_piece">
                            <ul class="header_about_iconLinks">
                                <?php foreach ($footer_icon_links as $link) { ?>
                                <li>
                                    <a href="<?php echo $link['url']; ?>" class="header_about_iconLink">
                                        <?php if ($link['icon']) { ?>
                                        <img src="<?php echo $link['icon']['url']; ?>"
                                            alt="<?php echo $link['icon']['alt']; ?>"
                                            width="<?php echo $link['icon']['width']; ?>"
                                            height="<?php echo $link['icon']['height']; ?>">
                                        <?php } ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="language_dropdown language_select">
                                <button class="language_btn ">
                                    <?php echo pll_current_language('name'); ?>
                                </button>
                                <ul class="language_list">
                                    <?php $current_url = get_permalink();
                                    foreach (pll_the_languages(array('dropdown' => 1, 'hide_current' => 0, 'raw' => 1)) as $lang) :
                                    $language_slug = $lang['name'];

                                        if (is_post_type_archive('services')) {
                                            $translated_page_id = pll_get_post($services_id, $language_slug);
                                            $page_permalink = get_permalink($translated_page_id);
                                        } else {
                                            $page_permalink = $lang['url'];
                                        }
                                    ?>
                                    <li><a href="<?php echo esc_url($page_permalink); ?>"
                                            class="language_item sub4"><?php echo esc_html($language_slug); ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="left_piece"> 
                        <a href="<?php echo get_home_url(); ?>/" class="logo">
                            <img src="<?php echo $header_logo['url']; ?>" alt="logotype"
                                width="<?php echo $header_logo['width']; ?>"
                                height="<?php echo $header_logo['height']; ?>">
                        </a>

                        <?php if( have_rows('header_options', 'option') ): ?>
                            <?php while( have_rows('header_options', 'option') ): the_row(); ?>
                                <?php $image2 = get_sub_field('header_logo'); ?>
                            <img src="<?php echo $image2['url']; ?>" alt="logotype"
                                width="0"
                                height="0">
                            <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if( have_rows('test') ): ?>
                            <?php while( have_rows('test') ): the_row(); ?>
                                <?php the_sub_field('test'); ?>
                            <?php endwhile; ?>
                            <?php endif; ?>

                        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark">
                            <div class="main-nav__container">
                                <?php the_custom_logo(); ?>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'header-menu',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'navbarNavDropdown',
                                        'menu_class'      => 'navbar-nav ml-auto',
                                        'fallback_cb'     => '',
                                        'menu_id'         => 'main-menu',
                                        'depth'           => 3,
                                    ));
                                ?>
                            </div>
                        </nav>
                    </div>
                    
                    <!-- Button and badge container (reduced right margin) -->
                    <div class="button-orly-wrapper" style="display: flex; align-items: center; gap: 8px; margin-right: 0;">
                        <!-- Online booking button -->
                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast" target="_blank" onclick="gtag('event', 'zarezerwuj_wizyte', {
                            'event_category': 'Запись онлайн', 'event_label': 'https://widget.zarezerwuj.pl' });" >
                            <?php echo pll__('Забронировать','book-header');?>
                        </a>
                        
                        <!-- Awards badge container -->
                        <?php if (function_exists('pll_current_language') && pll_current_language() == 'pl') : ?>
                        <div class="orly-banner-button" style="display: inline-block; vertical-align: middle; margin-left: 8px;">
                            <a href="https://www.orlymotoryzacji.pl/profile-1750865-tak-serwis-warsztat-samochodowy" target="_blank" rel="noopener nofollow" style="display: inline-block;">
                                <img src="https://www.orlymotoryzacji.pl/images/medals/1750865/laureat300_black_pl.png" 
                                     style="max-width: 170px; height: auto; border:0;" 
                                     alt="TAK Serwis Warsztat samochodowy - Poznań" 
                                     title="TAK Serwis Warsztat samochodowy - Poznań">
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Адаптивные стили для баннера -->
        