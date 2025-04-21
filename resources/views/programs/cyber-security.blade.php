@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Cyber Security</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated
                            Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Cyber Security</li>
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
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 4 Diploma in <span class="color-secondary"> Cyber Security </span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 4 Diploma in Cyber Security is a 120-credit qualification designed for individuals
                                looking to advance their careers in cyber security and risk management. This program
                                supports both academic and professional development, helping learners achieve their
                                potential and contribute effectively to organizations across various industries. By
                                completing this diploma, learners will acquire essential cyber security skills required by
                                organizations globally, preparing them to become future leaders in the field.
                            </p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/img/programs/cyber-security/cyber-security-01.webp') }}"
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

    <!-- Start Why Chose Area  -->
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
                        <h2 class="title">Career <span class="color-secondary">Opportunities
                            </span>with<br>Level 4 Diploma in Cyber Security</h2>
                    </div>
                    <div class="right-content about-content">
                        <p>The Level 4 Diploma in Cyber Security prepares graduates for roles such as Cyber Security
                            Analyst, Risk Management Specialist, IT Security Consultant, Network Security Administrator, and
                            Incident Response Specialist. Graduates will be equipped to protect IT infrastructures, manage
                            cyber risks, provide security advice, secure networks, and respond to security incidents.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/cyber-security-analyst.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Cyber Security Analyst</h4>
                            <p>Monitor and protect an organization's IT infrastructure, identifying vulnerabilities and
                                implementing security measures to prevent breaches.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/risk-management-specialist.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Risk Management Specialist</h4>
                            <p>Assess and mitigate risks associated with cyber threats, developing strategies to protect
                                organizational assets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/it-security-cunsultant.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">IT Security Consultant</h4>
                            <p>Provide expert advice to businesses on securing their IT systems, conducting security audits,
                                and recommending improvements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/network-security-administrator.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Network Security Administrator</h4>
                            <p>Manage and secure an organization's network, ensuring safe and reliable connectivity while
                                preventing unauthorized access.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/incident-response-specialist.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Incident Response Specialist</h4>
                            <p>Respond to and manage security incidents, investigating breaches, and implementing measures
                                to prevent future occurrences.</p>
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
    <!-- End Why Chose Area  -->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-6">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title">Services</span> --}}
                <h2 class="title">Progression Pathways</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p class="text">Upon completing the Level 4 Diploma in Cyber Security, learners can progress to:
                </p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Advance to Level 5 Diploma in Cyber Security</h5>
                            <p>Continue your education by progressing to the Level 5 Diploma in Cyber Security, deepening
                                your knowledge and skills in advanced cyber security topics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-secondary">
                        <div class="icon computer-science">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Second Year of Undergraduate Study in Cyber Security</h5>
                            <p>Enroll directly into the second year of an undergraduate degree in Cyber Security, building
                                on your foundation to further your academic journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-extra02">
                        <div class="icon">
                            <img src="{{ asset('front/images/svg-icons/user.svg') }}" alt="Image Svg">
                        </div>
                        <div class="content">
                            <h5 class="title">Direct Employment in Cyber Security</h5>
                            <p>Transition directly into employment in a cyber security-related profession, applying your
                                skills and knowledge to protect organizations and manage risks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-tertiary">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Seamless University Admission </h5>
                            <p>Enter the second year of a university degree program in Cyber Security, ensuring a smooth
                                transition and continued academic growth in the field.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <ul class="shape-group">
            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img src="{{ asset('front/images/others/shape-47.png') }}" alt="Shape">
            </li>
            <li class="shape-2" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="{{ asset('front/images/others/shape-38.png') }}" alt="Shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <span data-depth="2.5"></span>
            </li>
        </ul>
    </div>
    <!-- End Categories Area  -->

    <!-- Start Campus Area  -->
    <div class="edu-campus-area gap-lg-top-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/cyber-security/cyber-security-03.webp') }}"
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

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Cyber Security </span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 5 Diploma in Cyber Security is a 120-credit qualification designed for individuals
                                seeking to advance their careers in the cyber security sector. It aims to develop and reward
                                learners with relevant new skills applicable across various business sectors. Completion
                                allows progression to a university Level 6 Top-Up program in risk management.
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
                            src="{{ asset('front/img/programs/cyber-security/cyber-security-02.webp') }}"
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
    <!--  About Area End  -->

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
                        <h2 class="title">Career Opportunities with <span class="color-secondary"> Level 5
                            </span> Diploma in Cyber Security</h2>
                    </div>
                    <div class="right-content about-content">
                        <p>The Level 5 Diploma in Information Technology equips learners with realistic and relevant
                            career-related opportunities suited to the 21st-century job market, preparing them for a diverse
                            range of IT roles worldwide.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/cyber-security-analyst.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Cyber Security Analyst</h4>
                            <p>Monitor and protect an organization's IT infrastructure, identifying vulnerabilities and
                                implementing security measures to prevent breaches.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/risk-management-specialist.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Risk Management Specialist</h4>
                            <p>Assess and mitigate risks associated with cyber threats, developing strategies to protect
                                organizational assets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/it-security-cunsultant.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">IT Security Consultant</h4>
                            <p>Provide expert advice to businesses on securing their IT systems, conducting security audits,
                                and recommending improvements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/network-security-administrator.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Network Security Administrator</h4>
                            <p>Manage and secure an organization's network, ensuring safe and reliable connectivity while
                                preventing unauthorized access.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/cyber-security/icons/incident-response-specialist.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Incident Response Specialist</h4>
                            <p>Respond to and manage security incidents, investigating breaches and implementing measures to
                                prevent future occurrences.</p>
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

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-6">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title">Services</span> --}}
                <h2 class="title">Progression Pathways</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p class="text">Upon completing the Level 5 Diploma in Cyber Security, learners can progress to:
                </p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-34"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Advance to the Final Year of an Undergraduate Degree</h5>
                            <p>Completing the Level 5 Diploma in Cyber Security enables learners to progress to the final
                                year of an undergraduate degree, streamlining their academic journey and enhancing their
                                qualifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-secondary">
                        <div class="icon computer-science">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Direct Employment in Cyber Security Professions</h5>
                            <p>Graduates are well-prepared to enter directly into employment in cybersecurity-related
                                professions, utilizing their comprehensive knowledge and skills to protect and manage
                                organizational IT systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-extra02">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Seamless University Admission</h5>
                            <p>This qualification allows learners to enter the final year of a university degree program in
                                cybersecurity, ensuring a smooth academic transition and continued educational advancement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-tertiary">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Global Career Opportunities </h5>
                            <p>The Level 5 Diploma in Cyber Security provides learners with realistic and relevant career
                                opportunities worldwide, preparing them for the demands of the 21st-century employment
                                market.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <ul class="shape-group">
            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img src="{{ asset('front/images/others/shape-47.png') }}" alt="Shape">
            </li>
            <li class="shape-2" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="{{ asset('front/images/others/shape-38.png') }}" alt="Shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <span data-depth="2.5"></span>
            </li>
        </ul>
    </div>
    <!-- End Categories Area  -->

    <!-- Start Campus Area  -->
    <div class="edu-campus-area section-gap-equal">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/cyber-security/cyber-security-04.webp') }}"
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
                                <div class="features-box color-primary-style">
                                    <div class="icon">
                                        <i class="icon-50 art-board-icon"></i>
                                    </div>
                                    <div class="content">
                                        <br>
                                        <h5 class="title">Level 6 qualification (or equivalent) or
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
