<?php
/**
  * Template Name: Corporate client
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>
<style>
        #advantages_section {
    background-color: #fff;
    padding: 55px 0 0px 0;
    padding-bottom: 30px;
    margin-bottom: -30px;
}
#advantages_section h2{
    margin-bottom: 40px;
}
#services_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
}
.wp-gr .grw-row-m .grw-header+.grw-content {
    flex: 0 0 100% !important;
}
.testimonials_section h2 {
    margin-bottom: 180px;
}
.wp-gr.wpac {
    position: relative !important;
}


.services-template .testimonials_section h2{
    margin-bottom: 180px;
}

.services-template .grw-header {
    position: absolute !important;
        z-index: 99999999999 !important;
        top: -163px !important;
}
.services-template .wp-gr .grw-row-m .grw-header+.grw-content {
    flex: 0 0 100%!important;
}
.services-template .wp-gr.wpac {
    position: relative !important;
}
.services-template .wp-google-wr {
    position: absolute !important;
        right: 0px !important;
        top: -20px !important;
}
.services-template .wp-gr .wp-google-wr a {
    display: flex;
    flex-direction: row-reverse;
    color: #fff !important;
    padding: 14px 30px 13px !important;
    outline: none !important;
    border-radius: 8px !important;
    background: #ff9d42 !important;
    white-space: nowrap !important;
    vertical-align: middle !important;
    text-shadow: 1px 1px 0 #888 !important;
    box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24) !important;
    user-select: none !important;
    transition: all .2s ease-in-out !important;
}
.services-template .wp-gr .wp-google-wr a svg{
    margin-right: 10px;
}

form select {
    -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url(/wp-content/uploads/2024/12/ep_arrow-up.png);
        background-repeat: no-repeat;
        background-position-x: 94%;
        background-position-y: 19px;
}
.button.transparent {
    border: 1px solid #1a1924;
    background: transparent;
    font-weight: 700;
}
.button.transparent:hover {
    border: 1px solid #ff9d42;
    background: #ff9d42;
    font-weight: 700;
}
#about_us_section_second{
    padding-bottom: 0px;
}


#advantages_section {
    background-color: #fff;
    padding: 55px 0 0px 0;
    padding-bottom: 30px;
    margin-bottom: -30px;
}
#advantages_section h2{
    margin-bottom: 40px;
}
#services_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
}
.wp-gr .grw-row-m .grw-header+.grw-content {
    flex: 0 0 100% !important;
}
.testimonials_section h2 {
    margin-bottom: 180px;
}
.wp-gr.wpac {
    position: relative !important;
}


.page-template-corporate_client .testimonials_section h2{
    margin-bottom: 180px;
}

.page-template-corporate_client .grw-header {
    position: absolute !important;
        z-index: 99999999999 !important;
        top: -163px !important;
}
.page-template-corporate_client .wp-gr .grw-row-m .grw-header+.grw-content {
    flex: 0 0 100%!important;
}
.page-template-corporate_client .wp-gr.wpac {
    position: relative !important;
}
.page-template-corporate_client .wp-google-wr {
    position: absolute !important;
        right: 0px !important;
        top: -20px !important;
}
.page-template-corporate_client .wp-gr .wp-google-wr a {
    display: flex;
    flex-direction: row-reverse;
    color: #fff !important;
    padding: 14px 30px 13px !important;
    outline: none !important;
    border-radius: 8px !important;
    background: #ff9d42 !important;
    white-space: nowrap !important;
    vertical-align: middle !important;
    text-shadow: 1px 1px 0 #888 !important;
    box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24) !important;
    user-select: none !important;
    transition: all .2s ease-in-out !important;
}
.page-template-corporate_client .wp-gr .wp-google-wr a svg{
    margin-right: 10px;
}

form select {
    -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url(/wp-content/uploads/2024/12/ep_arrow-up.png);
        background-repeat: no-repeat;
        background-position-x: 94%;
        background-position-y: 19px;
}
.button.transparent {
    border: 1px solid #1a1924;
    background: transparent;
    font-weight: 700;
}
.button.transparent:hover {
    border: 1px solid #ff9d42;
    background: #ff9d42;
    font-weight: 700;
}
#about_us_section_second{
    padding-bottom: 0px;
}

.clients_logos {
    position: relative;
}

.clients_logos .swiper-button-next, .clients_logos .swiper-button-prev {
    position: absolute;
    top: var(--swiper-navigation-top-offset, 50%);
    width: calc(var(--swiper-navigation-size) / 44* 27);
    height: var(--swiper-navigation-size);
    margin-top: calc(0px -(var(--swiper-navigation-size) / 2));
    z-index: 10;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1A1924 !important;
}
.clients_logos .swiper-button-prev {
    left: 15%;
    font-size: 20px;
}
.clients_logos .swiper-button-next {
    right: 15%;
    font-size: 20px;
}
.clients_logos .swiper-button-prev:after {
    font-size: 20px;
        opacity: 0.7;
}
.clients_logos .swiper-button-next:after {
    font-size: 20px;
        opacity: 0.7;
}
.clients_logos .swiper3 img{
    height: 100%;
    width: 100%;
    object-fit: none;
    //transform: scale(1.2);
}
#main-section.corporate_client .grid-bonus {
    display: block;
}
#calculator select{
    height: 49px!important;
    padding: 14px 15px!important;
    border: none!important;
    border-radius: 8px!important;
    color: rgba(26, 25, 36, .5)!important;
    outline: 1px solid rgba(26, 25, 36, .4)!important;
    width: 100%!important;
}
.page-template-corporate_client #fbuilder .medium{
    width: 100%!important;
}

#calculator .pb0.pbreak{
    display: grid!important;
    grid-template-columns: 1fr 1fr 1fr 1fr!important;
}
#calculator .cff-calculated-field{
    grid-column: 1 / -1;
    width: 310px;
}
#calculator .cff-calculated-field input{
    height: 49px!important;
    padding: 14px 15px!important;
    border: none!important;
    border-radius: 8px!important;
    width: 310px!important;
}
#calculator form{
display: block!important;
    width: 100%;
}
.grid-bonus__content ul{
list-style: disc;
}
.grid-bonus__content ol{
    list-style: auto;
}
.grid-bonus__content a.button{
    margin-top: 20px;
}
.page-template-corporate_client .contact_iconLinks {
    list-style: none;
}

@media (min-width: 1024px) and (max-width: 1400px) {
.clients_logos .swiper-button-prev {
    left: 5%;
    font-size: 20px;
}
.clients_logos .swiper-button-next {
    right: 5%;
    font-size: 20px;
}
        }

@media (min-width: 768px) and (max-width: 1023px) {
.clients_logos .swiper-button-prev {
    left: 5%;
    font-size: 20px;
}
.clients_logos .swiper-button-next {
    right: 5%;
    font-size: 20px;
}
.advantages_section.corporate_client .advantages {
        /* margin-top: 20px; */
        border-radius: 14px;
        background-color: #f4f6f8;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        padding: 37px 2px;
        justify-content: space-between;
    }
    #calculator .pb0.pbreak {
    display: grid !important;
    grid-template-columns: 1fr !important;
}
        }
        @media (min-width: 320px) and (max-width: 767px) {
    #calculator .pb0.pbreak {
    display: grid !important;
    grid-template-columns: 1fr !important;
}
        }
