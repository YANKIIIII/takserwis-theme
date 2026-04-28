<?php
/**
 * Template Name: Front Page
 */
global $post;
?>
<?php get_header(); ?>
<main class="main">
    <!--<section id="main-section" class="section-grid qqq">
        <?php $main_section = get_field('main_section');
        $main_section_img = $main_section['main_section_img'];
        $main_section_badge_right_number = $main_section['main_section_badge_right_number'];
        $main_section_badge_right_text = $main_section['main_section_badge_right_text'];
        $main_section_badges_left = $main_section['main_section_badges_left'];
        $main_section_little_text = $main_section['main_section_little_text'];
        $main_section_title = $main_section['main_section_title'];
        $main_section_text = $main_section['main_section_text'];
        $main_section_benefits = $main_section['main_section_benefits'];
        $main_section_link = $main_section['main_section_link'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                    <h1 class="subtitle"><?php echo $main_section_little_text; ?></h1>
                    <p class="title title-section"><?php echo $main_section_title; ?></p>
                    <p class="description"><?php echo $main_section_text; ?></p>
                    <a href="<?php echo $main_section_link['url']; ?>"
                        class="button contrast"><?php echo $main_section_link['title']; ?></a>
                    <div class="benefits">
                        <?php foreach ($main_section_benefits as $key => $item) { ?>
                        <div class="item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z"
                                    fill="#1A1924" />
                            </svg>
                            <p class="title"><?php echo $item['title']; ?> </p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="right-col">
                    <div class="wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $main_section_img['url']; ?>" alt="<?php echo $main_section_img['alt']; ?>"
                            width="<?php echo $main_section_img['width']; ?>"
                            height="<?php echo $main_section_img['height']; ?>">
                    </div>
                    <div class="right_badge">
                        <span class="number"><?php echo $main_section_badge_right_number; ?></span>
                        <p><?php echo $main_section_badge_right_text; ?></p>
                    </div>
                    <div class="items">
                        <?php foreach ($main_section_badges_left as $key => $item) { ?>
                        <div class="item">
                            <div class="wrapp_img"><img src="<?php echo $item['icon']['url']; ?>"
                                    alt="<?php echo $item['icon']['alt']; ?>"
                                    width="<?php echo $item['icon']['width']; ?>"
                                    height="<?php echo $item['icon']['height']; ?>"></div>
                            <p class="title"><?php echo $item['title']; ?> </p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="main-section-new" class="section-grid qqq">
        <?php $main_section = get_field('main_section');
        $main_section_img = $main_section['main_section_img'];
        $main_section_badge_right_number = $main_section['main_section_badge_right_number'];
        $main_section_badge_right_text = $main_section['main_section_badge_right_text'];
        $main_section_badges_left = $main_section['main_section_badges_left'];
        $main_section_little_text = $main_section['main_section_little_text'];
        $main_section_title = $main_section['main_section_title'];
        $main_section_text = $main_section['main_section_text'];
        $main_section_benefits = $main_section['main_section_benefits'];
        $main_section_link = $main_section['main_section_link'];
        ?>
        <div class="container">

<div class="swiper swiper1">

  <div class="swiper-wrapper">

    <?php if( have_rows('become_dealer') ): ?>
                            <?php while( have_rows('become_dealer') ): the_row(); ?>

<div class="swiper-slide">

<div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">

                    <div class="slider_item_text">
<?php the_sub_field('text'); ?>
</div>
<div class="button_wrapper">
<?php
$item = get_sub_field('slider_inner');
foreach ( $item as $subitem ) {
?>


                            <?php  if( !empty($subitem['slider_inner_link']) ): ?>
    <a href="<?php echo $subitem['slider_inner_link']; ?>"
                        class="button contrast <?php echo $subitem['slider_inner_class']; ?>" target="_blank" onclick="gtag('event', 'zarezerwuj_wizyte', {
       'event_category': 'Запись онлайн', 'event_label': 'https://widget.zarezerwuj.pl' });"><?php echo $subitem['slider_inner_title']; ?></a>
<?php endif; ?>
                            
    <?php
      
    }
    ?>

    <?php
$item = get_sub_field('slider_inner_2');
foreach ( $item as $subitem ) {
?>
                            <?php  if( !empty($subitem['slider_inner_link_2']) ): ?>
    <a href="<?php echo $subitem['slider_inner_link_2']; ?>"
                        class="button transparent <?php echo $subitem['slider_inner_class_2']; ?>"><?php echo $subitem['slider_inner_title_2']; ?></a>
<?php endif; ?>
                            
    <?php
                
    }
    ?>
</div>
<?php
$item3 = get_sub_field('slider_inner_benefits');
?>
    <div class="benefits">
                        <?php foreach ($item3 as $key => $item) { ?>
                        <div class="item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z"
                                    fill="#1A1924" />
                            </svg>
                            <p class="title"><?php echo $item['title']; ?> </p>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="right-col">

                    <div class="becomedealer_item_img">
<?php 
$image = get_sub_field('image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
</div>

                </div>
            </div>

</div>
								
                            <?php endwhile; ?>
                            <?php endif; ?>


  </div>

  <div class="swiper-pagination"></div>

</div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

        </div>
    </section> -->

    <!--<section id="banner_section" class="banner_section">
        <?php
        $banner_section = get_field('banner_section');
        $banner_section_img = $banner_section['banner_section_img'];
        $banner_section_img_mobile = $banner_section['banner_section_img_mobile'];
        ?>
        <div class="container2">
            
            <div class="mobile_hide">
                <img src="<?php echo $banner_section_img['url']; ?>" alt="<?php echo $banner_section_img['alt']; ?>" style="
    width: 100%;
">
            </div>
            <div class="desktop_hide">
                <img src="<?php echo $banner_section_img_mobile['url']; ?>" alt="<?php echo $banner_section_img_mobile['alt']; ?>" style="
    width: 100%;
">
            </div>
            
        </div>
    </section> 

    <section id="advantages_section" class="advantages_section">
        <?php
        $group_section = get_field('team_section');
        $advantages = $group_section['advantages'];
        $team = $group_section['team'];
        $director_foto = $group_section['director_foto'];
        $director_text = $group_section['director_text'];
        $director_name = $group_section['director_name'];
        $director_signature = $group_section['director_signature'];
        ?>
        <div class="container">
            
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
            
        </div>
    </section> -->



        <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
        <section id="main-section-new" class="section-grid new-slider">

<div class="">

<div class="swiper swiper3">

<div class="swiper-wrapper">

<div class="swiper-slide swiper-slide-first">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Сеть станций 
автосервисных</h2>
<p>с 12-месячной гарантией</p>
</div>
<div class="button_wrapper">
                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Записаться онлайн</a>
                            <a href="/ru/services/" class="button transparent ">Все услуги</a>
                    
</div>

        </div>

    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/frame-209.png" alt="" class="swiper-slide-first-img hide_mobile">
    <img src="/wp-content/uploads/2025/07/vector-6.png" alt="" class="swiper-slide-first-img2 hide_mobile"> 
    <img src="/wp-content/uploads/2025/07/group-15mob.png" alt="" class="swiper-slide-first-img_mobile">
</div>

<div class="swiper-slide swiper-slide-second">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Друзья приводят друзей!</h2>
<p>Скидка -10% - свяжитесь с нами, чтобы узнать больше</p>
</div>
<div class="button_wrapper">
                        <a href="tel:+48880353599" class="button contrast">Позвонить нам</a>
                            <a href="/ru/services/" class="button transparent ">Все услуги</a>
                    
</div>
<div class="benefits">
<div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">Składowa 33, Przeźmierowo, 62-089 Poznań </p>
                </div>
                                        <div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">Węglowa 9/11, 61-001 Poznań </p>
                </div>
                                        <div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">świętego Antoniego 68C, 61-359 Poznań </p>
                </div>
                                    </div>
        </div>
    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/group-11.png" alt="" class="swiper-slide-second-img hide_mobile">
    <img src="/wp-content/uploads/2025/07/group-10.png" alt="" class="swiper-slide-second-img_mobile">

</div>


<div class="swiper-slide swiper-slide-third">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Бесплатная компьютерная диагностика?</h2>
<p>Получите бесплатный подарок при замене масла или фильтров 
(при их покупке в нашем сервисном центре)</p>
</div>
<div class="button_wrapper">
                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Записаться онлайн</a>
                            <a href="/ru/services/" class="button transparent ">Узнать больше</a>
                    
</div>
        </div>
    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/image-6.png" alt="" class="swiper-slide-third-img hide_mobile">
    <img src="/wp-content/uploads/2025/07/image-6mob.png" alt="" class="swiper-slide-third-img_mobile">
</div>

</div>

<div class="swiper-pagination"></div>

</div>

<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

</div>
</section>

    
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="main-section-new" class="section-grid new-slider">

<div class="">

<div class="swiper swiper3">

<div class="swiper-wrapper">

<div class="swiper-slide swiper-slide-first">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Sieć warsztatów 
samochodowych</h2>
<p>z 12-miesięczną gwarancją</p>
</div>
<div class="button_wrapper">
                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Umów się online</a>
                            <a href="/services/" class="button transparent ">Wszystkie usługi</a>
                    
</div>

        </div>

    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/frame-209.png" alt="" class="swiper-slide-first-img hide_mobile">
    <img src="/wp-content/uploads/2025/07/vector-6.png" alt="" class="swiper-slide-first-img2 hide_mobile"> 
    <img src="/wp-content/uploads/2025/07/group-15mob.png" alt="" class="swiper-slide-first-img_mobile">
</div>

<div class="swiper-slide swiper-slide-second">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Przyjaciele przyprowadzają przyjaciół!</h2>
<p>Rabat -10% - skontaktuj się z nami, aby dowiedzieć się więcej</p>
</div>
<div class="button_wrapper">
                        <a href="tel:+48880353599" class="button contrast">Zadzwoń</a>
                            <a href="/services/" class="button transparent ">Wszystkie usługi</a>
                    
</div>
<div class="benefits">
<div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">Składowa 33, Przeźmierowo, 62-089 Poznań </p>
                </div>
                                        <div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">Węglowa 9/11, 61-001 Poznań </p>
                </div>
                                        <div class="item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                    </svg>
                    <p class="title">świętego Antoniego 68C, 61-359 Poznań </p>
                </div>
                                    </div>
        </div>
    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/group-11.png" alt="" class="swiper-slide-second-img hide_mobile">
    <img src="/wp-content/uploads/2025/07/group-10.png" alt="" class="swiper-slide-second-img_mobile">

</div>


<div class="swiper-slide swiper-slide-third">
<div class="container">
<div class="grid-2 grid-bonus">
        <div class="grid-bonus__content">

            <div class="slider_item_text">
<h2>Darmowa diagnostyka komputerowa?</h2>
<p>Zgarnij gratis przy wymianie oleju & filtrów 
(przy zakupie w naszym serwisie)</p>
</div>
<div class="button_wrapper">
                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Umów się online</a>
                            <a href="/services/" class="button transparent ">Wszystkie usługi</a>
                    
</div>
        </div>
    </div>
    </div>
    <img src="/wp-content/uploads/2025/07/image-6.png" alt="" class="swiper-slide-third-img hide_mobile">
    <img src="wp-content/uploads/2025/07/image-6mob.png" alt="" class="swiper-slide-third-img_mobile">
</div>

</div>

<div class="swiper-pagination"></div>

</div>

<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

</div>
</section>
    <?php
  }
  
?>




    <section id="advantages_section" class="advantages_section advantages_section_new">
        <?php
        $group_section = get_field('team_section');
        $advantages = $group_section['advantages'];
        $team = $group_section['team'];
        $director_foto = $group_section['director_foto'];
        $director_text = $group_section['director_text'];
        $director_name = $group_section['director_name'];
        $director_signature = $group_section['director_signature'];
        ?>
        <div class="container">
            
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
            
        </div>
    </section>

    <section id="about_us_section_second" class="section-grid how_we_work how_we_work_main">
        <?php $how_we_work_section = get_field('how_we_work_section' );
        $about_us_second_img = $how_we_work_section['how_we_work_img_1'];
        $about_us_second_img_2 = $how_we_work_section['how_we_work_img_2'];
        $about_us_second_img_3 = $how_we_work_section['how_we_work_img_3'];
        $how_we_work_heading = $how_we_work_section['how_we_work_heading'];


        $how_we_work = get_field('how_we_work' );
        $how_we_work_inner = $how_we_work_section['how_we_work_inner'];


        $vacancies_img_text_2 = $vacancies['vacancies_img_text_2'];
        $vacancies_title = $vacancies['vacancies_title'];
        $vacancies_text = $vacancies['vacancies_text'];
        $vacancies_our_vacancies = $vacancies['vacancies_our_vacancies'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                   <div class="about_us_section_second_images_wrapper">
                    <div class="about_us_section_second_images_first">
                    <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img['url']; ?>" alt="<?php echo $about_us_second_img['alt']; ?>">
                        <!--<img src="https://takserwis.pl/wp-content/uploads/2024/11/image2.jpg" alt="">-->
                    </div>
                    <div class="about_us_section_second_images_second">
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_2['url']; ?>" alt="<?php echo $about_us_second_img_2['alt']; ?>">
<!--<img src="https://takserwis.pl/wp-content/uploads/2024/11/image3.jpg" alt="">-->
</div>
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_3['url']; ?>" alt="<?php echo $about_us_second_img_3['alt']; ?>">
<!--<img src="https://takserwis.pl/wp-content/uploads/2024/11/image4.jpg" alt="">-->
</div>
                    </div>
                   </div> 
                
                      
                </div>
                <div class="right-col">
                <h2 class="title"><?php echo $how_we_work_heading; ?></h2>

                <div class="advantages1">
                <?php foreach ($how_we_work_inner as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="how_we_work_text"><?php echo $item['text']; ?></div>
                    </div>
                
                </div>
                <?php } ?>
            </div>


                

                </div>
            </div>
        </div>
    </section>






    <!-- <?php
    $args = array(
        'class' => 'other_deals',
    );
    get_template_part('template_parts/deals', 'block', $args); ?> -->
    <!-- <section id="services_section" class="services_section">
        <?php
        $group_section = get_field('services_section');
        $services = $group_section['services']; ?>
        <div class="container">
            <?php get_template_part('template_parts/header', 'section', $group_section); ?>
            <div class="services">
                <?php foreach ($services as $item) : ?>
                <?php if (!empty($item['link'])) : ?>
                <a class="item" href="<?php echo esc_url($item['link']); ?>">
                    <?php else : ?>
                    <div class="item">
                        <?php endif; ?>
                        <div class="content">
                            <h3 class="title"><?php echo esc_html($item['title']); ?></h3>
                            <?php if (!empty($item['link'])) : ?>
                            <p class="link"><?php echo pll__('Подробнее','more_details');?>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.40645 6.34658C8.69941 6.63955 8.69941 7.11533 8.40645 7.40830L4.65645 11.1583C4.36348 11.4513 3.8877 11.4513 3.59473 11.1583C3.30176 10.8653 3.30176 10.3896 3.59473 10.0966L6.81504 6.87627L3.59707 3.65596C3.30410 3.36299 3.30410 2.88721 3.59707 2.59424C3.89004 2.30127 4.36582 2.30127 4.65879 2.59424L8.40879 6.34424L8.40645 6.34658Z"
                                        fill="#FF9D42" />
                                </svg>
                            </p>
                            <?php endif; ?>
                        </div>
                        <img class="item-img" src="<?php echo esc_url($item['image']['url']); ?>"
                            alt="<?php echo esc_attr($item['image']['alt']); ?>"
                            width="<?php echo esc_attr($item['image']['width']); ?>"
                            height="<?php echo esc_attr($item['image']['height']); ?>">
                        <?php if (!empty($item['link'])) : ?>
                </a>
                <?php else : ?>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        </div>
    </section>-->

<section id="services_section" class="services_section services_section_2">
        <?php
        $group_section = get_field('services_section_2');
        $services = $group_section['services']; 
        $button_link = $group_section['button_link'];
        $button_title = $group_section['button_title'];
        ?>
        <div class="container">
            <?php get_template_part('template_parts/header', 'section', $group_section); ?>
            <div class="services">
                <?php foreach ($services as $item) : ?>
                <?php if (!empty($item['link'])) : ?>
                <a class="item" href="<?php echo esc_url($item['link']); ?>">
                    <?php else : ?>
                    <div class="item">
                        <?php endif; ?>
                        <div class="content">
                            <h3 class="title"><?php echo esc_html($item['title']); ?></h3>
                            <div class="title2"><?php echo esc_html($item['text']); ?></div>
                            <?php if (!empty($item['link'])) : ?>
                            <p class="link"><?php echo pll__('Подробнее','more_details');?>
                                
                            </p>
                            <?php endif; ?>
                        </div>
                        <img class="item-img" src="<?php echo esc_url($item['image']['url']); ?>"
                            alt="<?php echo esc_attr($item['image']['alt']); ?>"
                            width="<?php echo esc_attr($item['image']['width']); ?>"
                            height="<?php echo esc_attr($item['image']['height']); ?>">
                        <?php if (!empty($item['link'])) : ?>
                </a>
                <?php else : ?>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="services_section_button2"><a href="<?php echo $button_link; ?>" class="button contrast"><?php echo $button_title; ?></a></div>
        </div>
    </section>

    <!-- <section id="team_section" class="team_section">
        <?php
        $group_section = get_field('team_section');
        $advantages = $group_section['advantages'];
        $team = $group_section['team'];
        $director_foto = $group_section['director_foto'];
        $director_text = $group_section['director_text'];
        $director_name = $group_section['director_name'];
        $director_signature = $group_section['director_signature'];
        ?>
        <div class="container">
            <?php get_template_part('template_parts/header', 'section', $group_section); ?>
            <div class="director">
                <img class="item_img " src="<?php echo $director_foto['url']; ?>"
                    alt="<?php echo $director_foto['alt']; ?>" width="<?php echo $director_foto['width']; ?>"
                    height="<?php echo $director_foto['height']; ?>">
                <div class="content">
                    <p class="text"><?php echo $director_text; ?></p>
                    <div class="wrapp-content">
                        <div class="wrapp">
                            <p class="name"><?php echo $director_name; ?></p>
                            <p class="position"><?php echo pll__('Руководитель','director');?></p>
                        </div>

                         <img class="signature " src="<?php echo $director_signature['url']; ?>"
                            alt="<?php echo $director_signature['alt']; ?>"
                            width="<?php echo $director_signature['width']; ?>"
                            height="<?php echo $director_signature['height']; ?>"> -->
                    </div>
                </div>
            </div>

            <!-- <div class="advantages">
                <?php foreach ($advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number"><?php echo $item['number']; ?></div>
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div> 

            <div class="team">
                <?php foreach ($team as $key => $item) { ?>
                <div class="item"> <img class="item_img " src="<?php echo $item['photo']['url']; ?>"
                        alt="<?php echo $item['photo']['alt']; ?>" width="<?php echo $item['photo']['width']; ?>"
                        height="<?php echo $item['photo']['height']; ?>">
                    <div class="content">
                        <p class="title"><?php echo $item['title']; ?></p>
                        <p class="text"><?php echo $item['text']; ?></p>
                        <p class="name"><?php echo $item['name']; ?></p>
                        <p class="position"><?php echo $item['position']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section> -->

<section id="about_us_team_section" class="team_section">

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
                                                <a class="about_us_team_link" href="<?php echo get_permalink(); ?>">                        
                                                <!-- <img class="item_img" src="https://takservice2/wp-content/uploads/2024/03/photo_2024-03-12_16-23-571212.webp" alt="" width="853" height="727"> -->
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

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>

                            </div>

                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>

                             
    </div>
</section>
    
    <?php $group_section = get_field('brands_section');
    if (!empty($group_section['show_block']) && $group_section['show_block']) { ?>
    <section id="brands_section" class="brands_section slider_section">
        <?php
            $title = $group_section['title'];
            $brands = $group_section['brands'];
            ?>
        <div class="container">
            <div class="wrapp">
                <h2><?php echo $title; ?></h2>
                <div class="swiper-navigation" data-swiper-id="1">
                    <button class="swiper-button-prev"></button>
                    <button class="swiper-button-next"></button>
                </div>
            </div>
        </div>
        <div id="brands_slider" class="brands_slider swiper-container" data-swiper-id="1">
            <div class="swiper-wrapper">
                <?php
                    $i = 0;
                    $brandsarray = array_chunk($brands, 2);
                    foreach ($brandsarray as $row) {
                        $class = null;
                        $class = ' class=" swiper-slide altrow"';
                        echo "<div " . $class . ">";
                        foreach ($row as $brands) { ?>
                <div class="item"><img class="item_img " src="<?php echo $brands['image']['url']; ?>"
                        alt="<?php echo $brands['image']['alt']; ?>" width="<?php echo $brands['image']['width']; ?>"
                        height="<?php echo $brands['image']['height']; ?>">
                    <div class="title"><?php echo $brands['title']; ?></div>
                </div>
                <?php }
                        echo "</div>";
                    } ?>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php $group_section = get_field('properties_section');
    if (!empty($group_section['show_block']) && $group_section['show_block']) { ?>
    <section id="properties_section" class="properties_section">
        <?php
            $title = $group_section['title'];
            $text = $group_section['text'];
            $link = $group_section['link'];
            $properties = $group_section['properties'];
            ?>
        <div class="container">
            <div class="wrapper">
                <div class="content">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <a href="<?php echo $link['url']; ?>" class="button contrast"><?php echo $link['title']; ?></a>
            </div>
            <div class="properties">
                <?php foreach ($properties as $key => $item) { ?>
                <div class="item">
                    <div class="wrapp">
                        <img class="item_img " src="<?php echo $item['image']['url']; ?>"
                            alt="<?php echo $item['image']['alt']; ?>" width="<?php echo $item['image']['width']; ?>"
                            height="<?php echo $item['image']['height']; ?>">
                    </div>
                    <h6 class="title"><?php echo $item['title']; ?></h6>
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>
    <section id="testimonials_section" class="testimonials_section slider_section">
        <?php $group_section = get_field('testimonials_section');
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
    <!-- <section id="main-content" class="main-content" style="padding-top: 1px;">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                <?php 
the_content();
?>
                
        </div>
    </section> -->

    <section id="main-content" class="main-content">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content xpandable-block">
                <?php 
the_content();
?>
                
        </div>
    </section>
    <section id="contact_section" class="contact_section">
        <?php $group_section = get_field('contact_section');
        $title = $group_section['title'];
        $text = $group_section['text'];
        $map = $group_section['map'];
        $form = $group_section['form'];
        ?>
        <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <div class="wrapp">
                <div class="content">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <?php echo do_shortcode($form) ?>
            </div>
        </div>
    </section>
</main>


<div class="becomedealer_wrapper">

			
			</div>
            

<link
  rel="stylesheet"
  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"
/>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper.swiper1', {
  // Optional parameters
  loop: true,

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
  // Autoplay configuration
  autoplay: {
    delay: 10000, // 10000 milliseconds = 10 seconds
    disableOnInteraction: false, // Продолжать autoplay даже после взаимодействия пользователя
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
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

breakpoints: {
    768: {
        slidesPerView: 1,
    }
},
});

</script>
<?php get_footer(); ?>