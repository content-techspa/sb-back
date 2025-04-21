@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">University of
                            <br><span class="color-secondary">Bolton </span>
                            Empowering Your Future
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            The University of Bolton offers quality education, diverse programs, and strong employability
                            focus in a supportive, inclusive environment. Empower your future.</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span></span>
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span data-depth="2.5"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-main.webp') }}"
                                alt="flag-boy Image">
                        </div>
                        {{-- <div class="instructor-info" data-sal-delay="800" data-sal="fade-in" data-sal-duration="1000">
                            <div class="inner">
                                <div class="enrolled-counter">
                                    <div class="counterup-wrapper">
                                        <h2 class="counter-item count-number primary-color">
                                            <span class="odometer" data-odometer-final="9.3">.</span><span
                                                class="count-wrap">K</span>
                                        </h2>
                                        <h6 class="title">Enrolled</h6>
                                    </div>
                                </div>
                                <div class="lahguage-counter">
                                    <div class="counterup-wrapper">
                                        <h2 class="counter-item count-number secondary-color">
                                            <span class="odometer" data-odometer-final="20">.</span><span
                                                class="count-wrap">+</span>
                                        </h2>
                                        <h6 class="title">Languages</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <ul class="shape-group">
                            <li class="shape-3" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/about/shape-15.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-1.5" src="{{ asset('front/images/counterup/shape-05.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-5" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/svg-icons/circle-big.svg') }}" alt="Shape">
                            </li>
                            <li class="shape-6" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/svg-icons/circle-small.svg') }}" alt="Shape">
                            </li>
                            <li class="shape-7 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-8">
                <img src="{{ asset('front/images/about/h-1-shape-01.png') }}" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- Start Categories Area  -->
    <div class="features-area-6">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">features</span> --}}
                <h2 class="title">Benefits of a University of Bolton <br> Online MBA </h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>An Online MBA from the University of Bolton offers flexible learning,<br> a global network, career
                    advancement, and expert faculty.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6 ">
                    <div class="icon icon-course">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/svg/flexible-learning.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Flexible Learning</h5>
                        <p>Balance studies with personal and professional commitments.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 ">
                    <div class="icon icon-tag">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/svg/global-network.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Global Network</h5>
                        <p>Connect with peers and professionals worldwide.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/svg/career-advancement.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Career Advancement</h5>
                        <p>Enhance employability with advanced skills.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/svg/expert-faculty.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Expert Faculty</h5>
                        <p>Learn from experienced professionals and academics.</p>
                    </div>
                </div>
            </div>

            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="{{ asset('front/images/others/shape-41.png') }}" alt="Shape">
                </li>
            </ul>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-3 language-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-02.webp') }}"
                            alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2"
                                    src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-03.webp') }}"
                                    alt="About Image">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-2" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img class="rotateit" src="{{ asset('front/images/faq/shape-04.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Empowering Futures About the University of<span class="color-primary">
                                    Bolton </span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission"
                                    type="button" role="tab" aria-selected="false">Our Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision"
                                    type="button" role="tab" aria-selected="false">Our Vision</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>The University of Bolton offers high-quality education in a supportive environment.
                                    Located in Bolton, we provide diverse programs to equip students with essential skills
                                    for successful careers. Our modern facilities, experienced faculty, and focus on
                                    employability prepare students for lifelong learning.</p>

                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <p>Our mission is to provide transformative education that combines theory with practical
                                    skills, preparing students for modern challenges. We are committed to student success,
                                    innovative teaching, strong community connections, and inclusivity, ensuring equal
                                    opportunities for all.</p>

                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <p>Our vision is to be a globally recognized institution known for academic excellence,
                                    innovative research, and student success. We aim to empower individuals to achieve their
                                    potential and make meaningful contributions to society.</p>

                            </div>
                        </div>
                        <div class="about-btn sal-animate" data-sal-delay="400" data-sal="slide-up"
                            data-sal-duration="1000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="benefits-area-1">
        <div class="benefits-wrapper">
            <div class="benefits-wrap-one">

            </div>
            <div class="benefits-wrap-two">
                <div class="process-gallery edublink-animated-shape">
                    <div class="gallery-thumbnail">
                        <div class="thumbnail thumbnail-1">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-04.webp') }}"
                                alt="Why Choose">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container edublink-animated-shape benefits-content-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="process-content">
                            <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                                data-sal-duration="1000">
                                {{-- <span class="pre-title color-secondary"> GYM Benefits</span> --}}
                                <h2 class="title">Master of Business <span class="color-secondary">Administration
                                        <br></span>from University of Bolton</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <h5 class="my-5"> Purpose: <small>Prepares students for leadership roles in various
                                        industries.</small></h5>
                                <h5 class="my-5"> Key Topics: <small>Strategic Management, Organizational Behavior, Human
                                        Resource Management, Leadership Theories</small></h5>
                                <h5 class="my-5"> Learning Methods: <small> Lectures, Case Studies, Practical
                                        Exercises</small>
                                </h5>
                            </div>
                            <h5 class="mb-1">Skills Development: </h5>
                            <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="1000">
                                <ul class="features-list">
                                    <li>Critical Thinking</li>
                                    <li>Problem-Solving</li>
                                </ul>
                                <ul class="features-list">
                                    <li>Decision-Making</li>
                                </ul>
                            </div>
                            <div class="features-btn" data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span></span>
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                        alt="Shape Images">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{ asset('front/images/cta/shape-14.png') }}"
                                        alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Course Area  -->
    <div class="home-four-course edu-course-area course-area-4 gap-tb-text bg-image">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Popular Courses</span>
                <h2 class="title">Pick A Course To Get Started</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-xl-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-4">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-05.webp') }}"
                                        alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>8 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="course-price">Cost of Living: Zero</div>
                                <h6 class="title">
                                    <a href="#">Level 7 Extended Diploma in Strategic Management</a>
                                </h6>
                                <div class="course-rating">

                                    <span class="rating-count">Mode of Teaching: Online</span>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fas fa-university"></i> Antai Fintech Global</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-4">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/bolton-university/bolton-university-06.webp') }}"
                                        alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="course-price">Cost of Living: Zero</div>
                                <h6 class="title">
                                    <a href="#">MBA Top-up</a>
                                </h6>
                                <div class="course-rating">
                                    <span class="rating-count">Mode of Teaching: Online</span>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fas fa-university"></i> University of Bolton</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span data-depth="1"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-1 section-gap-equal">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-5">
                    <div class="testimonial-heading-area">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p> Hear from our graduates about how Bolton's MBA program equipped them with strategic skills,
                                real-world experience, and professional growth through a practical curriculum and expert
                                faculty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="home-one-testimonial-activator swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>The MBA at University of Bolton provided me with essential business skills and
                                            leadership capabilities. The supportive faculty and real-world applications were
                                            invaluable.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Jessica H.</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-02.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>Bolton's MBA program exceeded my expectations with its practical approach and
                                            diverse cohort. It significantly enhanced my strategic thinking and career
                                            prospects.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Michael S.</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-03.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>Studying an MBA at University of Bolton was a true game-changer. The curriculum's
                                            blend of theory and practical practice prepared me for real-world business
                                            challenges.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Priya R.</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-04.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>The MBA from University of Bolton offered a dynamic learning environment. The
                                            expert faculty and networking opportunities greatly advanced my professional
                                            development.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">David M.</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonial Area  -->
    <!-- Start CTA Area  -->
    <x-studyabroad-contact />
    <!-- End CTA Area  -->
    
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image bg-white">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Explore programs and opportunities at<span class="color-secondary">
                                    University of </span>Bolton</h2>
                            <a href="https://www.bolton.ac.uk/" target="_blank" class="edu-btn"> Visit Official Website
                                <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="{{ asset('front/images/cta/shape-10.png') }}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="{{ asset('front/images/cta/shape-09.png') }}" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="-2" src="{{ asset('front/images/cta/shape-08.png') }}" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->

    <!-- Start Brand Area  -->
    {{-- <div class="edu-brand-area brand-area-1 section-gap-equal">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brand-section-heading">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Our Partners</span>
                            <h2 class="title">Our Prestigious University Partners Worldwide</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Antai Fintech Global partners with top universities, providing enriched learning, global
                                exposure, and study pathways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="brand-grid-wrap">
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
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/gbc.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/york-college.webp') }}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Brand Area  -->
@endsection
