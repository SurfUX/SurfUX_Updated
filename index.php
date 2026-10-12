<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'SurfUX | Custom Software, Care Management & Web Development Company';
$page_description = 'SurfUX builds custom software, care management systems, websites and digital solutions for businesses, elder homes, child-care organizations, residential care facilities, charities and NGOs. Explore CareSphere and book a demo.';
$page_keywords = 'custom software development, software development company, care management software, elder home management software, elder care software, child care management software, residential care management software, charity management software, NGO management software, web development company, digital solutions, CareSphere, SurfUX';

include __DIR__ . '/includes/header.php';
?>

<!-- =========================================================
     HOMEPAGE SEO / STRUCTURED DATA
========================================================= -->
<link rel="canonical" href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '/')) ?>">

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Organization',
            '@id' => 'https://surfux.com/#organization',
            'name' => 'SurfUX',
            'url' => 'https://surfux.com/',
            'description' => 'Technology and digital growth company building custom software, care management platforms, websites and digital solutions.',
            'brand' => [
                '@type' => 'Brand',
                'name' => 'SurfUX'
            ]
        ],
        [
            '@type' => 'WebSite',
            '@id' => 'https://surfux.com/#website',
            'url' => 'https://surfux.com/',
            'name' => 'SurfUX',
            'description' => $page_description,
            'publisher' => [
                '@id' => 'https://surfux.com/#organization'
            ]
        ],
        [
            '@type' => 'SoftwareApplication',
            'name' => 'CareSphere',
            'applicationCategory' => 'BusinessApplication',
            'applicationSubCategory' => 'Care Management Software',
            'operatingSystem' => 'Web',
            'description' => 'Integrated care management platform with specialized solutions for elder care, child care, residential care, charities and NGOs.',
            'creator' => [
                '@id' => 'https://surfux.com/#organization'
            ],
            'url' => 'https://surfux.com/pages/caresphere'
        ],
        [
            '@type' => 'ItemList',
            'name' => 'CareSphere Solutions',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'CareSphere Elder',
                    'url' => 'https://surfux.com/pages/caresphere#caresphere-elder-details'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'CareSphere Child',
                    'url' => 'https://surfux.com/pages/caresphere#caresphere-child-details'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => 'CareSphere Residential',
                    'url' => 'https://surfux.com/pages/caresphere#caresphere-residential-details'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 4,
                    'name' => 'CareSphere Charity',
                    'url' => 'https://surfux.com/pages/caresphere#caresphere-charity-details'
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>


<main>

<!-- =========================================================
     HERO
========================================================= -->
<section class="hero">

    <div class="container hero-grid">

        <!-- HERO CONTENT -->
        <div class="hero-copy reveal">

            <span class="eyebrow">
                CUSTOM SOFTWAREeeee • CARE TECHNOLOGY • WEB • DIGITAL GROWTH
            </span>

            <h1>
                Custom software and digital solutions
                <span>built for real organizations.</span>
            </h1>

            <p>
                SurfUX is a technology and digital growth company providing custom
                software development, care management systems, web development
                and social media marketing for organizations that want to build,
                modernize and grow their digital operations.
            </p>

            <div class="hero-actions">

                <a class="btn btn-primary"
                   href="<?= BASE_URL ?>/pages/portfolio">
                    Explore our solutions
                    <span>→</span>
                </a>

                <a class="btn btn-ghos"
                   href="<?= BASE_URL ?>/pages/contact">
                    Start a project
                </a>

            </div>

            <div class="hero-proof">

                <div>
                    <strong>04</strong>
                    <span>Core capabilities</span>
                </div>

                <div>
                    <strong>01</strong>
                    <span>Care technology platform</span>
                </div>

                <div>
                    <strong>∞</strong>
                    <span>Ideas to build</span>
                </div>

            </div>

        </div>


        <!-- HERO VISUAL -->
        <div class="hero-visual hero-image-visual reveal">

            <div class="hero-image-wrapper">

                <img
                    src="./assets/img/portfolio/hero.jpg"
                    alt="Modern technology workspace with laptop"
                    class="hero-main-image"
                >

                <div class="hero-image-overlay"></div>


                <!-- Floating card 01 -->
                <div class="hero-floating-card hero-card-top">

                    <span class="floating-icon">→</span>

                    <div>
                        <strong>Technology</strong>
                        <small>Built with purpose</small>
                    </div>

                </div>


                <!-- Floating card 02 -->
                <div class="hero-floating-card hero-card-bottom">

                    <div class="floating-status">
                        <span></span>
                        Building
                    </div>

                    <strong>Think. Build. Grow.</strong>

                </div>


                <!-- Brand accent -->
                <div class="hero-brand-mark">

                    <span>S</span>
                    <span>U</span>
                    <span>R</span>
                    <span>F</span>
                    <span>U</span>
                    <span>X</span>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     TRUST STRIP
========================================================= -->
<section class="trust-strip">

    <div class="container trust-inner">

        <span>THINK</span>
        <i></i>

        <span>DESIGN</span>
        <i></i>

        <span>BUILD</span>
        <i></i>

        <span>GROW</span>
        <i></i>

        <span>EVOLVE</span>

    </div>

</section>


<!-- =========================================================
     WHO WE ARE
========================================================= -->
<section class="section section-light">

    <div class="container who-grid">

        <div class="who-visual reveal">

            <div class="experience-card">

                <span class="experience-label">
                    SURFUX
                </span>

                <div class="experience-number">
                    <span>Technology</span>
                    <strong>+</strong>
                    <span>Human</span>
                </div>

                <p>
                    Technology built around people,
                    organizations and real-world goals.
                </p>

            </div>

        </div>


        <div class="who-copy reveal">

            <span class="eyebrow">
                WHO WE ARE
            </span>

            <h2>
                We build technology
                <em>around real needs.</em>
            </h2>

            <p>
                SurfUX is a technology and digital growth company that builds
                custom software, care management systems, websites and
                practical digital solutions for organizations that want to
                modernize their operations and grow.
            </p>

            <p>
                Our capabilities span care technology, software
                development, web development and social media marketing,
                allowing organizations to work with one technology
                partner across different parts of their digital journey.
            </p>

            <p>
                From custom business systems and modern websites to specialized
                care platforms such as CareSphere, we focus on technology
                that is useful, secure, clear and built around the people
                who use it.
            </p>

            <a class="text-link"
               href="<?= BASE_URL ?>/pages/about">
                More about SurfUX →
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     WHAT WE DO
========================================================= -->
<section class="section section-light">

    <div class="container">

        <div class="section-head">

            <div>

                <span class="eyebrow">
                    WHAT WE DO
                </span>

                <h2>
                    Four capabilities.
                    <em>One technology partner.</em>
                </h2>

            </div>

            <p>
                We combine technology, creativity and strategy
                to create digital solutions that support the way
                modern organizations operate and grow.
            </p>

        </div>


        <div class="service-grid">


            <!-- CARE TECHNOLOGY -->
            <a class="service-card reveal"
               href="<?= BASE_URL ?>/pages/services#care-technology">

                <span class="service-number">
                    01
                </span>

                <span class="service-icon">
                    +
                </span>

                <h3>
                    Care Technology
                </h3>

                <p>
                    Purpose-built technology for elder care,
                    child care, residential care and charitable
                    organizations.
                </p>

                <span class="text-link">
                    Explore service →
                </span>

            </a>


            <!-- SOFTWARE DEVELOPMENT -->
            <a class="service-card reveal"
               href="<?= BASE_URL ?>/pages/services#software">

                <span class="service-number">
                    02
                </span>

                <span class="service-icon">
                    ⌘
                </span>

                <h3>
                    Software Development
                </h3>

                <p>
                    Custom software, business platforms, dashboards
                    and digital systems designed around your workflows
                    and requirements.
                </p>

                <span class="text-link">
                    Explore service →
                </span>

            </a>


            <!-- WEB DEVELOPMENT -->
            <a class="service-card reveal"
               href="<?= BASE_URL ?>/pages/services#web">

                <span class="service-number">
                    03
                </span>

                <span class="service-icon">
                    ◫
                </span>

                <h3>
                    Web Development
                </h3>

                <p>
                    Modern websites and web applications combining
                    strong visual design, responsive experiences,
                    performance and clear business goals.
                </p>

                <span class="text-link">
                    Explore service →
                </span>

            </a>


            <!-- SOCIAL MEDIA -->
            <a class="service-card reveal"
               href="<?= BASE_URL ?>/pages/services#social">

                <span class="service-number">
                    04
                </span>

                <span class="service-icon">
                    ◎
                </span>

                <h3>
                    Social Media Marketing
                </h3>

                <p>
                    Strategic content, creative campaigns and ongoing
                    social media management designed to make brands
                    more visible and memorable.
                </p>

                <span class="text-link">
                    Explore service →
                </span>

            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     CARESPHERE FEATURE
========================================================= -->
<section class="section dark-section">

    <div class="container split-feature">

        <div class="feature-art reveal">

            <div class="data-card">

                <span class="eyebrow">
                    CARESPHERE
                </span>

                <div class="data-row">
                    <span>Elder</span>
                    <b>01</b>
                </div>

                <div class="data-row">
                    <span>Child</span>
                    <b>02</b>
                </div>

                <div class="data-row">
                    <span>Residential</span>
                    <b>03</b>
                </div>

                <div class="data-row">
                    <span>Charity</span>
                    <b>04</b>
                </div>

            </div>

        </div>


        <div class="feature-copy reveal">

            <span class="eyebrow">
                OUR SOFTWARE PRODUCT
            </span>

            <h2>
                Introducing
                <em>CareSphere.</em>
            </h2>

            <p>
                CareSphere is an integrated care management software platform
                developed by SurfUX for organizations that need to manage
                care, people, operations, resources and reporting through
                specialized digital solutions.
            </p>

            <p>
                The CareSphere ecosystem includes CareSphere Elder for elder homes
                and senior care centres, CareSphere Child for children's homes
                and child-care organizations, CareSphere Residential for
                residential care facilities, and CareSphere Charity for
                charities and NGOs.
            </p>

            <div class="check-list">

                <div>
                    <b>01</b>
                    <span>CareSphere Elder</span>
                </div>

                <div>
                    <b>02</b>
                    <span>CareSphere Child</span>
                </div>

                <div>
                    <b>03</b>
                    <span>CareSphere Residential</span>
                </div>

                <div>
                    <b>04</b>
                    <span>CareSphere Charity</span>
                </div>

                <div>
                    <b>05</b>
                    <span>Built by SurfUX</span>
                </div>

            </div>

            <div class="hero-actions">
                <a class="btn btn-primary"
                   href="<?= BASE_URL ?>/pages/caresphere">
                    Explore CareSphere →
                </a>

                <a class="btn btn-outline"
                   href="<?= BASE_URL ?>/pages/contact?subject=CareSphere%20Demo">
                    Book a Demo →
                </a>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     WHY SURFUX
========================================================= -->
<section class="section section-light">

    <div class="container split-feature">

        <div class="feature-copy reveal">

            <span class="eyebrow">
                WHY SURFUX
            </span>

            <h2>
                Technology should create
                <em>real value.</em>
            </h2>

            <p>
                We don't believe technology should exist simply
                because it can. Every website, system, platform
                and campaign should have a clear purpose.
            </p>

            <div class="check-list">

                <div>
                    <b>01</b>
                    <span>Business-first thinking</span>
                </div>

                <div>
                    <b>02</b>
                    <span>Modern technology & clean execution</span>
                </div>

                <div>
                    <b>03</b>
                    <span>Design focused on people</span>
                </div>

                <div>
                    <b>04</b>
                    <span>Clear communication</span>
                </div>

                <div>
                    <b>05</b>
                    <span>Long-term technology partnership</span>
                </div>

            </div>

        </div>


        <div class="feature-art reveal">

            <div class="data-card">

                <span class="eyebrow">
                    THE SURFUX METHOD
                </span>

                <div class="data-row">
                    <span>Understand</span>
                    <b>01</b>
                </div>

                <div class="data-row">
                    <span>Design</span>
                    <b>02</b>
                </div>

                <div class="data-row">
                    <span>Build</span>
                    <b>03</b>
                </div>

                <div class="data-row">
                    <span>Grow</span>
                    <b>04</b>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SELECTED CLIENT WORK
========================================================= -->
<section class="section portfolio-preview">

    <div class="container">

        <?php

        $home_portfolio = require __DIR__ . '/data/portfolio.php';

        $home_featured = array_slice($home_portfolio, 0, 6);

        ?>

        <div class="section-head">

            <div>

                <span class="eyebrow">
                    SELECTED CLIENT WORK
                </span>

                <h2>
                    Real projects.<br>
                    <em>Real digital experiences.</em>
                </h2>

            </div>

            <a class="btn btn-outline"
               href="<?= BASE_URL ?>/pages/portfolio">

                View all <?= count($home_portfolio) ?> projects →

            </a>

        </div>


        <div class="portfolio-grid client-home-portfolio">

            <?php foreach ($home_featured as $project): ?>

                <a class="project-card client-home-project reveal"
                   href="<?= BASE_URL ?>/pages/portfolio-details?id=<?= urlencode($project['id']) ?>">

                    <div class="project-image client-home-project-image">

                        <img
                            src="<?= BASE_URL ?>/assets/<?= htmlspecialchars($project['image']) ?>"
                            alt="<?= htmlspecialchars($project['alt'] ?: $project['title']) ?>"
                            loading="lazy"
                        >

                        <span class="home-project-overlay">
                            View case study →
                        </span>

                    </div>


                    <div class="project-meta">

                        <span>
                            <?= htmlspecialchars($project['year']) ?>
                            ·
                            <?= htmlspecialchars($project['type']) ?>
                        </span>

                        <h3>
                            <?= htmlspecialchars($project['title']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($project['description'][0] ?? '') ?>
                        </p>


                        <div class="home-project-tags">

                            <?php foreach (array_slice($project['tags'], 0, 3) as $tag): ?>

                                <small>
                                    <?= htmlspecialchars($tag) ?>
                                </small>

                            <?php endforeach; ?>

                        </div>


                        <span class="arrow">
                            →
                        </span>

                    </div>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     HOW WE WORK
========================================================= -->
<section class="section section-light process-section">

    <div class="container">

        <div class="section-head">

            <div>

                <span class="eyebrow">
                    HOW WE WORK
                </span>

                <h2>
                    From first conversation
                    <em>to real results.</em>
                </h2>

            </div>

            <p>
                A clear process keeps projects focused,
                transparent and moving in the right direction.
            </p>

        </div>


        <div class="home-process">

            <div class="process-step reveal">

                <span>01</span>

                <h3>
                    Discover
                </h3>

                <p>
                    We understand your organization, audience,
                    challenges and objectives before defining
                    the right digital direction.
                </p>

            </div>


            <div class="process-step reveal">

                <span>02</span>

                <h3>
                    Plan
                </h3>

                <p>
                    We translate ideas into a clear structure,
                    roadmap, technology approach and project priorities.
                </p>

            </div>


            <div class="process-step reveal">

                <span>03</span>

                <h3>
                    Design
                </h3>

                <p>
                    We create thoughtful interfaces and experiences
                    that balance brand, usability and business objectives.
                </p>

            </div>


            <div class="process-step reveal">

                <span>04</span>

                <h3>
                    Develop
                </h3>

                <p>
                    Our team turns the approved direction into
                    a reliable, responsive and scalable digital product.
                </p>

            </div>


            <div class="process-step reveal">

                <span>05</span>

                <h3>
                    Launch
                </h3>

                <p>
                    We test, refine and prepare the project
                    for a smooth launch across the required platforms.
                </p>

            </div>


            <div class="process-step reveal">

                <span>06</span>

                <h3>
                    Grow
                </h3>

                <p>
                    After launch, we continue improving, maintaining
                    and supporting your digital presence as your
                    organization evolves.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     EXPERTISE
========================================================= -->
<section class="section tech-section">

    <div class="container">

        <div class="tech-intro reveal">

            <span class="eyebrow">
                OUR EXPERTISE
            </span>

            <h2>
                The tools change.
                <em>The thinking doesn't.</em>
            </h2>

            <p>
                We choose technology based on the project—not
                the other way around. Our approach keeps solutions
                practical, maintainable and ready to evolve.
            </p>

        </div>


        <div class="tech-cloud reveal">

            <span>PHP</span>
            <span>MySQL</span>
            <span>JavaScript</span>
            <span>HTML5</span>
            <span>CSS3</span>
            <span>REST APIs</span>
            <span>Responsive Design</span>
            <span>UI / UX</span>
            <span>Business Systems</span>
            <span>Care Technology</span>
            <span>Care Management</span>
            <span>Social Strategy</span>
            <span>Content Creation</span>
            <span>Digital Marketing</span>

        </div>

    </div>

</section>


<!-- =========================================================
     STATS
========================================================= -->
<section class="section stats-section">

    <div class="container">

        <div class="stats-grid">

            <div class="stat reveal">

                <strong>04</strong>

                <span>
                    Core technology & digital capabilities
                </span>

            </div>


            <div class="stat reveal">

                <strong>01</strong>

                <span>
                    Integrated care technology ecosystem
                </span>

            </div>


            <div class="stat reveal">

                <strong>∞</strong>

                <span>
                    Possibilities for your next idea
                </span>

            </div>


            <div class="stat reveal">

                <strong>360°</strong>

                <span>
                    Thinking from technology to growth
                </span>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SOCIAL MEDIA
========================================================= -->
<section class="section social-showcase">

    <div class="container">

        <div class="section-head">

            <div>

                <span class="eyebrow">
                    SOCIAL MEDIA
                </span>

                <h2>
                    Brands deserve a social presence
                    <em>worth remembering.</em>
                </h2>

            </div>

            <p>
                We help businesses build consistent, creative
                and purposeful social media experiences across
                the platforms where their audiences spend time.
            </p>

        </div>


        <div class="social-grid">

            <div class="social-card social-one reveal">

                <span>
                    CONTENT
                </span>

                <strong>
                    Stories that<br>
                    feel like your brand.
                </strong>

            </div>


            <div class="social-card social-two reveal">

                <span>
                    STRATEGY
                </span>

                <strong>
                    Consistency<br>
                    creates recognition.
                </strong>

            </div>


            <div class="social-card social-three reveal">

                <span>
                    GROWTH
                </span>

                <strong>
                    Creative ideas<br>
                    with purpose.
                </strong>

            </div>


            <div class="social-card social-four reveal">

                <span>
                    COMMUNITY
                </span>

                <strong>
                    Build relationships,<br>
                    not just reach.
                </strong>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     BUILT FOR REAL ORGANIZATIONS
========================================================= -->
<section class="section dark-section">

    <div class="container">

        <div class="section-head">

            <div>

                <span class="eyebrow">
                    BUILT FOR REAL ORGANIZATIONS
                </span>

                <h2>
                    Technology should work
                    <em>in the real world.</em>
                </h2>

            </div>

            <p>
                Our work is shaped around the way organizations
                actually operate, communicate and grow.
            </p>

        </div>


        <div class="process-grid">

            <div class="reveal">

                <b>01</b>

                <h3>
                    Business Systems
                </h3>

                <p>
                    Digital systems that organize workflows,
                    information and everyday business operations.
                </p>

            </div>


            <div class="reveal">

                <b>02</b>

                <h3>
                    Care Organizations
                </h3>

                <p>
                    Specialized technology for organizations
                    working with seniors, children and communities.
                </p>

            </div>


            <div class="reveal">

                <b>03</b>

                <h3>
                    Digital Experiences
                </h3>

                <p>
                    Websites and web experiences that help
                    organizations communicate their value clearly.
                </p>

            </div>


            <div class="reveal">

                <b>04</b>

                <h3>
                    Digital Growth
                </h3>

                <p>
                    Social media and creative digital strategies
                    designed to build visibility and recognition.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FAQ
========================================================= -->
<section class="section section-light faq-section">

    <div class="container faq-grid">


        <div class="faq-intro reveal">

            <span class="eyebrow">
                FAQ
            </span>

            <h2>
                Questions before we
                <em>get started?</em>
            </h2>

            <p>
                Here are a few things organizations commonly
                ask us before beginning a digital project.
            </p>

            <a class="btn btn-outline"
               href="<?= BASE_URL ?>/pages/contact">
                Ask us directly →
            </a>

        </div>


        <div class="faq-list">


            <details class="faq-item reveal" open>

                <summary>
                    What services does SurfUX provide?
                    <span>+</span>
                </summary>

                <p>
                    SurfUX focuses on four core areas:
                    care technology, software development,
                    web development and social media marketing.
                    We can provide individual services or combine
                    them into a broader digital solution.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    What is CareSphere care management software?
                    <span>+</span>
                </summary>

                <p>
                    CareSphere is an integrated care management software platform
                    developed by SurfUX. It includes specialized solutions
                    for elder homes and senior care centres, children's homes
                    and child-care organizations, residential care facilities,
                    charities and NGOs.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    Can SurfUX build custom software for our organization?
                    <span>+</span>
                </summary>

                <p>
                    Yes. SurfUX can design and develop custom business software,
                    management systems, dashboards, workflow solutions,
                    database-driven applications and integrations based
                    on your organization's requirements.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    Do you work with existing websites and systems?
                    <span>+</span>
                </summary>

                <p>
                    Yes. A project does not always need to start
                    from zero. We can improve, redesign, extend
                    or maintain an existing website or digital system.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    Can SurfUX manage our social media?
                    <span>+</span>
                </summary>

                <p>
                    Yes. Our social media service can include
                    strategy, content planning, creative direction,
                    post creation, publishing, community management
                    and performance reporting.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    How does a project normally begin?
                    <span>+</span>
                </summary>

                <p>
                    We begin with a conversation about your
                    organization and objectives. From there,
                    we identify the requirements, recommend
                    an approach and create a clear project
                    direction before development begins.
                </p>

            </details>


            <details class="faq-item reveal">

                <summary>
                    Do you provide ongoing support?
                    <span>+</span>
                </summary>

                <p>
                    Yes. Depending on the project, we can provide
                    ongoing maintenance, improvements, technical
                    support and digital growth services after launch.
                </p>

            </details>


        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->
<section class="section section-light">

    <div class="container">

        <div class="cta-panel reveal">

            <span class="eyebrow">
                READY TO BUILD SOMETHING?
            </span>

            <h2>
                Let's turn your next idea
                into a <em>digital solution.</em>
            </h2>

            <p>
                Tell us what you are building, improving or growing.
                We'll help you choose the right technology, software or
                digital solution for your organization.
            </p>

            <div class="hero-actions cta-actions">

                <a class="btn btn-primary"
                   href="<?= BASE_URL ?>/pages/contact?subject=Book%20a%20Demo">
                    Book a Demo →
                </a>

                <a class="btn btn-outline"
                   href="<?= BASE_URL ?>/pages/portfolio">
                    See our work
                </a>

            </div>

        </div>

    </div>

</section>


</main>

<?php include __DIR__ . '/includes/footer.php'; ?>