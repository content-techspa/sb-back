@extends('template.template')
@section('content')
    <!--=       Breadcrumb Area Start      	=-->
    <!--=====================================-->
    <div class="edu-breadcrumb-area breadcrumb-style-5">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       About Us Area Start      	=-->
    <!--=====================================-->
    <div class="edu-section-gap edu-about-area about-style-8">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">About Us</span>
                            <h2 class="title">Our program <span class="color-secondary">empowers learners</span> to succeed
                                through education.</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>We are empowering learners worldwide to achieve success through transformative and
                                comprehensive educational programs.</p>
                        </div>
                        <ul class="features-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <li>Tailored Learning Paths</li>
                            <li>Global Accessibility</li>
                            <li>Holistic Curriculum</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <div class="row g-5" id="masonry-gallery">
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-down"
                                    data-sal-duration="1000">
                                    <img src="{{ asset('front/images/about/about-13.webp') }}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-2" data-sal-delay="50" data-sal="slide-down"
                                    data-sal-duration="1000">
                                    <img src="{{ asset('front/images/about/about-14.webp') }}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-3" data-sal-delay="50" data-sal="slide-up"
                                    data-sal-duration="1000">
                                    <img src="{{ asset('front/images/about/about-16.webp') }}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-4" data-sal-delay="50" data-sal="slide-up"
                                    data-sal-duration="1000">
                                    <img src="{{ asset('front/images/about/about-15.webp') }}" alt="About Images">
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{ asset('front/images/about/shape-33.png') }}" alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-25.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape Images">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span data-depth=".8"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-4 gap-lg-bottom-equal">
        <div class="container">
            <div class="brand-grid-wrap brand-style-2">
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/qualifi-center.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/plc.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/arden-university.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/york-college.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/cccu.webp') }}" alt="Brand Logo">
                </div>
                <div class="brand-grid">
                    <img src="{{ asset('front/img/antai-universities/bcs.webp') }}" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->

    <!--=====================================-->
    <div class="gap-bottom-equal edu-about-area about-style-1 about-style-10">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                {{-- <div class="col-lg-6" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/img/about/director.jpg') }}" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-44.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-1" src="{{ asset('front/images/about/shape-45.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title"> Director's Message</span>
                            <h2 class="title">Message from<span class="color-primary"> the Director </span>of Antai Fintech Global Ltd</h2>

                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Welcome to Antai Fintech Global Ltd! Our mission is to empower learners and institutions worldwide by creating transformative opportunities in education and growth. As a leading ed-tech provider, we bridge innovation and education to ensure knowledge knows no boundaries.</p>
                            <p>We prioritize Excellence, Accessibility, and Innovation by partnering with renowned institutions to offer high-quality academic programs, study abroad opportunities, and career-enhancing solutions using cutting-edge technology. Our goal is to make learning efficient, interactive, and impactful for students and professionals alike.</p>
                            <p>Whether you’re aiming for a global career, seeking accreditation support, or exploring partnerships, Antai Fintech Global is here to help you achieve your goals. We are honored to have you with us—explore our offerings and let’s build a brighter future together!</p>
                        </div>
                        {{-- <div class="signature">
                            <img src="{{ asset('front/images/about/about-11.png') }}" alt="signature img">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="gap-bottom-equal edu-about-area about-style-1 about-style-10">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                {{-- <div class="col-lg-6" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/img/about/antai-principal.webp') }}" alt="About Image">
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-44.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-1" src="{{ asset('front/images/about/shape-45.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">Principal's Message</span>
                            <h2 class="title">Message from<span class="color-primary"> the Principal </span>of Antai Fintech Global Ltd</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>
                                Welcome to Antai Fintech Global Ltd! As your Principal, I am privileged to lead our quest for excellence in education and professional development globally. At Antai, we are committed to enriching educational pathways and providing cutting-edge academic services to empower learners and institutions. Our mission is to inspire individuals to achieve their fullest potential and connect them with top-tier educational and professional opportunities.</p>
                            <p>In partnership, we uphold our core values of quality, compliance, and integrity. We are dedicated to advancing global educational and career opportunities and supporting sustainable institutional growth.</p>
                            <p>Explore our diverse services and join us in making a significant impact on the educational landscape. Together, we will shape the leaders of tomorrow. Warm regards from the Antai team, where we transform your educational journey into a lasting legacy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

    <!-- Start Testimonial Area  -->
    <div class="testimonial-area-13 gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <h2 class="title">Our Mission & Vision</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-slide testimonial-style-2">
                        <div class="content">
                            <h4 class="title">Our Mission</h4>
                            <p>Our mission is to empower learners to explore education and career opportunities freely. We
                                foster an environment that values resilience, curiosity, and the courage to challenge norms,
                                guiding students to become leaders who embrace unconventional paths and strive for success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-slide testimonial-style-2">
                        <div class="content">
                            <h4 class="title">Our Vision</h4>
                            <p>AFG believes education thrives when shared globally. We empower students to pursue their
                                dreams by providing access to quality education at premier institutions. Through our
                                innovative approach, we inspire students to shape and succeed in their unique career paths.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="100" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="1" src="{{ asset('front/images/others/shape-52.png') }}" alt="Shape">
                </li>
                <li class="shape-2" data-sal-delay="100" data-sal="fade" data-sal-duration="1000">
                    <span></span>
                </li>
                <li class="shape-3 scene" data-sal-delay="100" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="1.5" src="{{ asset('front/images/about/shape-25.png') }}" alt="Shape">
                </li>
                <li class="shape-4 scene" data-sal-delay="100" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1.5" src="{{ asset('front/images/others/shape-53.png') }}" alt="Shape">
                </li>
            </ul>
        </div>

    </div>
    <!--=====================================-->
    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-2 section-gap-large">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Why choose Antai Fintech Global</span>
                <h2 class="title">The Best <span class="color-secondary">Beneficial</span> Side <br> of Antai Fintech
                    Global</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box features-box color-primary-style">
                        <div class="icon">
                            <i class="icon-45"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">High Quality Courses</h4>
                            <p>Our curriculum is carefully designed to provide high-quality educational content and promote
                                mastery of skills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box features-box color-secondary-style">
                        <div class="icon">
                            <i class="icon-48"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Flexible Learning</h4>
                            <p>Align your academic journey with your goals and schedule, maximizing outcomes for your
                                educational success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box features-box color-extra08-style">
                        <div class="icon">
                            <i class="icon-47"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Expert Instructors</h4>
                            <p>Learn from seasoned educators who bring real-world experience and industry insights to enrich
                                your learning journey.</p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span></span>
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth="1"></span>
            </li>
            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}" alt="shape">
            </li>
            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth="-1"></span>
            </li>
            <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img data-depth="2" src="{{ asset('front/images/about/shape-40.png') }}" alt="shape">
            </li>
        </ul>
    </section>
    <!-- End Why Choose Area  -->

    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <div class="testimonial-area-1 section-gap-equal">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-5">
                    <div class="testimonial-heading-area">
                        <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students Have To Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Discover firsthand experiences of transformation and success from individuals empowered by
                                Antai Fintech Global's programs.</p>
                            <a href="#" class="edu-btn btn-large">View All<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="home-one-testimonial-activator swiper ">
                        <div class="swiper-wrapper">
                            @if ($testimonials && $testimonials->count() > 0)
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="testimonial-grid">
                                            <div class="content">
                                                <p>{{ $testimonial->testimonial }}</p>
                                                <div class="rating-icon">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <h5 class="title">{{ $testimonial->title }}</h5>
                                                <span class="subtitle">{{ $testimonial->subtitle }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No testimonials available.</p>
                            @endif

                            {{-- <div class="swiper-slide">
                                <div class="testimonial-grid">
                                    <div class="thumbnail">
                                        <img src="{{ asset('front/images/testimonial/testimonial-01.png') }}"
                                            alt="Testimonial">
                                        <span class="qoute-icon"><i class="icon-26"></i></span>

                                    </div>

                                    <div class="content">
                                        <p>Thank you, team and Morris, for your constant support and encouragement. I am truly grateful for everything.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Jaspreet Kaur</h5>
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
                                        <p>Thank you, Miss Shantele Morris, for your invaluable guidance and support. I truly miss learning from you.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Komal (Kia)</h5>
                                        <span class="subtitle">Student</span>
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
                                        <p>Thank you, Morris and team, for your dedicated support and hard work. Your efforts make all the difference.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Ghosia</h5>
                                        <span class="subtitle">Student</span>
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

                                        <p>Thank you, Mrs. Morris, for your extra efforts and constant encouragement through challenging moments. Your support is invaluable.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Dona Michele</h5>
                                        <span class="subtitle">Student</span>
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


                                        <p>Hello, I'm Vedran Tekriwal, excited for Level 2. I'm grateful to Mrs. Wilson-Dressing for teaching programming and web design.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Vedran Tekriwal</h5>
                                        <span class="subtitle">Student</span>
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

                                        <p>Hello, I'm Sridhika Tekriwal from Raghunau, India. I enjoyed Level 1, especially learning loops, and eagerly await Level 2.</p>
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <h5 class="title">Sridhika Tekriwal</h5>
                                        <span class="subtitle">Student</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area  -->
    <!-- End Testimonial Area  -->
    <!--=====================================-->
    <!--=       CounterUp Area Start        =-->
    <!--=====================================-->
    {{-- <div class="counterup-area-8 gap-lg-bottom-equal">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-counterup counterup-style-4">
                            <div class="icon primary-color">
                                <i class="icon-48"></i>
                            </div>
                            <h2 class="counter-item count-number">
                                <span class="odometer" data-odometer-final="29.3">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Student Enrolled</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-counterup counterup-style-4">
                            <div class="icon secondary-color">
                                <i class="icon-47"></i>
                            </div>
                            <h2 class="counter-item count-number">
                                <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Class Completed</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-counterup counterup-style-4">
                            <div class="icon extra08-color">
                                <i class="icon-49"></i>
                            </div>
                            <h2 class="counter-item count-number">
                                <span class="odometer" data-odometer-final="100">.</span><span>%</span>
                            </h2>
                            <h6 class="title">Satisfaction Rate</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-counterup counterup-style-4">
                            <div class="icon extra05-color">
                                <i class="icon-50"></i>
                            </div>
                            <h2 class="counter-item count-number">
                                <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                            </h2>
                            <h6 class="title">Top Instructors</h6>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="{{asset('front/images/others/map-shape-3.png')}}" alt="Shape">
                </li>
            </ul>
        </div> --}}
    <!--=====================================-->
    <!--=        Team Area Start       	    =-->
    <!--=====================================-->
    <!-- Start Team Area  -->
    {{-- <div class="edu-team-area team-area-5 section-gap-large">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Team Members</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-2">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-05.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Jane Seymour</a></h5>
                                <span class="designation">UI Designer</span>
                                <p>Consectetur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-2">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-06.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Edward Norton</a></h5>
                                <span class="designation">Web Developer</span>
                                <p>Consectetur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-2">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-07.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Penelope Cruz</a></h5>
                                <span class="designation">Digital Marketer</span>
                                <p>Consectetur adipisicing elit, sed do eius mod tempor incididunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth=".8"></span>
            </li>
            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}" alt="shape">
            </li>
            <li class="shape-3" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span></span>
            </li>
        </ul>
    </div> --}}
    <!-- End Team Area  -->
@endsection
