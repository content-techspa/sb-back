@extends('template.template')
@section('content')
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                            Discover Your Path to <br />
                            <span class="color-secondary">Excellence</span> at IBAT College Dublin
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            Shape Your Future with Industry-Focused Programs and World-Class
                            Education.
                        </p>
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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/ibat-college/ibat-college-cover.webp') }}"
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
                <h2 class="title">Why Choose IBAT College Dublin?</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>
                    Empowering students with career-focused programs, expert tutors, <br />
                    flexible learning, and a vibrant city-center campus.
                </p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6">
                    <div class="icon icon-course">
                        <img class="svgInject" src="{{asset('front/images/svg-icons/online-class.svg')}}" alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Diverse Programmes</h5>
                        <p>
                            Explore a wide range of career-focused courses designed to shape your
                            future.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6">
                    <div class="icon icon-tag">
                        <img class="svgInject" src="{{asset('front/images/svg-icons/instructor.svg')}}" alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Top Instructors</h5>
                        <p>
                            Learn from seasoned industry professionals who bring real-world
                            expertise to the classroom.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject" src="{{asset('front/images/svg-icons/certificate.svg')}}" alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Flexible Learning</h5>
                        <p>
                            Balance life and learning with flexible study options tailored to suit
                            your schedule.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject" src="{{asset('front/images/svg-icons/user.svg')}}" alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Small Class Sizes</h5>
                        <p>
                            Benefit from personalized attention and one-on-one support to help you
                            succeed.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="{{asset('front/images/about/shape-37.png')}}" alt="Shape" />
                </li>
                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="{{asset('front/images/others/shape-41.png')}}" alt="Shape" />
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
                            src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/ibat-01.webp')}}" alt="About Image" />
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/ibat-02.webp')}}" alt="About Image" />
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{asset('front/images/about/shape-13.png')}}" alt="Shape" />
                            </li>
                            <li class="shape-2" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img class="rotateit" src="{{asset('front/images/faq/shape-04.png')}}" alt="Shape" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">About Us</span>
                            <h2 class="title">
                                Empowering Students for Success in
                                <span class="color-primary">Business</span> and IT
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">
                                    About IBAT
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission"
                                    type="button" role="tab" aria-selected="false">
                                    Our Mission
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision"
                                    type="button" role="tab" aria-selected="false">
                                    Our Vision
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>
                                    IBAT College Dublin offers specialized programs in Business, IT, and
                                    English Language, located in Dublin’s city center. We provide a
                                    supportive learning environment, combining academic excellence with
                                    industry experience, to equip students with the skills needed for
                                    success in a competitive global marketplace.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <p>
                                    We deliver high-quality, industry-relevant education that empowers
                                    students to achieve their academic and professional goals, offering
                                    flexible, accessible learning that prepares graduates with practical
                                    skills and critical thinking for career success.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <p>
                                    To be a leading provider of education bridging academic theory and
                                    real-world practice, fostering a diverse global community and
                                    developing a skilled workforce for the industries of tomorrow.
                                </p>
                            </div>
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
    <div class="edu-course-area course-area-3 section-gap-large bg-lighten04">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Programmes</span>
                <h2 class="title">Academic Programmes</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="isotope-wrapper">
                <div class="isotop-button isotop-filter">
                    <button data-filter=".undergraduate" class="is-checked">
                        <span class="filter-text">Undergraduate Programmes</span>
                    </button>
                    <button data-filter=".graduate">
                        <span class="filter-text">Postgraduate Programmes</span>
                    </button>
                </div>
                <div class="row g-5 isotope-list">
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/programmes/bachelor-of-business.webp')}}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Business</span>
                                    <h5 class="title">
                                       Bachelor of Business L7 – (Full-time)
                                    </h5>
                                    <p>Comprehensive business fundamentals, practical skills, full-time Level 7 degree.</p>
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
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/programmes/bachelor-of-arts.webp')}}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Art</span>
                                    <h5 class="title">
                                            Bachelor of Arts (Honours) in Business L8 (Full-time)
                                    </h5>
                                    <p>Advanced business studies, strategic thinking, full-time Level 8 degree.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/programmes/certificate-in-access-for-higher-education.webp')}}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Business</span>
                                    <h5 class="title">
                                        Certificate in Access for Higher Education
                                            (Full–Time)
                                    </h5>
                                    <p>Prepares students for higher education through foundational academic skills.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/programmes/msc-in-business-management-pg.webp')}}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Business</span>
                                    <h5 class="title">
                                        MSc in Business Management (Full-time)
                                    </h5>
                                    <p>Master's degree focusing on advanced business management strategies and skills.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{asset('front/img/study-abroad/exclusive-programs/ibat-college/programmes/msc-in-marketing-pg.webp')}}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Business</span>
                                    <h5 class="title">
                                        MSc in Marketing (Full–Time)
                                    </h5>
                                    <p>Master's degree in innovative marketing techniques and strategic market analysis.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <img class="d-block-shape-light" data-depth="2" src="{{asset('front/images/others/map-shape-3.png')}}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2" src="{{asset('front/images/others/3-Home-1.png')}}" alt="Shape" />
            </li>
            <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="{{asset('front/images/others/map-shape-3.png')}}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2" src="{{asset('front/images/others/dark-map-shape-3.png')}}"
                    alt="Shape" />
            </li>
        </ul>
    </div>
    <!-- End Course Area -->

    <x-studyabroad-contact />

    <!--=====================================-->
    <!--=       Counterup Area Start       	=-->
    <!--=====================================-->
    <div class="counterup-area-12 gap-bottom-equal">
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
                            <h2 class="title">Visit the IBAT College <br> Official Website for More <br> Information
                            </h2>
                            <a href="https://www.ibat.ie/" target="_blank" class="edu-btn btn-primary">Explore IBAT<i class="icon-4"></i></a>
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
