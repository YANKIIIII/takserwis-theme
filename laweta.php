<?php
/**
 * Template Name: Laweta / Эвакуатор
 *
 * Hybrid Design: Combines icomat premium abstract UI with high-converting
 * Towing Service UX (Trust Bar, Services Grid, FAQ).
 * Supports PL / RU via Polylang.
 */

get_header();

$my_lang = function_exists('pll_current_language') ? pll_current_language() : 'pl';

// ── Translation helper ──────────────────────────────────────────────
function laweta_t( $key ) {
    $strings = array(
        // Hero
        'hero_badge'   => array('pl' => 'Pomoc drogowa Poznań', 'ru' => 'Помощь на дороге Познань'),
        'hero_title'   => array('pl' => 'Potrzebna laweta?', 'ru' => 'Нужен эвакуатор?'),
        'hero_subtitle'=> array('pl' => 'Miałeś wypadek? Samochód zepsuł się w trasie? Nagle skończyło się paliwo? Przebiłeś oponę i nie masz zapasowego koła?
Zadzwoń do nas – pomożemy szybko i niedrogo!', 'ru' => 'Попал в аварию? Машина сломалась в дороге? Внезапно закончилось топливо? Пробито колесо и нет запасного? Позвони и мы поможем - быстро и не дорого! переведи на польский'),
        'hero_call'    => array('pl' => 'Zadzwoń teraz', 'ru' => 'Позвонить сейчас'),
        'hero_eta'     => array('pl' => 'Szybki dojazd na miejsce', 'ru' => 'Быстрый выезд на место'),
        
        // Trust Bar
        'trust_1' => array('pl' => 'Dojazd do 30 min', 'ru' => 'Выезд до 30 мин'),
        'trust_2' => array('pl' => 'Pomoc drogowa', 'ru' => 'Помощь на дороге'),
        'trust_3' => array('pl' => 'Uczciwe ceny', 'ru' => 'Честные цены'),
        'trust_4' => array('pl' => 'Własny warsztat', 'ru' => 'Своё СТО'),
        
        // Center Heading (icomat style)
        'center_h1' => array( 'pl' => 'Tak Serwis to', 'ru' => 'Tak Serwis —' ),
        'center_h2' => array( 'pl' => 'Laweta. Szybka. Pewna.', 'ru' => 'Эвакуатор. Быстрый. Надёжный.' ),

        // Services -> Now Advantages
        'services_title' => array('pl' => 'Dlaczego warto nas wybrać?', 'ru' => 'Почему стоит выбрать нас?'),
        'srv_1_t' => array('pl' => 'Niskie ceny', 'ru' => 'Низкие цены'),
        'srv_1_d' => array('pl' => 'Gwarantujemy uczciwe, jasne i najbardziej konkurencyjne stawki na rynku wielkopolskim.', 'ru' => 'Гарантируем честные, прозрачные и самые выгодные цены на рынке Великопольши.'),
        'srv_2_t' => array('pl' => 'Naprawa w serwisie', 'ru' => 'Ремонт на СТО'),
        'srv_2_d' => array('pl' => 'Naprawa w serwisie w różnych lokalizacjach w Poznaniu. Nie powinieneś przepłacać za holowanie', 'ru' => 'Ремонт на сервисах в разных районах Познани. Вы не должны переплачивать за эвакуацию.'),
        'srv_3_t' => array('pl' => 'Szybki dojazd', 'ru' => 'Быстрый выезд'),
        'srv_3_d' => array('pl' => 'Dzięki lokalizacji docieramy błyskawicznie na terenie całego Poznania i okolic.', 'ru' => 'Благодаря нашему расположению, мы молниеносно приезжаем по всей Познани и её окрестностям.'),
        'srv_4_t' => array('pl' => 'Auto Laweta od ręki', 'ru' => 'Эвакуатор сразу'),
        'srv_4_d' => array('pl' => 'Mamy flotę gotową na wezwanie. Dzwonisz i wysyłamy pojazd bez zbędnej zwłoki.', 'ru' => 'Наш автопарк всегда готов. Вызываете, и мы сразу отправляем машину.'),
        
        // Advantage (icomat style) -> Now Services Short Summary
        'adv_sub' => array( 'pl' => 'W czym pomożemy', 'ru' => 'Чем мы поможем' ),
        'adv_title' => array( 'pl' => 'Kompleksowa pomoc drogowa.', 'ru' => 'Комплексная помощь на дороге.' ),
        'adv_desc1' => array( 'pl' => 'Oferujemy pełen zakres usług ratownictwa drogowego — od holowania po wymianę koła.', 'ru' => 'Мы предлагаем полный спектр услуг на дороге: от эвакуации авто до замены колеса.' ),
        'adv_1_t' => array( 'pl' => 'Holowanie aut', 'ru' => 'Эвакуация авто' ),
        'adv_1_d' => array( 'pl' => 'Bezpieczny transport samochodów osobowych i dostawczych.', 'ru' => 'Безопасная перевозка легковых, коммерческих авто.' ),
        'adv_2_t' => array( 'pl' => 'Pomoc awaryjna na trasie', 'ru' => 'Аварийная помощь в пути' ),
        'adv_2_d' => array( 'pl' => 'Dowóz paliwa, awaryjne odpalanie silnika, zmiana koła i drobne naprawy na drodze.', 'ru' => 'Запуск двигателя, подвоз топлива, замена колеса и мелкий ремонт на дороге.' ),

        // Timeline (icomat style)
        'process_title' => array('pl' => 'Jak działamy?', 'ru' => 'Как мы работаем?'),
        'step_1_t' => array('pl' => 'Zgłoszenie', 'ru' => 'Заявка'),
        'step_1_d' => array('pl' => 'Dzwonisz podając nam lokalizację i rodzaj problemu na drodze.', 'ru' => 'Вы звоните нам. Сообщаете локацию и тип проблемы на дороге.'),
        'step_2_t' => array('pl' => 'Wycena', 'ru' => 'Оценка'),
        'step_2_d' => array('pl' => 'Od razu podajemy całkowity koszt. U nas nie ma ukrytych opłat.', 'ru' => 'Сразу называем точную стоимость. У нас нет скрытых доплат.'),
        'step_3_t' => array('pl' => 'Dojazd', 'ru' => 'Выезд'),
        'step_3_d' => array('pl' => 'Laweta rusza na miejsce. Będziemy najszybciej jak to możliwe.', 'ru' => 'Эвакуатор выезжает на место так быстро, как только может.'),
        'step_4_t' => array('pl' => 'Naprawa', 'ru' => 'Ремонт'),
        'step_4_d' => array('pl' => 'W razie potrzeby zholujemy auto do naszego serwisu i od razu zajmiemy się naprawą.', 'ru' => 'При необходимости отвезём авто на наш сервис и сразу займёмся ремонтом.'),
        
        // FAQ
        'faq_title' => array('pl' => 'Często zadawane pytania', 'ru' => 'Часто задаваемые вопросы'),
        'faq_q1' => array('pl' => 'Ile kosztuje laweta na terenie Poznania?', 'ru' => 'Сколько стоит эвакуатор по Познани?'),
        'faq_a1' => array('pl' => 'Cena usługi zależy od dystansu i rodzaju pojazdu. Dokładną kwotę podajemy zawsze podczas rozmowy telefonicznej, przed wysłaniem lawety.', 'ru' => 'Цена зависит от расстояния и типа автомобиля. Точную сумму мы всегда называем по телефону до выезда эвакуатора.'),
        'faq_q2' => array('pl' => 'Czy obsługujecie tylko autostradę A2?', 'ru' => 'Вы работаете только на трассе А2?'),
        'faq_a2' => array('pl' => 'Nie, obsługujemy Poznań, całe jego okolice oraz drogi ekspresowe S5, S11 i autostradę A2.', 'ru' => 'Нет, мы обслуживаем Познань, все её окрестности, а также трассы S5, S11 и A2.'),
        'faq_q4' => array('pl' => 'Czy możecie od razu podjąć się naprawy mojego auta?', 'ru' => 'Вы можете сразу взяться за ремонт моей машины?'),
        'faq_a4' => array('pl' => 'Tak, prowadzimy profesjonalną sieć warsztatów samochodowych Tak Serwis. Możemy zholować pojazd bezpośrednio do naszego warsztatu i zająć się diagnostyką/naprawą.', 'ru' => 'Да, мы ведем сеть профессиональных автосервисов Tak Serwis. Мы можем эвакуировать автомобиль прямо на нашу станцию и заняться диагностикой/ремонтом.'),
        'faq_q5' => array('pl' => 'Czy holujecie samochody w weekendy i w nocy?', 'ru' => 'Вы буксируете автомобили по выходным и ночью?'),
        'faq_a5' => array('pl' => 'Tak, laweta działa w weekendy i w nocy.', 'ru' => 'Да, эвакуатор работает по выходным и ночью.'),
        // Final CTA
        'final_title' => array('pl' => 'Laweta Poznań – Zaufaj specjalistom', 'ru' => 'Эвакуатор Познань – Доверьтесь специалистам'),
        'final_desc'  => array('pl' => 'Jesteśmy do Twojej dyspozycji w każdej sytuacji awaryjnej. Nie czekaj, zadzwoń!', 'ru' => 'Мы к вашим услугам в любой экстренной ситуации. Не ждите, звоните!'),
    );
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'pl';
    if ( isset( $strings[$key][$lang] ) ) return $strings[$key][$lang];
    if ( isset( $strings[$key]['pl'] ) ) return $strings[$key]['pl'];
    return '';
}

$phone_number  = '+48880353599';
$phone_display = '+48 880 353 599';
?>



<div class="page-laweta">

    <!-- 1. HERO -->
    <header class="lwt-hero">
        <img class="lwt-hero__img" src="/wp-content/uploads/2026/03/laweta-z-samochodem-zlecenia-oferty-a.jpg" alt="Laweta Poznań" />
        <div class="lwt-hero__overlay"></div>
        <div class="container">
            <div class="lwt-hero__badge"><?php echo esc_html( laweta_t('hero_badge') ); ?></div>
            <h1 class="lwt-hero__title"><?php echo esc_html( laweta_t('hero_title') ); ?></h1>
            <p class="lwt-hero__subtitle"><?php echo esc_html( laweta_t('hero_subtitle') ); ?></p>
            <div class="lwt-hero__actions">
                <a href="tel:<?php echo esc_attr( $phone_number ); ?>" class="lwt-btn pulse">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:20px; height:20px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <?php echo esc_html( laweta_t('hero_call') ); ?>
                </a>
                <div class="lwt-hero__eta">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <?php echo esc_html( laweta_t('hero_eta') ); ?>
                </div>
            </div>
            <div class="lwt-hero__arrow">
                <svg viewBox="0 0 10 10" fill="none"><path d="M2.2 6.1L0 4.4V6.1L4.7 9.7L9.5 6.1V4.4L7.3 6.1C6.6 6.6 6 7.1 5.4 7.5V0H4.1V7.5C3.6 7.2 3 6.7 2.2 6.1Z" fill="currentColor"/></svg>
            </div>
        </div>
    </header>

    <!-- 2. TRUST BAR -->
    <div class="lwt-trust">
        <div class="lwt-trust__grid">
            <div class="lwt-trust__item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <?php echo esc_html( laweta_t('trust_1') ); ?>
            </div>
            <div class="lwt-trust__item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path></svg>
                <?php echo esc_html( laweta_t('trust_2') ); ?>
            </div>
            <div class="lwt-trust__item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                <?php echo esc_html( laweta_t('trust_3') ); ?>
            </div>
            <div class="lwt-trust__item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                <?php echo esc_html( laweta_t('trust_4') ); ?>
            </div>
        </div>
    </div>

    <!-- 3. CENTER HEADING (icomat style) -->
    <section class="lwt-centerHeading">
        <div class="lwt-centerHeading__deco"><span></span><span></span><span></span><span></span><span></span></div>
        <div class="container">
            <h2>
                <span class="lwt-word"><?php echo esc_html( laweta_t('center_h1') ); ?></span>
                <br>
                <span class="lwt-word"><?php echo esc_html( laweta_t('center_h2') ); ?></span>
            </h2>
        </div>
    </section>

    <!-- 4. SERVICES GRID -->
    <section class="lwt-section">
        <div class="lwt-section__header">
            <h2 class="lwt-section__title"><?php echo esc_html( laweta_t('services_title') ); ?></h2>
        </div>
        <div class="lwt-services__grid">
            <div class="lwt-service-card">
                <div class="lwt-service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg></div>
                <h3><?php echo esc_html( laweta_t('srv_1_t') ); ?></h3>
                <p><?php echo esc_html( laweta_t('srv_1_d') ); ?></p>
            </div>
            <div class="lwt-service-card">
                <div class="lwt-service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></div>
                <h3><?php echo esc_html( laweta_t('srv_2_t') ); ?></h3>
                <p><?php echo esc_html( laweta_t('srv_2_d') ); ?></p>
            </div>
            <div class="lwt-service-card">
                <div class="lwt-service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                <h3><?php echo esc_html( laweta_t('srv_3_t') ); ?></h3>
                <p><?php echo esc_html( laweta_t('srv_3_d') ); ?></p>
            </div>
            <div class="lwt-service-card">
                <div class="lwt-service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 17h4V5H2v12h3"/><path d="M20 17h2v-3.34a4 4 0 0 0-1.17-2.83L19 9h-5v8h2"/><path d="M14 17h6"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M8 12h3"/></svg></div>
                <h3><?php echo esc_html( laweta_t('srv_4_t') ); ?></h3>
                <p><?php echo esc_html( laweta_t('srv_4_d') ); ?></p>
            </div>
        </div>
    </section>

    <!-- 5. ADVANTAGE (icomat 2-col) -->
    <section class="lwt-advantage">
        <div class="lwt-advantage__inner">
            <div class="lwt-advantage__left">
                <div class="lwt-advantage__subtitle"><?php echo esc_html( laweta_t('adv_sub') ); ?></div>
                <h2 class="lwt-advantage__title"><?php echo esc_html( laweta_t('adv_title') ); ?></h2>
            </div>
            <div class="lwt-advantage__right">
                <div class="lwt-advantage__desc">
                    <p><?php echo esc_html( laweta_t('adv_desc1') ); ?></p>
                </div>
                <div class="lwt-advantage__list">
                    <div class="lwt-advantage__item">
                        <h3><?php echo esc_html( laweta_t('adv_1_t') ); ?></h3>
                        <p><?php echo esc_html( laweta_t('adv_1_d') ); ?></p>
                    </div>
                    <div class="lwt-advantage__item">
                        <h3><?php echo esc_html( laweta_t('adv_2_t') ); ?></h3>
                        <p><?php echo esc_html( laweta_t('adv_2_d') ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROCESS / TIMELINE (icomat style) -->
    <section class="lwt-timeline">
        <div class="lwt-timeline__inner">
            <h2 class="lwt-timeline__title"><?php echo esc_html( laweta_t('process_title') ); ?></h2>
            <div class="lwt-timeline__grid">
                <div class="lwt-timeline__card">
                    <div class="lwt-timeline__label">O1</div>
                    <div class="lwt-timeline__dotline">
                        <div class="lwt-timeline__dot"></div>
                        <div class="lwt-timeline__dots"></div>
                    </div>
                    <h3 class="lwt-timeline__card-title"><?php echo esc_html( laweta_t('step_1_t') ); ?></h3>
                    <p class="lwt-timeline__card-text"><?php echo esc_html( laweta_t('step_1_d') ); ?></p>
                </div>
                <div class="lwt-timeline__card">
                    <div class="lwt-timeline__label">O2</div>
                    <div class="lwt-timeline__dotline">
                        <div class="lwt-timeline__dot"></div>
                        <div class="lwt-timeline__dots"></div>
                    </div>
                    <h3 class="lwt-timeline__card-title"><?php echo esc_html( laweta_t('step_2_t') ); ?></h3>
                    <p class="lwt-timeline__card-text"><?php echo esc_html( laweta_t('step_2_d') ); ?></p>
                </div>
                <div class="lwt-timeline__card">
                    <div class="lwt-timeline__label">O3</div>
                    <div class="lwt-timeline__dotline">
                        <div class="lwt-timeline__dot"></div>
                        <div class="lwt-timeline__dots"></div>
                    </div>
                    <h3 class="lwt-timeline__card-title"><?php echo esc_html( laweta_t('step_3_t') ); ?></h3>
                    <p class="lwt-timeline__card-text"><?php echo esc_html( laweta_t('step_3_d') ); ?></p>
                </div>
                <div class="lwt-timeline__card">
                    <div class="lwt-timeline__label">O4</div>
                    <div class="lwt-timeline__dotline">
                        <div class="lwt-timeline__dot"></div>
                        <div class="lwt-timeline__dots"></div>
                    </div>
                    <h3 class="lwt-timeline__card-title"><?php echo esc_html( laweta_t('step_4_t') ); ?></h3>
                    <p class="lwt-timeline__card-text"><?php echo esc_html( laweta_t('step_4_d') ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FINAL CTA -->
    <section class="lwt-final">
        <div class="lwt-final__inner">
            <h2><?php echo esc_html( laweta_t('final_title') ); ?></h2>
            <p><?php echo esc_html( laweta_t('final_desc') ); ?></p>
            <a href="tel:<?php echo esc_attr( $phone_number ); ?>" class="lwt-btn pulse">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:20px; height:20px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <?php echo esc_html( laweta_t('hero_call') ); ?>
            </a>
        </div>
    </section>

    <!-- 8. FAQ Block -->
    <section class="lwt-faq">
        <div class="lwt-section__header">
            <h2 class="lwt-section__title"><?php echo esc_html( laweta_t('faq_title') ); ?></h2>
        </div>
        <div class="lwt-faq__inner">
            <div class="lwt-faq__item">
                <div class="lwt-faq__question">
                    <?php echo esc_html( laweta_t('faq_q1') ); ?>
                    <div class="lwt-faq__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                </div>
                <div class="lwt-faq__answer"><p><?php echo esc_html( laweta_t('faq_a1') ); ?></p></div>
            </div>
            <div class="lwt-faq__item">
                <div class="lwt-faq__question">
                    <?php echo esc_html( laweta_t('faq_q2') ); ?>
                    <div class="lwt-faq__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                </div>
                <div class="lwt-faq__answer"><p><?php echo esc_html( laweta_t('faq_a2') ); ?></p></div>
            </div>
            <div class="lwt-faq__item">
                <div class="lwt-faq__question">
                    <?php echo esc_html( laweta_t('faq_q4') ); ?>
                    <div class="lwt-faq__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                </div>
                <div class="lwt-faq__answer"><p><?php echo esc_html( laweta_t('faq_a4') ); ?></p></div>
            </div>
            <div class="lwt-faq__item">
                <div class="lwt-faq__question">
                    <?php echo esc_html( laweta_t('faq_q5') ); ?>
                    <div class="lwt-faq__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                </div>
                <div class="lwt-faq__answer"><p><?php echo esc_html( laweta_t('faq_a5') ); ?></p></div>
            </div>
        </div>
    </section>

</div>

<!-- Scripts for Word Reveal & FAQ Accordion -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Word reveal intersection observer
    var words = document.querySelectorAll('.lwt-word');
    if (words.length > 0) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        words.forEach(function(w) { observer.observe(w); });
    }

    // FAQ Accordion
    var faqs = document.querySelectorAll('.lwt-faq__question');
    faqs.forEach(function(faq) {
        faq.addEventListener('click', function() {
            var item = this.parentNode;
            
            // Close others (optional)
            var activeItem = document.querySelector('.lwt-faq__item.active');
            if (activeItem && activeItem !== item) {
                activeItem.classList.remove('active');
            }

            item.classList.toggle('active');
        });
    });
});
</script>

<?php get_footer(); ?>
