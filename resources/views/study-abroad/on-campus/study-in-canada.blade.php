@extends('template.template')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--canada">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title py-5 my-5">Study in Canada</h1>
                </div>

            </div>
        </div>
    </div>
    <!--=====================================-->
    <!-- Start Categories Area  -->
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
                        
                        <h4 class="title">C$13K - C$40K</h4>
                        <p>Annual Tuition Fees</p>
                    </div>
                </div>
                <div class="features-box features-style-3 color-secondary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/students.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h4 class="title">800K
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
                        <h4 class="title">Up to 3 Year</h4>
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
                        <h2 class="title">Why Study in <span class="color-secondary">Canada </span>
                            </h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="right-content">
                        <p>Canada offers top-tier education, diverse culture, work opportunities, affordable costs, high quality of life, and clear paths to residency.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/world-class-education.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">World-Class Education</h4>
                            <p>Canadian institutions offer high academic standards and globally recognized degrees, preparing graduates for global job markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/inclusive-diversity.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Inclusive Diversity</h4>
                            <p>Canada's multicultural society enriches students' experiences with different cultures and perspectives, promoting personal growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/quality-of-life.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">High Quality of Life</h4>
                            <p>Canada offers a safe, clean, and welcoming environment with excellent healthcare, natural beauty, and vibrant cities.</p>
                        </div>
                    </div>
                </div>              
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra09-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/experiance-opportunity.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Work Experience Opportunities</h4>
                            <p>Co-op programs, internships, and part-time jobs, along with the Post-Graduation Work Permit (PGWP), enhance career prospects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra10-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/supportive-learning.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Supportive Learning Environment</h4>
                            <p>
                                Canadian universities offer support services for student success, including advising, counseling, and mental health resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra11-style">
                        <div class="icon">
                            <img class="svgInject" src="{{ asset('front/img/study-abroad/on-campus/svg-icons/affordable-education.svg') }}"
                            alt="animated icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Affordable Education and Living Costs</h4>
                            <p>Compared to the USA and UK, Canada provides more affordable education and living costs, with scholarships and financial aid.</p>
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
                <img data-parallax='{"x": 0, "y": 100}' src="{{ asset('front/images/faq/shape-12.png') }}" alt="shape">
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
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            {{-- <span class="pre-title">Our Partners</span> --}}
                            <h2 class="title">Top universities</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Top universities in Canada, like the University of Toronto, McGill University, and the University of British Columbia, offer world-class education, cutting-edge research, and diverse learning environments.</p>
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
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-01.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-02.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-03.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-04.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-05.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-06.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-07.webp')}}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/universities/logo-08.webp')}}" alt="Brand Logo">
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
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
                                <div class="logo"><img src="{{asset('front/images/testimonial/logo-01.png')}}" alt="Logo"></div>
                                <p>"Studying in Canada has been a dream come true. The quality of education and the support from professors have been outstanding. I feel well-prepared for my future career."
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
                                    <img src="{{asset('front/images/testimonial/testimonial-01.png')}}" alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Maria</h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{asset('front/images/testimonial/logo-02.png')}}" alt="Logo"></div>
                                <p>Choosing to pursue my MBA in Canada was the best decision. The program is challenging yet rewarding, and the opportunities for networking and career growth are unparalleled."</p>
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
                                    <img src="{{asset('front/images/testimonial/testimonial-02.png')}}" alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Raj</h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{asset('front/images/testimonial/logo-03.png')}}" alt="Logo"></div>
                                <p>The hands-on experience and research opportunities in my program have been invaluable. I've also been able to explore Canada's natural beauty, which has been a bonus!"</p>
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
                                    <img src="{{asset('front/images/testimonial/testimonial-03.png')}}" alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">Sophie</h5>
                                    <span class="subtitle">MBA Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="content">
                                <div class="logo"><img src="{{asset('front/images/testimonial/logo-02.png')}}" alt="Logo"></div>
                                <p>  "Studying in Canada has opened up a world of possibilities for me. The program is cutting-edge, and the support from faculty and peers has been incredible. I can't wait to see where this journey takes me.</p>
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
                                    <img src="{{asset('front/images/testimonial/testimonial-04.png')}}" alt="Testimonial">
                                </div>
                                <div class="info">
                                    <h5 class="title">David</h5>
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
                    <img data-depth="1.4" src="{{asset('front/images/about/shape-30.png')}}" alt="Shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1.4" src="{{asset('front/images/about/shape-25.png')}}" alt="Shape">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                <img class="d-block-shape-light" data-depth="2" src="{{asset('front/images/others/map-shape-3.png')}}" alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="{{asset('front/images/others/dark-map-2-shape-3.png')}}" alt="Shape">
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
                            <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                {{-- <span class="pre-title">FAq’s</span> --}}
                                <h2 class="title">Frequently Asked Questions</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                {{-- <p>Get answers to common questions about studying in Canada, including applying for study permits, scholarships, and working part-time.</p> --}}
                            </div>
                            <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                How do I apply for a study permit to study in Canada?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>You need a letter of acceptance, valid passport, proof of funds, and a clean record. Apply online or through a visa center.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                Are there scholarships available for international students in Canada?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Yes, scholarships are available from various sources. Research and apply early as deadlines vary.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                Can I work part-time while studying in Canada?
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>Yes, up to 20 hours per week during academic sessions and full-time during breaks. A work permit is included with your study permit.</p>
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
                                        <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/faq-01.webp')}}" alt="Faq Images">
                                    </div>
                                </div>
                                <div class="col-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                    <div class="faq-thumbnail thumbnail-2">
                                        <img src="{{asset('front/img/study-abroad/on-campus/study-in-canada/faq-02.webp')}}" alt="Faq Images">
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene">
                                    <img data-depth="2" src="{{asset('front/images/faq/shape-06.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-2">
                                    <img data-depth="-2" src="{{asset('front/images/faq/shape-04.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-3 scene">
                                    <img data-depth="2" src="{{asset('front/images/faq/shape-16.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-4 scene">
                                    <img data-depth="-2" src="{{asset('front/images/banner/shape-03.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-5 scene">
                                    <img data-depth="-2" src="{{asset('front/images/faq/shape-08.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-6 scene">
                                    <img data-depth="1.7" src="{{asset('front/images/faq/shape-09.png')}}" alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
@endsection
