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
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Discover Your Future at 
                            <span class="color-primary"> Concordia </span>
                            University Chicago
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            Empowering Leaders with Purpose and Faith at Concordia University Chicago for Over 160 Years.</p>
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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/concordia-university-cover.webp') }}"
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
    <!--=====================================-->
    <!--=       Features Area Start      	=-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="features-area-6">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">features</span> --}}
                <h2 class="title">Why Choose LIGMR?</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>LIGMR provides advanced research opportunities, expert mentorship, and innovative facilities, <br>
                    preparing students for success in medical and scientific fields.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6 ">
                    <div class="icon icon-course">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/free-transport.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Global Recognition</h5>
                        <p>Study in France
                            and obtain a globally recognized
                            degree.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 ">
                    <div class="icon icon-tag">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/free-medical.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Cultural Immersion</h5>
                        <p>Experience a
                            multicultural environment.</p>
                    </div>
                </div>
                <div class="features-box features-style-6  feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/low-living-cost.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Expert Faculty</h5>
                        <p>Learn from industry
                            leaders and experts.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/flexible-fee.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Career Advancement</h5>
                        <p>Develop skills for success in global medical, healthcare, and scientific industries.</p>
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

    <!--=====================================-->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-3 language-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast-02.webp') }}"
                            alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2"
                                    src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast-03.webp') }}"
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
                            <h2 class="title">About <span class="color-primary">LIGMR</span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>At LIGMR, we are dedicated to providing quality
                                    education and creating opportunities for students
                                    worldwide. Follow this easy-to-navigate guide to
                                    start your journey with us.</p>
                                <ul class="features-list">
                                    <li>Quality education for global student success.</li>
                                    <li>Opportunities worldwide for aspiring professionals.</li>
                                    <li>Simplified guide to start your journey.</li>
                                </ul>
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

    <!--=      Pricing Area Start   	=-->
    <!--=====================================-->
    <div class="gap-bottom-equal pricing-area-1">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Tuition Fees</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="tab-content-box pt-5">
                <div id="tab1" class="tab-slider-body">
                    <div class="row g-5 align-items-center justify-content-center" id="tab1"
                        class="tab-slider-body">
                        <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h6 class="title">Bachelor's Programmes</h6>
                                    <div class="price-wrap">
                                        <span class="amount">€8500</span>
                                        <span class="duration">Per year</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h6 class="title">Master's Programs</h6>
                                    <div class="price-wrap">
                                        <span class="amount">€9500</span>
                                        <span class="duration">Per Year</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="home-nine-course edu-course-area section-gap-equal bg-lighten04">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center sal-animate" data-sal-delay="100" data-sal="slide-up"
                data-sal-duration="800">
                {{-- <span class="pre-title">Popular Courses</span> --}}
                <h2 class="title">Apprenticeship Programs</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 course-style-10">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/courses/course-01.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>3 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#"> Bachelor of Business Administration (BBA)</a>
                                </h6>
                                <p><strong>4 Specializations:</strong></p>
                                <ul class="features-list">
                                    <li>Communication and Digital Marketing</li>
                                    <li>Entrepreneurship and Business Development</li>
                                    <li>Supply Chain & Operation Management</li>
                                    <li>Finance and Accounting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 course-style-10">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/courses/course-02.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>2 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Master of Business Administration (MBA)</a>
                                </h6>
                                <p><strong>4 Specializations:</strong></p>
                                <ul class="features-list">
                                    <li>Communication and Digital Marketing</li>
                                    <li>Entrepreneurship and Business Development</li>
                                    <li>Supply Chain & Operation Management</li>
                                    <li>Finance and Accounting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 course-style-10">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/courses/course-03.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>15 Months</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">MBA - (International Business
                                        Management)</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
        </div>
    </div>
    <!-- End Course Area -->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-1 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Application  <span class="color-primary">Process</span></h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Simple steps to join LIGMR successfully.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Profile Assessment</h5>
                            <p>The admission team reviews your documents to determine eligibility during the initial profile assessment process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Application</h5>
                            <p>Once eligible, complete and submit the online application form to proceed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Academic Interview</h5>
                            <p>A virtual interview evaluates your background, education, experience, and goals, with results shared in 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Application Fees</h5>
                            <p>Pay the non-refundable €320 application fee within 48 hours after passing the interview.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Conditional Offer</h5>
                            <p>Upon payment, a conditional offer
                                letter will be shared within 24-72 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Course Fees</h5>
                            <p>Pay the first-year tuition fees within a month of receiving the offer; payment reflects in 7 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Letter of Acceptance (LOA)</h5>
                            <p>Upon receiving tuition
                                fees, the LOA will be shared to proceed with Campus
                                France and VFS procedures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">Campus France Interview</h5>
                            <p>Applicants prepare for the Campus France interview within 20-30 days and attend at the nearest centre.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">NOC</h5>
                            <p>After passing the Campus France interview, an
                                NOC will be issued for the VFS visa procedure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="content">
                                <h5 class="title">VFS Global:</h5>
                            <p>Once the applicant receives the NOC, they
                                can apply for visa procedures at VFS within 15-20 days</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->

     <!--=====================================-->
     <div class="gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Documents Required</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="icon-20"></i>Resume</li>
                                <li><i class="icon-20"></i>10th Marksheet</li>
                                <li><i class="icon-20"></i>12th Marksheet</li>
                                <li><i class="icon-20"></i>Diploma Marksheet & Degree</li>
                                <li><i class="icon-20"></i>Bachelor Marksheet & Degree</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="icon-20"></i>Other Certification Marksheet</li>
                                <li><i class="icon-20"></i>Passport Copy (First & Last page)</li>
                                <li><i class="icon-20"></i>Passport Size Photo (With White Background)</li>
                                <li><i class="icon-20"></i>MOI (Medium of Instruction)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    
    <!-- Start Testimonial Area  -->
    <div class="testimonial-area-10 section-gap-equal edublink-animated-shape">
        <div class="container edublink-animated-shape">
            <div class="testimonial-heading-area">
                <div class="section-title section-center" data-sal-delay="50" data-sal="slide-up"
                    data-sal-duration="800">
                    <span class="pre-title pre-textsecondary">Testimonials</span>
                    <h2 class="title">What Our Students <br> Say</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="home-language-testimonial-activator swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-grid">
                            <div class="content">
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <p>"What I love about Avila is that the professors always push
                                    you to do and be better; they teach you how to be the best
                                    version of yourself and put you in the right path to achieve
                                    your dream career."</p>
                                <h5 class="title">Erika Vallone</h5>
                                <span class="subtitle">Communications Student at Avila</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-grid">
                            <div class="content">
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <p>"Avila University has transformed my life. The supportive faculty and hands-on learning
                                    have equipped me with skills to excel in my career and beyond."</p>
                                <h5 class="title">Jessica Carter</h5>
                                <span class="subtitle">Business Administration Graduate</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-grid">
                            <div class="content">
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <p>"At Avila, I found a community that genuinely cares about my success. The professors
                                    inspired me to aim higher and provided guidance every step of the way."</p>
                                <h5 class="title">Michael Anderson</h5>
                                <span class="subtitle">Psychology Major</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-thumbs testimonial-thumb-wrap">
                <div class="swiper-wrapper">
                    <div class="nav-thumb swiper-slide">
                        <div class="clint-thumb">
                            <img src="{{ asset('front/images/testimonial/testimonial-11.jpg') }}" alt="Testimonial"
                                loading="">
                        </div>
                    </div>
                    <div class="nav-thumb swiper-slide">
                        <div class="clint-thumb">
                            <img src="{{ asset('front/images/testimonial/testimonial-09.png') }}" alt="Testimonial"
                                loading="">
                        </div>
                    </div>
                    <div class="nav-thumb swiper-slide">
                        <div class="clint-thumb">
                            <img src="{{ asset('front/images/testimonial/testimonial-10.png') }}" alt="Testimonial"
                                loading="">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <span data-depth="2.5"></span>
                </li>
                <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <span data-depth=".8"></span>
                </li>
                <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape">
                </li>
                <li class="shape-5">
                    <span></span>
                </li>
            </ul>
        </div>

    </div>
    <!-- End Testimonial Area  -->

    <!--=====================================-->
    <!--=       Counterup Area Start       	=-->
    <!--=====================================-->
    <div class="counterup-area-12 section-gap-equal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number primary-color">
                            <span class="odometer" data-odometer-final="7.8">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Student Enrolled</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number secondary-color">
                            <span class="odometer" data-odometer-final="5.2">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Class Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number extra02-color">
                            <span class="odometer" data-odometer-final="98">.</span><span>%</span>
                        </h2>
                        <h6 class="title">Satisfaction Rate</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12 border-none">
                        <h2 class="counter-item count-number extra05-color">
                            <span class="odometer" data-odometer-final="200">.</span><span>+</span>
                        </h2>
                        <h6 class="title">Top Instructors</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=       CTA Banner Area Start      =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="modern-schooling-cta-wrapper edu-cta-banner-area-6 bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="{{ asset('front/images/cta/cta-girl-bg.webp') }}" alt="girl image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="2.5" src="{{ asset('front/images/cta/shape-43.png') }}" alt="shape">
                            </li>
                            <li class="shape-02" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img src="{{ asset('front/images/cta/shape-42.png') }}" alt="shape">
                            </li>
                            <li class="shape-03 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="-2" src="{{ asset('front/images/cta/shape-40.png') }}" alt="shape">
                            </li>
                            <li class="shape-04 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="2" src="{{ asset('front/images/cta/shape-38.png') }}" alt="shape">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Visit the Avila University <br> Official Website for More <br> Information
                            </h2>
                            <a href="https://www.avila.edu/" target="_blank" class="edu-btn btn-primary">Explore Avila
                                University<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-05 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                        <img data-depth="1.5" src="{{ asset('front/images/cta/shape-39.png') }}" alt="shape">
                    </li>
                    <li class="shape-06" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                        <img src="{{ asset('front/images/cta/cta-round.svg') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
@endsection
