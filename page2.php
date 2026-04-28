<?php
/**
 * Template Name: Дигатели
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
  <div class="container">
    <!--<h2>Usługi</h2> -->
        <div class="services">

                                                                
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-lancucha-lub-paska-rozrzadu/">
        <div class="sline__item-title">Wymiana łańcucha lub paska rozrządu</div>
        <div class="sline__item-text"><p>Słyszysz niepokojące dźwięki dochodzące spod maski samochodu? A może zauważasz spadek mocy silnika? Wymiana paska rozrządu to jedna z najważniejszych usług serwisowych, która ma kluczowe znaczenie dla prawidłowego funkcjonowania Twojego pojazdu. Wymiana łańcucha lub paska rozrządu: kiedy jest potrzebna? Pasek rozrządu odgrywa ważną rolę w synchronizacji pracy wału korbowego i wałka rozrządu, co bezpośrednio wpływa [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-lancucha-lub-paska-rozrzadu/">Wymiana łańcucha lub paska rozrządu</a></h3>
                            <div class="title2">Usługa "Wymiana łańcucha lub paska rozrządu" polega na wymianie zużytego lub uszkodzonego łańcucha lub paska, które synchronizują ruch wału korbowego i wałka rozrządu, kontrolując moment otwierania i zamykania zaworów w silniku</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-lancucha-lub-paska-rozrzadu/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-lancucha-lub-paska-rozrzadu.png" alt="Wymiana łańcucha lub paska rozrządu" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-paska-napedowego-wymiana-paska-wieloklinowego/">
        <div class="sline__item-title">Wymiana paska napędowego/Wymiana paska wieloklinowego</div>
        <div class="sline__item-text"><p>Wymiana paska klinowego Wielu kierowców pamięta o wymianie klocków hamulcowych czy opon. O wiele rzadziej sprawdzają oni stan paska od alternatora. Tymczasem jest to kluczowy element samochodu, który odpowiada za najważniejsze podzespoły pojazdu. Okresowa wymiana paska klinowego w TAK Serwis oraz szybkie reagowanie na pierwsze objawy jego uszkodzenia pozwoli uniknąć wielu kosztownych awarii. Jak działa [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-paska-napedowego-wymiana-paska-wieloklinowego/">Wymiana paska napędowego/Wymiana paska wieloklinowego</a></h3>
                            <div class="title2">Usługa "Wymiana paska napędowego" polega na wymianie zużytego lub uszkodzonego paska napędowego, który przekazuje napęd do różnych układów w pojeździe, takich jak alternator, klimatyzacja czy wspomaganie kierownicy. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-paska-napedowego-wymiana-paska-wieloklinowego/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-paska-napedowego.png" alt="Wymiana paska napędowego/Wymiana paska wieloklinowego" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-oleju-i-filtra-silnika/">
        <div class="sline__item-title">Wymiana oleju i filtra silnika</div>
        <div class="sline__item-text"><p>Potrzebujesz profesjonalnej wymiany oleju silnikowego i filtra w samochodzie w Poznaniu? Skontaktuj się z TAK Serwis — i uzyskaj usługę w przystępnej cenie! Nasi mechanicy zadbają o Twoje auto i wykonają pracę przy użyciu tylko wysokiej jakości materiałów — dzięki temu możesz być pewien stanu swojego pojazdu i nie martwić się o bezpieczeństwo na drodze. [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-oleju-i-filtra-silnika/">Wymiana oleju i filtra silnika</a></h3>
                            <div class="title2">Usługa "Wymiana oleju i filtra silnika" polega na usunięciu zużytego oleju silnikowego oraz wymianie starego filtra oleju na nowy, co zapewnia prawidłowe smarowanie i oczyszczenie silnika.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-oleju-i-filtra-silnika/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-oleju-i-filtra-silnika.png" alt="Wymiana oleju i filtra silnika" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-uszczelek/">
        <div class="sline__item-title">Wymiana uszczelek</div>
        <div class="sline__item-text"><p>Zauważyłeś wyciek oleju w komorze silnika i czujesz zapach spalenizny w kabinie lub pod maską? Czy ślady oleju silnikowego pojawiły się na ziemi pod samochodem po zaparkowaniu? Zwróć się o profesjonalną pomoc do TAK Serwis, aby rozwiązać problem: nasi mechanicy zdiagnozują Twoje auto i wykonają wymianę uszczelki pokrywy zaworów w najlepszych cenach w Poznaniu — [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-uszczelek/">Wymiana uszczelek</a></h3>
                            <div class="title2">Usługa "Wymiana uszczelek" polega na wymianie zużytych lub uszkodzonych uszczelek w różnych częściach pojazdu, takich jak silnik, układ wydechowy czy układ chłodzenia.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-uszczelek/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-uszczelek.png" alt="Wymiana uszczelek" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-wtryskiwaczy-paliwa/">
        <div class="sline__item-title">Wymiana wtryskiwaczy paliwa</div>
        <div class="sline__item-text"><p>Twój samochód traci moc, zużywa więcej paliwa niż zwykle lub ma problemy z rozruchem? Te objawy sygnalizują, że nadszedł czas na wizytę w warsztacie. Profesjonalna wymiana wtryskiwaczy w silnikach benzynowych i diesla w Poznaniu może znacząco poprawić osiągi pojazdu, zmniejszyć spalanie paliwa i przywrócić płynną pracę silnika. Za co odpowiadają wtryskiwacze w silniku? Wtryskiwacze pełnią [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-wtryskiwaczy-paliwa/">Wymiana wtryskiwaczy paliwa</a></h3>
                            <div class="title2">Usługa "Wymiana wtryskiwaczy paliwa" polega na wymianie uszkodzonych lub zużytych wtryskiwaczy, które są odpowiedzialne za wtrysk paliwa do komory spalania silnika.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-wtryskiwaczy-paliwa/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-wtryskiwaczy-paliwa.png" alt="Wymiana wtryskiwaczy paliwa" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/biezaca-naprawa-silnika/">
        <div class="sline__item-title">Bieżąca naprawa silnika</div>
        <div class="sline__item-text"><p>Bieżąca naprawa silnika samochodu to kompleksowe rozwiązanie, które pomaga wyeliminować drobne, ale krytyczne problemy — zanim doprowadzą one do poważnych awarii. Zapraszamy do warsztatu TAK Serwis w Poznaniu — przeprowadzimy profesjonalną diagnostykę i szybko zlikwidujemy usterki, przywracając Twojemu autu niezawodność i płynność działania. Co obejmują bieżące naprawy serwisowe pojazdów? Bieżące naprawy silnika to szereg zabiegów [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/biezaca-naprawa-silnika/">Bieżąca naprawa silnika</a></h3>
                            <div class="title2">Usługa "Bieżąca naprawa silnika samochodu" obejmuje diagnostykę i usuwanie bieżących usterek w silniku, takich jak problemy z układem zapłonowym, paliwowym czy chłodzenia.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/biezaca-naprawa-silnika/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/biezaca-naprawa-silnika.png" alt="Bieżąca naprawa silnika" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-swiec-zarowych/">
        <div class="sline__item-title">Wymiana świec żarowych</div>
        <div class="sline__item-text"><p>Wymiana świec żarowych to kluczowa usługa dla właścicieli samochodów z silnikiem Diesla. Gdy komponenty te są sprawne, «serce auta» uruchamia się szybko i działa wydajnie w niemal każdych warunkach mrozu. Dlatego ich terminowa wymiana gwarantuje niezawodne działanie pojazdu.. Doskonale rozumiemy znaczenie tej procedury i dlatego oferujemy profesjonalną wymianę świec żarowych przy użyciu oryginalnych części zamiennych. [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-swiec-zarowych/">Wymiana świec żarowych</a></h3>
                            <div class="title2">Usługa "Wymiana świec żarowych" polega na wymianie zużytych lub uszkodzonych świec żarowych, które są odpowiedzialne za ułatwianie rozruchu silników wysokoprężnych. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-swiec-zarowych/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-swiec-zarowych.png" alt="Wymiana świec żarowych" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-swiec-zaplonowych/">
        <div class="sline__item-title">Wymiana świec zapłonowych</div>
        <div class="sline__item-text"><p>Zauważyłeś, że Twój silnik zaczął pracować nierównomiernie, traci moc lub wydaje nietypowe dźwięki? Być może przyczyną jest nieprawidłowe działanie świec zapłonowych. Jeżeli są one zużyte, silnik może spalać znacznie więcej paliwa, tudzież w ogóle nie będzie odpalać. Dlatego wymiana świec zapłonowych przez specjalistów TAK Serwis jest ważnym krokiem w dbaniu o Twój samochód. Czym jest [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-swiec-zaplonowych/">Wymiana świec zapłonowych</a></h3>
                            <div class="title2">Usługa "Wymiana świec zapłonowych" polega na wymianie zużytych lub uszkodzonych świec zapłonowych, które są odpowiedzialne za zapłon mieszanki paliwowo-powietrznej w cylindrach silnika. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-swiec-zaplonowych/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-swiec-zaplonowych.png" alt="Wymiana świec zapłonowych" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-turbin-turbosprezarek/">
        <div class="sline__item-title">Wymiana turbin/turbosprężarek</div>
        <div class="sline__item-text"><p>Twój samochód traci moc lub dymi z rury wydechowej? Możliwe, że problem leży w uszkodzonej turbinie. Zaufaj TAK Serwis i odwiedź nasz warsztat w celu diagnostyki: oferujemy kompleksową obsługę pojazdów osobowych i dostawczych oraz gwarantujemy szybką wymianę turbosprężarek w Poznaniu w atrakcyjnych cenach. Z czego składa się i za co odpowiada turbosprężarka? Turbosprężarka to ważny [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-turbin-turbosprezarek/">Wymiana turbin/turbosprężarek</a></h3>
                            <div class="title2">Usługa "Wymiana turbin/turbosprężarek" polega na wymianie uszkodzonej lub zużytej turbiny, która zwiększa moc silnika poprzez sprężanie powietrza dostarczanego do komory spalania. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-turbin-turbosprezarek/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-turbin.png" alt="Wymiana turbin/turbosprężarek" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-rozrusznika/">
        <div class="sline__item-title">Wymiana rozrusznika</div>
        <div class="sline__item-text"><p>Wymiana rozrusznika w Poznaniu — profesjonalna usługa TAK Serwis w przystępnej cenie Twój samochód ma problemy z uruchomieniem? Może to oznaczać, że odnowa elementów rozruchowych jest konieczna. Zwróć się do stacji obsługi TAK Serwis, aby usunąć usterkę: wykonamy wymianę rozrusznika w Poznaniu gwarantując najwyższą jakość napraw i zapewniając, że Twój pojazd będzie działał niezawodnie po [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-rozrusznika/">Wymiana rozrusznika</a></h3>
                            <div class="title2">Usługa "Wymiana rozrusznika" polega na wymianie uszkodzonego lub zużytego rozrusznika, który odpowiada za uruchamianie silnika pojazdu. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-rozrusznika/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-rozrusznika.png" alt="Wymiana rozrusznika" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-alternatora/">
        <div class="sline__item-title">Wymiana alternatora</div>
        <div class="sline__item-text"><p>Jeśli akumulator Twojego auta zaczął się szybko rozładowywać, a światła reflektorów i urządzenia gasną podczas pracy silnika, warto sprawdzić elektrykę. W wielu przypadkach konieczna jest wymiana alternatora. Awaria całej jednostki może doprowadzić do tego, że samochód nie uruchomi się w najbardziej nieodpowiednim momencie, pozostawiając Cię w nieprzyjemnej sytuacji. Z TAK Serwis możesz zapomnieć o niepokoju [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-alternatora/">Wymiana alternatora</a></h3>
                            <div class="title2">Usługa "Wymiana alternatora" polega na wymianie uszkodzonego lub zużytego alternatora, który odpowiada za ładowanie akumulatora oraz zasilanie elektrycznych systemów pojazdu podczas pracy silnika.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-alternatora/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-alternatora.png" alt="Wymiana alternatora" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-kolektorow-dolotowych-wydechowych/">
        <div class="sline__item-title">Wymiana kolektorów dolotowych / wydechowych</div>
        <div class="sline__item-text"><p>Naprawa układu wydechowego Szukasz warsztatu, który świadczy usługi naprawy tłumików w Poznaniu? Zaufaj TAK Serwis: nasi mechanicy wyeliminują wszelkie usterki związane z działaniem układu wydechowego, zapewniając Ci cichą jazdę na drodze. Uszkodzenie tłumika — spawać czy wymienić? Układ wydechowy to ważny podzespół auta, odpowiadający za odprowadzanie spalin i wyciszenie pracy silnika. Zaczyna się od kolektora [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-kolektorow-dolotowych-wydechowych/">Wymiana kolektorów dolotowych / wydechowych</a></h3>
                            <div class="title2">Usługa "Wymiana kolektorów dolotowych / wydechowych" polega na wymianie uszkodzonych lub zużytych kolektorów, które odpowiadają za kierowanie przepływem powietrza do silnika oraz usuwanie spalin z cylindrów. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-kolektorow-dolotowych-wydechowych/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-kolektorow-dolotowych.png" alt="Wymiana kolektorów dolotowych / wydechowych" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/wymiana-zaworow-egr/">
        <div class="sline__item-title">Wymiana zaworów EGR</div>
        <div class="sline__item-text"><p>Wymiana zaworów EGR w serwisie samochodowym Twój samochód traci moc, nierówno pracuje na biegu jałowym lub zużywa więcej paliwa niż zwykle? Te objawy mogą wskazywać na problemy z zaworem EGR. Profesjonalna wymiana EGR w Poznaniu jest rozwiązaniem, które przywróci sprawność Twojego pojazdu i zapewni jego zgodność z normami emisji spalin. Czym jest zawór EGR i [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/wymiana-zaworow-egr/">Wymiana zaworów EGR</a></h3>
                            <div class="title2">Usługa "Wymiana zaworów EGR" polega na wymianie zużytych lub uszkodzonych zaworów recyrkulacji spalin, które odpowiadają za ponowne wprowadzenie części spalin do komory spalania w celu obniżenia emisji szkodliwych substancji. </div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/wymiana-zaworow-egr/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/wymiana-zaworow-egr.png" alt="Wymiana zaworów EGR" width="760" height="424">
                                    </div>
                
                                                                    
<!-- <a class="sline__item animation animation-move-top animation-delay-01" href="https://takserwis.pl/services/silnik/diagnostyka/">
        <div class="sline__item-title">Diagnostyka</div>
        <div class="sline__item-text"><p>Witaj w TAK Serwis – Twoim zaufanym partnerze w diagnostyce silników samochodowych w Poznaniu. Nasza oferta skierowana jest do wszystkich autolubów i kierowców, którzy pragną zadbać o swoje pojazdy i zapewnić im długą oraz bezawaryjną eksploatację. Specjalizujemy się w kompleksowej diagnostyce silników, oferując szeroki zakres usług dostosowanych do indywidualnych potrzeb naszych klientów. Dlaczego Diagnostyka Silnika [&hellip;]</p>
</div>
        <div class="sline__item-links">
          <span class="sline__read-link">Read more</span>
          <span class="sline__arrow-link"></span>
        </div>
                                </a> -->



                                <div class="item item_buttons">
                                                <div class="content">
                            <h3 class="title"><a class="" href="https://takserwis.pl/services/silnik/diagnostyka/">Diagnostyka</a></h3>
                            <div class="title2">Usługa "Diagnostyka" obejmuje szczegółową analizę stanu technicznego pojazdu przy użyciu specjalistycznych narzędzi, mając na celu wykrycie ewentualnych usterek w różnych układach samochodowych.</div>
                            <div class="button_wrapper">
                            <a class="button contrast open-popup-btn" href="javascript: void(0);">Zapisać się</a>
                            <a class="button transparent" href="https://takserwis.pl/services/silnik/diagnostyka/">Więcej</a>
                            </div>
                            
                                                    </div>
                                                    
                                                    <img class="item-img" src="https://takserwis.pl/wp-content/uploads/2024/05/silnik-diagnostyka.png" alt="Diagnostyka" width="760" height="424">
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