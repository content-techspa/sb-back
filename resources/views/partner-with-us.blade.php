@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Partner With Us</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Partner With Us</li>
                </ul>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}"
                    alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="{{ asset('front/images/about/shape-15.png') }}"
                    alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="{{ asset('front/images/about/shape-07.png') }}"
                    alt="shape"></li>
        </ul>
    </div>
    <!--  Breadcrumb Area End  -->

    <!--  About Us Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-1">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/images/about/about-01.webp') }}" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <h2 class="title">Who We Are?
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>At Antai Fintech Global, we offer tailored services, promote international education, and
                                support students pursuing Bachelor's, Master's, and PhD degrees.</p>
                        </div>
                        <ul class="features-list">
                            <li>Customized Support Services</li>
                            <li>Promoting International Education</li>
                            <li>Global Talent Utilization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  About Us Area End  -->

    <!-- Start Testimonial Area  -->
    <div class="testimonial-area-2 gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <h2 class="title">Why Partner with <span class="color-secondary">Antai</span> <br> Fintech Global
                        </h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">Lowest Investment in the Industry</h4>
                                <p>Benefit from our competitive pricing, offering the lowest investment required to access
                                    top-notch services and resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">Complete Social Media Marketing Support</h4>
                                <p>Use our experience in social media marketing to boost your online presence and reach a
                                    larger audience more effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">Staff Training Programs</h4>
                                <p>Ensure your team is well-equipped with comprehensive training provided by our experienced
                                    professionals, fostering growth and efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">Operational Support</h4>
                                <p>
                                    Receive continuous support with operational issues, ensuring your business processes run
                                    smoothly, efficiently, and effectively for optimal performance and success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">Lead Generation Support</h4>
                                <p>Boost your business with our effective lead generation strategies, meticulously designed
                                    to identify and attract potential clients seamlessly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/img/logo/antai-logo.webp') }}"
                                        alt="Logo"></div>
                                <h4 class="color-primary">End-to-End Recruitment Process Support</h4>
                                <p>Seamless recruitment: support from candidate identification to onboarding, ensuring a
                                    smooth process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="1.4" src="{{ asset('front/images/about/shape-30.png') }}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1.4" src="{{ asset('front/images/about/shape-25.png') }}" alt="Shape">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                <img src="{{ asset('front/images/others/map-shape-3.png') }}" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Testimonial Area  -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 edu-section-gap">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Our <span class="color-secondary">Services </span></h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content">
                        <p>At Antai Fintech Global, we offer a comprehensive range of services designed to meet diverse
                            educational and operational needs.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/certificate.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Vocational Qualifications</h4>
                            <p>Deliver and support qualifications via ATHE, Pearson, OTHM, Qualifi, TQUK, NCFE, and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/university.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">University <br> Partnership</h4>
                            <p>Facilitate direct contracts with universities for degree programs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/international-recruitment.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">International Recruitment </h4>
                            <p>Expertise in recruiting international students for various programs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra09-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/vocational.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Vocational Services</h4>
                            <p>Support for teaching, assessment, internal verification, and coordination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra10-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/onboarding.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">OFQUAL Onboarding</h4>
                            <p>Integrate OFQUAL-regulated awarding bodies into your institution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra11-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/employee-data.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Resource Hub Access</h4>
                            <p>Provide extensive resources for vocational qualifications via our resource hub.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/membership.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Charter Memberships</h4>
                            <p>Offer professional memberships to enhance credentials.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/certified.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Certified Short Courses</h4>
                            <p>Deliver short courses with recognized certifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/webinar.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Online Learning </h4>
                            <p>Replace face-to-face learning with efficient online methods.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra09-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/monetization.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Cost-Effective Model</h4>
                            <p>Run your organization with minimal costs, ensuring financial viability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra10-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/partner-with-us/svg-icons/customer-support.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Tailored Support</h4>
                            <p>Customized support for your organization’s unique needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene">
                <span data-depth=".8"></span>
            </li>
            <li class="shape-2 scene">
                <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}" alt="shape">
            </li>
            <li class="shape-3">
                <img data-parallax='{"x": 0, "y": 100}' src="{{ asset('front/images/faq/shape-12.png') }}"
                    alt="shape">
            </li>
        </ul>
    </section>
    <!-- End Why Choose Area  -->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-1 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">All You <span class="color-primary">Need</span> to Get Started</h2>
                <span class="shape-line"><i class="icon-19"></i></span>

            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/online-degree.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-9"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Office Space</h5>
                            </a>
                            <p>A primary office area equipped with essential office equipment.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/non-degree-programs.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-10"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Dedicated Staff</h5>
                            </a>
                            <p>1-2 committed staff members for operational tasks.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/off-campus-programs.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-11"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Internet Access</h5>
                            </a>
                            <p>Reliable internet connection for seamless business operations.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/hybrid-distance-programs.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-12"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Marketing Connections</h5>
                            </a>
                            <p>Strong marketing connections</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->

    <!--=       	FAQ Area Start      	=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-2 bg-image">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            <h2 class="title">5 Ideal Steps to Obtain an AFG Franchise Allocation</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>If you're seeking the best education franchise opportunity, join AFG to achieve substantial
                                success with high returns. Follow these steps to get started</p>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            1. Register with Us
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Complete our registration form to become a partner.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            2. Franchise Proposal
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Carefully read and review all steps in the Franchise Proposal.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            3. Meeting
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Attend an online meeting with the AFG director for clarification.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false">
                                            4. Legal Documentation
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Review the Franchise Agreement in detail to understand all points.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false">
                                            5. Final Approval
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Receive approval from AFG Management to open your centre.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="row g-5">
                            <div class="col-6" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-1">
                                    <img src="{{ asset('front/images/faq/faq-05.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/images/faq/faq-06.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-06.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-04.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-16.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-4 scene">
                                <img data-depth="-2" src="{{ asset('front/images/banner/shape-03.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-5 scene">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-08.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="1.7" src="{{ asset('front/images/faq/shape-09.png') }}"
                                    alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!-- Start CTA Area  -->
    <div class="home-one-cta-two cta-area-1 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up"
                data-sal-duration="800">
                <h2 class="title">Contact Us</h2>
                <p>Contact Us to Book a FREE Consultation With a Customised Action Plan For Your Organisation.</p>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="home-one-cta edu-cta-box bg-image">
                        <div class="inner">
                            <div class="content text-md-end">
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a
                                        href="mailto:admin@antaifintechglobal.com">admin@antaifintechglobal.com</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+44 7441 340547">+44 7441 340547</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area  -->

    <div class="edu-brand-area brand-area-2 ">
        <div class="container">
            <div class="brand-grid-wrap brand-style-2">
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/aru.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/bcs.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/biiab-centre.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/cccu.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/cchs.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/ilm.webp') }}" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
@endsection
