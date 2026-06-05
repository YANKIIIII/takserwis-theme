<?php
/**
  * Template Name: Blog
 *  Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>
<style>
        #advantages_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
    margin-bottom: -30px;
}
#services_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
}
#services_section.vacancies {
    background-color: #f4f6f8;
    padding: 70px 0 0px 0;
    padding-bottom: 70px;
}

.vacancies_img_wrapper_1 {
    bottom: -100px;
    position: absolute;
    right: 50px;
    width: 525px;
    height: 204px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 60px;
}
.vacancies_img_wrapper_1 span{
    position: relative;
    top: -20px;
}
.vacancies_img_wrapper {
    position: relative;
}
.vacancies_img_wrapper_2 {
    bottom: 76px;
    position: absolute;
    right: 128px;
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
.card_item .vacancies_item_button {
    color: #ff9d42;
    position: relative;
}
.card_item .vacancies_item_button::before {
    content: "";
    position: absolute;
    left: 55px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 100px;
    height: 100px;
    background-image: url(/wp-content/uploads/2024/10/frame-44.png);
    top: 3px;
    font-size: 36px;
}
html[lang=ru-RU] .card_item .vacancies_item_button::before {
    content: "";
    position: absolute;
    left: 85px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 100px;
    height: 100px;
    background-image: url(/wp-content/uploads/2024/10/frame-44.png);
    top: 3px;
    font-size: 36px;
}
#main-section.grid_vacancies {
    background-color: #ffffff;
    margin-top: 30px;
}
#services_section.vacancies .services .item {
    display: block;
    background-color: #ffffff;
    border-radius: 14px;
    /* grid-template-columns: repeat(2, 1fr); */
    padding: 20px 30px;
    height: 160px;
    position: relative;
    overflow: hidden;
    align-items: center;
    transition: color .3s;
    color: #1a1924;
}
.vacancies_item_price_wrapper {
    display: flex;
    /* justify-content: unset; */
    margin-left: auto;
    position: absolute;
    right: 50px;
    bottom: 20px;
}
.vacancies_item_price {
    margin-right: 20px;
    font-weight: 700;
    font-size: 20px;
    /* line-height: 150%; */
    color: #ff9d42;
}
.header_section_vacancies {
    text-align: left;
}
.vacancies_title_content {
    margin-bottom: 30px;
}
#main-section.grid_vacancies .grid-bonus__content {
    order: 0;
    align-self: auto;
}





 .blog_cards_wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px 20px;
    margin-bottom: 40px;
}
.blog_cards_wrapper > div{
    border-radius: 8px;
    background: #f4f6f8;
}
.blog_cards_wrapper .blog_card_img{
    height: 270px;
}
.blog_cards_wrapper .blog_card_img img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 8px 8px 0px 0;
}
.blog_cards_wrapper .blog_card_info_link{
    font-weight: 700;
    font-size: 20px;
    line-height: 150%;
    color: #1a1924;
}
.blog_cards_wrapper .blog_card_info{
    padding: 15px 10px 15px 10px;
}
.blog_cards_wrapper .blog_card_info h2{
    font-weight: 700;
    font-size: 20px;
    line-height: 150%;
    color: #1a1924;
    margin-bottom: 10px;
    margin-top: 10px;
}
.blog_cards_wrapper .blog_card_info_link_more{
    font-weight: 700;
    font-size: 14px;
    line-height: 150%;
    color: #ff9d42;
    position: relative;
    transition: color .6s;
}
.blog_cards_wrapper .blog_card_info_link_more:hover {
    color: #1a1924;
}


.blog_cards_wrapper .blog_card_info_link_more::before {
    content: "";
    position: absolute;
    left: 60px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 100px;
    height: 15px;
    background-image: url(/wp-content/uploads/2024/10/frame-44.png);
    top: 2px;
    font-size: 36px;
}
html[lang=ru-RU] .blog_cards_wrapper .blog_card_info_link_more::before {
    content: "";
    position: absolute;
    left: 70px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 100px;
    height: 15px;
    background-image: url(/wp-content/uploads/2024/10/frame-44.png);
    top: 2px;
    font-size: 36px;
}
.blog_card_info_content {
    margin-bottom: 10px;
}

.page-numbers {
	color: #000000;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(26, 25, 36, 0.72);
    border-radius: 8px;
    padding: 10px;
    width: 32px;
    height: 32px;
    margin-right: 10px;
}
.page-numbers.current {
	color: #ff9d42;
    border: 1px solid #ff9d42;
}
#title_section h1 {
	margin-bottom: 50px;
}
.pagination_wrapper {
	display: flex;
    justify-content: center;
    padding-bottom: 50px;
}
.blog_cards_section {
	padding: 60px 0;
    padding-bottom: 50px;
}
@media (min-width: 320px) and (max-width: 767px) {
.page {
    padding: 20px 0 80px 0;
}
.title_section {
    padding-top: 1px;
    padding-bottom: 0px;
    margin-bottom: -60px;
}
.blog_cards_wrapper {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
}
.vacancies_img_wrapper img{
    width: 100%;
}
.vacancies_img_wrapper_2 {
    bottom: 39px;
    position: absolute;
    right: 3px;
    z-index: 9;
    width: 347px;
    height: 68px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 28px;
    transform: scale(0.7);
}
.vacancies_img_wrapper_1 {
    bottom: -100px;
    position: absolute;
    right: -88px;
    width: 525px;
    height: 204px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 60px;
    transform: scale(0.7);
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