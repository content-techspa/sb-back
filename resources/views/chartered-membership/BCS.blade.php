@extends('template.template')
@section('content')
    <!--=       Breadcrumb Area Start      =-->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">BCS</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Chartered Membership</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">BCS</li>
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
    <!--=       Breadcrumb Area End      =-->

    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-3 language-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/bcs/bcs-01.webp') }}" alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{ asset('front/img/chartered-membership/bcs/bcs-02.webp') }}"
                                    alt="About Image">
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
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
                            {{-- <span class="pre-title">About ILM</span> --}}
                            <h2 class="title">About BCS The <span class="color-primary">Chartered Institute </span>
                                for IT
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>With over 60,000 members across 150 countries, BCS, The Chartered Institute for IT, leads
                                    a global community of business leaders, educators, practitioners, and policymakers
                                    dedicated to advancing the IT industry. As a charity with a royal charter, our mission
                                    is to navigate the ethical challenges of IT, support industry professionals, and ensure
                                    IT benefits society.</p>
                            </div>               
                        </div>
                        <div class="about-btn sal-animate" data-sal-delay="400" data-sal="slide-up"
                            data-sal-duration="1000">
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
    <!--=====================================-->

    <!--=      Call TO Action Area Start    =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="remote-training-wrapper edu-cta-banner-area cta-banner-8">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Membership Available</h2>
                            <p class="text-white">BCS membership offers access to the tools you need to kick start your
                                career and beyond.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-large" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="{{ asset('front/images/cta/shape-38.png') }}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="{{ asset('front/images/cta/shape-42.png') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->

    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 edu-section-gap">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Student <span class="color-secondary">Membership </span></h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content">
                        <p>Joining BCS early in your career signals your commitment to high ethical standards and
                            professional development.</p>
                    </div>
                </div>
            </div>
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Benefits</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                {{-- <p class="description">The Level 4 Diploma in Business Management provides access to professional global
                    opportunities in the 21st-century global job markets.</p> --}}
            </div>
            <div class="row g-5">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/mentoring-network.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Mentoring Network</h4>
                            <p>Gain valuable advice and insights from experienced members.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/events-and-networking.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Events and Networking</h4>
                            <p>Attend regional branches, specialist groups, and webinars to connect with thought leaders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/career-support.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Career Support</h4>
                            <p>Use Springboard to perfect your CV with our CV360 platform and develop leadership skills
                                through our knowledge modules.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/professional-recognition.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Professional Recognition</h4>
                            <p>Use industry-recognized post-nominals on your CV and LinkedIn profile to showcase your
                                commitment to making IT good for society.</p>
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
                <img data-depth="-2" src="{{asset('front/images/about/shape-13.png')}}" alt="shape">
            </li>
            <li class="shape-3">
                <img data-parallax='{"x": 0, "y": 100}' src="{{asset('front/images/faq/shape-12.png')}}" alt="shape">
            </li>
        </ul> --}}
    </section>
    <section class="why-choose-area-3 edu-section-gap">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Professional <span class="color-secondary">Membership </span></h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content">
                        <p>Chartered professionals are industry leaders who uphold the highest ethical standards and
                            demonstrate current competence. Professional members can work towards this prestigious standard.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Benefits</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                {{-- <p class="description">The Level 4 Diploma in Business Management provides access to professional global
                    opportunities in the 21st-century global job markets.</p> --}}
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/profile.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Profile Building</h4>
                            <p> Opportunities to speak on specialist subjects at BCS branches, specialist groups, and
                                organizational member events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/skill.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Skill Mapping</h4>
                            <p>Use Browse SFIAplus to map your current skills and plan your career progression.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{asset('front/img/chartered-membership/bcs/icons/support.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Comprehensive Support</h4>
                            <p>Access a wide range of tools and resources to support your professional growth.</p>
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
                <img data-depth="-2" src="{{asset('front/images/about/shape-13.png')}}" alt="shape">
            </li>
            <li class="shape-3">
                <img data-parallax='{"x": 0, "y": 100}' src="{{asset('front/images/faq/shape-12.png')}}" alt="shape">
            </li>
        </ul> --}}
    </section>
    <!-- End Why Choose Area  -->

    <!--=       	FAQ Area Start      	=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-2 bg-image">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="row g-5">
                            <div class="col-6" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-1">
                                    <img src="{{ asset('front/img/chartered-membership/bcs/bcs-03.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/img/chartered-membership/bcs/bcs-04.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-06.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-2">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-04.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-16.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-4 scene">
                                <img data-depth="-2" src="{{ asset('front/images/banner/shape-03.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-5 scene">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-08.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-6 scene">
                                <img data-depth="1.7" src="{{ asset('front/images/faq/shape-09.png') }}"
                                    alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            {{-- <span class="pre-title">Benefits</span> --}}
                            <h2 class="title">Why Join BCS?</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>BCS is your career partner, providing support as you develop in the IT industry. Membership
                                offers extensive benefits, including access to professional registrations and chartered
                                status.</p>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Career Development
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li><strong>Learning and Support:</strong> Develop your skills and shape
                                                    your career path with BCS-accredited qualifications and resources like
                                                    the Springboard careers center and CV360 evaluation tool.</li>
                                                <li><strong>Skill Mapping:</strong> Use SFIAplus to find your skill level
                                                    and plan your progress.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Knowledge Enhancement
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li><strong>Latest Thinking:</strong> Stay updated with events, webinars,
                                                    industry reports, journals, and policy updates.</li>
                                                <li><strong>Member Deals:</strong> Enjoy discounts on books, training,
                                                    professional indemnity insurance, and more.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Networking and Inspiration
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li><strong>Community Engagement:</strong> Make new contacts and broaden
                                                    your horizons through regional branches, international sections,
                                                    specialist groups, and mentoring opportunities.</li>
                                                <li><strong>Speaking Opportunities:</strong> Share your expertise and boost
                                                    your profile within the BCS community.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=====================================-->
    
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-3">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title"> How to Qualify for<span class="color-secondary"> Membership
                            </span></h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content about-content">
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <p>To qualify for student membership, complete our IT Course. You must also have a level qualification or an equivalent Institute-approved program.</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            {{-- <li class="shape-5">
                    <img class="rotateit" src="{{asset('front/images/about/shape-13.png')}}" alt="Shape">
                </li> --}}
            {{-- <li class="shape-6">
                    <span></span>
                </li> --}}
        </ul>
    </div>
    <div class="counterup-area-1 gap-lg-bottom-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Our Process</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="50" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number primary-color">
                            {{-- <span class="odometer odometer-auto-theme" data-odometer-final="29.3">
                                <div class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                                class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                        class="odometer-value">2</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">9</span></span></span></span></span><span
                                        class="odometer-formatting-mark odometer-radix-mark">.</span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">3</span></span></span></span></span></div>
                            </span><span>K</span> --}}Step 1
                        </h2>
                        <h6 class="title">Register With Us</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number secondary-color">
                            {{-- <span class="odometer odometer-auto-theme" data-odometer-final="32.4">
                                <div class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                                class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                        class="odometer-value">3</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">2</span></span></span></span></span><span
                                        class="odometer-formatting-mark odometer-radix-mark">.</span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">4</span></span></span></span></span></div>
                            </span><span>K</span> --}} Step 2
                        </h2>
                        <h6 class="title">Complete our IT Course.</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number extra02-color">
                            {{-- <span class="odometer odometer-auto-theme" data-odometer-final="100">
                                <div class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                                class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                        class="odometer-value">1</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">0</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">0</span></span></span></span></span></div>
                            </span><span>%</span> --}}Step 3
                        </h2>
                        <h6 class="title">Register For Membership</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="200" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number extra05-color">
                            {{-- <span class="odometer odometer-auto-theme" data-odometer-final="354">
                                <div class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                                class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                        class="odometer-value">3</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">5</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">4</span></span></span></span></span></div>
                            </span><span>+</span> --}}Step 4
                        </h2>
                        <h6 class="title">Receive your membership.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-2 ">
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
