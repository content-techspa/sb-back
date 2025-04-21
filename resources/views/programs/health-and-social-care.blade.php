@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start -->

    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Health and Social care</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated
                            Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Health and Social care</li>
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

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}} 
                            <h2 class="title">Level 4 Diploma in <span class="color-secondary"> Health </span>and Social Care
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 4 Diploma in Health and Social Care program offers a career path for those looking to advance their management and care skills in the industry. The goal is to provide students with the skills needed by businesses worldwide.
                            </p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-01.webp') }}"
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
    <!--  About Area End  -->

    <!--  FAQ Area Start  -->
        <div class="edu-faq-area faq-style-5 gap-bottom-equal">
            <div class="container">
                <div class="row g-5 row--45">
                    <div class="col-lg-6">
                        <div class="edu-faq-gallery">
                            <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <img src="{{asset('front/img/programs/health-and-social-care/health-and-social-care-07.webp')}}" alt="Faq Images">
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="{{asset('front/images/faq/shape-35.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{asset('front/images/faq/shape-36.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-3" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img src="{{asset('front/images/faq/shape-34.png')}}" alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="edu-faq-content">
                            <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                {{-- <span class="pre-title">FAq’s</span> --}}
                                <h2 class="title"> Prepares individuals for <span class="color-secondary">careers </span> in health and  social care </h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                             
                            </div>
                            <div class="faq-accordion" id="faq-accordion" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Pursuing excellence
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Develop self-reflective, analytical, and transferable skills for both private and public sectors.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                Practice-led, knowledge-applied
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Enhance critical thinking and problem-solving skills for flexible, creative practitioners.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                Interdisciplinary
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Equip learners to adapt to changing needs, paraprofessional roles, and inter-professional working.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
                                                Employability-driven
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Provide the knowledge, skills, and behaviors needed for careers in health and social care.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">
                                                Internationalization
                                            </button>
                                        </h5>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Understand the impact of diverse and cultural issues within the sector.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="{{asset('front/images/about/shape-02.png')}}" alt="Shape Images">
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
    <!--  FAQ Area End  -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Global Career <span class="color-secondary"> Opportunities <br>
                            </span>with Level 4 Diploma</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <p>The Level 4 Diploma in Health and Social Care offers realistic career opportunities worldwide, tailored for 21st-century employment markets.</p>
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
                            <i class="icon-45"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Progress to Level 5 Diploma</h4>
                            <p>Completing the Level 4 Diploma allows learners to advance to the Level 5 Diploma in Health and Social Care.
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
                            <p>The Level 4 Diploma enables learners to enter the second year of undergraduate studies in health and social care.</p>
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
                            <p> Graduates can enter directly into employment in associated health and social care professions.</p>
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
    <div class="edu-campus-area ">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-04.webp') }}"
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
                                <div class="features-box color-extra04-style">
                                    <div class="icon">
                                        <i class="icon-51 watch-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title"> A level (or equivalent) or</h5>
                                    </div>
                                </div>
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

    <!-- About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Health </span> and Social Care </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 5 Diploma in Health and Social Care program offers a career path for learners to enhance their management and care skills in the sector. It is a recognized UK qualification designed to develop globally sought-after skills and support career advancement into senior roles.
                            </p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-02.webp') }}"
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
    <!-- About Area End  -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title"> Global Career Opportunities with <span class="color-secondary"> Level 5 
                            </span> Diploma</h2>
                    </div>
                    <div class="right-content about-content">
                        <p>The Level 5 Diploma in Health and Social Care offers realistic career opportunities worldwide, designed for 21st-century job markets.</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="icon-45"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Qualification for CQC Manager Positions</h4>
                            <p>The Level 5 Diploma (NVQ/RFQ) meets CQC requirements for manager roles, covering character, competence, skills, and experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-34"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"> Pathway to Final Year of UG Degree</h4>
                            <p> Completing Level 4 & 5 Diplomas enables learners to progress to the final year of an undergraduate degree in health and social care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Direct Employment in Health and Social Care</h4>
                            <p>Graduates can enter directly into employment in associated health and social care professions.</p>
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
    <div class="edu-campus-area ">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-05.webp') }}"
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

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-03.webp') }}"
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
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 7 Diploma in <span class="color-secondary"> Health </span>
                                and Social Care</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 7 Postgraduate Diploma in Health and Social Care Management provides a deep knowledge of policy, management theory, and exercise in health and social care. It prepares learners to tackle the industry's challenges and become effective managers.
                            </p>
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
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title"> Essential Skills for <br> Accounting and<span class="color-secondary"> Finance
                            </span> Managers</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        {{-- <h5>Course objectives include</h5>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Developing analytical and evaluative skills for public and private sectors.</li>
                            <li>Enhancing business abilities for various industries.</li>
                            <li>Fostering self-awareness, societal, and interpersonal skills.</li>
                            <li>Promoting critical thinking, intellectual growth, and transferable skills.</li>
                        </ul> --}}
                        <p>Managers should be aware of potential problems, evaluate their effects, and decide how to
                            respond. To assist in their role, they need a basic understanding of available facilities and
                            services, but they need only be experts in some areas of business.</p>
                        <p>The "Accounting and Finance" course is designed to help managers and accountants improve their
                            skills and prepare for higher roles within their organizations.</p>
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
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Enhance Career Prospects</h4>
                            <p>Enhance career prospects in health and social care policy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-46"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Develop leadership and management Skills</h4>
                            <p>Develop leadership and management skills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Worldwide Universities for a Master's Degree</h4>
                            <p> Progress to worldwide universities for a Master's Degree with advanced standing.</p>
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
                                <img src="{{ asset('front/img/programs/health-and-social-care/health-and-social-care-06.webp') }}"
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
                                        <h5 class="title">Bachelor Degree (or equivalent) or</h5>
                                    </div>
                                </div>
                                <div class="features-box color-extra05-style">
                                    <div class="icon">
                                        <i class="icon-25 fitness-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 6 qualification (or equivalent) or</h5>
                                    </div>
                                </div>
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Mature applicant with A level (or equivalent) and work experience
                                        </h5>
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
@endsection
