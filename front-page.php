<?php
/**
 * Template Name: Front Page
 */
global $post;
?>
<?php get_header(); ?>
<main class="main">
    <?php
    $my_lang = pll_current_language();
    
    if ( $my_lang == 'ru' ) {
    ?>
    <section id="main-section-new" class="section-grid new-slider">
        <div class="">
            <div class="swiper swiper3">
                <div class="swiper-wrapper">
                    <!-- Слайд 1 -->
                    <div class="swiper-slide swiper-slide-first">
                        <div class="container">
                            <div class="grid-2 grid-bonus">
                                <div class="grid-bonus__content">
                                    <div class="slider_item_text">
                                        <h2>Сеть станций автосервисных</h2>
                                        <p style="color: white; margin-top: 25px; margin-bottom: 20px;"><strong>Честные цены без скрытых расходов</strong></p>
                                    </div>
                                    <div class="button_wrapper">
                                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Записаться онлайн</a>
                                        <a href="/ru/services/" class="button transparent">Все услуги</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/wp-content/uploads/2026/01/untitled-design-14.png" alt="" class="swiper-slide-first-img hide_mobile">
                        <img src="/wp-content/uploads/2025/12/vector-6.webp" alt="" class="swiper-slide-first-img2 hide_mobile"> 
                        <img src="/wp-content/uploads/2026/01/vova-mob-ru.png" alt="" class="swiper-slide-first-img_mobile">
                    </div>

                    <!-- Слайд 2 -->
                    <div class="swiper-slide swiper-slide-second">
    <div class="container">
        <div class="grid-2 grid-bonus">
            <div class="grid-bonus__content">

                <div class="slider_item_text">
                    <h2>Стань членом 
                        <span class="klub-text" style="--klub-color: #FF9D42;">КЛУБА</span> 
                        Tak Serwis
                    </h2>
                    <p>Программа лояльности</p>
                </div>
                
                <div class="button_wrapper" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <a href="tel:+48880353599" class="button contrast" style="margin-right: 0.5rem;">Записаться</a>
                    <a href="/tak-serwis-club-usloviia-ru/" class="button transparent">Подробнее</a>
                </div>
                
                <div class="benefits" style="margin-top: 1rem;">
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 16px;">Пакет бесплатных услуг</p>
                    </div>
                    
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 17px;">Фиксированные цены</p>
                    </div>
                    
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 17px;">Приоритетное обслуживание</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="/wp-content/uploads/2026/01/karta-klubowicza2.png" alt="" class="swiper-slide-second-img hide_mobile">
    <img src="/wp-content/uploads/2026/03/baner-na-sajt-_tak-klub_-mobilnaya-versiya.png" alt="" class="swiper-slide-second-img_mobile">
</div>

<style>
    /* Стили для изменения цвета слова KLUBU */
    .klub-text {
        color: var(--klub-color, #FF9D42);
        font-weight: bold;
        transition: color 0.3s ease;
    }
    
    /* Стили для изменения размера шрифта преимуществ */
    .benefit-text {
        font-size: var(--benefit-font-size, 16px);
        transition: font-size 0.3s ease;
        line-height: 1.4;
    }
    
    /* Дополнительные стили для контроля отступов */
    .slider_item_text {
        margin-bottom: 1.5rem;
    }
    
    .slider_item_text h2 {
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }
    
    .slider_item_text p {
        margin-top: 0.5rem;
        font-size: 1.1rem;
    }
    
    .benefits .item {
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
    }
</style>

                    <!-- Слайд 3 -->
                    <div class="swiper-slide swiper-slide-third">
                        <div class="container">
                            <div class="grid-2 grid-bonus">
                                <div class="grid-bonus__content">
                                    <div class="slider_item_text">
                                        <h2>Бесплатная компьютерная диагностика?</h2>
                                        <p>Получите бесплатный подарок при замене масла или фильтров (при их покупке в нашем сервисном центре)</p>
                                    </div>
                                    <div class="button_wrapper">
                                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Записаться онлайн</a>
                                        <a href="/ru/services/" class="button transparent">Узнать больше</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/wp-content/uploads/2025/12/image-6.webp" alt="" class="swiper-slide-third-img hide_mobile">
                        <img src="/wp-content/uploads/2025/10/image-6mob-1.webp" alt="" class="swiper-slide-third-img_mobile">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <?php } elseif ( $my_lang == 'pl' ) { ?>
    <section id="main-section-new" class="section-grid new-slider">
        <div class="">
            <div class="swiper swiper3">
                <div class="swiper-wrapper">
                    <!-- Слайд 1 -->
                    <div class="swiper-slide swiper-slide-first">
                        <div class="container">
                            <div class="grid-2 grid-bonus">
                                <div class="grid-bonus__content">
                                    <div class="slider_item_text">
                                        <h2>Sieć warsztatów samochodowych</h2>
                                        <p style="color: white; margin-top: 25px; margin-bottom: 20px;"><strong>Uczciwe ceny bez ukrytych kosztów</strong></p>
                                    </div>
                                    <div class="button_wrapper">
                                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Umów się online</a>
                                        <a href="/services/" class="button transparent">Wszystkie usługi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/wp-content/uploads/2026/01/vova-utp.png" alt="" class="swiper-slide-first-img hide_mobile">
                        <img src="/wp-content/uploads/2025/12/vector-6.webp" alt="" class="swiper-slide-first-img2 hide_mobile"> 
                        <img src="/wp-content/uploads/2026/01/vova-mob.png" alt="" class="swiper-slide-first-img_mobile">
                    </div>

                    <!-- Слайд 2 -->
                    <div class="swiper-slide swiper-slide-second">
    <div class="container">
        <div class="grid-2 grid-bonus">
            <div class="grid-bonus__content">

                <div class="slider_item_text">
                    <h2>Zostań członkiem 
                        <span class="klub-text" style="--klub-color: #FF9D42;">KLUBU</span> 
                        Tak Serwis
                    </h2>
                    <p>Program lojalnościowy</p>
                </div>
                
                <div class="button_wrapper" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <a href="tel:+48880353599" class="button contrast" style="margin-right: 0.5rem;">Zadzwoń</a>
                    <a href="/tak-serwis-club-warunki/" class="button transparent">Dowiedz się więcej</a>
                </div>
                
                <div class="benefits" style="margin-top: 1rem;">
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 16px;">Zestaw bezpłatnych usług</p>
                    </div>
                    
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 17px;">Stałe ceny</p>
                    </div>
                    
                    <div class="item" style="margin-bottom: 0.75rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21ZM15.9727 10.3477L11.4727 14.8477C11.1422 15.1781 10.6078 15.1781 10.2809 14.8477L8.03086 12.5977C7.70039 12.2672 7.70039 11.7328 8.03086 11.4059C8.36133 11.0789 8.8957 11.0754 9.22266 11.4059L10.875 13.0582L14.7773 9.15234C15.1078 8.82188 15.6422 8.82188 15.9691 9.15234C16.2961 9.48281 16.2996 10.0172 15.9691 10.3441L15.9727 10.3477Z" fill="#1A1924"></path>
                        </svg>
                        <p class="title benefit-text" style="margin-left: 0.3rem; --benefit-font-size: 17px;">Priorytetowa obsługa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="/wp-content/uploads/2026/01/karta-klubowicza2.png" alt="" class="swiper-slide-second-img hide_mobile">
    <img src="/wp-content/uploads/2026/03/baner-na-sajt-_tak-klub_-mobilnaya-versiya.png" alt="" class="swiper-slide-second-img_mobile">
</div>

<style>
    /* Стили для изменения цвета слова KLUBU */
    .klub-text {
        color: var(--klub-color, #FF9D42);
        font-weight: bold;
        transition: color 0.3s ease;
    }
    
    /* Стили для изменения размера шрифта преимуществ */
    .benefit-text {
        font-size: var(--benefit-font-size, 16px);
        transition: font-size 0.3s ease;
        line-height: 1.4;
    }
    
    /* Дополнительные стили для контроля отступов */
    .slider_item_text {
        margin-bottom: 1.5rem;
    }
    
    .slider_item_text h2 {
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }
    
    .slider_item_text p {
        margin-top: 0.5rem;
        font-size: 1.1rem;
    }
    
    .benefits .item {
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
    }
</style>

                    <!-- Слайд 3 -->
                    <div class="swiper-slide swiper-slide-third">
                        <div class="container">
                            <div class="grid-2 grid-bonus">
                                <div class="grid-bonus__content">
                                    <div class="slider_item_text">
                                        <h2>Darmowa diagnostyka komputerowa?</h2>
                                        <p>Zgarnij gratis przy wymianie oleju & filtrów (przy zakupie w naszym serwisie)</p>
                                    </div>
                                    <div class="button_wrapper">
                                        <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast">Umów się online</a>
                                        <a href="/services/" class="button transparent">Wszystkie usługi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/wp-content/uploads/2025/12/image-6.webp" alt="" class="swiper-slide-third-img hide_mobile">
                        <img src="/wp-content/uploads/2025/10/image-6mob-1.webp" alt="" class="swiper-slide-third-img_mobile">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <?php } ?>

    <!-- Преимущества -->
    <section id="advantages_section" class="advantages_section advantages_section_new">
        <?php
        $group_section = get_field('team_section');
        $advantages = $group_section['advantages'] ?? [];
        ?>
        <div class="container">
            <?php if (!empty($advantages)) : ?>
            <div class="advantages">
                <?php foreach ($advantages as $item) : ?>
                <div class="item">
                    <div class="number_wrapper">
                        <?php if (!empty($item['icon'])) : ?>
                        <img src="<?php echo esc_url($item['icon']); ?>" alt="">
                        <?php endif; ?>
                        <div class="number"><?php echo esc_html($item['number'] ?? ''); ?></div>
                    </div>
                    <p class="text"><?php echo esc_html($item['text'] ?? ''); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Как мы работаем -->
    <section id="about_us_section_second" class="section-grid how_we_work how_we_work_main">
        <?php 
        $how_we_work_section = get_field('how_we_work_section');
        if ($how_we_work_section) :
            $about_us_second_img = $how_we_work_section['how_we_work_img_1'] ?? '';
            $about_us_second_img_2 = $how_we_work_section['how_we_work_img_2'] ?? '';
            $about_us_second_img_3 = $how_we_work_section['how_we_work_img_3'] ?? '';
            $how_we_work_heading = $how_we_work_section['how_we_work_heading'] ?? '';
            $how_we_work_inner = $how_we_work_section['how_we_work_inner'] ?? [];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                    <div class="about_us_section_second_images_wrapper">
                        <?php if (!empty($about_us_second_img)) : ?>
                        <div class="about_us_section_second_images_first">
                            <img fetchpriority="high" class="grid-bonus__image" 
                                 src="<?php echo esc_url($about_us_second_img['url']); ?>" 
                                 alt="<?php echo esc_attr($about_us_second_img['alt']); ?>">
                        </div>
                        <?php endif; ?>
                        
                        <div class="about_us_section_second_images_second">
                            <?php if (!empty($about_us_second_img_2)) : ?>
                            <div>
                                <img fetchpriority="high" class="grid-bonus__image" 
                                     src="<?php echo esc_url($about_us_second_img_2['url']); ?>" 
                                     alt="<?php echo esc_attr($about_us_second_img_2['alt']); ?>">
                            </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($about_us_second_img_3)) : ?>
                            <div>
                                <img fetchpriority="high" class="grid-bonus__image" 
                                     src="<?php echo esc_url($about_us_second_img_3['url']); ?>" 
                                     alt="<?php echo esc_attr($about_us_second_img_3['alt']); ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <?php if (!empty($how_we_work_heading)) : ?>
                    <h2 class="title"><?php echo esc_html($how_we_work_heading); ?></h2>
                    <?php endif; ?>
                    
                    <?php if (!empty($how_we_work_inner)) : ?>
                    <div class="advantages1">
                        <?php foreach ($how_we_work_inner as $item) : ?>
                        <div class="item">
                            <div class="number_wrapper">
                                <?php if (!empty($item['icon'])) : ?>
                                <img src="<?php echo esc_url($item['icon']); ?>" alt="">
                                <?php endif; ?>
                                <div class="how_we_work_text"><?php echo esc_html($item['text'] ?? ''); ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>

    <!-- Услуги -->
    <section id="services_section" class="services_section services_section_2">
        <?php
        $group_section = get_field('services_section_2');
        if ($group_section) :
            $services = $group_section['services'] ?? [];
            $button_link = $group_section['button_link'] ?? '';
            $button_title = $group_section['button_title'] ?? '';
        ?>
        <div class="container">
            <?php get_template_part('template_parts/header', 'section', $group_section); ?>
            
            <?php if (!empty($services)) : ?>
            <div class="services">
                <?php foreach ($services as $item) : ?>
                <?php if (!empty($item['link'])) : ?>
                <a class="item" href="<?php echo esc_url($item['link']); ?>">
                <?php else : ?>
                <div class="item">
                <?php endif; ?>
                    <div class="content">
                        <?php if (!empty($item['title'])) : ?>
                        <h3 class="title"><?php echo esc_html($item['title']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])) : ?>
                        <div class="title2"><?php echo esc_html($item['text']); ?></div>
                        <?php endif; ?>
                        <?php if (!empty($item['link'])) : ?>
                        <p class="link"><?php echo pll__('Подробнее','more_details');?></p>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($item['image'])) : ?>
                    <img class="item-img" 
                         src="<?php echo esc_url($item['image']['url']); ?>" 
                         alt="<?php echo esc_attr($item['image']['alt']); ?>"
                         width="<?php echo esc_attr($item['image']['width']); ?>"
                         height="<?php echo esc_attr($item['image']['height']); ?>">
                    <?php endif; ?>
                <?php if (!empty($item['link'])) : ?>
                </a>
                <?php else : ?>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($button_link) && !empty($button_title)) : ?>
            <div class="services_section_button2">
                <a href="<?php echo esc_url($button_link); ?>" class="button contrast"><?php echo esc_html($button_title); ?></a>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </section>

    <!-- Команда -->
    <section id="about_us_team_section" class="team_section">
        <?php
        $about_us_team_section = get_field('about_us_team_section');
        if ($about_us_team_section) :
            $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'] ?? '';
            $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'] ?? '';
            $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'] ?? '';
        ?>
        <div class="container">
            <div class="header_section">
                <?php if (!empty($about_us_team_section_heading)) : ?>
                <h2 class=""><?php echo esc_html($about_us_team_section_heading); ?></h2>
                <?php endif; ?>
                <?php if (!empty($about_us_team_section_text)) : ?>
                <div><?php echo $about_us_team_section_text; ?></div>
                <?php endif; ?>
            </div>

            <div class="swiper swiper2">
                <div class="swiper-wrapper">
                    <?php 
                    $args = array(
                        'post_type' => 'page',
                        'post_parent' => 1714,
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $employee = get_field('employee');
                            $employee_job_title = $employee['employee_job_title'] ?? '';
                            $employee_img = $employee['employee_img'] ?? '';
                            $employee_quote = $employee['employee_quote'] ?? '';
                    ?>
                    <div class="swiper-slide">
                        <div class="item"> 
                            <a class="about_us_team_link" href="<?php the_permalink(); ?>">
                                <?php if (!empty($employee_img)) : ?>
                                <img fetchpriority="high" class="grid-bonus__image item_img"
                                     src="<?php echo esc_url($employee_img['url']); ?>" 
                                     alt="<?php echo esc_attr($employee_img['alt']); ?>"
                                     width="<?php echo esc_attr($employee_img['width']); ?>"
                                     height="<?php echo esc_attr($employee_img['height']); ?>">
                                <?php endif; ?>
                            </a>
                            <div class="content">
                                <p class="text"><?php echo esc_html($employee_quote); ?></p>
                                <p class="name"><?php the_title(); ?></p>
                                <p class="position"><?php echo esc_html($employee_job_title); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <?php if (!empty($about_us_team_section_text_2)) : ?>
            <div><?php echo $about_us_team_section_text_2; ?></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </section>

    <!-- Бренды -->
    <?php 
    $group_section = get_field('brands_section');
    if (!empty($group_section['show_block']) && $group_section['show_block']) : 
        $title = $group_section['title'] ?? '';
        $brands = $group_section['brands'] ?? [];
    ?>
    <section id="brands_section" class="brands_section slider_section">
        <div class="container">
            <div class="wrapp">
                <?php if (!empty($title)) : ?>
                <h2><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <div class="swiper-navigation" data-swiper-id="1">
                    <button class="swiper-button-prev"></button>
                    <button class="swiper-button-next"></button>
                </div>
            </div>
        </div>
        <div id="brands_slider" class="brands_slider swiper-container" data-swiper-id="1">
            <div class="swiper-wrapper">
                <?php
                if (!empty($brands)) :
                    $brandsarray = array_chunk($brands, 2);
                    foreach ($brandsarray as $row) :
                ?>
                <div class="swiper-slide altrow">
                    <?php foreach ($row as $brand) : ?>
                    <div class="item">
                        <?php if (!empty($brand['image'])) : ?>
                        <img class="item_img" 
                             src="<?php echo esc_url($brand['image']['url']); ?>" 
                             alt="<?php echo esc_attr($brand['image']['alt']); ?>"
                             width="<?php echo esc_attr($brand['image']['width']); ?>"
                             height="<?php echo esc_attr($brand['image']['height']); ?>">
                        <?php endif; ?>
                        <div class="title"><?php echo esc_html($brand['title'] ?? ''); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Отзывы -->
    <section id="testimonials_section" class="testimonials_section slider_section">
        <?php 
        $group_section = get_field('testimonials_section');
        if ($group_section) :
            $title = $group_section['title'] ?? '';
            $shortcode = $group_section['shortcode'] ?? '';
        ?>
        <div class="container">
            <div class="review_button_wrapper">
                <?php if (!empty($title)) : ?>
                <h2><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <a class="button contrast" href="/recenzje/">
                    <svg viewBox="0 0 512 512" height="18" width="18">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                        </g>
                    </svg>
                    oceń nas w
                </a>
            </div>
            <?php if (!empty($shortcode)) : ?>
            <?php echo do_shortcode($shortcode); ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </section>

    <!-- Основной контент -->
    <section id="main-content" class="main-content">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content xpandable-block">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact_section" class="contact_section">
        <?php 
        $group_section = get_field('contact_section');
        if ($group_section) :
            $title = $group_section['title'] ?? '';
            $text = $group_section['text'] ?? '';
            $form = $group_section['form'] ?? '';
        ?>
        <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img second_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3462473282734!2d16.871539077023517!3d52.3822732464169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704453aee0505cf%3A0x75b1d7966f4fbca3!2zV8SZZ2xvd2EgOS8xMSwgNjAtMTIyIFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1722533885730!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img third_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.424511093465!2d16.934006577022632!3d52.36272214786157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045a8cbcfe2133%3A0x55aae88399434e16!2zxZt3acSZdGVnbyBBbnRvbmllZ28gNjhDLCA2MS0zNTkgUG96bmHFhCwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sby!4v1722555205985!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img fourth_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.701249411396!2d16.8947197!3d52.44832639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044368c7cb54a9%3A0xe74bc2c1ba387447!2zU3RyemVzennFhHNrYSA2MSwgNjAtNDc5IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1765161166614!5m2!1sru!2sbys" 
                    style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Strzeszyńska 61, 60-479 Poznań"></iframe>
            </div>
            <div class="wrapp">
                <?php if (!empty($title) || !empty($text)) : ?>
                <div class="content">
                    <?php if (!empty($title)) : ?>
                    <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($text)) : ?>
                    <p><?php echo esc_html($text); ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if (!empty($form)) : ?>
                <?php echo do_shortcode($form); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </section>
