<?php
/*
Template Name: Цены
*/

get_header(); ?>

<style>
    .page-prices-layout {
        margin-top: 60px;
        background: #fff;
}
    
.page-prices-layout .prices-container {
    display: flex; 
    gap: 30px;     
    margin: 40px auto; 
    padding: 0 15px;   
}

.page-prices-layout .services-column {
    flex: 1; 
    max-width: 25%; 
    background-color: #f4f6f8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.page-prices-layout .subservices-column {
    flex: 2; 
    /* max-width: 60%; */
    background-color: #ffffff;
    /* padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
}

.page-prices-layout h2 {
    margin-top: 0;
    border-bottom: 2px solid #eeeeee;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #333;
}

/* Стилі для списку послуг */
.page-prices-layout .service-list {
    list-style: none;
    padding: 0;
    margin: 0;
    padding-left: 20px;
}

.page-prices-layout .service-item {
    /* margin-bottom: 15px; */
    padding-bottom: 12px;
    padding-left: 6px;
    /* border-bottom: 1px dashed #dddddd; */
    cursor: pointer; 
    transition: all 0.3s ease;
}

.page-prices-layout .service-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.page-prices-layout .service-item:hover {
    background-color: #f0f0f0; 
    padding-left: 10px;
    border-radius: 4px;
}

.page-prices-layout .service-title-link {
    font-weight: 400;
    font-size: 14px;
    line-height: 150%;
    color: #1a1924;
    text-decoration: none;
    display: block; 
    padding: 5px 0;
}

.page-prices-layout .service-title-link:hover {
    text-decoration: underline;
}

.page-prices-layout .service-description {
    font-size: 0.9em;
    color: #555;
    margin-top: 8px;
    padding-left: 5px; 
}


#subservices-display {
    margin-top: 15px;
}

#subservices-display ul {
    list-style: none;
    padding: 0;
}

#subservices-display li {
    display: flex; 
    justify-content: space-between; 
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

#subservices-display li:last-child {
    border-bottom: none;
}

.subservice-title {
    font-weight: 500;
    color: #333;
}

.subservice-price {
    font-weight: bold;
    color: #0073aa; 
}
.services-column .service-list .service-item{
    position: relative;
    }
.services-column .service-list .service-item.active-service a{
        color: #ff9d42; 
    }
    .services-column .service-list .service-item::before{
        content: '';
    position: absolute;
    left: -10px;
    top: 38%;
    transform: translateY(-50%);
    width: 3px;
    height: 3px;
    border-radius: 50%;
    border: 1px solid #999;
    background-color: white;
    z-index: 1;
    }
    
    .services-column .service-list .service-item.active-service::before {
    background-color: #FF9D42; 
    border: none;  
    width: 4px;
    height: 4px;
  }
  .subservices-text-wrapper{
    display: flex;
  }
  .subservices-text-wrapper a{
    min-width: 260px;
    margin-left: 30px;
  }










  .service-prices-page .header {
    background-color: #f4f6f8;
    color: #1a1924;
    font-weight: 500;
    font-size: 14px;
    padding: 5px;
    width: 100%;
    box-sizing: border-box;
    text-align: center;
    display: flex;
    justify-content: space-between;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    padding: 13px 25px 13px 25px;
  }
  .service-prices-page .item {
    font-weight: 500;
    font-size: 14px;
    padding: 5px;
    width: 100%;
    box-sizing: border-box;
    text-align: center;
    display: flex;
    justify-content: space-between;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    padding: 13px 25px 13px 25px;
    border-bottom: 1px solid rgba(26, 25, 36, 0.2);
  }
  .service-prices-page .item:last-child {
    border-bottom: none;
  }
  .service-prices-page {
        border-radius: 8px;
        border: 1px solid rgba(26, 25, 36, 0.2);
        margin-top: 30px;
  }












@media (max-width: 768px) {
    .page-prices-layout .prices-container {
        flex-direction: column; 
        gap: 20px;
    }
    .page-prices-layout .services-column{
        max-width: 100%; 
        flex: none; 
        background-color: none;
     padding: 0px;
border-radius: 0px;
    box-shadow: none;
    }
    .page-prices-layout .services-column,
    .page-prices-layout .subservices-column {
        max-width: 100%; 
        flex: none; 
    }
    .service-list-toggle {
        padding: 10px;
        background-color: #ff9d42;
        border-radius: 14px;
        color: #fff;
        cursor: pointer;
        display: flex
;
    justify-content: space-between;
}

.service-list-toggle i {
    margin-right: 5px;
}

.active-service .service-title-link i.fas.fa-check {
    margin-left: 5px;
    color: green; 
}
.subservices-text-wrapper{
    flex-direction: column;
  }
  .subservices-text-wrapper a {
    min-width: 250px;
    margin-left: 0px;
    margin-top: 15px;
}
}
</style>

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

<div id="" class="content-area page-prices-layout">
    <div class="container prices-container">
        <div class="services-column">

            <?php
            // Запрос для получения всех услуг
            $args_services = array(
                'post_type'      => 'services',
                'posts_per_page' => -1, // Вывести все услуги
                'orderby'        => 'title',
                'order'          => 'ASC',
                'post_parent'    => 0, 
            );
            $services_query = new WP_Query( $args_services );

            if ( $services_query->have_posts() ) : ?>
                <ul class="service-list">
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <li class="service-item">
                            <a href="#" class="service-title-link" data-service-id="<?php echo get_the_ID(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <?php if ( get_field('service_description') ) : ?>
                                <div class="service-description">
                                    <?php the_field('service_description'); ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Услуги не найдены.', 'your-text-domain' ); ?></p>
            <?php endif; ?>
        </div> <!-- /.services-column -->


        <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <div class="subservices-column">
            <div class="subservices-text-wrapper">
            <div>Если вы не можете найти нужную вам услугу, позвоните нам и получите РАСЧЁТ СТОИМОСТИ В ТЕЧЕНИЕ ЧАСА!</div>
            <a href="#contact_section" class="button contrast" target="_blank">Получить стоимость</a>
            </div>
            
            <div id="subservices-display">
                <p>Выберите услугу из списка слева, чтобы увидеть подробности и цены.</p>
            </div>
        </div>

    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
<div class="subservices-column">
            <div class="subservices-text-wrapper">
            <div>Jeśli nie możesz znaleźć usługi, której potrzebujesz, zadzwoń do nas i uzyskaj WYCENĘ W CIĄGU GODZINY!</div>
            <a href="#contact_section" class="button contrast" target="_blank">Otrzymaj Wycenę</a>
            </div>
            
            <div id="subservices-display">
                <p>Wybierz usługę z listy po lewej stronie, aby zobaczyć szczegóły i ceny.</p>
            </div>
        </div>
    <?php
  }
  
?>
        
    </div> <!-- /.prices-container -->
</div><!-- #primary -->

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
?>

<?php
get_footer();
?>