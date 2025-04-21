@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-11 remote-training">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Girne American
                            University <br>
                            <span class="color-secondary">Excellence </span>in Education
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            Girne American University offers diverse programs, cutting-edge research, and a vibrant campus
                            life fostering academic and personal growth.</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/counterup/shape-05.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/gau/gau-01.webp') }}"
                                alt="Pi-chart Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/others/shape-42.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span data-depth="-2.5"></span>
                            </li>
                            <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img class="rotateit" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=   About & counterup Area Start    =-->
    <!--=====================================-->
    <div class="about-counterup section-gap-equal">
        <!--=====================================-->
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <!-- Start Why Choose Area  -->
        <section class="why-choose-area-3 gap-bottom-equal">
            <div class="container">
                <div class="row row--45">
                    <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="left-content">
                            <h2 class="title">Benefits of Studying at <span class="color-secondary">Girne American
                                </span>University</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="right-content">
                            <p>
                                Girne American University offers diverse programs, experienced faculty, modern facilities,
                                and a multicultural environment, fostering academic excellence, personal growth, and global
                                career readiness.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-primary-style">
                            <div class="icon">
                                <i class="icon-45"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Diverse Programs</h4>
                                <p>Wide range of undergraduate, graduate, and doctoral programs in various fields.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-secondary-style">
                            <div class="icon">
                                <i class="icon-46"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Industry Connections</h4>
                                <p>Strong ties with industries providing internships, job placements, and practical
                                    experience opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-extra08-style">
                            <div class="icon">
                                <i class="icon-47"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Experienced Faculty</h4>
                                <p>Access to highly qualified and experienced professors dedicated to student success.</p>
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
        <!--=====================================-->
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-about-area about-style-3 language-about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/gau/gau-02.webp') }}"
                                alt="About Image">
                            <div class="main-img-wrapper">
                                <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in"
                                    data-sal-duration="800">
                                    <img class="main-img-2"
                                        src="{{ asset('front/img/study-abroad/exclusive-programs/gau/gau-03.webp') }}"
                                        alt="About Image">
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-2" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img class="rotateit" src="{{ asset('front/images/faq/shape-04.png') }}"
                                        alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                {{-- <span class="pre-title">About Us</span> --}}
                                <h2 class="title">GRU<span class="color-primary"> Your Gateway</span>
                                    to
                                    Excellence</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                        type="button" role="tab" aria-selected="true">About GAU</button>
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
                                    <p>
                                        Girne American University (GAU) is a leading University in Europe located in Girne,
                                        Northern
                                        Cyprus. GAU is modelled using the American higher education system which is
                                        recognized as
                                        one of the world’s best systems of higher education in the world. GAU is recognized
                                        and the
                                        programs offered are accredited by IACBE.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                    <p>GAU's mission is to provide high-quality, student-centered education that equips
                                        individuals with the knowledge, skills, and values needed for global success. We
                                        emphasize critical thinking, creativity, and lifelong learning through innovative
                                        teaching, research, and community engagement.</p>

                                </div>
                                <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                    <p>GAU aims to be a leading international university known for excellence in education,
                                        research, and community service. We strive to create a dynamic learning environment,
                                        build strong global partnerships, and produce graduates ready to tackle 21st-century
                                        challenges.</p>
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
        <!--=====================================-->
    </div>
    <!--=====================================-->

    <!-- Start Categories Area  -->
    {{-- <div class="edu-categorie-area categorie-area-3 gap-bottom-equal bg-image" id="categories">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Key <span class="color-primary">Highlights</span></h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-primary-style">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Flexible Intakes
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-secondary-style">
                        <div class="icon">
                            <i class="icon-10"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Doubt Sessions</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra04-style">
                        <div class="icon">
                            <i class="icon-11"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Career Assistance</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-tertiary-style">
                        <div class="icon">
                            <i class="icon-12"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">
                                    Flexible Study Mode</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra02-style">
                        <div class="icon">
                            <i class="icon-13"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title"> Real Time Case <br> Studies</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra07-style">
                        <div class="icon design-pencil-icon">
                            <i class="icon-42"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Shorter Duration than Regular 2-Year MBA</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra06-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">
                                    Assignment Based Assessment</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra03-style">
                        <div class="icon laptop-icon">
                            <i class="icon-16"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Live Sessions with Industry Experts</h5>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- End Categories Area  -->
    <!-- Why Choose Area  -->
    <div class="benefits-area-1">
        <div class="benefits-wrapper">
            <div class="benefits-wrap-one">

            </div>
            <div class="benefits-wrap-two">
                <div class="process-gallery edublink-animated-shape">
                    <div class="gallery-thumbnail">
                        <div class="thumbnail thumbnail-1">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/gau/gau-04.webp') }}"
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

                                <h2 class="title">Diploma in Strategic <span class="color-secondary">Management
                                        <br></span> and Leadership</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>
                                    The Diploma in Strategic Management and Leadership, equivalent to 120 credits, is
                                    designed to develop and reward current and future business managers, enhancing
                                    recognition and professionalism in the management sector.</p>

                            </div>
                            <h5 class="mb-1">Entry Requirements:</h5>
                            <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="1000">
                                <ul class="features-list">
                                    <li>Level 6 Qualification</li>
                                    <li>First Degree </li>
                                </ul>
                            </div>
                            {{-- <h5 class="mb-1">Program Highlights: </h5>
                            <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="1000">
                                <ul class="features-list">
                                    <li>14-Month Guaranteed Internship</li>
                                    <li>Guaranteed job placement after 14-month internship</li>
                                    <li><Strong>Tuition Fee:</Strong> $7899</li>
                                    <li><Strong>Other fee:</Strong> $5720</li>
                                    <li>4 sessions per month (3 hours each)</li>
                                </ul>
                            </div> --}}
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
    <!-- End Why Choose Area  -->
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
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
                            <p> Discover how GAU's MBA program transforms careers through rigorous academics, practical curriculum, expert faculty, and a diverse, multicultural environment fostering professional growth.</p>
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
                                        <p>GAU's MBA transformed my career with its practical curriculum, expert faculty,
                                            and global exposure. Highly recommended for aspiring business leaders.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Emma L.</h5>
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
                                        <p>The MBA at GAU combines rigorous academics with invaluable networking. The supportive faculty and diverse environment prepared me for success.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Raj P.</h5>
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
                                        <p>GAU's MBA provided a comprehensive understanding of business, enhancing my critical thinking and leadership skills. An excellent choice for professional growth.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Sara M.</h5>
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
                                        <p>The well-structured MBA program at GAU and its multicultural environment significantly boosted my personal and professional development.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Ali K.</h5>
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
    <!--=====================================-->
    <!--=      Call To Action Area Start   	=-->
    <!--=====================================-->
    <x-studyabroad-contact />
    <!--=====================================-->

    <!--=      CTA Banner Area Start   		=-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image bg-white">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Explore programs and opportunities at<span class="color-secondary"> Girne
                                    American </span>University</h2>
                            <a href="https://www.gau.edu.tr/en/" target="_blank" class="edu-btn"> Visit Official Website
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
    <!--=      		Brand Area Start   		=-->
    <!--=====================================-->
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
