<?php
/**
 * Template Name: Ewakuator
 */

$form_success = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
    $name = sanitize_text_field($_POST['name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $location = sanitize_text_field($_POST['location'] ?? '');
    $vehicle_type = sanitize_text_field($_POST['vehicle_type'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (!empty($name) && !empty($phone)) {
        $to = get_option('admin_email');
        $subject = 'Nowe zgłoszenie: Pomoc Drogowa';
        $body = "Imię: $name\nTelefon: $phone\nLokalizacja: $location\nPojazd: $vehicle_type\nWiadomość: $message";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        if (wp_mail($to, $subject, $body, $headers)) {
            $form_success = true;
        } else {
            $form_error = 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.';
        }
    } else {
        $form_error = 'Proszę wypełnić wymagane pola: Imię i Telefon.';
    }
}

get_header();
?>

<style>
/* ═══════════════════════════════════════════════════════════
   Ewakuator Landing Page — Styles based on Tak Serwis Brand
   ═══════════════════════════════════════════════════════════ */

/* Force remove any theme-injected top spacing that causes white gaps */
body:not(.logged-in) { margin-top: 0 !important; padding-top: 0 !important; }
.site, .site-inner, .site-content, .content-wrapper, .page-wrapper, .wrapper, #page, #content, #primary, #main, #main-content {
    padding-top: 0 !important;
    margin-top: 0 !important;
}

:where(#tsc-main) *,
:where(#tsc-main) *::before,
:where(#tsc-main) *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html { scroll-behavior: smooth; }

:where(#tsc-main) {
    font-family: var(--font-family, 'Inter', sans-serif);
    font-size: var(--fs-body, 17px);
    line-height: 1.65;
    color: var(--color-text, #1A1F24);
    background: var(--color-light, #FFFFFF);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

:where(#tsc-main) img { max-width: 100%; height: auto; display: block; }
:where(#tsc-main) a { text-decoration: none; color: inherit; }
:where(#tsc-main) ul { list-style: none; }
:where(#tsc-main) h1, :where(#tsc-main) h2, :where(#tsc-main) h3, :where(#tsc-main) h4 {
    line-height: 1.15; font-weight: 800;
}

/* ── Fallback CSS variables if not loaded from theme ── */
#tsc-main {
    --color-accent: #FF8A00;
    --color-accent-hover: #E67A00;
    --color-dark: #151A1E;
    --color-dark-soft: #1E252B;
    --color-light: #FFFFFF;
    --color-gray-50: #F7F8FA;
    --color-gray-100: #EEF0F3;
    --color-gray-200: #D9DDE3;
    --color-text-muted: #5A636C;
    --container-width: 1200px;
    --container-padding: 24px;
    --fs-section: clamp(32px, 4vw, 52px);
    --radius-md: 20px;
    --radius-large: 28px;
    --radius-pill: 999px;
    --section-gap: clamp(80px, 10vw, 160px);
    --duration: 0.3s;
    --ease: ease;
    --shadow-card: 0 8px 40px rgba(0, 0, 0, 0.08);
}

.tsc-container {
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 var(--container-padding);
}

.tsc-section-title {
    font-size: var(--fs-section);
    font-weight: 900;
    color: var(--color-dark);
    margin-bottom: 56px;
    letter-spacing: -0.02em;
    text-align: center;
}
.tsc-section-title span { color: var(--color-accent); }
.tsc-section-title--light { color: var(--color-light); }

/* Buttons */
.tsc-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 18px 40px;
    font-family: inherit;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.02em;
    border-radius: var(--radius-pill);
    border: 2px solid transparent;
    cursor: pointer;
    transition: all var(--duration) var(--ease);
    text-align: center;
    white-space: nowrap;
}

.tsc-btn--primary {
    background: var(--color-accent);
    color: var(--color-light);
    border-color: var(--color-accent);
}
.tsc-btn--primary:hover {
    background: var(--color-accent-hover);
    border-color: var(--color-accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(255,138,0,0.35);
}

.tsc-btn--outline {
    background: transparent;
    color: var(--color-light);
    border-color: rgba(255,255,255,0.35);
}
.tsc-btn--outline:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.6);
    transform: translateY(-2px);
}

.tsc-btn--dark { background: var(--color-dark); color: var(--color-light); border-color: var(--color-dark); }
.tsc-btn--dark:hover { background: var(--color-dark-soft); transform: translateY(-2px); }

.tsc-btn--white { background: var(--color-light); color: var(--color-dark); border-color: var(--color-light); }
.tsc-btn--white:hover { background: var(--color-gray-50); transform: translateY(-2px); }

/* ── 1. HERO SLIDER ── */
.tsc-hero { margin-top:-150px; position: relative; height: 100vh; min-height: 700px; background: var(--color-dark); overflow: hidden; display: flex; align-items: center; z-index:1; padding-top: 150px; }
.tsc-hero-slider { position: absolute; inset: 0; display: flex; transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94); z-index:1; }
.tsc-slide { min-width: 100vw; height: 100%; background-size: cover; background-position: center; position: relative; }
.tsc-slide::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(21, 26, 30, 0.8) 0%, rgba(21, 26, 30, 0.95) 100%); }

.tsc-hero-content { position: relative; z-index: 10; width: 100%; text-align: center; color: var(--color-light); }
.tsc-hero-tag { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,138,0,0.15); border: 1px solid rgba(255,138,0,0.3); border-radius: var(--radius-pill); padding: 8px 20px; font-size: 13px; font-weight: 700; color: var(--color-accent); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 24px; }
.tsc-hero-tag-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--color-accent); animation: pulse 2s infinite; }
@keyframes pulse { 0%, 100% { opacity:1; transform:scale(1); } 50% { opacity:0.5; transform:scale(0.8); } }

.tsc-hero-title { font-size: clamp(42px, 6vw, 76px); font-weight: 900; margin-bottom: 20px; line-height: 1.1; letter-spacing: -0.03em; }
.tsc-hero-sub { font-size: clamp(18px, 2vw, 24px); font-weight: 500; color: rgba(255,255,255,0.7); margin-bottom: 48px; max-width: 700px; margin-left: auto; margin-right: auto; }
.tsc-hero-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

.tsc-slider-nav { position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 10; }
.tsc-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.2); cursor: pointer; transition: 0.3s; }
.tsc-dot.active { background: var(--color-accent); transform: scale(1.3); }

