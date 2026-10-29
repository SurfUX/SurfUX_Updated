<?php
require_once __DIR__.'/../includes/config.php';

$page_title = 'News & Insights | SurfUX';

$news = [

    /*
    |--------------------------------------------------------------------------
    | 01. FOUNDATION OF GOODNESS — SOFTWARE REQUIREMENTS DISCOVERY
    |--------------------------------------------------------------------------
    */
    [
        'id' => 'surfux-foundation-of-goodness-visit',

        'title' => 'SurfUX Visits Foundation of Goodness to Explore a Tailored Software Solution',

        'category' => 'SOFTWARE REQUIREMENTS & DIGITAL TRANSFORMATION',

        'date' => 'October 2026',

        'image' => BASE_URL . '/assets/img/portfolio/foundationofgoodness.webp',

        'text' => 'SurfUX visited the Foundation of Goodness main centre in Rathgama, toured its centres, gathered initial requirements for a potential new software product and met founder Mr. Kushil Gunasekera.',

        'seo_title' => 'SurfUX Visits Foundation of Goodness | Software Requirements & Digital Transformation',

        'seo_description' => 'SurfUX visited the Foundation of Goodness main centre in Rathgama, toured its centres, gathered initial software requirements and met founder Mr. Kushil Gunasekera.',

        'keywords' => 'SurfUX, Foundation of Goodness, Foundation of Goodness Rathgama, Kushil Gunasekera, software requirements gathering Sri Lanka, custom software development Sri Lanka, digital transformation, software discovery, organizational management software'
    ],

    /*
    |--------------------------------------------------------------------------
    | 02. CANDLEAID LANKA
    |--------------------------------------------------------------------------
    */
    [
        'id' => 'candleaid-lanka-digital-management-system',

        'title' => 'CandleAid Lanka Digital Transformation: Capt. Elmo Jayawardena & Dil Jayawardena',

        'category' => 'DIGITAL TRANSFORMATION',

        'date' => 'September 2026',

        'image' => BASE_URL . '/assets/img/portfolio/candleaid.webp',

        'text' => 'SurfUX developed a customized digital management system for CandleAid Lanka, founded by Capt. Elmo Jayawardena and Dil Jayawardena, helping transform large-scale Excel-based and manual processes into a more structured and centralized software environment.',

        'seo_title' => 'CandleAid Lanka Software | Elmo Jayawardena & Dil Jayawardena | SurfUX',

        'seo_description' => 'Discover how SurfUX developed a custom digital management system for CandleAid Lanka, founded by Capt. Elmo Jayawardena and Dil Jayawardena, to organize Excel-based and manual processes.',

        'keywords' => 'CandleAid Lanka, Capt. Elmo Jayawardena, Elmo Jayawardena, Dil Jayawardena, CandleAid Lanka founders, CandleAid Lanka digital management system, custom management software Sri Lanka, digital management system, Excel to software solution, custom software development Sri Lanka'
    ],

    /*
    |--------------------------------------------------------------------------
    | 03. CARESPHERE RESIDENT — GURUGE ELDERS CARE
    |--------------------------------------------------------------------------
    */
    [
        'id' => 'guruge-elders-care-caresphere-resident',

        'title' => 'Supporting Better Elder Care Management: CareSphere Resident for Guruge Elders Care',

        'category' => 'ELDER CARE TECHNOLOGY',

        'date' => 'October 2026',

        'image' => BASE_URL . '/assets/img/portfolio/guruge.webp',

        'text' => 'SurfUX delivered CareSphere Resident to Guruge Elders Care in Panadura, bringing purpose-built digital support to resident information management and the everyday administration of an elder-care organization.',

        'seo_title' => 'CareSphere Resident for Guruge Elders Care | SurfUX',

        'seo_description' => 'Discover how SurfUX delivered CareSphere Resident to Guruge Elders Care in Panadura, supporting more organized resident information management and elder-care administration.',

        'keywords' => 'Guruge Elders Care, Guruge Elder Home Panadura, CareSphere Resident, elder care management software Sri Lanka, elder home management system, resident management software, elder care digital transformation, SurfUX, care management platform'
    ],

    /*
    |--------------------------------------------------------------------------
    | 04. ALOKA ELDER HOME
    |--------------------------------------------------------------------------
    */
    [
        'id' => 'aloka-elder-home-management-system',

        'title' => 'Transforming Elder Home Management: The Aloka Elder Home Digital Journey',

        'category' => 'ELDER CARE TECHNOLOGY',

        'date' => 'September 2026',

        'image' => BASE_URL . '/assets/img/portfolio/aloka-elder.webp',

        'text' => 'SurfUX developed a custom Elder Home Management System for Aloka Elder Home, transforming manual administrative processes into a centralized digital workflow for more organized and efficient elder care management.',

        'seo_title' => 'Aloka Elder Home Management System | SurfUX',

        'seo_description' => 'SurfUX developed a custom Elder Home Management System for Aloka Elder Home, transforming manual processes into a centralized digital workflow.',

        'keywords' => 'elder home management software, elder home management system, elder care management software, elder home software Sri Lanka, elder care management system'
    ],

    /*
    |--------------------------------------------------------------------------
    | 05. CARESPHERE — PRODUCT LAUNCH
    |--------------------------------------------------------------------------
    */
    [
        'id' => 'caresphere-integrated-care-management-platform',

        'title' => 'SurfUX Launches CareSphere: An Integrated Care Management Platform',

        'category' => 'PRODUCT LAUNCH',

        'date' => 'September 2026',

        'image' => BASE_URL . '/assets/img/portfolio/carehero.webp',

        'text' => 'SurfUX introduces CareSphere, an integrated care management platform designed for elder care, child care, residential care and charity organizations, bringing people, operations, records and workflows into one connected digital environment.',

        'seo_title' => 'CareSphere | Integrated Care Management Platform | SurfUX',

        'seo_description' => 'Discover CareSphere by SurfUX, an integrated care management platform for elder care, child care, residential care and charity organizations.',

        'keywords' => 'care management software, care management platform, elder care management software, elder home management system, child care management software, residential care management software, charity management software, digital care management'
    ],

];

