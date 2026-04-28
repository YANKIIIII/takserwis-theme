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

<style>
/* ════════════════════════════════════════════════════════════════
   LAWETA — HYBRID UI/UX DESIGN
   ════════════════════════════════════════════════════════════════ */
:root {
    --lwt-dark: #1a1924;
    --lwt-accent: #ff9d42;
    --lwt-accent-hover: #e88a30;
    --lwt-bg: #f8f9fa;
    --lwt-white: #ffffff;
    --lwt-text: #6c6c75;
    --lwt-text-dark: #333333;
    --lwt-shadow: 0 10px 30px rgba(26,25,36,0.06);
    --lwt-radius-btn: 50px; /* Fully rounded pill buttons */
    --lwt-radius-card: 20px;
}

.page-laweta {
    font-family: 'Inter', sans-serif;
    color: var(--lwt-text);
    background: var(--lwt-bg);
}

/* ──────────────────────────────────────────────────────────────
   1. HERO (Hybrid with arrow + button)
   ────────────────────────────────────────────────────────────── */
.lwt-hero {
    position: relative;
    padding: 180px 0 120px;
    background: var(--lwt-dark);
    display: flex;
    align-items: center;
    overflow: hidden;
    min-height: 85vh;
}
.lwt-hero__img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    opacity: 0.55;
}
.lwt-hero__overlay {
    position: absolute;
    inset: 0;
    background: 
        linear-gradient(to top, rgba(26,25,36,1) 0%, transparent 70%),
        radial-gradient(ellipse at 70% 30%, rgba(255,157,66,.1) 0%, transparent 50%);
    z-index: 1;
}
.lwt-hero .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    height: 100%;
}
.lwt-hero__badge {
    display: inline-block;
    padding: 8px 20px;
    background: rgba(255,157,66,0.15);
    color: var(--lwt-accent);
    font-weight: 600;
    font-size: 14px;
    border-radius: var(--lwt-radius-btn);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 24px;
    border: 1px solid rgba(255,157,66,0.25);
}
.lwt-hero__title {
    color: var(--lwt-white);
    font-size: clamp(42px, 8vw, 76px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -1px;
    margin: 0 0 24px;
    max-width: 800px;
}
.lwt-hero__subtitle {
    color: rgba(255,255,255,0.75);
    font-size: clamp(16px, 3vw, 20px);
    line-height: 1.6;
    max-width: 600px;
    margin: 0 0 48px;
}
.lwt-hero__actions {
    display: flex;
    align-items: center;
    gap: 24px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}
.lwt-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: var(--lwt-accent);
    color: var(--lwt-white);
    font-size: 16px;
    font-weight: 700;
    padding: 18px 40px;
    border-radius: var(--lwt-radius-btn); /* Rounded completely */
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 8px 25px rgba(255,157,66,0.25);
}
.lwt-btn.pulse { animation: lwt-pulse 2s infinite; }
@keyframes lwt-pulse {
    0% { box-shadow: 0 0 0 0 rgba(255,157,66,0.5); }
    70% { box-shadow: 0 0 0 15px rgba(255,157,66,0); }
    100% { box-shadow: 0 0 0 0 rgba(255,157,66,0); }
}
.lwt-btn:hover {
    background: var(--lwt-accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(255,157,66,0.35);
}
.lwt-hero__eta {
    color: var(--lwt-white);
    font-weight: 500;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lwt-hero__eta svg { color: #4ade80; width: 18px; height: 18px; }
.lwt-hero__arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50%;
    color: var(--lwt-white);
    animation: lwt-bounce 2s infinite;
    margin-top: auto;
}
.lwt-hero__arrow svg { width: 16px; height: 16px; }
@keyframes lwt-bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(6px); }
}

/* ──────────────────────────────────────────────────────────────
   2. TRUST BAR 
   ────────────────────────────────────────────────────────────── */
.lwt-trust {
    background: var(--lwt-dark);
    padding: 30px 20px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
}
.lwt-trust__grid {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}
.lwt-trust__item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: rgba(255,255,255,0.8);
    font-weight: 500;
    font-size: 16px;
}
.lwt-trust__item svg { color: var(--lwt-accent); width: 20px; height: 20px; }

/* ──────────────────────────────────────────────────────────────
   3. CENTER HEADING (icomat style word reveal)
   ────────────────────────────────────────────────────────────── */
