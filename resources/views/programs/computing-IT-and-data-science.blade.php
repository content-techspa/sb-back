@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->

    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Computing/IT and Data Science</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated
                            Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Computing/IT and Data Science</li>
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
                            <h2 class="title">Level 4 Diploma in <span class="color-secondary"> Information
                                </span>Technology
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 4 Diploma in Information Technology is designed to provide students with a thorough
                                grounding in the essential skills and knowledge required for a successful career in the IT
                                sector. This diploma serves as a crucial stepping stone between foundational IT concepts and
                                advanced technical proficiency, preparing students for a variety of roles in the dynamic
                                tech industry.
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
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-01.webp') }}"
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
                        <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-right"
                            data-sal-duration="800">
                            <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-09.webp') }}"
                                alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/faq/shape-35.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-36.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img src="{{ asset('front/images/faq/shape-34.png') }}" alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">FAq’s</span> --}}
                            <h2 class="title">Advancing Careers with a <span class="color-secondary">Level 4 Diploma
                                </span> in IT</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>

                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Building IT Expertise for Business Environments
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>This qualification equips individuals with the ability to apply IT principles
                                                across various business contexts, ensuring they can integrate technology
                                                effectively to enhance business operations and efficiency.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Enhancing Employability through IT and Management Synergy
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>By exploring the relationship between management theories and their practical
                                                application in the IT sector, this qualification aims to improve learners'
                                                employability, preparing them for diverse roles in the tech industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Problem-Solving Techniques for Business and IT
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>This qualification focuses on analyzing and applying problem-solving methods
                                                tailored to the specific challenges of the business and IT industries,
                                                enabling learners to tackle complex issues with confidence and innovation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false">
                                            Pathway to Degree Programs in IT
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Providing a solid foundation in IT, this qualification allows students to
                                                gain valuable credits towards a degree program, bridging the gap between
                                                diploma and higher education.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false">
                                            Preparing for Advanced IT Studies
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>This qualification develops the academic standards required for higher-level
                                                study, equipping students with the knowledge and skills necessary to excel
                                                in advanced IT education and research.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false">
                                            Personal and Professional Development in IT
                                        </button>
                                    </h5>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Focused on fostering self-awareness and continuous improvement, this
                                                qualification enhances key personal, social, and transferable skills,
                                                promoting holistic development essential for success in the IT industry.</p>
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
    <!--  FAQ Area End  -->

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
                        <h2 class="title">Global Career <span class="color-secondary"> Opportunities
                            </span>with a<br>Level 4 Diploma in IT</h2>
                    </div>
                    <div class="right-content about-content">
                        <p>This qualification offers realistic and relevant career-related opportunities worldwide,
                            preparing learners for the demands of 21st-century employment markets.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Progression to Level 5 Diploma in IT</h4>
                            <p>Completing this diploma enables learners to advance to the Level 5 Diploma in Information
                                Technology, further enhancing their skills and knowledge in the field.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-34"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Pathway to Undergraduate Study</h4>
                            <p>This qualification allows learners to progress to the second year of undergraduate study in
                                IT, providing a strong academic foundation for higher education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Direct Entry into IT Professions</h4>
                            <p> Learners can directly transition into employment in IT-related professions, equipped with
                                the necessary skills and knowledge to excel in their careers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Seamless University Admission</h4>
                            <p> The Level 4 Diploma in IT facilitates entry into the second year of a university degree
                                program, ensuring a smooth academic transition and continued educational growth.</p>
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
    <!-- End FAQ Area  -->

    <!-- Start Campus Area  -->
    <div class="edu-campus-area">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-xl-7" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                    <div class="campus-image-gallery">
                        <div class="campus-thumbnail">
                            <div class="thumbnail">
                                <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-05.webp') }}"
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
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">About Us</span> --}}
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Information
                                </span>Technology</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 5 Diploma in Information Technology offers an alternative to the second year of a
                                degree program, providing a comprehensive pathway for learners aiming to develop a broad
                                base of knowledge and skills. This qualification equips students to work in various roles
                                within the IT industry, including .NET programming, system administration, and network
                                security. Additionally, learners will explore entrepreneurship within a technological
                                environment.
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
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-02.webp') }}"
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

    <!--  FAQ Area Start  -->
    <div class="edu-faq-area faq-style-5 gap-bottom-equal">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-right"
                            data-sal-duration="800">
                            <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-10.webp') }}"
                                alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/faq/shape-35.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-36.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img src="{{ asset('front/images/faq/shape-34.png') }}" alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">FAq’s</span> --}}
                            <h2 class="title">Key <span class="color-secondary">Objectives</span></h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Principles of IT
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Apply IT principles across diverse business environments, enhancing
                                                operational efficiency and effectiveness.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Employability Enhancement
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Improve employability by exploring the relationship between management
                                                theories and their functional application in the IT world.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Problem-Solving Techniques
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Analyze and implement problem-solving techniques specific to the business and
                                                IT industries.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false">
                                            Academic Progression
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Gain credits towards degree programs, facilitating the continuation of
                                                academic pursuits at a higher level.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false">
                                            Advanced Study Preparation
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Develop academic standards required for further study, ensuring readiness for
                                                higher-level education and research.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false">
                                            Personal Development
                                        </button>
                                    </h5>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Enhance critical personal, social, and transferable skills through
                                                self-reflection and continuous learning.</p>
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
    <!-- End FAQ Area  -->

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
                            </span> Diploma in IT</h2>
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
                            <i class="icon-45"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Progression to Undergraduate Degrees</h4>
                            <p>Allows learners to advance to the final year of an undergraduate degree program, streamlining
                                their academic journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"> Direct Entry into IT Professions</h4>
                            <p>Prepares graduates to enter directly into IT-related professions, leveraging their
                                comprehensive knowledge and skills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Seamless University Admission</h4>
                            <p>Provides a pathway to enter the final year of a university degree, facilitating smooth
                                academic and professional advancement.</p>
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
                                <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-06.webp') }}"
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

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-03.webp') }}"
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
                            <h2 class="title">Level 7 Diploma in <span class="color-secondary">Information
                                    Technology</span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 7 Diploma in Information Technology equips learners with skills to design, plan,
                                and execute technology-based projects effectively. Graduates will be well-prepared to lead
                                IT initiatives and contribute significantly to their organizations.
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
                            <h4 class="title">IT Project Manager</h4>
                            <p> Lead and manage IT projects, ensuring they are completed on time, within budget, and to high
                                standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Senior Software Developer</h4>
                            <p>Develop and oversee complex software solutions, ensuring they meet organizational needs and
                                industry standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">IT Consultant</h4>
                            <p> Provide expert advice to organizations on leveraging technology to achieve business goals
                                and improve efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Chief Information Officer (CIO) </h4>
                            <p> Oversee the IT department, develop strategic plans, and ensure the effective use of
                                technology within the organization.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Cybersecurity Manager</h4>
                            <p> Lead cybersecurity initiatives, protecting organizational data and systems from threats and
                                ensuring compliance with security standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Data Analyst</h4>
                            <p> Analyze complex data sets to provide actionable insights that support business decisions and
                                strategies.
                            </p>
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
                                <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-07.webp') }}"
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
                                        <h5 class="title">Mature applicant with A level (or equivalent) and work
                                            experience
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

    <!--  About Area Start  -->
    <div class="section-gap-equal edu-about-area about-style-2">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1"
                            src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-04.webp') }}"
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
                            <h2 class="title">Level 7 Diploma in <span class="color-secondary">Data Science</span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 7 Diploma in Data Science equips learners with essential skills in mathematics,
                                statistics, and programming languages like R, Python, and SQL. This program provides a
                                strong foundation for progression to Master's degrees in related fields. With the rise of
                                cloud computing, big data, and AI, data science is a crucial profession. This diploma
                                prepares aspiring Data Scientists, Data Analysts, and AI specialists to seize growing
                                opportunities in these dynamic fields.
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
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Careers</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Data Scientist</h4>
                            <p>Analyze complex data sets to extract valuable insights, develop predictive models, and
                                support data-driven decision-making.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Data Analyst</h4>
                            <p>Interpret data to identify trends, provide actionable insights, and help organizations make
                                informed business decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">AI Specialist</h4>
                            <p>Develop and implement artificial intelligence models and algorithms to solve complex problems
                                and enhance business processes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Big Data Engineer</h4>
                            <p>Design, build, and manage big data infrastructure, ensuring efficient data processing and
                                storage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/it-and-data-science/icons/machine-learning-engineer.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Machine Learning Engineer</h4>
                            <p>Create and optimize machine learning models to automate tasks and improve system performance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/it-and-data-science/icons/business-intelligence-analyst.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Business Intelligence Analyst</h4>
                            <p>Use data analytics tools to create reports, dashboards, and visualizations that help
                                businesses understand their performance.</p>
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
                                <img src="{{ asset('front/img/programs/it-and-data-science/it-and-data-science-08.webp') }}"
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
                                        <h5 class="title">Mature applicant with A level (or equivalent) and 3 years work
                                            experience
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