.vacancies_img_wrapper_1 {
    top: -35px;
    position: absolute;
    right: -11px;
    width: 525px;
    height: 204px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 900;
    font-size: 60px;
    text-transform: uppercase;
}
.vacancies_img_wrapper_1 span{
    position: relative;
    top: -20px;
}
.vacancies_img_wrapper {
    position: relative;
}
.vacancies_img_wrapper_2 {
    top: -75px;
    position: absolute;
    right: 11px;
    z-index: 9;
    width: 340px;
    height: 68px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 28px;
}
:lang(ru) .vacancies_img_wrapper_2 {
  font-size: 24px;
}
.right-col-corp {
    min-width: 540px;
}
#main-section .grid-bonus .right-col-corp .grid-bonus__image {
    border-radius: 18px;
    width: 100%;
    height: 100%;
}
#main-section {
    background-color: #fff;
}
.grid_corporate .advantages{
    width: 85%;
    background: #f4f6f8;
    border-radius: 18px;
    padding: 32px;
}
.grid_corporate .advantages .item{
    padding-top: 20px;
    border-bottom: 2px solid rgba(255, 255, 255, .5);
    padding-bottom: 20px;
}
.grid_corporate .advantages .item:first-child{
    padding-top: 0px;
}
.grid_corporate .advantages .item:last-child{
    border-bottom: none;
    padding-bottom: 0px;
}
.grid_corporate .advantages .number_wrapper{
    display: flex;
    margin-bottom: 5px;
    align-items: center;
}
.grid_corporate .advantages .number{
    font-weight: 700;
    font-size: 20px;
    color: #1a1924;
}
.mt-40{
    margin-top: 40px;
}
.corporate_heading{
    width: 50%;
    margin-bottom: 30px;
}
.button {
    text-transform: none;
}


