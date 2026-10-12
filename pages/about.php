<?php
require_once __DIR__.'/../includes/config.php';
$page_title='About SurfUX | Software, Care Technology & Digital Solutions';
$page_description='Learn about SurfUX, a technology and digital growth company building custom software, care management platforms, websites and digital solutions for businesses, care organizations, charities and NGOs.';
$page_keywords='about SurfUX, software development company, custom software company, care technology company, care management software, web development company, digital solutions company, CareSphere, elder care software, child care software, charity management software';
include __DIR__.'/../includes/header.php';
?>

<!-- =========================================================
     ABOUT PAGE SEO / STRUCTURED DATA
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
            "description": "Technology and digital growth company building custom software, care management platforms, websites and digital solutions."
        },
        {
            "@type": "AboutPage",
            "@id": "https://surfux.com/pages/about#webpage",
            "url": "https://surfux.com/pages/about",
            "name": "About SurfUX | Software, Care Technology & Digital Solutions",
            "description": "Learn about SurfUX and its approach to custom software development, care technology, web development and digital growth.",
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
            "name": "SurfUX Core Capabilities",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Care Technology"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Software Development"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Web Development"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Social Media Marketing"
                }
            ]
        },
        {
            "@type": "SoftwareApplication",
            "name": "CareSphere",
            "applicationCategory": "BusinessApplication",
            "applicationSubCategory": "Care Management Software",
            "operatingSystem": "Web",
            "description": "Integrated care management platform developed by SurfUX with specialized solutions for elder care, child care, residential care, charities and NGOs.",
            "creator": {
                "@id": "https://surfux.com/#organization"
            },
            "url": "https://surfux.com/pages/caresphere"
        }
    ]
}
</script>


<main>

<!-- ABOUT HERO -->
<section class="page-hero about-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-overlay"></div>

    <div class="container page-hero-content">
        <span class="eyebrow">ABOUT SURFUX</span>

        <h1>
            Technology built around
            <em>real-world needs.</em>
        </h1>

        <p>
            SurfUX is a technology and digital growth company building
            custom software, care management systems, modern websites and
            digital solutions for businesses, care organizations, charities
            and NGOs.
        </p>
    </div>
</section>


<!-- WHO WE ARE -->
<section class="section section-light">
    <div class="container two-col">

        <div>
            <span class="eyebrow">WHO WE ARE</span>

            <h2>
                One technology partner.
                <em>Multiple capabilities.</em>
            </h2>
        </div>

        <div class="rich-copy">

            <p>
                SurfUX brings technology, design and digital marketing
                together to help organizations move from ideas to
                practical digital solutions.
            </p>

            <p>
                Our work spans four core areas:
                <strong>Care Technology, Software Development,
                Web Development and Social Media Marketing.</strong>
                Each capability supports a different part of an
                organization's digital journey.
            </p>

            <p>
                From developing a management system and launching a
                business website to building a digital presence and
                creating specialized care technology, we focus on
                solutions that are useful, clear and built around
                the people who use them.
            </p>

        </div>

    </div>
</section>


<!-- FOUR CAPABILITIES -->
<section class="section dark-section">

    <div class="container">

        <div class="section-head">
            <div>
                <span class="eyebrow">WHAT WE DO</span>

                <h2>
                    Four capabilities.
                    <em>One direction.</em>
                </h2>
            </div>
        </div>

        <div class="process-grid">

            <div>
                <b>01</b>
                <h3>Care Technology</h3>
                <p>
                    Purpose-built care management technology for elder homes,
                    child-care organizations, residential care facilities,
                    charities and NGOs.
                </p>
            </div>

            <div>
                <b>02</b>
                <h3>Software Development</h3>
                <p>
                    Custom software, business management systems, dashboards and
                    workflow platforms designed around real operational
                    requirements.
                </p>
            </div>

            <div>
                <b>03</b>
                <h3>Web Development</h3>
                <p>
                    Modern business websites and web applications designed for
                    responsive experiences, clear communication,
                    performance and online growth.
                </p>
            </div>

            <div>
                <b>04</b>
                <h3>Social Media Marketing</h3>
                <p>
                    Social media strategy, creative content and digital campaigns
                    that help businesses build visibility, communicate
                    consistently and grow their online presence.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- CARE TECHNOLOGY / CARESPHERE -->
<section class="section section-light">

    <div class="container two-col">

        <div>
            <span class="eyebrow">OUR TECHNOLOGY VISION</span>

            <h2>
                Building technology
                <em>for better care.</em>
            </h2>
        </div>

        <div class="rich-copy">

            <p>
                One of our key areas of focus is Care Technology: creating digital
                care management systems that help elder homes, child-care
                organizations, residential care facilities, charities and
                NGOs manage people, information and daily operations more
                effectively.
            </p>

            <p>
                This vision led to
                <strong>CareSphere</strong> — an integrated care
                management platform developed by SurfUX.
            </p>

            <p>
                CareSphere brings specialized solutions together
                under one ecosystem, including
                <strong>CareSphere Elder, CareSphere Child,
                CareSphere Residential and CareSphere Charity.</strong>
            </p>

            <p>
                Our goal is to make specialized care management technology more
                practical and accessible for organizations working in
                elder care, child care, residential care, accommodation
                and social impact.
            </p>

            <a class="btn btn-primary"
               href="<?= BASE_URL ?>/pages/caresphere">
                Explore CareSphere →
            </a>

        </div>

    </div>

