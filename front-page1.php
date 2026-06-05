<?php
/**
 * Template Name: Front Page
 * Tak Serwis Club — Program lojalnościowy
 */

get_header();
?>

<style>
/* ═══════════════════════════════════════════════════════════
   Tak Serwis Club — Main Stylesheet
   Design language inspired by fitauto.ru/jobcard
   Pure CSS · BEM · CSS Variables · Flexbox + Grid
   ═══════════════════════════════════════════════════════════ */

/* ── CSS Variables (Design Tokens) ─────────────────────── */
:root {
    /* Colors */
    --color-accent: #FF8A00;
    --color-accent-hover: #E67A00;
    --color-accent-light: #FFA940;
    --color-dark: #151A1E;
    --color-dark-soft: #1E252B;
    --color-light: #FFFFFF;
    --color-gray-50: #F7F8FA;
    --color-gray-100: #EEF0F3;
    --color-gray-200: #D9DDE3;
    --color-gray-400: #8B939C;
    --color-gray-600: #586068;
    --color-gray-800: #2C343C;
    --color-text: #1A1F24;
    --color-text-muted: #5A636C;

    /* Typography */
    --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --fs-hero: clamp(42px, 6vw, 72px);
    --fs-section: clamp(32px, 4vw, 52px);
    --fs-card-title: clamp(22px, 2.5vw, 28px);
    --fs-body: 17px;
    --fs-small: 15px;

    /* Spacing */
    --section-gap: clamp(80px, 10vw, 160px);
    --container-width: 1200px;
    --container-padding: 24px;

    /* Radius */
    --radius-sm: 12px;
    --radius-md: 20px;
    --radius-large: 28px;
    --radius-pill: 999px;

    /* Shadows */
    --shadow-card: 0 8px 40px rgba(0, 0, 0, 0.08);
    --shadow-card-hover: 0 16px 56px rgba(0, 0, 0, 0.14);
    --shadow-glass: 0 12px 48px rgba(0, 0, 0, 0.25);

    /* Transitions */
    --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    --duration: 0.35s;
}

/* Force remove any theme-injected top spacing that causes white gaps */
body:not(.logged-in) { margin-top: 0 !important; padding-top: 0 !important; }
.site, .site-inner, .site-content, .content-wrapper, .page-wrapper, .wrapper, #page, #content, #primary, #main, #main-content {
    padding-top: 0 !important;
    margin-top: 0 !important;
}