@media (min-width: 320px) and (max-width: 767px) {
.vacancies_img_wrapper {
    margin-top: 45px;
}
.vacancies_img_wrapper img{
    width: 100%;
}
.vacancies_img_wrapper_2 {
    top: -42px;
    right: 12px;
    left: auto;
    position: absolute;
    z-index: 9;
    width: 340px;
    height: 68px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 28px;
    transform: scale(0.55);
    transform-origin: top right;
}
.vacancies_img_wrapper_1 {
    top: -20px;
    right: 0;
    left: auto;
    position: absolute;
    width: 525px;
    height: 204px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 900;
    font-size: 60px;
    transform: scale(0.55);
    transform-origin: top right;
    text-transform: uppercase;
}
#main-section .grid-bonus .right-col-corp .grid-bonus__image {
    margin-left: 0px;
}
.grid_corporate .advantages {
    width: 100%;
    background: #f4f6f8;
    border-radius: 18px;
    padding: 32px;
}
.corporate_heading {
    width: 100%;
    margin-bottom: 30px;
}
.right-col-corp {
    width: 100%;
    min-width: 100%;
}
 }

/* Roadmap Infographic CSS (Snake Timeline) */
.roadmap_section {
    padding: 60px 0;
    background-color: #fff;
    overflow: hidden;
}
.roadmap_section h2 {
    margin-bottom: 60px;
    text-align: center;
}
.snake-timeline {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
    height: 350px;
}
.snake-line {
    position: absolute;
    top: 60px;
    left: calc(5% + 22px);
    right: calc(5% + 22px);
    height: 180px;
    border: 1px solid rgba(255, 157, 66, 0.5);
    border-left: none;
    border-radius: 0 90px 90px 0;
    z-index: 1;
}
.snake-item {
    position: absolute;
    width: 220px;
    text-align: left;
    z-index: 2;
}
.snake-icon {
    width: 44px;
    height: 44px;
    background: #fff;
    border: 2px solid #ff9d42;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ff9d42;
    position: absolute;
    top: -22px;
    left: 0;
    box-shadow: 0 4px 10px rgba(255, 157, 66, 0.2);
}
.snake-icon svg {
    width: 20px;
    height: 20px;
    fill: currentColor;
}
.snake-text {
    padding-top: 35px;
    font-weight: 700;
    font-size: 15px;
    color: #1a1924;
    line-height: 1.4;
}
.snake-car {
    position: absolute;
    top: 228px;
    left: calc(5% + 7px);
    color: #ff9d42;
    z-index: 2;
    transform: scaleX(-1);
}
.snake-car svg {
    width: 30px;
    height: 24px;
    fill: currentColor;
}

.step-1 { top: 60px; left: 5%; }
.step-2 { top: 60px; left: 38%; }
.step-3 { top: 60px; left: 71%; }
.step-4 { top: 240px; left: 50%; }
.step-5 { top: 240px; left: 15%; }

@media (max-width: 1023px) {
    .snake-line {
        left: calc(2% + 22px);
        right: calc(2% + 22px);
    }
    .step-1 { left: 2%; }
    .step-2 { left: 35%; }
    .step-3 { left: 68%; }
    .step-4 { left: 50%; }
    .step-5 { left: 10%; }
}