/* ── 2. SERVICES ── */
.tsc-services { padding: var(--section-gap) 0; background: var(--color-gray-50); }
.tsc-services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.tsc-service-card { background: var(--color-light); border-radius: var(--radius-large); padding: 40px 32px; box-shadow: var(--shadow-card); transition: transform var(--duration) var(--ease), box-shadow var(--duration) var(--ease); text-align: center; border: 2px solid transparent; }
.tsc-service-card:hover { transform: translateY(-8px); border-color: var(--color-accent); box-shadow: 0 16px 56px rgba(0,0,0,0.14); }
.tsc-service-icon { display: inline-flex; align-items: center; justify-content: center; width: 72px; height: 72px; border-radius: 20px; background: rgba(255,138,0,0.1); color: var(--color-accent); margin-bottom: 24px; transition: background 0.3s; }
.tsc-service-card:hover .tsc-service-icon { background: var(--color-accent); color: var(--color-light); }
.tsc-service-title { font-size: 20px; font-weight: 800; color: var(--color-dark); margin-bottom: 12px; }
.tsc-service-desc { color: var(--color-text-muted); line-height: 1.6; font-size: 15px; }

/* ── 3. ADVANTAGES ── */
.tsc-adv { padding: var(--section-gap) 0; background: var(--color-dark); }
.tsc-adv-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 24px; text-align: center; }
.tsc-adv-card { background: var(--color-dark-soft); border: 1px solid rgba(255,255,255,0.05); border-radius: var(--radius-large); padding: 32px 20px; transition: transform var(--duration); }
.tsc-adv-card:hover { transform: translateY(-6px); border-color: rgba(255,138,0,0.3); }
.tsc-adv-icon { font-size: 40px; margin-bottom: 16px; display: block; }
.tsc-adv-title { font-size: 16px; font-weight: 700; color: var(--color-light); margin-bottom: 8px; }
.tsc-adv-desc { font-size: 13px; color: rgba(255,255,255,0.5); }

