<?php
/**
 * Template Name: Front Page
 * Tak Serwis Club — Program lojalnościowy
 */

get_header();
?>



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