@media (max-width: 767px) {
    .snake-timeline {
        height: auto;
        padding: 20px 20px 60px 20px;
    }
    .snake-line {
        top: 40px;
        bottom: 40px;
        left: 42px; /* 20px padding + 22px */
        right: auto;
        width: 0;
        height: auto;
        border: none;
        border-left: 1px solid rgba(255, 157, 66, 0.5);
        border-radius: 0;
    }
    .snake-item {
        position: relative;
        top: auto !important;
        left: auto !important;
        width: 100%;
        padding-left: 60px;
        margin-bottom: 30px;
    }
    .snake-icon {
        top: 0;
        left: 0;
    }
    .snake-text {
        padding-top: 10px;
    }
    .snake-car {
        position: absolute;
        top: auto;
        bottom: 20px;
        left: 27px; /* 42 - 15 */
        transform: scaleX(1);
    }
}
</style>
<main class="main">

<section id="title_section" class="title_section">
<div class="container">  
    
<?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>
<?php $corporate_first_screen = get_field('corporate_first_screen' );
        $corporate_first_screen_title = $corporate_first_screen['title'];
        $corporate_first_screen_img = $corporate_first_screen['image'];
        $corporate_first_screen_img_text1 = $corporate_first_screen['image_heading_1'];
        $corporate_first_screen_img_text_2 = $corporate_first_screen['image_heading_2'];
        $corporate_first_screen_advantages = $corporate_first_screen['advantages'];
        $corporate_first_screen_button = $corporate_first_screen['button'];
        ?>
<h1 class="corporate_heading"><?php echo $corporate_first_screen_title; ?></h1>