</main>

<style>
    .swiper, .swiper2 {
        width: 100%;
        min-height: 250px!important;
    }
    
    /* Стили для слайдов можно вынести в отдельный CSS файл */
    .swiper-slide-first-img,
    .swiper-slide-second-img,
    .swiper-slide-third-img,
    .swiper-slide-first-img_mobile,
    .swiper-slide-second-img_mobile,
    .swiper-slide-third-img_mobile {
        position: absolute;
        z-index: -1;
    }
    
    .hide_mobile {
        display: block;
    }
    
    @media (max-width: 768px) {
        .hide_mobile {
            display: none;
        }
    }
</style>

<div class="becomedealer_wrapper"></div>

<?php
// Подключаем стили и скрипты Swiper только если они еще не подключены
if (!wp_style_is('swiper-bundle', 'enqueued')) {
    wp_enqueue_style('swiper-bundle', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');
}
if (!wp_script_is('swiper-bundle', 'enqueued')) {
    wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
}
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация Swiper
    if (typeof Swiper !== 'undefined') {
        // Слайдер 1
        if (document.querySelector('.swiper.swiper1')) {
            new Swiper('.swiper.swiper1', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        }

        // Слайдер 2 (команда)
        if (document.querySelector('.swiper.swiper2')) {
            new Swiper('.swiper.swiper2', {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 25,
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
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
                        slidesPerView: 1
                    }
                },
            });
        }

        // Слайдер 3 (главный)
        if (document.querySelector('.swiper.swiper3')) {
            new Swiper('.swiper.swiper3', {
                loop: true,
                autoplay: {
                    delay: 10000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1,
                    }
                },
            });
        }
    }
});
</script>

<?php get_footer(); ?>