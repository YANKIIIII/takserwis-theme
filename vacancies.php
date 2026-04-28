<?php
/**
  * Template Name: vacancies_new
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

    <section id="main-section" class="section-grid grid_vacancies">
        <?php $vacancies = get_field('vacancies' );
        $vacancies_img = $vacancies['vacancies_img'];
        $vacancies_img_text1 = $vacancies['vacancies_img_text1'];
        $vacancies_img_text_2 = $vacancies['vacancies_img_text_2'];
        $vacancies_title = $vacancies['vacancies_title'];
        $vacancies_text = $vacancies['vacancies_text'];
        $vacancies_our_vacancies = $vacancies['vacancies_our_vacancies'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                    <div class="vacancies_img_wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $vacancies_img['url']; ?>" alt="<?php echo $vacancies_img['alt']; ?>"
                            width="<?php echo $vacancies_img['width']; ?>"
                            height="<?php echo $vacancies_img['height']; ?>">
                            <div class="vacancies_img_wrapper_2" style="background-image:url(https://takserwis.pl/wp-content/uploads/2024/10/vector-2.png);">
                            <?php echo $vacancies_img_text1; ?>
                            </div>
                            <div class="vacancies_img_wrapper_1" style="background-image:url(https://takserwis.pl/wp-content/uploads/2024/10/vector-1.png);">
                            <span><?php echo $vacancies_img_text_2; ?></span>
                            </div>

                            
                    </div>
                
                    
                    
                </div>
                <div class="right-col">
<h2 class="vacancies_title_content">
        <?php echo $vacancies_title; ?>   
    </h2>

<div class="">
<?php echo $vacancies_text; ?>  
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services_section" class="services_section vacancies">
  <div class="container">
  <div class="header_section_vacancies">

        <h2 class="title">
        <?php echo $vacancies_our_vacancies; ?>
            </h2>
    
</div>
    <div class="services">

                        <?php 
                          $args = array(
                              'post_type' => 'page',
  'post_parent' => get_the_ID(),
  'posts_per_page' => -1
                          );

                            $query = new WP_Query( $args );
                            $totalpost = $query->found_posts;
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                        



<a class="vacancies_item_button" href="<?php echo get_permalink(); ?>">
                                <div class="item card_item">
                                
    <div class="content">
        <?php $vacancie = get_field('vacancie' );
        $vacancie_price = $vacancie['vacancie_price'];
        $vacancie_employment = $vacancie['vacancie_employment'];
        ?>
            <div>
            <?php echo $vacancie_employment;?>
            </div>
        
        <h3 class="title"><span class=""><?php the_title(); ?></span></h3>


        <div class="vacancies_item_price_wrapper">
            <div class="vacancies_item_price">
            <?php echo $vacancie_price;?>
            </div>

            <div>
            <span class="vacancies_item_button">
            <?php echo pll__('Подробнее','more_details');?></span>
            </div>
        </div>

    </div>
    
</div>
</a>
                
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
</main>
<?php get_footer(); ?>