</div>
    </section>

    <section id="main-section" class="section-grid grid_corporate">
        
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                <div class="advantages">
                <?php foreach ($corporate_first_screen_advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="number"><?php echo $item['number']; ?></div>
                    </div>
                
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div>

            <div class="">
        <!--<button class="popmake-1605 popmake-1613 button contrast mt-40"><?php echo $corporate_first_screen_button; ?></button> -->
        <a href="tel:+48880353599"
                        class="button contrast"><?php echo $corporate_first_screen_button; ?></a>
    </div>
                    
                </div>
                <div class="right-col right-col-corp">

                <div class="vacancies_img_wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $corporate_first_screen_img['url']; ?>" alt="<?php echo $corporate_first_screen_img['alt']; ?>"
                            width="<?php echo $corporate_first_screen_img['width']; ?>"
                            height="<?php echo $corporate_first_screen_img['height']; ?>">
                            <div class="vacancies_img_wrapper_2" style="background-image:url(/wp-content/uploads/2024/10/vector-2.png);">
                            <?php echo $corporate_first_screen_img_text1; ?>
                            </div>
                            <div class="vacancies_img_wrapper_1" style="background-image:url(/wp-content/uploads/2024/10/vector-1.png);">
                            <span><?php echo $corporate_first_screen_img_text_2; ?></span>
                            </div>

                            
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    <section id="main-section" class="section-grid corporate_client">
        <?php $corporate_client_first_section = get_field('corporate_client_first_section' );
        $corporate_client_first_section_title = $corporate_client_first_section['title'];
        $corporate_client_first_section_text = $corporate_client_first_section['text'];
        $corporate_client_first_section_link = $corporate_client_first_section['link'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                <?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>

                    <h1 class="title title-section"><?php echo $corporate_client_first_section_title; ?></h1>
                    <p class="description"><?php echo $corporate_client_first_section_text; ?></p>
                    <a href="<?php echo $corporate_client_first_section_link['url']; ?>"
                        class="button contrast"><?php echo $corporate_client_first_section_link['title']; ?></a>
                </div>
            </div>
        </div>
    </section> -->






    <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="advantages_section" class="advantages_section corporate_client">
        <?php
        $group_section = get_field('corporate_team_section');
        $advantages = $group_section['advantages'];
	  
	  ?>
        <div class="container">
            <h2>Почему корпоративные клиенты выбирают Tak Serwis?</h2>
            <div class="advantages">
                <?php foreach ($advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="number"><?php echo $item['number']; ?></div>
                    </div>
                
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div>
            <a href="/#contact_section"
                        class="button contrast mt-40">Отправить запрос</a>
        </div>
    </section>
    <?php
	  ?>

    <section id="roadmap_section" class="roadmap_section">
        <div class="container">
            <h2>Путь клиента</h2>
            <div class="snake-timeline">
                <div class="snake-line"></div>
                <div class="snake-car"><svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg></div>
                
                <div class="snake-item step-1">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg></div>
                    <div class="snake-text">Звонок на инфолинию</div>
                </div>
                <div class="snake-item step-2">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                    <div class="snake-text">Контакт с менеджером B2B</div>
                </div>
                <div class="snake-item step-3">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                    <div class="snake-text">Акцептация условий и приоритетный срок</div>
                </div>
                <div class="snake-item step-4">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg></div>
                    <div class="snake-text">Визит на сервис и встреча с менеджером</div>
                </div>
                <div class="snake-item step-5">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg></div>
                    <div class="snake-text">Фактура со скидкой и запись следующего авто</div>
                </div>
            </div>
        </div>
    </section>

	 <section id="video_section">
    <div class="wrapper2">
        <iframe 
            class="js-video" 
            id="player" 
            width="100%" 
            height="800"
            src="https://www.youtube.com/embed/Lr74bZ4wqwk?enablejsapi=1&autoplay=1&mute=1"
            frameborder="0" 
            loading="lazy"
            allowfullscreen>
        </iframe>
    </div>
</section>

<?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="advantages_section" class="advantages_section corporate_client">
        <?php
        $group_section = get_field('corporate_team_section');
        $advantages = $group_section['advantages'];
        ?>
        <div class="container">
            <h2>Dlaczego klienci korporacyjni wybierają Tak Serwis?</h2>
            <div class="advantages">
                <?php foreach ($advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="number"><?php echo $item['number']; ?></div>
                    </div>
                
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div>
            <a href="/#contact_section"
                        class="button contrast mt-40">Wyślij zapytanie</a>
        </div>
    </section>
	<?php
	
	?>

    <section id="roadmap_section" class="roadmap_section">
        <div class="container">
            <h2>Ścieżka klienta</h2>
            <div class="snake-timeline">
                <div class="snake-line"></div>
                <div class="snake-car"><svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg></div>
                
                <div class="snake-item step-1">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg></div>
                    <div class="snake-text">Zadzwoń na infolinię</div>
                </div>
                <div class="snake-item step-2">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                    <div class="snake-text">Kontakt z menedżerem B2B</div>
                </div>
                <div class="snake-item step-3">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                    <div class="snake-text">Akceptacja warunków i priorytetowy termin</div>
                </div>
                <div class="snake-item step-4">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg></div>
                    <div class="snake-text">Wizyta w serwisie i spotkanie z menedżerem</div>
                </div>
                <div class="snake-item step-5">
                    <div class="snake-icon"><svg viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg></div>
                    <div class="snake-text">Faktura z rabatem i umówienie kolejnego auta</div>
                </div>
            </div>
        </div>
    </section>

	 <section id="video_section">
    <div class="wrapper2">
        <iframe 
            class="js-video" 
            id="player" 
            width="100%" 
            height="800"
            src="https://www.youtube.com/embed/Lr74bZ4wqwk?enablejsapi=1&autoplay=1&mute=1"
            frameborder="0" 
            loading="lazy"
            allowfullscreen>
        </iframe>
    </div>
</section>
    <?php
  }
  
?>



<section id="calculator" class="">
        <?php $group_section = get_field('testimonials_section');
        $title = $group_section['title'];
        $shortcode = $group_section['shortcode'];
        ?>
        <div class="container">


<h2 style="
    margin-bottom: 25px;
">Elastyczne stawki dla biznesu</h2>
      <p style="
    margin-bottom: 25px;
">Spersonalizowane taryfy w zależności od rodzaju usługi, możliwość otrzymania oferty handlowej na życzenie</p>  
            
            <?php echo do_shortcode('[CP_CALCULATED_FIELDS id="6"]'); ?>


            
    <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <div>
    <div class="calculator_button_text">
        Если не нашли нужной марки автомобиля или услуги, позвони нам и получи индивидуальное предложение
    </div>
        <button class="open-popup-btn button contrast">Получить цену</button>
    </div>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <div>
    <div class="calculator_button_text">
        Jeśli nie znalazłeś odpowiedniej marki samochodu lub usługi, zadzwoń do nas i otrzymaj indywidualną wycenę
    </div>
    
    <button class="open-popup-btn button contrast">Otrzymaj Wycenę</button></div>
    <?php
  }
			
  
?>
<section id="about_us_team_section" class="team_section">

            <?php $about_us_team_section = get_field('about_us_team_section');
        $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'];
        $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'];
        $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'];
        ?>

    <div class="container">

    <div class="header_section text_left">

        <h2 class=""><?php echo $about_us_team_section_heading; ?></h2> 

                  <div><?php echo $about_us_team_section_text; ?></div>    
    
    </div>

             


                        <div class="swiper swiper2">

                                <div class="swiper-wrapper">
    

                                        <?php 
                                        $args = array(
                                        'post_type' => 'page',
                                        'post_parent' => 1714,
                                        'posts_per_page' => -1
                                        );

                                        $query = new WP_Query( $args );
                                        if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                        $query->the_post();
                                        ?>
                                                        
                                        <div class="swiper-slide">
                                            <?php $employee = get_field('employee' );
                                            $employee_job_title = $employee['employee_job_title'];
                                            $employee_img = $employee['employee_img'];
                                            $employee_quote = $employee['employee_quote'];
                                            ?>
                                            <div class="item"> 
                                                <a class="about_us_team_link" href="<?php echo get_permalink(); ?>" aria-label="<?php echo pll_current_language() == 'ru' ? 'Подробнее о ' . esc_attr(get_the_title()) : 'Więcej o ' . esc_attr(get_the_title()); ?>">                        
                                                <img fetchpriority="high" class="grid-bonus__image item_img"
                                                        src="<?php echo $employee_img['url']; ?>" alt="<?php echo $employee_img['alt']; ?>"
                                                        width="<?php echo $employee_img['width']; ?>"
                                                        height="<?php echo $employee_img['height']; ?>">
                                                </a>
                                                <div class="content">
                                                    <p class="title"></p>
                                                    <p class="text"><?php echo $employee_quote;?></p>
                                                    <p class="name"><?php the_title(); ?></p>
                                                    <p class="position"><?php echo $employee_job_title;?></p>
                                                </div>
                                            </div>

                                        </div>
                                                <?php
                                                }
                                                }
                                                wp_reset_postdata();
                                                ?>

                                </div>

                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>

                            </div>

                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>

                             
    </div>