/* ── 4. HOW IT WORKS ── */
.tsc-steps { padding: var(--section-gap) 0; background: var(--color-light); }
.tsc-steps-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; position: relative; }
.tsc-steps-grid::before { content: ''; position: absolute; top: 32px; left: 12.5%; width: 75%; height: 2px; background: linear-gradient(90deg, var(--color-accent), var(--color-gray-200)); z-index: 1; }
.tsc-step { text-align: center; position: relative; z-index: 2; padding: 0 16px; }
.tsc-step-num { width: 64px; height: 64px; background: var(--color-accent); color: var(--color-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 900; margin: 0 auto 24px; box-shadow: 0 8px 24px rgba(255,138,0,0.3); border: 6px solid var(--color-light); }
.tsc-step-title { font-size: 18px; font-weight: 800; color: var(--color-dark); margin-bottom: 10px; }
.tsc-step-desc { font-size: 14px; color: var(--color-text-muted); }

/* ── 5. PRICE SECTION ── */
.tsc-pricing { padding: var(--section-gap) 0; background: var(--color-gray-50); }
.tsc-pricing-box { background: var(--color-dark); border-radius: var(--radius-large); padding: 64px; text-align: center; color: var(--color-light); position: relative; overflow: hidden; }
.tsc-pricing-box::before { content:''; position: absolute; inset:0; background: radial-gradient(circle at top right, rgba(255,138,0,0.15), transparent 60%); pointer-events: none; }
.tsc-pricing-box h2 { font-size: 40px; margin-bottom: 20px; font-weight: 900; }
.tsc-pricing-box p { font-size: 18px; color: rgba(255,255,255,0.7); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto; }

/* ── 6. CUST REVIEWS ── */
.tsc-reviews { padding: var(--section-gap) 0; background: var(--color-light); }
.tsc-rev-slider { display: flex; overflow: hidden; max-width: 800px; margin: 0 auto; padding-bottom: 20px; }
.tsc-rev-track { display: flex; transition: transform 0.5s ease; width: 100%; }
.tsc-rev-slide { min-width: 100%; padding: 48px; background: var(--color-gray-50); border-radius: var(--radius-large); text-align: center; border: 1px solid var(--color-gray-100); }
.tsc-stars { color: var(--color-accent); font-size: 22px; margin-bottom: 20px; letter-spacing: 2px; }
.tsc-rev-text { font-size: 18px; font-weight: 500; font-style: italic; color: var(--color-dark); margin-bottom: 24px; line-height: 1.6; }
.tsc-rev-author { font-size: 16px; font-weight: 800; color: var(--color-gray-600); }
.tsc-rev-author span { color: var(--color-accent); }

/* ── 7. CONTACT & FORM ── */
.tsc-contact { padding: var(--section-gap) 0; background: var(--color-gray-50); }
.tsc-contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; }
.tsc-contact-info h3 { font-size: 32px; font-weight: 900; margin-bottom: 32px; color: var(--color-dark); }
.tsc-info-item { display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px; }
.tsc-info-icon { width: 48px; height: 48px; border-radius: 14px; background: var(--color-light); box-shadow: var(--shadow-card); display: flex; align-items: center; justify-content: center; color: var(--color-accent); flex-shrink: 0; }
.tsc-info-text strong { display: block; font-size: 13px; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-gray-400); margin-bottom: 4px; }
.tsc-info-text { font-size: 17px; font-weight: 600; color: var(--color-dark); }

.tsc-map { height: 320px; border-radius: var(--radius-large); overflow: hidden; margin-top: 40px; box-shadow: var(--shadow-card); }

.tsc-form-box { background: var(--color-light); padding: 48px; border-radius: var(--radius-large); box-shadow: var(--shadow-card); }
.tsc-form-box h3 { font-size: 24px; font-weight: 800; margin-bottom: 24px; color: var(--color-dark); }

.tsc-input { width: 100%; padding: 16px 20px; border: 2px solid var(--color-gray-100); border-radius: var(--radius-sm); font-family: inherit; font-size: 16px; background: var(--color-gray-50); transition: border-color var(--duration); margin-bottom: 16px; outline: none; }
.tsc-input:focus { border-color: var(--color-accent); background: var(--color-light); }
textarea.tsc-input { height: 120px; resize: vertical; }

