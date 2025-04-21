@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-11 remote-training">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Explore Your <br>
                            <span class="color-secondary">Academic </span>Future at MAHE Dubai
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            MAHE Dubai offers diverse programs, top facilities, and a multicultural campus, preparing
                            students for global careers in a dynamic city.</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/counterup/shape-05.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/mahe-dubai-01.webp') }}" alt="Pi-chart Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/others/shape-42.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span data-depth="-2.5"></span>
                            </li>
                            <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img class="rotateit" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=   About & counterup Area Start    =-->
    <!--=====================================-->
    <div class="about-counterup gap-top-equal">
        <!--=====================================-->
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <!-- Start Why Choose Area  -->
        <section class="why-choose-area-3 gap-bottom-equal">
            <div class="container">
                <div class="row row--45">
                    <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="left-content">
                            <h2 class="title">Benefits of Studying at <span class="color-secondary">MAHE </span>Dubai</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="right-content">
                            <p>MAHE Dubai offers a range of features that make it an ideal choice for <br> students seeking
                                high-quality education and global career opportunities.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-primary-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/aru-topup-mba.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">ARU's Top-up MBA</h4>
                                <p>Avail a direct pathway to ARU's Top-up MBA (6 months) at a special fee, enhancing your
                                    career prospects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-secondary-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/cultural-tour.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">Cultural Immersion Tour
                                </h4>
                                <p>Experience a 10-day cultural immersion tour to the UK, including a visit to ARU. All
                                    expenses covered by the Institute.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-extra08-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/flexible-learning.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">Flexible Learning</h4>
                                <p>Enjoy flexible learning with evening classes, on-campus lectures, course books, and
                                    e-learning, maintaining your work-life balance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-primary-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/expert-seminars.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">Expert Seminars</h4>
                                <p>Participate in seminars and workshops conducted by industry experts, gaining valuable
                                    insights and knowledge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-secondary-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/case-study.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">Case-Study Based Learning
                                </h4>
                                <p>Engage in a case-study-based learning environment, enhancing your problem-solving skills
                                    for real workplace challenges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="why-choose-box-2 features-box color-extra08-style">
                            <div class="icon">
                                <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/guaranteed-interviews.svg') }}"
                                alt="animated icon">
                            </div>
                            <div class="content">
                                <h4 class="title">Guaranteed Interviews</h4>
                                <p>Secure guaranteed interviews with leading MNCs in Dubai, boosting your employability and
                                    career opportunities.</p>
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
        <!--=====================================-->
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-about-area about-style-3 language-about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/mahe-dubai-02.webp') }}" alt="About Image">
                            <div class="main-img-wrapper">
                                <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in"
                                    data-sal-duration="800">
                                    <img class="main-img-2" src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/mahe-dubai-03.webp') }}"
                                        alt="About Image">
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-2" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img class="rotateit" src="{{ asset('front/images/faq/shape-04.png') }}"
                                        alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                {{-- <span class="pre-title">About Us</span> --}}
                                <h2 class="title">Discover MAHE Dubai <span class="color-primary"><br>Your Gateway</span>
                                    to
                                    Excellence</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                        type="button" role="tab" aria-selected="true">About MAHE Dubai</button>
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
                                    <p>Manipal Academy of Higher Education (MAHE), Dubai, located in Dubai International
                                        Academic City, offers a diverse range of undergraduate and postgraduate programs in
                                        Engineering, Business, Design, Architecture, Life Sciences, and Media &
                                        Communication. Known for academic excellence and state-of-the-art infrastructure,
                                        MAHE Dubai blends rigorous academics with real-world applications.</p>
                                    <ul class="features-list">
                                        <li>Offers diverse programs with a commitment to excellence.</li>
                                        <li>Features modern infrastructure and a vibrant campus life.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                    <p>Our mission is to deliver world-class education, fostering intellectual growth and
                                        professional development. We aim to:</p>
                                    <ul class="features-list">
                                        <li>Provide high-quality educational programs.</li>
                                        <li>Encourage innovation, creativity, and critical thinking.</li>
                                        <li>Equip students with essential knowledge and skills.</li>
                                        <li>Promote inclusivity, diversity, and mutual respect.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                    <p>Our vision is to be a leading institution recognized for teaching, research, and
                                        community engagement. We strive to:</p>
                                    <ul class="features-list">
                                        <li>Inspire students to reach their highest potential.</li>
                                        <li>Lead in educational innovation and excellence.</li>
                                        <li>Advance knowledge through research.</li>
                                        <li>Partner with industry and society to address global challenges and create
                                            positive impact.</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
    </div>
    <!--=====================================-->

    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-3 gap-bottom-equal bg-image" id="categories">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                {{-- <span class="pre-title pre-textsecondary">Categories</span> --}}
                <h2 class="title">Key <span class="color-primary">Highlights</span></h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                {{-- <p>Consectetur adipiscing elit sed do eiusmod tempor.</p> --}}
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-primary-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/flexibile-intakes.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">Flexible Intakes
                                </h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-secondary-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/doubt-session.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">Doubt Sessions</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra04-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/career-assistance.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">Career Assistance</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-tertiary-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/flexible-study-mode.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">
                                    Flexible Study Mode</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra02-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/case-studies.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title"> Real Time Case <br> Studies</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra07-style">
                        <div class="icon design-pencil-icon">
                            <img class="svgInject"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/shorter-mba.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">Shorter Duration than Regular 2-Year MBA</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra06-style">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/assignment.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">
                                    Assignment Based Assessment</h5>
                        </div>
                    </div>
                </div>
                <div class="col" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra03-style">
                        <div class="icon laptop-icon">
                            <img class="svgInject"
                                src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/svg/live-sessions.svg') }}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                                <h5 class="title">Live Sessions with Industry Experts</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!-- Why Choose Area  -->
    <div class="benefits-area-1">
        <div class="benefits-wrapper">
            <div class="benefits-wrap-one">
            </div>
            <div class="benefits-wrap-two">
                <div class="process-gallery edublink-animated-shape">
                    <div class="gallery-thumbnail">
                        <div class="thumbnail thumbnail-1">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/mahe-dubai-04.webp') }}" alt="Why Choose">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container edublink-animated-shape benefits-content-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="process-content">
                            <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                                data-sal-duration="1000">
                                {{-- <span class="pre-title color-secondary"> GYM Benefits</span> --}}
                                <h2 class="title">Post Graduate <span class="color-secondary">Diploma <br></span>in
                                    Business Administration</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <h5 class="my-4"> Duration: <small>10 - 12 months</small></h5>
                                <h5 class="my-4"> Mode: <small>On campus in Dubai</small></h5>
                                <h5 class="my-4"> Entry Requirements: <small>Bachelor's degree from a recognized
                                        university with a minimum of 50% aggregate marks.</small>
                                </h5>
                                <h5 class="my-4"> Program Structure: <small>Tailored for working professionals
                                        seeking flexible, shorter alternative to MBA.</small>
                                </h5>
                            </div>
                            <h5 class="mb-1">Specializations Available: </h5>
                            <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="1000">
                                <ul class="features-list">
                                    <li>Management</li>
                                    <li>Digital Marketing</li>
                                </ul>
                                <ul class="features-list">
                                    <li>Business Analytics</li>
                                    <li>Hospitality and Tourism</li>
                                </ul>
                            </div>
                            <div class="features-btn" data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span></span>
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                        alt="Shape Images">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{ asset('front/images/cta/shape-14.png') }}"
                                        alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="benefits-area-1">
        <div class="benefits-wrapper">
            <div class="benefits-wrap-two">
                <div class="process-gallery edublink-animated-shape">
                    <div class="gallery-thumbnail">
                        <div class="thumbnail thumbnail-1">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/mahe-dubai/mahe-dubai-05.webp') }}" alt="Why Choose">
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefits-wrap-one">
            </div>
            <div class="container edublink-animated-shape benefits-content-box">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="process-content ps-5">
                            <div class="section-title section-left" data-sal-delay="100" data-sal="slide-up"
                                data-sal-duration="1000">
                                {{-- <span class="pre-title color-secondary"> GYM Benefits</span> --}}
                                <h2 class="title">MBA (Top-Up) from<span class="color-secondary"> Anglia Ruskin
                                    </span>University</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <h5 class="my-4"> Duration: <small>4-5 months</small></h5>
                                <h5 class="my-4"> Mode: <small>Online / Blended studies</small></h5>
                                <h5 class="mt-4 mb-0"> Entry Requirements:</h5>
                                <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="1000">
                                    <ul class="features-list">
                                        <li>Postgraduate Diploma in Business Administration or equivalent</li>
                                        <li>Significant managerial experience for Advanced Entry (case-by-case
                                            basis)</li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="mb-1">Benefits: </h5>
                            <div class="features-wrapper" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="1000">
                                <ul class="features-list">
                                    <li>Develop key management skills</li>
                                    <li>Enhance employability</li>
                                    <li>Consolidate business knowledge and solve practical problems</li>
                                </ul>
                            </div>
                            <div class="features-btn" data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Area  -->
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-1 section-gap-equal">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-5">
                    <div class="testimonial-heading-area">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Hear from our students at MAHE Dubai. Discover how our programs, facilities, faculty, and
                                industry connections have enriched their academic journeys and career readiness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="home-one-testimonial-activator swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>Studying at MAHE Dubai has been a transformative experience. The global
                                            exposure and multicultural environment have enriched my learning beyond the
                                            classroom. The faculty are highly experienced and always supportive.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Ray Sanchez</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-02.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>The state-of-the-art facilities at MAHE Dubai have provided me with hands-on
                                            experience in my field. The modern labs and comprehensive libraries have been
                                            invaluable resources for my studies.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Thomas Lopez</h5>
                                        <span class="subtitle">Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-03.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>MAHE Dubai's strong industry connections have opened numerous opportunities
                                            for internships and job placements. The practical knowledge and skills I have
                                            gained here are unparalleled.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Amber Page</h5>
                                        <span class="subtitle">Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-04.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>
                                    <div class="content">
                                        <p>The flexible learning schedules and on-campus support have made balancing work
                                            and studies much easier. MAHE Dubai's commitment to academic excellence is
                                            evident in every aspect of the institution.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Robert Tapp</h5>
                                        <span class="subtitle">Content Creator</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonial Area  -->
    <!--=====================================-->
    <!--=      Call To Action Area Start   	=-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    <x-studyabroad-contact />
    <!-- End CTA Area  -->
    <!--=====================================-->
   
    <!--=      CTA Banner Area Start   		=-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image bg-white">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Explore programs and opportunities at<span class="color-secondary"> MAHE
                                    Dubai</span></h2>
                            <a href="https://www.manipaldubai.com/" class="edu-btn" target="_blank"> Visit Official Website <i
                                    class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="{{ asset('front/images/cta/shape-10.png') }}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="{{ asset('front/images/cta/shape-09.png') }}" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="-2" src="{{ asset('front/images/cta/shape-08.png') }}" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
    <!--=      		Brand Area Start   		=-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    {{-- <div class="edu-brand-area brand-area-1 section-gap-equal">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brand-section-heading">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Our Partners</span>
                            <h2 class="title">Our Prestigious University Partners Worldwide</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Antai Fintech Global partners with top universities, providing enriched learning, global
                                exposure, and study pathways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="brand-grid-wrap">
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
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/gbc.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/york-college.webp') }}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Brand Area  -->
@endsection