:where(#main-content) *,
:where(#main-content) *::before,
:where(#main-content) *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

:where(#main-content) {
    font-family: var(--font-family);
    font-size: var(--fs-body);
    line-height: 1.65;
    color: var(--color-text);
    background: var(--color-light);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

:where(#main-content) img {
    max-width: 100%;
    height: auto;
    display: block;
}

:where(#main-content) a {
    text-decoration: none;
    color: inherit;
}

:where(#main-content) ul {
    list-style: none;
}

:where(#main-content) h1,
:where(#main-content) h2,
:where(#main-content) h3,
:where(#main-content) h4 {
    line-height: 1.15;
    font-weight: 800;
}

/* ── Container ─────────────────────────────────────────── */
.tsc-container {
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 var(--container-padding);
}

/* ── Section Title ─────────────────────────────────────── */
.tsc-section-title {
    font-size: var(--fs-section);
    font-weight: 900;
    color: var(--color-dark);
    margin-bottom: 56px;
    letter-spacing: -0.02em;
}

.tsc-section-title--light {
    color: var(--color-light);
}

/* ── Buttons ───────────────────────────────────────────── */
.tsc-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 18px 40px;
    font-family: var(--font-family);
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.02em;
    border-radius: var(--radius-pill);
    border: 2px solid transparent;
    cursor: pointer;
    transition: all var(--duration) var(--ease);
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
    box-shadow: 0 8px 24px rgba(255, 138, 0, 0.35);
}

.tsc-btn--outline {
    background: transparent;
    color: var(--color-light);
    border-color: rgba(255, 255, 255, 0.35);
}

.tsc-btn--outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.6);
    transform: translateY(-2px);
}

.tsc-btn--accent {
    background: var(--color-accent);
    color: var(--color-light);
    border-color: var(--color-accent);
}

.tsc-btn--accent:hover {
    background: var(--color-accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 138, 0, 0.3);
}

.tsc-btn--dark {
    background: var(--color-dark);
    color: var(--color-light);
    border-color: var(--color-dark);
}

.tsc-btn--dark:hover {
    background: var(--color-dark-soft);
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
}

.tsc-btn--sm {
    padding: 14px 32px;
    font-size: 14px;
}

.tsc-btn--lg {
    padding: 22px 52px;
    font-size: 18px;
}

/* ═══════════════════════════════════════════════════════════
   1. HERO
   ═══════════════════════════════════════════════════════════ */
.hero {
    position: relative;
    min-height: 100vh;
    background: var(--color-dark);
    display: flex;
    align-items: center;
    overflow: hidden;
    /* Pull the hero background up under the header to hide any white gaps */
    margin-top: -150px;
    padding: 240px 0 80px; 
    z-index: 1; 
}

.hero__container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

.hero__title {
    font-size: var(--fs-hero);
    font-weight: 900;
    color: var(--color-light);
    letter-spacing: -0.03em;
    margin-bottom: 20px;
}

.hero__subtitle {
    font-size: clamp(18px, 2vw, 24px);
    font-weight: 600;
    color: var(--color-accent);
    margin-bottom: 16px;
}

.hero__text {
    font-size: clamp(16px, 1.6vw, 19px);
    color: rgba(255, 255, 255, 0.65);
    max-width: 520px;
    margin-bottom: 36px;
    line-height: 1.7;
}

.hero__actions {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

/* ── Hero Card Wrapper ────────────────────────────────── */
.hero__card-wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 420px;
}

/* Accent background shape */
.hero__accent-shape {
    position: absolute;
    width: 340px;
    height: 380px;
    background: var(--color-accent);
    border-radius: var(--radius-large);
    bottom: -20px;
    right: -10px;
    transform: rotate(-4deg);
    z-index: 1;
    opacity: 0.9;
}

/* Floating glass card */
.glass-card {
    position: relative;
    z-index: 2;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: var(--radius-large);
    padding: 40px 36px;
    box-shadow: var(--shadow-glass);
    width: 100%;
    max-width: 380px;
}

.glass-card__title {
    font-size: 24px;
    font-weight: 800;
    color: var(--color-light);
    margin-bottom: 28px;
    letter-spacing: -0.01em;
}

.glass-card__list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 32px;
}

.glass-card__item {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 17px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.9);
}

.glass-card__item small {
    font-weight: 400;
    color: rgba(255, 255, 255, 0.55);
    font-size: 14px;
}

.glass-card__badge {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 800;
    flex-shrink: 0;
}

.glass-card__badge--basic {
    background: rgba(255, 255, 255, 0.15);
    color: var(--color-light);
}

.glass-card__badge--plus {
    background: rgba(255, 138, 0, 0.3);
    color: var(--color-accent-light);
}

.glass-card__badge--premium {
    background: var(--color-accent);
    color: var(--color-light);
}

/* ═══════════════════════════════════════════════════════════
   2. HOW IT WORKS
   ═══════════════════════════════════════════════════════════ */
.how-it-works {
    padding: var(--section-gap) 0;
    background: var(--color-gray-50);
}

.how-it-works__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

.how-it-works__card {
    background: var(--color-light);
    border-radius: var(--radius-large);
    padding: 44px 36px;
    box-shadow: var(--shadow-card);
    transition: transform var(--duration) var(--ease),
        box-shadow var(--duration) var(--ease);
    text-align: center;
}

.how-it-works__card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-card-hover);
}

.how-it-works__icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(255, 138, 0, 0.1);
    color: var(--color-accent);
    margin-bottom: 24px;
}

.how-it-works__step {
    display: block;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--color-accent);
    margin-bottom: 12px;
}

.how-it-works__heading {
    font-size: var(--fs-card-title);
    font-weight: 800;
    color: var(--color-dark);
    margin-bottom: 14px;
    letter-spacing: -0.01em;
}

.how-it-works__desc {
    font-size: var(--fs-small);
    color: var(--color-text-muted);
    line-height: 1.7;
}

/* ═══════════════════════════════════════════════════════════
   3. LEVELS
   ═══════════════════════════════════════════════════════════ */
.levels {
    padding: var(--section-gap) 0;
    background: var(--color-light);
}

.levels__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    align-items: start;
}

.levels__card {
    background: var(--color-light);
    border: 2px solid var(--color-gray-100);
    border-radius: var(--radius-large);
    overflow: hidden;
    transition: transform var(--duration) var(--ease),
        box-shadow var(--duration) var(--ease);
}

.levels__card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-card-hover);
}

/* Premium card highlight */
.levels__card--premium {
    border-color: var(--color-accent);
    box-shadow: 0 0 0 2px var(--color-accent), var(--shadow-card);
    transform: scale(1.03);
}

.levels__card--premium:hover {
    transform: scale(1.03) translateY(-6px);
}