</section>




<!--<section id="about_us_team_section" class="team_section">
            <?php $about_us_team_section = get_field('about_us_team_section');
        $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'];
        $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'];
        $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'];
        ?>
    <div class="container">
    <div class="header_section">
        <h2 class=""><?php echo $about_us_team_section_heading; ?></h2> 
                  <div><?php echo $about_us_team_section_text; ?></div>    
    </div>
                        <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            qqqqqqqq
                                        </div>
                                        <div class="swiper-slide">
                                           qqqqqqqq
                                        </div>
                                        <div class="swiper-slide">
                                            qqqqqqqq
                                        </div>
                                </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                            </div>
                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>                        
    </div>
</section>-->





<section id="about_us_team_section" class="team_section clients_logos">

            <?php $corporate_clients_list = get_field('corporate_clients_list');
        $corporate_clients_list_title = $corporate_clients_list['title'];
        $corporate_clients_list_images = $corporate_clients_list['images'];
        ?>

    <div class="container">

    <div class="header_section text_left">

        <h2 class=""><?php echo $corporate_clients_list_title; ?></h2> 

                  <div><?php echo $about_us_team_section_text; ?></div>    
    
    </div>

             


                        <div class="swiper swiper3">

                                <div class="swiper-wrapper">
    

                            <?php foreach ($corporate_clients_list_images as $key => $item) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $item['image']; ?>" alt="">

                
                </div>
                <?php } ?>
                                                        
                                </div>

                                        

                            </div>


