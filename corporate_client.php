<?php
/**
  * Template Name: Corporate client
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
<?php $corporate_first_screen = get_field('corporate_first_screen' );
        $corporate_first_screen_title = $corporate_first_screen['title'];
        $corporate_first_screen_img = $corporate_first_screen['image'];
        $corporate_first_screen_img_text1 = $corporate_first_screen['image_heading_1'];
        $corporate_first_screen_img_text_2 = $corporate_first_screen['image_heading_2'];
        $corporate_first_screen_advantages = $corporate_first_screen['advantages'];
        $corporate_first_screen_button = $corporate_first_screen['button'];
        ?>
<h1 class="corporate_heading"><?php echo $corporate_first_screen_title; ?></h1>

</div>
    </section>

    <section id="main-section" class="section-grid grid_corporate">
        
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                <div class="advantages">
                <?php foreach ($corporate_first_screen_advantages as $key => $item) { ?>
                <div class="item">
                    <div class="number_wrapper">
                    <img src="<?php echo $item['icon']; ?>" alt="">
                    <div class="number"><?php echo $item['number']; ?></div>
                    </div>
                
                    <p class="text"><?php echo $item['text']; ?></p>
                </div>
                <?php } ?>
            </div>

            <div class="">
        <!--<button class="popmake-1605 popmake-1613 button contrast mt-40"><?php echo $corporate_first_screen_button; ?></button> -->
        <a href="tel:+48880353599"
                        class="button contrast"><?php echo $corporate_first_screen_button; ?></a>
    </div>
                    
                </div>
                <div class="right-col right-col-corp">

                <div class="vacancies_img_wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $corporate_first_screen_img['url']; ?>" alt="<?php echo $corporate_first_screen_img['alt']; ?>"
                            width="<?php echo $corporate_first_screen_img['width']; ?>"
                            height="<?php echo $corporate_first_screen_img['height']; ?>">
                            <div class="vacancies_img_wrapper_2" style="background-image:url(/wp-content/uploads/2024/10/vector-2.png);">
                            <?php echo $corporate_first_screen_img_text1; ?>
                            </div>
                            <div class="vacancies_img_wrapper_1" style="background-image:url(/wp-content/uploads/2024/10/vector-1.png);">
                            <span><?php echo $corporate_first_screen_img_text_2; ?></span>
                            </div>

                            
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    <section id="main-section" class="section-grid corporate_client">
        <?php $corporate_client_first_section = get_field('corporate_client_first_section' );
        $corporate_client_first_section_title = $corporate_client_first_section['title'];
        $corporate_client_first_section_text = $corporate_client_first_section['text'];
        $corporate_client_first_section_link = $corporate_client_first_section['link'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">
                <?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>

                    <h1 class="title title-section"><?php echo $corporate_client_first_section_title; ?></h1>
                    <p class="description"><?php echo $corporate_client_first_section_text; ?></p>
                    <a href="<?php echo $corporate_client_first_section_link['url']; ?>"
                        class="button contrast"><?php echo $corporate_client_first_section_link['title']; ?></a>
                </div>
            </div>
        </div>
    </section> -->






    <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <section id="advantages_section" class="advantages_section corporate_client">
        <?php
        $group_section = get_field('corporate_team_section');
        $advantages = $group_section['advantages'];
	  
	  ?>
        <div class="container">
            <h2>Почему корпоративные клиенты выбирают Tak Serwis?</h2>
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
            <a href="/#contact_section"
                        class="button contrast mt-40">Отправить запрос</a>
        </div>
    </section>
    <?php
	  ?>
	 <section id="video_section">
    <div class="wrapper2">
        <iframe 
            class="js-video" 
            id="player" 
            width="100%" 
            height="800"
            src="https://www.youtube.com/embed/Lr74bZ4wqwk?enablejsapi=1&autoplay=1&mute=1"
            frameborder="0" 
            allowfullscreen>
        </iframe>
    </div>
</section>

<?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <section id="advantages_section" class="advantages_section corporate_client">
        <?php
        $group_section = get_field('corporate_team_section');
        $advantages = $group_section['advantages'];
        ?>
        <div class="container">
            <h2>Dlaczego klienci korporacyjni wybierają Tak Serwis?</h2>
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
            <a href="/#contact_section"
                        class="button contrast mt-40">Wyślij zapytanie</a>
        </div>
    </section>
	<?php
	
	?>
	 <section id="video_section">
    <div class="wrapper2">
        <iframe 
            class="js-video" 
            id="player" 
            width="100%" 
            height="800"
            src="https://www.youtube.com/embed/Lr74bZ4wqwk?enablejsapi=1&autoplay=1&mute=1"
            frameborder="0" 
            allowfullscreen>
        </iframe>
    </div>
</section>
    <?php
  }
  
?>



<section id="calculator" class="">
        <?php $group_section = get_field('testimonials_section');
        $title = $group_section['title'];
        $shortcode = $group_section['shortcode'];
        ?>
        <div class="container">


<h2 style="
    margin-bottom: 25px;
">Elastyczne stawki dla biznesu</h2>
      <p style="
    margin-bottom: 25px;
">Spersonalizowane taryfy w zależności od rodzaju usługi, możliwość otrzymania oferty handlowej na życzenie</p>  
            
            <?php echo do_shortcode('[CP_CALCULATED_FIELDS id="6"]'); ?>


            
    <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <div>
    <div class="calculator_button_text">
        Если не нашли нужной марки автомобиля или услуги, позвони нам и получи индивидуальное предложение
    </div>
        <button class="open-popup-btn button contrast">Получить цену</button>
    </div>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <div>
    <div class="calculator_button_text">
        Jeśli nie znalazłeś odpowiedniej marki samochodu lub usługi, zadzwoń do nas i otrzymaj indywidualną wycenę
    </div>
    
    <button class="open-popup-btn button contrast">Otrzymaj Wycenę</button></div>
    <?php
  }
			
  
?>
<section id="about_us_team_section" class="team_section">

            <?php $about_us_team_section = get_field('about_us_team_section');
        $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'];
        $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'];
        $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'];
        ?>

    <div class="container">

    <div class="header_section text_left">

        <h2 class=""><?php echo $about_us_team_section_heading; ?></h2> 

                  <div><?php echo $about_us_team_section_text; ?></div>    
    
    </div>

             


                        <div class="swiper swiper2">

                                <div class="swiper-wrapper">
    

                                        <?php 
                                        $args = array(
                                        'post_type' => 'page',
                                        'post_parent' => 1714,
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

                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>

                            </div>

                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>

                             
    </div>
</section>




<!--<section id="about_us_team_section" class="team_section">
            <?php $about_us_team_section = get_field('about_us_team_section');
        $about_us_team_section_heading = $about_us_team_section['about_us_team_section_heading'];
        $about_us_team_section_text = $about_us_team_section['about_us_team_section_text'];
        $about_us_team_section_text_2 = $about_us_team_section['about_us_team_section_text_2'];
        ?>
    <div class="container">
    <div class="header_section">
        <h2 class=""><?php echo $about_us_team_section_heading; ?></h2> 
                  <div><?php echo $about_us_team_section_text; ?></div>    
    </div>
                        <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            qqqqqqqq
                                        </div>
                                        <div class="swiper-slide">
                                           qqqqqqqq
                                        </div>
                                        <div class="swiper-slide">
                                            qqqqqqqq
                                        </div>
                                </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                            </div>
                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>                        
    </div>
</section>-->





<section id="about_us_team_section" class="team_section clients_logos">

            <?php $corporate_clients_list = get_field('corporate_clients_list');
        $corporate_clients_list_title = $corporate_clients_list['title'];
        $corporate_clients_list_images = $corporate_clients_list['images'];
        ?>

    <div class="container">

    <div class="header_section text_left">

        <h2 class=""><?php echo $corporate_clients_list_title; ?></h2> 

                  <div><?php echo $about_us_team_section_text; ?></div>    
    
    </div>

             


                        <div class="swiper swiper3">

                                <div class="swiper-wrapper">
    

                            <?php foreach ($corporate_clients_list_images as $key => $item) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $item['image']; ?>" alt="">

                
                </div>
                <?php } ?>
                                                        
                                </div>

                                        

                            </div>


<!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                            <div><?php echo $about_us_team_section_text_2; ?></div> 
                        </div>

                             
    </div>
</section>





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







    <section id="main-section" class="section-grid grid_vacancies">
        <?php $contacts_page = get_field('contacts_page', 2019 );
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
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                    
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_location-dot.svg" alt="">
      <?php echo $addresses_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <ul>
      <?php foreach ($addresses as $key => $item) { ?>

      <li><?php echo $item['addresses_item']; ?></li>
                
                <?php } ?>
      </ul>                               
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_time-flip.svg" alt="">
      <?php echo $working_hours_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <?php echo $working_hours_text; ?>                              
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_envelope.svg" alt="">
      <?php echo $email_heading; ?>
   </div>
   <div class="contact-section-item-text">
   <a class="" href="mailto:<?php echo $email_text; ?> "><?php echo $email_text; ?> </a>                              
   </div>
</div>
<div class="contact-section-item">
   <div class="contact-section-item-heading">
      <img src="https://takserwis.pl/wp-content/uploads/2023/06/fa6-solid_phone-flip.svg" alt="">
      <?php echo $phone_heading; ?>
   </div>
   <div class="contact-section-item-text">
      <a class="" href="tel:<?php echo $phone_link; ?>"><?php echo $phone_text; ?></a>                               
   </div>
</div>



                            <ul class="contact_iconLinks">
                <?php foreach ($footer_icon_links as $link) { ?>
                <li>
                    <a rel=”nofollow” href="<?php echo $link['url']; ?>" target="_blank" class="footer_about_iconLink">
                        <?php if ($link['icon']) { ?>
                        <img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['icon']['alt']; ?>"
                            width="<?php echo $link['icon']['width']; ?>"
                            height="<?php echo $link['icon']['height']; ?>">
                        <?php } ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
                    
                
                    
                    
                </div>
                <div class="right-col">





        <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            
        </div>


                </div>
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

<link
  rel="stylesheet"
  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"
/>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper.swiper1', {
  // Optional parameters
  loop: true,
slidesPerView: 2,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

</script>



<script>
const swiper2 = new Swiper('.swiper.swiper2', {
  // Optional parameters
  loop: true,
  slidesPerView: 3,
      spaceBetween: 25,

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
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


<script>
const swiper3 = new Swiper('.swiper.swiper3', {
  // Optional parameters
  loop: true,
  slidesPerView: 4,
      spaceBetween: 25,

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
        	breakpoints: {
            1023: {
            	slidesPerView: 4
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
<?php get_footer(); ?>