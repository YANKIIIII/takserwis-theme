<?php
/**
  * Template Name: About us
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>

<main class="main">

<section id="title_section" class="title_section">
<div class="container">  
    
<?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>
<h1><?php the_title(); ?></h1>

</div>
    </section>

    <section id="about_us_section" class="">
        <?php $about_us = get_field('about_us' );
        $about_us_img = $about_us['about_us_img'];
        $about_us_img_text = $about_us['about_us_text'];

        ?>
        <div class="container">
            <div class="">
            
                <div class="grid-bonus__content">

                <!-- <img src="http://takservice2/wp-content/uploads/2024/11/image.jpg" alt=""> -->

                <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $about_us_img['url']; ?>" alt="<?php echo $about_us_img['alt']; ?>"
                            width="<?php echo $about_us_img['width']; ?>"
                            height="<?php echo $about_us_img['height']; ?>">

                <div class="about_us_section_img_wrapper_1" style="background-image:url(https://takserwis.pl/wp-content/uploads/2024/11/vector1.png);">
                            <span><?php echo $about_us_img_text; ?></span>
                            </div>

                    
                
                    
                    
                </div>
            </div>
        </div>
    </section>

    <section id="about_us_section_second" class="section-grid">
        <?php $about_us_second_section = get_field('about_us_second_section' );
        $about_us_second_img = $about_us_second_section['about_us_second_img_1'];
        $about_us_second_img_2 = $about_us_second_section['about_us_second_img_2'];
        $about_us_second_img_3 = $about_us_second_section['about_us_second_img_3'];
        $about_us_second_advantages = $about_us_second_section['advantages'];
        $vacancies_img_text1 = $vacancies['vacancies_img_text1'];
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
                

                   <div class="advantages">
                   <?php foreach ($about_us_second_advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="number"><?php echo $item['number']; ?></div>
                    </div>
                
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
                                <!--<div class="item">
                    <div class="number_wrapper">
                    <img src="https://takservice2/wp-content/uploads/2024/05/frame23.webp" alt="">
                    <div class="number">280+</div>
                    </div>
                
                    <p class="text">rodzajów prac</p>
                </div>
                                <div class="item">
                    <div class="number_wrapper">
                    <img src="https://takservice2/wp-content/uploads/2024/05/frame12.webp" alt="">
                    <div class="number">12+</div>
                    </div>
                
                    <p class="text">miesięcy gwarancji</p>
                </div>-->



                     
                            </div>
                    
                    
                </div>
                <div class="right-col">

                <?php 
the_content();
?>

                </div>
            </div>
        </div>
    </section>


    <section id="historia_firmy" class="section-grid">
        <?php $about_us_history_section = get_field('about_us_history_section' );
        $about_us_history_section_item_1 = $about_us_history_section['item_1'];
        $about_us_history_section_item_2 = $about_us_history_section['item_2'];
        $about_us_history_section_item_3 = $about_us_history_section['item_3'];
        $about_us_history_section_item_4 = $about_us_history_section['item_4'];
        $about_us_history_section_item_5 = $about_us_history_section['item_5'];
        $about_us_history_section_item_6 = $about_us_history_section['item_6'];
		$about_us_history_section_item_7 = $about_us_history_section['item_7'];
        $about_us_history_section_heading = $about_us_history_section['heading'];
        $vacancies_img_text1 = $vacancies['vacancies_img_text1'];
        $vacancies_img_text_2 = $vacancies['vacancies_img_text_2'];
        $vacancies_title = $vacancies['vacancies_title'];
        $vacancies_text = $vacancies['vacancies_text'];
        $vacancies_our_vacancies = $vacancies['vacancies_our_vacancies'];
        ?>
        <div class="container">

        <h2 class="historia_firmy_heading"><?php echo $about_us_history_section_heading; ?></h2>
            <div class="historia_firmy_wrapper">

            <img class="historia_firmy_line" src="https://takserwis.pl/wp-content/uploads/2024/11/vector-2.svg" alt="">

            <div class="historia_firmy_item first">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_2.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_1; ?></h3>
            </div>

            <div class="historia_firmy_item second">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_wheel.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_2; ?></h3>
            </div>

            <div class="historia_firmy_item third">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_wheel.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_3; ?></h3>
            </div>

            <div class="historia_firmy_item_second_row fourth">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_wheel.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_4; ?></h3>
            </div>
            <div class="historia_firmy_item_second_row fifth">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_wheel.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_5; ?></h3>
            </div>
            <div class="historia_firmy_item_second_row sixth">
                <img src="https://takserwis.pl/wp-content/uploads/2024/11/icon_1.png" alt="">
                <h3 class="historia_firmy_item_heading"><?php echo $about_us_history_section_item_6; ?></h3>
            </div>
            
            </div>
        </div>
    </section>

<section id="video_section" class="">
<div class="wrapper2">
  <iframe class="js-video" id="player" type="text/html" width="100%" height="800"
  src="https://www.youtube.com/embed/O4oCmgE8opI?enablejsapi=1&autoplay=1&mute=1"
  frameborder="0"></iframe>    
</div>

</section>









<section id="about_us_team_section" class="team_section">

            <?php $about_us_team_section = get_field('about_us_team_section');
        $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'];
        $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'];
        $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'];
        ?>

    <div class="container">

             <h2 class="about_us_team_section_heading"><?php echo $about_us_team_section_heading; ?></h2> 

                  <div><?php echo $about_us_team_section_text; ?></div>    


                        <div class="swiper">

                                <div class="swiper-wrapper">
    

                                        <?php 
                                        $args = array(
                                        'post_type' => 'page',
                                        'post_parent' => get_the_ID(),
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





            



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"/>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  slidesPerView: 3,
      spaceBetween: 25,


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



</main>
<?php get_footer(); ?>