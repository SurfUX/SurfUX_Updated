<?php

require_once __DIR__.'/../includes/config.php';

$page_title = 'Services | Custom Software, Care Technology, Web & Digital Marketing | SurfUX';
$page_description = 'Explore SurfUX services including custom software development, care management software, CareSphere, web development, SEO-ready websites and social media marketing for businesses, care organizations, charities and NGOs.';
$page_keywords = 'software development services, custom software development, care management software, care technology, elder care software, elder home management software, child care software, residential care software, charity management software, NGO software, web development, SEO web development, social media marketing, CareSphere, SurfUX';

include __DIR__.'/../includes/header.php';

?>

<!-- =========================================================
     SERVICES PAGE SEO / STRUCTURED DATA
========================================================= -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://surfux.com/#organization",
            "name": "SurfUX",
            "url": "https://surfux.com/",
            "description": "Technology and digital growth company providing custom software development, care technology, web development and social media marketing."
        },
        {
            "@type": "WebPage",
            "@id": "https://surfux.com/pages/services#webpage",
            "url": "https://surfux.com/pages/services",
            "name": "SurfUX Services | Custom Software, Care Technology, Web & Digital Marketing",
            "description": $page_description,
            "isPartOf": {
                "@id": "https://surfux.com/#website"
            },
            "about": {
                "@id": "https://surfux.com/#organization"
            }
        },
        {
            "@type": "WebSite",
            "@id": "https://surfux.com/#website",
            "url": "https://surfux.com/",
            "name": "SurfUX",
            "publisher": {
                "@id": "https://surfux.com/#organization"
            }
        },
        {
            "@type": "ItemList",
            "name": "SurfUX Services",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Care Technology",
                    "url": "https://surfux.com/pages/services#care-technology"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Custom Software Development",
                    "url": "https://surfux.com/pages/services#software"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Web Development",
                    "url": "https://surfux.com/pages/services#web"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Social Media Marketing",
                    "url": "https://surfux.com/pages/services#social"
                }
            ]
        },
        {
            "@type": "SoftwareApplication",
            "name": "CareSphere",
            "applicationCategory": "BusinessApplication",
            "applicationSubCategory": "Care Management Software",
            "operatingSystem": "Web",
            "description": "Integrated care management platform with specialized solutions for elder care, child care, residential care, charities and NGOs.",
            "creator": {
                "@id": "https://surfux.com/#organization"
            },
            "url": "https://surfux.com/pages/caresphere"
        }
    ]
}
</script>