<!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>

                             
    </div>
</section>





<?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="testimonials_section" class="testimonials_section slider_section">
        <?php $group_section = get_field('testimonials_section', 2);
        $title = $group_section['title'];
        $shortcode = $group_section['shortcode'];
        ?>

        <div class="container">
            <div class="review_button_wrapper">
        <h2><?php echo $title; ?></h2>
        <a class="button contrast" href="/recenzje/"><svg viewBox="0 0 512 512" height="18" width="18"><g fill="none" fill-rule="evenodd"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path><path d="M20 20h472v472H20V20z"></path></g></svg>
        oceń nas w</a>
        </div>
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </section>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="testimonials_section" class="testimonials_section slider_section">
        <?php $group_section = get_field('testimonials_section', 580);
        $title = $group_section['title'];
        $shortcode = $group_section['shortcode'];
        ?>

        <div class="container">
            <div class="review_button_wrapper">
        <h2><?php echo $title; ?></h2>
        <a class="button contrast" href="/recenzje/"><svg viewBox="0 0 512 512" height="18" width="18"><g fill="none" fill-rule="evenodd"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path><path d="M20 20h472v472H20V20z"></path></g></svg>
        oceń nas w</a>
        </div>
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </section>
    <?php
  }
?>







    <section id="main-section" class="section-grid grid_vacancies">
        <?php $contacts_page = get_field('contacts_page', 2019 );
        $addresses_heading = $contacts_page['addresses_heading'];
        $addresses = $contacts_page['addresses'];
        $working_hours_heading = $contacts_page['working_hours_heading'];
        $working_hours_text = $contacts_page['working_hours_text'];
        $email_heading = $contacts_page['email_heading'];
        $email_text = $contacts_page['email_text'];
        $phone_heading = $contacts_page['phone_heading'];
        $phone_text = $contacts_page['phone_text'];
        $phone_link = $contacts_page['phone_link'];
        ?>

        <?php
$footer_options = get_field('footer_options', 'option');
$footer_about_title = $footer_options['about_block_title'];
$footer_about_text = $footer_options['about_block_text'];
$footer_icon_links = $footer_options['icon_links'];
$address = $footer_options['address'];
$address_icon = $address['icon'];
$time = $footer_options['time_work'];
$time_icon = $time['icon'];
$contacts = $footer_options['contacts'];
$footer_logo = $footer_options['footer_logo'];
$footer_copyright_text = $footer_options['copyright_text'];
?>
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                    
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_location-dot.svg" alt="">
      <?php echo $addresses_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <ul>
      <?php 
       $has_warszawska = false;
       foreach ($addresses as $key => $item) { 
           if (stripos($item['addresses_item'], 'Warszawska') !== false) {
               $has_warszawska = true;
           }
       ?>
       <li><?php echo $item['addresses_item']; ?></li>
       <?php } ?>
       <?php if (!$has_warszawska) { ?>
       <li>Warszawska 39/41, 61-028 Poznań</li>
       <?php } ?>
      </ul>                               
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_time-flip.svg" alt="">
      <?php echo $working_hours_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <?php echo $working_hours_text; ?>                              
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_envelope.svg" alt="">
      <?php echo $email_heading; ?>
   </div>
   <div class="contact-section-item-text">
   <a class="" href="mailto:<?php echo $email_text; ?> "><?php echo $email_text; ?> </a>                              
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_phone-flip.svg" alt="">
      <?php echo $phone_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <a class="" href="tel:<?php echo $phone_link; ?>"><?php echo $phone_text; ?></a>                               
   </div>
