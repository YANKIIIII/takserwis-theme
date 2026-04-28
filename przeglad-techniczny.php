<?php
/*
Template Name: Przegląd Techniczny
*/
get_header();
?>



<div class="skp-module-container">
    <?php
    $my_lang = function_exists('pll_current_language') ? pll_current_language() : 'pl';
    if ( $my_lang == 'ru' ) :
    ?>
    <!-- ==================== RUSSIAN VERSION ==================== -->
    <section class="skp-hero-unique">
        <div class="container">
            <div class="skp-hero-unique-inner">
                
                <div class="skp-hero-content">
                    <h1 class="skp-hero-title">Техосмотр<br><span>Автомобиля</span></h1>
                    
                    <div class="skp-seo-text-block">
                        <p>Ищете проверенное место для <strong>техосмотра автомобиля</strong>? Наша <strong>окружная станция контроля транспортных средств</strong> (OSKP) — это современная <strong>диагностическая станция</strong>, обеспечивающая комплексный <strong>технический осмотр машины</strong>. Мы предлагаем надежные <strong>исследования технического состояния</strong>, включая <strong>техосмотры легковых авто</strong>, машин с ГБО (LPG) и <strong>первичные регистрационные осмотры</strong>. Выбирайте высшее качество – доверьтесь нашей профессиональной <strong>станции технического осмотра авто</strong>!</p>
                    </div>

                    <div class="skp-hero-actions">
                        <a href="tel:+48664040599" class="button contrast">Позвонить и Записаться</a>
                    </div>
                </div>

                <div class="skp-hero-image-wrapper">
                    <img src="/wp-content/uploads/2026/04/kontrola-pojazdow.jpg" alt="Диагност проводит технический осмотр OSKP">
                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Advantages Block -->
    <section class="skp-benefits-row">
        <div class="container">
            <div class="skp-benefits-grid">
                
                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <h4>Удобное расположение</h4>
                    </div>
                    <p><strong>Техосмотр автомобиля</strong> находится в черте города, рядом с крупной транспортной развязкой – <strong>Рондо Сьрудка (Rondo Śródka)</strong>.</p>
                </div>
                
                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                        <h4>Быстрый ремонт</h4>
                    </div>
                    <p>Если в вашем <strong>автомобиле</strong> обнаружены неисправности – не волнуйтесь. В нашем <strong>автосервисе</strong> мы быстро их устраним, и вам не придется повторно записываться на <strong>техосмотр</strong>.</p>
                </div>

                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                        </div>
                        <h4>Опытные механики</h4>
                    </div>
                    <p>Опытные <strong>механики</strong> проверят ваш автомобиль и позаботятся о вашей <strong>безопасности на дороге</strong>.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services structured cleanly -->
    <section class="skp-services-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Что включает в себя процедура исследования?</h2>
                <div>Диагностика — это наша специальность. Узнайте, на каком современном оборудовании мы проверяем авто, заботясь о вашей безопасности.</div>
            </div>

            <div class="skp-grid">
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20"/></svg></div>
                    <h4>Линия геометрии</h4>
                    <p>Расширенный контроль подвески и проверка скрытых люфтов на мощном вибростенде, которым оснащена профессиональная <strong>базовая станция техосмотра</strong>.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
                    <h4>Тест тормозных путей</h4>
                    <p>Бескомпромиссная проверка тормозных усилий и безопасности магистралей на специальных роликах во время полного <strong>техосмотра автомобиля</strong>.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3m0 12v3m9-9h-3M6 12H3m14.485-6.364l-2.121 2.121M7.636 17.757l-2.121 2.121m12.728 0l-2.121-2.121M7.636 6.243L5.515 4.121M12 16a4 4 0 100-8 4 4 0 000 8z"/></svg></div>
                    <h4>Система освещения</h4>
                    <p>Аппаратный цифровой анализ падения пучка ближнего света и полная диагностика внешней предупреждающей светотехники автомобиля.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-3a2 2 0 01-2-2V2H9v3a2 2 0 01-2 2H4a2 2 0 00-2 2v13a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/></svg></div>
                    <h4>Экология и выхлопные газы</h4>
                    <p>Усовершенствованный зонд тщательно отслеживает выбросы загрязняющих газов, сопоставляя результат с экологическими нормативами вашего двигателя.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Text Section for Pricing and Extra details -->
    <section class="skp-seo-expanded-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Техосмотр автомобиля – прейскурант и цены</h2>
                <div>Интересует <strong>стоимость технического осмотра транспортного средства</strong>? Затраты на всех официальных станциях строго регулируются законом. Кристально понятная <strong>стоимость техосмотра авто</strong> означает, что на месте вас не будут ожидать никакие финансовые сюрпризы. Если вы задаетесь вопросом, какова <strong>цена техосмотра автомобиля</strong> и <strong>стоимость техосмотра машины</strong> для стандартного формата, мы напоминаем, что наша <strong>диагностическая база</strong> применяет исключительно установленный прейскурант на все услуги диагностики и <strong>техосмотры цена</strong>. Проводимый нами сертифицированный <strong>технический осмотр авто</strong> – это ваше спокойствие и гарантия того, что <strong>стоимость проверки автомобиля</strong> и итоговая <strong>цена техосмотра авто</strong> не увеличатся в самом конце по вине скрытых платежей. Наша <strong>окружная станция контроля транспортных средств</strong> следит за тем, чтобы соблюдались все правовые нормы.</div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="skp-faq-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Часто Задаваемые Вопросы (FAQ)</h2>
                <div>Ознакомьтесь с ответами, чтобы легко подготовиться к визиту на нашу Окружную Станцию Контроля Автомобилей (OSKP).</div>
            </div>

            <div class="skp-accordion">
                <div class="skp-accordion-item">
                    <button class="skp-accordion-header">
                        Каковы процедурные требования станции к водителю перед заездом?
                        <svg class="skp-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="skp-accordion-content">
                        <p>Всё очень просто — вам достаточно передать специалисту свидетельство о регистрации техпаспорта (dowód rejestracyjny) и оплатить осмотр по государственному тарифу. Одно важное замечание: если двигатель машины оборудован ГБО (газобаллонной установкой), мы не сможем выдать печать без действительного сертификата на баллон из организации TDT.</p>
                    </div>
                </div>
                <div class="skp-accordion-item">
                    <button class="skp-accordion-header">
                        Что предпринять в случае обнаружения критической технической неисправности?
                        <svg class="skp-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="skp-accordion-content">
                        <p>Ничего сверхъестественного. Мы обязуемся быть с вами максимально честны: данные о несоответствии будут записаны, но законодательство даёт вам 14 календарных дней на то, чтобы благополучно доехать к выбранному механику для исправления неполадки. Когда работа будет закончена, по возвращении к нам вы оплачиваете лишь частичную стоимость повторной проверки (всего от 14 до 35 PLN).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php else : ?>
    <!-- ==================== POLISH VERSION ==================== -->

    <!-- Unique Hero Block (Distinct from Corporate Client) -->
    <section class="skp-hero-unique">
        <div class="container">
            <div class="skp-hero-unique-inner">
                
                <div class="skp-hero-content">
                    <h1 class="skp-hero-title">Przegląd<br><span>Samochodowy</span></h1>
                    
                    <!-- Dedicated SEO Text Block -->
                    <div class="skp-seo-text-block">
                        <p>Szukasz sprawdzonego miejsca na <strong>przegląd auta</strong>? Nasza <strong>okręgowa stacja kontroli pojazdów</strong> (OSKP) to nowoczesna <strong>stacja diagnostyczna</strong> zapewniająca kompleksowy <strong>przegląd techniczny samochodu</strong>. Oferujemy rzetelne <strong>badania techniczne pojazdów</strong>, w tym <strong>przegląd samochodu</strong> osobowego, aut z instalacją LPG oraz <strong>przeglądy rejestracyjne</strong>. Wybierz najwyższą jakość – postaw na profesjonalne <strong>stacje kontroli pojazdów</strong>!</p>
                    </div>

                    <div class="skp-hero-actions">
                        <a href="tel:+48880353599" class="button contrast">Zadzwoń i Zarezerwuj</a>
                    </div>
                </div>

                <div class="skp-hero-image-wrapper">
                    <!-- Clean, border-radius photo WITHOUT corporate overlapping templates -->
                    <img src="/wp-content/uploads/2026/04/kontrola-pojazdow.jpg" alt="Diagnosta wykonujący przegląd techniczny OSKP">
                </div>

            </div>
        </div>
    </section>

    <!-- Horizontal Advantages Block (Replacing the vertical gray box from corporate page) -->
    <section class="skp-benefits-row">
        <div class="container">
            <div class="skp-benefits-grid">
                
                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <h4>Dogodna lokalizacja</h4>
                    </div>
                    <p><strong>Przegląd auta</strong> znajduje się w granicach miasta, w pobliżu dużego węzła komunikacyjnego – <strong>Ronda Śródka</strong>.</p>
                </div>
                
                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                        <h4>Możliwość szybkiej naprawy usterek</h4>
                    </div>
                    <p>Jeśli w <strong>Twoim samochodzie</strong> wykryto usterki – nie martw się. W naszym <strong>warsztacie</strong> szybko je usuniemy, dzięki czemu nie będziesz musiał ponownie zgłaszać się na <strong>przegląd techniczny</strong>.</p>
                </div>

                <div class="skp-benefit-card">
                    <div class="skp-benefit-header">
                        <div class="skp-icon-box">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                        </div>
                        <h4>Kompetentni mechanicy</h4>
                    </div>
                    <p>Doświadczeni <strong>mechanicy</strong> sprawdzą Twój samochód i zadbają o Twoje <strong>bezpieczeństwo na drodze</strong>.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services structured cleanly -->
    <section class="skp-services-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Czym charakteryzuje się nasze padanie?</h2>
                <div>Diagnostyka to my. Zobacz na czym analizujemy stan aut, dbając o Twoje bezpieczeństwo na drodze.</div>
            </div>

            <div class="skp-grid">
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20"/></svg></div>
                    <h4>Ścieżka Geometrii</h4>
                    <p>Zaawansowana kontrola zawieszenia i badanie luzów na szarpaku, jakim dysponuje profesjonalna <strong>podstawowa stacja kontroli pojazdów</strong> i <strong>okręgowa stacja</strong>.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
                    <h4>Test Hamulców</h4>
                    <p>Bezwzględna weryfikacja sił zacisków oraz bezpieczeństwo przewodów hamulcowych na rolkach podczas pełnego <strong>przeglądu samochodowego</strong>.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3m0 12v3m9-9h-3M6 12H3m14.485-6.364l-2.121 2.121M7.636 17.757l-2.121 2.121m12.728 0l-2.121-2.121M7.636 6.243L5.515 4.121M12 16a4 4 0 100-8 4 4 0 000 8z"/></svg></div>
                    <h4>System Oświetleniowy</h4>
                    <p>Aparatowa digitalna analiza padania wiązki światła mijania oraz pełna diagnostyka elektryki ostrzegawczej pojazdu.</p>
                </div>
                <div class="skp-grid-item">
                    <div class="skp-grid-icon-holder"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-3a2 2 0 01-2-2V2H9v3a2 2 0 01-2 2H4a2 2 0 00-2 2v13a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/></svg></div>
                    <h4>Zanieczyszczenia i Spaliny</h4>
                    <p>Zaawansowana sonda rzetelnie monitoruje emisję zanieczyszczeń dostosowując wynik do normy ekologicznej silnika.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Text Section for Pricing and Extra details -->
    <section class="skp-seo-expanded-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Przegląd samochodu – cennik i koszty</h2>
                <div>Interesuje Cię <strong>badanie techniczne pojazdu cena</strong>? Koszty na stacjach są regulowane ustawowo. Klarowny <strong>koszt przeglądu samochodu</strong> oraz jednolita <strong>cena przeglądu auta</strong> sprawiają, że nie spotkają Cię żadne niespodzianki. Jeśli zastanawiasz się, jaka jest <strong>cena przegląd samochodu</strong> lub <strong>przegląd techniczny cena</strong> za standardowe auto, przypominamy, że nasza <strong>przeglądownia</strong> stosuje wyłącznie oficjalny cennik na wszystkie naprawy i <strong>badania techniczne cena</strong>. Oferowany przez nas kompleksowy <strong>przegląd techniczny auta</strong> to gwarancja rzetelnej diagnozy oraz tego, że <strong>koszt przeglądu auta</strong> i ogólna <strong>cena przeglądu samochodu</strong> nie wzrosną niespodziewanie w trakcie. Nasza <strong>okregowa stacja kontroli pojazdu</strong> (podobnie jak wyspecjalizowane <strong>stacje diagnostyczne</strong> i inne <strong>okręgowej stacji kontroli pojazdów</strong>) ściśle przestrzega oficjalnych zasad, obejmujących transparentną wycenę dla każdego <strong>przegląd samochód</strong>.</div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="skp-faq-block">
        <div class="container">
            <div class="header_section text_left">
                <h2>Często Zadawane Pytania (FAQ)</h2>
                <div>Przygotuj się odpowiednio zjawiając się w dacie umówionego testu diagnostycznego na naszej Okręgowej Stacji Kontroli.</div>
            </div>

            <div class="skp-accordion">
                <div class="skp-accordion-item">
                    <button class="skp-accordion-header">
                        Czego stacja wymaga proceduralnie od kierowcy?
                        <svg class="skp-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="skp-accordion-content">
                        <p>Basta — podanie dowodu rejestracyjnego i opłacenie kosztu wg cennika państwowego (ustawowego). Pamiętaj jedynie: jeśli pojazd jeździ na LPG, zaświadczenie wydane z TDT (Transportowy Dozór Techniczny) decyduje u nas sprawę.</p>
                    </div>
                </div>
                <div class="skp-accordion-item">
                    <button class="skp-accordion-header">
                        Co się dzieje w przypadku wystąpienia usterki technicznej?
                        <svg class="skp-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="skp-accordion-content">
                        <p>Nic strasznego się nie dzieje. Będziemy bezwzględnie szczery, dowód poświadczy o znalezisku i masz 14 dni by spokojnie dojechać do zaufanego mechanika. Błąd znika, jedziesz tu znów — uiszczasz tylko cząstkową opłatę wynoszącą zaledwie do 35 PLN.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>

    <!-- Контакты -->
    <section id="contact_section" class="contact_section">
        <?php 
        // По умолчанию пытаемся получить данные текущей страницы, если нет - берем с Главной (чтобы блок всегда отображался)
        $front_page_id = get_option('page_on_front');
        $group_section = get_field('contact_section') ?: get_field('contact_section', $front_page_id);
        
        if ($group_section) :
            $title = $group_section['title'] ?? '';
            $text = $group_section['text'] ?? '';
            $form = $group_section['form'] ?? '';
        ?>
        <div class="wrapper container">
            <div class="wrapp_img first_center show_center">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img second_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3462473282734!2d16.871539077023517!3d52.3822732464169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704453aee0505cf%3A0x75b1d7966f4fbca3!2zV8SZZ2xvd2EgOS8xMSwgNjAtMTIyIFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1722533885730!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img third_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.424511093465!2d16.934006577022632!3d52.36272214786157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045a8cbcfe2133%3A0x55aae88399434e16!2zxZt3acSZdGVnbyBBbnRvbmllZ28gNjhDLCA2MS0zNTkgUG96bmHFhCwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sby!4v1722555205985!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img fourth_center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.701249411396!2d16.8947197!3d52.44832639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044368c7cb54a9%3A0xe74bc2c1ba387447!2zU3RyemVzennFhHNrYSA2MSwgNjAtNDc5IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1765161166614!5m2!1sru!2sbys" 
                    style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Strzeszyńska 61, 60-479 Poznań"></iframe>
            </div>
            <div class="wrapp">
                <?php if (!empty($title) || !empty($text)) : ?>
                <div class="content">
                    <?php if (!empty($title)) : ?>
                    <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($text)) : ?>
                    <p><?php echo esc_html($text); ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if (!empty($form)) : ?>
                <?php echo do_shortcode($form); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // Smooth scrolling
    const ctaButtons = document.querySelectorAll('a[href^="#"]');
    if (ctaButtons.length > 0) {
        ctaButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if(targetId === "#") return;
                
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    e.preventDefault();
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Toggle logic for Accordion
    const accordionHeaders = document.querySelectorAll('.skp-accordion-header');

    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const item = this.parentElement;
                const content = item.querySelector('.skp-accordion-content');
                const isActive = content.style.maxHeight;

                // Close all initially
                document.querySelectorAll('.skp-accordion-content').forEach(accContent => {
                    accContent.style.maxHeight = null;
                    accContent.previousElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
                });

                // Toggle logic
                if (!isActive) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    this.querySelector('svg').style.transform = 'rotate(180deg)';
                }
            });
        });
    }
});
</script>

<?php get_footer(); ?>
