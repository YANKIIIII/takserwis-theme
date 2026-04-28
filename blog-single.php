<?php
/**
 * Template Name: Blog single
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
.grid-bonus__content2222 {
    float: right;
    width: 600px;
    height: 400px;
    margin-left: 40px;
}
.grid-bonus__content2222 img{
    object-fit: cover;
    height: 100%;
}







.page {
    border-radius: 8px;
    background: #f4f6f8;
    padding: 0;
}
.page .blog_card_img{
    height: 270px;
}
.page .blog_card_img img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: 8px 8px 0px 0;
}
.blog_card_info_link{
    font-weight: 700;
    font-size: 20px;
    line-height: 150%;
    color: #1a1924;
}
.blog_card_info{
    padding: 15px 10px 15px 10px;
}
.blog_card_info_link_more{
    font-weight: 700;
    font-size: 14px;
    line-height: 150%;
    color: #ff9d42;
    position: relative;
}


.blog_card_info_content {
    margin-bottom: 10px;
}
.blog_card_info_link_more::before {
    content: "";
    position: absolute;
    left: 130px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 100px;
    height: 100px;
    background-image: url(/wp-content/uploads/2024/10/frame-44.png);
    top: 2px;
    font-size: 36px;
}
.post_title {
    margin-bottom: 20px;
}
.post_date {
    margin-bottom: 20px;
}
.read_also_heading {
    margin-bottom: 20px;
}
.yoast-breadcrumbs{
    margin-bottom: 40px;
        margin-top: 110px;
}
@media (min-width: 320px) and (max-width: 767px) {
.grid-bonus__content2222 {
    float: none;
    width: 100%;
    height: 400px;
    margin-left: 0px;
    margin-bottom: 20px;
}
.yoast-breadcrumbs {
    margin-bottom: 40px;
    margin-top: 60px;
}
.page {
    padding: 20px 0 80px 0;
}
.title_section {
    padding-top: 1px;
    padding-bottom: 0px;
    margin-bottom: -60px;
}
#employee .employee_title {
    font-weight: 700;
    font-size: 24px;
    line-height: 130%;
    color: #1a1924;
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

</div>
    </section>
    

    <section id="employee" class="section-grid">
        <?php $employee = get_field('employee' );
        $employee_img = $employee['employee_img'];
        $employee_job_title = $employee['employee_job_title'];
        ?>
        <div class="container">
        <h1 class="employee_title post_title">
<?php the_title(); ?>   
    </h1>
    <div class="post_date"><?php echo get_the_date('d.m.Y'); ?></div>
            <div class="22qqq">
            


                <div class="grid-bonus__content">

                <div class="grid-bonus__content2222">
                <?php
                echo get_the_post_thumbnail( $post->ID, 'full' ); 
        ?>
                </div>
                
                <?php 
the_content();
?>

                
  
                </div>
            </div>
        </div>
    </section>

    <style>
  .swiper {
  width: 100%;
  /* height: 100%!important; */
  min-height: 250px!important;
}

</style>





<section id="about_us_team_section" class="team_section">
                <div class="container">
                <h2 class="read_also_heading">Przeczytaj także</h2>           
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->


    

                        <?php 
                          $args = array(
                              'post_type' => 'page',
                              'post_parent'         => 2080,
  'posts_per_page' => -1
                          );

                            $query = new WP_Query( $args );
                            $totalpost = $query->found_posts;
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                                        


                                        <div class="swiper-slide">
                                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="blog_card_img">
<?php echo get_the_post_thumbnail(); ?>
</div>
<div class="blog_card_info">
<div class=""><?php echo get_the_date('d.m.Y'); ?></div>
<h2><a href="<?php the_permalink(); ?>" class="blog_card_info_link"><?php the_title(); ?></a></h2>
<div class="blog_card_info_content"><?php echo wp_trim_words( get_the_content(), 27, '...' ); ?></div> 
<div><a href="<?php the_permalink(); ?>" class="blog_card_info_link_more">Przeczytaj artykuł</a></div>
</div>



</div><!-- #post-## -->

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
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <!-- <div class="swiper-scrollbar"></div> -->
</div>


            </div>
        </div>
    </section>

    <section id="contact_section" class="contact_section">
                <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img second_center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3462473282734!2d16.871539077023517!3d52.3822732464169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704453aee0505cf%3A0x75b1d7966f4fbca3!2zV8SZZ2xvd2EgOS8xMSwgNjAtMTIyIFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1722533885730!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa Węglowa"></iframe>
            </div>
            <div class="wrapp_img third_center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.424511093465!2d16.934006577022632!3d52.36272214786157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045a8cbcfe2133%3A0x55aae88399434e16!2zxZt3acSZdGVnbyBBbnRvbmllZ28gNjhDLCA2MS0zNTkgUG96bmHFhCwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sby!4v1722555205985!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa św. Antoniego"></iframe>
            </div>
			<div class="wrapp_img fourth_center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.701249411396!2d16.8947197!3d52.44832639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044368c7cb54a9%3A0xe74bc2c1ba387447!2zU3RyemVzennFhHNrYSA2MSwgNjAtNDc5IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1765161166614!5m2!1sru!2sbys" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Strzeszyńska 61, 60-479 Poznań"></iframe>
			</div>
            <div class="wrapp">
                <div class="content">
                    <h2>Napisz do nas!</h2>
                    <p>A nasi specjaliści Państwu pomogą.</p>
                </div>
                
<div class="wpcf7 js" id="wpcf7-f573-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/#wpcf7-f573-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="573">
<input type="hidden" name="_wpcf7_version" value="5.8.7">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f573-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<label> <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Twoje imię i nazwisko" value="" type="text" name="your-name"></span> </label>
<label> <span class="wpcf7-form-control-wrap" data-name="tel-351"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Numer telefonu" value="" type="tel" name="tel-351"></span> </label>
<label class="textarea-label"> <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Dodatkowe informacje (opcjonalnie)" name="your-message"></textarea></span> </label>
<input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Wyślij"><span class="wpcf7-spinner"></span>
<span class="wpcf7-form-control-wrap" data-name="acceptance-72">Klikając przycisk, wyrażasz zgodę na przetwarzanie swoich danych osobowych i akceptujesz <a href="/policy/">Umowę użytkownika</a></span><input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}"><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
            </div>
        </div>
    </section>



            



<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
      slidesPerView: 1
      // centeredSlides: true, 
    }
  }
});
</script>






</main>
<?php get_footer(); ?>