<main>


    <!-- =====================================================
         SERVICES HERO
    ====================================================== -->

    <section class="page-hero services-hero">

        <div class="container">

            <span class="eyebrow">
                WHAT WE DO
            </span>

            <h1>
                Technology built for
                <em>real-world impact.</em>
            </h1>

            <p>
                We build custom software, care management platforms, websites and
                digital experiences that help organizations operate better,
                connect with people and grow with technology.
            </p>

        </div>

    </section>


    <!-- =====================================================
         CARE TECHNOLOGY — MAIN FOCUS
    ====================================================== -->

    <section
        class="section section-light service-detail service-care"
        id="care-technology"
    >

        <div class="container detail-grid">


            <div>

                <span class="big-index">
                    01
                </span>

                <span class="eyebrow">
                    CARE TECHNOLOGY
                </span>

                <h2>
                    Technology for
                    <em>better care.</em>
                </h2>

            </div>


            <div>

                <p class="lead">
                    We build care management technology specifically for organizations
                    that care for people, support communities and create
                    social impact, including elder homes, child-care
                    organizations, residential care facilities, charities
                    and NGOs.
                </p>

                <p>
                    Our Care Technology approach combines care management software,
                    automation, management systems and digital experiences
                    to help care organizations manage people, information,
                    bookings and daily operations more efficiently.
                </p>


                <div class="service-product-highlight">

                    <span class="service-product-label">
                        OUR FLAGSHIP PRODUCT
                    </span>

                    <h3>
                        CareSphere
                    </h3>

                    <p>
                        An integrated care management software platform with specialized
                        solutions for elder care, child care, residential
                        care, charities and NGO organizations.
                    </p>


                    <div class="service-product-list">

                        <span>
                            CareSphere Elder
                        </span>

                        <span>
                            CareSphere Child
                        </span>

                        <span>
                            CareSphere Residential
                        </span>

                        <span>
                            CareSphere Charity
                        </span>

                    </div>


                    <a
                        class="text-link"
                        href="<?= BASE_URL ?>/pages/caresphere"
                    >
                        Explore CareSphere →
                    </a>

                </div>


                <ul class="feature-list">

                    <li>
                        Care management software and digital systems
                    </li>

                    <li>
                        Resident, child & beneficiary management
                    </li>

                    <li>
                        Alms, meal, booking & operational workflows
                    </li>

                    <li>
                        Staff, user & resource management
                    </li>

                    <li>
                        Donor, donation & charity management
                    </li>

                    <li>
                        Reports, dashboards, notifications & automation
                    </li>

                </ul>

            </div>

        </div>

    </section>


    <!-- =====================================================
         SOFTWARE DEVELOPMENT
    ====================================================== -->

    <section
        class="section section-dark-alt"
        id="software"
    >

        <div class="container detail-grid">


            <div>

                <span class="big-index">
                    02
                </span>

                <span class="eyebrow">
                    SOFTWARE DEVELOPMENT
                </span>

                <h2>
                    Systems built around
                    <em>your workflow.</em>
                </h2>

            </div>


            <div>

                <p class="lead">
                    We design and develop custom software and business management
                    systems for organizations that need more than
                    off-the-shelf tools can provide.
                </p>

                <p>
                    From internal management systems and admin dashboards to complete
                    business platforms, we turn real operational
                    requirements into practical, scalable digital systems.
                </p>


                <ul class="feature-list">

                    <li>
                        Custom business management systems
                    </li>

                    <li>
                        Custom dashboards, admin portals & management software
                    </li>

                    <li>
                        Workflow automation
                    </li>

                    <li>
                        API integrations & third-party integrations
                    </li>

                    <li>
                        Database-driven web applications
                    </li>

                    <li>
                        Maintenance & continuous improvement
                    </li>

                </ul>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WEB DEVELOPMENT
    ====================================================== -->

    <section
        class="section section-light service-detail"
        id="web"
    >

        <div class="container detail-grid">


            <div>

                <span class="big-index">
                    03
                </span>

                <span class="eyebrow">
                    WEB DEVELOPMENT
                </span>

                <h2>
                    Digital experiences
                    <em>people trust.</em>
                </h2>

            </div>


            <div>

                <p class="lead">
                    We create modern, responsive and SEO-ready websites and web
                    applications that support your brand, communicate
                    clearly and connect with your customers.
                </p>

                <p>
                    Our web development capability also supports the wider software
                    ecosystem we build for organizations, from corporate
                    websites and landing pages to database-driven
                    web applications.
                </p>


                <ul class="feature-list">

                    <li>
                        Corporate, business & brand websites
                    </li>

                    <li>
                        Responsive web applications & portals
                    </li>

                    <li>
                        Landing pages & campaign websites
                    </li>

                    <li>
                        CMS & content systems
                    </li>

                    <li>
                        Website performance, technical SEO & SEO foundations
                    </li>

                    <li>
                        Ongoing support & maintenance
                    </li>

                </ul>

            </div>

        </div>

    </section>


    <!-- =====================================================
         SOCIAL MEDIA MARKETING
    ====================================================== -->

    <section
        class="section section-dark-alt"
        id="social"
    >

        <div class="container detail-grid">


            <div>

                <span class="big-index">
                    04
                </span>

                <span class="eyebrow">
                    SOCIAL MEDIA MARKETING
                </span>

                <h2>
                    Build a brand
                    <em>people remember.</em>
                </h2>

            </div>


            <div>

                <p class="lead">
                    We help businesses stay visible and connected through social media
                    strategy, content planning, creative execution and
                    consistent social media management.
                </p>

                <p>
                    Our social media marketing service supports businesses that need
                    an ongoing digital presence across relevant social
                    platforms.
                </p>


                <ul class="feature-list">

                    <li>
                        Social media strategy
                    </li>

                    <li>
                        Content planning & calendars
                    </li>

                    <li>
                        Creative posts & campaigns
                    </li>

                    <li>
                        Instagram, Facebook & social media management
                    </li>

                    <li>
                        Community engagement
                    </li>

                    <li>
                        Performance reporting
                    </li>

                </ul>

            </div>

        </div>

    </section>


    <!-- =====================================================
         HOW WE WORK
    ====================================================== -->

    <section class="section section-light">

        <div class="container">

            <div class="section-head section-head-center">

                <span class="eyebrow">
                    OUR APPROACH
                </span>

                <h2>
                    One technology partner,
                    <em>multiple capabilities.</em>
                </h2>

                <p>
                    Whether you need care management software, custom business software,
                    an SEO-ready website or ongoing digital marketing,
                    our capabilities can work together as one technology
                    and digital partner.
                </p>

            </div>


            <div class="service-approach-grid">


                <article class="service-approach-item">

                    <span>
                        01
                    </span>

                    <h3>
                        Understand
                    </h3>

                    <p>
                        We start by understanding your organization,
                        workflow and the problems you need to solve.
                    </p>

                </article>


                <article class="service-approach-item">

                    <span>
                        02
                    </span>

                    <h3>
                        Design
                    </h3>

                    <p>
                        We turn requirements into clear digital
                        experiences and practical system structures.
                    </p>

                </article>


                <article class="service-approach-item">

                    <span>
                        03
                    </span>

                    <h3>
                        Build
                    </h3>

                    <p>
                        We develop the technology and digital
                        experiences around your real requirements.
                    </p>

                </article>


                <article class="service-approach-item">

                    <span>
                        04
                    </span>

                    <h3>
                        Improve
                    </h3>

                    <p>
                        We continue improving your digital ecosystem
                        as your organization grows.
                    </p>

                </article>


            </div>

        </div>

    </section>


    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="section section-dark caresphere-cta">

        <div class="container">

            <span class="eyebrow">
                LET'S BUILD SOMETHING USEFUL
            </span>

            <h2>
                From an idea to a
                <em>working system.</em>
            </h2>

            <p>
                Tell us about your organization, challenge or idea. We'll help you
                identify the right technology, software, website or digital
                marketing approach for your goals.
            </p>


            <div class="caresphere-cta-actions">

                <a
                    class="btn btn-primary"
                    href="<?= BASE_URL ?>/pages/contact?subject=Book%20a%20Demo"
                >
                    Book a Demo →
                </a>

                <a
                    class="btn btn-ghost"
                    href="<?= BASE_URL ?>/pages/caresphere"
                >
                    Explore CareSphere
                </a>

            </div>

        </div>

    </section>


</main>


<?php include __DIR__.'/../includes/footer.php'; ?>