.tsc-alert { padding: 16px 20px; border-radius: var(--radius-sm); margin-bottom: 24px; font-size: 15px; font-weight: 600; }
.tsc-alert--success { background: rgba(39, 174, 96, 0.1); color: #27AE60; border: 1px solid rgba(39, 174, 96, 0.2); }
.tsc-alert--error { background: rgba(235, 87, 87, 0.1); color: #EB5757; border: 1px solid rgba(235, 87, 87, 0.2); }

/* Responsive */
@media (max-width: 1024px) {
    .tsc-services-grid { grid-template-columns: repeat(2, 1fr); }
    .tsc-adv-grid { grid-template-columns: repeat(3, 1fr); }
    .tsc-steps-grid::before { display: none; }
    .tsc-steps-grid { grid-template-columns: repeat(2, 1fr); gap: 48px; }
    .tsc-contact-grid { grid-template-columns: 1fr; }
}

@media (max-width: 768px) {
    .tsc-hero-title { font-size: 40px; }
    .tsc-hero-actions { flex-direction: column; width: 100%; max-width: 300px; margin: 0 auto; }
    .tsc-btn { width: 100%; }
    .tsc-services-grid { grid-template-columns: 1fr; }
    .tsc-adv-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .tsc-steps-grid { grid-template-columns: 1fr; }
    .tsc-pricing-box { padding: 40px 24px; }
    .tsc-rev-slide { padding: 32px 24px; }
    .tsc-form-box { padding: 32px 24px; }
}
@media (max-width: 480px) {
    .tsc-adv-grid { grid-template-columns: 1fr; }
}
</style>

<?php $lang = function_exists('pll_current_language') ? pll_current_language() : 'pl'; ?>

<main id="tsc-main">
    
    <!-- 1. HERO SLIDER -->
    <section class="tsc-hero" id="home">
        <div class="tsc-hero-slider" id="tsc-hero-slider">
            <div class="tsc-slide" style="background-image: url('https://images.unsplash.com/photo-1616423640778-28d1b53229bd?auto=format&fit=crop&q=80&w=1920');"></div>
            <div class="tsc-slide" style="background-image: url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=1920');"></div>
            <div class="tsc-slide" style="background-image: url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920');"></div>
        </div>
        
        <div class="tsc-container tsc-hero-content">
            <div class="tsc-hero-tag">
                <span class="tsc-hero-tag-dot"></span>
                <?php echo ($lang === 'ru') ? 'Помощь на дороге 24/7' : 'Pomoc drogowa 24/7'; ?>
            </div>
            <h1 class="tsc-hero-title">
                <?php echo ($lang === 'ru') 
                    ? 'Круглосуточный <span style="color:var(--color-accent);">Эвакуатор</span>' 
                    : 'Całodobowa <span style="color:var(--color-accent);">Pomoc Drogowa</span>'; ?>
            </h1>
            <p class="tsc-hero-sub">
                <?php echo ($lang === 'ru') 
                    ? 'Быстрая и надежная помощь в любой точке Польши. Позвоните, и мы приедем за 30 минут!' 
                    : 'Szybka i niezawodna pomoc w każdym miejscu Polski. Zadzwoń, a będziemy u Ciebie w 30 minut!'; ?>
            </p>
            <div class="tsc-hero-actions">
                <a href="tel:+48000000000" class="tsc-btn tsc-btn--primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <?php echo ($lang === 'ru') ? 'ПОЗВОНИТЬ СЕЙЧАС' : 'ZADZWOŃ TERAZ'; ?>
                </a>
                <a href="#formualrz" class="tsc-btn tsc-btn--outline" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(10px);">
                    <?php echo ($lang === 'ru') ? 'ВЫЗВАТЬ ОНЛАЙН' : 'WEZWIJ ONLINE'; ?>
                </a>
            </div>
        </div>

        <div class="tsc-slider-nav" id="tsc-hero-nav">
            <div class="tsc-dot active" data-index="0"></div>
            <div class="tsc-dot" data-index="1"></div>
            <div class="tsc-dot" data-index="2"></div>
        </div>
    </section>

    <!-- 2. SERVICES -->
    <section class="tsc-services" id="uslugi">
        <div class="tsc-container">
            <h2 class="tsc-section-title"><?php echo ($lang === 'ru') ? 'Наши <span>Услуги</span>' : 'Nasze <span>Usługi</span>'; ?></h2>
            <div class="tsc-services-grid">
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Эвакуация' : 'Holowanie (Ewakuator)'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Безопасная транспортировка авто после ДТП или поломки в ближайший сервис.' : 'Bezpieczny transport Twojego pojazdu lawetą z miejsca wypadku lub awarii bezpośrednio do serwisu.'; ?></p>
                </div>
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Помощь на дороге' : 'Pomoc Drogowa'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Мелкий ремонт на месте: подвоз топлива, аварийное вскрытие замков без эвакуации.' : 'Drobne naprawy na drodze, dowóz paliwa, awaryjne otwieranie aut. Pomożemy bez wzywania lawety.'; ?></p>
                </div>
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Транспортировка' : 'Transport Aut'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Перевозка новых, классических и люксовых автомобилей по территории ЕС.' : 'Przewóz samochodów nowych, luksusowych i klasycznych na terenie całego kraju oraz Europy.'; ?></p>
                </div>
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Прикурить авто' : 'Odpalanie z kabli'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Разрядился аккумулятор? Быстро приедем и запустим двигатель профессиональным бустером.' : 'Rozładowany akumulator? Błyskawicznie dojeżdżamy, uruchamiamy silnik za pomocą profesjonalnego boostera.'; ?></p>
                </div>
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="22"/><line x1="2" y1="12" x2="22" y2="12"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Замена колеса' : 'Wymiana Koła'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Пробили колесо? Поставим запаску или доставим до ближайшего работающего шиномонтажа.' : 'Przebita opona? Zmienimy koło na zapasowe lub odholujemy pojazd do najbliższej czynnej wulkanizacji.'; ?></p>
                </div>
                <div class="tsc-service-card">
                    <div class="tsc-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                    <h3 class="tsc-service-title"><?php echo ($lang === 'ru') ? 'Вытащим из кювета' : 'Wyciąganie z rowu'; ?></h3>
                    <p class="tsc-service-desc"><?php echo ($lang === 'ru') ? 'Имеем мощные лебедки, чтобы аккуратно вернуть ваш автомобиль на дорогу.' : 'Wypadłeś z drogi? Posiadamy wyciągarki i odpowiedni sprzęt, aby bezpiecznie przywrócić auto na jezdnię.'; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. ADVANTAGES -->
    <section class="tsc-adv" id="dlaczego-my">
        <div class="tsc-container">
            <h2 class="tsc-section-title tsc-section-title--light"><?php echo ($lang === 'ru') ? 'Почему <span>Мы?</span>' : 'Dlaczego <span>Solidny Wybór?</span>'; ?></h2>
            <div class="tsc-adv-grid">
                <div class="tsc-adv-card">
                    <span class="tsc-adv-icon">⏰</span>
                    <h3 class="tsc-adv-title"><?php echo ($lang === 'ru') ? 'Доступность 24/7' : 'Dostępność 24/7'; ?></h3>
                    <p class="tsc-adv-desc"><?php echo ($lang === 'ru') ? 'Работаем без выходных и праздников.' : 'Dyżurujemy cały rok, w dni robocze i święta.'; ?></p>
                </div>
                <div class="tsc-adv-card">
                    <span class="tsc-adv-icon">🚀</span>
                    <h3 class="tsc-adv-title"><?php echo ($lang === 'ru') ? 'Быстрый выезд' : 'Szybki Dojazd'; ?></h3>
                    <p class="tsc-adv-desc"><?php echo ($lang === 'ru') ? 'Гарантируем мгновенную реакцию.' : 'Gwarantujemy błyskawiczną reakcję na wezwanie.'; ?></p>
                </div>
                <div class="tsc-adv-card">
                    <span class="tsc-adv-icon">👨‍🔧</span>
                    <h3 class="tsc-adv-title"><?php echo ($lang === 'ru') ? 'Профи Водители' : 'Profesjonalni Kierowcy'; ?></h3>
                    <p class="tsc-adv-desc"><?php echo ($lang === 'ru') ? 'Бережное отношение к вашей машине.' : 'Doświadczona ekipa dba o powierzone mienie.'; ?></p>
                </div>
                <div class="tsc-adv-card">
                    <span class="tsc-adv-icon">💰</span>
                    <h3 class="tsc-adv-title"><?php echo ($lang === 'ru') ? 'Честные Цены' : 'Uczciwe Ceny'; ?></h3>
                    <p class="tsc-adv-desc"><?php echo ($lang === 'ru') ? 'Без скрытых накруток после приезда.' : 'Brak ukrytych kosztów, wycena przed usługą.'; ?></p>
                </div>
                <div class="tsc-adv-card">
                    <span class="tsc-adv-icon">🚚</span>
                    <h3 class="tsc-adv-title"><?php echo ($lang === 'ru') ? 'Новый Транспорт' : 'Nowoczesny Sprzęt'; ?></h3>
                    <p class="tsc-adv-desc"><?php echo ($lang === 'ru') ? 'Эвакуаторы последнего поколения.' : 'Dysponujemy najnowszymi, niezawodnymi lawetami.'; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. HOW IT WORKS -->
    <section class="tsc-steps">
        <div class="tsc-container">
            <h2 class="tsc-section-title"><?php echo ($lang === 'ru') ? 'Как это <span>Работает</span>' : 'Jak to <span>Działa</span>'; ?></h2>
            <div class="tsc-steps-grid">
                <div class="tsc-step">
                    <div class="tsc-step-num">1</div>
                    <h3 class="tsc-step-title"><?php echo ($lang === 'ru') ? 'Позвоните нам' : 'Zadzwoń do nas'; ?></h3>
                    <p class="tsc-step-desc"><?php echo ($lang === 'ru') ? 'Опишите что случилось и где вы.' : 'Skontaktuj się i opisz swój problem i lokalizację.'; ?></p>
                </div>
                <div class="tsc-step">
                    <div class="tsc-step-num">2</div>
                    <h3 class="tsc-step-title"><?php echo ($lang === 'ru') ? 'Ожидайте' : 'Oczekuj pomocy'; ?></h3>
                    <p class="tsc-step-desc"><?php echo ($lang === 'ru') ? 'Эвакуатор уже выехал. До 30 мин.' : 'Laweta jest w drodze. Szacowany czas do 30 min.'; ?></p>
                </div>
                <div class="tsc-step">
                    <div class="tsc-step-num">3</div>
                    <h3 class="tsc-step-title"><?php echo ($lang === 'ru') ? 'Погрузка' : 'Załadunek'; ?></h3>
                    <p class="tsc-step-desc"><?php echo ($lang === 'ru') ? 'Специалист безопасно погрузит авто.' : 'Nasz pracownik bezpiecznie zamocuje pojazd.'; ?></p>
                </div>
                <div class="tsc-step">
                    <div class="tsc-step-num">4</div>
                    <h3 class="tsc-step-title"><?php echo ($lang === 'ru') ? 'Решение проблемы' : 'Problem Rozwiązany'; ?></h3>
                    <p class="tsc-step-desc"><?php echo ($lang === 'ru') ? 'Доставим в любой автосервис или дом.' : 'Twoje auto trafia do warsztatu lub pod dom.'; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PRICE -->
    <section class="tsc-pricing">
        <div class="tsc-container">
            <div class="tsc-pricing-box">
                <h2><?php echo ($lang === 'ru') ? 'Прозрачные Цены' : 'Przejrzysty Cennik'; ?></h2>
                <p><?php echo ($lang === 'ru') ? 'Окончательная цена зависит от дистанции, массы авто и сложности ситуации. Позвоните сейчас и получите точный расчет без накруток.' : 'Ostateczna cena zależy od przejechanego dystansu, rodzaju pojazdu oraz stopnia skomplikowania sytuacji (np. rów). Zadzwoń, by poznać dokładny koszt.'; ?></p>
                <a href="tel:+48000000000" class="tsc-btn tsc-btn--outline" style="min-width: 250px;">
                    <?php echo ($lang === 'ru') ? 'УЗНАТЬ ЦЕНУ' : 'ZAPYTAJ O CENĘ'; ?>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. REVIEWS -->
    <section class="tsc-reviews">
        <div class="tsc-container">
            <h2 class="tsc-section-title"><?php echo ($lang === 'ru') ? 'Отзывы <span>Клиентов</span>' : 'Opinie <span>Klientów</span>'; ?></h2>
            <div class="tsc-rev-slider">
                <div class="tsc-rev-track" id="tsc-rev-track">
                    <div class="tsc-rev-slide">
                        <div class="tsc-stars">★★★★★</div>
                        <p class="tsc-rev-text"><?php echo ($lang === 'ru') ? '«Пробил колесо ночью. Ребята приехали через 20 минут, поставили запаску. Полный профи и отличная цена!»' : '«Złapałem gumę w nocy na autostradzie. Ekipa zjawila się w 20 minut, szybko i sprawnie zmieniła koło na zapas. Pełen profesjonalizm i świetna cena.»'; ?></p>
                        <p class="tsc-rev-author"><?php echo ($lang === 'ru') ? 'Михаил, <span>BMW X5</span>' : 'Michał, <span>BMW X5</span>'; ?></p>
                    </div>
                    <div class="tsc-rev-slide">
                        <div class="tsc-stars">★★★★★</div>
                        <p class="tsc-rev-text"><?php echo ($lang === 'ru') ? '«Машина заглохла в центре. Быстро погрузили на платформу и отвезли к моему механику. Водитель очень вежлив.»' : '«Auto nagle zgasło w centrum miasta. Holowanie do mojego zaufanego mechanika na drugim końcu Warszawy bez problemów. Bardzo miły kierowca.»'; ?></p>
                        <p class="tsc-rev-author"><?php echo ($lang === 'ru') ? 'Анна, <span>Toyota Corolla</span>' : 'Agnieszka, <span>Toyota Corolla</span>'; ?></p>
                    </div>
                    <div class="tsc-rev-slide">
                        <div class="tsc-stars">★★★★★</div>
                        <p class="tsc-rev-text"><?php echo ($lang === 'ru') ? '«Слетел в снежный кювет. Лебедкой вытащили аккуратно, бампер целый. Рекомендую от души!»' : '«Wypadłem z zaśnieżonej drogi do przydrożnego rowu. Chłopaki wyciągnęli moje auto bez dodatkowych uszkodzeń i odholowali pod dom. Polecam z całego serca!»'; ?></p>
                        <p class="tsc-rev-author"><?php echo ($lang === 'ru') ? 'Томаш, <span>Volvo XC60</span>' : 'Tomasz, <span>Volvo XC60</span>'; ?></p>
                    </div>
                </div>
            </div>
            <div class="tsc-slider-nav" id="tsc-rev-nav" style="position:relative; margin-top:24px; bottom:0;">
                <div class="tsc-dot active" style="background:#586068" data-index="0"></div>
                <div class="tsc-dot" style="background:#D9DDE3" data-index="1"></div>
                <div class="tsc-dot" style="background:#D9DDE3" data-index="2"></div>
            </div>
        </div>
    </section>

    <!-- 7 & 8. CONTACT & FORM -->
    <section class="tsc-contact" id="formualrz">
        <div class="tsc-container tsc-contact-grid">
            <div class="tsc-contact-info">
                <h2 class="tsc-section-title" style="text-align:left; margin-bottom: 40px;">
                    <?php echo ($lang === 'ru') ? 'Контакты и <span>База</span>' : 'Kontakt i <span>Dojazd</span>'; ?>
                </h2>
                
                <div class="tsc-info-item">
                    <div class="tsc-info-icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
                    <div class="tsc-info-text">
                        <strong><?php echo ($lang === 'ru') ? 'Телефон 24/7' : 'Telefon 24/7'; ?></strong>
                        <a href="tel:+48000000000" style="color:var(--color-accent); font-size:20px; font-weight:900;">+48 000 000 000</a>
                    </div>
                </div>
                <div class="tsc-info-item">
                    <div class="tsc-info-icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                    <div class="tsc-info-text">
                        <strong>Email</strong>
                        kontakt@takserwis.pl
                    </div>
                </div>
                <div class="tsc-info-item">
                    <div class="tsc-info-icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div class="tsc-info-text">
                        <strong><?php echo ($lang === 'ru') ? 'База эвакуаторов' : 'Baza sprzętu'; ?></strong>
                        ul. Warsztatowa 15, Warszawa
                    </div>
                </div>
                
                <div class="tsc-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156388.3543850787!2d20.9211124!3d52.2330653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1611234567890!5m2!1spl!2spl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="tsc-form-box">
                <h3><?php echo ($lang === 'ru') ? 'Оставить заявку' : 'Złóż Zamówienie'; ?></h3>
                
                <?php if ($form_success): ?>
                    <div class="tsc-alert tsc-alert--success">
                        <?php echo ($lang === 'ru') ? 'Заявка отправлена! Ожидайте звонка.' : 'Dziękujemy! Zgłoszenie wysłane. Oczekuj na telefon.'; ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($form_error)): ?>
                    <div class="tsc-alert tsc-alert--error"><?php echo esc_html($form_error); ?></div>
                <?php endif; ?>

                <form method="POST" action="#formualrz">
                    <input type="text" name="name" class="tsc-input" placeholder="<?php echo ($lang === 'ru') ? 'Ваше имя' : 'Imię i Nazwisko'; ?>" required>
                    <input type="tel" name="phone" class="tsc-input" placeholder="<?php echo ($lang === 'ru') ? 'Номер телефона' : 'Numer Telefonu'; ?>" required>
                    <input type="text" name="location" class="tsc-input" placeholder="<?php echo ($lang === 'ru') ? 'Где вы находитесь (адрес/трасса)' : 'Twoja ulica / nr drogi'; ?>">
                    <input type="text" name="vehicle_type" class="tsc-input" placeholder="<?php echo ($lang === 'ru') ? 'Марка / модель авто' : 'Rodzaj pojazdu (np. Audi A4)'; ?>">
                    <textarea name="message" class="tsc-input" placeholder="<?php echo ($lang === 'ru') ? 'Опишите проблему' : 'Opisz problem (opcjonalnie)'; ?>"></textarea>
                    
                    <button type="submit" name="submit_form" class="tsc-btn tsc-btn--primary" style="width:100%;">
                        <?php echo ($lang === 'ru') ? 'ОТПРАВИТЬ ЗАЯВКУ' : 'WYŚLIJ ZGŁOSZENIE'; ?>
                    </button>
                    <p style="text-align:center; font-size:13px; color:var(--color-gray-400); margin-top:16px;">
                        <?php echo ($lang === 'ru') ? 'Нажимая кнопку, вы соглашаетесь на обработку данных.' : 'Wysyłając zgłoszenie akceptujesz regulamin serwisu.'; ?>
                    </p>
                </form>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /* ── 1. Hero Slider ── */
    var heroSlider = document.getElementById('tsc-hero-slider');
    var heroDots = document.querySelectorAll('#tsc-hero-nav .tsc-dot');
    var heroSlideCount = heroDots.length;
    var heroCurrent = 0;

    function moveHero(idx) {
        heroCurrent = idx;
        if(heroSlider) heroSlider.style.transform = 'translateX(-' + (heroCurrent * 100) + 'vw)';
        heroDots.forEach(function(d) { d.classList.remove('active'); });
        if(heroDots[heroCurrent]) heroDots[heroCurrent].classList.add('active');
    }

    heroDots.forEach(function(dot, i) {
        dot.addEventListener('click', function() { moveHero(i); });
    });

    setInterval(function(){ moveHero((heroCurrent + 1) % heroSlideCount); }, 6000);

    /* ── 2. Reviews Slider ── */
    var revTrack = document.getElementById('tsc-rev-track');
    var revDots = document.querySelectorAll('#tsc-rev-nav .tsc-dot');
    var revSlideCount = revDots.length;
    var revCurrent = 0;

    function moveRev(idx) {
        revCurrent = idx;
        if(revTrack) revTrack.style.transform = 'translateX(-' + (revCurrent * 100) + '%)';
        revDots.forEach(function(d) { 
            d.classList.remove('active'); 
            d.style.background = '#D9DDE3';
        });
        if(revDots[revCurrent]) {
            revDots[revCurrent].classList.add('active');
            revDots[revCurrent].style.background = '#FF8A00';
        }
    }

    revDots.forEach(function(dot, i) {
        dot.addEventListener('click', function() { moveRev(i); });
    });

    setInterval(function(){ moveRev((revCurrent + 1) % revSlideCount); }, 7000);

    /* ── 3. Smooth Anchor Scroll ── */
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if(targetId === '#' || targetId === '#!') return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                window.scrollTo({
                    top: target.getBoundingClientRect().top + window.pageYOffset - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

<?php get_footer(); ?>
