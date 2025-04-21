@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->

    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Education and Training</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated
                            Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Education and Training</li>
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
    <!--  Breadcrumb Area End  -->

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Education </span>and
                                Training
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>This is a competence-based qualification that requires learners to demonstrate the skills and
                                knowledge needed to work in a specific industry. Learners enrolled in this qualification will be assessed in the workplace or a realistic work environment.
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
                            src="{{ asset('front/img/programs/education-and-training/education-and-training-01.webp') }}"
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

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Aim and Objective</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Teacher Training for <br> <span class="color-secondary"> Diverse
                            </span>Contexts</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <p>The Level 5 Diploma in Education and Training prepares trainee teachers for diverse educational
                            contexts, equipping them with the skills and knowledge needed to excel in their teaching
                            careers.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5 about-content">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="icon-47"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">For Aspiring Teachers</h4>
                            <p>Designed for individuals not currently teaching, who can fulfill practice, observation, and
                                assessment requirements for the qualification.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-46"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"> For Current Educators</h4>
                            <p>Suitable for learners already teaching or training, including beginners, who can meet
                                practice, observation, and assessment requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-63"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">For Assessors Seeking Qualification</h4>
                            <p> The program is designed for educators seeking a respected teaching certification, with a
                                focus on meeting their specific requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Occupational Competence Confirmation</h4>
                            <p> Confirms occupational competence in a teaching role within the workplace, ensuring readiness
                                and qualification for teaching positions.</p>
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

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 gap-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="icon-45"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Career Opportunities in Education</h4>
                            <p>Whether teaching in schools, colleges, or running specialist training courses, the Level 5
                                Diploma in Education and Training broadens your career prospects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-46"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"> Specialist Skills for Education Sectors</h4>
                            <p>Employers in schools, colleges, private companies, charities, NGOs, and local government seek
                                professionals with the specialist skills gained from the Level 5 Diploma in Education and
                                Training.</p>
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
    {{-- <div class="edu-campus-area gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/education-and-training/education-and-training-02.webp') }}"
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
                                <h3 class="title"> Qualifications requirements </h3>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            
                            <div class="about-content">
                                <ul class="features-list" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <li>Intended for students at least 19 years old.</li>
                                    <li>No specific prerequisites are required.</li>
                                    <li>Useful for students with a Level 4 Certificate in Education and Teaching.</li>
                                    <li>Centres are responsible for ensuring suitability for learners' age and ability.</li>
                                    <li>Developed to be accessible without arbitrary entry barriers.</li>
                                    <li>Available through a centre interview.</li>
                                    <li>Individual evaluation for each student.</li>
                                </ul>
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
    </div> --}}
    <!-- End Campus Area  -->

    <!-- Start CTA Area  -->
    <div class="home-one-cta-two cta-area-1 section-gap-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Contact Us</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>For more information, email us at <a
                        href="mailto:mg@antaifintechglobal.com">mg@antaifintechglobal.com</a>. <br>Your future in adult care
                    leadership begins here!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="home-one-cta edu-cta-box bg-image">
                        <div class="inner">
                            <div class="content text-md-end">
                                
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a
                                        href="mailto:mg@antaifintechglobal.com">mg@antaifintechglobal.com</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+44 7441 340547">+44 7441 340547</a></h3>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene">
                                <img data-depth="2" src="{{ asset('front/images/cta/shape-06.png') }}" alt="shape">
                            </li>
                            <li class="shape-02 scene">
                                <img data-depth="-2" src="{{ asset('front/images/cta/shape-12.png') }}" alt="shape">
                            </li>
                            <li class="shape-03 scene">
                                <img data-depth="-3" src="{{ asset('front/images/cta/shape-04.png') }}" alt="shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area  -->
    
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
