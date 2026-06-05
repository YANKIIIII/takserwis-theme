<?php
/*
Template Name: German Auto Service
*/
if ( empty($german_included_from_front_page) ) {
    get_header();
}
?>

<style>
/* Base */
.skp-module-container {
    font-family: 'Inter', sans-serif;
    color: #1a1924;
    background-color: #ffffff;
    line-height: 1.6;
}

.skp-module-container * {
    box-sizing: border-box;
}

/* Unique Hero Section (Laweta Style) */
.lwt-hero {
    position: relative;
    padding: 160px 0 100px;
    background: #1a1924;
    display: flex;
    align-items: center;
    overflow: hidden;
    min-height: auto;
}

.lwt-hero__img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    opacity: 0.8;
}

.lwt-hero__overlay {
    position: absolute;
    inset: 0;
    background: rgba(26,25,36,0.6);
    z-index: 1;
}

.lwt-hero .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    padding: 0 20px;
}

.lwt-hero__title {
    color: #ffffff;
    font-size: clamp(36px, 6vw, 56px);
    font-weight: 800;
    line-height: 1.1;
    margin: 0 0 20px;
    max-width: 800px;
}

.lwt-hero__title span {
    color: #ff9d42;
}

.lwt-hero__subtitle {
    color: rgba(255,255,255,0.9);
    font-size: 18px;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 0 30px;
}

.lwt-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: #ff9d42;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 16px 32px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
}

.lwt-btn:hover {
    background: #e88a30;
    transform: translateY(-2px);
    color: #fff;
}

@media (max-width: 991px) {
    .lwt-hero { padding: 100px 0 60px; text-align: center; }
    .lwt-hero__title { margin: 0 auto 20px; }
    .lwt-hero__subtitle { margin: 0 auto 30px; }
}

/* Roadmap Infographic CSS (Snake Timeline) */
.roadmap_section {
    padding: 100px 0;
    background-color: #f4f6f8;
    overflow: hidden;
}

.roadmap_section h2 {
    margin-bottom: 60px;
    text-align: center;
    font-size: 38px;
    font-weight: 800;
}

/* Centered and fully responsive Roadmap timeline */
.snake-timeline {
    display: flex !important;
    justify-content: space-between !important;
    position: relative !important;
    max-width: 1000px !important;
    margin: 0 auto !important;
    height: auto !important;
    padding: 30px 0 !important;
}

.snake-line {
    position: absolute !important;
    top: 52px !important; /* Centered vertically relative to the 44px circle + padding */
    left: 12.5% !important; /* Center of the first item */
    right: 12.5% !important; /* Center of the last item */
    height: 0 !important;
    border-top: 2px dashed rgba(255, 157, 66, 0.6) !important; /* Elegant dashed connector */
    z-index: 1 !important;
}

.snake-item {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    width: 23% !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important; /* Perfectly centered text */
    z-index: 2 !important;
}

.snake-icon {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    width: 44px !important;
    height: 44px !important;
    background: #ffffff !important;
    border: 2px solid #ff9d42 !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #ff9d42 !important;
    font-size: 20px !important;
    font-weight: 800 !important;
    box-shadow: 0 4px 10px rgba(255, 157, 66, 0.2) !important;
    margin-bottom: 20px !important; /* Dynamic space between circle and text */
}

.snake-text {
    padding-top: 0 !important; /* Reset old absolute padding */
    font-weight: 700 !important;
    font-size: 16px !important;
    color: #1a1924 !important;
    line-height: 1.4 !important;
}

.snake-text span {
    display: block !important;
    margin-top: 5px !important;
}

@media (max-width: 767px) {
    .snake-timeline {
        flex-direction: column !important;
        padding: 20px !important;
        height: auto !important;
    }
    .snake-line {
        top: 40px !important;
        bottom: 40px !important;
        left: 42px !important;
        right: auto !important;
        width: 0 !important;
        height: auto !important;
        border-top: none !important;
        border-left: 2px dashed rgba(255, 157, 66, 0.6) !important;
    }
    .snake-item {
        width: 100% !important;
        flex-direction: row !important;
        align-items: center !important;
        text-align: left !important;
        padding-left: 65px !important;
        margin-bottom: 30px !important;
    }
    .snake-icon {
        position: absolute !important;
        top: 50% !important;
        left: 20px !important;
        transform: translateY(-50%) !important;
        margin-bottom: 0 !important;
    }
    .snake-text {
        padding-top: 0 !important;
    }
}