.levels__card-header {
    padding: 28px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.levels__card-header--basic {
    background: var(--color-gray-50);
}

.levels__card-header--plus {
    background: linear-gradient(135deg, #FFF3E0, #FFE0B2);
}

.levels__card-header--premium {
    background: linear-gradient(135deg, var(--color-accent), #FF6D00);
}

.levels__badge {
    font-size: 18px;
    font-weight: 800;
    letter-spacing: -0.01em;
}

.levels__card-header--premium .levels__badge,
.levels__card-header--premium .levels__threshold {
    color: var(--color-light);
}

.levels__threshold {
    font-size: 14px;
    font-weight: 600;
    color: var(--color-text-muted);
    background: rgba(255, 255, 255, 0.6);
    padding: 4px 14px;
    border-radius: var(--radius-pill);
}

.levels__card-header--premium .levels__threshold {
    background: rgba(255, 255, 255, 0.2);
}

.levels__card-body {
    padding: 32px;
}

.levels__card-title {
    font-size: 20px;
    font-weight: 800;
    margin-bottom: 20px;
    color: var(--color-dark);
}

.levels__list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 20px;
}

.levels__list li {
    position: relative;
    padding-left: 26px;
    font-size: var(--fs-small);
    color: var(--color-gray-600);
    line-height: 1.6;
}

.levels__list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 8px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--color-accent);
}

.levels__desc {
    font-size: 14px;
    color: var(--color-gray-400);
    line-height: 1.65;
    padding-top: 16px;
    border-top: 1px solid var(--color-gray-100);
}

/* ═══════════════════════════════════════════════════════════
   4. VALIDITY
   ═══════════════════════════════════════════════════════════ */
.validity {
    padding: var(--section-gap) 0;
    background: var(--color-dark);
}

.validity__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
}

.validity__item {
    background: var(--color-dark-soft);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: var(--radius-large);
    padding: 44px 40px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
}

.validity__icon {
    color: var(--color-accent);
}

.validity__heading {
    font-size: 24px;
    font-weight: 800;
    color: var(--color-light);
}

.validity__text {
    font-size: var(--fs-body);
    color: rgba(255, 255, 255, 0.6);
    line-height: 1.7;
}

.validity__text strong {
    color: var(--color-accent);
    font-weight: 700;
}

/* ═══════════════════════════════════════════════════════════
   5. TERMS
   ═══════════════════════════════════════════════════════════ */
.terms {
    padding: var(--section-gap) 0;
    background: var(--color-gray-50);
}

.terms__list {
    max-width: 720px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.terms__list li {
    position: relative;
    padding-left: 32px;
    font-size: 18px;
    color: var(--color-gray-600);
    line-height: 1.7;
}

.terms__list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--color-accent);
    opacity: 0.7;
}

/* ═══════════════════════════════════════════════════════════
   6. FINAL CTA
   ═══════════════════════════════════════════════════════════ */
.final-cta {
    padding: var(--section-gap) 0;
    /* Photographic pattern background */
    background: url('https://takserwis.pl/wp-content/uploads/2026/03/frame.png') repeat;
    background-color: var(--color-accent);
    text-align: center;
    position: relative;
    overflow: hidden;
    color: var(--color-light);
}

/* Decorative shapes - more subtle over image */
.final-cta::before,
.final-cta::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 138, 0, 0.2); /* Accent color glow */
    filter: blur(60px);
}

.final-cta::before {
    width: 400px;
    height: 400px;
    top: -120px;
    left: -100px;
}

.final-cta::after {
    width: 300px;
    height: 300px;
    bottom: -80px;
    right: -60px;
}

.final-cta__container {
    position: relative;
    z-index: 2;
}

.final-cta__title {
    font-size: var(--fs-section);
    font-weight: 900;
    color: var(--color-light);
    margin-bottom: 40px;
    letter-spacing: -0.02em;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* ═══════════════════════════════════════════════════════════
   7. FAQ
   ═══════════════════════════════════════════════════════════ */
.faq {
    padding: var(--section-gap) 0;
    background: var(--color-light);
}

.faq__accordion {
    max-width: 820px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.faq__item {
    border: 2px solid var(--color-gray-100);
    border-radius: var(--radius-md);
    overflow: hidden;
    transition: border-color var(--duration) var(--ease);
}

.faq__item--active {
    border-color: var(--color-accent);
}

.faq__question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 28px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--font-family);
    font-size: 17px;
    font-weight: 700;
    color: var(--color-dark);
    text-align: left;
    transition: color var(--duration) var(--ease);
}

.faq__question:hover {
    color: var(--color-accent);
}

.faq__icon {
    position: relative;
    width: 28px;
    height: 28px;
    flex-shrink: 0;
    border-radius: 50%;
    background: var(--color-gray-50);
    transition: background var(--duration) var(--ease),
        transform var(--duration) var(--ease);
}

