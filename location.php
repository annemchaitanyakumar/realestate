<?php include 'includes/header.php'; ?>

<!-- Custom Styles for Dedicated Location Page -->
<style>
    :root {
        --loc-gold: #c9a45c;
        --loc-gold-dark: #b08e4a;
        --loc-dark: #0a0d11;
        --loc-ivory: #FFFFF0;
        --loc-bg: #fbfaf7;
        --loc-text: #1a1a1a;
        --loc-text-muted: #666666;
        --loc-border: rgba(0, 0, 0, 0.08);
    }

    .location-page-wrapper {
        background-color: var(--loc-bg);
        color: var(--loc-text);
        overflow-x: hidden;
    }

    /* Page Banner */
    .loc-banner {
        background-image: url('assests/image/banner11.jpeg');
        background-size: cover;
        background-position: center;
        padding: 200px 0 120px;
        position: relative;
        text-align: center;
        color: #FFFFF0;
    }
    .loc-banner::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(180deg, rgba(10, 13, 17, 0.75) 0%, rgba(10, 13, 17, 0.88) 100%);
    }
    .loc-banner .container { 
        position: relative; 
        z-index: 2; 
    }
    .loc-banner-tag {
        display: inline-block;
        padding: 6px 18px;
        border: 1px solid var(--loc-gold);
        border-radius: 50px;
        color: var(--loc-gold);
        font-size: 0.82rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 18px;
        background: rgba(201, 164, 92, 0.12);
    }
    .loc-banner h1 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        margin-bottom: 20px;
        color: #FFFFF0;
        font-family: 'Cinzel', serif;
    }
    .loc-banner p {
        max-width: 760px;
        margin: 0 auto;
        font-size: 1.15rem;
        color: #cbd2dc;
        line-height: 1.7;
    }

    .loc-section-padding {
        padding: 100px 0;
    }

    .loc-section-title-wrap {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px;
    }
    .loc-section-tag {
        font-size: 0.8rem;
        font-weight: 800;
        color: var(--loc-gold);
        text-transform: uppercase;
        letter-spacing: 0.18em;
        display: block;
        margin-bottom: 10px;
    }
    .loc-section-title {
        font-family: 'Cinzel', serif;
        font-size: clamp(2rem, 3.5vw, 2.75rem);
        color: var(--loc-dark);
        margin-bottom: 15px;
    }
    .loc-section-title span {
        color: var(--loc-gold);
    }
    .loc-section-desc {
        color: var(--loc-text-muted);
        font-size: 1.05rem;
        line-height: 1.7;
    }

    /* Core Metrics Grid */
    .loc-metrics-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin-bottom: 80px;
    }
    .loc-metric-card {
        background: #FFFFF0;
        border: 1px solid var(--loc-border);
        border-radius: 16px;
        padding: 40px 25px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .loc-metric-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0,0,0,0.08);
        border-color: rgba(201, 164, 92, 0.4);
    }
    .loc-metric-num {
        font-family: 'Cinzel', serif;
        font-size: 3.5rem;
        font-weight: 700;
        color: var(--loc-dark);
        line-height: 1;
        margin-bottom: 10px;
    }
    .loc-metric-num span {
        font-size: 1.2rem;
        color: var(--loc-gold);
        margin-left: 4px;
        font-weight: 600;
    }
    .loc-metric-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--loc-dark);
        margin-bottom: 10px;
    }
    .loc-metric-desc {
        font-size: 0.92rem;
        color: var(--loc-text-muted);
        line-height: 1.6;
    }

    /* Corridor Deep Dive */
    .loc-corridor-box {
        background: #FFFFF0;
        border-radius: 20px;
        border: 1px solid var(--loc-border);
        box-shadow: 0 15px 40px rgba(0,0,0,0.05);
        overflow: hidden;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: 1fr 1.15fr;
    }
    .loc-corridor-img-wrap {
        position: relative;
        overflow: hidden;
        min-height: 380px;
    }
    .loc-corridor-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .loc-corridor-box:hover .loc-corridor-img {
        transform: scale(1.04);
    }
    .loc-corridor-badge {
        position: absolute;
        top: 24px;
        left: 24px;
        background: rgba(10, 13, 17, 0.85);
        backdrop-filter: blur(8px);
        color: var(--loc-gold);
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        border: 1px solid rgba(201, 164, 92, 0.35);
    }
    .loc-corridor-content {
        padding: 50px 45px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .loc-corridor-title {
        font-family: 'Cinzel', serif;
        font-size: 1.85rem;
        color: var(--loc-dark);
        margin-bottom: 15px;
    }
    .loc-corridor-summary {
        font-size: 1rem;
        color: var(--loc-text-muted);
        line-height: 1.7;
        margin-bottom: 25px;
    }
    .loc-landmarks-list {
        list-style: none;
        padding: 0;
        margin: 0 0 30px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px 20px;
    }
    .loc-landmarks-list li {
        font-size: 0.95rem;
        color: var(--loc-text);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .loc-landmarks-list li i {
        color: var(--loc-gold);
        font-size: 0.85rem;
    }

    /* Direction / CTA Box */
    .loc-cta-card {
        background: linear-gradient(135deg, #0a0d11 0%, #161c24 100%);
        border-radius: 20px;
        padding: 60px 40px;
        text-align: center;
        color: #FFFFF0;
        margin-top: 60px;
        position: relative;
        overflow: hidden;
    }
    .loc-cta-card::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(201, 164, 92, 0.12) 0%, transparent 60%);
        pointer-events: none;
    }
    .loc-cta-card h3 {
        font-family: 'Cinzel', serif;
        font-size: 2.25rem;
        color: #FFFFF0;
        margin-bottom: 15px;
    }
    .loc-cta-card p {
        font-size: 1.1rem;
        color: #cbd2dc;
        max-width: 680px;
        margin: 0 auto 30px;
        line-height: 1.7;
    }
    .loc-cta-btns {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .loc-btn-gold {
        background: var(--loc-gold);
        color: #FFFFF0;
        padding: 16px 36px;
        border-radius: 6px;
        font-weight: 700;
        text-decoration: none;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        font-size: 0.92rem;
        transition: 0.3s;
    }
    .loc-btn-gold:hover {
        background: var(--loc-gold-dark);
        color: #FFFFF0;
        transform: translateY(-2px);
    }
    .loc-btn-outline {
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #FFFFF0;
        padding: 16px 36px;
        border-radius: 6px;
        font-weight: 700;
        text-decoration: none;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        font-size: 0.92rem;
        transition: 0.3s;
    }
    .loc-btn-outline:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #FFFFF0;
    }

    @media (max-width: 991px) {
        .loc-metrics-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .loc-corridor-box {
            grid-template-columns: 1fr;
        }
        .loc-corridor-img-wrap {
            min-height: 280px;
        }
        .loc-landmarks-list {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .loc-metrics-grid {
            grid-template-columns: 1fr;
        }
        .loc-corridor-content {
            padding: 30px 20px;
        }
    }
</style>

<div class="location-page-wrapper">

    <!-- Hero Banner -->
    <section class="loc-banner">
        <div class="container">
            <span class="loc-banner-tag">Strategic Growth Zones</span>
            <h1>Prime Highway Connectivity &amp; Locations</h1>
            <p>Every Paanchajanya Realty venture is hand-picked for exceptional accessibility to Hyderabad's Outer Ring Road (ORR), Regional Ring Road (RRR), and high-growth industrial and tech corridors.</p>
        </div>
    </section>

    <!-- Key Highway Metrics -->
    <section class="loc-section-padding">
        <div class="container">
            
            <div class="loc-section-title-wrap">
                <span class="loc-section-tag">Travel Time Advantage</span>
                <h2 class="loc-section-title">Strategic Highway <span>Access</span></h2>
                <p class="loc-section-desc">Smooth, signal-free expressway drives connect our plotted ventures directly to Hyderabad's premier commercial centers and future mega-hubs.</p>
            </div>

            <div class="loc-metrics-grid">
                <div class="loc-metric-card">
                    <div class="loc-metric-num">05<span>Min</span></div>
                    <div class="loc-metric-title">AI Fourth City &amp; Maha Pyramid</div>
                    <div class="loc-metric-sub loc-metric-desc">Minutes from the Telangana Government's flagship 10,000+ acre futuristic AI Fourth City and Maha Pyramid landmark in Kadthal.</div>
                </div>

                <div class="loc-metric-card">
                    <div class="loc-metric-num">10<span>Min</span></div>
                    <div class="loc-metric-title">Outer Ring Road &amp; RRR</div>
                    <div class="loc-metric-sub loc-metric-desc">Seamless interchange access to ORR Exit 7 at Shamirpet and the upcoming Regional Ring Road (RRR) economic corridor.</div>
                </div>

                <div class="loc-metric-card">
                    <div class="loc-metric-num">15<span>Min</span></div>
                    <div class="loc-metric-title">RGIA International Airport</div>
                    <div class="loc-metric-sub loc-metric-desc">Direct 4-lane expressway drive to Rajiv Gandhi International Airport (Shamshabad) with zero congested intersections.</div>
                </div>

                <div class="loc-metric-card">
                    <div class="loc-metric-num">25<span>Min</span></div>
                    <div class="loc-metric-title">Financial District &amp; Hitec City</div>
                    <div class="loc-metric-sub loc-metric-desc">Expressway commute to Gachibowli, top multinational tech campuses, international schools, and tertiary hospitals.</div>
                </div>
            </div>

            <!-- Corridor 1: Shamirpet -->
            <div class="loc-corridor-box">
                <div class="loc-corridor-img-wrap">
                    <img src="assests/image/generated/ventures/venture-greenleaf-entrance.jpg" alt="GreenLeaf & RJ Retreat Shamirpet" class="loc-corridor-img">
                    <div class="loc-corridor-badge">North Corridor • Shamirpet</div>
                </div>
                <div class="loc-corridor-content">
                    <h3 class="loc-corridor-title">GreenLeaf &amp; RJ Retreat (Shamirpet)</h3>
                    <p class="loc-corridor-summary">Located near ORR Exit 7, the Shamirpet corridor is Hyderabad's renowned biotech and luxury resort destination, offering serene natural landscapes combined with world-class four-lane highway connectivity.</p>
                    <ul class="loc-landmarks-list">
                        <li><i class="fas fa-check-circle"></i> ORR Exit 7 Junction (Direct access)</li>
                        <li><i class="fas fa-check-circle"></i> Genome Valley Biotech Hub</li>
                        <li><i class="fas fa-check-circle"></i> BITS Pilani Hyderabad Campus</li>
                        <li><i class="fas fa-check-circle"></i> Leonia Holistic &amp; Celebrity Resorts</li>
                        <li><i class="fas fa-check-circle"></i> 20 Mins to Secunderabad / Jubliee Hills</li>
                        <li><i class="fas fa-check-circle"></i> Rajiv Rahadari (Karimnagar 4-lane Highway)</li>
                    </ul>
                    <div>
                        <a href="projects/greenleaf/" class="loc-btn-gold" style="font-size:0.82rem; padding:12px 24px;">Explore GreenLeaf &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Corridor 2: Srisailam Highway / Kadthal -->
            <div class="loc-corridor-box">
                <div class="loc-corridor-img-wrap">
                    <img src="assests/image/generated/ventures/venture-premium-county-entrance.jpg" alt="Premium County Kadthal" class="loc-corridor-img">
                    <div class="loc-corridor-badge">South Corridor • Kadthal, Srisailam Highway</div>
                </div>
                <div class="loc-corridor-content">
                    <h3 class="loc-corridor-title">Premium County (Kadthal)</h3>
                    <p class="loc-corridor-summary">Positioned along the vibrant Srisailam Highway, this corridor is the epicenter of South Hyderabad's exponential growth, directly adjacent to the upcoming Telangana AI Fourth City and Pharma City development.</p>
                    <ul class="loc-landmarks-list">
                        <li><i class="fas fa-check-circle"></i> AI Fourth City Innovation Zone (10,000+ Ac)</li>
                        <li><i class="fas fa-check-circle"></i> Maha Pyramid Spiritual Landmark</li>
                        <li><i class="fas fa-check-circle"></i> RGIA International Airport (15 Mins)</li>
                        <li><i class="fas fa-check-circle"></i> Regional Ring Road (RRR) Junction</li>
                        <li><i class="fas fa-check-circle"></i> Hyderabad Pharma City Hub</li>
                        <li><i class="fas fa-check-circle"></i> Direct ORR Exit 14 Expressway Link</li>
                    </ul>
                    <div>
                        <a href="index.php#ventures" class="loc-btn-gold" style="font-size:0.82rem; padding:12px 24px;">View Venture Details &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Free Site Visit CTA Card -->
            <div class="loc-cta-card">
                <span class="loc-banner-tag" style="margin-bottom:12px;">Experience It In Person</span>
                <h3>Book a Free Weekend Site Visit</h3>
                <p>We provide complimentary, private AC vehicle pickup and drop for you and your family directly from Hyderabad to our venture sites. Check the road widths, verified DTCP/HMDA layouts, and surrounding infrastructure firsthand.</p>
                <div class="loc-cta-btns">
                    <a href="tel:+919059050059" class="loc-btn-gold"><i class="fas fa-phone-alt"></i> Call +91 90590 50059</a>
                    <a href="https://wa.me/919059050059?text=Hello%2C%20I%20would%20like%20to%20book%20a%20free%20site%20visit%20to%20Paanchajanya%20ventures." target="_blank" class="loc-btn-outline"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
                    <a href="contactus.php" class="loc-btn-outline">Send An Inquiry</a>
                </div>
            </div>

        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>