include __DIR__.'/../includes/header.php';
?>

<main>

<section class="page-hero news-hero">

    <div class="container">

        <span class="eyebrow">
            NEWS & INSIGHTS
        </span>

        <h1>
            Ideas for the
            <em>digital road ahead.</em>
        </h1>

        <p>
            Discover what we're building at SurfUX — from innovative software
            products and care technology to digital solutions created for
            real-world organizations.
        </p>

    </div>

</section>


<section class="section section-light">

    <div class="container news-grid">

        <?php foreach($news as $i => $n): ?>

            <article class="news-card reveal">

                <a
                    class="news-art"
                    href="<?= BASE_URL ?>/pages/news-details?id=<?= urlencode($n['id']) ?>"
                    aria-label="Read <?= htmlspecialchars($n['title']) ?>"
                >

                    <img
                        src="<?= htmlspecialchars($n['image']) ?>"
                        alt="<?= htmlspecialchars($n['title']) ?> - SurfUX"
                        loading="<?= $i === 0 ? 'eager' : 'lazy' ?>"
                    >

                    <span class="news-number">
                        <?= sprintf('%02d', $i + 1) ?>
                    </span>

                    <span class="news-open">
                        Read story →
                    </span>

                </a>


                <div class="news-content">

                    <div class="news-meta">

                        <span>
                            <?= htmlspecialchars($n['category']) ?>
                        </span>

                        <span>
                            <?= htmlspecialchars($n['date']) ?>
                        </span>

                    </div>


                    <h2>
                        <?= htmlspecialchars($n['title']) ?>
                    </h2>


                    <p>
                        <?= htmlspecialchars($n['text']) ?>
                    </p>


                    <a
                        class="text-link"
                        href="<?= BASE_URL ?>/pages/news-details?id=<?= urlencode($n['id']) ?>"
                    >
                        Read full story →
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>

</main>

<?php include __DIR__.'/../includes/footer.php'; ?>