.lwt-centerHeading {
    background: var(--lwt-white);
    padding: 120px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.lwt-centerHeading__deco {
    position: absolute;
    inset: 0;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    pointer-events: none;
}
.lwt-centerHeading__deco span { border-right: 1px solid rgba(26,25,36,.04); }
.lwt-centerHeading__deco span:first-child { border-left: 1px solid rgba(26,25,36,.04); }
.lwt-centerHeading h2 {
    font-size: clamp(28px, 5vw, 52px);
    font-weight: 800;
    line-height: 1.25;
    letter-spacing: -1px;
    color: var(--lwt-dark);
    position: relative;
    z-index: 1;
    max-width: 700px;
    margin: 0 auto;
}
.lwt-centerHeading .lwt-word {
    display: inline-block;
    opacity: 0.2;
    transition: opacity 0.6s ease;
}
.lwt-centerHeading .lwt-word.active { opacity: 1; }

/* ──────────────────────────────────────────────────────────────
   4. SERVICES GRID
   ────────────────────────────────────────────────────────────── */
.lwt-section {
    padding: 100px 20px;
    max-width: 1200px;
    margin: 0 auto;
}
.lwt-section__header { text-align: center; margin-bottom: 60px; }
.lwt-section__title {
    font-size: clamp(32px, 5vw, 46px);
    color: var(--lwt-dark);
    font-weight: 800;
    letter-spacing: -1px;
    margin: 0;
}
.lwt-services__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}
.lwt-service-card {
    background: var(--lwt-white);
    padding: 40px 30px;
    border-radius: var(--lwt-radius-card);
    box-shadow: var(--lwt-shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-top: 4px solid transparent;
}
.lwt-service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(26,25,36,0.08);
    border-top-color: var(--lwt-accent);
}
.lwt-service-card__icon {
    width: 60px;
    height: 60px;
    background: rgba(255,157,66,0.1);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    color: var(--lwt-accent);
}
.lwt-service-card__icon svg { width: 30px; height: 30px; }
.lwt-service-card h3 {
    font-size: 20px;
    color: var(--lwt-text-dark);
    font-weight: 800;
    margin: 0 0 12px;
}
.lwt-service-card p {
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
    color: var(--lwt-text);
}

/* ──────────────────────────────────────────────────────────────
   5. ADVANTAGE (icomat 2-col layout)
   ────────────────────────────────────────────────────────────── */
.lwt-advantage {
    background: var(--lwt-white);
    padding: 100px 20px;
}
.lwt-advantage__inner {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
}
.lwt-advantage__subtitle {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--lwt-accent);
    margin-bottom: 20px;
}
.lwt-advantage__title {
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: var(--lwt-dark);
    margin: 0;
}
.lwt-advantage__desc { margin-bottom: 40px; }
.lwt-advantage__desc p {
    font-size: 16px;
    line-height: 1.7;
    color: var(--lwt-text);
    margin-bottom: 14px;
}
.lwt-advantage__list { display: flex; flex-direction: column; gap: 0; }
.lwt-advantage__item {
    padding: 24px 0;
    border-top: 1px solid rgba(26,25,36,.08);
}
.lwt-advantage__item:last-child { border-bottom: 1px solid rgba(26,25,36,.08); }
.lwt-advantage__item h3 {
    font-size: 18px;
    font-weight: 800;
    color: var(--lwt-text-dark);
    margin: 0 0 8px 0;
}
.lwt-advantage__item p {
    font-size: 15px;
    line-height: 1.6;
    color: var(--lwt-text);
    margin: 0;
}

/* ──────────────────────────────────────────────────────────────
   6. TIMELINE (icomat style dots & dark background)
   ────────────────────────────────────────────────────────────── */
.lwt-timeline {
    background: var(--lwt-dark);
    color: var(--lwt-white);
    padding: 120px 20px;
    overflow: hidden;
}
.lwt-timeline__inner { max-width: 1200px; margin: 0 auto; }
.lwt-timeline__title {
    font-size: clamp(32px, 5vw, 46px);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1px;
    margin: 0 0 60px 0;
    color: var(--lwt-white);
}
.lwt-timeline__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}
.lwt-timeline__card { position: relative; }
.lwt-timeline__label {
    font-size: 14px;
    font-weight: 700;
    color: var(--lwt-accent);
    letter-spacing: 1.5px;
    margin-bottom: 20px;
}
.lwt-timeline__dotline {
    display: flex;
    align-items: center;
    gap: 0;
    margin-bottom: 24px;
    height: 10px;
}
.lwt-timeline__dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--lwt-accent);
    flex-shrink: 0;
    box-shadow: 0 0 0 4px rgba(255,157,66,.2);
}
.lwt-timeline__dots {
    flex: 1;
    height: 2px;
    background-image: radial-gradient(circle, rgba(255,157,66,.4) 1px, transparent 1px);
    background-size: 8px 2px;
    background-repeat: repeat-x;
}
.lwt-timeline__card-title {
    font-size: 20px;
    font-weight: 800;
    color: var(--lwt-white);
    margin: 0 0 12px 0;
}
.lwt-timeline__card-text {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255,255,255,0.6);
    margin: 0;
}

