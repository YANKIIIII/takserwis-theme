<?php
/**
  * Template Name: page_Service_new
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>

<main class="main">
    <section id="main-section" class="section-grid ">
        <?php $main_section = get_field('main_section' );
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
                <?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>
                    <p class="subtitle"><?php echo $main_section_little_text; ?></p>
                    <h1 class="title title-section"><?php the_title(); ?></h1>
                    <p class="description"><?php echo $main_section_text; ?></p>
                    <a href="<?php echo $main_section_link['url'];#contact_section ?>"
                        class="button contrast"><?php echo $main_section_link['title']; ?>Umów się na wizytę</a>
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
             
            </div>
        </div>
    </section>

    <?php $group_section = get_field('utp_section');
    if (!empty($group_section['show_block']) && $group_section['show_block']) { ?>
    <section id="utp_section" class="">
        <?php
            $title = $group_section['title'];
            $brands = $group_section['brands'];
            ?>
        <div class="container">
            <div class="wrapp">
                <h2><?php echo $title; ?></h2>
            </div>

            <div class="utp_section_wrapper">
                <?php

                        foreach ($brands as $brand) { ?>
                <div class="item">
                    <div class="item_inner">
                    <img class="item_img " src="<?php echo $brand['image']['url']; ?>"
                            alt="<?php echo $brand['image']['alt']; ?>">
                    </div>
                    <div class="item_inner">
                    <div class="title"><?php echo $brand['title']; ?></div>
                    <div class="text"><?php echo $brand['text']; ?></div>
                    </div>
                    
                </div>
                <?php }
                        ?>
            </div>
        </div>

            

    </section>
    <?php } ?>




    






    
<?php

$args = array(
    'post_parent' => get_the_ID(), // Current post's ID
);
$children = get_children( $args );
// Check if the post has any child
if ( ! empty($children) ) {

    ?>
    <section id="services_section" class="services_section">
  <div class="container">
  <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <!--<h2>Услуги</h2>  -->
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
  <!--<h2>Usługi</h2> -->
    <?php
  }
  
?>
    <div class="services">

                        <?php 
                          $args = array(
                              'posts_per_page' => -1,
                              'post_type' => 'page',
                              'post_parent' => get_the_ID(),
                          );

                            $query = new WP_Query( $args );
                            $totalpost = $query->found_posts;
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                        
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="<?php echo get_permalink(); ?>">
        <div class="sline__item-title"><?php the_title(); ?></div>
        <div class="sline__item-text"><?php the_excerpt(); ?></div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="title2"><?php the_field('card_description');?></div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);"><?php echo pll__('Записаться','sign_up');?></a>
                            <a class="button transparent" href="<?php echo get_permalink(); ?>"><?php echo pll__('Подробнее','more_details');?></a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="<?php if(!empty(get_field('card_image'))) {
    the_field('card_image');
    } else {
        echo'/wp-content/uploads/2023/06/image-38-1.webp';
    }?>" alt="" width="760" height="424">
                                    </div>
                
                            <?php
                            }
                            }
                            else {
                            // Постов не найдено
                            }
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();
                            ?>

    </div>
  </div>
</section>
<?php
} else {
    // There is no child for this post

}
?>


    

<?php

$args = array(
    'post_parent' => get_the_ID(), // Current post's ID
);
$children = get_children( $args );
// Check if the post has any child
if ( empty($children) ) {
    ?>
<?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="about_us_section_second" class="section-grid how_we_work how_we_work_main">
        <?php $how_we_work_section = get_field('how_we_work_section', 2 );
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
                    </div>
                    <div class="about_us_section_second_images_second">
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_2['url']; ?>" alt="<?php echo $about_us_second_img_2['alt']; ?>">
</div>
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_3['url']; ?>" alt="<?php echo $about_us_second_img_3['alt']; ?>">
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
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
  <section id="about_us_section_second" class="section-grid how_we_work how_we_work_main">
        <?php $how_we_work_section = get_field('how_we_work_section', 580 );
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
                    </div>
                    <div class="about_us_section_second_images_second">
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_2['url']; ?>" alt="<?php echo $about_us_second_img_2['alt']; ?>">
</div>
<div>
<img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_second_img_3['url']; ?>" alt="<?php echo $about_us_second_img_3['alt']; ?>">
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
    <?php
  }
  
?>

<?php
} else {
    // There is no child for this post

}
?>

<section id="main-content" class="main-content">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content xpandable-block">
                <?php 
the_content();
?>
                
        </div>
    </section>

<?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="advantages_section" class="advantages_section">
        <?php
        $group_section = get_field('team_section', 2);
        $advantages = $group_section['advantages'];
        $team = $group_section['team'];
        $director_foto = $group_section['director_foto'];
        $director_text = $group_section['director_text'];
        $director_name = $group_section['director_name'];
        $director_signature = $group_section['director_signature'];
        ?>
        <div class="container">
            <h2>Почему стоит воспользоваться услугами ТАК?</h2>
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
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="advantages_section" class="advantages_section">
        <?php
        $group_section = get_field('team_section', 580);
        $advantages = $group_section['advantages'];
        $team = $group_section['team'];
        $director_foto = $group_section['director_foto'];
        $director_text = $group_section['director_text'];
        $director_name = $group_section['director_name'];
        $director_signature = $group_section['director_signature'];
        ?>
        <div class="container">
            <h2>Dlaczego warto skorzystać z usług TAK?</h2>
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
    <?php
  }
  
?>

 <section id="services_section" class="services_section">
  <div class="container" style="padding-left:0px;padding-right:0px">
  <h2 style="text-align: center;">Usługi</h2>
        <div class="services">

                                                                
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">
        <div class="sline__item-title">Wymiana koła zamachowego</div>
        <div class="sline__item-text"><p>Koło zamachowe to kluczowy element silnika samochodowego, który pełni wiele istotnych funkcji. Jego głównym zadaniem jest gromadzenie energii kinetycznej, co pozwala na płynne działanie silnika oraz redukcję drgań podczas pracy. Dzięki temu samochód działa stabilniej, a kierowca odczuwa większy komfort jazdy. Właściwie działające koło zamachowe wpływa również na trwałość innych podzespołów, takich jak sprzęgło czy [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">Wymiana koła zamachowego</a></h3>
                            <div class="title2">Usługa "Wymiana koła zamachowego" obejmuje kompleksową diagnostykę i wymianę koła zamachowego, które jest kluczowym elementem układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-kola-zamachowego.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana oleju automatycznej skrzyni biegów</div>
        <div class="sline__item-text"></div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">Wymiana oleju automatycznej skrzyni biegów</a></h3>
                            <div class="title2">Kategoria „Wymiana oleju automatycznej skrzyni biegów” obejmuje usługi i produkty związane z konserwacją automatycznych skrzyń biegów poprzez regularną wymianę oleju.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-oleju-automatycznej-skrzyni-biegow-2.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana oleju manualnej skrzyni biegów</div>
        <div class="sline__item-text"></div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">Wymiana oleju manualnej skrzyni biegów</a></h3>
                            <div class="title2">Usługa „Wymiana oleju manualnej skrzyni biegów” polega na wymianie zużytego oleju w manualnej skrzyni biegów na nowy, zgodny z wymaganiami producenta pojazdu.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-oleju-manualnej-skrzyni-biegow-2.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana automatycznej skrzyni biegów</div>
        <div class="sline__item-text"><p>Automatyczna skrzynia biegów to kluczowy element każdego nowoczesnego pojazdu. Jej pełna wymiana jest niezbędna w przypadku poważnych uszkodzeń, które mogą wpłynąć na bezpieczeństwo i komfort jazdy. Wymiana skrzyni biegów automatycznej jest zalecana w sytuacjach takich jak: Brak reakcji na zmiany biegów – jeśli samochód nie zmienia biegów lub wykonuje to w sposób nieprawidłowy. Wibracje i [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">Wymiana automatycznej skrzyni biegów</a></h3>
                            <div class="title2">Usługa "Wymiana automatycznej skrzyni biegów" polega na demontażu uszkodzonej skrzyni biegów oraz zamontowaniu nowej lub zregenerowanej, aby zapewnić prawidłowe funkcjonowanie układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-automatycznej-scruzini-biegow.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana manualnej skrzyni biegów</div>
        <div class="sline__item-text"><p>W dzisiejszych czasach coraz więcej kierowców decyduje się na wymianę manualnej skrzyni biegów na automatyczną. Taka decyzja może być podyktowana różnymi czynnikami, takimi jak komfort jazdy, łatwość obsługi czy oszczędność paliwa. W szczególności, jeśli często poruszasz się w miejskim ruchu, automatyczna skrzynia biegów może znacząco ułatwić codzienne dojazdy. Jak przebiega wymiana skrzyni biegów? Proces wymiany [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">Wymiana manualnej skrzyni biegów</a></h3>
                            <div class="title2">Usługa "Wymiana manualnej skrzyni biegów" obejmuje demontaż zużytej skrzyni oraz montaż nowej lub zregenerowanej, zapewniając pełną sprawność układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-manualnej-scruzini-biegow.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">
        <div class="sline__item-title">Wymiana pompy sprzęgła</div>
        <div class="sline__item-text"><p>Czy zauważyłeś, że zmiana biegów w Twoim samochodzie stała się trudniejsza? Wymiana pompy sprzęgła w TAK Serwis to gwarancja przywrócenia płynności jazdy i komfortu prowadzenia Twojego auta. Nasza stacja obsługi w Poznaniu specjalizuje się w profesjonalnej diagnostyce i naprawie układu sprzęgła w atrakcyjnych cenach — przekonaj się o tym sam, zapoznając się z oferta warsztatu. [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">Wymiana pompy sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana pompy sprzęgła" polega na wymianie uszkodzonej lub zużytej pompy, która odpowiada za prawidłowe działanie układu hydraulicznego sprzęgła.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-pompy-sprzegla.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">
        <div class="sline__item-title">Wymiana łożyska oporowego sprzęgła</div>
        <div class="sline__item-text"><p>Wymiana łożyska oporowego sprzęgła w Poznaniu to jedna z usług oferowanych przez TAK Serwis. Specjalizujemy się w kompleksowej naprawie układów samochodowych, w tym wymianie łożysk, które są istotnym elementem systemu sprzęgła. Sprawne działanie tego komponentu jest niezbędne dla prawidłowej pracy całego podzespołu napędowego, a jego awaria może prowadzić do poważnych uszkodzeń. Dlatego ważne jest, aby [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">Wymiana łożyska oporowego sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana łożyska oporowego sprzęgła" polega na diagnostyce oraz wymianie zużytego łożyska, które odpowiada za prawidłowe działanie sprzęgła.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-lozyska-oporowego-sprzegla.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">
        <div class="sline__item-title">Wymiana sprzęgła</div>
        <div class="sline__item-text"><p>Masz trudności ze zmianą biegów? Czy samochód szarpie, gdy tylko ruszysz z miejsca? Te i inne problemy mogą wskazywać na awarię sprzęgła. Przy pierwszych oznakach usterki tego podzespołu odwiedź naszą stację obsługi w Poznaniu: mechanicy zdiagnozują Twoje auto i przeprowadzą wymianę sprzęgła w przystępnej cenie. Kiedy należy wymienić sprzęgło na nowe? Sprzęgło to jedna z [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">Wymiana sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana sprzęgła" polega na kompleksowej wymianie zużytego zestawu sprzęgła, obejmującego tarczę, docisk oraz łożysko. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/przekladnia-sprzeglo.jpg" alt="" width="760" height="424">
                                    </div>
                
                            
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
<?php get_footer(); ?>