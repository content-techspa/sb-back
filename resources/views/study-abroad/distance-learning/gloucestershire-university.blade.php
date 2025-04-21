@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-2 bg-image">
        <div class="container">
            <div class="row row--45 align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">  
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Discover
                             <span class="color-secondary"> the University </span>of Gloucestershire 
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            A student-focused institution offering diverse programs, industry placements, and flexible entry points across three vibrant campuses.</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-gallery">
                        <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up"
                            data-sal-duration="1000">
                            <img src="{{ asset('front/img\study-abroad\distance-learning\gu\gu-01.webp') }}" alt="Girl Image">
                        </div>
                        <div class="thumbnail thumbnail-2" data-sal-delay="500" data-sal="slide-down"
                            data-sal-duration="1000">
                            <img src="{{ asset('front/img\study-abroad\distance-learning\gu\gu-02.webp') }}" alt="Girl Image">
                        </div>

                        <ul class="shape-group">
                            <li class="shape-1 scene shape-light" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-1 scene shape-dark" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/dark-shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-12.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-light" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-09.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-dark" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/dark-shape-09.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{ asset('front/images/cta/shape-04.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Category Area Start      	=-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-1 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">Categories</span> --}}
                <h2 class="title">
                    Explore <span class="color-primary">the University </span>of Gloucestershire</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Experience transformative education, industry-relevant programs, flexible learning options,<br> and a supportive community for holistic student development.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/online-degree.svg') }}" alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Transformative Experience</h5>
                            <p>The University of Gloucestershire empowers students for successful careers and personal growth through transformative education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/non-degree-programs.svg') }}" alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Industry-Relevant Programs</h5>
                            <p>Offering a wide range of programs, the university ensures students gain practical skills through industry placements and hands-on learning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/off-campus-programs.svg') }}" alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Flexible Learning Options</h5>
                            <p>Explore a variety of flexible course options including full-time, part-time, online, blended, and distance learning to suit your schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/hybrid-distance-programs.svg') }}" alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Supportive Community</h5>
                            <p>The university fosters a welcoming and supportive community, providing resources and services to ensure student success and well-being.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
    </div>
    <!-- End Categories Area  -->

    <!--=====================================-->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="gap-bottom-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/img\study-abroad\distance-learning\gu\gu-03.webp') }}" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-38.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-37.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.8" src="{{ asset('front/images/about/shape-04.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span>     --}}
                            <h2 class="title">University <span class="color-secondary">Overview</span> </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>With a student-centered approach, the university offers diverse programs, including industry placements and flexible entry points, across three campuses.</p>
                        </div>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Student-Centered Approach</li>
                            <li>Diverse Program Offerings</li>
                            <li>Sustainability and Social Responsibility</li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 circle scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span data-depth="-2.3"></span>
                </li>
            </ul>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Course Area Start      		=-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="edu-course-area course-area-2 gap-tb-text bg-lighten03">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Popular Courses</span>
                <h2 class="title">Pick A Course To Get Started</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-2 hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/courses/course-01.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Online</span>
                                <h5 class="title">
                                    <a href="#">MBA Top-up</a>
                                </h5>
                                <p>Enhance your career with our MBA, designed for both experienced professionals and recent graduates, offering flexible study routes and practical learning.</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /7 Rating)</span>
                                </div>
                                {{-- <div class="course-price">$29.00</div> --}}
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>8 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-2 hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/courses/course-02.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Online </span>
                                <h5 class="title">
                                    <a href="#">MSc Accounting & Finance Top-up</a>
                                </h5>
                                <p>Our MSc Accounting and Finance (Top-up) enhances professional competence, strategic thinking, and research skills for industry challenges.</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.5 /9 Rating)</span>
                                </div>
                                {{-- <div class="course-price">$49.00</div> --}}
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>15 Lessons</li>
                                    <li><i class="icon-25"></i>35 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-2 hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/courses/course-03.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Online </span>
                                <h5 class="title">
                                    <a href="#">MSc Human Resource Management Top-Up</a>
                                </h5>
                                <p>Explore HRM strategy to application through a Dissertation and Research Methods, ideal for HR professionals aspiring to senior management roles.</p>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /7 Rating)</span>
                                </div>
                                {{-- <div class="course-price">$35.00</div> --}}
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>13 Lessons</li>
                                    <li><i class="icon-25"></i>18 Students</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
        </div>
    </div>
    <!-- End Course Area -->


    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-5 section-gap-equal">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-5">
                    <div class="testimonial-heading-area">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Discover how students praise the University of Gloucestershire for its transformative experience, industry placements, flexibility, and supportive community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="swiper-testimonial-slider-wrapper swiper testimonial-coverflow">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}" alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>
                                    </div>
                                    <div class="content">
                                        <p>Studying at the University of Gloucestershire was a game-changer. The supportive environment and practical learning opportunities set me up for success.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Sophie</h5>
                                        <span class="subtitle">Graduate</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-02.png') }}" alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>
                                    </div>
                                    <div class="content">
                                        <p>I chose the University of Gloucestershire for its stellar reputation and diverse programs. The industry placements were invaluable for my growth.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Liam</h5>
                                        <span class="subtitle">Current Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-03.png') }}" alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>
                                    </div>
                                    <div class="content">
                                        <p>The flexible entry options at the University of Gloucestershire allowed me to pursue my degree alongside work. It was the perfect balance.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Mia</h5>
                                        <span class="subtitle">Alumni</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-04.png') }}" alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>
                                    </div>
                                    <div class="content">
                                        <p>The University of Gloucestershire offers a friendly community and ample resources for student support. It's a top choice for higher education.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Oliver</h5>
                                        <span class="subtitle">Current Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonial Area  -->
    <!--=====================================-->
    <!--=       Brand Area Start      		=-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-2 bg-image">
        <div class="container edublink-animated-shape">
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
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-2" src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-2 scene shape-light" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img data-depth="-2" src="{{ asset('front/images/about/shape-41.png') }}" alt="Shape">
            </li>
            <li class="shape-2 scene shape-dark" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img data-depth="-2" src="{{ asset('front/images/about/dark-shape-41.png') }}" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Brand Area  -->
    <!--=====================================-->
    <!--=       FAQ Area Start      		=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-1">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="row g-5">
                            <div class="col-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-1">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/faq/faq-01.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/faq/faq-02.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-3">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/faq/faq-03.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-4">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/gu/faq/faq-04.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene shape-light" data-sal-delay="500" data-sal="fade"
                                data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-02.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-1 scene shape-dark" data-sal-delay="500" data-sal="fade"
                                data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/faq/dark-shape-02.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-03.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-04.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-05.png') }}"
                                    alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">FAq’s</span>
                            <h2 class="title">Over 10 Years in <span class="color-secondary">Distant <br> Skill</span>
                                Development</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                            Can I apply to the University of Gloucestershire with non-traditional qualifications?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, the university considers all types of qualifications for entry, provided they meet the requirements for the chosen program.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                            Are there opportunities for industry placements?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, many programs offer industry placements, providing valuable real-world experience and enhancing employability.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                            Can I transfer credits from a previous course to the University of Gloucestershire?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, you may be able to transfer credits from an approved course in the same field, allowing you to enter at various points during the degree program.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-02.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span data-depth="-2.2"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-studyabroad-contact />
@endsection
