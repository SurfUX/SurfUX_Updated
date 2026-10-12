<?php

require_once __DIR__.'/../includes/config.php';

$page_title = 'CareSphere | Care Management Software for Elder Homes, Child Care, Residential Care & Charities | SurfUX';
$page_description = 'CareSphere by SurfUX is an integrated care management software platform for elder homes, child-care organizations, residential care facilities, charities and NGOs. Manage residents, children, beneficiaries, admissions, bookings, rooms, donors, staff, documents, notifications, reports and daily operations in one centralized system.';
$page_keywords = 'care management software, elder home management software, elder care management system, elder home software, child care management software, children home management system, residential care management software, residential care facility software, charity management software, NGO management system, beneficiary management software, donor management system, alms booking system, meal booking management, care facility software, CareSphere, SurfUX';

include __DIR__.'/../includes/header.php';

?>

<main class="caresphere-page">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "name": "CareSphere",
          "applicationCategory": "BusinessApplication",
          "applicationSubCategory": "Care Management Software",
          "operatingSystem": "Web",
          "description": "Integrated care management software by SurfUX for elder homes, child-care organizations, residential care facilities, charities and NGOs.",
          "creator": {
            "@type": "Organization",
            "name": "SurfUX"
          },
          "brand": {
            "@type": "Brand",
            "name": "CareSphere"
          },
          "featureList": [
            "Resident Management",
            "Admission and Intake Management",
            "Alms and Meal Booking Management",
            "Appointments and Calendar",
            "Child and Beneficiary Management",
            "Health and Medical Records",
            "Room and Bed Management",
            "Facility Capacity Management",
            "Donor and Sponsor Management",
            "Donation Management",
            "Staff and User Management",
            "HR and Inventory Management",
            "Document Management",
            "SMS and Email Notifications",
            "Reports and Analytics",
            "User Roles and Permissions",
            "Audit and Security Management"
          ]
        },
        {
          "@type": "ItemList",
          "name": "CareSphere Solutions",
          "itemListElement": [
            {
              "@type": "SoftwareApplication",
              "position": 1,
              "name": "CareSphere Elder",
              "applicationCategory": "Elder Care Management Software",
              "description": "Management software for elder homes and senior care centres covering residents, admissions, alms and meal bookings, appointments, contacts, documents, notifications, staff, reports and security."
            },
            {
              "@type": "SoftwareApplication",
              "position": 2,
              "name": "CareSphere Child",
              "applicationCategory": "Child Care Management Software",
              "description": "Management software for children's homes and child-care organizations covering children and beneficiaries, alms and meal bookings, health records, appointments, documents, notifications, staff, reports and security."
            },
            {
              "@type": "SoftwareApplication",
              "position": 3,
              "name": "CareSphere Residential",
              "applicationCategory": "Residential Care Management Software",
              "description": "Management software for residential care facilities covering residents, admissions, rooms and beds, capacity, caregivers, families, documents, notifications, HR, inventory, reporting and security."
            },
            {
              "@type": "SoftwareApplication",
              "position": 4,
              "name": "CareSphere Charity",
              "applicationCategory": "Charity Management Software",
              "description": "Management software for charities and NGOs covering beneficiaries, registration, sponsors, donors, donations, programs, assistance, education, coordinators, branches, communications, reporting and data management."
            }
          ]
        }
      ]
    }
    </script>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="page-hero caresphere-hero">

        <div class="container">

            <span class="eyebrow">
                A NEW SOFTWARE PRODUCT BY SURFUX
            </span>

            <h1>
                One platform.
                <em>Four care solutions.</em>
            </h1>

            <p>
                CareSphere is an integrated care management software platform
                designed for elder homes, child-care organizations, residential
                care facilities, charities and NGOs. Manage people, care,
                bookings, admissions, rooms, donors, staff, documents,
                notifications, reporting and daily operations through
                specialized solutions built for each organization.
            </p>

            <div class="caresphere-hero-actions">

                <a
                    class="btn btn-primary"
                    href="<?= BASE_URL ?>/pages/contact"
                >
                    Book a Demo →
                </a>

                <a
                    class="btn btn-ghos"
                    href="#solutions"
                >
                    Explore CareSphere
                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         INTRODUCTION
    ====================================================== -->

    <section class="section section-light caresphere-intro">

        <div class="container">

            <div class="caresphere-intro-grid">

                <div class="caresphere-intro-content">

                    <span class="eyebrow">
                        INTRODUCING CARESPHERE
                    </span>

                    <h2>
                        Care management,
                        <em>reimagined.</em>
                    </h2>

                    <p>
                        Different care organizations have different
                        responsibilities, workflows and challenges.
                        CareSphere brings these needs into a single
                        software ecosystem with dedicated solutions
                        for different types of care organizations.
                    </p>

                    <p>
                        From managing residents and admissions to children, beneficiaries,
                        alms and meal bookings, rooms, donors, staff,
                        documents and daily operations, CareSphere is designed
                        to organize the information and processes that matter most
                        in one centralized management system.
                    </p>

                </div>


                <div class="caresphere-intro-card">

                    <span class="caresphere-intro-card-label">
                        CARESPHERE
                    </span>

                    <strong>
                        Integrated Care
                        Management Platform
                    </strong>

                    <span class="caresphere-intro-card-powered">
                        Powered by SurfUX
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CARESPHERE ECOSYSTEM
    ====================================================== -->

    <section
        class="section section-light caresphere-solutions"
        id="solutions"
    >

        <div class="container">

            <div class="section-head">

                <span class="eyebrow">
                    THE CARESPHERE ECOSYSTEM
                </span>

                <h2>
                    One ecosystem.
                    <em>Four specialized solutions.</em>
                </h2>

                <p>
                    CareSphere provides specialized care management software for elder homes,
                    child-care organizations, residential care facilities, charities
                    and NGOs, with each solution focused on the workflows and records
                    that matter to that organization.
                </p>

            </div>


            <div class="caresphere-solutions-grid">


                <!-- =================================================
                     CARESPHERE ELDER
                ================================================== -->

                <article class="caresphere-solution caresphere-elder reveal">

                    <div class="caresphere-solution-image">

                        <img
                            src="<?= BASE_URL ?>/assets/img/portfolio/caresphereelder.webp"
                            alt="CareSphere Elder"
                        >

                        <span class="caresphere-image-overlay">
                            CARESPHERE ELDER
                        </span>

                    </div>


                    <div class="caresphere-solution-top">

                        <span class="caresphere-solution-number">
                            01
                        </span>

                        <span class="caresphere-solution-tag">
                            SENIOR CARE
                        </span>

                    </div>


                    <div class="caresphere-solution-icon">
                        E
                    </div>


                    <h3>
                        CareSphere Elder
                    </h3>


                    <p class="caresphere-solution-intro">
                        A dedicated management solution for elder homes
                        and senior care centres.
                    </p>


                    <div class="caresphere-feature-label">
                        Designed for
                    </div>

                    <p class="caresphere-designed-for">
                        Elder homes & senior care centres
                    </p>


                    <div class="caresphere-feature-label">
                        Manage
                    </div>


                    <ul class="caresphere-feature-list">

                        <li>Resident Management</li>
                        <li>Admissions & Intake</li>
                        <li>Alms / Meal Bookings</li>
                        <li>Appointments & Calendar</li>
                        <li>Family & Emergency Contacts</li>
                        <li>Documents, Notifications & Reports</li>

                    </ul>


                    <a
                        class="caresphere-solution-link"
                        href="#caresphere-elder-details"
                    >
                        Explore Elder →
                    </a>

                </article>


                <!-- =================================================
                     CARESPHERE CHILD
                ================================================== -->

                <article class="caresphere-solution caresphere-child reveal">

                    <div class="caresphere-solution-image">

                        <img
                            src="<?= BASE_URL ?>/assets/img/portfolio/carespherechild.webp"
                            alt="CareSphere Child"
                        >

                        <span class="caresphere-image-overlay">
                            CARESPHERE CHILD
                        </span>

                    </div>


                    <div class="caresphere-solution-top">

                        <span class="caresphere-solution-number">
                            02
                        </span>

                        <span class="caresphere-solution-tag">
                            CHILD CARE
                        </span>

                    </div>


                    <div class="caresphere-solution-icon">
                        C
                    </div>


                    <h3>
                        CareSphere Child
                    </h3>


                    <p class="caresphere-solution-intro">
                        A dedicated management solution for children's
                        homes and child-care organizations.
                    </p>


                    <div class="caresphere-feature-label">
                        Designed for
                    </div>

                    <p class="caresphere-designed-for">
                        Children's homes & child-care organizations
                    </p>


                    <div class="caresphere-feature-label">
                        Manage
                    </div>


                    <ul class="caresphere-feature-list">

                        <li>Child / Beneficiary Management</li>
                        <li>Alms / Meal Bookings</li>
                        <li>Health & Medical Records</li>
                        <li>Appointments & Calendar</li>
                        <li>Documents & Notifications</li>
                        <li>Reports, Staff & Security</li>

                    </ul>


                    <a
                        class="caresphere-solution-link"
                        href="#caresphere-child-details"
                    >
                        Explore Child →
                    </a>

                </article>


                <!-- =================================================
                     CARESPHERE RESIDENTIAL
                ================================================== -->

                <article class="caresphere-solution caresphere-residential reveal">

                    <div class="caresphere-solution-image">

                        <img
                            src="<?= BASE_URL ?>/assets/img/portfolio/caresphereresident.webp"
                            alt="CareSphere Residential"
                        >

                        <span class="caresphere-image-overlay">
                            CARESPHERE RESIDENTIAL
                        </span>

                    </div>


                    <div class="caresphere-solution-top">

                        <span class="caresphere-solution-number">
                            03
                        </span>

                        <span class="caresphere-solution-tag">
                            RESIDENTIAL CARE
                        </span>

                    </div>


                    <div class="caresphere-solution-icon">
                        R
                    </div>


                    <h3>
                        CareSphere Residential
                    </h3>


                    <p class="caresphere-solution-intro">
                        A dedicated management solution for residential
                        care facilities.
                    </p>


                    <div class="caresphere-feature-label">
                        Designed for
                    </div>

                    <p class="caresphere-designed-for">
                        Residential care facilities
                    </p>


                    <div class="caresphere-feature-label">
                        Manage
                    </div>


                    <ul class="caresphere-feature-list">

                        <li>Resident Management</li>
                        <li>Admissions & Discharges</li>
                        <li>Room & Bed Management</li>
                        <li>Facility Capacity</li>
                        <li>Staff & Caregivers</li>
                        <li>HR, Inventory & Operations</li>

                    </ul>


                    <a
                        class="caresphere-solution-link"
                        href="#caresphere-residential-details"
                    >
                        Explore Residential →
                    </a>

                </article>


                <!-- =================================================
                     CARESPHERE CHARITY
                ================================================== -->

                <article class="caresphere-solution caresphere-charity reveal">

                    <div class="caresphere-solution-image">

                        <img
                            src="<?= BASE_URL ?>/assets/img/portfolio/carespherecharity.webp"
                            alt="CareSphere Charity"
                        >

                        <span class="caresphere-image-overlay">
                            CARESPHERE CHARITY
                        </span>

                    </div>


                    <div class="caresphere-solution-top">

                        <span class="caresphere-solution-number">
                            04
                        </span>

                        <span class="caresphere-solution-tag">
                            CHARITY & NGO
                        </span>

                    </div>


                    <div class="caresphere-solution-icon">
                        C
                    </div>


                    <h3>
                        CareSphere Charity
                    </h3>


                    <p class="caresphere-solution-intro">
                        A dedicated management solution for charities
                        and NGOs.
                    </p>


                    <div class="caresphere-feature-label">
                        Designed for
                    </div>

                    <p class="caresphere-designed-for">
                        Charities & NGOs
                    </p>


                    <div class="caresphere-feature-label">
                        Manage
                    </div>


                    <ul class="caresphere-feature-list">

                        <li>Beneficiary Management</li>
                        <li>Sponsors & Donors</li>
                        <li>Donation Management</li>
                        <li>Programs & Projects</li>
                        <li>Assistance & Scholarships</li>
                        <li>Reporting & Organizational Management</li>

                    </ul>


                    <a
                        class="caresphere-solution-link"
                        href="#caresphere-charity-details"
                    >
                        Explore Charity →
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================================
         DETAILED CARESPHERE SOLUTIONS
    ====================================================== -->

    <section class="section section-light caresphere-product-details">

        <div class="container">

            <div class="section-head section-head-center">

                <span class="eyebrow">
                    EXPLORE CARESPHERE
                </span>

                <h2>
                    One platform.
                    <em>Built for different needs.</em>
                </h2>

                <p>
                    Each CareSphere solution is designed around a specific
                    type of organization, bringing the people, records,
                    activities and operational information they manage
                    into one focused environment.
                </p>

            </div>


            <!-- =================================================
                 CARESPHERE ELDER DETAILS
            ================================================== -->

            <article
                class="caresphere-product-detail caresphere-product-detail-elder"
                id="caresphere-elder-details"
            >

                <div class="caresphere-product-detail-image">

                    <img
                        src="<?= BASE_URL ?>/assets/img/portfolio/caresphereelder.webp"
                        alt="CareSphere Elder management dashboard"
                    >

                </div>


                <div class="caresphere-product-detail-content">

                    <span class="eyebrow">
                        CARESPHERE ELDER
                    </span>

                    <h2>
                        Smarter management for
                        <em>elder care.</em>
                    </h2>

                    <p class="caresphere-product-detail-lead">
                        CareSphere Elder is elder home and senior care management software
                        designed to manage residents, admissions, capacity,
                        alms and meal bookings, appointments, family contacts,
                        documents, staff, notifications and daily operations
                        from one centralized platform.
                    </p>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            DESIGNED FOR
                        </span>

                        <p>
                            Elder homes & senior care centres
                        </p>

                    </div>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            CORE MANAGEMENT AREAS
                        </span>

                        <div class="caresphere-detail-features">

                                <span>Resident Management</span>
                                <span>Admission & Intake Management</span>
                                <span>Alms / Meal Booking Management</span>
                                <span>Appointments & Calendar</span>
                                <span>Family & Emergency Contact Management</span>
                                <span>Document Management</span>
                                <span>SMS & Email Notifications</span>
                                <span>Reports & Analytics</span>
                                <span>Staff & User Management</span>
                                <span>Audit & Security Management</span>

                            </div>

                    </div>


                    <p>
                        The platform brings resident records, admission information,
                        booking activities, communications and operational
                        records together, helping elder homes maintain a
                        structured digital workflow.
                    </p>


                    <a
                        class="btn btn-primary"
                        href="<?= BASE_URL ?>/pages/contact"
                    >
                        Book a Demo — CareSphere Elder →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARESPHERE CHILD DETAILS
            ================================================== -->

            <article
                class="caresphere-product-detail caresphere-product-detail-child"
                id="caresphere-child-details"
            >

                <div class="caresphere-product-detail-content">

                    <span class="eyebrow">
                        CARESPHERE CHILD
                    </span>

                    <h2>
                        Organized management for
                        <em>child care.</em>
                    </h2>

                    <p class="caresphere-product-detail-lead">
                        CareSphere Child is child-care management software for children's
                        homes and child-care organizations, helping teams
                        manage children and beneficiaries, alms and meal
                        bookings, health records, appointments, documents,
                        notifications, staff and daily care information.
                    </p>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            DESIGNED FOR
                        </span>

                        <p>
                            Children's homes & child-care organizations
                        </p>

                    </div>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            CORE MANAGEMENT AREAS
                        </span>

                        <div class="caresphere-detail-features">

                                <span>Child / Beneficiary Management</span>
                                <span>Alms / Meal Booking Management</span>
                                <span>Health & Medical Records</span>
                                <span>Appointments & Calendar</span>
                                <span>Document Management</span>
                                <span>SMS & Email Notifications</span>
                                <span>Reports & Analytics</span>
                                <span>Staff & User Management</span>
                                <span>Audit & Security Management</span>

                            </div>

                    </div>


                    <p>
                        The platform centralizes child and beneficiary information with
                        health, education, booking, communication and
                        operational records, creating an organized environment
                        for day-to-day child-care management.
                    </p>


                    <a
                        class="btn btn-primary"
                        href="<?= BASE_URL ?>/pages/contact"
                    >
                        Book a Demo — CareSphere Child →
                    </a>

                </div>


                <div class="caresphere-product-detail-image">

                    <img
                        src="<?= BASE_URL ?>/assets/img/portfolio/carespherechild.webp"
                        alt="CareSphere Child management system"
                    >

                </div>

            </article>


            <!-- =================================================
                 CARESPHERE RESIDENTIAL DETAILS
            ================================================== -->

            <article
                class="caresphere-product-detail caresphere-product-detail-residential"
                id="caresphere-residential-details"
            >

                <div class="caresphere-product-detail-image">

                    <img
                        src="<?= BASE_URL ?>/assets/img/portfolio/caresphereresident.webp"
                        alt="CareSphere Residential management dashboard"
                    >
                    

                </div>


                <div class="caresphere-product-detail-content">

                    <span class="eyebrow">
                        CARESPHERE RESIDENTIAL
                    </span>

                    <h2>
                        Complete visibility for
                        <em>residential care.</em>
                    </h2>

                    <p class="caresphere-product-detail-lead">
                        CareSphere Residential is residential care management software
                        for facilities that need to manage residents,
                        admissions and discharges, rooms and beds, capacity,
                        caregivers, families, documents, HR, inventory and
                        daily facility operations.
                    </p>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            DESIGNED FOR
                        </span>

                        <p>
                            Residential care facilities
                        </p>

                    </div>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            CORE MANAGEMENT AREAS
                        </span>

                        <div class="caresphere-detail-features">

                                <span>Resident Management</span>
                                <span>Admissions & Discharges</span>
                                <span>Room & Bed Management</span>
                                <span>Facility Capacity Management</span>
                                <span>Staff & Caregiver Management</span>
                                <span>Family / Guardian Management</span>
                                <span>Document Management</span>
                                <span>Notifications & Reminders</span>
                                <span>Reports & Analytics</span>
                                <span>HR Management</span>
                                <span>Inventory & Stock Management</span>
                                <span>User Roles & Permissions</span>
                                <span>Audit & Security Management</span>

                            </div>

                    </div>


                    <p>
                        The platform connects resident records with room and bed management,
                        capacity, admissions, caregivers, HR, inventory,
                        notifications and facility operations in one
                        centralized system.
                    </p>


                    <a
                        class="btn btn-primary"
                        href="<?= BASE_URL ?>/pages/contact"
                    >
                        Book a Demo — CareSphere Residential →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARESPHERE CHARITY DETAILS
            ================================================== -->

            <article
                class="caresphere-product-detail caresphere-product-detail-charity"
                id="caresphere-charity-details"
            >

                <div class="caresphere-product-detail-content">

                    <span class="eyebrow">
                        CARESPHERE CHARITY
                    </span>

                    <h2>
                        Better organization for
                        <em>social impact.</em>
                    </h2>

                    <p class="caresphere-product-detail-lead">
                        CareSphere Charity is charity and NGO management software for
                        organizations that need to manage beneficiaries,
                        registration, sponsors, donors, donations, programs,
                        projects, scholarships, assistance, education,
                        coordinators, branches and reporting.
                    </p>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            DESIGNED FOR
                        </span>

                        <p>
                            Charities & NGOs
                        </p>

                    </div>


                    <div class="caresphere-product-detail-block">

                        <span class="caresphere-feature-label">
                            CORE MANAGEMENT AREAS
                        </span>

                        <div class="caresphere-detail-features">

                                <span>Beneficiary Management</span>
                                <span>Registration & Intake</span>
                                <span>Sponsor Management</span>
                                <span>Donor Management</span>
                                <span>Donation Management</span>
                                <span>Programs & Projects</span>
                                <span>Scholarship / Assistance Management</span>
                                <span>School & Education Information</span>
                                <span>Coordinator Management</span>
                                <span>Branch & District Management</span>
                                <span>Document Management</span>
                                <span>Communication & Notifications</span>
                                <span>Reports & Analytics</span>
                                <span>Data Import & Export</span>
                                <span>User Roles & Permissions</span>
                                <span>Audit History</span>

                            </div>

                    </div>


                    <p>
                        The platform centralizes beneficiary, sponsor, donor and donation
                        information alongside programs, assistance,
                        education, branch operations, communications,
                        reporting and data management for charitable
                        organizations and nonprofits.
                    </p>


                    <a
                        class="btn btn-primary"
                        href="<?= BASE_URL ?>/pages/contact"
                    >
                        Book a Demo — CareSphere Charity →
                    </a>

                </div>


                <div class="caresphere-product-detail-image">

                    <img
                        src="<?= BASE_URL ?>/assets/img/portfolio/carespherecharity.webp"
                        alt="CareSphere Charity management system"
                    >

                </div>

            </article>

        </div>

    </section>


    <!-- =====================================================
         ELDER / ALMS HIGHLIGHT
    ====================================================== -->

    <section class="section section-dark caresphere-alms">

        <div class="container">

            <div class="caresphere-alms-grid">


                <div class="caresphere-alms-content">

                    <span class="eyebrow">
                        CARESPHERE ELDER
                    </span>

                    <h2>
                        Simplifying
                        <em>ALMS & room bookings.</em>
                    </h2>

                    <p>
                        CareSphere Elder includes dedicated alms and meal booking
                        management, appointment and calendar support, and
                        operational workflows that help elder homes and senior
                        care centres organize bookings alongside resident
                        and daily care management.
                    </p>

                    <a
                        class="btn btn-primary"
                        href="<?= BASE_URL ?>/pages/contact"
                    >
                        Book a Demo — CareSphere Elder →
                    </a>

                </div>


                <div class="caresphere-alms-card">

                    <span class="caresphere-alms-card-label">
                        CARESPHERE ELDER
                    </span>


                    <div class="caresphere-alms-item">

                        <span class="caresphere-alms-icon">
                            01
                        </span>

                        <div>

                            <strong>
                                ALMS Bookings
                            </strong>

                            <span>
                                Organize and manage ALMS-related
                                bookings.
                            </span>

                        </div>

                    </div>


                    <div class="caresphere-alms-item">

                        <span class="caresphere-alms-icon">
                            02
                        </span>

                        <div>

                            <strong>
                                Room Bookings
                            </strong>

                            <span>
                                Manage room booking requirements
                                within the care environment.
                            </span>

                        </div>

                    </div>


                    <div class="caresphere-alms-item">

                        <span class="caresphere-alms-icon">
                            03
                        </span>

                        <div>

                            <strong>
                                Daily Operations
                            </strong>

                            <span>
                                Connect booking activities with
                                broader operational management.
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CARESPHERE APPROACH
    ====================================================== -->

    <section class="section section-light caresphere-platform">

        <div class="container">

            <div class="section-head section-head-center">

                <span class="eyebrow">
                    THE CARESPHERE APPROACH
                </span>

                <h2>
                    Built around the way
                    <em>care organizations work.</em>
                </h2>

                <p>
                    Each CareSphere solution focuses on the specific
                    information, people, processes and operations
                    relevant to its organization type.
                </p>

            </div>


            <div class="caresphere-platform-grid">


                <article class="caresphere-platform-item reveal">

                    <span>01</span>

                    <h3>
                        Specialized
                    </h3>

                    <p>
                        Dedicated solutions for different care and
                        social-impact organizations.
                    </p>

                </article>


                <article class="caresphere-platform-item reveal">

                    <span>02</span>

                    <h3>
                        Organized
                    </h3>

                    <p>
                        Bring important records, activities and
                        operational information into one system.
                    </p>

                </article>


                <article class="caresphere-platform-item reveal">

                    <span>03</span>

                    <h3>
                        Connected
                    </h3>

                    <p>
                        Connect care-related activities with the
                        operational processes behind them.
                    </p>

                </article>


                <article class="caresphere-platform-item reveal">

                    <span>04</span>

                    <h3>
                        Purpose Built
                    </h3>

                    <p>
                        Each edition is designed around the needs
                        of its specific organization type.
                    </p>

                </article>


            </div>

        </div>

    </section>


    <!-- =====================================================
         PRODUCT OVERVIEW
    ====================================================== -->

    <section class="section section-light caresphere-overview">

        <div class="container">

            <div class="caresphere-overview-box">

                <div>

                    <span class="eyebrow">
                        CARESPHERE
                    </span>

                    <h2>
                        A growing ecosystem
                        <em>for better care management.</em>
                    </h2>

                </div>


                <div>

                    <p>
                        CareSphere brings together specialized software
                        solutions under one product ecosystem. Whether
                        an organization manages seniors, children,
                        residential care or charitable activities,
                        CareSphere provides a focused approach to
                        managing its core operations.
                    </p>

                    <p>
                        Each solution is designed around the organization's
                        specific requirements while remaining part of the
                        wider CareSphere ecosystem.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FOUR SOLUTIONS SUMMARY
    ====================================================== -->

    <section class="section section-light caresphere-summary">

        <div class="container">

            <div class="section-head">

                <span class="eyebrow">
                    CARESPHERE ECOSYSTEM
                </span>

                <h2>
                    Find the solution
                    <em>for your organization.</em>
                </h2>

            </div>


            <div class="caresphere-summary-list">


                <a class="caresphere-summary-item" href="#caresphere-elder-details" aria-label="Explore CareSphere Elder">

                    <span class="summary-number">
                        01
                    </span>

                    <div>

                        <h3>
                            CareSphere Elder
                        </h3>

                        <p>
                            For elder homes & senior care centres.
                        </p>

                    </div>

                    <span class="summary-arrow">
                        →
                    </span>

                </a>


                <a class="caresphere-summary-item" href="#caresphere-child-details" aria-label="Explore CareSphere Child">

                    <span class="summary-number">
                        02
                    </span>

                    <div>

                        <h3>
                            CareSphere Child
                        </h3>

                        <p>
                            For children's homes & child-care organizations.
                        </p>

                    </div>

                    <span class="summary-arrow">
                        →
                    </span>

                </a>


                <a class="caresphere-summary-item" href="#caresphere-residential-details" aria-label="Explore CareSphere Residential">

                    <span class="summary-number">
                        03
                    </span>

                    <div>

                        <h3>
                            CareSphere Residential
                        </h3>

                        <p>
                            For residential care facilities.
                        </p>

                    </div>

                    <span class="summary-arrow">
                        →
                    </span>

                </a>


                <a class="caresphere-summary-item" href="#caresphere-charity-details" aria-label="Explore CareSphere Charity">

                    <span class="summary-number">
                        04
                    </span>

                    <div>

                        <h3>
                            CareSphere Charity
                        </h3>

                        <p>
                            For charities & NGOs.
                        </p>

                    </div>

                    <span class="summary-arrow">
                        →
                    </span>

                </a>


            </div>

        </div>

    </section>


    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="section section-dark caresphere-cta">

        <div class="container">

            <span class="eyebrow">
                POWERED BY SURFUX
            </span>

            <h2>
                Ready to modernize your
                <em>care operations?</em>
            </h2>

            <p>
                Book a personalized CareSphere demo and see how the right solution
                can organize your organization's people, records, bookings,
                resources and daily operations.
            </p>


            <div class="caresphere-cta-actions">

                <a
                    class="btn btn-primary"
                    href="<?= BASE_URL ?>/pages/contact"
                >
                    Book a CareSphere Demo →
                </a>

                <a
                    class="btn "
                    href="<?= BASE_URL ?>/pages/services"
                >
                    Explore Our Services
                </a>

            </div>

        </div>

    </section>


</main>


<?php include __DIR__.'/../includes/footer.php'; ?>