/* Ensure services section matches the rest of the site */
.services_section_german {
    background-color: #ffffff;
    padding: 100px 0;
}

/* Fix text overlapping images in German version due to longer words */
.services_section_german .services .item .content {
    position: relative;
    z-index: 2;
    padding-right: 20px;
}
.services_section_german .services .item .title,
.services_section_german .services .item .title2 {
    word-break: break-word;
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
}

/* Robust layout for German cards: switch to 2-column grid to prevent text wrapping/clipping */
.services_section_german .services .item {
    display: grid !important;
    grid-template-columns: 1.45fr 1fr !important; /* 59% text, 41% image space */
    gap: 20px !important;
    padding: 25px !important;
    min-height: 220px !important; /* Sleek and compact block as requested */
    background-color: #f4f6f8 !important; /* Keeps the original light-grey card style */
    border-radius: 14px !important;
    position: relative !important;
    overflow: hidden !important;
    align-items: center !important;
    transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
}

.services_section_german .services .item:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
}

/* Ensure typography within the item looks perfect and has ample space */
.services_section_german .services .item .content {
    padding-right: 0 !important;
    max-width: 100% !important;
}

.services_section_german .services .item .title {
    font-size: 20px !important;
    font-weight: 700 !important;
    color: #1a1924 !important;
    margin-bottom: 10px !important;
    margin-top: 0 !important;
}

.services_section_german .services .item .title2 {
    font-size: 14px !important;
    line-height: 1.5 !important;
    color: rgba(26, 25, 36, 0.8) !important;
}

/* Large and perfectly scaled images */
.services_section_german .services .item img.item-img {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    height: auto !important;
    max-height: 200px !important; /* Image is very large inside its 41% column */
    object-fit: contain !important;
    z-index: 2 !important;
    margin: 0 auto !important;
    transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
}

.services_section_german .services .item:hover img.item-img {
    transform: scale(1.08) !important; /* Elegant interactive scale-up */
}

/* Responsive adjustments */
@media (max-width: 1199px) {
    .services_section_german .services .item {
        grid-template-columns: 1.35fr 1fr !important;
        padding: 20px !important;
        min-height: 200px !important;
    }
    .services_section_german .services .item img.item-img {
        max-height: 170px !important;
    }
}

@media (max-width: 991px) {
    .services_section_german .services .item {
        grid-template-columns: 1.25fr 1fr !important;
        padding: 15px !important;
        min-height: 180px !important;
    }
    .services_section_german .services .item img.item-img {
        max-height: 150px !important;
    }
    .services_section_german .services .item .title {
        font-size: 18px !important;
    }
}

@media (max-width: 767px) {
    .services_section_german .services .item {
        grid-template-columns: 1.35fr 1fr !important;
        min-height: 160px !important;
    }
    .services_section_german .services .item img.item-img {
        max-height: 130px !important;
    }
}

@media (max-width: 479px) {
    /* Stack on very small screens for readability */
    .services_section_german .services .item {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
        padding: 20px !important;
        min-height: auto !important;
        text-align: center !important;
    }
    .services_section_german .services .item img.item-img {
        max-height: 140px !important;
        order: -1 !important;
    }
}

