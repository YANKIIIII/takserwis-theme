<?php
/**
  * Template Name: car single brand
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

    <section id="main-section" class="section-grid brand_car_section">
        <?php $brand_car_section = get_field('brand_car_section' );
        $brand_car_img = $brand_car_section['brand_car_img'];
        $brand_car_link = $brand_car_section['brand_car_link'];
        $brand_car_link_services = $brand_car_section['brand_car_link_services'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">
<div class="text-container">
<div class="limited-text">
                                        <?php the_content();?>
 </div>
 <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <button class="toggle-button">Показать больше</button>

    
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
<button class="toggle-button">Pokaż więcej</button>
    <?php
  }
  
?>

</div>
             
                    
                    
                </div>
                <div class="right-col">

                <div class="">
                        <img class=" "
                            src="<?php echo $brand_car_img['url']; ?>" alt="<?php echo $brand_car_img['alt']; ?>">
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section id="blog_cards" class="blog_cards_section">
<div class="container">  
    
<div class="blog_cards_wrapper">
    <?php 
                          $current = absint(
                            max(
                              1,
                              get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
                            )
                          );
                          $posts_per_page = 60;
                          $query          = new WP_Query(
                            [
                                'post_type' => 'page',
  'post_parent' => get_the_ID(),
                              'posts_per_page' => $posts_per_page,
                              'paged'          => $current,
                            ]
                          );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                        
<div id="post-<?php the_ID(); ?>">
<div class="blog_card_info">
<h2><a href="<?php the_permalink(); ?>" class="blog_card_info_link"><?php the_title(); ?></a></h1>
<div class="blog_card_info_content"><?php echo wp_trim_words( get_the_content(), 27, '...' ); ?></div> 
<div><a class="blog_card_info_link_more" href="<?php echo get_permalink(); ?>">
                <?php echo pll__('Подробнее','more_details');?></a></div>
</div>



</div><!-- #post-## -->


                                        
                            <?php
                            }
                            }
                            else {
                            // Постов не найдено
                            }

                            ?>

</div>
<div class="pagination_wrapper">
<?php 
                            echo wp_kses_post(
                                paginate_links(
                                  [
                                    'total'   => $query->max_num_pages,
                                    'current' => $current,
                                    'prev_text'    => __('<img src="/wp-content/uploads/2024/12/vector.png" alt="">'),
                                    'next_text'    => __('<img src="/wp-content/uploads/2024/12/vector1.png" alt="">'),
                                  ] 
                                )
                              );
                              ?>
</div>
<?php 
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();

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


<?php
$page_title = get_the_title();
?>
<section id="services_section" class="services_section">
  <div class="container">
    <div class="services wwwwwwwwwww">

                        <?php 
                          $args = array(
                              'posts_per_page' => -1,
                              'post_type' => 'services',
                              'post_parent' => 0
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



                                <div class="item card_item">
                                                <div class="content">
                                                <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <h3 class="title"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title(); ?> на <?php echo $page_title; ?></a></h3>
    <a class="button contrast" href="<?php echo get_permalink(); ?>">
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
  <h3 class="title"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title(); ?> w <?php echo $page_title; ?></a></h3>
  <a class="button contrast" href="<?php echo get_permalink(); ?>">
    <?php
  }
  
?>
                            
                            
                <?php echo pll__('Подробнее','more_details');?></a>
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

    <div class="services_section_button2 brand_car_link_services"><a href="<?php echo $brand_car_link_services['url']; ?>"
                        class="button contrast"><?php echo $brand_car_link_services['title']; ?></a></div>
  </div>
</section>


    







    
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
                              'post_type' => 'services',
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
?>
    

</main>
 <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButtons = document.querySelectorAll('.toggle-button');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const textContainer = this.previousElementSibling;

                    if (textContainer.style.webkitLineClamp === 'unset') {
                        textContainer.style.webkitLineClamp = 10;
                        this.textContent = 'Показать больше';
                    } else {
                        textContainer.style.webkitLineClamp = 'unset';
                        this.textContent = 'Свернуть';
                    }
                });
            });
        });
    </script>

    
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButtons = document.querySelectorAll('.toggle-button');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const textContainer = this.previousElementSibling;

                    if (textContainer.style.webkitLineClamp === 'unset') {
                        textContainer.style.webkitLineClamp = 10;
                        this.textContent = 'Pokaż więcej';
                    } else {
                        textContainer.style.webkitLineClamp = 'unset';
                        this.textContent = 'Zwiń';
                    }
                });
            });
        });
    </script>
    <?php
  }
  
?>
    
<?php get_footer(); ?>