</div>



                            <ul class="contact_iconLinks">
                <?php foreach ($footer_icon_links as $link) { ?>
                <li>
                    <a rel="nofollow" href="<?php echo $link['url']; ?>" target="_blank" class="footer_about_iconLink" aria-label="<?php echo function_exists('get_social_label') ? esc_attr(get_social_label($link['url'])) : 'Social Media'; ?>">
                        <?php if ($link['icon']) { ?>
                        <img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['icon']['alt']; ?>"
                            width="<?php echo $link['icon']['width']; ?>"
                            height="<?php echo $link['icon']['height']; ?>">
                        <?php } ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
                    
                
                    
                    
                </div>
                <div class="right-col">





        <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img second_center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3462473282734!2d16.871539077023517!3d52.3822732464169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704453aee0505cf%3A0x75b1d7966f4fbca3!2zV8SZZ2xvd2EgOS8xMSwgNjAtMTIyIFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1722533885730!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img third_center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.424511093465!2d16.934006577022632!3d52.36272214786157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045a8cbcfe2133%3A0x55aae88399434e16!2zxZt3acSZdGVnbyBBbnRvbmllZ28gNjhDLCA2MS0zNTkgUG96bmHFhCwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sby!4v1722555205985!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
			<div class="wrapp_img fourth_center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.701249411396!2d16.8947197!3d52.44832639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044368c7cb54a9%3A0xe74bc2c1ba387447!2zU3RyemVzennFhHNrYSA2MSwgNjAtNDc5IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1765161166614!5m2!1sru!2sbys" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Strzeszyńska 61, 60-479 Poznań"></iframe>
			</div>
			<div class="wrapp_img fifth_center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2432.8845459388657!2d16.9634938!3d52.406859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b6dbaf275a5%3A0xb36a3f9e9cf2ef27!2sWarszawska%2039%2F41%2C%2061-028%20Pozna%C5%84%2C%20Poland!5e0!3m2!1sen!2spl!4v1765161166615!5m2!1sen!2spl" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Warszawska 39/41, 61-028 Poznań"></iframe>
			</div>
            
        </div>


                </div>
            </div>
        </div>
    </section>

    <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="contact_section" class="contact_section">
        <?php $group_section = get_field('contact_section', 2);
        $title = $group_section['title'];
        $text = $group_section['text'];
        $map = $group_section['map'];
        $form = $group_section['form'];
        ?>
        <div class="container">
            <div class="contact_section_img_wrapper">
<img src="/wp-content/uploads/2024/12/contact_image.jpg" alt="">
</div>
            <div class="wrapp">
                <div class="content">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <?php echo do_shortcode($form) ?>
            </div>
        </div>
    </section>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="contact_section" class="contact_section">
        <?php $group_section = get_field('contact_section', 580);
        $title = $group_section['title'];
        $text = $group_section['text'];
        $map = $group_section['map'];
        $form = $group_section['form'];
        ?>
        <div class="container">
<div class="contact_section_img_wrapper">
<img src="/wp-content/uploads/2024/12/contact_image.jpg" alt="">
</div>
            
            <div class="wrapp">
                <div class="content">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <?php echo do_shortcode($form) ?>
            </div>
        </div>
    </section>
    <?php
  }
?>


</main>

<link
  rel="stylesheet"
  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"
/>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper.swiper1', {
  // Optional parameters
  loop: true,
slidesPerView: 2,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

</script>



<script>
const swiper2 = new Swiper('.swiper.swiper2', {
  // Optional parameters
  loop: true,
  slidesPerView: 3,
      spaceBetween: 25,

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
        	breakpoints: {
            1023: {
            	slidesPerView: 3
          },
          767: {
            	slidesPerView: 2
          },
          320: {
            	// slidesPerView: 1
              slidesPerView:1,
// centeredSlides: true, 
            }
        },

});

</script>


<script>
const swiper3 = new Swiper('.swiper.swiper3', {
  // Optional parameters
  loop: true,
  slidesPerView: 4,
      spaceBetween: 25,

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
        	breakpoints: {
            1023: {
            	slidesPerView: 4
          },
          767: {
            	slidesPerView: 2
          },
          320: {
            	// slidesPerView: 1
              slidesPerView:1,
// centeredSlides: true, 
            }
        },

});

</script>
<?php get_footer(); ?>