/* German Contact Form */
.skp-contact-german {
    background-color: #f4f6f8 !important;
    padding: 80px 0;
}
.skp-german-form {
    margin-top: 20px;
    display: block !important;
}
.skp-german-form .skp-form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.skp-german-form .skp-input {
    flex: 1;
    width: 100%;
    height: 49px !important;
    padding: 14px 15px !important;
    border: none !important;
    border-radius: 8px !important;
    font-size: 14px !important;
    background: #ffffff !important;
    font-family: 'Inter', sans-serif !important;
    color: #1a1924 !important;
    outline: none !important;
    box-sizing: border-box;
}
.skp-german-form .skp-input::placeholder {
    color: rgba(26, 25, 36, 0.5) !important;
    font-weight: 400 !important;
    font-size: 14px !important;
}
.skp-german-form .skp-input:focus {
    box-shadow: none !important;
}
.skp-german-form select.skp-input {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg width='18' height='19' viewBox='0 0 18 19' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4.07293 6.88394C4.2751 6.64807 4.63021 6.62075 4.86608 6.82293L9.75001 11.0092L14.6339 6.82293C14.8698 6.62075 15.2249 6.64807 15.4271 6.88394C15.6293 7.11981 15.602 7.47492 15.3661 7.67709L10.1161 12.1771C9.90543 12.3577 9.59459 12.3577 9.38394 12.1771L4.13394 7.67709C3.89807 7.47492 3.87075 7.11981 4.07293 6.88394Z' fill='%231A1924' fill-opacity='0.5'/%3E%3Cpath d='M4.9637 6.70904C4.66493 6.45295 4.21513 6.48755 3.95904 6.78632C3.70295 7.08509 3.73755 7.53489 4.03632 7.79098L9.28632 12.291C9.55314 12.5197 9.94688 12.5197 10.2137 12.291L15.4637 7.79098C15.7625 7.53489 15.7971 7.08509 15.541 6.78632C15.2849 6.48755 14.8351 6.45295 14.5363 6.70904L9.75001 10.8116L4.9637 6.70904Z' stroke='%231A1924' stroke-opacity='0.5' stroke-width='0.3' stroke-linecap='round'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 15px center !important;
    cursor: pointer;
    display: block !important;
    color: rgba(26, 25, 36, 0.5) !important;
}
.skp-german-form select.skp-input option {
    color: #1a1924 !important;
    background: #ffffff !important;
}
.skp-german-form .skp-textarea {
    resize: vertical;
    height: auto !important;
    min-height: 140px !important;
    padding: 15px !important;
    width: 100% !important;
}
.skp-german-form button[type="submit"] {
    display: inline-block !important;
    margin-top: 10px !important;
    border: none !important;
    cursor: pointer !important;
    height: 46px !important;
    padding: 0 40px !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    width: auto !important;
    min-width: 180px !important;
    border-radius: 8px !important;
    background-color: #ff9d42 !important;
    color: #fff !important;
    transition: background-color 0.6s, color 0.6s !important;
}
.skp-german-form button[type="submit"]:hover {
    background-color: #1a1924 !important;
    color: #fff !important;
}
@media (max-width: 991px) {
    .skp-contact-german .wrapper.container {
        flex-direction: column !important;
    }
    .skp-contact-german .wrapp_img {
        width: 100% !important;
        height: 400px !important;
        margin-bottom: 30px;
    }
    .skp-contact-german .wrapp {
        width: 100% !important;
    }
    .skp-german-form .skp-form-row {
        flex-direction: column;
        gap: 15px;
        margin-bottom: 15px;
    }
}

/* Fix Map Iframe Layout (Ensure full height and width) */
.skp-contact-german .wrapp_img iframe {
    width: 100% !important;
    height: 100% !important;
    display: block !important;
    border-radius: 12px;
}

/* Messenger Banner Section */
.skp-messenger-banner {
    background: #ffffff; /* White background to create visual separation from dark hero and services */
    padding: 50px 0 20px;
    position: relative;
    z-index: 10;
}

.messenger-banner-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #1a1924; /* Elevated premium deep dark card */
    border: 2px solid rgba(255, 157, 66, 0.12); /* Delicate orange accent border */
    border-radius: 24px;
    padding: 30px 45px;
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
    box-shadow: 0 15px 40px rgba(26, 25, 36, 0.15); /* Strong, smooth container drop shadow */
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.messenger-banner-wrapper:hover {
    transform: translateY(-4px); /* Floating lift effect */
    border-color: rgba(255, 157, 66, 0.3);
    box-shadow: 0 25px 50px rgba(26, 25, 36, 0.25);
}

.messenger-banner-text {
    flex: 1;
}

.messenger-banner-text h4 {
    color: #ff9d42; /* Premium brand accent orange */
    font-size: 22px;
    font-weight: 800;
    margin: 0 0 8px;
    font-family: 'Outfit', 'Inter', sans-serif;
    letter-spacing: -0.02em;
}

.messenger-banner-text p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 16px;
    margin: 0;
    font-weight: 500;
    line-height: 1.4;
}

