<?php
/**
 * Template Name: тормозная система
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>

<main class="main">
<div style="background:#fff">
    <div class="container">
        <article class="page_content">

            <a class="back_button"
                href="<?php echo pll_home_url(); ?>"><?php echo pll__('Вернуться на главную','back-home');?></a>


            <h1 class="h1"><?php the_title(); ?></h1>

                        <div class="grid-bonus__content">

                <div class="grid-bonus__content2222" style=" display: flex; justify-content: center; margin-top:15px;margin-bottom:15px;">
                <?php
                echo get_the_post_thumbnail( $post->ID, 'full' ); 
        ?>
                </div>
                
                <?php 
the_content();
?>

                
  
                </div>

            <?php $page_text = get_field('page_text');
				if($page_text){
					echo('<div class="page_text">'.$page_text.'</div>');
				};
			?>
        </article>
    <section id="services_section" class="services_section">
  <div class="container" style="padding-left:0px;padding-right:0px">
  <h2 style="text-align: center;">Usługi</h2>
     <div class="services"><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/diagnostyka/">Diagnostyka układu hamulcowego</a></h3><div class="title2">Usługa "Diagnostyka układu hamulcowego" polega na szczegółowej analizie stanu układu hamulcowego, w tym klocków, tarcz, przewodów i płynów, za pomocą specjalistycznych narzędzi diagnostycznych.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/diagnostyka/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/diagnostyka-uklad-hamulcowy.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-tarcz-hamulcowych/">Wymiana tarcz hamulcowych</a></h3><div class="title2">Usługa "Wymiana tarcz hamulcowych" polega na wymianie zużytych lub uszkodzonych tarcz hamulcowych, które odpowiadają za równomierne rozłożenie siły hamowania w układzie.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-tarcz-hamulcowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-tarcz-hamulcowych.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-bebnow-hamulcowych/">Wymiana bębnów hamulcowych</a></h3><div class="title2">Usługa "Wymiana bębnów hamulcowych" polega na wymianie zużytych lub uszkodzonych bębnów hamulcowych, które współpracują z szczękami hamulcowymi, zapewniając skuteczne hamowanie pojazdu.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-bebnow-hamulcowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-bebnow-hamulcowych.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-plynu-hamulcowego/">Wymiana płynu hamulcowego</a></h3><div class="title2"></div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-plynu-hamulcowego/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-plynu-hamulcowego-2.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-klockow-hamulcowych/">Wymiana klocków hamulcowych</a></h3><div class="title2">Usługa "Wymiana klocków hamulcowych" polega na wymianie zużytych klocków hamulcowych, które są odpowiedzialne za tarcie niezbędne do skutecznego hamowania pojazdu.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-klockow-hamulcowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-klockow-hamulcowych.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/naprawa-zaciskow-hamulcowych/">Naprawa zacisków hamulcowych</a></h3><div class="title2">Podaj swoje dane kontaktowe, oszacujemy koszt naprawy.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/naprawa-zaciskow-hamulcowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/naprawa-zaciskow-hamulcowych.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-zaciskow-hamulcowych/">Wymiana zacisków hamulcowych</a></h3><div class="title2">Usługa "Wymiana zacisków hamulcowych" polega na wymianie uszkodzonych lub zużytych zacisków, które odpowiadają za dociskanie klocków hamulcowych do tarczy w celu skutecznego zatrzymania pojazdu.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-zaciskow-hamulcowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-zaciskow-hamulcowych.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-przewodow-hamulcowych-elastycznych/">Wymiana przewodów hamulcowych elastycznych</a></h3><div class="title2">Usługa "Wymiana przewodów hamulcowych elastycznych" polega na wymianie zużytych lub uszkodzonych elastycznych przewodów hamulcowych, które przekazują ciśnienie płynu hamulcowego do układu hamulcowego.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-przewodow-hamulcowych-elastycznych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-przewodow-hamulcowych-elastichnich.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-przewodow-hamulcowych-metalowych/">Wymiana przewodów hamulcowych metalowych</a></h3><div class="title2">Usługa "Wymiana przewodów hamulcowych metalowych" polega na wymianie zużytych lub uszkodzonych metalowych przewodów hamulcowych, które transportują płyn hamulcowy w systemie.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-przewodow-hamulcowych-metalowych/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-przewodow-hamulcowych-metalovich.jpg" alt="" width="760" height="424"></div><div class="item item_buttons"><div class="content"><h3 class="title"><a class="" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-linki-hamulca-recznego/">Wymiana linki hamulca ręcznego</a></h3><div class="title2">Usługa "Wymiana linki hamulca ręcznego" polega na diagnozowaniu i wymianie zużytej lub uszkodzonej linki, która odpowiedzialna jest za działanie hamulca ręcznego w pojeździe.</div><div class="button_wrapper">
<a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
<a class="button transparent" href="https://takserwis.pl/services/uklad-hamulcowy/wymiana-linki-hamulca-recznego/">Więcej</a></div></div>
<img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-linki-hamulca-recznego.jpg" alt="" width="760" height="424"></div></div>
  </div>
</section>
<section id="contact_section" class="contact_section" style="padding-top:30px; margin-top:30px;">
                <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h2>Оставь заявку!</h2>
                    <p>Напишите нам и мы Вам с радостью поможем!</p>
                </div>
                
<div class="wpcf7 js" id="wpcf7-f179-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/ru/services/#wpcf7-f179-o2" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="179">
<input type="hidden" name="_wpcf7_version" value="5.8.7">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f179-o2">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="_wpcf7dtx_version" value="4.5.0">
<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA47xs9ROq3iTJzS4LPOA4wOaEX_seRNLFsu8uPbqvO4FLhXmvLgauhZva6tmvxSYIXUzVUhEBGxX0h0VTpPRBteqmEPJpqQXsNQTDcSaR9ICPRYve9JjygRwC_ufdLiQJzOkohuOlHl-A2_hH1THk8oqUd7YZeFGCJA5GxROrlMrgNhdvf5lXpl363IfcUttvb8CwMbU7M0UiXS8jD-14T8aCpfrB110GEi6gdILiCeyYv8GjhZql_PBEeoXHC37ISYmVAi3R9LLPhbCRAgEHKoC02OmACQxDeQ3xqez9R26daz8Ed6kHneWZYBl5eILPMCEXXpvEwc32skgdn8g1eJs_0lnzD2MEtCyE900ot6IwvlRmtOZJP2Yue7FSYgNiNLPtmwnP0yvEOcteJsohlJLNUB3ixDdR44Y67Y9p89QpBXAeLvFUNarIggG_JWhlOzKbQfoMZqYXFNHDxERQEr-mIesZc3hPjFFhm9Zcp6rcjm0gW3TUjeRqkJtynddlyKWOYXCrwiFycNGJB_vhBuiZyW0SsdGVMRNXGChtDaSM0qSFCY95FIQ5SinRl_E9QGcAZ0QxJYO900vdm2ImM-LfnSHZsjIAYBUJGgGf7HvBIiteLO270Pw8yOXuLMx7PU4IzpwiWs8z-IDgyi8-X-yw9u-agWKTgJTJYW4wSocNHhR0WobKNz242nQ25fOsPUCvupfDdRUS9cY8I3kA4o93nuRELU1xwB0W1t4VqrS1vOUO4WDKKWlbzS-F-4TCeJTaX40RkyanpXLoMoRjwgqnfqo1TT3txGnIeid33WlDdVAfPHtoctU4hs7YUv691PkFs_h7ByUgTP2wBngsjpurVXRuZa2LJFC4Ie2OotUboffmDsTm6AKPIl5e48-J9VfRxhiRMpDGrtCO2vkjjgLEXTK8XG7SM23AdnvmyXMw3Zq31vqQjP_9Q9ApGut2b9EOdsHzg0mZupIj9Ui1j_71QOBHm7UOenjSC_6aBBZBb_vZVT0dnISYRr8wv09qYe0-E7rX4A-ne755nwdccn99FpS9R3ZgELiprJVPQNPgTzV6U1KM9wbfAZKM-yh8IrVKoE3uf6gKM4F38tqU5Mnfdqio5nzlEevX_Lf8s0UQI8MRNWSc6_Mmf20GuVcXPJ0elW_YnFlQDRURczGUT7VHf24g6qeLGEFcW9a6Wvk-C37hqqeejESpNO-wEwJUgiPyPkkgtyuTM7kCHVHpuUxkix5Y9_J33vvTbiM5Wcv8gFcsJ_skWoIK1AGixv6DUWRDaiW1Dg1O9zRsxmlSuDqKTRKs_CnMg2hA7z9vOe3xLE-EjmA9A7BtoiEQZqRk_YVKx7xXB6ikka_62Ko0ApFKZoAmblnfFgewouSwm_XIgLx8GJyatCQWX_z439jWj6uOdIn5wfSo0nQhvnIEFN7uJEwH7VP0OZZaIb-jG3BVOz0ciEskbJCAuvD40sKf6Ygs-z_08cqky7QBnlqqz0c6Dbs0_8r15quottGQsSecXgxCyP3Ho--X-xxM52Mq5tyDHE-NwjHW5dlR_FamUlrfIAUMtLzxSutSYDAav6VYZ_r7VB5fYYRGNGsnN60H9jkYB2aSJ6bWs4hYpU7H0yDYGQm289z3YFvIwkxqYrFIFYdlgK6vmCNhDBZeqgBhcSBpS_EHeMTbB0g-mo5wcsuNcSia2uW9Euiaf4t9we90fvztX_e4S1X5UfqgLvrhSyDU0cf0aKGn-RxZE-Y4Kqz2k7GYMctpWhiSyK8yvVhCxIr8BgyYVD2TQmu3PUOQEo2qtBzJo121DabESpaVXkBBNLd68FtTl7yDs6S5CdpBGDrznc3LtEo2c1toAVxm1fT5RYTeFy8rzCeUKfbTZjHgj37h14IYctEsnqGCv4pB6tKHF_p4QPZHFQRojSd4KC5wNLkUszYEZuuubNG1sm0DqCdW_ti8U3Feu14GS8WpV4uYOK_uTTRAPP2-qvw5hGaegBnnsPQ40HZ6zjErKztBvB3KFso2jXJjOzsWWLJy3wzVs">
</div>
<label> <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Ваше имя" value="" type="text" name="your-name"></span> </label>
<label> <span class="wpcf7-form-control-wrap" data-name="tel-351"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Ваш телефон" value="" type="tel" name="tel-351"></span> </label>
<label class="textarea-label"> <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Дополнительная информация (опционально)" name="your-message"></textarea></span> </label>
<input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Отправить"><span class="wpcf7-spinner"></span>
<span class="wpcf7-form-control-wrap" data-name="acceptance-72">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с <a href="https://takserwis.pl/ru/policy/">Пользовательским соглашением</a></span><input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}"><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();