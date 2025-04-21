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
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Buckinghamshire New
                            University
                            <span class="color-secondary">Empowering </span>Futures
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            Explore vibrant learning environments and diverse programs fostering personal and professional
                            growth at Buckinghamshire New University.</p>
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
                            <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/bnu-01.webp') }}"
                                alt="Girl Image">
                        </div>
                        <div class="thumbnail thumbnail-2" data-sal-delay="500" data-sal="slide-down"
                            data-sal-duration="1000">
                            <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/bnu-02.webp') }}"
                                alt="Girl Image">
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
                    Dynamic Learning <span class="color-primary">Environment </span>at BNU</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Experience academic growth and personal development in a vibrant setting.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/online-degree.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Vibrant Learning Environment</h5>
                            <p>Buckinghamshire New University offers a dynamic setting that inspires academic excellence and
                                personal development.</p>
                            {{-- <div class="course-remain">7 Courses</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/non-degree-programs.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Diverse Program Offerings</h5>
                            <p>With a wide array of programs, the university caters to various interests and career paths,
                                ensuring student satisfaction.</p>
                            {{-- <div class="course-remain">4 Courses</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/off-campus-programs.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Focus on Innovation</h5>
                            <p>The university is ardently committed to innovation, diligently preparing students to excel in
                                dynamic industries worldwide.</p>
                            {{-- <div class="course-remain">8 Courses</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/images/animated-svg-icons/hybrid-distance-programs.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Strong Support System</h5>
                            <p>
                                Buckinghamshire New University provides holistic support, including guidance and counseling,
                                to ensure student success.</p>
                            {{-- <div class="course-remain">8 Courses</div> --}}
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
                        <img class="main-img-1"
                            src="{{ asset('front/img/study-abroad/distance-learning/bnu/bnu-03.webp') }}"
                            alt="About Image">
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
                            <span class="pre-title">About BNU</span>
                            <h2 class="title">Fostering <span class="color-secondary">Excellence</span> and Innovation
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p> Experience our commitment to innovative education, career readiness, flexible learning, and
                                research excellence.</p>
                        </div>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Dynamic Learning Environment</li>
                            <li>Diverse Program Offerings</li>
                            <li>Innovation and Industry Relevance</li>
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
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/courses/course-01.webp') }}"
                                        alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>1 Years</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Total Credit: 120</span>
                                <h5 class="title">
                                    <a href="#">International MBA (TOP -UP)</a>
                                </h5>
                                <p>Enhance strategic management and sustainable business skills with Buckinghamshire New
                                    University's International MBA (Top-Up) program. Apply now for January.</p>
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
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/courses/course-02.webp') }}"
                                        alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>9 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Dissertation-60 credits </span>
                                <h5 class="title">
                                    <a href="#">MASTER OF LAW (TOP -UP)</a>
                                </h5>
                                <p> The LLM Top-Up program offers a tailored curriculum for legal professionals to deepen
                                    expertise in areas like international law, commercial law, and human rights.</p>
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
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/courses/course-03.webp') }}"
                                        alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>6 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Dissertation-60 credits </span>
                                <h5 class="title">
                                    <a href="#">International MBA (TOP -UP)</a>
                                </h5>
                                <p>
                                    Our flagship International MBA program offers the opportunity to develop your career and
                                    navigate the global marketplace, gaining a competitive <br>edge.</p>
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
    <!--=====================================-->
    <!--=       Video Area Start      		=-->
    <!--=====================================-->
    {{-- <div class="video-area-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="video-gallery">
                        <div class="thumbnail">
                            <img src="{{ asset('front/images/others/video-01.webp') }}" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=PICj5tr9hcc"
                                class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="2" class="rotateit"
                                    src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-04.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-light">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-14.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-dark">
                                <img data-depth="2" src="{{ asset('front/images/faq/dark-shape-14.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=====================================-->
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    <div class="counterup-area-5 edu-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-5 primary-color">
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="29.3">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Student Enrolled</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-5 secondary-color">
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Class Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-5 extra02-color">
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="100">.</span><span>%</span>
                        </h2>
                        <h6 class="title">Satisfaction Rate</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-5 extra05-color">
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                        </h2>
                        <h6 class="title">Top Instructors</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-5 gap-lg-bottom-equal">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-5">
                    <div class="testimonial-heading-area">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Read authentic testimonials from Buckinghamshire New University students, sharing their
                                experiences and the transformative impact of their education journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="swiper-testimonial-slider-wrapper swiper testimonial-coverflow">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>Studying at Buckinghamshire New University has been an incredible journey. The
                                            supportive environment and industry-focused curriculum have prepared me well for
                                            my career.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Alex P.</h5>
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
                                        <p>I chose Buckinghamshire New University for its reputation and I wasn't
                                            disappointed. The practical approach to learning and industry connections are
                                            unmatched.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title"> Olivia T.</h5>
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
                                        <p>My time at Buckinghamshire New University was truly transformative. The emphasis
                                            on research and critical thinking has shaped me into a more confident
                                            professional.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Liam S.</h5>
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
                                        <p>Buckinghamshire New University provided me with the perfect blend of theoretical
                                            knowledge and practical skills. I feel well-equipped for the future.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title"> Emma W.</h5>
                                        <span class="subtitle">Student</span>
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
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/faq/faq-01.webp') }}"
                                        alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/faq/faq-02.webp') }}"
                                        alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-3">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/faq/faq-03.webp') }}"
                                        alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                <div class="faq-thumbnail thumbnail-4">
                                    <img src="{{ asset('front/img/study-abroad/distance-learning/bnu/faq/faq-04.webp') }}"
                                        alt="Faq Images">
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
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            What programs does Buckinghamshire New University offer?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Buckinghamshire New University offers a wide range of undergraduate and
                                                postgraduate programs across various disciplines, including business,
                                                healthcare, education, and the arts.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Can international students apply to Buckinghamshire New University?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, Buckinghamshire New University welcomes applications from international
                                                students. The university provides support services for international
                                                students, including visa advice and English language support.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            What support services are available for students at Buckinghamshire New
                                            University?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Buckinghamshire New University offers comprehensive support services,
                                                including academic guidance, career counseling, mental health support, and
                                                assistance for students with disabilities.</p>
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
