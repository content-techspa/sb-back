@extends('template.template')
@section('content')
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Coding Multiverse
                            for Kids</h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Our program is perfect for kids
                            interested in coding. We offer coding classes where children can learn at their own pace,
                            introducing web development concepts and problem-solving skills in a fun way!</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <a type="button" class="edu-btn btn-curved" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now <i class="icon-4"></i></a>
                        </div>
                        <div class="features-list" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <div class="features-box color-extra02-style edublink-svg-animate">
                                <div class="icon">
                                    <img class="svgInject"
                                        src="{{ asset('front/images/animated-svg-icons/online-class.svg') }}"
                                        alt="animated icon">
                                    <!-- <i class="icon-5"></i> -->
                                </div>
                                <div class="content">
                                    <h5 class="title">Online <br> Courses</h5>
                                </div>
                            </div>
                            <div class="features-box color-secondary-style edublink-svg-animate">
                                <div class="icon">
                                    <img class="svgInject"
                                        src="{{ asset('front/images/animated-svg-icons/instructor.svg') }}"
                                        alt="animated icon">
                                    <!-- <i class="icon-6"></i> -->
                                </div>
                                <div class="content">
                                    <h5 class="title">Top <br>Instructors</h5>
                                </div>
                            </div>
                            <div class="features-box color-primary-style edublink-svg-animate">
                                <div class="icon">
                                    <img class="svgInject"
                                        src="{{ asset('front/images/animated-svg-icons/certificate.svg') }}"
                                        alt="animated icon">
                                    <!-- <i class="icon-7"></i> -->
                                </div>
                                <div class="content">
                                    <h5 class="title">Online <br> Certificates </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-gallery">
            <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up" data-sal-duration="1000">
                <img src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-06.webp') }}" alt="Girl Image">
            </div>
            <div class="thumbnail thumbnail-2" data-sal-delay="500" data-sal="slide-down" data-sal-duration="1000">
                <img src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-07.webp') }}" alt="Girl Image">
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="{{ asset('front/images/banner/icon-3.png') }}" alt="Shape">
            </li>
            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-2" src="{{ asset('front/images/banner/icon-1.png') }}" alt="Shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="{{ asset('front/images/banner/icon-5.png') }}" alt="Shape">
            </li>
            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="-2" src="{{ asset('front/images/banner/icon-2.png') }}" alt="Shape">
            </li>
            <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img data-depth="2" src="{{ asset('front/images/banner/icon-4.png') }}" alt="Shape">
            </li>
            <li class="shape-6" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="{{ asset('front/images/about/shape-25.png') }}" alt="Shape">
            </li>
            <li class="shape-7" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
            </li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=       About Us Area Start      	=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <div class="main-img-1">
                            <img src="{{ asset('front/images/about/about-09.png') }}" alt="About Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1">
                                <img src="{{ asset('front/images/about/shape-11.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2">
                                <img src="{{ asset('front/images/about/shape-12.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Did You Know ?</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Students who learn computer programming achieve 16 percentile points higher scores on
                                cognitive ability tests compared to those who do not.</p>
                        </div>
                        <ul class="features-list">
                            <li>Age: 6-15</li>
                            <li>Sessions are tailored to suit every level, ensuring personalised learning and growth for all.</li>
                        </ul>
                        <a type="button" class="edu-btn btn-curved" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Get Start Today <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->


    <!--=====================================-->
    <!--=       Category Area Start      	=-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-3 gap-bottom-equal bg-image" id="categories">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">Categories</span> --}}
                <h2 class="title">Our Programme <span class="color-primary">Features</span> </h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Empowering kids through fun coding!</p>
            </div>
            <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-primary-style">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Develop fun games</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-secondary-style">
                        <div class="icon">
                            <i class="icon-28"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Boost communication skill</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra04-style">
                        <div class="icon">
                            <i class="icon-11"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Build mobile applications</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-tertiary-style">
                        <div class="icon">
                            <i class="icon-62"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Live sessions</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra02-style">
                        <div class="icon">
                            <i class="icon-13"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Learn problem-solving </h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra07-style">
                        <div class="icon design-pencil-icon">
                            <i class="icon-65"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Bespoke curriculum</h5>
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
    <div class="edu-faq-area faq-style-1 faq-style-6 ">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">FAq’s</span> --}}
                            <h2 class="title">Coding Multiverse for <br> Beginners</h2>
                            {{-- <span class="shape-line"><i class="icon-19"></i></span> --}}
                            <p>The beginners' module of the Coding Multiverse curriculum offers a solid foundation in coding
                                and IT for students at different proficiency levels. It covers programming languages,
                                computational thinking, problem-solving skills, and debugging techniques.</p>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Key Benefits
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li>Introduces various coding and IT concepts</li>
                                                <li>Builds a foundation for advanced programming</li>
                                                <li>Develops problem-solving skills</li>
                                                <li>Teaches block-based coding and ScratchJr</li>
                                                <li>Covers cybersecurity basics and online safety</li>
                                                <li>Engages in fun coding projects</li>
                                                <li>Enhances critical and computational thinking</li>
                                                <li>Enables creation of basic games and animations</li>
                                                <li>Fosters creativity</li>
                                                <li>Prepares for advanced programming concepts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Perks of the Course
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li>Personalised sessions with IT experts</li>
                                                <li>Post-class learning materials</li>
                                                <li>Dedicated tutor support</li>
                                                <li>Project-based learning</li>
                                                <li>Monitoring progression and regular assessments</li>
                                            </ul>

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
                            {{-- img/programs/coding-multiverse/coding-multiverse-01.png --}}
                            <img src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-01.webp') }}"
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

    <!--=       	CTA Area Start      	=-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    <div class="home-one-cta-two cta-area-1 edu-section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="edu-cta-box cta-style-1 bg-image bg-image--9">
                        <h6 class="text-white text-center">Book a FREE Live Demo Session with Us</h6>
                        <div class="inner">
                            <div class="content text-end">
                                <h3 class="title"><a
                                        href="mailto:admin@antaifintechglobal.com">admin@antaifintechglobal.com</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="tel:+02037613775">02037613775
                                </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area  -->
    <!--=====================================-->

    <!--=       	Faq Area Start      	=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-4 edu-section-gap">
        <div class="container">
            <div class="row g-5 row--45 align-items-end">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title pre-textsecondary">Education For Everyone</span> --}}
                            <h2 class="title">Why Coding Multiverse?</h2>
                            <p>Learning how to code is essential in today's world, and the Coding Multiverse curriculum
                                offers dynamic and accessible lessons for students of all levels. It covers a wide range of
                                programming languages and can help advance careers or business goals.</p>
                            {{-- <span class="shape-line"><i class="icon-19"></i></span> --}}
                        </div>

                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h5>Benefits of the Course</h5>
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button style-extra02" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                            Versatile Skill Set
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Covers multiple programming languages, making students proficient in various
                                                areas and able to tackle diverse projects.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-extra05" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Career Opportunities
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Equips students with coding skills for careers in programming, web
                                                development, software engineering, and more.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-primary" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Personal Projects
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Empowers students to create websites, build apps, or automate tasks,
                                                potentially leading to business or freelance opportunities.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-extra02" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false">
                                            Cognitive Development
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Enhances problem-solving, critical thinking, and attention to detail.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed style-extra05" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false">
                                            Future-Proofing
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Keeps students up-to-date with technological advancements, ensuring their
                                                skills remain relevant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-thumbnail">
                        <div class="thumbnail">
                            <img src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-05.webp') }}"
                                alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-12.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-1" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/faq/shape-15.png') }}"
                                    alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!--=      		CTA Area Start   		=-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area cta-banner-3 bg-image">
        <div class="container edublink-animated-shape">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">
                                Become a Game Developer, Web Developer, or Launch Your App!</h2>
                            <p>Start today, conquer the world tomorrow!</p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Enquire Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <img data-depth="-1"
                        src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-033.webp') }}"
                        alt="shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <img data-depth="1"
                        src="{{ asset('front/img/programs/coding-multiverse/coding-multiverse-04.webp') }}"
                        alt="shape">
                </li>
                <li class="shape-3">
                    <img src="{{ asset('front/images/banner/icon-1.png') }}" alt="shape">
                </li>
                <li class="shape-4">
                    <img src="{{ asset('front/images/banner/icon-2.png') }}" alt="shape">
                </li>
            </ul>
        </div>
    </div>
    <x-universities />
@endsection