</section>


<!-- OUR PHILOSOPHY -->
<section class="section dark-section">

    <div class="container">

        <div class="section-head">
            <div>
                <span class="eyebrow">OUR PHILOSOPHY</span>

                <h2>
                    Technology should
                    <em>solve something.</em>
                </h2>
            </div>
        </div>

        <div class="process-grid">

            <div>
                <b>01</b>
                <h3>Useful</h3>
                <p>
                    We focus on technology that solves real problems
                    instead of adding unnecessary complexity.
                </p>
            </div>

            <div>
                <b>02</b>
                <h3>Human</h3>
                <p>
                    We consider the people using the technology,
                    from staff and business owners to customers
                    and communities.
                </p>
            </div>

            <div>
                <b>03</b>
                <h3>Practical</h3>
                <p>
                    We turn ideas and requirements into systems
                    that organizations can actually use in their
                    everyday operations.
                </p>
            </div>

            <div>
                <b>04</b>
                <h3>Scalable</h3>
                <p>
                    We build with growth in mind, allowing digital
                    solutions to evolve as organizations grow.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- HOW WE WORK -->
<section class="section section-light">

    <div class="container">

        <div class="section-head section-head-center">

            <span class="eyebrow">HOW WE WORK</span>

            <h2>
                From idea to
                <em>digital reality.</em>
            </h2>

            <p>
                We combine strategy, design, development and digital
                expertise to create solutions around each organization's
                actual requirements.
            </p>

        </div>

        <div class="service-approach-grid">

            <article class="service-approach-item">
                <span>01</span>

                <h3>Understand</h3>

                <p>
                    We learn about your organization, audience,
                    workflow, challenges and goals.
                </p>
            </article>

            <article class="service-approach-item">
                <span>02</span>

                <h3>Design</h3>

                <p>
                    We shape the structure, experience and digital
                    direction before development begins.
                </p>
            </article>

            <article class="service-approach-item">
                <span>03</span>

                <h3>Build</h3>

                <p>
                    We develop the software, website or digital
                    solution around your requirements.
                </p>
            </article>

            <article class="service-approach-item">
                <span>04</span>

                <h3>Grow</h3>

                <p>
                    We continue improving your digital ecosystem
                    as your organization and needs evolve.
                </p>
            </article>

        </div>

    </div>

</section>


<!-- WHO WE WORK WITH -->
<section class="section section-light">

    <div class="container">

        <div class="section-head section-head-center">

            <span class="eyebrow">WHO WE WORK WITH</span>

            <h2>
                Technology for
                <em>different kinds of organizations.</em>
            </h2>

            <p>
                Our capabilities can be adapted to different industries,
                business models and organizational requirements.
            </p>

        </div>

        <div class="caresphere-platform-grid">

            <article class="caresphere-platform-item">
                <span>01</span>
                <h3>Businesses</h3>
                <p>
                    Digital systems, websites and marketing solutions
                    for growing businesses.
                </p>
            </article>

            <article class="caresphere-platform-item">
                <span>02</span>
                <h3>Care Organizations</h3>
                <p>
                    Technology designed around the operational needs
                    of elder homes, child-care organizations and
                    residential care facilities.
                </p>
            </article>

            <article class="caresphere-platform-item">
                <span>03</span>
                <h3>Social Organizations</h3>
                <p>
                    Digital tools for charities, NGOs and organizations working with
                    communities, beneficiaries and social impact.
                </p>
            </article>

            <article class="caresphere-platform-item">
                <span>04</span>
                <h3>Growing Teams</h3>
                <p>
                    Flexible digital solutions that can evolve
                    alongside an organization's growth.
                </p>
            </article>

        </div>

    </div>

</section>


<!-- FUTURE -->
<section class="section section-light">

    <div class="container">

        <div class="caresphere-overview-box">

            <div>
                <span class="eyebrow">OUR DIRECTION</span>

                <h2>
                    Building a stronger
                    <em>digital future.</em>
                </h2>
            </div>

            <div>

                <p>
                    SurfUX is growing beyond traditional digital services
                    by developing technology products and solutions that
                    address real organizational needs.
                </p>

                <p>
                    Through our software development capabilities and
                    products such as CareSphere, we aim to create digital
                    solutions that can support organizations locally
                    and eventually reach wider markets.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="section section-light">

    <div class="container">

        <div class="cta-panel">

            <span class="eyebrow">WORK WITH SURFUX</span>

            <h2>
                Have an idea worth
                <em>building?</em>
            </h2>

            <p>
                Whether you need custom software, a care management system,
                a business website, digital marketing or a specialized
                technology solution, let's talk about what you want to build.
            </p>

            <a class="btn btn-primary"
               href="<?= BASE_URL ?>/pages/contact">
                Start a conversation →
            </a>

        </div>

    </div>

</section>

</main>

<?php include __DIR__.'/../includes/footer.php'; ?>