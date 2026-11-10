<?php 
include 'includes/db.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$article = null;

if ($slug && isset($pdo) && $pdo instanceof PDO) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM news WHERE slug = ? AND is_published = 1 LIMIT 1");
        $stmt->execute([$slug]);
        $article = $stmt->fetch();
    } catch (\Throwable $e) {
        $article = null;
    }
}

if (!$article && $slug) {
    $fallbacks = [
        'hyderabad-growth-corridors-shamirpet-srisailam' => [
            'title' => 'Why Hyderabad’s Growth Corridors (Shamirpet & Srisailam) Offer Highest ROI',
            'slug' => 'hyderabad-growth-corridors-shamirpet-srisailam',
            'excerpt' => 'With the Telangana Government expanding the AI Fourth City in Mucherla and Genome Valley in Shamirpet, strategic open plots along the Outer Ring Road offer unparalleled multi-fold ROI.',
            'content' => '<p>Hyderabad is experiencing unprecedented expansion towards its northern and southern growth corridors. The Shamirpet corridor (ORR Exit 7) and Srisailam Highway (Kadthal) have emerged as the premier destinations for open plots and villa communities.</p><p>Key growth drivers include proximity to the Outer Ring Road, the upcoming Regional Ring Road (RRR), Pharma City, and the landmark 10,000+ acre AI Fourth City announced by the Telangana Government.</p>',
            'image' => 'assests/image/generated/ventures/venture-greenleaf-entrance.jpg',
            'category' => 'Market Trends',
            'author' => 'Paanchajanya Advisory',
            'published_at' => '2026-10-15',
        ],
        'dtcp-vs-hmda-approvals-guide' => [
            'title' => 'DTCP vs HMDA Approvals: A Complete Guide for Plotted Land Buyers in Telangana',
            'slug' => 'dtcp-vs-hmda-approvals-guide',
            'excerpt' => 'Understanding layout permissions, 100% clear legal titles, RERA registrations, and spot registration procedures before investing in open plots around Hyderabad.',
            'content' => '<p>When purchasing plotted land in Telangana, ensuring proper regulatory approvals is the most critical step to protect your hard-earned investment. DTCP (Directorate of Town and Country Planning) and HMDA (Hyderabad Metropolitan Development Authority) set the benchmark for sanctioned layouts.</p><p>Paanchajanya Realty guarantees 100% legally verified titles, sanctioned master plan roads, underground drainage, and spot registration on all ventures.</p>',
            'image' => 'assests/image/generated/ventures/venture-premium-county-entrance.jpg',
            'category' => 'Investment Guide',
            'author' => 'Legal & Advisory Desk',
            'published_at' => '2026-10-08',
        ],
        'telangana-ai-fourth-city-impact-real-estate' => [
            'title' => 'Telangana AI Fourth City: Impact on Srisailam Highway & Kadthal Real Estate',
            'slug' => 'telangana-ai-fourth-city-impact-real-estate',
            'excerpt' => 'An in-depth analysis of the upcoming 10,000+ acre AI Fourth City and how it is revolutionizing land values and infrastructural demand across Srisailam Highway.',
            'content' => '<p>The Telangana Government’s mega blueprint for the AI Fourth City at Mucherla is transforming the southern quadrant of Hyderabad. Spanning over 10,000 acres, this hub is set to house global AI innovation centers, semiconductor ecosystems, and high-density residential corridors.</p><p>Ventures located along Srisailam Highway such as Premium County in Kadthal stand to gain exponential capital appreciation over the next 3 to 5 years.</p>',
            'image' => 'assests/image/generated/ventures/venture-rj-retreat-entrance.jpg',
            'category' => 'Infrastructure',
            'author' => 'Paanchajanya Research',
            'published_at' => '2026-09-28',
        ],
    ];
    if (isset($fallbacks[$slug])) {
        $article = $fallbacks[$slug];
    }
}

if (!$article) {
    header("Location: blog.php");
    exit;
}

$image_path = $article['image'];
if (strpos($image_path, 'news/') === 0) {
    $image_path = 'admin/storage/' . $image_path;
}

include 'includes/header.php'; 

$date = date('F d, Y', strtotime($article['published_at']));
?>

<style>
    .news-detail-banner {
        background-image: url('<?php echo htmlspecialchars($image_path); ?>');
        background-size: cover;
        background-position: center;
        padding: 200px 0 100px;
        position: relative;
        text-align: center;
        color: #fff;
    }
    .news-detail-banner::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }
    .news-detail-banner .container { position: relative; z-index: 2; }
    .news-detail-banner h1 { font-size: 2rem; font-weight: 700; margin-bottom: 20px; color: aliceblue;}
    .news-meta {
        font-size: 1.1rem;
        font-weight: 500;
        display: flex;
        justify-content: center;
        gap: 30px;
    }
    .content-section { padding: 80px 0; }
    .news-article-content {
        max-width: 900px;
        margin: 0 auto;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
    }
    .news-article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        margin: 30px 0;
    }
    .category-badge {
        background: #c9a45c;
        color: #fff;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 0.9rem;
        text-transform: uppercase;
        margin-bottom: 15px;
        display: inline-block;
    }
    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #c9a45c;
        text-decoration: none;
        font-weight: 700;
        margin-bottom: 40px;
    }
    .back-btn:hover { color: #b08e4a; }
</style>

<div class="news-detail-wrapper">
    <section class="news-detail-banner">
        <div class="container">
            <div class="category-badge"><?php echo htmlspecialchars($article['category']); ?></div>
            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            <div class="news-meta">
                <span><i class="far fa-calendar-alt"></i> <?php echo $date; ?></span>
                <span><i class="far fa-user"></i> <?php echo htmlspecialchars($article['author']); ?></span>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="news-article-content">
                <a href="blog" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Blog</a>
                
                <div class="article-body">
                    <?php echo $article['content']; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