.faq__icon::before,
.faq__icon::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    background: var(--color-dark);
    border-radius: 2px;
    transition: transform var(--duration) var(--ease),
        opacity var(--duration) var(--ease);
}

.faq__icon::before {
    width: 12px;
    height: 2px;
    transform: translate(-50%, -50%);
}

.faq__icon::after {
    width: 2px;
    height: 12px;
    transform: translate(-50%, -50%);
}

/* Active state */
.faq__item--active .faq__icon {
    background: var(--color-accent);
    transform: rotate(45deg);
}

.faq__item--active .faq__icon::before,
.faq__item--active .faq__icon::after {
    background: var(--color-light);
}

.faq__answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.45s var(--ease),
        padding 0.45s var(--ease);
}

.faq__answer p {
    padding: 0 28px 24px;
    font-size: var(--fs-small);
    color: var(--color-text-muted);
    line-height: 1.75;
}

/* ═══════════════════════════════════════════════════════════
   RESPONSIVE
   ═══════════════════════════════════════════════════════════ */

/* Tablet */
@media (max-width: 1024px) {
    .hero__container {
        grid-template-columns: 1fr;
        gap: 48px;
        text-align: center;
    }

    .hero__text {
        margin-left: auto;
        margin-right: auto;
    }

    .hero__actions {
        justify-content: center;
    }

    .hero__card-wrapper {
        justify-content: center;
        min-height: auto;
    }

    .hero__accent-shape {
        width: 280px;
        height: 320px;
        bottom: -16px;
        right: 20px;
    }

    .how-it-works__grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .levels__grid {
        grid-template-columns: 1fr;
        max-width: 520px;
        margin: 0 auto;
    }

    .levels__card--premium {
        transform: none;
    }

    .levels__card--premium:hover {
        transform: translateY(-6px);
    }
}

/* Mobile */
@media (max-width: 768px) {
    .hero {
        margin-top: -150px;
        padding: 210px 0 60px;
        min-height: auto;
    }

    .hero__card-wrapper {
        position: static;
    }

    .hero__accent-shape {
        position: absolute;
        width: 240px;
        height: 280px;
    }

    .glass-card {
        max-width: 100%;
    }

    .how-it-works__grid {
        grid-template-columns: 1fr;
    }

    .validity__grid {
        grid-template-columns: 1fr;
    }

    .tsc-btn--lg {
        padding: 18px 40px;
        font-size: 16px;
    }

    .faq__question {
        padding: 20px 22px;
        font-size: 16px;
    }

    .faq__answer p {
        padding: 0 22px 20px;
    }

    .terms__list li {
        font-size: 16px;
    }
}

/* Small mobile */
@media (max-width: 480px) {
    :root {
        --container-padding: 18px;
    }

    .hero__actions {
        flex-direction: column;
        align-items: center;
    }

    .hero__accent-shape {
        width: 200px;
        height: 240px;
        right: -10px;
    }

    .tsc-btn {
        width: 100%;
        max-width: 320px;
    }
}
</style>

