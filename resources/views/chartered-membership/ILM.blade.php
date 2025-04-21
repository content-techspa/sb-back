@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Institute of Leadership and Management</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Chartered Membership</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Institute of Leadership and Management</li>
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
    <div class="edu-about-area about-style-3 language-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/ilm/ilm-01.webp') }}" alt="About Image">
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{ asset('front/img/chartered-membership/ilm/ilm-02.webp') }}"
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
                            <h2 class="title">About Institute of <span class="color-primary">Leadership </span>and
                                Management
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>The Institute of Leadership and Management supports businesses committed to leadership
                                    development. They work with L&D teams, HR specialists, and leaders at all levels,
                                    offering tools and resources to enhance leadership skills, including for students and
                                    new managers.</p>
                                <p>
                                    Membership provides career development resources, event access, and networking
                                    opportunities within the Leadership and Management community.
                                </p>

                            </div>

                        </div>
                        <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Apply Now <i class="icon-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  About Area End  -->

    <!-- Start Ad Banner Area  -->
    <div class="remote-training-wrapper edu-cta-banner-area cta-banner-8">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Membership Available</h2>
                            <p class="text-white">ILM membership offers access to the tools you need to kick start your
                                career and beyond</p>
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

    <!--  About Area Start  -->
    <div class="edu-about-area about-style-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title"></span>
                            <h2 class="title">Members</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Aimed at experienced managers seeking to boost their leadership potential, this program is
                                perfect for professionals looking to refine their skills and learn from other great leaders.
                            </p>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">To Qualify, You Must Have</button>
                            </li>
                         
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <ul class="features-list">
                                    <li>A degree-level qualification or an equivalent Institute-approved program, or a
                                        mapped military rank.</li>
                                    <li>Post-nominals: MInstLM</li>
                                    <li>Completion of our Leadership & Management qualification</li>
                                </ul>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/ilm/ilm-03.webp') }}" alt="About Image">
                        <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/ilm/ilm-04.webp') }}" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-39.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-07.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-5">
                <img class="rotateit" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
            </li>
            <li class="shape-6">
                <span></span>
            </li>
        </ul>
    </div>
    <!--  About Area End   -->

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
                            Step 1
                        </h2>
                        <h6 class="title">Register With Us</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number secondary-color">
                             Step 2
                        </h2>
                        <h6 class="title">Complete L&M Course</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number extra02-color">
                            Step 3
                        </h2>
                        <h6 class="title">Register For Membership</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sal-animate" data-sal-delay="200" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="edu-counterup counterup-style-1">
                        <h2 class="counter-item count-number extra05-color">
                            Step 4
                        </h2>
                        <h6 class="title">Receive Your Membership</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  FAQ Area Start  -->
    <div class="edu-faq-area faq-style-2 bg-image">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="row g-5">
                            <div class="col-6" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-1">
                                    <img src="{{ asset('front/img/chartered-membership/ilm/ilm-05.webp') }}"
                                        alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/img/chartered-membership/ilm/ilm-06.webp') }}"
                                        alt="Faq Images">
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
                            <h2 class="title">Benefits</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>At the Institute of Leadership and Management (ILM), we offer benefits that enhance
                                leadership capabilities and career progression for both individuals and teams.</p>
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Professional Development
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li>Award-winning E-learning tools to enhance leadership skills.</li>
                                                <li>Blended learning resources for continuous knowledge development.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Networking Opportunities
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li>Join a community of over 40,000 professionals.</li>
                                                <li>Share insights and build connections through events and forums.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            Recognition and Credentials
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body about-content">
                                            <ul class="features-list">
                                                <li>ILM post-nominals and digital credentials to boost career progression.
                                                </li>
                                                <li>Internationally recognized UK membership badge.</li>
                                                <li>Digital badges with rich metadata to showcase your qualifications
                                                    online.</li>
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
    <!--  FAQ Area End  -->

    <!--  About Area Start -->
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
                            <li>Complete the Leadership and Management Course.</li>
                            <li>Hold a degree-level qualification or an equivalent Institute-approved program.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Leadership and Management Course Overview</span>
                            <h2 class="title">Qualification overview and<span class="color-primary"> objective</span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>
                                This course is designed for managers in various sectors, covering key topics like team
                                performance, personal and professional development, and business fundamentals. It aims to
                                equip managers with the essential skills and knowledge to excel in their roles.</p>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">Entry Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission"
                                    type="button" role="tab" aria-selected="false">Benefits</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision"
                                    type="button" role="tab" aria-selected="false">Topics Covered</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <ul class="features-list">
                                    <li>Age 19+</li>
                                    <li>Recommended minimum Level 2 in literacy and numeracy.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <ul class="features-list">
                                    <li>Gain a comprehensive understanding of managerial roles and responsibilities.</li>
                                    <li>Develop the skills needed to support day-to-day operations.</li>
                                    <li>Learn how to provide direction, guidance, and instructions to achieve objectives.
                                    </li>
                                    <li>Enhance your ability to support and monitor team goals.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <ul class="features-list">
                                    <li>Managing personal and professional development</li>
                                    <li>Managing team performance</li>
                                    <li>Leadership and management principles</li>
                                    <li>Fundamentals of people management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/ilm/ilm-07.webp') }}" alt="About Image">
                        <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800"
                            src="{{ asset('front/img/chartered-membership/ilm/ilm-08.webp') }}" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-39.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-07.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
        </ul>
    </div>
    <!-- About Area End  -->

    <!-- Start Ad Banner Area  -->
    <div class="ditigtal-marketing-wrapper edu-cta-banner-area cta-banner-7">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title"><span class="color-textExtra5 ">Leadership </span><img
                                    src="{{ asset('front/images/others/shape-62.png') }}" alt="">
                                <br> and Management Sample<span class="color-secondary"> Certificate</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="btn-group" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <a href="https://www.antaifintechglobal.com/wp-content/uploads/2021/12/Sample-Membership-certificate.pdf" target="_blank"
                                class="edu-btn btn-curved">Download Now <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2" src="{{ asset('front/images/others/shape-64.png') }}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2" src="{{ asset('front/images/others/shape-65.png') }}" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="2" src="{{ asset('front/images/others/shape-63.png') }}" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="-2" src="{{ asset('front/images/others/shape-66.png') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->

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
