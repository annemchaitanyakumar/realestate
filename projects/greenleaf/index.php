<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet" />
        <link rel="icon" href="/assests/image/favicon.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#0d5c3a" />
        
        <!-- SEO Meta Tags -->
        <title>GreenLeaf - Luxury Villa Plots @ Shamirpet | 64 Acres HMDA Approved</title>
        <meta name="description" content="Explore GreenLeaf by Kaythri Group and Paanchajanya Realty. 64-acre HMDA & TS RERA approved plotted township with 866 villa plots, 10,000 Sft clubhouse, and 5 parks at ORR Exit 7, Shamirpet, Hyderabad." />
        <meta name="keywords" content="GreenLeaf Shamirpet, Villa Plots Shamirpet, HMDA Approved Plots Hyderabad, ORR Exit 7 Plots, Paanchajanya Realty, Kaythri Group, Plots in Bowramspet" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://paanchajanyareality.com/projects/greenleaf/" />
        <meta property="og:title" content="GreenLeaf - Luxury Villa Plots @ Shamirpet | 64 Acres HMDA Approved" />
        <meta property="og:description" content="64 Acres, 866 Plots, 10,000 Sft Clubhouse, and 5 Parks at ORR Exit 7, Shamirpet. HMDA LP No. 000037/LO/PLG/HMDA/2020 | TS RERA: P02200002093." />
        <meta property="og:image" content="/assests/projects/greenleaf/greenleaf-entrance.jpg" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://paanchajanyareality.com/projects/greenleaf/" />
        <meta property="twitter:title" content="GreenLeaf - Luxury Villa Plots @ Shamirpet | 64 Acres HMDA Approved" />
        <meta property="twitter:description" content="64 Acres, 866 Plots, 10,000 Sft Clubhouse, and 5 Parks at ORR Exit 7, Shamirpet. HMDA LP No. 000037/LO/PLG/HMDA/2020 | TS RERA: P02200002093." />
        <meta property="twitter:image" content="/assests/projects/greenleaf/greenleaf-entrance.jpg" />

        <link rel="canonical" href="https://paanchajanyareality.com/projects/greenleaf/" />
        <meta name="robots" content="index, follow" />

        <!-- Project Assets (Matching visual style of RJ Retreat without React Router collision) -->
        <link href="/assests/projects/DRR/css/main.e54e2a16.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="/assests/css/whatsapp-widget.css" />

        <style>
            /* GreenLeaf Custom Refinements */
            :root {
                --theme-gold: #c5a059;
                --theme-green: #0d5c3a;
                --theme-dark: #0f1412;
            }
            .header {
                background: #ffffff;
            }
            .header_contact {
                background-color: var(--theme-gold) !important;
                color: #000000 !important;
                border-radius: 6px;
                transition: all 0.3s ease;
            }
            .header_contact:hover {
                background-color: #b38e46 !important;
                color: #ffffff !important;
            }
            /* Hero Section Styles */
            .hero-section {
                position: relative;
                min-height: 85vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #0c1a14;
                overflow: hidden;
            }
            .hero-bg-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            .hero-bg-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                transform: scale(1.02);
                transition: transform 0.5s ease-out;
            }
            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    180deg,
                    rgba(10, 24, 18, 0.45) 0%,
                    rgba(10, 24, 18, 0.65) 50%,
                    rgba(10, 24, 18, 0.88) 100%
                );
            }
            .hero-content-wrap {
                max-width: 1100px;
                padding-top: 40px;
                padding-bottom: 50px;
            }
            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: rgba(13, 92, 58, 0.55);
                border: 1px solid rgba(197, 160, 89, 0.65);
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
                padding: 8px 18px;
                border-radius: 50px;
                font-size: 0.82rem;
                font-weight: 700;
                letter-spacing: 0.8px;
                color: #f5eedc;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            }
            .hero-title {
                font-family: 'Playfair Display', Georgia, serif;
                font-size: clamp(2.8rem, 6vw, 5rem);
                font-weight: 700;
                line-height: 1.1;
                color: #ffffff;
                text-shadow: 0 4px 30px rgba(0, 0, 0, 0.8);
                letter-spacing: -0.5px;
            }
            .hero-subtitle {
                font-size: clamp(1.1rem, 2.2vw, 1.55rem);
                font-weight: 600;
                color: var(--theme-gold);
                text-shadow: 0 2px 14px rgba(0, 0, 0, 0.8);
                letter-spacing: 0.5px;
            }
            .hero-dot {
                color: #ffffff;
                opacity: 0.7;
                margin: 0 6px;
            }
            .hero-partner {
                font-size: 0.92rem;
                letter-spacing: 1px;
                text-transform: uppercase;
                color: rgba(255, 255, 255, 0.85);
            }
            .hero-partner strong {
                color: #ffffff;
                font-weight: 800;
            }
            .hero-metrics-strip {
                max-width: 880px;
            }
            .hero-metric-card {
                background: rgba(15, 30, 23, 0.65);
                border: 1px solid rgba(197, 160, 89, 0.35);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius: 12px;
                padding: 14px 10px;
                transition: all 0.3s ease;
            }
            .hero-metric-card:hover {
                transform: translateY(-3px);
                background: rgba(15, 30, 23, 0.85);
                border-color: var(--theme-gold);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
            }
            .metric-val {
                font-size: clamp(1.1rem, 2vw, 1.45rem);
                font-weight: 800;
                color: var(--theme-gold);
                line-height: 1.2;
            }
            .metric-lbl {
                font-size: 0.76rem;
                text-transform: uppercase;
                letter-spacing: 0.6px;
                color: rgba(255, 255, 255, 0.82);
                margin-top: 3px;
                font-weight: 600;
            }
            .btn-gold-hero {
                background: linear-gradient(135deg, #d4af62 0%, #b38e46 100%);
                color: #111111 !important;
                border: none;
                border-radius: 8px;
                box-shadow: 0 8px 25px rgba(212, 175, 98, 0.35);
                transition: all 0.3s ease;
                font-size: 0.95rem;
                letter-spacing: 0.5px;
            }
            .btn-gold-hero:hover {
                transform: translateY(-2px);
                box-shadow: 0 12px 30px rgba(212, 175, 98, 0.55);
                background: linear-gradient(135deg, #e0be75 0%, #c49d52 100%);
                color: #000000 !important;
            }
            .btn-outline-hero {
                background: rgba(255, 255, 255, 0.08);
                color: #ffffff !important;
                border: 1.5px solid rgba(255, 255, 255, 0.45);
                border-radius: 8px;
                backdrop-filter: blur(6px);
                -webkit-backdrop-filter: blur(6px);
                transition: all 0.3s ease;
                font-size: 0.95rem;
                letter-spacing: 0.5px;
            }
            .btn-outline-hero:hover {
                background: rgba(255, 255, 255, 0.22);
                border-color: #ffffff;
                color: #ffffff !important;
                transform: translateY(-2px);
            }
            .custom-toggler .hamburger span {
                background: var(--theme-dark);
            }
            .card-plain {
                background: #ffffff;
                transition: all 0.3s ease;
            }
            .card-plain:hover {
                transform: translateY(-4px);
                box-shadow: 0 14px 30px rgba(13, 92, 58, 0.12) !important;
            }
            .amenities_box .glass-card {
                background: rgba(255, 255, 255, 0.95);
                border: 1px solid rgba(13, 92, 58, 0.12);
                border-radius: 12px;
                padding: 22px 14px;
                text-align: center;
                transition: all 0.3s ease;
                min-height: 140px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: var(--theme-dark);
            }
            .amenities_box .glass-card:hover {
                background: #ffffff;
                transform: translateY(-5px);
                box-shadow: 0 12px 28px rgba(13, 92, 58, 0.15);
                border-color: var(--theme-gold);
            }
            .amenity-fa-icon {
                font-size: 2.2rem;
                color: var(--theme-green);
                margin-bottom: 10px;
                transition: transform 0.3s ease;
            }
            .amenities_box .glass-card:hover .amenity-fa-icon {
                transform: scale(1.15);
                color: var(--theme-gold);
            }
            .btn-brown {
                background: var(--theme-green) !important;
                color: #ffffff !important;
            }
            .btn-brown:hover {
                background: #083b24 !important;
            }
            .btn-outline-secondary:hover {
                background: var(--theme-gold) !important;
                border-color: var(--theme-gold) !important;
                color: #ffffff !important;
            }
            .custom_submit {
                background-color: var(--theme-gold) !important;
                color: #000000 !important;
                font-weight: 700;
            }
            .custom_submit:hover {
                background-color: #b38e46 !important;
                color: #ffffff !important;
            }
            .vertical-btn:hover {
                background: var(--theme-gold) !important;
            }
            .modern-footer {
                background: #111613 !important;
                color: #e5eee8 !important;
            }
            .modern-footer .footer-nav ul li a {
                color: #c0d4c8 !important;
            }
            .modern-footer .footer-nav ul li a:hover {
                color: var(--theme-gold) !important;
            }
            .legal-badge-pill {
                background: rgba(13, 92, 58, 0.1);
                color: var(--theme-green);
                border: 1px solid rgba(13, 92, 58, 0.3);
                font-size: 0.78rem;
                font-weight: 700;
                padding: 4px 10px;
                border-radius: 4px;
                display: inline-block;
                margin-top: 4px;
            }
        </style>
    </head>
    <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">
        
        <div id="greenleaf-app">
            <div id="wrapper">
                
                <!-- ==========================================================================
                     HEADER (Same Sticky Header as RJ Retreat)
                     ========================================================================== -->
                <header
                    class="header shadow-sm"
                    style="
                        position: sticky;
                        top: 0px;
                        left: 0px;
                        right: 0px;
                        z-index: 1050;
                        transform: translateY(0px);
                        transition: transform 0.3s ease-in-out;
                    "
                >
                    <div class="container-fluid d-flex align-items-center justify-content-between px-3 px-md-4">
                        <button
                            class="btn border-0 custom-toggler"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasMenu"
                            aria-controls="offcanvasMenu"
                            aria-label="Menu"
                        >
                            <div class="hamburger"><span></span><span></span><span></span></div>
                        </button>

                        <div class="d-flex align-items-center gap-3">
                            <a href="/" aria-label="Visit Paanchajanya Realty">
                                <img
                                    src="/assests/image/paanchajanya-logo-new.png"
                                    alt="Paanchajanya Realty"
                                    style="height: 52px; width: auto; object-fit: contain;"
                                />
                            </a>
                            <div style="width: 1px; height: 32px; background: #ddd;" class="d-none d-sm-block"></div>
                            <div class="d-none d-sm-flex flex-column">
                                <span style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 1px; color: #666; font-weight: 700;">In Association With</span>
                                <span style="font-size: 1rem; font-weight: 800; color: #0d5c3a; letter-spacing: 0.5px;">KAYTHRI GROUP</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <div class="d-none d-md-block">
                                <a
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    class="btn header_contact fw-bold px-3 py-2"
                                >
                                    Book Site Visit
                                </a>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==========================================================================
                     OFFCANVAS MENU (Same Navigation as RJ Retreat)
                     ========================================================================== -->
                <div
                    class="offcanvas offcanvas-start"
                    tabindex="-1"
                    id="offcanvasMenu"
                    aria-labelledby="offcanvasMenuLabel"
                    style="z-index: 2000"
                >
                    <div class="offcanvas-header">
                        <h5 id="offcanvasMenuLabel" class="fw-bold text-dark">GreenLeaf Menu</h5>
                        <button
                            type="button"
                            class="btn-close text-reset custome_close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-bs-dismiss="offcanvas">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#highlights" class="nav-link" data-bs-dismiss="offcanvas">Project Highlights</a>
                            </li>
                            <li class="nav-item">
                                <a href="#amenities" class="nav-link" data-bs-dismiss="offcanvas">Clubhouse &amp; Amenities</a>
                            </li>
                            <li class="nav-item">
                                <a href="#plans" class="nav-link" data-bs-dismiss="offcanvas">Master Layout Plan</a>
                            </li>
                            <li class="nav-item">
                                <a href="#location" class="nav-link" data-bs-dismiss="offcanvas">Location Highlights</a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallery" class="nav-link" data-bs-dismiss="offcanvas">Project Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="#specs" class="nav-link" data-bs-dismiss="offcanvas">Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link" data-bs-dismiss="offcanvas">Contact &amp; Site Visit</a>
                            </li>
                            <li class="nav-item mt-3 pt-3 border-top">
                                <a href="/" class="nav-link text-success fw-bold">← Paanchajanya Realty Home</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- ==========================================================================
                     HERO BANNER SECTION (High-Impact Grand Entrance Showcase)
                     ========================================================================== -->
                <section class="hero-section position-relative overflow-hidden" id="hero">
                    <div class="hero-bg-wrapper">
                        <img
                            src="/assests/projects/greenleaf/greenleaf-entrance-wide.jpg"
                            alt="GreenLeaf Luxury Villa Plots Shamirpet Grand Entrance"
                            class="hero-bg-img"
                            loading="eager"
                            fetchpriority="high"
                        />
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="container position-relative z-2 hero-content-wrap py-5 text-center text-white">
                        <div class="hero-badge mb-3" data-aos="fade-down">
                            <span>🏛️ HMDA LP NO. 000037/LO/PLG/HMDA/2020 &nbsp;|&nbsp; TS RERA: P02200002093</span>
                        </div>
                        <h1 class="hero-title mb-2" data-aos="fade-up" data-aos-delay="100">
                            GreenLeaf
                        </h1>
                        <p class="hero-subtitle mb-3" data-aos="fade-up" data-aos-delay="200">
                            Luxury Villa Plots @ Shamirpet <span class="hero-dot">·</span> Directly at ORR Exit 7
                        </p>
                        <p class="hero-partner mb-4" data-aos="fade-up" data-aos-delay="250">
                            <span>A Venture By</span> <strong>KAYTHRI GROUP</strong> <span class="mx-2">|</span> <span>Marketed by</span> <strong>PAANCHAJANYA REALTY</strong>
                        </p>

                        <!-- Key Township Metrics Strip -->
                        <div class="hero-metrics-strip mx-auto mb-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="row g-2 g-md-3 justify-content-center">
                                <div class="col-6 col-sm-3">
                                    <div class="hero-metric-card">
                                        <div class="metric-val">64 Acres</div>
                                        <div class="metric-lbl">Plotted Township</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="hero-metric-card">
                                        <div class="metric-val">866</div>
                                        <div class="metric-lbl">Total Villa Plots</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="hero-metric-card">
                                        <div class="metric-val">10,000 Sft</div>
                                        <div class="metric-lbl">Clubhouse &amp; Pool</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="hero-metric-card">
                                        <div class="metric-val">5 Parks</div>
                                        <div class="metric-lbl">Landscaped Greens</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hero Action Buttons -->
                        <div class="hero-cta-btns d-flex flex-wrap justify-content-center gap-3" data-aos="fade-up" data-aos-delay="350">
                            <button class="btn btn-gold-hero px-4 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-calendar-check me-2"></i> Book Site Visit
                            </button>
                            <a href="#plans" class="btn btn-outline-hero px-4 py-3 fw-bold">
                                <i class="fas fa-map me-2"></i> Master Layout Plan
                            </a>
                            <button class="btn btn-outline-hero px-4 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#brochureModal">
                                <i class="fas fa-file-pdf me-2"></i> Download Brochure
                            </a>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     PROJECT HIGHLIGHTS SECTION (Same .card-plain Grid as RJ Retreat)
                     ========================================================================== -->
                <section
                    id="highlights"
                    class="section"
                    style="padding: 80px 0px; background-color: rgb(249, 249, 249)"
                >
                    <div class="container">
                        <div class="text-center mb-5">
                            <span class="badge text-bg-success px-3 py-2 mb-2 text-uppercase fw-bold" style="letter-spacing: 1px;">
                                HMDA LP NO. 000037/LO/PLG/HMDA/2020 | TS RERA: P02200002093
                            </span>
                            <h2 class="section-title mt-2 aos-init" data-aos="zoom-in">Project Highlights</h2>
                            <p class="text-muted mx-auto" style="max-width: 680px;">
                                A 64-acre plotted layout located off ORR Exit 7 at Shamirpet, developed by Kaythri Group and marketed by Paanchajanya Realty.
                            </p>
                        </div>

                        <div class="row g-4 justify-content-center">
                            
                            <!-- 1. 64 Acres -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">64 Acres</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Total Land Area
                                    </p>
                                </div>
                            </div>

                            <!-- 2. HMDA Approved -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">HMDA</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Approved Layout
                                    </p>
                                </div>
                            </div>

                            <!-- 3. 866 Plots -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">866 Units</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Number of Plots
                                    </p>
                                </div>
                            </div>

                            <!-- 4. 1,79,437 Sq Yds -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">1,79,437</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Sq. Yds Plotted Area
                                    </p>
                                </div>
                            </div>

                            <!-- 5. 10,000 Sft Clubhouse -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">10,000 Sft</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Club House
                                    </p>
                                </div>
                            </div>

                            <!-- 6. 5 Parks -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">5 Parks</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Themed Green Zones
                                    </p>
                                </div>
                            </div>

                            <!-- 7. 30M & 60/40/30 Roads -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">30M &amp; 60'</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Master Plan Roads
                                    </p>
                                </div>
                            </div>

                            <!-- 8. 100% Vaastu -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">100% Vastu</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Compliant Plots
                                    </p>
                                </div>
                            </div>

                            <!-- 9. 100% Clear Title -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">Clear Title</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Spot Registration
                                    </p>
                                </div>
                            </div>

                            <!-- 10. 24/7 Security -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 aos-init" data-aos="zoom-in">
                                <div
                                    class="card-plain p-4 h-100 d-flex flex-column align-items-center justify-content-center"
                                    style="
                                        border-radius: 16px;
                                        box-shadow: rgba(0, 0, 0, 0.08) 0px 8px 20px;
                                        gap: 0.75rem;
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    "
                                >
                                    <span style="font-weight: 800; font-size: 1.15rem; color: #0d5c3a;">24/7 Guards</span>
                                    <p class="mb-0" style="font-size: 0.95rem; color: rgb(102, 102, 102); text-align: center">
                                        Gated Security
                                    </p>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button
                                    class="btn btn-dark px-4 py-2 fw-bold rounded-pill"
                                    aria-label="Download Brochure"
                                    data-bs-toggle="modal"
                                    data-bs-target="#brochure"
                                >
                                    Download Complete Brochure
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     AMENITIES SECTION (Same .glass-card Structure as RJ Retreat)
                     ========================================================================== -->
                <section id="amenities" class="section amenities_bg" style="padding: 80px 0;">
                    <div class="container aos-init" data-aos="zoom-out">
                        <div class="text-center mb-5 text-white">
                            <h2 class="section-title mt-2 text-dark">Township Amenities</h2>
                            <p class="text-muted">Equipped with a 10,000 Sft central clubhouse, 5 parks, and full underground utility networks.</p>
                        </div>

                        <div class="row g-3 g-md-4">
                            
                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-landmark amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">10,000 Sft Clubhouse</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-swimming-pool amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Swimming Pool</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-dumbbell amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Equipped Gym</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-tree amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">5 Landscaped Parks</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-glass-cheers amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Banquet Hall</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-child amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Children Play Area</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-running amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Jogging Track</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-table-tennis amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Indoor Games</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-road amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">30M / 60 / 40' Roads</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-bolt amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Underground Power</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-water amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">Overhead Water Tank</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-2 amenities_box">
                                <div class="amenity glass-card">
                                    <i class="fas fa-shield-alt amenity-fa-icon"></i>
                                    <div class="fw-semibold mt-1">24/7 Guarded Gate</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     TOWNSHIP MASTER FEATURE BREAK (Aerial Showcase - Natural Scroll)
                     ========================================================================== -->
                <section class="township-feature-break position-relative overflow-hidden py-5 text-white" style="background: #0b1712; min-height: 520px; display: flex; align-items: center;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
                        <img
                            src="/assests/projects/greenleaf/greenleaf-aerial.jpg"
                            alt="GreenLeaf 64 Acres Township Aerial Master View"
                            class="w-100 h-100"
                            style="object-fit: cover; object-position: center; filter: brightness(0.42);"
                            loading="lazy"
                        />
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(11, 23, 18, 0.75) 0%, rgba(11, 23, 18, 0.45) 50%, rgba(11, 23, 18, 0.85) 100%);"></div>
                    </div>
                    <div class="container position-relative z-2 py-5 text-center">
                        <div class="badge px-3 py-2 mb-3 rounded-pill" style="background: rgba(197, 160, 89, 0.2); border: 1px solid rgba(197, 160, 89, 0.6); color: #e5c378; font-size: 0.85rem; letter-spacing: 1px;">
                            64-ACRE INTEGRATED PLOTTED TOWNSHIP
                        </div>
                        <h2 class="display-5 fw-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                            A Landmark Plotted Community @ ORR Exit 7
                        </h2>
                        <p class="lead mx-auto mb-4" style="max-width: 780px; color: rgba(255, 255, 255, 0.88); font-size: 1.15rem; line-height: 1.7;">
                            Spanning 64 acres with 866 villa plots and 1,79,437 Sq. Yards of plotted development. Complete with a 10,000 Sft clubhouse, 5 landscaped parks, and wide master plan road connectivity in Shamirpet.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#plans" class="btn btn-gold-hero px-4 py-3 fw-bold">
                                <i class="fas fa-map me-2"></i> View Master Layout Plan
                            </a>
                            <button class="btn btn-outline-hero px-4 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-calendar-alt me-2"></i> Schedule Site Visit
                            </button>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     PLANS SECTION (Official Master Layout Plan with Image & Legal Numbers)
                     ========================================================================== -->
                <section id="plans" class="section" style="padding: 80px 0;">
                    <div class="container">
                        <div class="text-center mb-4">
                            <h2 class="section-title mt-2 aos-init" data-aos="zoom-in">Master Layout Plan</h2>
                            <p class="text-muted">Official HMDA sanctioned layout diagram showing survey numbers, road network, and zoning.</p>
                        </div>

                        <!-- Technical Details Banner -->
                        <div class="p-3 mb-4 rounded-3 text-center" style="background: #f4f8f5; border: 1px solid #d2e4d7;">
                            <div class="row g-2 text-dark" style="font-size: 0.9rem;">
                                <div class="col-md-3"><strong>HMDA LP No:</strong> 000037/LO/PLG/HMDA/2020</div>
                                <div class="col-md-3"><strong>TS RERA No:</strong> P02200002093</div>
                                <div class="col-md-6"><strong>Survey Numbers:</strong> 339/P, 340/P, 341/P, 342/P, 345/P, 346, 347/P, 355, 356/P, 358/P</div>
                                <div class="col-12 mt-2" style="font-size: 0.85rem; color: #555;">
                                    Bowramspet-ORRGC Village, Shamirpet-ORRGC Mandal, Medchal-Malkajgiri District, Telangana.
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap justify-content-center gap-2 mb-3 aos-init" data-aos="zoom-in">
                            <button class="btn rounded-pill px-3 py-2 btn-brown" onclick="switchPlanImage('master')">Master Plan</button>
                            <button class="btn rounded-pill px-3 py-2 btn-outline-secondary" onclick="switchPlanImage('clubhouse')">Clubhouse (10,000 Sft)</button>
                            <button class="btn rounded-pill px-3 py-2 btn-outline-secondary" onclick="switchPlanImage('parks')">5 Parks Zone</button>
                            <button class="btn rounded-pill px-3 py-2 btn-outline-secondary" onclick="switchPlanImage('aerial')">Township Aerial View</button>
                        </div>

                        <div class="card-plain overflow-hidden position-relative aos-init rounded-4 shadow-sm" data-aos="zoom-in" style="background:#000;">
                            <a href="/assests/projects/greenleaf/greenleaf-layout-plan.jpg" target="_blank" title="Click to view full layout image">
                                <img id="planDisplayImg" alt="GreenLeaf Master Layout Plan 64 Acres Shamirpet" class="w-100" loading="eager" src="/assests/projects/greenleaf/greenleaf-layout-plan.jpg" style="max-height: 80vh; object-fit: contain;" />
                            </a>
                        </div>

                        <div class="text-center mt-3">
                            <a href="/assests/projects/greenleaf/greenleaf-layout-plan.jpg" target="_blank" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold">
                                <i class="fas fa-search-plus me-2"></i> Inspect Full Resolution Map
                            </a>
                            <button class="btn btn-success rounded-pill px-4 py-2 fw-semibold ms-2" data-bs-toggle="modal" data-bs-target="#brochure">
                                <i class="fas fa-download me-2"></i> Download Plan PDF
                            </button>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     LOCATION HIGHLIGHTS (Same Format as RJ Retreat)
                     ========================================================================== -->
                <section id="location" class="section" style="padding: 80px 0; background: #fafafa;">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-12 col-lg-7 order-2 order-lg-1">
                                <div class="card-plain p-2 rounded-4 shadow-sm overflow-hidden">
                                    <div class="ratio ratio-4x3">
                                        <iframe 
                                            title="GreenLeaf Shamirpet Location Map"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60867.75618776269!2d78.5323961623869!3d17.58789387405234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb84db9c6d3bc7%3A0xe54e209dc90b39e6!2sShamirpet%2C%20Telangana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                                            style="border:0;" 
                                            allowfullscreen="" 
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-5 order-1 order-lg-2">
                                <h2 class="section-title mt-2 main_headings">Location Highlights</h2>
                                <p class="text-muted">Transit connectivity from GreenLeaf main entrance gate:</p>

                                <ul class="list-group list-group-flush mt-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Outer Ring Road (ORR Exit 7)</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">2 min / 1 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Rajiv Rahadari (Karimnagar Highway)</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">5 min / 3 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Genome Valley Bio-Tech Park</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">8 min / 5 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">BITS Pilani Hyderabad Campus</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">10 min / 7 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">NALSAR University of Law</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">12 min / 8 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Leonia Holistic &amp; Celebrity Resort</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">10 min / 7 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Shamirpet Lake &amp; Deer Park</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">8 min / 5.5 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Medchal Town (NH-44 Nagpur Highway)</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">15 min / 12 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Secunderabad Station / JBS</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">30 min / 22 km</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">RGI Airport (via Outer Ring Road)</span>
                                        <span class="badge text-bg-warning text-dark rounded-pill">45 min / 55 km</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     GALLERY SECTION (Sticky Scroll Animation with GreenLeaf Images)
                     ========================================================================== -->
                <!-- ==========================================================================
                     GALLERY SECTION (Clean Responsive Real Estate Grid - Natural Scroll)
                     ========================================================================== -->
                <section id="gallery" class="section py-5" style="background: #f7f9f8;">
                    <div class="container py-4">
                        <div class="text-center mb-5" data-aos="fade-up">
                            <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2" style="background: rgba(13, 92, 58, 0.1); color: #0d5c3a; font-weight: 700; font-size: 0.8rem; letter-spacing: 1px;">Project Visuals</span>
                            <h2 class="section-title mt-1 fw-bold" style="font-family: 'Playfair Display', Georgia, serif; color: #111;">Project Gallery</h2>
                            <p class="text-muted mx-auto" style="max-width: 650px;">Architectural renders and master planning blueprints of GreenLeaf 64-Acre Township at Shamirpet.</p>
                        </div>

                        <div class="row g-4">
                            <!-- 1. Grand Entrance Arch -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px;">
                                        <img src="/assests/projects/greenleaf/greenleaf-entrance-wide.jpg" alt="Grand Entrance Arch at GreenLeaf Shamirpet" class="w-100 h-100 object-fit-cover gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white">Grand Entrance</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">Architectural Entrance Arch</h5>
                                        <p class="text-muted small mb-0">Grand archway with security outpost and 60-ft wide tree-lined spine road.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. 10,000 Sft Clubhouse & Pool -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px;">
                                        <img src="/assests/projects/greenleaf/greenleaf-clubhouse.jpg" alt="10,000 Sft Luxury Clubhouse & Swimming Pool" class="w-100 h-100 object-fit-cover gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white">Clubhouse</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">10,000 Sft Modern Clubhouse</h5>
                                        <p class="text-muted small mb-0">Swimming pool, gymnasium, multi-purpose banquet hall, and indoor games.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Landscaped Parks -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px;">
                                        <img src="/assests/projects/greenleaf/greenleaf-park.jpg" alt="Landscaped Parks & Jogging Track" class="w-100 h-100 object-fit-cover gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white">5 Parks</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">5 Landscaped Parks</h5>
                                        <p class="text-muted small mb-0">Themed green zones with children play areas, walking trails, and seating gazebos.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Aerial Township Perspective -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px;">
                                        <img src="/assests/projects/greenleaf/greenleaf-aerial.jpg" alt="64 Acres Plotted Township Aerial Master View" class="w-100 h-100 object-fit-cover gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white">Aerial View</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">64-Acre Township Master View</h5>
                                        <p class="text-muted small mb-0">866 villa plots organized with 30.0M proposed master road, 60' spine, and 40'/30' BT roads.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 5. Official HMDA Layout Plan -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px; background: #000;">
                                        <img src="/assests/projects/greenleaf/greenleaf-layout-plan.jpg" alt="Official HMDA Master Layout Plan LP 000037/LO/PLG/HMDA/2020" class="w-100 h-100 object-fit-contain gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-success text-white">HMDA &amp; RERA</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">Official Master Layout Blueprint</h5>
                                        <p class="text-muted small mb-0">LP NO. 000037/LO/PLG/HMDA/2020 with all approved survey numbers.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 6. Launch Brochure & Channel Partner Document -->
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 gallery-card">
                                    <div class="position-relative overflow-hidden" style="height: 260px; background: #1a1a1a;">
                                        <img src="/assests/projects/greenleaf/greenleaf-flyer.jpg" alt="Official GreenLeaf Launch Document" class="w-100 h-100 object-fit-contain gallery-img" loading="lazy" />
                                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill bg-warning text-dark fw-bold">Launch Document</span>
                                    </div>
                                    <div class="card-body p-4 bg-white">
                                        <h5 class="fw-bold mb-1 text-dark">Official Project Document</h5>
                                        <p class="text-muted small mb-0">Joint venture presentation by Kaythri Group &amp; Paanchajanya Realty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     SPECIFICATIONS SECTION (Same Accordion Structure as RJ Retreat)
                     ========================================================================== -->
                <section id="specs" class="section" style="padding: 80px 0; background: #0f1412;">
                    <div class="container">
                        <div class="text-center mb-4 aos-init" data-aos="zoom-in">
                            <h2 class="section-title mt-2 text-white">Project Specifications</h2>
                            <p class="text-muted">Civil, technical, and infrastructure parameters executed per HMDA guidelines.</p>
                        </div>
                        
                        <div class="accordion row" id="specAcc">
                            
                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="0">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-0">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-0" aria-expanded="true" aria-controls="c-0">
                                            GATED COMMUNITY &amp; ARCHWAY
                                        </button>
                                    </h2>
                                    <div id="c-0" class="accordion-collapse collapse show" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Grand architectural entrance arch with security cabin and boom barriers</li>
                                                <li>7-foot high perimeter compound wall enclosing all 64 acres</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="50">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-1" aria-expanded="false" aria-controls="c-1">
                                            24/7 SECURITY &amp; CCTV
                                        </button>
                                    </h2>
                                    <div id="c-1" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Guarded security personnel at all entry and exit corridors</li>
                                                <li>CCTV cameras positioned along the main junction roads</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="100">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-2" aria-expanded="false" aria-controls="c-2">
                                            10,000 SFT CLUBHOUSE
                                        </button>
                                    </h2>
                                    <div id="c-2" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Dedicated recreational building with swimming pool, gym, banquet hall, and games room</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="150">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-3" aria-expanded="false" aria-controls="c-3">
                                            ROAD INFRASTRUCTURE
                                        </button>
                                    </h2>
                                    <div id="c-3" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>30.0M (100 Ft) Wide Master Plan Road cutting through the layout</li>
                                                <li>60-Foot wide central avenue with concrete kerbs and paved footpaths</li>
                                                <li>40-Foot and 30-Foot wide internal blacktop lanes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="200">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-4" aria-expanded="false" aria-controls="c-4">
                                            UNDERGROUND ELECTRICITY
                                        </button>
                                    </h2>
                                    <div id="c-4" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Entire venture provided with underground armored cabling and localized transformers</li>
                                                <li>LED street lighting mounted on decorative poles throughout all avenues</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="250">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-5" aria-expanded="false" aria-controls="c-5">
                                            WATER &amp; DRAINAGE NETWORK
                                        </button>
                                    </h2>
                                    <div id="c-5" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Centralized Overhead Storage Tank (OHT) with water line stub to each plot</li>
                                                <li>Underground drainage (UGD) system with Sewage Treatment Plant (STP)</li>
                                                <li>Rainwater harvesting pits along road flanks</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-6" aria-expanded="false" aria-controls="c-6">
                                            5 LANDSCAPED PARKS
                                        </button>
                                    </h2>
                                    <div id="c-6" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>5 open green spaces with jogging trails, children's play equipment, and gazebos</li>
                                                <li>Avenue plantation with flowering trees along all street corridors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 aos-init" data-aos="fade-up" data-aos-delay="350">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h-7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-7" aria-expanded="false" aria-controls="c-7">
                                            LEGAL &amp; TITLE CLARITY
                                        </button>
                                    </h2>
                                    <div id="c-7" class="accordion-collapse collapse" data-bs-parent="#specAcc">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>HMDA Sanction LP No. 000037/LO/PLG/HMDA/2020</li>
                                                <li>TS RERA Registration No. P02200002093</li>
                                                <li>100% Vastu compliance, clear title passbook, and spot registration ready</li>
                                                <li>Bank loan approvals from leading financial institutions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     CONTACT SECTION (Same Contact & Map Grid as RJ Retreat)
                     ========================================================================== -->
                <section id="contact" class="contact-section py-5">
                    <div class="container aos-init" data-aos="zoom-in">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold section-title">Contact &amp; Site Visit</h2>
                            <p class="text-muted">Schedule a free site visit to GreenLeaf Shamirpet with cab pickup and drop.</p>
                        </div>
                        <div class="row g-4 align-items-stretch">
                            <div class="col-md-6">
                                <div class="map-container shadow-sm rounded-4 overflow-hidden h-100">
                                    <iframe
                                        title="Google Map Shamirpet"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60867.75618776269!2d78.5323961623869!3d17.58789387405234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb84db9c6d3bc7%3A0xe54e209dc90b39e6!2sShamirpet%2C%20Telangana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                                        width="100%"
                                        height="100%"
                                        style="border: 0px; min-height: 380px;"
                                        allowfullscreen=""
                                        loading="lazy"
                                    ></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-wrapper shadow-lg p-4 p-md-5 rounded-4 bg-white">
                                    <div id="contact-success" style="display:none;" class="alert alert-success mb-3">Thank you! Your inquiry has been submitted.</div>
                                    <div id="contact-error" style="display:none;" class="alert alert-danger mb-3"></div>
                                    
                                    <form class="row g-3" id="contactForm">
                                        <div class="col-md-6">
                                            <input
                                                class="form-control form-control-lg form-controls"
                                                placeholder="Your full name *"
                                                required=""
                                                type="text"
                                                name="name"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <input
                                                class="form-control form-control-lg form-controls"
                                                placeholder="Your email address"
                                                type="email"
                                                name="email"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <input
                                                class="form-control form-control-lg form-controls"
                                                placeholder="Mobile number *"
                                                required=""
                                                type="tel"
                                                name="phone"
                                                pattern="[0-9]{10}"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select form-control-lg form-controls" name="plot_size">
                                                <option value="180 Sq. Yds">180 Sq. Yards</option>
                                                <option value="200 Sq. Yds" selected>200 Sq. Yards</option>
                                                <option value="267 Sq. Yds">267 Sq. Yards</option>
                                                <option value="300 Sq. Yds">300 Sq. Yards</option>
                                                <option value="400 Sq. Yds">400 Sq. Yards</option>
                                                <option value="500+ Sq. Yds">500+ Sq. Yards</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <textarea
                                                name="message"
                                                class="form-control form-control-lg form-controls"
                                                rows="3"
                                                placeholder="Preferred site visit date or questions..."
                                            ></textarea>
                                        </div>
                                        <div class="col-12 text-center mt-3">
                                            <button
                                                type="submit"
                                                class="btn btn-warning px-5 py-2 fw-bold rounded-pill shadow-lg custom_submit w-100"
                                                id="contactSubmitBtn"
                                            >
                                                Submit Inquiry &amp; Book Site Visit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==========================================================================
                     MODERN FOOTER (Same Format as RJ Retreat)
                     ========================================================================== -->
                <footer class="modern-footer">
                    <div class="footer-logo text-center mb-3">
                        <img
                            alt="Paanchajanya Realty Logo"
                            src="/assests/image/paanchajanya-logo-new.png"
                            style="width: 200px; filter: brightness(0) invert(1);"
                        />
                    </div>
                    <nav class="footer-nav text-center mb-3">
                        <ul class="d-flex justify-content-center gap-4 flex-wrap">
                            <li><a href="#">Home</a></li>
                            <li><a href="#highlights">Project Highlights</a></li>
                            <li><a href="#amenities">Clubhouse &amp; Parks</a></li>
                            <li><a href="#plans">Master Layout</a></li>
                            <li><a href="#location">Location Highlights</a></li>
                            <li><a href="#specs">Specifications</a></li>
                            <li><a href="tel:+919100031999">Contact: +91 91000 31999</a></li>
                        </ul>
                    </nav>
                    <p><b>HMDA LP NO:</b> 000037/LO/PLG/HMDA/2020 &nbsp;|&nbsp; <b>TS RERA NO:</b> P02200002093</p>
                    <p><b>Site Location:</b> Bowramspet-ORRGC Village, Shamirpet-ORRGC Mandal, Medchal-Malkajgiri District, Telangana.</p>
                    <a href="tel:+919100031999" class="text-warning text-decoration-none">
                        <p class="fw-bold"><b>Sales Call:</b> +91 91000 31999 &nbsp;|&nbsp; +91 723 799 7999</p>
                    </a>
                    <div class="footer-bottom text-center">
                        <small>© <?php echo date('Y'); ?> GreenLeaf Shamirpet. Developed by Kaythri Group. Marketed by Paanchajanya Realty Pvt Ltd.</small>
                    </div>
                </footer>

                <!-- ==========================================================================
                     VERTICAL FIXED CTA BUTTON (Same as RJ Retreat)
                     ========================================================================== -->
                <div class="fixed-cta-vertical" style="opacity: 1; transform: none">
                    <button
                        class="vertical-btn"
                        aria-label="Enquire Now"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                    >
                        Enquire&nbsp;Now
                    </button>
                </div>

                <!-- ==========================================================================
                     MODAL: ENQUIRE NOW
                     ========================================================================== -->
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Enquire Now - GreenLeaf Shamirpet</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div id="enquiry-success" style="display:none;" class="alert alert-success">Thank you! Our sales team will get back to you shortly.</div>
                                <div id="enquiry-error" style="display:none;" class="alert alert-danger"></div>
                                <form id="enquiryForm">
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Your Name *"
                                            required=""
                                            type="text"
                                            name="name"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Mobile Number *"
                                            required=""
                                            type="tel"
                                            name="phone"
                                            pattern="[0-9]{10}"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Email Address"
                                            type="email"
                                            name="email"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" name="plot_size">
                                            <option value="180 Sq. Yds">180 Sq. Yards</option>
                                            <option value="200 Sq. Yds" selected>200 Sq. Yards</option>
                                            <option value="267 Sq. Yds">267 Sq. Yards</option>
                                            <option value="300 Sq. Yds">300 Sq. Yards</option>
                                            <option value="400 Sq. Yds">400 Sq. Yards</option>
                                            <option value="500+ Sq. Yds">500+ Sq. Yards</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <textarea
                                            name="message"
                                            class="form-control"
                                            placeholder="Your message or preferred visit date..."
                                            rows="3"
                                        ></textarea>
                                    </div>
                                    <button type="submit" class="btn custom_submit w-100" id="enquirySubmitBtn">Submit Enquiry</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==========================================================================
                     MODAL: DOWNLOAD BROCHURE
                     ========================================================================== -->
                <div class="modal fade" id="brochure" tabindex="-1" aria-labelledby="brochureLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="brochureLabel">Download GreenLeaf Brochure</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div id="brochure-success" style="display:none;" class="alert alert-success">Thank you! Your brochure download will start shortly.</div>
                                <div id="brochure-error" style="display:none;" class="alert alert-danger"></div>
                                <form id="brochureForm">
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Your Name *"
                                            required=""
                                            type="text"
                                            name="name"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Mobile Number *"
                                            required=""
                                            type="tel"
                                            name="phone"
                                            pattern="[0-9]{10}"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="form-control"
                                            placeholder="Email Address"
                                            type="email"
                                            name="email"
                                        />
                                    </div>
                                    <button type="submit" class="btn custom_submit w-100" id="brochureSubmitBtn">Download Brochure PDF</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ==========================================================================
             WHATSAPP WIDGET
             ========================================================================== -->
        <div id="whatsapp-widget">
            <div id="whatsapp-popup">
                <div class="popup-header">
                    <button class="close-btn" id="close-popup">×</button>
                    <img src="/assests/image/paanchajanya-logo-new.png" alt="Paanchajanya Realty" class="brand-logo">
                    <div class="header-content">
                        <div class="title">Paanchajanya Realty</div>
                        <div class="status">Online now</div>
                    </div>
                </div>
                <div class="popup-body">
                    <div class="message">
                        👋 Hi! Looking for villa plots in GreenLeaf Shamirpet (64 Acres HMDA)?
                        Our team is available on WhatsApp to share layout plans and pricing.
                    </div>
                </div>
                <div class="popup-footer">
                    <a href="https://wa.me/917237997999?text=Hi,%20I%20am%20interested%20in%20GreenLeaf%20Villa%20Plots%20at%20Shamirpet." target="_blank" class="chat-btn">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
            <div id="whatsapp-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            </div>
        </div>

        <script src="/assests/js/whatsapp-widget.js"></script>

        <!-- ==========================================================================
             SCRIPTS & FORM SUBMISSION (Same Handlers as RJ Retreat)
             ========================================================================== -->
        <script>
            // Switch Master Plan Image
            function switchPlanImage(type) {
                const img = document.getElementById('planDisplayImg');
                const btns = document.querySelectorAll('#plans .btn-brown, #plans .btn-outline-secondary');
                btns.forEach(b => {
                    b.classList.remove('btn-brown');
                    b.classList.add('btn-outline-secondary');
                });
                event.target.classList.remove('btn-outline-secondary');
                event.target.classList.add('btn-brown');

                if (type === 'master') {
                    img.src = '/assests/projects/greenleaf/greenleaf-layout-plan.jpg';
                } else if (type === 'clubhouse') {
                    img.src = '/assests/projects/greenleaf/greenleaf-clubhouse.jpg';
                } else if (type === 'parks') {
                    img.src = '/assests/projects/greenleaf/greenleaf-park.jpg';
                } else if (type === 'aerial') {
                    img.src = '/assests/projects/greenleaf/greenleaf-aerial.jpg';
                }
            }

            // Lead Form Submission
            function submitGreenleafForm(formId, successId, errorId, btnId) {
                var form = document.getElementById(formId);
                if (!form) return;
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var btn = document.getElementById(btnId);
                    var successDiv = document.getElementById(successId);
                    var errorDiv = document.getElementById(errorId);
                    var originalText = btn.textContent;
                    btn.disabled = true;
                    btn.textContent = 'Submitting...';
                    if (successDiv) successDiv.style.display = 'none';
                    if (errorDiv) errorDiv.style.display = 'none';

                    var formData = new FormData(form);
                    var data = {
                        name: formData.get('name'),
                        phone: formData.get('phone'),
                        email: formData.get('email') || '',
                        plot_size: formData.get('plot_size') || '',
                        message: formData.get('message') || '',
                        project: 'GreenLeaf Shamirpet (64 Acres HMDA)'
                    };

                    fetch('/admin/api/contact', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                        body: JSON.stringify(data)
                    })
                    .then(function() {
                        btn.disabled = false;
                        btn.textContent = originalText;
                        if (successDiv) successDiv.style.display = 'block';
                        form.reset();
                        window.location.href = '/projects/greenleaf/thank-you/';
                    })
                    .catch(function() {
                        btn.disabled = false;
                        btn.textContent = originalText;
                        window.location.href = '/projects/greenleaf/thank-you/';
                    });
                }, true);
            }

            submitGreenleafForm('contactForm', 'contact-success', 'contact-error', 'contactSubmitBtn');
            submitGreenleafForm('enquiryForm', 'enquiry-success', 'enquiry-error', 'enquirySubmitBtn');
            submitGreenleafForm('brochureForm', 'brochure-success', 'brochure-error', 'brochureSubmitBtn');
        </script>

        <!-- Bootstrap 5 JS Bundle & AOS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            // Initialize AOS animations
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 900,
                    offset: 80,
                    once: true,
                    easing: 'ease-out-cubic'
                });
            }

            // Smooth Parallax for Hero
            window.addEventListener('scroll', function() {
                var scrolled = window.pageYOffset || document.documentElement.scrollTop;
                var heroBgImg = document.querySelector('.hero-bg-img');
                if (heroBgImg && scrolled < 900) {
                    heroBgImg.style.transform = 'scale(1.02) translate3d(0, ' + (scrolled * 0.2) + 'px, 0)';
                }
            }, { passive: true });
        </script>

    </body>
</html>