<main id="main-content">

    <?php $lang = function_exists('pll_current_language') ? pll_current_language() : 'pl'; ?>
    
    <!-- ═══════════════════════════════════════════
         1. HERO SECTION
         ═══════════════════════════════════════════ -->
    <section class="hero" id="hero">
        <div class="hero__container tsc-container">

            <div class="hero__content">
                <h1 class="hero__title">Tak Serwis Club</h1>
                <?php if ($lang === 'ru') : ?>
                    <p class="hero__subtitle">Программа лояльности для постоянных клиентов сети Tak Serwis</p>
                    <p class="hero__text">Собирайте сервисные бонусы по мере роста расходов и пользуйтесь дополнительными привилегиями.</p>
                <?php else : ?>
                    <p class="hero__subtitle">Program lojalnościowy dla stałych klientów sieci Tak Serwis</p>
                    <p class="hero__text">Zbieraj korzyści serwisowe wraz ze wzrostem wydatków i korzystaj z dodatkowych przywilejów.</p>
                <?php endif; ?>
                <div class="hero__actions">
                    <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" target="_blank" class="tsc-btn tsc-btn--primary" id="hero-join-btn">
                        <?php echo ($lang === 'ru') ? 'Присоединиться к программе' : 'Dołącz do programu'; ?>
                    </a>
                    <a href="#poziomy" class="tsc-btn tsc-btn--outline" id="hero-levels-btn">
                        <?php echo ($lang === 'ru') ? 'Проверить уровни' : 'Sprawdź poziomy'; ?>
                    </a>
                </div>
            </div>

            <div class="hero__card-wrapper">
                <!-- Accent background shape behind the card -->
                <div class="hero__accent-shape" aria-hidden="true"></div>

                <!-- Floating glass card -->
                <div class="hero__card glass-card">
                    <h2 class="glass-card__title">
                        <?php echo ($lang === 'ru') ? '3 уровня привилегий' : '3 poziomy korzyści'; ?>
                    </h2>
                    <ul class="glass-card__list">
                        <li class="glass-card__item"><span class="glass-card__badge glass-card__badge--basic">1</span>Basic</li>
                        <li class="glass-card__item">
                            <span class="glass-card__badge glass-card__badge--plus">2</span>
                            Plus
                        </li>
                        <li class="glass-card__item">
                            <span class="glass-card__badge glass-card__badge--premium">3</span>
                            Premium
                        </li>
                    </ul>
                    <a href="#poziomy" class="tsc-btn tsc-btn--accent tsc-btn--sm" id="card-details-btn">
                        <?php echo ($lang === 'ru') ? 'Подробнее' : 'Zobacz szczegóły'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         2. JAK DZIAŁA PROGRAM
         ═══════════════════════════════════════════ -->
    <section class="how-it-works" id="jak-dziala">
        <div class="how-it-works__container tsc-container">
            <h2 class="tsc-section-title">
                <?php echo ($lang === 'ru') ? 'Как работает программа' : 'Jak działa program'; ?>
            </h2>

            <div class="how-it-works__grid">
                <div class="how-it-works__card" id="step-card-1">
                    <div class="how-it-works__icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="2"/><path d="M16 24l6 6 10-12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="how-it-works__step">
                        <?php echo ($lang === 'ru') ? 'Шаг 1' : 'Krok 1'; ?>
                    </span>
                    <h3 class="how-it-works__heading">
                        <?php echo ($lang === 'ru') ? 'Вы пользуетесь услугами Tak Serwis' : 'Korzystasz z usług Tak Serwis'; ?>
                    </h3>
                    <p class="how-it-works__desc">
                        <?php echo ($lang === 'ru') ? 'Посещайте любой сервис сети Tak Serwis и пользуйтесь полным спектром автомобильных услуг.' : 'Odwiedzaj dowolny serwis sieci Tak Serwis i korzystaj z pełnego zakresu usług motoryzacyjnych.'; ?>
                    </p>
                </div>

                <div class="how-it-works__card" id="step-card-2">
                    <div class="how-it-works__icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="2"/><path d="M24 14v10l7 4" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="how-it-works__step">
                        <?php echo ($lang === 'ru') ? 'Шаг 2' : 'Krok 2'; ?>
                    </span>
                    <h3 class="how-it-works__heading">
                        <?php echo ($lang === 'ru') ? 'Сумма расходов определяет ваш уровень' : 'Suma wydatków określa Twój poziom'; ?>
                    </h3>
                    <p class="how-it-works__desc">
                        <?php echo ($lang === 'ru') ? 'Каждый ваш визит и потраченные средства автоматически приближают вас к более высокому уровню программы.' : 'Każda Twoja wizyta i wydane środki automatycznie przybliżają Cię do wyższego poziomu programu.'; ?>
                    </p>
                </div>

                <div class="how-it-works__card" id="step-card-3">
                    <div class="how-it-works__icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="2"/><path d="M24 16v4m0 4h.01M17 30c1.5-2 4-3 7-3s5.5 1 7 3" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <span class="how-it-works__step">
                        <?php echo ($lang === 'ru') ? 'Шаг 3' : 'Krok 3'; ?>
                    </span>
                    <h3 class="how-it-works__heading">
                        <?php echo ($lang === 'ru') ? 'Вы получаете дополнительные преимущества' : 'Otrzymujesz dodatkowe korzyści'; ?>
                    </h3>
                    <p class="how-it-works__desc">
                        <?php echo ($lang === 'ru') ? 'Чем выше уровень, тем больше привилегий — от бесплатных проверок до персонального менеджера.' : 'Im wyższy poziom, tym więcej przywilejów — od bezpłatnych kontroli po osobistego opiekuna klienta.'; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         3. POZIOMY PROGRAMU
         ═══════════════════════════════════════════ -->
    <section class="levels" id="poziomy">
        <div class="levels__container tsc-container">
            <h2 class="tsc-section-title">
                <?php echo ($lang === 'ru') ? 'Уровни программы' : 'Poziomy programu'; ?>
            </h2>

            <div class="levels__grid">

                <!-- BASIC -->
                <div class="levels__card" id="level-basic">
                    <div class="levels__card-header levels__card-header--basic">
                        <span class="levels__badge">Basic</span>
                    </div>
                    <div class="levels__card-body">
                        <h3 class="levels__card-title">Tak Serwis Club Basic</h3>
                        <ul class="levels__list">
                            <?php if ($lang === 'ru') : ?>
                                <li>Бесплатная сезонная экспресс-проверка (1 раз в год)*</li>
                                <li>Гарантия фиксированных цен на основные услуги**</li>
                            <?php else : ?>
                                <li>Bezpłatna sezonowa kontrola ekspresowa (1× w roku)*</li>
                                <li>Gwarancja stałych cen na usługi podstawowe**</li>
                            <?php endif; ?>
                        </ul>
                        <p class="levels__desc">
                            <?php if ($lang === 'ru') : ?>
                                * Экспресс-проверка включает: проверку технических жидкостей, компьютерную диагностику, визуальный осмотр подвески.<br><br>** Гарантия фиксированных цен действует в течение календарного года. Основные услуги включают: замену масла и фильтров, геометрию колес, шиномонтаж, хранение колес, компьютерную диагностику и диагностику подвески.
                            <?php else : ?>
                                * Kontrola ekspresowa obejmuje: sprawdzenie płynów eksploatacyjnych, diagnostykę komputerową, wizualną kontrolę zawieszenia.<br><br>** Gwarancja stałych cen obowiązuje w ciągu roku kalendarzowego. Usługi podstawowe obejmują: wymianę oleju i filtrów, geometrię kół, serwis opon, przechowywanie kół, diagnostykę komputerową i zawieszenia.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <!-- PLUS -->
                <div class="levels__card" id="level-plus">
                    <div class="levels__card-header levels__card-header--plus">
                        <span class="levels__badge">Plus</span>
                        <span class="levels__threshold">
                            <?php echo ($lang === 'ru') ? 'от 3 000 зл расходов в сети' : 'od 3 000 zł wydatków w sieci'; ?>
                        </span>
                    </div>
                    <div class="levels__card-body">
                        <h3 class="levels__card-title">Tak Serwis Club Plus</h3>
                        <ul class="levels__list">
                            <?php if ($lang === 'ru') : ?>
                                <li>Приоритетное бронирование (24–48 ч.)</li>
                                <li>Бесплатная диагностика перед масляным сервисом*</li>
                                <li>Проверка тормозной и охлаждающей жидкостей</li>
                                <li>Озонирование системы вентиляции**</li>
                            <?php else : ?>
                                <li>Priorytetowa rezerwacja (24–48 godz.)</li>
                                <li>Bezpłatna diagnostyka przed serwisem olejowym*</li>
                                <li>Kontrola płynu hamulcowego i chłodniczego</li>
                                <li>Ozonowanie układu wentylacji**</li>
                            <?php endif; ?>
                        </ul>
                        <p class="levels__desc">
                            <?php if ($lang === 'ru') : ?>
                                * Бесплатная диагностика включает: компьютерную диагностику и диагностику подвески.<br><br>** При обслуживании системы вентиляции в сети Tak Serwis.
                            <?php else : ?>
                                * Bezpłatna diagnostyka obejmuje: diagnostykę komputerową oraz diagnostykę zawieszenia.<br><br>** Przy obsłudze układu wentylacji w sieci Tak Serwis.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <!-- PREMIUM -->
                <div class="levels__card levels__card--premium" id="level-premium">
                    <div class="levels__card-header levels__card-header--premium">
                        <span class="levels__badge">Premium</span>
                        <span class="levels__threshold">
                            <?php echo ($lang === 'ru') ? 'от 10 000 зл расходов в сети' : 'od 10 000 zł wydatków w sieci'; ?>
                        </span>
                    </div>
                    <div class="levels__card-body">
                        <h3 class="levels__card-title">Tak Serwis Club Premium</h3>
                        <ul class="levels__list">
                            <?php if ($lang === 'ru') : ?>
                                <li>Все преимущества уровня Plus</li>
                                <li>Персональный менеджер*</li>
                                <li>Бесплатная утилизация шин (1 комплект в сезон)***</li>
                                <li>Бесплатная экспресс-проверка (2 раза в год)**</li>
                            <?php else : ?>
                                <li>Wszystkie korzyści poziomu Plus</li>
                                <li>Osobisty opiekun klienta*</li>
                                <li>Bezpłatna utylizacja opon (1 komplet w sezonie)***</li>
                                <li>Bezpłatna kontrola ekspresowa (2× w roku)**</li>
                            <?php endif; ?>
                        </ul>
                        <p class="levels__desc">
                            <?php if ($lang === 'ru') : ?>
                                * Персональный менеджер включает: напоминания о плановом техосмотре, консультации по объему работ и подбору запчастей.<br><br>** Сезонная экспресс-проверка включает: проверку технических жидкостей, компьютерную диагностику, визуальный осмотр подвески.<br><br>*** При замене шин в сети Tak Serwis.
                            <?php else : ?>
                                * Osobisty opiekun obejmuje: przypomnienia o przeglądach okresowych, konsultacje dotyczące zakresu prac i doboru części.<br><br>** Sezonowa kontrola ekspresowa obejmuje: sprawdzenie płynów eksploatacyjnych, diagnostykę komputerową, wizualną kontrolę zawieszenia.<br><br>*** Przy wymianie opon w sieci Tak Serwis.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         4. OKRES WAŻNOŚCI STATUSU
         ═══════════════════════════════════════════ -->
    <section class="validity" id="waznosc">
        <div class="validity__container tsc-container">
            <h2 class="tsc-section-title tsc-section-title--light">
                <?php echo ($lang === 'ru') ? 'Срок действия статуса' : 'Okres ważności statusu'; ?>
            </h2>

            <div class="validity__grid">
                <div class="validity__item" id="validity-basic-plus">
                    <div class="validity__icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/><path d="M20 12v8l5 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </div>
                    <h3 class="validity__heading">
                        <?php echo ($lang === 'ru') ? 'Basic и Plus' : 'Basic i Plus'; ?>
                    </h3>
                    <p class="validity__text">
                        <?php if ($lang === 'ru') : ?>
                            Аннулирование после <strong>9 месяцев</strong> отсутствия визитов
                        <?php else : ?>
                            Anulowanie po <strong>9 miesiącach</strong> braku wizyt
                        <?php endif; ?>
                    </p>
                </div>
                <div class="validity__item" id="validity-premium">
                    <div class="validity__icon" aria-hidden="true">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/><path d="M20 10v10l6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </div>
                    <h3 class="validity__heading">Premium</h3>
                    <p class="validity__text">
                        <?php if ($lang === 'ru') : ?>
                            Аннулирование после <strong>12 месяцев</strong> отсутствия визитов
                        <?php else : ?>
                            Anulowanie po <strong>12 miesiącach</strong> braku wizyt
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         5. OGÓLNE WARUNKI
         ═══════════════════════════════════════════ -->
    <section class="terms" id="warunki">
        <div class="terms__container tsc-container">
            <h2 class="tsc-section-title">
                <?php echo ($lang === 'ru') ? 'Общие условия' : 'Ogólne warunki'; ?>
            </h2>
            <ul class="terms__list">
                <?php if ($lang === 'ru') : ?>
                    <li>Привилегии не подлежат обмену на наличные</li>
                    <li>Не суммируются с другими акциями</li>
                    <li>Tak Serwis оставляет за собой право изменять условия программы</li>
                <?php else : ?>
                    <li>Korzyści nie podlegają wymianie na gotówkę</li>
                    <li>Nie łączą się z innymi promocjami</li>
                    <li>Tak Serwis zastrzega prawo do zmian warunków programu</li>
                <?php endif; ?>
            </ul>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         6. FINAL CTA
         ═══════════════════════════════════════════ -->
    <section class="final-cta" id="final-cta">
        <div class="final-cta__container tsc-container">
            <h2 class="final-cta__title">
                <?php echo ($lang === 'ru') ? 'Присоединяйтесь к Tak Serwis Club уже сегодня' : 'Dołącz do Tak Serwis Club już dziś'; ?>
            </h2>
            <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" target="_blank" class="tsc-btn tsc-btn--dark tsc-btn--lg" id="final-join-btn">
                <?php echo ($lang === 'ru') ? 'Стать участником программы' : 'Zostań uczestnikiem programu'; ?>
            </a>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         7. FAQ
         ═══════════════════════════════════════════ -->
    <section class="faq" id="faq">
        <div class="faq__container tsc-container">
            <h2 class="tsc-section-title">
                <?php echo ($lang === 'ru') ? 'Часто задаваемые вопросы' : 'Najczęściej zadawane pytania'; ?>
            </h2>

            <div class="faq__accordion" id="faq-accordion">

                <div class="faq__item" id="faq-item-1">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-1">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Как присоединиться к программе Tak Serwis Club?' : 'Jak dołączyć do programu Tak Serwis Club?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-1">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Достаточно посетить любой сервис сети Tak Serwis. После первого визита вы получаете статус Basic. Регистрация онлайн не требуется — все оформляется на месте.
                            <?php else : ?>
                                Wystarczy odwiedzić dowolny serwis sieci Tak Serwis. Po pierwszej wizycie otrzymujesz status Basic. Nie jest wymagana rejestracja online — wszystko odbywa się na miejscu.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <div class="faq__item" id="faq-item-2">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-2">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Как перейти на более высокий уровень?' : 'Jak awansować na wyższy poziom?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-2">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Достаточно накапливать расходы в сервисах Tak Serwis. После превышения порога 3 000 зл вы получаете статус Plus, а после 10 000 зл — Premium. Расходы суммируются автоматически.
                            <?php else : ?>
                                Wystarczy kumulować wydatki w serwisach Tak Serwis. Po przekroczeniu progu 3 000 zł uzyskujesz status Plus, a po 10 000 zł — Premium. Wydatki sumują się automatycznie.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <div class="faq__item" id="faq-item-3">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-3">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Можно ли суммировать привилегии с другими акциями?' : 'Czy korzyści można łączyć z innymi promocjami?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-3">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Привилегии программы Tak Serwis Club не суммируются с другими актуальными акциями и специальными предложениями. Действуют только бонусы, соответствующие вашему уровню.
                            <?php else : ?>
                                Korzyści programu Tak Serwis Club nie łączą się z innymi aktualnymi promocjami i ofertami specjalnymi. Obowiązują jedynie przywileje przypisane do Twojego poziomu.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <div class="faq__item" id="faq-item-4">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-4">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Что произойдет, если я долго не буду посещать сервис?' : 'Co się stanie, jeśli nie odwiedzę serwisu przez dłuższy czas?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-4">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Статус Basic и Plus аннулируется после 9 месяцев отсутствия визитов. Статус Premium сохраняется дольше — в течение 12 месяцев. После аннулирования можно снова начать накапливать расходы.
                            <?php else : ?>
                                Status Basic i Plus wygasa po 9 miesiącach braku wizyt. Status Premium utrzymuje się dłużej — przez 12 miesięcy. Po wygaśnięciu można ponownie zacząć zbierać wydatki.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <div class="faq__item" id="faq-item-5">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-5">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Могу ли я обменять привилегии на наличные?' : 'Czy mogę wymienić korzyści na gotówkę?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-5">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Нет. Привилегии программы лояльности не подлежат обмену на наличные. Это дополнительные услуги и бонусы, доступные исключительно в рамках программы.
                            <?php else : ?>
                                Nie. Korzyści programu lojalnościowego nie podlegają wymianie na gotówkę. Są to dodatkowe usługi i przywileje dostępne wyłącznie w ramach programu.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <div class="faq__item" id="faq-item-6">
                    <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-6">
                        <span>
                            <?php echo ($lang === 'ru') ? 'Что включает в себя бесплатная экспресс-проверка?' : 'Co obejmuje bezpłatna kontrola ekspresowa?'; ?>
                        </span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq__answer" id="faq-answer-6">
                        <p>
                            <?php if ($lang === 'ru') : ?>
                                Экспресс-проверка включает проверку технических жидкостей, компьютерную диагностику и визуальный осмотр подвески. Это быстрый контроль технического состояния автомобиля.
                            <?php else : ?>
                                Kontrola ekspresowa obejmuje sprawdzenie płynów eksploatacyjnych, diagnostykę komputerową oraz wizualną kontrolę zawieszenia. To szybki przegląd stanu technicznego pojazdu.
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<script>
/**
 * Tak Serwis Club — Main JavaScript
 * Vanilla JS only — Accordion + Header scroll effect
 */