/* ──────────────────────────────────────────────────────────────
   7. FAQ ACCORDION (Replaces SEO block)
   ────────────────────────────────────────────────────────────── */
.lwt-faq {
    background: var(--lwt-bg);
    padding: 100px 20px;
}
.lwt-faq__inner {
    max-width: 800px;
    margin: 0 auto;
}
.lwt-faq__item {
    background: var(--lwt-white);
    border-radius: var(--lwt-radius-card);
    margin-bottom: 16px;
    box-shadow: var(--lwt-shadow);
    overflow: hidden;
    transition: all 0.3s ease;
}
.lwt-faq__item.active {
    box-shadow: 0 15px 35px rgba(26,25,36,0.08);
}
.lwt-faq__question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 30px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 700;
    color: var(--lwt-text-dark);
    user-select: none;
}
.lwt-faq__icon {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--lwt-accent);
    transition: transform 0.3s ease;
}
.lwt-faq__item.active .lwt-faq__icon {
    transform: rotate(45deg); /* converts + to X */
}
.lwt-faq__answer {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, padding 0.4s ease;
}
.lwt-faq__item.active .lwt-faq__answer {
    padding: 0 30px 24px;
    max-height: 300px;
}
.lwt-faq__answer p {
    font-size: 15px;
    line-height: 1.7;
    color: var(--lwt-text);
    margin: 0;
}

/* ──────────────────────────────────────────────────────────────
   8. FINAL CTA
   ────────────────────────────────────────────────────────────── */
.lwt-final {
    background: var(--lwt-white);
    padding: 100px 20px;
    text-align: center;
}
.lwt-final__inner { max-width: 800px; margin: 0 auto; }
.lwt-final h2 {
    font-size: clamp(32px, 5vw, 46px);
    font-weight: 800;
    letter-spacing: -1px;
    margin: 0 0 20px;
    color: var(--lwt-dark);
}
.lwt-final p {
    font-size: 18px;
    line-height: 1.6;
    color: var(--lwt-text);
    margin: 0 0 40px;
}


/* ──────────────────────────────────────────────────────────────
   RESPONSIVE DESIGN 
   ────────────────────────────────────────────────────────────── */
@media (max-width: 991px) {
    .lwt-hero { min-height: 70vh; padding: 140px 0 80px; text-align: center; }
    .lwt-hero__overlay { background: linear-gradient(to top, rgba(26,25,36,1) 0%, rgba(26,25,36,0.6) 100%); }
    .lwt-hero__title { margin: 0 auto 20px; }
    .lwt-hero__subtitle { margin: 0 auto 40px; }
    .lwt-hero__actions { justify-content: center; flex-direction: column; gap: 16px; margin-bottom: 20px; }
    .lwt-hero__eta { margin-top: 10px; }
    .lwt-hero__arrow { margin: 20px auto 0; }
    
    .lwt-advantage__inner { grid-template-columns: 1fr; gap: 40px; }
    .lwt-timeline__grid { grid-template-columns: 1fr; gap: 40px; }
    .lwt-timeline__dots { display: none; }
}

@media (max-width: 768px) {
    .lwt-trust { padding: 20px 15px; }
    .lwt-trust__grid { flex-direction: column; gap: 15px; align-items: center; }
    .lwt-trust__item { width: 100%; justify-content: center; text-align: center; }
    
    .lwt-section { padding: 70px 20px; }
    .lwt-section__header { margin-bottom: 40px; }
    .lwt-centerHeading { padding: 80px 20px; }
    .lwt-advantage { padding: 70px 20px; }
    .lwt-timeline { padding: 70px 20px; }
    .lwt-faq { padding: 70px 20px; }
    .lwt-final { padding: 80px 20px; }
    
    .lwt-timeline__dotline { display: none; }
    .lwt-timeline__card { padding-left: 24px; border-left: 2px dashed rgba(255,157,66,.3); }
    .lwt-timeline__card:last-child { border-left-color: transparent; }
    .lwt-timeline__card::before {
        content: ""; position: absolute; left: -6px; top: 0;
        width: 10px; height: 10px; border-radius: 50%;
        background: var(--lwt-accent); box-shadow: 0 0 0 4px var(--lwt-dark);
    }
    .lwt-timeline__label { margin-bottom: 12px; }

    .lwt-btn { width: 100%; padding: 18px 20px; }
    
    .lwt-faq__question { font-size: 16px; padding: 20px; }
    .lwt-faq__item.active .lwt-faq__answer { padding: 0 20px 20px; }
}
</style>

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
