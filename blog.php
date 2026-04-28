<?php
/**
  * Template Name: Blog
 *  Template Post Type: page
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
                          $posts_per_page = 9;
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
<div class="blog_card_img">
<?php echo get_the_post_thumbnail(); ?>
</div>
<div class="blog_card_info">
<div class=""><?php echo get_the_date('d.m.Y'); ?></div>
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