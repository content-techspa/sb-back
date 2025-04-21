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
                            <br><span class="color-secondary">Gloucestershire </span>
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            The University of Gloucestershire offers diverse programs, academic excellence, innovative teaching, and strong industry connections in a supportive environment.</p>
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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university.webp') }}" alt="flag-boy Image">
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
                <h2 class="title">Benefits of a University of Gloucestershire<br> Online MBA </h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>An Online MBA from the University of Bolton offers flexible learning,<br> a global network, career
                    advancement, and expert faculty.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6">
                    <div class="icon icon-course">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/online-class.svg') }}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Skill Development</h5>
                        <p>Equip students for the digital landscape in business, marketing, and data analytics.</p>
                    </div>
                </div>
                <div class="features-box features-style-6">
                    <div class="icon icon-tag">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/instructor.svg') }}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Career Advancement</h5>
                        <p>Ideal for advancing in Big Data, offering sought-after skills.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/certificate.svg') }}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Marketing Intelligence and Big Data</h5>
                        <p>Integrates market research, strategy, and analytics for effective planning.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/user.svg') }}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Global Network</h5>
                        <p>Connect with peers and receive dedicated support.</p>
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
                            src="{{ asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university-02.webp') }}" alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{ asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university-03.webp') }}"
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
                            <h2 class="title">Experience Excellence at the University of  <span class="color-primary">
                                Gloucestershire </span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">About ARU</button>
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
                                <p>The University of Gloucestershire is dedicated to high-quality education and fostering an inclusive, supportive environment. Located in Gloucestershire, we offer diverse undergraduate and postgraduate programs that equip students with the skills and knowledge to excel. With state-of-the-art facilities, experienced faculty, and a focus on employability, we prepare students for successful careers and lifelong learning.</p>
                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <p>Our mission is to deliver a transformative educational experience that combines rigorous academic standards with practical skills, preparing students for the challenges of the modern world. We are committed to fostering a supportive and inclusive learning environment where every student can thrive and achieve their full potential.</p>

                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <p>Our vision is to be a globally recognized institution known for our innovative teaching, impactful research, and commitment to social responsibility. We aim to empower our students to become leaders and change-makers in their communities and industries, driving progress and making a positive impact on the world.</p>

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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university-04.webp') }}" alt="Why Choose">
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
                                <h2 class="title">MBA - Global Business <span class="color-secondary">Administration </span>in Marketing Intelligence and Big Data (Top-up)</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                               <p>The Level 7 qualification from Antai Fintech Global, combined with the MBA from the University of Gloucestershire, offers comprehensive skills in marketing intelligence and big data.</p>
                               <p>These programs equip students to navigate the evolving digital landscape, focusing on business, marketing, and data analytics. Ideal for advancing careers in Big Data.</p>
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
                                    <img src="{{asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university-05.webp')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>8 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="course-price">Cost of Living: Zero</div>
                                <h6 class="title">
                                    <a href="#">Level 7 Diploma in Data Science</a>
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
                                    <img src="{{asset('front/img/study-abroad/exclusive-programs/gloucestershire-university/gloucestershire-university-06.webp')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="course-price">Cost of Living: Zero</div>
                                <h6 class="title">
                                    <a href="#">MBA - Global Business Administration in Marketing Intelligence and Big Data (Top-up)</a>
                                </h6>
                                <div class="course-rating">
                                    <span class="rating-count">Mode of Teaching: Online</span>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fas fa-university"></i> University of Gloucestershire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-2" src="{{asset('front/images/about/shape-13.png')}}" alt="Shape">
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
                                <p> Discover how Gloucestershire's MBA in Marketing Intelligence and Big Data transforms careers with cutting-edge skills, practical applications, and strategic decision-making insights.</p>
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
                                            <p>Studying at Gloucestershire was an absolutely incredible experience. The MBA program's strong emphasis on big data analytics in marketing has been pivotal for my professional growth.</p>
                                            <div class="rating-icon">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <h5 class="title"> Emily R.</h5>
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
                                            <p>The MBA in Marketing Intelligence and Big Data at the University of Gloucestershire provided cutting-edge insights and practical skills essential for today's data-driven marketing landscape.</p>
                                            <div class="rating-icon">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <h5 class="title">Alex J.</h5>
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
                                            <p>Gloucestershire's MBA program was transformative. The focus on big data and marketing intelligence has significantly enhanced my strategic decision-making and career trajectory.</p>
                                            <div class="rating-icon">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <h5 class="title">Maria T. </h5>
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
                                            <p>The top-up MBA at the University of Gloucestershire offered unparalleled expertise in marketing intelligence. The blend of theory and application prepared me for industry challenges.</p>
                                            <div class="rating-icon">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <h5 class="title">James K.</h5>
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
                                    University of </span>Gloucestershire</h2>
                            <a href="https://www.glos.ac.uk/" target="_blank" class="edu-btn"> Visit Official Website
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
