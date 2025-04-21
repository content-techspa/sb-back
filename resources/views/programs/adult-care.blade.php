@extends('template.template')
@section('content')
    <!--  Breadcrumb Area Start  -->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Adult Care</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">UK Regulated
                            Qualifications</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Adult Care</li>
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
                            <h2 class="title">Level 5 Diploma in <span class="color-secondary"> Adult Care </span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>The Level 5 Diploma in Leadership and Management for Adult Care, awarded by BIIAB, an OFQUAL-regulated body, has been developed by Skills for Care in consultation with employers, learning providers, and service users. This qualification is designed to equip learners with the skills and knowledge needed to lead and manage in the adult care sector.</p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-medium" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/img/programs/adult-care/adult-care-01.webp') }}"
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
                <h2 class="title">Key Benefits</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 about-content">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <i class="icon-47"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Comprehensive Leadership Training</h4>
                            <p>Delve into leadership principles, enhancing your ability to lead teams and navigate adult
                                care complexities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/adult-care/icons/career-advancement.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Career Advancement</h4>
                            <p>Unlock career opportunities, including roles like Care Home Manager, Service Manager, or
                                Director of Adult Social Services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-extra08-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/adult-care/icons/regularity-compliance.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Regulatory Compliance</h4>
                            <p>Ensure compliance with regulatory frameworks and standards, demonstrating your commitment to
                                high-quality care services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/adult-care/icons/personal-development.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Personal Development</h4>
                            <p>Enhance your professional skills and understanding of best practices in adult care through
                                theoretical learning and practical application.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-secondary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/adult-care/icons/professional-development.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Continuing Professional Development (CPD)</h4>
                            <p>Build a strong foundation for ongoing learning, staying updated with trends and innovations
                                in adult care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-2 features-box color-primary-style">
                        <div class="icon">
                            <img src="{{ asset('front/img/programs/adult-care/icons/success-path.svg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Your Path to Success</h4>
                            <p>Position yourself for leadership roles in various adult care settings, from managing care
                                homes to overseeing community-based services or influencing policy development.</p>
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

    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">
                                Become a Dynamic <br><span class="color-secondary"> Leader </span>in Adult Care</h2>
                            <p>Join us in becoming a dynamic and influential leader in adult care. Enroll in the Level 5
                                Diploma in Leadership and Management for Adult Care and explore endless possibilities for
                                personal and professional growth.</p>
                                <button type="button" class="rn-btn edu-btn submit-btn btn-large" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
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
