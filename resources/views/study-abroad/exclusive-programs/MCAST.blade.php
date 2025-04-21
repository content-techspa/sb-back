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
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Embark on a
                            Transformative <span class="color-secondary">Journey </span>
                            at MCAST</h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            MCAST offers top vocational training in technology, arts, and health sciences, blending
                            practical and theoretical education with industry connections.</p>
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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast.webp') }}" alt="flag-boy Image">
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
                <h2 class="title">Benefits of Studying at MCAST</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>MCAST offers a range of features that make it an ideal choice for <br> students seeking high-quality
                    vocational and professional education.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6 ">
                    <div class="icon icon-course">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/free-transport.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Free Transport</h5>
                        <p>Free transportation for MCAST students, making campus travel and exploring Malta convenient and
                            cost-free.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 ">
                    <div class="icon icon-tag">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/free-medical.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Free Medical Services</h5>
                        <p>Access free medical services, ensuring your health and well-being during your studies.</p>
                    </div>
                </div>
                <div class="features-box features-style-6  feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/low-living-cost.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Low Cost of Living</h5>
                        <p>Enjoy Malta’s low cost of living, typically 300-400 euros per month, making your stay affordable.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/flexible-fee.svg') }}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Flexible Fee Payment</h5>
                        <p>Pay 50% before obtaining a visa and 50% after, simplifying your financial planning.</p>
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
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast-02.webp') }}" alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast-03.webp') }}"
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
                            <h2 class="title">Discover MCAST <span class="color-primary"><br>Your Path </span> to
                                Excellence</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">About MCAST</button>
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
                                <p>MCAST (Malta College of Arts, Science & Technology) is a premier educational institution
                                    dedicated to providing high-quality vocational and professional education. With a
                                    diverse range of courses and state-of-the-art facilities, MCAST equips students with the
                                    skills and knowledge needed for successful careers in various industries.</p>
                                <ul class="features-list">
                                    <li>Offers hands-on, practical learning experiences.</li>
                                    <li>Boasts a vibrant and inclusive campus community.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <p>Our mission at MCAST is to empower students through innovative education and training,
                                    fostering their personal and professional development. We are committed to excellence in
                                    teaching, industry collaboration, and community engagement, ensuring our students are
                                    well-prepared for the challenges of the modern workforce.</p>
                                <ul class="features-list">
                                    <li>Focuses on student-centered learning and individual growth.</li>
                                    <li>Promotes continuous improvement and adaptation to industry trends.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <p>MCAST envisions being a leading institution in vocational and professional education,
                                    recognized globally for our quality, innovation, and industry partnerships. We strive to
                                    create a dynamic learning environment that inspires lifelong learning, creativity, and
                                    social responsibility, shaping the future leaders of tomorrow.</p>
                                <ul class="features-list">
                                    <li>Aims to set the benchmark for vocational education excellence.</li>
                                    <li>Aspires to build a network of global industry and academic partnerships.</li>
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
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="home-nine-course edu-course-area course-area-10 section-gap-equal">
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
                                    <span class="duration"><i class="icon-61"></i>1 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Diploma in Electrical Installations</a>
                                </h6>
                                <p class="text"><strong>Tuition Fee:</strong> 7200 Euros</p>
                                <p class="text"><strong>Offer Letter Fee(Non-refundable):</strong> 400 Euros</p>
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
                                    <span class="duration"><i class="icon-61"></i>1 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Diploma in Electrical Engineering</a>
                                </h6>
                                <p class="text"><strong>Tuition Fee:</strong> 7200 Euros</p>
                                <p class="text"><strong>Offer Letter Fee(Non-refundable):</strong> 400 Euros</p>
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
                                    <span class="duration"><i class="icon-61"></i>1 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Diploma in Mechanical Engineering</a>
                                </h6>
                                <p class="text"><strong>Tuition Fee:</strong> 7200 Euros</p>
                                <p class="text"><strong>Offer Letter Fee(Non-refundable):</strong> 400 Euros</p>
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
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/courses/course-04.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>1 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Diploma in Air Conditioning(HVAC)</a>
                                </h6>
                                <p class="text"><strong>Tuition Fee:</strong> 7200 Euros</p>
                                <p class="text"><strong>Offer Letter Fee(Non-refundable):</strong> 400 Euros</p>
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
                                    <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/courses/course-05.webp') }}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>1 Year</span>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="#">Diploma in Automotive Engineering </a>
                                </h6>
                                <p class="text"><strong>Tuition Fee:</strong> 7500 Euros</p>
                                <p class="text"><strong>Offer Letter Fee(Non-refundable):</strong> 400 Euros</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                {{-- <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 course-style-10">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/images/course/course-60.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="course-price">Form: $100.00</div>
                                    <div class="flag-wrap">
                                        <a class="flag-content" href="#"><img src="{{asset('front/images/others/flag-6.jpg')}}" alt="flag images"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title">
                                        <a href="#">Japanese Courses</a>
                                    </h6>
                                    <p class="text">28 Programs</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                <!-- End Single Course  -->
            </div>
            {{-- <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    <a href="#" class="edu-btn">Browse more courses <i class="icon-4"></i></a>
                </div> --}}
            <ul class="shape-group">
                <li class="shape-3">
                    <img class="rotateit" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                </li>
                <li class="shape-4">
                    <span></span>
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="{{ asset('front/images/others/3-Home-1.png') }}"
                    alt="Shape">
            </li>
            <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape">
                <img class="d-none-shape-dark" data-depth="2"
                    src="{{ asset('front/images/others/dark-map-shape-3.png') }}" alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Course Area -->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-1 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">Categories</span> --}}
                <h2 class="title">Entry <span class="color-primary">Requirements</span></h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/electrical-installations.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-9"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Diploma in Electrical Installations</h5>
                            </a>
                            <p>10th with 2 years of ITI diploma or 12th with 1 year of ITI diploma or 12th with Non-medical
                                with 50% marks in English. Gap of 8-10 years accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/electrical-engineering.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-10"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Diploma in Electrical Engineering</h5>
                            </a>
                            <p>10th with 2 years of ITI diploma or 12th with 1 year of ITI diploma or 12th with Non-medical
                                with 50% marks in English. Gap of 8-10 years accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/mechanical-engineering.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-11"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Diploma in Mechanical Engineering</h5>
                            </a>
                            <p>10th with 2 years of ITI diploma or 12th with 1 year of ITI diploma or 12th with Non-medical
                                with 50% marks in English. Gap of 8-10 years accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-extra05-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/air-conditioning.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-12"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Diploma in Air Conditioning(HVAC)</h5>
                            </a>
                            <p>10th with 2 years of ITI diploma or 12th with 1 year of ITI diploma or 12th with Non-medical
                                with 50% marks in English. Gap of 8-10 years accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-1 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/svg/automative-engineering.svg') }}"
                                alt="animated icon">
                            <!-- <i class="icon-9"></i> -->
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Diploma in Automotive Engineering</h5>
                            </a>
                            <p>10th with 2 years of ITI diploma or 12th with 1 year of ITI diploma or 12th pass from any
                                stream with 50% marks in English. Gap of 8-10 years accepted.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->

    <!--=====================================-->
    <!--=       	FAQ Area Start      	=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-1 faq-style-6">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">FAq’s</span>
                            <h2 class="title">Fraquently Asked <br> Questions.</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            What types of courses does MCAST offer?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>MCAST offers over 180 full-time and 300 part-time vocational courses in
                                                fields like technology, arts, business, health sciences, and engineering,
                                                providing both practical skills and theoretical knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Are scholarships available for international students at MCAST?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, MCAST offers scholarships and financial aid for international students.
                                                Visit the MCAST website for details on eligibility and applications.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Can I work part-time while studying at MCAST?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, international students can work part-time. There are regulations on the
                                                number of hours allowed, which can be found on the MCAST and government
                                                websites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-left"
                            data-sal-duration="800">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/mcast/mcast-04.webp') }}"
                                alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 sal-animate" data-sal-delay="500" data-sal="fade"
                                data-sal-duration="200">
                                <span></span>
                            </li>
                            <li class="shape-2 sal-animate" data-sal-delay="500" data-sal="fade"
                                data-sal-duration="200">
                                <span></span>
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img class="rotateit" src="{{ asset('front/images/faq/shape-04.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-5 sal-animate" data-sal-delay="500" data-sal="fade"
                                data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/others/shape-39.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-10 section-gap-equal edublink-animated-shape">
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
                                <p>Studying at MCAST has been a transformative experience for me. The practical training and
                                    hands-on approach have equipped me with the skills I need to excel in my career. The
                                    faculty are incredibly supportive, and the facilities are top-notch. MCAST truly
                                    prepares you for the real world.</p>
                                <h5 class="title">Maria G.</h5>
                                <span class="subtitle">Student</span>
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
                                <p>As an international student, I found MCAST to be incredibly welcoming and inclusive. The
                                    courses are well-structured, and the opportunities for internships and real-world
                                    experience are invaluable. The free transport and low cost of living made my time in
                                    Malta even more enjoyable.</p>
                                <h5 class="title">Ahmed K.</h5>
                                <span class="subtitle">Student</span>
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
                                <p>Returning to education after a gap was daunting, but MCAST made the transition seamless.
                                    The flexible fee payment plan and access to free medical services provided great peace
                                    of mind. The supportive environment at MCAST helped me regain my confidence and succeed
                                    academically.</p>
                                <h5 class="title">Jane S.</h5>
                                <span class="subtitle">Student</span>
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

    </div> -->
    <!-- End Testimonial Area  -->
    <x-studyabroad-contact />
    <!--=====================================-->
    <!--=       Counterup Area Start       	=-->
    <!--=====================================-->
    <div class="counterup-area-12 section-gap-equal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number primary-color">
                            <span class="odometer" data-odometer-final="19.3">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Student Enrolled</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number secondary-color">
                            <span class="odometer" data-odometer-final="12.4">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Class Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number extra02-color">
                            <span class="odometer" data-odometer-final="100">.</span><span>%</span>
                        </h2>
                        <h6 class="title">Satisfaction Rate</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12 border-none">
                        <h2 class="counter-item count-number extra05-color">
                            <span class="odometer" data-odometer-final="300">.</span><span>+</span>
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
                            <h2 class="title">Visit the MCAST <br> Official Website for More <br> Information</h2>
                            <a href="https://mcast.edu.mt/" target="_blank" class="edu-btn btn-primary">Explore MCAST <i
                                    class="icon-4"></i></a>
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
