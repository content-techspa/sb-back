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
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Start Your
                            International
                            <span class="color-secondary">Journey </span>
                            Here!
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            International Scholarships Available</p>
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
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/avila-university-cover.webp') }}"
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
                <h2 class="title">Why Avila University?</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Avila University offers personalized education, innovative programs, and a supportive community, <br>
                    empowering students to achieve academic and career success.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6 ">
                    <div class="icon icon-course">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/icons/smart-class.webp') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Small Class Sizes</h5>
                        <p>With a 12:1 student-to-faculty ratio, Avila's
                            attentive faculty provide students with
                            personal attention and support.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 ">
                    <div class="icon icon-tag">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/icons/diversity.webp') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Diversity</h5>
                        <p>Avila's campus is home to students
                            from 18 countries.</p>
                    </div>
                </div>
                <div class="features-box features-style-6  feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/icons/accreditation.webp') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Accreditation</h5>
                        <p>The Higher Learning Commission
                            accredits Avila University.
                        </p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/icons/campus.webp') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Campus in Kansas City</h5>
                        <p>Kansas City is a vibrant metropolis with
                            world-class dining, shopping and
                            cultural attractions.</p>
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
                            src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/avila-01.webp') }}"
                            alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2"
                                    src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/avila-02.webp') }}"
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
                            <h2 class="title">About <span class="color-primary">Avila</span> University</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>Avila University offers students a global perspective while delivering a world-class
                                    education in the
                                    United States. With the diversity of the campus, students studying at Avila can
                                    experience different
                                    cultures and build global networks.</p>
                                <p>We offer various undergraduate and postgraduate programs in several subject areas.</p>
                                <p>Avila University offers accredited degrees that provide a competitive edge and open doors
                                    to global employment opportunities across industries.</p>
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

    {{-- <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-2 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Undergraduate</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Make your career by studying a subject you love</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Business Administration (B.S.B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-secondary-style">
                        <div class="icon">
                            <i class="icon-10 art-design"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Nursing (B.S.N.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra01-style">
                        <div class="icon">
                            <i class="icon-11 personal-development"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Radiologic Science (B.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-tertiary-style">
                        <div class="icon">
                            <i class="icon-12 health-fitness"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Psychology (B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra02-style">
                        <div class="icon">
                            <i class="icon-13 data-science"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Communication (B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra03-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Professional Health Science (B.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra04-style">
                        <div class="icon">
                            <i class="icon-15"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Criminology & Justice Studies (B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra05-style">
                        <div class="icon">
                            <i class="icon-16 computer-science"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Computer Science (B.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="icon">
                            <i class="icon-17 video-photography"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Cybersecurity (B.S.)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-2">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Graduate</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Make your career by studying a subject you love</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Healthcare Administration (M.B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-secondary-style">
                        <div class="icon">
                            <i class="icon-10 art-design"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Counseling Psychology (M.S.C.P)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra01-style">
                        <div class="icon">
                            <i class="icon-11 personal-development"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">International Business (M.B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-tertiary-style">
                        <div class="icon">
                            <i class="icon-12 health-fitness"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Organizational Development Master's (M.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra02-style">
                        <div class="icon">
                            <i class="icon-13 data-science"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Management (M.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra03-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Marketing (M.B.A.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra04-style">
                        <div class="icon">
                            <i class="icon-15"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Kinesiology (M.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra05-style">
                        <div class="icon">
                            <i class="icon-16 computer-science"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Psychology (M.S.)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="icon">
                            <i class="icon-17 video-photography"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Strategic Communication (M.A.)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  --> --}}

    <!-- Start Course Area  -->
    <div class="edu-course-area course-area-3 section-gap-large bg-lighten04">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Programmes</span>
                <h2 class="title">Study What You Love and Build Your Career</h2>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/business-administration-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Business Administration (B.S.B.A.)
                                    </h5>
                                    <p>Develop comprehensive business skills for strategic management and leadership roles.
                                    </p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/nursing-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Nursing (B.S.N.)
                                    </h5>
                                    <p>Intensive training for compassionate, skilled nursing and patient care.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/radiologic-science-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Radiologic Science (B.S.)</h5>
                                    <p>Technical and patient skills for diagnostic imaging and radiology.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/psycology-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Psychology (B.A.)</h5>
                                    <p> Explore human behavior, mental processes, and psychological research techniques.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/communication-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Communication (B.A.)</h5>
                                    <p> Master diverse media, public relations, and effective communication strategies.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/professional-health-science-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Professional Health Science (B.S.)</h5>
                                    <p>Equip with advanced healthcare knowledge, clinical skills, and professionalism.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/criminology-and-justice-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Criminology & Justice Studies (B.A.)</h5>
                                    <p>Analyze criminal behavior, justice systems, and societal impact studies.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/computer-science-program.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Computer Science (B.S.)</h5>
                                    <p>Technical expertise in programming, systems analysis, and software development.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/cybersecurity.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Cybersecurity (B.S.)</h5>
                                    <p>Focus on protecting data with cutting-edge information security techniques.</p>
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

                    <!-- Post Graduate Course  -->

                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/healthcare-mba-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Healthcare Administration (M.B.A.)</h5>
                                    <p>MBA focusing on leadership in healthcare management and administrative strategies.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/counselling-pcychology-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Counseling Psychology (M.S.C.P)</h5>
                                    <p>Master's in counseling psychology emphasizing therapy techniques and client assessment.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/international-mba-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">International Business (M.B.A.)</h5>
                                    <p>MBA program developing global business strategies and cross-cultural management skills.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/organizational-development-master-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Organizational Development Master's (M.S.)</h5>
                                    <p>Enhance change management and leadership skills in organizational settings.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/management-ma-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Management (M.A.)</h5>
                                    <p>Advanced study in effective management practices and leadership techniques.</p>
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
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/marketing-mba-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Marketing (M.B.A.)</h5>
                                    <p>MBA in marketing strategies, consumer behavior, and digital marketing.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/kinesiology-ms-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Kinesiology (M.S.)</h5>
                                    <p>Study human movement, exercise science, and wellness strategies.</p>
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
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/psychology-ms-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Psychology (M.S.)</h5>
                                    <p>Advanced research and application in cognitive and behavioral psychology.</p>
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
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/avila-university/programmes/strategic-communication-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">Strategic Communication (M.A.)</h5>
                                    <p>Master’s focusing on targeted messaging and communication campaign strategies.</p>
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
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2" src="{{ asset('front/images/others/3-Home-1.png') }}"
                    alt="Shape" />
            </li>
            <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2"
                    src="{{ asset('front/images/others/dark-map-shape-3.png') }}" alt="Shape" />
            </li>
        </ul>
    </div>
    <!-- End Course Area -->

    <!-- Start Categories Area  -->
    <!--=====================================-->
    <div class="edu-section-gap pricing-area-1">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Admission Requirements</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="tab-content-box pt-5">
                <div id="tab1" class="tab-slider-body">
                    <div class="row g-5 align-items-center justify-content-center " id="tab1"
                        class="tab-slider-body">
                        <div class="col-lg-5" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h6 class="title">Undergraduate Requirements</h6>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-item">
                                        <li><i class="icon-20"></i>Official high school transcripts</li>
                                        <li><i class="icon-20"></i>Minimum GPA of 2.5 or above (4.0 scale) *</li>
                                        <li><i class="icon-20"></i>Copy of passport</li>
                                        <li><i class="icon-20"></i>Verification of financial support
                                        </li>
                                        <li><i class="icon-20"></i>ACT score of 20 or SAT score of 1020 (CR-
                                            W+Math) or above (Avila's ACT college code
                                            2278 or SAT college code 6109)
                                            (optional basis academic requirement)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h6 class="title">Postgraduate Requirements</h6>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-item">
                                        <li><i class="icon-20"></i>Official transcripts</li>
                                        <li><i class="icon-20"></i>No GRE required
                                        </li>
                                        <li><i class="icon-20"></i>Copy of passport
                                        </li>
                                        <li><i class="icon-20"></i>Verification of financial support</li>
                                        <li><i class="icon-20"></i>Minimum GPA of 2.75 - MBA and
                                            3.0 - Psychology related Programs
                                            (Applicants with less than a 2.5 GPA will be
                                            considered for provisional admission)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!-- End Categories Area  -->

    <!--=====================================-->
    <section class="cart-page-area ">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">English Proficiency</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                        <tr>
                            <th scope="col" class="product-thumbnail"></th>
                            <th scope="col" class="product-title">IELTS</th>
                            <th scope="col" class="product-price">TOEFL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-thumbnail"> Undergraduate</td>
                            <td class="product-title"> 5.0 </td>
                            <td class="product-title">61</td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">Graduate</td>
                            <td class="product-title">6.0 (5.5 for Conditional Admit)</td>
                            <td class="product-title">73-75 (46-59 for Conditional Admit)</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--=====================================-->

    <!--=====================================-->
    <section class="cart-page-area gap-top-equal">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Tuition Fees & Scholarship <br> for International Students</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                        <tr>
                            <th scope="col" class="product-thumbnail"></th>
                            <th scope="col" class="product-title">Tuition
                                (per year)</th>
                            <th scope="col" class="product-price">Total
                                Tuition</th>
                            <th scope="col" class="product-price">Scholarship
                                (per year)</th>
                            <th scope="col" class="product-price">Total
                                Scholarship</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-thumbnail"> Undergraduate</td>
                            <td class="product-title"> $37,750</td>
                            <td class="product-title">$151,000</td>
                            <td class="product-title">$15,000
                            </td>
                            <td class="product-title">$60,000</td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">Graduate</td>
                            <td class="product-title">$10,800</td>
                            <td class="product-title">$21,600</td>
                            <td class="product-title">$2,500</td>
                            <td class="product-title">$5,000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--=====================================-->

    <!-- Start Testimonial Area  -->
    {{-- <div class="testimonial-area-10 section-gap-equal edublink-animated-shape">
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
                                <p>"Avila University has transformed my life. The supportive faculty and hands-on learning have equipped me with skills to excel in my career and beyond."</p>
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
                                <p>"At Avila, I found a community that genuinely cares about my success. The professors inspired me to aim higher and provided guidance every step of the way."</p>
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

    </div> --}}
    <!-- End Testimonial Area  -->
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
