<?php include 'includes/header.php'; ?>

<!-- Custom Styles for About Us & Management Page -->
<style>
    :root {
        --lp-gold: #c9a45c;
        --lp-gold-light: #dfc285;
        --lp-dark: #121820;
        --lp-dark-card: #1a222d;
        --lp-light-bg: #fcfbf7;
        --lp-text: #2d3748;
        --lp-text-muted: #718096;
        --lp-border: rgba(201, 164, 92, 0.2);
    }

    .about-page-wrapper {
        color: var(--lp-text);
        font-family: inherit;
        overflow-x: hidden;
    }

    /* Page Banner / Hero */
    .about-page-banner {
        background: linear-gradient(135deg, rgba(18, 24, 32, 0.88), rgba(18, 24, 32, 0.78)), 
                    url('assests/image/banner2.jpg') center/cover no-repeat;
        padding: 160px 0 100px;
        position: relative;
        text-align: center;
        color: #ffffff;
    }
    .about-page-banner::after {
        content: "";
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 40px;
        background: linear-gradient(to top, var(--lp-light-bg), transparent);
    }
    .about-page-banner .container { position: relative; z-index: 2; }
    .about-banner-badge {
        display: inline-block;
        padding: 6px 18px;
        border: 1px solid var(--lp-gold);
        border-radius: 50px;
        color: var(--lp-gold);
        font-size: 0.8rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 16px;
        background: rgba(201, 164, 92, 0.1);
    }
    .about-page-banner h1 {
        font-size: 3.2rem;
        font-weight: 700;
        margin: 0 0 16px;
        color: #ffffff;
        letter-spacing: -0.5px;
    }
    .about-page-banner h1 span {
        color: var(--lp-gold);
    }
    .about-page-banner p {
        font-size: 1.15rem;
        color: #e2e8f0;
        max-width: 680px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* Section Global Styles */
    .about-section {
        padding: 85px 0;
    }
    .about-section-light {
        background-color: var(--lp-light-bg);
    }
    .about-section-white {
        background-color: #ffffff;
    }
    .about-section-tag {
        display: inline-block;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--lp-gold);
        margin-bottom: 12px;
    }
    .about-section-title {
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--lp-dark);
        margin-bottom: 24px;
        position: relative;
        line-height: 1.25;
    }
    .about-section-title::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background: var(--lp-gold);
        margin-top: 14px;
    }
    .text-center .about-section-title::after {
        margin: 14px auto 0;
    }
    .about-lead-text {
        font-size: 1.12rem;
        line-height: 1.8;
        color: #4a5568;
        margin-bottom: 18px;
    }

    /* Story Section */
    .story-img-container {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .story-img-container:hover {
        transform: translateY(-6px);
        box-shadow: 0 28px 55px rgba(0, 0, 0, 0.15);
    }
    .story-img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 16px;
    }
    .story-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(18, 24, 32, 0.9);
        backdrop-filter: blur(8px);
        border: 1px solid var(--lp-gold);
        color: #ffffff;
        padding: 12px 20px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .story-badge-num {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--lp-gold);
        line-height: 1;
    }
    .story-badge-label {
        font-size: 0.82rem;
        line-height: 1.3;
        font-weight: 500;
        color: #e2e8f0;
    }

    /* Stats Grid */
    .about-stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }
    .about-stat-card {
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: 14px;
        padding: 32px 24px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }
    .about-stat-card::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: transparent;
        transition: background 0.35s ease;
    }
    .about-stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(201, 164, 92, 0.15);
        border-color: rgba(201, 164, 92, 0.4);
    }
    .about-stat-card:hover::before {
        background: var(--lp-gold);
    }
    .about-stat-num {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--lp-gold);
        margin-bottom: 8px;
        line-height: 1;
    }
    .about-stat-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--lp-dark);
        margin-bottom: 4px;
    }
    .about-stat-sub {
        font-size: 0.88rem;
        color: var(--lp-text-muted);
        line-height: 1.4;
    }

    /* Feature / Core Values Box */
    .about-feature-box {
        padding: 40px 30px;
        background: #ffffff;
        border-radius: 14px;
        box-shadow: 0 8px 26px rgba(0, 0, 0, 0.05);
        text-align: center;
        height: 100%;
        border-bottom: 4px solid transparent;
        border-top: 1px solid rgba(0,0,0,0.04);
        border-left: 1px solid rgba(0,0,0,0.04);
        border-right: 1px solid rgba(0,0,0,0.04);
        transition: all 0.35s ease;
    }
    .about-feature-box:hover {
        border-bottom-color: var(--lp-gold);
        transform: translateY(-6px);
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.09);
    }
    .about-feature-icon {
        width: 60px;
        height: 60px;
        line-height: 60px;
        border-radius: 50%;
        background: rgba(201, 164, 92, 0.12);
        color: var(--lp-gold);
        font-size: 1.6rem;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .about-feature-box h3 {
        color: var(--lp-dark);
        font-size: 1.35rem;
        margin-bottom: 14px;
        font-weight: 700;
    }
    .about-feature-box p {
        color: #4a5568;
        font-size: 0.98rem;
        line-height: 1.65;
        margin: 0;
    }

    /* =========================================================================
       LEADERSHIP & MANAGEMENT / FOUNDER PROFILE SECTION
       ========================================================================= */
    .about-management-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(201, 164, 92, 0.25);
        padding: 48px;
        position: relative;
        overflow: hidden;
    }
    .about-management-card::after {
        content: "";
        position: absolute;
        top: 0; right: 0;
        width: 220px; height: 220px;
        background: radial-gradient(circle, rgba(201, 164, 92, 0.08) 0%, transparent 70%);
        pointer-events: none;
    }
    .founder-image-wrapper {
        position: relative;
        text-align: center;
    }
    .founder-img-frame {
        position: relative;
        display: inline-block;
        border-radius: 18px;
        padding: 8px;
        background: linear-gradient(145deg, #f0e6d2, #ffffff);
        box-shadow: 0 14px 35px rgba(0, 0, 0, 0.1);
    }
    .founder-img {
        border-radius: 14px;
        width: 100%;
        max-width: 360px;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .founder-badge-role {
        display: inline-block;
        margin-top: 14px;
        padding: 6px 16px;
        background: var(--lp-dark);
        color: var(--lp-gold);
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        border: 1px solid rgba(201, 164, 92, 0.4);
    }

    .founder-profile-content h4 {
        font-size: 0.95rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--lp-gold);
        margin-bottom: 8px;
    }
    .founder-profile-content h2 {
        font-size: 2.3rem;
        font-weight: 800;
        color: var(--lp-dark);
        margin-bottom: 22px;
        line-height: 1.2;
    }
    .founder-bio-text p {
        font-size: 1.02rem;
        line-height: 1.8;
        color: #4a5568;
        margin-bottom: 16px;
    }
    .founder-bio-text strong {
        color: var(--lp-dark);
    }

    /* Founder Highlights Pillars */
    .founder-pillars-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 28px;
        padding-top: 24px;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }
    .founder-pillar-item {
        background: var(--lp-light-bg);
        border: 1px solid rgba(201, 164, 92, 0.2);
        border-radius: 12px;
        padding: 16px;
        text-align: left;
    }
    .founder-pillar-icon {
        color: var(--lp-gold);
        font-size: 1.25rem;
        margin-bottom: 6px;
    }
    .founder-pillar-title {
        font-size: 0.92rem;
        font-weight: 700;
        color: var(--lp-dark);
        margin-bottom: 3px;
    }
    .founder-pillar-desc {
        font-size: 0.8rem;
        color: var(--lp-text-muted);
        line-height: 1.35;
        margin: 0;
    }

    /* Call to Action Banner */
    .about-cta-section {
        background: linear-gradient(135deg, var(--lp-dark), #1d2532);
        color: #ffffff;
        padding: 70px 0;
        text-align: center;
        position: relative;
    }
    .about-cta-section h2 {
        color: #ffffff;
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 14px;
    }
    .about-cta-section p {
        color: #cbd5e0;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }
    .about-cta-btn-gold {
        display: inline-block;
        background: var(--lp-gold);
        color: #121820;
        font-weight: 700;
        font-size: 0.95rem;
        padding: 14px 34px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        margin: 6px;
    }
    .about-cta-btn-gold:hover {
        background: var(--lp-gold-light);
        color: #121820;
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(201, 164, 92, 0.3);
    }
    .about-cta-btn-outline {
        display: inline-block;
        background: transparent;
        color: #ffffff;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 14px 34px;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        text-decoration: none;
        transition: all 0.3s ease;
        margin: 6px;
    }
    .about-cta-btn-outline:hover {
        border-color: var(--lp-gold);
        color: var(--lp-gold);
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 991px) {
        .about-stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .founder-pillars-grid {
            grid-template-columns: 1fr;
        }
        .about-management-card {
            padding: 32px 24px;
        }
    }

    @media (max-width: 768px) {
        .about-page-banner {
            padding: 120px 0 70px;
        }
        .about-page-banner h1 {
            font-size: 2.3rem;
        }
        .about-section {
            padding: 60px 0;
        }
        .about-section-title {
            font-size: 1.9rem;
        }
        .story-img-container {
            margin-top: 35px;
        }
        .about-stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="about-page-wrapper">

    <!-- =========================================================================
         1. HERO / BANNER SECTION
         ========================================================================= -->
    <section class="about-page-banner">
        <div class="container">
            <span class="about-banner-badge">Paanchajanya Realty Pvt. Ltd.</span>
            <h1>About Us &amp; <span>Leadership</span></h1>
            <p>
                Delivering trusted, high-growth plotted developments and residential communities across South India with over 25 years of proven excellence.
            </p>
        </div>
    </section>

    <!-- =========================================================================
         2. OUR STORY & COMPANY OVERVIEW
         ========================================================================= -->
    <section class="about-section about-section-white" id="story">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="about-section-tag">Our Legacy &amp; Heritage</span>
                    <h2 class="about-section-title">About Paanchajanya Realty Pvt. Ltd.</h2>

                    <p class="about-lead-text">
                        Founded in 2009 by <strong>Mr. Rajender Reddy</strong>, Paanchajanya Realty Pvt. Ltd.
                        began its journey as <strong>Sahaja Properties</strong> with a clear, enduring vision:
                        to deliver secure, legally approved, and high-appreciation plotted land investments.
                    </p>

                    <p class="about-lead-text">
                        Over the past decade and a half, the company has grown into a premier developer of open plots and residential villa communities across 
                        <strong>Hyderabad, Bengaluru, Shirdi, and Bangkok</strong>. With more than <strong>11 lakh square yards</strong> successfully delivered, Paanchajanya has earned the lasting trust of thousands of families and NRI investors.
                    </p>

                    <p class="about-lead-text">
                        Built upon the core tenets of <strong>quality, transparency, and customer-first pricing</strong>, Paanchajanya Realty develops thoughtfully planned layouts featuring wide BT roads, underground electricity, dependable water infrastructure, and strict 100% Vastu compliance.
                    </p>

                    <p class="about-lead-text">
                        Backed by over <strong>25 years of hands-on real estate expertise</strong>, we continue to shape landmark communities in high-growth corridors—including the Srisailam Highway, Shamirpet, and the upcoming Hyderabad AI Fourth City.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="story-img-container">
                        <img src="assests/image/aboutus.jpg"
                             alt="About Paanchajanya Realty Pvt. Ltd."
                             class="story-img"
                             loading="lazy">
                        <div class="story-badge">
                            <div class="story-badge-num">25+</div>
                            <div class="story-badge-label">
                                <strong>Years of Industry Trust</strong><br>
                                Proven Track Record
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. TRACK RECORD & MILESTONES (STATISTICS)
         ========================================================================= -->
    <section class="about-section about-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="about-stats-grid">
                <div class="about-stat-card">
                    <div class="about-stat-num">25+</div>
                    <div class="about-stat-title">Years Experience</div>
                    <div class="about-stat-sub">Hands-on leadership across Hyderabad &amp; Telangana real estate</div>
                </div>

                <div class="about-stat-card">
                    <div class="about-stat-num">50+</div>
                    <div class="about-stat-title">Delivered Projects</div>
                    <div class="about-stat-sub">Completed residential layouts with 100% clear legal passbooks</div>
                </div>

                <div class="about-stat-card">
                    <div class="about-stat-num">527+</div>
                    <div class="about-stat-title">Acres Developed</div>
                    <div class="about-stat-sub">Planned layouts delivered across prime capital appreciation corridors</div>
                </div>

                <div class="about-stat-card">
                    <div class="about-stat-num">2,750+</div>
                    <div class="about-stat-title">Happy Landowners</div>
                    <div class="about-stat-sub">Families and investors who have multiplied their land wealth with us</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. VISION & COMMITMENT (CORE VALUES)
         ========================================================================= -->
    <section class="about-section about-section-white" id="vision">
        <div class="container">
            <div class="text-center mb-5">
                <span class="about-section-tag">Our Guiding Principles</span>
                <h2 class="about-section-title">Vision &amp; Commitment</h2>
                <p class="mx-auto" style="max-width: 680px; color: #4a5568; font-size: 1.08rem; line-height: 1.7;">
                    To create lasting value by empowering individuals and families through strategically situated, legally sound, and thoughtfully developed open plot communities.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="about-feature-box">
                        <div class="about-feature-icon">🛡️</div>
                        <h3>Quality</h3>
                        <p>To deliver premium plotted developments and infrastructure that exceed expectations and stand the test of time.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-feature-box">
                        <div class="about-feature-icon">⚖️</div>
                        <h3>Integrity</h3>
                        <p>To deliver exactly what we promise—building lifelong trust with every single plot, transparent documentation, and spot registration.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-feature-box">
                        <div class="about-feature-icon">⭐</div>
                        <h3>Excellence</h3>
                        <p>To maintain the highest standards in layout planning, connectivity, customer care, and post-purchase support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. MANAGEMENT & LEADERSHIP / FOUNDER PROFILE
            (Unified on this same page: anchors for #management, #leadership, #founder)
         ========================================================================= -->
    <section class="about-section about-section-light" id="management">
        <!-- Additional Anchor Targets -->
        <span id="leadership" style="display:block; position:relative; top:-90px; visibility:hidden;"></span>
        <span id="founder" style="display:block; position:relative; top:-90px; visibility:hidden;"></span>

        <div class="container">
            <div class="text-center mb-5">
                <span class="about-section-tag">Executive Leadership</span>
                <h2 class="about-section-title">Management &amp; Founder Profile</h2>
                <p class="mx-auto" style="max-width: 650px; color: #4a5568; font-size: 1.05rem;">
                    The vision, hands-on leadership, and customer-first governance that power Paanchajanya Realty.
                </p>
            </div>

            <div class="about-management-card">
                <div class="row align-items-center">

                    <!-- Founder Portrait Column -->
                    <div class="col-lg-5 text-center mb-4 mb-lg-0">
                        <div class="founder-image-wrapper">
                            <div class="founder-img-frame">
                                <img src="assests/image/Rajender.png"
                                     alt="Mr. Rajender Reddy Dasari - Founder & Chairman"
                                     class="founder-img"
                                     loading="lazy">
                            </div>
                            <div>
                                <span class="founder-badge-role">Founder &amp; Chairman</span>
                            </div>
                        </div>
                    </div>

                    <!-- Founder Profile Bio Column -->
                    <div class="col-lg-7">
                        <div class="founder-profile-content">
                            <h4>Leadership Spotlight</h4>
                            <h2>Mr. Rajender Reddy Dasari</h2>

                            <div class="founder-bio-text">
                                <p>
                                    <strong>Mr. Rajender Reddy Dasari</strong> is a visionary entrepreneur whose career reflects leadership, integrity, and a profound commitment to creating sustainable, long-term wealth for land buyers.
                                </p>

                                <p>
                                    He began his professional journey in <strong>journalism</strong>, dedicating six years to both print and electronic media. This journalistic foundation instilled in him an uncompromising respect for facts, ethical transparency, and public accountability. He subsequently transitioned into Hyderabad's vibrant real estate sector, spending nearly a decade heading sales, market development, and client advisory.
                                </p>

                                <p>
                                    Driven by an ambition to transform plotted land acquisitions into a safe, transparent, and rewarding experience, Mr. Dasari founded <strong>Sahaja Properties</strong> in 2009. His dedication to honest documentation, spot registration, and fair pricing laid the solid cornerstone for what is now <strong>Paanchajanya Realty Pvt. Ltd.</strong>
                                </p>

                                <p>
                                    Under his stewardship, Paanchajanya Realty has successfully delivered over <strong>11 lakh square yards</strong> across major Indian and international hubs—including Hyderabad, Bengaluru, Shirdi, and Bangkok. His customer-first ethos continues to inspire our mission of developing communities that enrich lives and appreciate for generations.
                                </p>
                            </div>

                            <!-- Leadership Highlights Pillars -->
                            <div class="founder-pillars-grid">
                                <div class="founder-pillar-item">
                                    <div class="founder-pillar-icon">🏛️</div>
                                    <div class="founder-pillar-title">25+ Years Experience</div>
                                    <p class="founder-pillar-desc">Deep roots and comprehensive insight into Hyderabad land dynamics.</p>
                                </div>
                                <div class="founder-pillar-item">
                                    <div class="founder-pillar-icon">📜</div>
                                    <div class="founder-pillar-title">100% Clear Titles</div>
                                    <p class="founder-pillar-desc">Rigorous legal due diligence, DTCP/HMDA/TS RERA approvals.</p>
                                </div>
                                <div class="founder-pillar-item">
                                    <div class="founder-pillar-icon">🤝</div>
                                    <div class="founder-pillar-title">Customer-First Pricing</div>
                                    <p class="founder-pillar-desc">Direct cost-benefit advantages passed on to every plot buyer.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CALL TO ACTION: CONNECT WITH OUR TEAM
         ========================================================================= -->
    <section class="about-cta-section">
        <div class="container">
            <h2>Experience the Paanchajanya Advantage</h2>
            <p>
                Whether you're looking to build your dream home or make a secure investment in Hyderabad's top growth corridors, our team is ready to guide you.
            </p>
            <div>
                <a href="index.php#ventures" class="about-cta-btn-gold">Explore Ongoing Projects &rarr;</a>
                <a href="contactus.php" class="about-cta-btn-outline">Contact Us</a>
            </div>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>
