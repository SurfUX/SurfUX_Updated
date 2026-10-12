<?php

require_once __DIR__ . '/../includes/config.php';

$portfolio = require __DIR__ . '/../data/portfolio.php';

$page_title = 'Portfolio | SurfUX';
$page_description = 'Explore the SurfUX portfolio of custom software, CareSphere care management systems, websites, digital products, UI/UX experiences and digital solutions built for real organizations.';
$page_keywords = 'SurfUX portfolio, software development portfolio Sri Lanka, custom software projects, CareSphere, care management software, elder home software, child care software, residential care software, charity management software, web development portfolio, UI UX design Sri Lanka, digital solutions Sri Lanka';

$site_scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$site_host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$request_path = strtok($_SERVER['REQUEST_URI'] ?? '/pages/portfolio', '?');
$canonical_url = $site_scheme . '://' . $site_host . $request_path;

$portfolio_schema_items = [];

foreach ($portfolio as $index => $project) {
    $project_url = $site_scheme . '://' . $site_host
        . BASE_URL
        . '/pages/portfolio-details?id='
        . rawurlencode($project['id']);

    $project_image = !empty($project['image'])
        ? $site_scheme . '://' . $site_host . BASE_URL . '/assets/' . ltrim($project['image'], '/')
        : null;

    $project_description = trim($project['description'][0] ?? '');

    $item = [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'url' => $project_url,
        'name' => $project['title']
    ];

    if ($project_description !== '') {
        $item['description'] = $project_description;
    }

    if ($project_image) {
        $item['image'] = $project_image;
    }

    $portfolio_schema_items[] = $item;
}

$portfolio_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    '@id' => $canonical_url . '#portfolio',
    'url' => $canonical_url,
    'name' => $page_title,
    'description' => $page_description,
    'inLanguage' => 'en',
    'isPartOf' => [
        '@type' => 'WebSite',
        'name' => 'SurfUX',
        'url' => $site_scheme . '://' . $site_host . BASE_URL . '/'
    ],
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => $site_scheme . '://' . $site_host . BASE_URL . '/'
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Portfolio',
                'item' => $canonical_url
            ]
        ]
    ],
    'mainEntity' => [
        '@type' => 'ItemList',
        'name' => 'SurfUX Selected Projects',
        'numberOfItems' => count($portfolio_schema_items),
        'itemListElement' => $portfolio_schema_items
    ]
];

include __DIR__ . '/../includes/header.php';


/*
|--------------------------------------------------------------------------
| Portfolio Filters
|--------------------------------------------------------------------------
*/

$filters = [
    'All',
    'Software'
];

foreach ($portfolio as $p) {

    foreach ($p['tags'] as $tag) {

        if (preg_match('/education|japan/i', $tag)) {
            $g = 'Education';
        }

        elseif (preg_match('/travel|tourism|holiday|china|philippines/i', $tag)) {
            $g = 'Travel';
        }

        /*
        |--------------------------------------------------------------------------
        | Software
        |--------------------------------------------------------------------------
        | Software category includes the CareSphere product suite and selected software projects.
        |--------------------------------------------------------------------------
        */

        elseif (
            in_array(
                $p['id'],
                [
                    'caresphere-elder',
                    'caresphere-child',
                    'caresphere-residential',
                    'caresphere-charity',
                    'candleaid-lanka',
                    'aloka-elder-s-home-admin-dashboard',
                    'maniq-ceylon-admin-dashboard',
                    'maniq-ceylon-e-catalogue-platform'
                ],
                true
            )
        ) {
            $g = 'Software';
        }

        elseif (preg_match('/ui\/ux|design/i', $tag)) {
            $g = 'UI/UX';
        }

        elseif (preg_match('/spa|wellness|ayurveda|hospitality|hotel/i', $tag)) {
            $g = 'Hospitality & Wellness';
        }

        elseif (preg_match('/export|cinnamon|agricultural|corporate/i', $tag)) {
            $g = 'Business';
        }

        elseif (preg_match('/ngo|non-profit|social impact/i', $tag)) {
            $g = 'Social Impact';
        }

        else {
            continue;
        }

        if (!in_array($g, $filters, true)) {
            $filters[] = $g;
        }
    }
}

?>


