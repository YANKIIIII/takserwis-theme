<?php
/**
 * Template Name: Service
 * Template Post Type: services
 */
global $post;
?>
<?php get_header(); ?>
<main class="main">

<section id="main-section" class="section-grid service_info">
        <?php $main_section = get_field('service_page');
        $main_section_img = $main_section['main_section_img'];
        $main_section_title = $main_section['main_section_title'];
        $main_section_text = $main_section['main_section_text'];
        $form = $main_section['form'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                <?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>
                <h1><?php the_title(); ?></h1>
                    <p class="description"><?php echo $main_section_text; ?></p>
                    <?php echo do_shortcode($form) ?>
                </div>
                <div class="right-col">
                    <div class="wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $main_section_img['url']; ?>" alt="<?php echo $main_section_img['alt']; ?>"
                            width="<?php echo $main_section_img['width']; ?>"
                            height="<?php echo $main_section_img['height']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="services_section" class="services_section">
  <div class="container">
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
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);"><?php echo pll__('Записаться','sign_up');?></a>
                            <a class="button" href="<?php echo get_permalink(); ?>"><?php echo pll__('Подробнее','more_details');?></a>
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



<section id="main-content" class="main-content">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
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
<?php get_footer(); ?>