(function () {
    'use strict';

    /* ── FAQ Accordion ────────────────────────────────── */
    function initAccordion() {
        var accordion = document.getElementById('faq-accordion');
        if (!accordion) return;

        var items = accordion.querySelectorAll('.faq__item');

        items.forEach(function (item) {
            var btn = item.querySelector('.faq__question');
            var answer = item.querySelector('.faq__answer');

            btn.addEventListener('click', function () {
                var isOpen = item.classList.contains('faq__item--active');

                // Close all
                items.forEach(function (other) {
                    other.classList.remove('faq__item--active');
                    var otherBtn = other.querySelector('.faq__question');
                    var otherAnswer = other.querySelector('.faq__answer');
                    otherBtn.setAttribute('aria-expanded', 'false');
                    otherAnswer.style.maxHeight = '0';
                });

                // Open clicked (toggle)
                if (!isOpen) {
                    item.classList.add('faq__item--active');
                    btn.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
    }

    /* ── Smooth scroll for anchor links ───────────────── */
    function initSmoothScroll() {
        var links = document.querySelectorAll('a[href^="#"]');
        links.forEach(function (link) {
            link.addEventListener('click', function (e) {
                var href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                
                try {
                    var target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        var offset = 80;
                        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                        window.scrollTo({ top: top, behavior: 'smooth' });
                    }
                } catch (err) {
                    // Invalid selector, do nothing
                }
            });
        });
    }

    /* ── Init ──────────────────────────────────────────── */
    document.addEventListener('DOMContentLoaded', function () {
        initAccordion();
        initSmoothScroll();
    });
})();
</script>

<?php get_footer(); ?>