<main class="portfolio-page">

    <!-- =========================================================
         PORTFOLIO SEO METADATA
    ========================================================== -->

    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:site_name" content="SurfUX">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">

    <script type="application/ld+json"><?= json_encode(
        $portfolio_schema,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
    ) ?></script>


    <!-- =========================================================
         PORTFOLIO HERO
    ========================================================== -->

    <section class="page-hero portfolio-hero">

        <div class="container">

            <span class="eyebrow">
                SELECTED WORK
            </span>

            <h1>
                Digital products, websites & experiences
                <em>built by SurfUX.</em>
            </h1>

            <p>
                Explore selected SurfUX projects across custom software,
                CareSphere care management systems, websites, digital products,
                UI/UX design and digital experiences built for real organizations.
            </p>

        </div>

    </section>


    <!-- =========================================================
         PORTFOLIO PROJECTS
    ========================================================== -->

    <section class="section section-light">

        <div class="container">


            <!-- Portfolio Filters -->

            <div class="portfolio-filters">

                <?php foreach ($filters as $i => $filter): ?>

                    <button
                        type="button"
                        class="portfolio-filter <?= $i === 0 ? 'active' : '' ?>"
                        data-filter="<?= htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') ?>"
                        aria-label="Filter portfolio by <?= htmlspecialchars($filter, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <?= htmlspecialchars($filter) ?>
                    </button>

                <?php endforeach; ?>

            </div>


            <!-- Portfolio Grid -->

            <div class="client-portfolio-grid">

                <?php foreach ($portfolio as $p): ?>


                    <?php

                    /*
                    |--------------------------------------------------------------------------
                    | Determine Project Groups
                    |--------------------------------------------------------------------------
                    */

                    $groups = ['All'];


                    foreach ($p['tags'] as $tag) {

                        /*
                        |--------------------------------------------------------------------------
                        | Education
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/education|japan/i', $tag)) {
                            $groups[] = 'Education';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Travel
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/travel|tourism|holiday|china|philippines/i', $tag)) {
                            $groups[] = 'Travel';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Software
                        |--------------------------------------------------------------------------
                        | CareSphere and selected software projects belong to Software.
                        |--------------------------------------------------------------------------
                        */

                        if (
                            in_array(
                                $p['id'],
                                [
                                    'caresphere-elder',
                                    'caresphere-child',
                                    'caresphere-residential',
                                    'caresphere-charity',
                                    'candleaid-lanka',
                                    'aloka-elder-s-home-admin-dashboard',
                                    'maniq-ceylon-admin-dashboard',
                                    'maniq-ceylon-e-catalogue-platform'
                                ],
                                true
                            )
                        ) {
                            $groups[] = 'Software';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | UI/UX
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/ui\/ux|design/i', $tag)) {
                            $groups[] = 'UI/UX';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Hospitality & Wellness
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/spa|wellness|ayurveda|hospitality|hotel/i', $tag)) {
                            $groups[] = 'Hospitality & Wellness';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Business
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/export|cinnamon|agricultural|corporate/i', $tag)) {
                            $groups[] = 'Business';
                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Social Impact
                        |--------------------------------------------------------------------------
                        */

                        if (preg_match('/ngo|non-profit|social impact/i', $tag)) {
                            $groups[] = 'Social Impact';
                        }

                    }


                    $groups = array_unique($groups);

                    ?>


                    <!-- =================================================
                         PROJECT CARD
                    ================================================== -->

                    <article
                        class="client-project-card reveal"
                        data-groups="<?= htmlspecialchars(
                            implode('|', $groups)
                        ) ?>"
                    >


                        <!-- Project Image -->

                        <a
                            href="<?= BASE_URL ?>/pages/portfolio-details?id=<?= urlencode($p['id']) ?>"
                            class="client-project-image"
                        >

                            <img
                                src="<?= BASE_URL ?>/assets/<?= htmlspecialchars($p['image']) ?>"
                                alt="<?= htmlspecialchars(
                                    $p['alt'] ?: $p['title']
                                ) ?>"
                                loading="lazy"
                            >

                            <span class="project-open">
                                View case study →
                            </span>

                        </a>


                        <!-- Project Information -->

                        <div class="client-project-info">


                            <!-- Year / Type -->

                            <div class="project-kicker">
                                <?= htmlspecialchars($p['year']) ?>
                                ·
                                <?= htmlspecialchars($p['type']) ?>
                            </div>


                            <!-- Project Title -->

                            <h2>
                                <?= htmlspecialchars($p['title']) ?>
                            </h2>


                            <!-- Project Tags -->

                            <div class="project-tags">

                                <?php foreach (
                                    array_slice($p['tags'], 0, 4)
                                    as $tag
                                ): ?>

                                    <span>
                                        <?= htmlspecialchars($tag) ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>


                            <!-- Project Description -->

                            <p>
                                <?= htmlspecialchars(
                                    $p['description'][0] ?? ''
                                ) ?>
                            </p>


                            <!-- Project Link -->

                            <a
                                class="text-link"
                                href="<?= BASE_URL ?>/pages/portfolio-details?id=<?= urlencode($p['id']) ?>"
                            >
                                View project →
                            </a>


                        </div>

                    </article>


                <?php endforeach; ?>

            </div>

        </div>

    </section>

</main>


<?php include __DIR__ . '/../includes/footer.php'; ?>