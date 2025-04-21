@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-1">
        <div class="container">
            @if ($slider)
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                                {!! $slider->title !!}
                            </h1>
                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                {!! nl2br(e($slider->description)) !!}
                            </p>
                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <a href="{{ $slider->button_link }}" class="edu-btn">
                                    {{ $slider->button_text }} <i class="icon-4"></i>
                                </a>
                            </div>
                            {{-- <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Antai <span
                                class="color-secondary">Fintech Global</span> <br> Empowers Education Worldwide</h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Flexible pathways, global
                            partnerships, and career-driven education for ambitious learners worldwide.</p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <a href="{{ url('/#exclusive-programs') }}" class="edu-btn">Find courses <i
                                    class="icon-4"></i></a>
                        </div> --}}
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="2" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                                <img src="{{ asset('storage/slider/' . $slider->image) }}" alt="{{ $slider->image_alt }}">
                                {{-- <img src="{{ asset('front/images/banner/girl-1.webp') }}" alt="Girl Image"> --}}
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="1.5" src="{{ asset('front/images/about/shape-15.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-1.5" src="{{ asset('front/images/about/shape-16.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <span data-depth="3" class="circle-shape"></span>
                                </li>
                                <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-1" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                        alt="Shape">
                                </li>
                                <li class="shape-6 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-2" src="{{ asset('front/images/about/shape-18.png') }}"
                                        alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="shape-7">
            <img src="{{ asset('front/images/about/h-1-shape-01.png') }}" alt="Shape">
        </div>
    </div>

    <!--=====================================-->
    <!--=       Features Area Start      =-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="features-area-2">
        <div class="container">
            <div class="features-grid-wrap">
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/online-class.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> Flexible Learning <br> Options</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/instructor.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>Expert</span>Instructors</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon certificate">
                        <img class="svgInject" src="{{ asset('front/images/animated-svg-icons/certificate.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>Online</span>Certifications</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon certificate">
                        <img class="svgInject" src="{{ asset('front/img/antai-universities/curriculum.svg') }}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>Comprehensive <br>Curriculum</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Categories Area  -->

    <!--=====================================-->
    <!--=       Categories Area Start      =-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    {{-- <div class="edu-categorie-area categorie-area-2 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Top Categories</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Business Management</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-secondary-style">
                        <div class="icon">
                            <i class="icon-10 art-design"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Arts & Design</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra01-style">
                        <div class="icon">
                            <i class="icon-11 personal-development"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Personal Development</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-tertiary-style">
                        <div class="icon">
                            <i class="icon-12 health-fitness"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Health & Fitness</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra02-style">
                        <div class="icon">
                            <i class="icon-13 data-science"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Data Science</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra03-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Marketing</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra04-style">
                        <div class="icon">
                            <i class="icon-15"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Business & Finance</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra05-style">
                        <div class="icon">
                            <i class="icon-16 computer-science"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Computer Science</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="icon">
                            <i class="icon-17 video-photography"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title">Video & Photography</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Categories Area  -->
    <!--=====================================-->
    <!--=       About Us Area Start      	=-->
    <!--=====================================-->
    <div class="section-gap-equal edu-about-area about-style-1">
        <div class="container edublink-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" src="{{ asset('front/images/about/about-01.webp') }}" alt="About Image">
                        <div class="video-box" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="{{ asset('front/images/about/about-02.webp') }}" alt="About Image">
                                    {{-- <a href="https://www.youtube.com/watch?v=PICj5tr9hcc"
                                        class="popup-icon video-popup-activation">
                                        <i class="icon-18"></i>
                                    </a> --}}
                                </div>
                                {{-- <div class="loading-bar">
                                    <span></span>
                                    <span></span>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="award-status bounce-slide">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-21"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title">29+</h6>
                                    <span class="subtitle">Wonderful Awards</span>
                                </div>
                            </div>
                        </div> --}}
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-36.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-1" src="{{ asset('front/images/about/shape-37.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1" src="{{ asset('front/images/about/shape-02.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">About Us</span>
                            <h2 class="title">Learn & Grow Your Skills From <span class="color-secondary">Anywhere</span>
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Antai Fintech Global (AFG) offers a transformative learning experience, allowing learners to
                                navigate diverse pathways seamlessly while receiving unparalleled support and guidance.</p>
                        </div>
                        <ul class="features-list">
                            <li>Flexible Learning</li>
                            <li>Personalized Career Guidance</li>
                            <li>Expert Trainers</li>
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
    <!--=====================================-->
    <!--=       Course Area Start      		=-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="edu-course-area course-area-3 section-gap-large bg-lighten01" id="exclusive-programs">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Our Programmes</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="isotope-wrapper">
                <div class="row g-5 isotope-list">
                    @foreach ($homeUniversities as $item)
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-lg-4 isotope-item">
                            <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('storage/' . $item['thumbnail']) }}"
                                                alt="Course Meta">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">{{ $item['name'] }}</h5>
                                        <p>{{ $item['description'] }}</p>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span
                                                class="rating-count">{{ $item['rating'] }}/{{ $item['totalReviews'] }}</span>
                                        </div>
                                        <div class="read-more-btn">
                                            <button type="button" class="rn-btn edu-btn submit-btn btn-small "
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Apply Now <i class="icon-4"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                    @endforeach

                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png"
                    alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/3-Home-1.png" alt="Shape">
            </li>
            <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png"
                    alt="Shape">
                <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/dark-map-shape-3.png"
                    alt="Shape">
            </li>
        </ul>
    </div>
    <!-- End Course Area -->
    <!--=====================================-->
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    <div class="counterup-area-2">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="counterup-box-wrap">
                        <div class="counterup-box counterup-box-1">
                            <div class="edu-counterup counterup-style-2">
                                <h2 class="counter-item count-number primary-color">
                                    <span class="odometer" data-odometer-final="978">.</span><span>+</span>
                                </h2>
                                <h6 class="title">Student Enrolled</h6>
                            </div>
                            <div class="edu-counterup counterup-style-2">
                                <h2 class="counter-item count-number secondary-color">
                                    <span class="odometer" data-odometer-final="500">.</span><span>+</span>
                                </h2>
                                <h6 class="title">CERTIFICATIONS AWARDED</h6>
                            </div>
                        </div>
                        <div class="counterup-box counterup-box-2">
                            <div class="edu-counterup counterup-style-2">
                                <h2 class="counter-item count-number extra05-color">
                                    <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                                </h2>
                                <h6 class="title">INDUSTRY PARTNERSHIPS</h6>
                            </div>
                            <div class="edu-counterup counterup-style-2">
                                <h2 class="counter-item count-number extra02-color">
                                    <span class="odometer" data-odometer-final="92.7">.</span><span>%</span>
                                </h2>
                                <h6 class="title">CAREER ADVANCEMENT RATE</h6>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="-2" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-2">
                                <img class="rotateit" src="{{ asset('front/images/counterup/shape-02.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="1.6" src="{{ asset('front/images/counterup/shape-04.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-4 scene">
                                <img data-depth="-1.6" src="{{ asset('front/images/counterup/shape-05.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

    <!--=====================================-->
    <!--=      Call To Action Area Start   	=-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    {{-- <div class="home-one-cta-two cta-area-1 section-gap-equal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="home-one-cta edu-cta-box bg-image">
                        <div class="inner">
                            <div class="content text-md-end">
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a
                                        href="mailto:admin@antaifintechglobal.com">admin@antaifintechglobal.com</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+02037613775">02037613775</a></h3>
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
    </div> --}}
    <!-- End CTA Area  -->

    <!--=====================================-->
    <!--=      		Team Area Start   		=-->
    <!--=====================================-->
    <!-- Start Team Area  -->
    {{-- <div class="edu-team-area team-area-1 gap-tb-text">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Instructors</span>
                <h2 class="title">Course Instructors</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-01.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Jane Seymour</a></h5>
                                <span class="designation">UI Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-02.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Edward Norton</a></h5>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-03.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Penelope Cruz</a></h5>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/images/team/team-04.webp') }}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">John Travolta</a></h5>
                                <span class="designation">WordPress Expert</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            </div>
        </div>
    </div> --}}
    <!-- End Team Area  -->
    <!--=====================================-->
    <!--=       Why Choose Area       =-->
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
    <!--=      CTA Banner Area Start   		=-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Get Your Quality Skills <span class="color-secondary">Certificate</span>
                                Through Antai Fintech Global</h2>
                            <a type="button" class="rn-btn edu-btn submit-btn btn-large" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Get Started Now <i class="icon-4"></i>
                            </a>
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
    <!--=====================================-->
    <!--=      		Brand Area Start   		=-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-1 section-gap-equal">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brand-section-heading">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Our Partners</span>
                            <h2 class="title">Global Learning Partnerships: Antai</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Access exclusive learning opportunities and industry insights through our esteemed network of
                                partners.</p>
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
                            <img src="{{ asset('front/img/antai-universities/gbc.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/cccu.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/cchs.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/dmu-dubai.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/biiab-centre.webp') }}" alt="Brand Logo">
                        </div>
                        <div class="brand-grid">
                            <img src="{{ asset('front/img/antai-universities/ilm.webp') }}" alt="Brand Logo">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->
    <!--=====================================-->
    <!--=      		Blog Area Start   		=-->
    <!--=====================================-->
    <!-- Start Blog Area  -->
    {{-- <div class="edu-blog-area blog-area-1 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Latest Articles</span>
                <h2 class="title">Get News with EduBlink</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Blog Grid  -->
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-1">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details.html">
                                    <img src="{{asset('front/images/blog/blog-01.jpg')}}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content position-top">
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                                </div>
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">ONLINE</a>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Become a Better Blogger: Content
                                        Planning</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>Oct 10, 2024</li>
                                    <li><i class="icon-28"></i>Com 09</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Grid  -->
                <!-- Start Blog Grid  -->
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-1">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details.html">
                                    <img src="{{asset('front/images/blog/blog-02.jpg')}}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content position-top">
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                                </div>
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">LECTURE</a>
                                </div>
                                <h5 class="title"><a href="blog-details.html">How to Keep Workouts Fresh in the
                                        Morning</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>Oct 10, 2024</li>
                                    <li><i class="icon-28"></i>Com 09</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed do eiusmod ux tempor incid idunt
                                    labore dol oremagna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Grid  -->
                <!-- Start Blog Grid  -->
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-1">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details.html">
                                    <img src="{{asset('front/images/blog/blog-03.jpg')}}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content position-top">
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                                </div>
                                <div class="category-wrap">
                                    <a href="#" class="blog-category">BUSINESS</a>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Four Ways to Keep Your Workout Routine
                                        Fresh</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>Oct 10, 2024</li>
                                    <li><i class="icon-28"></i>Com 09</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed do eiusmod ux tempor incid idunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Grid  -->
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene">
                <img data-depth="-1.4" src="{{asset('front/images/about/shape-02.png')}}" alt="Shape">
            </li>
            <li class="shape-2 scene">
                <span data-depth="2.5"></span>
            </li>
            <li class="shape-3 scene">
                <img data-depth="-2.3" src="{{asset('front/images/counterup/shape-05.png')}}" alt="Shape">
            </li>
        </ul>
    </div> --}}
    <!-- End Blog Area  -->
@endsection
