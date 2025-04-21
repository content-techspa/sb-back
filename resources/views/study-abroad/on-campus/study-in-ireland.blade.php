@extends('template.template')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--ireland">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title py-5 my-5">Study in Ireland</h1>
                </div>

            </div>
        </div>
    </div>
    <!--=====================================-->
    <!-- Start Categories Area  -->
    {{-- <div class="features-area-3">
        <div class="container">
            <div class="features-grid-wrap">
                <div class="features-box features-style-3 color-primary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front\img\study-abroad\on-campus\svg-icons\university.svg') }}"
                            alt="animated icon">
                        <!-- <i class="icon-34"></i> -->
                    </div>
                    <div class="content">

                        <h4 class="title">22</h4>
                        <p>No. of Universities</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-secondary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front\img\study-abroad\on-campus\svg-icons\tuition-fees.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h4 class="title">€9K - €40K
                        </h4>
                        <p>Average Tuition Fees</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-extra02-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front\img\study-abroad\on-campus\svg-icons\ielts.svg') }}"
                            alt="animated icon">
                        <!-- <i class="icon-36"></i> -->
                    </div>
                    <div class="content">
                        <h4 class="title">6</h4>
                        <p>Minimum IELTS Requirement</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="features-area-3">
        <div class="container">
            <div class="features-grid-wrap">
                <div class="features-box features-style-3 color-primary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/tuition-fees.svg') }}"
                            alt="animated icon">
                        <!-- <i class="icon-34"></i> -->
                    </div>
                    <div class="content">
                        
                        <h4 class="title">€9,850 to €55,000</h4>
                        <p>Annual Tuition Fees</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-secondary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/students.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h4 class="title">40.4K
                            </h4>
                        <p>International Students</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-extra02-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/work-visa.svg') }}"
                            alt="animated icon">
                        <!-- <i class="icon-36"></i> -->
                    </div>
                    <div class="content">
                        <h4 class="title">Up to 2 Year</h4>
                        <p>Post-Study Work Visa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-3 edu-section-gap">
        <div class="container">
            <div class="row row--45">
                <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="left-content">
                        <h2 class="title">Why Study in <span class="color-secondary">Ireland </span>
                        </h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content">
                        <p>
                            Study in Ireland for top universities, an English-speaking environment, rich culture, industry
                            links, post-study work visas, and stunning landscapes.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/quality-education.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">High-Quality Education</h4>
                            <p>
                                World-class universities with top global rankings and excellent research and teaching
                                standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/english-speaking.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                English-Speaking</h4>
                            <p>Easy transition for English-proficient students, enhancing the learning experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/rich-culture.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Rich Culture</h4>
                            <p>Vibrant arts scene, historical landmarks, and welcoming atmosphere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra09-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/industry-links.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Industry Links</h4>
                            <p> Home to many multinationals, offering excellent internship and employment prospects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra10-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/post-study-work.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Post-Study Work</h4>
                            <p>Generous work visas enable graduates to gain experience and potentially settle in Ireland.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra11-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/natural-beauty.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Natural Beauty</h4>
                            <p>Stunning landscapes and ample opportunities for outdoor activities and relaxation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            {{-- <li class="shape-1 scene">
                    <span data-depth=".8"></span>
                </li> --}}
            {{-- <li class="shape-2 scene">
                    <img data-depth="-2" src="{{asset('front/images/about/shape-13.png')}}" alt="shape">
                </li> --}}
            <li class="shape-3">
                <img data-parallax='{"x": 0, "y": 100}' src="{{ asset('front/images/faq/shape-12.png') }}"
                    alt="shape">
            </li>
        </ul>
    </section>
    <!-- End Why Choose Area  -->

    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-1 section-gap-equal remote-brand">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brand-section-heading">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            {{-- <span class="pre-title">Our Partners</span> --}}
                            <h2 class="title">Top universities</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Top universities in Ireland offer world-class education, diverse programs, industry
                                connections, vibrant campuses, research excellence, and strong global rankings.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="brand-grid-wrap">
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-01.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-02.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-03.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-04.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-05.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-06.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-07.webp') }}"
                                alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/universities/logo-08.webp') }}"
                                alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->

    <x-study-category/>

    <!-- Start Testimonial Area  -->
    <!-- <div class="testimonial-area-2 gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        {{-- <span class="pre-title">Testimonials</span> --}}
                        <h2 class="title">What Our Students Say</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        {{-- <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incidid unt labore dolore magna aliquaenim minim.</p> --}}
                    </div>
                </div>
            </div>
            <div class="testimonial-activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/images/testimonial/logo-01.png') }}"
                                        alt="Logo"></div>
                                <p>Studying in Ireland was the best decision. The high-quality education and friendly environment made my experience unforgettable.
                                </p>
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                            </div>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}"
                                        alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Risabh </h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/images/testimonial/logo-02.png') }}"
                                        alt="Logo"></div>
                                <p>
                                    Ireland's universities excel in research. The challenging programs and supportive professors made my studies truly rewarding.</p>
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                            </div>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ asset('front/images/testimonial/testimonial-02.png') }}"
                                        alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">David </h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/images/testimonial/logo-03.png') }}"
                                        alt="Logo"></div>
                                <p>I chose Ireland for its booming tech industry. The connections I made have been invaluable in my software engineering career.</p>
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                            </div>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ asset('front/images/testimonial/testimonial-03.png') }}"
                                        alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Emma </h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{ asset('front/images/testimonial/logo-02.png') }}"
                                        alt="Logo"></div>
                                <p>The MBA program in Ireland exceeded my expectations, preparing me for a successful business management career.</p>
                                <div class="rating-icon">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                            </div>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ asset('front/images/testimonial/testimonial-04.png') }}"
                                        alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Ahmed </h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="1.4" src="{{ asset('front/images/about/shape-30.png') }}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1.4" src="{{ asset('front/images/about/shape-25.png') }}" alt="Shape">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape">
                <img class="d-none-shape-dark" data-depth="2"
                    src="{{ asset('front/images/others/dark-map-2-shape-3.png') }}" alt="Shape">
            </li>
        </ul>
    </div> -->
    <!-- End Testimonial Area  -->

    <!--=====================================-->
    <!--=       	FAQ Area Start      	=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-2 bg-image">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-content">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            {{-- <span class="pre-title">FAq’s</span> --}}
                            <h2 class="title">Frequently Asked Questions</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            {{-- <p>Get answers to common questions about studying in Canada, including applying for study permits, scholarships, and working part-time.</p> --}}
                        </div>
                        <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="1000">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            How much does it cost to study in Ireland?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Tuition fees for international students range from €10,000 to €25,000 per year, depending on the course and institution. Living expenses are estimated at around €7,000 to €12,000 annually.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false">
                                            Are scholarships available for international students in Ireland?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, there are numerous scholarships available for international students. These are offered by the Irish government, universities, and private organizations to help cover tuition fees and living expenses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false">
                                            What are the English language requirements for studying in Ireland?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Most universities require a minimum IELTS score of 6.0 to 6.5, or an equivalent TOEFL score. Specific requirements may vary depending on the course and institution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="row g-5">
                            <div class="col-6" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-1">
                                    <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/faq-01.webp') }}" alt="Faq Images">
                                </div>
                            </div>
                            <div class="col-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                <div class="faq-thumbnail thumbnail-2">
                                    <img src="{{ asset('front/img/study-abroad/on-campus/study-in-ireland/faq-02.webp') }}" alt="Faq Images">
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
            </div>
        </div>
    </div>
    <!--=====================================-->
@endsection
