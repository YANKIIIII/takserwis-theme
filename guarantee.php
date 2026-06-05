<?php
/**
  * Template Name: Guarantee
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


* Faq */

.faq {
    /* max-width: 500px;
    margin: 20px auto; */
}

.faq-item {
    margin-bottom: 5px;
    border: 1px solid #f9f9f9;
    border-radius: 18px;
    padding: 20px 40px;
    background: #f4f6f8;
    margin-bottom: 23px;
}

.faq-title {
    display: block;
    padding: 10px 15px;
    position: relative;

    color: #000;
    cursor: pointer;

    transition: background .2s ease-out;
    
}

/* .faq-title:after {
    content: "";
    display: block;

    border-style: solid;
    border-width: 8px 5px 0 5px;
    border-color: #000 transparent transparent transparent;

    position: absolute;
    top: 50%;
    right: 15px;

    transform: translateY(-50%);
} */

.faq-title:after {
    content: "";
    display: block;
    width: 15px;
    height: 15px;
    /* background: red; */
    background: url(https://takserwis.pl/wp-content/uploads/2024/12/vector3.png) no-repeat center center;
    position: absolute;
    top: 32%;
    left: -15px;
}



.faq-input {
    width: 0;
    height: 0;

    -webkit-appearance: none;
    appearance: none;

    position: absolute;
}


.faq-input:checked ~ .faq-title:after {
    /* border-style: solid; */
    /* border-width: 0 5px 8px 5px; */
    /* border-color: transparent transparent #000 transparent; */
    background: url(https://takserwis.pl/wp-content/uploads/2024/12/vector2.png) no-repeat center center;
}

.faq-input:checked ~ .faq-text {
    display: block;
}

.faq-text {
    display: none;
    padding: 10px 15px;

    color: #000;
    font-size: 14px;
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



    <section id="main-section" class="section-grid grid_vacancies">
        <?php $contacts_page = get_field('contacts_page' );
        $addresses_heading = $contacts_page['addresses_heading'];
        $addresses = $contacts_page['addresses'];
        $working_hours_heading = $contacts_page['working_hours_heading'];
        $working_hours_text = $contacts_page['working_hours_text'];
        $email_heading = $contacts_page['email_heading'];
        $email_text = $contacts_page['email_text'];
        $phone_heading = $contacts_page['phone_heading'];
        $phone_text = $contacts_page['phone_text'];
        $phone_link = $contacts_page['phone_link'];
        ?>

        <?php
$footer_options = get_field('footer_options', 'option');
$footer_about_title = $footer_options['about_block_title'];
$footer_about_text = $footer_options['about_block_text'];
$footer_icon_links = $footer_options['icon_links'];
$address = $footer_options['address'];
$address_icon = $address['icon'];
$time = $footer_options['time_work'];
$time_icon = $time['icon'];
$contacts = $footer_options['contacts'];
$footer_logo = $footer_options['footer_logo'];
$footer_copyright_text = $footer_options['copyright_text'];
?>
        <div class="container">

        <!-- <div class="faq">
                                                    <div class="faq-item">
            <input class="faq-input" type="checkbox" id="faq_1">
            <label class="faq-title" for="faq_1">Quis eros velit scelerisque tempus.</label>
            <div class="faq-text">
                Lorem ipsum dolor sit amet consectetur. Elit nunc ornare bibendum quam posuere id. Est leo at sit quis nibh sed fringilla potenti viverra. Et suspendisse nisi volutpat ipsum imperdiet justo. Lobortis id malesuada malesuada eu.
Aliquam at quam ligula nam mauris ut. Etiam massa convallis nunc vivamus ut. Auctor sapien nisi facilisi eget ac odio nunc sit. Adipiscing urna vitae cras aliquet diam bibendum leo nec magna. Laoreet eu elementum pulvinar aliquam senectus a sed. Proin orci urna lectus et at urna accumsan et vehicula.
            </div>
        </div><div class="faq-item">
            <input class="faq-input" type="checkbox" id="faq_2">
            <label class="faq-title" for="faq_2">Quis eros velit scelerisque tempus.</label>
            <div class="faq-text">
                Lorem ipsum dolor sit amet consectetur. Elit nunc ornare bibendum quam posuere id. Est leo at sit quis nibh sed fringilla potenti viverra. Et suspendisse nisi volutpat ipsum imperdiet justo. Lobortis id malesuada malesuada eu.
Aliquam at quam ligula nam mauris ut. Etiam massa convallis nunc vivamus ut. Auctor sapien nisi facilisi eget ac odio nunc sit. Adipiscing urna vitae cras aliquet diam bibendum leo nec magna. Laoreet eu elementum pulvinar aliquam senectus a sed. Proin orci urna lectus et at urna accumsan et vehicula.
            </div>
        </div><div class="faq-item">
            <input class="faq-input" type="checkbox" id="faq_3">
            <label class="faq-title" for="faq_3">Quis eros velit scelerisque tempus.</label>
            <div class="faq-text">
                44444444444
            </div>
        </div>
        
    </div> -->


    <div class="faq">
        <?php if( have_rows('guarantee') ): ?>
    
    <?php $num = 1; ?>
    <?php while( have_rows('guarantee') ): the_row(); 
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        ?>
        
        <div class="faq-item">
            <input class="faq-input" type="checkbox" id="faq_<?php echo $num; ?>">    
            <label class="faq-title" for="faq_<?php echo $num; ?>"><?php echo $question; ?></label>
            <div class="faq-text">
                <?php echo $answer; ?>
            </div>
        </div> 

        <?php $num++; ?>
    <?php endwhile; ?>
    
<?php endif; ?>

</div>


        </div>
    </section>

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
        <div class="container">
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
        <div class="container">
<div class="contact_section_img_wrapper">
<img src="/wp-content/uploads/2024/12/contact_image.jpg" alt="">
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