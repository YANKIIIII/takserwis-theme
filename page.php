<?php
/**
 * Template Name: Шестерня/сцепление
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
        <div class="services">

                                                                
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">
        <div class="sline__item-title">Wymiana koła zamachowego</div>
        <div class="sline__item-text"><p>Koło zamachowe to kluczowy element silnika samochodowego, który pełni wiele istotnych funkcji. Jego głównym zadaniem jest gromadzenie energii kinetycznej, co pozwala na płynne działanie silnika oraz redukcję drgań podczas pracy. Dzięki temu samochód działa stabilniej, a kierowca odczuwa większy komfort jazdy. Właściwie działające koło zamachowe wpływa również na trwałość innych podzespołów, takich jak sprzęgło czy [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">Wymiana koła zamachowego</a></h3>
                            <div class="title2">Usługa "Wymiana koła zamachowego" obejmuje kompleksową diagnostykę i wymianę koła zamachowego, które jest kluczowym elementem układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-kola-zamachowego/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-kola-zamachowego.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana oleju automatycznej skrzyni biegów</div>
        <div class="sline__item-text"></div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">Wymiana oleju automatycznej skrzyni biegów</a></h3>
                            <div class="title2">Kategoria „Wymiana oleju automatycznej skrzyni biegów” obejmuje usługi i produkty związane z konserwacją automatycznych skrzyń biegów poprzez regularną wymianę oleju.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-automatycznej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-oleju-automatycznej-skrzyni-biegow-2.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana oleju manualnej skrzyni biegów</div>
        <div class="sline__item-text"></div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">Wymiana oleju manualnej skrzyni biegów</a></h3>
                            <div class="title2">Usługa „Wymiana oleju manualnej skrzyni biegów” polega na wymianie zużytego oleju w manualnej skrzyni biegów na nowy, zgodny z wymaganiami producenta pojazdu.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-oleju-manualnej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-oleju-manualnej-skrzyni-biegow-2.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana automatycznej skrzyni biegów</div>
        <div class="sline__item-text"><p>Automatyczna skrzynia biegów to kluczowy element każdego nowoczesnego pojazdu. Jej pełna wymiana jest niezbędna w przypadku poważnych uszkodzeń, które mogą wpłynąć na bezpieczeństwo i komfort jazdy. Wymiana skrzyni biegów automatycznej jest zalecana w sytuacjach takich jak: Brak reakcji na zmiany biegów – jeśli samochód nie zmienia biegów lub wykonuje to w sposób nieprawidłowy. Wibracje i [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">Wymiana automatycznej skrzyni biegów</a></h3>
                            <div class="title2">Usługa "Wymiana automatycznej skrzyni biegów" polega na demontażu uszkodzonej skrzyni biegów oraz zamontowaniu nowej lub zregenerowanej, aby zapewnić prawidłowe funkcjonowanie układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-automatycznej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-automatycznej-scruzini-biegow.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">
        <div class="sline__item-title">Wymiana manualnej skrzyni biegów</div>
        <div class="sline__item-text"><p>W dzisiejszych czasach coraz więcej kierowców decyduje się na wymianę manualnej skrzyni biegów na automatyczną. Taka decyzja może być podyktowana różnymi czynnikami, takimi jak komfort jazdy, łatwość obsługi czy oszczędność paliwa. W szczególności, jeśli często poruszasz się w miejskim ruchu, automatyczna skrzynia biegów może znacząco ułatwić codzienne dojazdy. Jak przebiega wymiana skrzyni biegów? Proces wymiany [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">Wymiana manualnej skrzyni biegów</a></h3>
                            <div class="title2">Usługa "Wymiana manualnej skrzyni biegów" obejmuje demontaż zużytej skrzyni oraz montaż nowej lub zregenerowanej, zapewniając pełną sprawność układu napędowego.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-manualnej-skrzyni-biegow/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-manualnej-scruzini-biegow.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">
        <div class="sline__item-title">Wymiana pompy sprzęgła</div>
        <div class="sline__item-text"><p>Czy zauważyłeś, że zmiana biegów w Twoim samochodzie stała się trudniejsza? Wymiana pompy sprzęgła w TAK Serwis to gwarancja przywrócenia płynności jazdy i komfortu prowadzenia Twojego auta. Nasza stacja obsługi w Poznaniu specjalizuje się w profesjonalnej diagnostyce i naprawie układu sprzęgła w atrakcyjnych cenach — przekonaj się o tym sam, zapoznając się z oferta warsztatu. [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">Wymiana pompy sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana pompy sprzęgła" polega na wymianie uszkodzonej lub zużytej pompy, która odpowiada za prawidłowe działanie układu hydraulicznego sprzęgła.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-pompy-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-pompy-sprzegla.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">
        <div class="sline__item-title">Wymiana łożyska oporowego sprzęgła</div>
        <div class="sline__item-text"><p>Wymiana łożyska oporowego sprzęgła w Poznaniu to jedna z usług oferowanych przez TAK Serwis. Specjalizujemy się w kompleksowej naprawie układów samochodowych, w tym wymianie łożysk, które są istotnym elementem systemu sprzęgła. Sprawne działanie tego komponentu jest niezbędne dla prawidłowej pracy całego podzespołu napędowego, a jego awaria może prowadzić do poważnych uszkodzeń. Dlatego ważne jest, aby [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">Wymiana łożyska oporowego sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana łożyska oporowego sprzęgła" polega na diagnostyce oraz wymianie zużytego łożyska, które odpowiada za prawidłowe działanie sprzęgła.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-lozyska-oporowego-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-lozyska-oporowego-sprzegla.jpg" alt="" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">
        <div class="sline__item-title">Wymiana sprzęgła</div>
        <div class="sline__item-text"><p>Masz trudności ze zmianą biegów? Czy samochód szarpie, gdy tylko ruszysz z miejsca? Te i inne problemy mogą wskazywać na awarię sprzęgła. Przy pierwszych oznakach usterki tego podzespołu odwiedź naszą stację obsługi w Poznaniu: mechanicy zdiagnozują Twoje auto i przeprowadzą wymianę sprzęgła w przystępnej cenie. Kiedy należy wymienić sprzęgło na nowe? Sprzęgło to jedna z [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">Wymiana sprzęgła</a></h3>
                            <div class="title2">Usługa "Wymiana sprzęgła" polega na kompleksowej wymianie zużytego zestawu sprzęgła, obejmującego tarczę, docisk oraz łożysko. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/przekladnia-sprzeglo/wymiana-sprzegla/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/przekladnia-sprzeglo.jpg" alt="" width="760" height="424">
                                    </div>
                
                            
    </div>
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