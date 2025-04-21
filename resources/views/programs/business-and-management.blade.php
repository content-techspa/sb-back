@extends('template.template')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Business and Management</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Business and Management</li>
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

    <!-- Breadcrumb Area End -->

    <!-- About Area Start -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 3 Diploma in <span class="color-secondary"> Business </span> Management
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 3 Diploma in Business and Management provides a career pathway for students looking
                                to enhance their core skills in the business sector as an alternative to the Access to
                                Higher Education Diploma. This recognized UK qualification equips students with the skills
                                required by businesses globally.
                            </p>
                            <p>Program assessment will be based on practical assignments instead of exams to accurately
                                simulate real working environments.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/business-management/business-management-01.webp') }}"
                            alt="About Image">


                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-38.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.8" src="{{ asset('front/images/about/shape-04.png') }}" alt="Shape">
                            </li>
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
    <!-- About Area End -->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-6 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Global Job Opportunities</h4>
                            <p>The Level 3 Diploma in Business and Management offers global job opportunities for the
                                21st-century employment markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Pathway to Higher Education</h4>
                            <p>The Level 3 Diploma will prepare students for the Level 4 Diploma or the first year of a
                                three-year Honors Degree at a UK University.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">University Entry Preparation</h4>
                            <p>The Level 3 Diploma in Business and Management prepares students for entry into their first
                                year of university study.</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        {{-- <ul class="shape-group">
                <li class="shape-1 scene">
                    <span data-depth=".8"></span>
                </li>
                <li class="shape-2 scene">
                    <img data-depth="-5" src="{{asset('front/images/about/shape-13.png')}}" alt="shape">
                </li>
                <li class="shape-3">
                    <img data-parallax='{"x": 0, "y": 100}' src="{{asset('front/images/faq/shape-12.png')}}" alt="shape">
                </li>
            </ul> --}}
    </div>

    <!-- End Categories Area  -->

    <!-- Start Campus Area  -->
    <div class="edu-campus-area gap-top-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/business-management/business-management-05.webp') }}"
                                    alt="Campus">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-21.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="-1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                    <div class="campus-content">
                        <div class="inner">
                            <div class="section-title section-left">
                                <span class="pre-title">Entry Requirements</span>
                                <h3 class="title"> Entrance qualifications required </h3>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="features-list">
                                <div class="features-box color-secondary-style">
                                    <div class="icon">
                                        <i class="icon-34 watch-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 2 qualification (or equivalent) or</h5>
                                    </div>
                                </div>
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Mature applicant with work experience</h5>
                                    </div>
                                </div>
                                <div class="features-box color-extra05-style">
                                    <div class="icon">
                                        <i class="icon-25 fitness-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Minimum age to register: 16</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="shape-group">
                            <li class="shape-4 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-5 scene">
                                <span data-depth="2"></span>
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-25.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Area  -->

    <!-- About Area Start -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 4 Diploma in <span class="color-secondary"> Business </span>
                                Management </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 4 Diploma in Business Management program aims to enhance students' managerial
                                skills and prepare them for a career in the business sector. This UK-recognized
                                qualification equips students with skills necessary for global business.
                            </p>
                            <p>To better simulate real working conditions, program assessment is based on practical
                                assignments instead of exams.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/business-management/business-management-02.webp') }}"
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

            </div>
            <ul class="shape-group">
                <li class="shape-1 circle scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span data-depth="-2.3"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 ">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">

                        <h2 class="title"> Prepares for business <br> careers and<span class="color-secondary"> senior
                            </span> roles.</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <h5>Course objectives include</h5>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Develop analytical skills for public and private sectors.</li>
                            <li>Enhance business abilities for various industries.</li>
                            <li>Foster self-awareness for societal and interpersonal development.</li>
                            <li>Promote critical thinking, intellectual growth, and transferable skills.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <h2 class="title">Careers</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p class="description">The Level 4 Diploma in Business Management provides access to professional
                            global
                            opportunities in the 21st-century global job markets.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Level 5 Diploma in Business Management</h4>
                            <p>Advances knowledge and skills for higher-level roles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Second Year of Undergraduate Study</h4>
                            <p>Prepares students for the second year of a business degree.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="icon-8"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Direct Employment Opportunities</h4>
                            <p>Qualifies learners for immediate entry into related professions.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 mt-5">
                        <ul class="features-list mt-5">
                            <li>All options open to learners who successfully complete the Level 4 Diploma in Business
                                Management.
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <ul class="features-list mt-5">
                            <li>The Level 4 Diploma in Business Management qualification prepares students for entry into
                                universities in their second year.</li>
                        </ul>
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

    <!-- Start Campus Area  -->
    <div class="edu-campus-area gap-top-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/business-management/business-management-06.webp') }}"
                                    alt="Campus">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-21.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="-1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                    <div class="campus-content">
                        <div class="inner">
                            <div class="section-title section-left">
                                <span class="pre-title">Entry Requirements</span>
                                <h3 class="title"> Entrance qualifications required </h3>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="features-list">
                                <div class="features-box color-secondary-style">
                                    <div class="icon">
                                        <i class="icon-34 watch-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 3 qualification (or equivalent) or</h5>
                                    </div>
                                </div>
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Mature applicant with GCSE (or equivalent) and work experience
                                        </h5>
                                    </div>
                                </div>
                                <div class="features-box color-extra05-style">
                                    <div class="icon">
                                        <i class="icon-25 fitness-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Minimum age to register: 18</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="shape-group">
                            <li class="shape-4 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-5 scene">
                                <span data-depth="2"></span>
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-25.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Area  -->

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/business-management/business-management-03.webp') }}"
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
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Business </span>
                                Management </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 5 Diploma in Business Management program offers students an opportunity to enhance
                                their managerial skills as an alternative to the second year of a degree program. This UK
                                qualification aims to help students learn the skills required by businesses worldwide.
                            </p>
                            <p>The program assessment is done through practical assignments without exams to more accurately
                                reflect the real working environment.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>

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
    <!--  About Area End  -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 ">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title"> Prepares for business <br> careers and<span class="color-secondary"> senior
                            </span> roles.</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <h5>Course objectives include</h5>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Developing analytical and evaluative skills for public and private sectors.</li>
                            <li>Enhancing business abilities for various industries.</li>
                            <li>Fostering self-awareness, societal, and interpersonal skills.</li>
                            <li>Promoting critical thinking, intellectual growth, and transferable skills.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                {{-- <p class="description">The Level 4 Diploma in Business Management provides access to professional global
                    opportunities in the 21st-century global job markets.</p> --}}
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Level 5 Diploma in Business Management</h4>
                            <p>The Level 5 Diploma in Business Management offers realistic international career
                                opportunities suited for today's job market.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Second Year of Undergraduate Study</h4>
                            <p>With the Level 4 & 5 Diploma, students can advance to the final year of their undergraduate
                                program or find related employment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="icon-8"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Direct Employment Opportunities</h4>
                            <p>The Level 4 & 5 Diploma prepares students for university admission in their final year.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 mt-5">
                        <ul class="features-list mt-5">
                            <li>All options open to learners who successfully complete the Level 4 Diploma in Business Management.
                            </li>                          
                        </ul>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <ul class="features-list mt-5">
                            <li>The Level 4 Diploma in Business Management qualification prepares students for entry into
                                universities in their second year.</li>
                        </ul>
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

    <!-- Start Campus Area  -->
    <div class="edu-campus-area gap-lg-top-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/business-management/business-management-07.webp') }}"
                                    alt="Campus">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-21.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="-1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                    <div class="campus-content">
                        <div class="inner">
                            <div class="section-title section-left">
                                <span class="pre-title">Entry Requirements</span>
                                <h3 class="title"> Entrance qualifications required </h3>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="features-list">
                                <div class="features-box color-secondary-style">
                                    <div class="icon">
                                        <i class="icon-34 watch-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 4 qualification (or equivalent) or</h5>
                                    </div>
                                </div>
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Mature applicant with GCSE (or equivalent) and work experience
                                        </h5>
                                    </div>
                                </div>
                                <div class="features-box color-extra05-style">
                                    <div class="icon">
                                        <i class="icon-25 fitness-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Minimum age to register: 18</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="shape-group">
                            <li class="shape-4 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-5 scene">
                                <span data-depth="2"></span>
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-25.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Area  -->

    {{-- Level 7 Diploma start --}}
    <!-- About Area Start -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/business-management/business-management-04.webp') }}"
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
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 7 Diploma in <span class="color-secondary"> Strategic Management
                                </span>
                                & Leadership </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The MBA Advanced Entry and Level 7 Diploma in Strategic Management and Leadership are
                                designed to help students navigate the complexities of strategic management and leadership
                                in a business setting and improve their capacity to drive organizational change.
                            </p>
                            <p>As part of the Level 7 program, learners will critically examine management tools and models
                                relevant to the 21st-century corporate environment</p>
                            <p>To more accurately reflect the real working environment the program assessment is through
                                practical assignments, without exams.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>

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
    <!-- About Area End -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title"> Level 7 Diploma in <br><span class="color-secondary"> Strategic Management
                            </span> and Leadership</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <p>Develops advanced management and leadership skills to translate strategy into effective
                            performance. Suitable for senior students, it emphasizes practical abilities and current
                            practices in the workplace.</p>
                    </div>
                </div>
            </div>
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>

            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Global Career Opportunities</h4>
                            <p>The Level 7 Diploma in Strategic Management and Leadership offers great prospects for global
                                job markets.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Pathway to Master's Degree</h4>
                            <p>This diploma prepares learners to enrol in a university, complete a dissertation, and earn a
                                master's degree.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Advanced Management Roles</h4>
                            <p>The Level 7 Diploma qualifies learners for senior management and leadership positions across
                                various industries.</p>
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

    <!-- Start Campus Area  -->
    <div class="edu-campus-area gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/business-management/business-management-08.webp') }}"
                                    alt="Campus">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-21.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="-1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                    <div class="campus-content">
                        <div class="inner">
                            <div class="section-title section-left">
                                <span class="pre-title">Entry Requirements</span>
                                <h3 class="title"> Candidates must meet one of the following criteria </h3>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="features-list">
                                <div class="features-box color-secondary-style">
                                    <div class="icon">
                                        <i class="icon-34 watch-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Bachelor’s Degree (or equivalent)</h5>
                                    </div>
                                </div>
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 6 qualification (or equivalent)
                                        </h5>
                                    </div>
                                </div>
                                <div class="features-box color-extra05-style">
                                    <div class="icon">
                                        <i class="icon-25 fitness-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Mature applicant with A level (or equivalent) and work
                                            experience</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="shape-group">
                            <li class="shape-4 scene">
                                <span data-depth=".8"></span>
                            </li>
                            <li class="shape-5 scene">
                                <span data-depth="2"></span>
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-25.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Area  -->
    <!--=====================================-->

    <!--=       Brand Area Start            =-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-2 mt-5">
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
    <!-- End Brand Area  -->
    <!--=====================================-->
@endsection