.messenger-banner-links {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.messenger-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 28px;
    border-radius: 14px;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none !important;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    color: #ffffff !important;
    background: rgba(255, 255, 255, 0.05); /* Premium glass design for buttons */
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.messenger-btn img {
    width: 24px;
    height: 24px;
    object-fit: contain;
    transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.messenger-btn:hover {
    color: #ffffff !important;
}

.messenger-btn:hover img {
    transform: scale(1.18) rotate(4deg); /* Beautiful micro-interaction! */
}

.whatsapp-btn:hover {
    background: rgba(37, 211, 102, 0.08) !important;
    border-color: rgba(37, 211, 102, 0.5) !important;
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.25) !important;
}

.facebook-messenger-btn:hover {
    background: rgba(0, 132, 255, 0.08) !important;
    border-color: rgba(0, 132, 255, 0.5) !important;
    box-shadow: 0 6px 20px rgba(0, 132, 255, 0.25) !important;
}

/* Responsiveness for Messenger Banner */
@media (max-width: 991px) {
    .messenger-banner-wrapper {
        flex-direction: column;
        text-align: center;
        padding: 30px 25px;
        gap: 24px;
        margin: 0 20px;
    }
    .messenger-banner-links {
        justify-content: center;
        width: 100%;
        gap: 16px;
    }
    .messenger-btn {
        flex: 1;
        justify-content: center;
        min-width: 180px;
    }
}

@media (max-width: 480px) {
    .messenger-banner-links {
        flex-direction: column;
        gap: 12px;
    }
    .messenger-btn {
        width: 100%;
    }
}
</style>

<div class="skp-module-container">
    
    <!-- Hero Block -->
    <header class="lwt-hero">
        <picture>
            <source srcset="/wp-content/uploads/2026/05/baner-nemeczkij-mob.webp" media="(max-width: 767px)">
            <img class="lwt-hero__img" src="/wp-content/uploads/2026/05/baner-nemeczkij-2-scaled.webp" alt="Professioneller Autoservice in Posen" />
        </picture>
        <div class="lwt-hero__overlay"></div>
        <div class="container">
            <h1 class="lwt-hero__title">Professioneller <br><span>Autoservice in Posen</span></h1>
            <h3 style="margin-bottom: 25px; color: #ffffff; font-weight: 600;">(Autobahn A2 - die nächste Station ist nur 10 Minuten entfernt)</h3>
            
            <p class="lwt-hero__subtitle">
                Suchen Sie einen zuverlässigen Autoservice? Unsere Werkstatt bietet umfassende Fahrzeugreparaturen und Diagnosedienstleistungen. Wir sind Experten für Motoreninstandsetzung, mechanische Wartung und allgemeinen Werkstattservice. Vertrauen Sie unseren erfahrenen Automechaniker.
            </p>

            <a href="tel:+48664040599" class="lwt-btn pulse">Rufen Sie uns an</a>
        </div>
    </header>

    <!-- Messenger Contact Block -->
    <section class="skp-messenger-banner">
        <div class="container">
            <div class="messenger-banner-wrapper">
                <div class="messenger-banner-text">
                    <h4>Wir sprechen Deutsch!</h4>
                    <p>Im Messenger antworten wir Ihnen auf Deutsch</p>
                </div>
                <div class="messenger-banner-links">
                    <!-- WhatsApp Icon -->
                    <a href="https://api.whatsapp.com/send?phone=48664040599" target="_blank" class="messenger-btn whatsapp-btn" aria-label="WhatsApp">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp logo" width="24" height="24">
                        <span>WhatsApp</span>
                    </a>
                    <!-- Messenger Icon -->
                    <a href="https://m.me/105539709188937" target="_blank" class="messenger-btn facebook-messenger-btn" aria-label="Messenger">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Facebook_Messenger_logo_2020.svg" alt="Messenger logo" width="24" height="24">
                        <span>Messenger</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services_section" class="services_section services_section_2 services_section_german">
        <div class="container">
            <div class="header_section text_left" style="margin-bottom: 50px;">
                <h2>Unsere Dienstleistungen</h2>
                <div>Professioneller Werkstattservice für alle Marken.</div>
            </div>
                      <div class="services">
                <!-- Service 1 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Motor</h3>
                        <div class="title2">Der Service "Motor" umfasst die Diagnose, Reparatur und Wartung des Fahrzeugmotors, einschließlich des Wechsels von Öl, Filtern, Dichtungen sowie der Reparatur des Kraftstoff- oder Abgassystems.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-38-1.png" alt="Motor">
                </div>
                
                <!-- Service 2 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Fahrwerk</h3>
                        <div class="title2">Umfassende Fahrwerksservices - von der Überprüfung der Achsgeometrie bis zum Austausch verschlissener Teile für Fahrkomfort und Sicherheit.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-39-1.png" alt="Fahrwerk">
                </div>
                
                <!-- Service 3 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Bremsen</h3>
                        <div class="title2">Der Service "Bremsen" umfasst die Diagnose, Reparatur und den Austausch von Bremsenkomponenten wie Bremsbelägen, Bremsscheiben, Leitungen und Bremsflüssigkeit.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-40-1.png" alt="Bremsen">
                </div>
                
                <!-- Service 4 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Antriebsstrang</h3>
                        <div class="title2">Der Service "Antriebsstrang" umfasst die Diagnose, Wartung und Reparatur von Komponenten, die für die Kraftübertragung vom Motor auf die Räder verantwortlich sind, wie Kardanwelle, Getriebe, Halbachse und Differential.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-41-1.png" alt="Antriebsstrang">
                </div>

                <!-- Service 5 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Elektrik</h3>
                        <div class="title2">Der Service "Elektrik und Elektronik" umfasst die Diagnose und Reparatur von elektrischen und elektronischen Systemen im Fahrzeug, wie Batterie, Lichtmaschine, Verkabelung oder Sensoren.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-42-1.png" alt="Elektrik">
                </div>

                <!-- Service 6 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Lenkung</h3>
                        <div class="title2">Der Service "Lenkung" umfasst die Diagnose, Wartung und Reparatur aller Lenkungskomponenten, wie Lenkgetriebe, Spurstangen, Lager oder Servopumpe.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-43-1.png" alt="Lenkung">
                </div>

                <!-- Service 7 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Klimaanlage & Heizung</h3>
                        <div class="title2">Der Service "Klimaanlage & Heizung" umfasst die Diagnose, Reparatur und Wartung von Klima- und Heizungssystemen im Fahrzeug, um optimalen Komfort bei allen Wetterbedingungen zu gewährleisten.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-44-1.png" alt="Klimaanlage & Heizung">
                </div>

                <!-- Service 8 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Motorkühlung</h3>
                        <div class="title2">Der Service "Motorkühlung" umfasst die Diagnose, Wartung und Reparatur des Kühlsystems, einschließlich Flüssigkeitswechsel, Entfernung von Verunreinigungen und Dichtheitsprüfung.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2023/06/image-45-1.png" alt="Motorkühlung">
                </div>

                <!-- Service 9 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Achsgeometrie</h3>
                        <div class="title2">Präzise 3D-Achsgeometrie und Spurvermessung für alle Fahrzeugklassen. Schont Ihre Reifen, verbessert den Geradeauslauf und sorgt für optimale Fahrsicherheit.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2026/05/untitled-120-x-240-px-880-x-540-px-1.webp" alt="Achsgeometrie">
                </div>

                <!-- Service 10 -->
                <div class="item">
                    <div class="content">
                        <h3 class="title">Vulkanisation & Reifenservice</h3>
                        <div class="title2">Kompletter Reifenservice: fachgerechte Reifenmontage, präzises Auswuchten der Räder sowie professionelle Vulkanisation und Reparatur von Reifenschäden.</div>

                    </div>
                    <img class="item-img" src="/wp-content/uploads/2026/05/untitled-120-x-240-px-880-x-540-px.webp" alt="Vulkanisation & Reifenservice">
                </div>


            </div>
            
            
        </div>
    </section>

    <!-- Roadmap / How we work -->
    <section class="roadmap_section">
        <div class="container">
            <h2>Die Zusammenarbeit mit uns ist ganz einfach</h2>
            <div class="snake-timeline">
                <div class="snake-line"></div>
                
                <div class="snake-item step-1">
                    <div class="snake-icon">1</div>
                    <div class="snake-text">Rufen Sie an<br><span style="font-size: 14px; font-weight: normal; color: rgba(26,25,36,0.7);">+48 66 40 40 599</span></div>
                </div>

                <div class="snake-item step-2">
                    <div class="snake-icon">2</div>
                    <div class="snake-text">Wir finden den passenden Termin<br><span style="font-size: 14px; font-weight: normal; color: rgba(26,25,36,0.7);">Reparatur ohne lange Wartezeiten</span></div>
                </div>

                <div class="snake-item step-3">
                    <div class="snake-icon">3</div>
                    <div class="snake-text">Beliebige Zahlungsmethoden<br><span style="font-size: 14px; font-weight: normal; color: rgba(26,25,36,0.7);">Bar, Karte, Überweisung</span></div>
                </div>

                <div class="snake-item step-4">
                    <div class="snake-icon">4</div>
                    <div class="snake-text">Fertig!<br><span style="font-size: 14px; font-weight: normal; color: rgba(26,25,36,0.7);">Holen Sie Ihr repariertes Auto ab</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Contacts Section -->
    <section id="contact_section" class="contact_section skp-contact-german">
        <div class="wrapper container" style="display: flex; gap: 60px; align-items: flex-start;">
            
            <div class="wrapp_img first_center show_center" style="flex: 1; border-radius: 12px; overflow: hidden; height: 600px; width: 100%;">
                <iframe title="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2432.6329819644875!2d16.7817894!3d52.4314475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470447433fe6a1bd%3A0x21caf1d133d66d79!2sTAK%20Service!5e0!3m2!1sru!2sby!4v1697542646595!5m2!1sru!2sby"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img second_center" style="flex: 1; border-radius: 12px; overflow: hidden; height: 600px; width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3462473282734!2d16.871539077023517!3d52.3822732464169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704453aee0505cf%3A0x75b1d7966f4fbca3!2zV8SZZ2xvd2EgOS8xMSwgNjAtMTIyIFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1722533885730!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img third_center" style="flex: 1; border-radius: 12px; overflow: hidden; height: 600px; width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.424511093465!2d16.934006577022632!3d52.36272214786157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045a8cbcfe2133%3A0x55aae88399434e16!2zxZt3acSZdGVnbyBBbnRvbmllZ28gNjhDLCA2MS0zNTkgUG96bmHFhCwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sby!4v1722555205985!5m2!1sru!2sby" 
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapp_img fourth_center" style="flex: 1; border-radius: 12px; overflow: hidden; height: 600px; width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.701249411396!2d16.8947197!3d52.44832639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044368c7cb54a9%3A0xe74bc2c1ba387447!2zU3RyemVzennFhHNrYSA2MSwgNjAtNDc5IFBvem5hxYQsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1765161166614!5m2!1sru!2sbys" 
                    style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" title="Strzeszyńska 61, 60-479 Poznań"></iframe>
            </div>

            <div class="wrapp" style="flex: 1; padding: 20px 0; width: 100%;">
                <div class="content" style="margin-bottom: 30px;">
                    <h2 style="font-size: 38px; font-weight: 800; color: #1a1924; margin-bottom: 10px;">Schreiben Sie uns!</h2>
                    <p style="font-size: 16px; color: #1a1924;">Unsere Spezialisten helfen Ihnen weiter.</p>
                </div>
                
                <form action="#" method="post" class="skp-german-form">
                    <div class="skp-form-row">
                        <select name="service" class="skp-input">
                            <option value="">Service auswählen</option>
                            <option value="reparatur">Autoreparatur & Wartung</option>
                            <option value="motor">Motoreninstandsetzung</option>
                            <option value="bremsen">Fahrwerk & Bremsen</option>
                            <option value="diagnostik">Diagnostik & Autokorrektur</option>
                        </select>
                        <select name="specific_service" class="skp-input">
                            <option value="">Spezifischen Service auswählen</option>
                        </select>
                    </div>
                    
                    <div class="skp-form-row">
                        <input type="text" name="name" class="skp-input" placeholder="Ihr Name und Nachname" required>
                        <input type="tel" name="phone" class="skp-input" placeholder="Telefonnummer" required>
                    </div>
                    
                    <div class="skp-form-row">
                        <textarea name="message" class="skp-input skp-textarea" placeholder="Zusätzliche Informationen (optional)"></textarea>
                    </div>
                    
                    <button type="submit" class="button contrast">Senden</button>
                    
                    <p style="font-size: 12px; color: rgba(26,25,36,0.6); margin-top: 20px; line-height: 1.4;">
                        Durch Klicken auf die Schaltfläche stimmen Sie der Verarbeitung Ihrer personenbezogenen Daten zu und akzeptieren die <a href="/policy/" style="color: rgba(26,25,36,0.6); text-decoration: underline;">Nutzungsvereinbarung</a>.
                    </p>
                </form>
            </div>
            
        </div>
    </section>
</div>

<?php
if ( empty($german_included_from_front_page) ) {
    get_footer();
}
?>
