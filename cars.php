<?php
/**
  * Template Name: car brands
 * Template Post Type: page
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
    padding: 70px 0 0px 0;
    padding-bottom: 70px;
}
#services_section.vacancies .services .item img {
    width: auto;
    height: auto;
    -o-object-fit: cover;
    object-fit: cover;
    position: absolute;
    right: 46px;
    top: 20px;
    transition: top .6s;
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
    background-color: #F4F6F8;
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
@media (min-width: 320px) and (max-width: 767px) {
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


    <section id="main-content" class="main-content page_cars_desc">
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content xpandable-block1">
                <?php 
the_content();
?>
                
        </div>
    </section>

    

    <section id="services_section" class="services_section vacancies cars">
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
  'posts_per_page' => -1,
  'order' => 'ASC'

                          );

                            $query = new WP_Query( $args );
                            $totalpost = $query->found_posts;
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                        



<div class="item card_item">
                                                <div class="content">
                            <h3 class="title"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a class="button contrast" href="<?php echo get_permalink(); ?>">
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