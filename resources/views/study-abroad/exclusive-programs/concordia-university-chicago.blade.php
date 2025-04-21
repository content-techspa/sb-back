@extends('template.template')
@section('content')
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Discover Your
                            Future at
                            <span class="color-primary"> Concordia </span>
                            University Chicago
                        </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                            Empowering Leaders with Purpose and Faith at Concordia University Chicago for Over 160 Years.
                        </p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <button type="button" class="rn-btn edu-btn submit-btn " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Now <i class="icon-4"></i>
                            </button>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span></span>
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span data-depth="2.5"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/concordia-university-cover.webp') }}"
                                alt="flag-boy Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-3" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/about/shape-15.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-1.5" src="{{ asset('front/images/counterup/shape-05.png') }}"
                                    alt="Shape">
                            </li>
                            <li class="shape-5" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/svg-icons/circle-big.svg') }}" alt="Shape">
                            </li>
                            <li class="shape-6" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img src="{{ asset('front/images/svg-icons/circle-small.svg') }}" alt="Shape">
                            </li>
                            <li class="shape-7 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-8">
                <img src="{{ asset('front/images/about/h-1-shape-01.png') }}" alt="Shape">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Features Area Start      	=-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="features-area-6">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Why Choose Concordia University Chicago?</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>Experience personalized learning, diverse programs, a supportive community, <br> and access to Chicago’s
                    opportunities at Concordia.</p>
            </div>
            <div class="features-grid-wrap">
                <div class="features-box features-style-6">
                    <div class="icon icon-course">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/online-class.svg') }}"
                            alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Comprehensive Programs</h5>
                        <p>A wide range of undergraduate and graduate degrees in various fields, including Business,
                            Education, and Health Sciences.</p>
                    </div>
                </div>
                <div class="features-box features-style-6">
                    <div class="icon icon-tag">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/instructor.svg') }}"
                            alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Personalized Learning</h5>
                        <p>Small class sizes and dedicated faculty provide individualized attention to foster academic
                            growth.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon certificate icon-certificate">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/certificate.svg') }}"
                            alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Convenient Location</h5>
                        <p> Situated in River Forest, Illinois, offering proximity to Chicago’s professional and cultural
                            opportunities.</p>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member">
                        <img class="svgInject" src="{{ asset('front/images/svg-icons/user.svg') }}"
                            alt="animated icon" />
                    </div>
                    <div class="content">
                        <h5 class="title">Strong Community</h5>
                        <p>A supportive campus environment that promotes inclusivity, collaboration, and student success.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="{{ asset('front/images/about/shape-37.png') }}" alt="Shape" />
                </li>
                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="{{ asset('front/images/others/shape-41.png') }}" alt="Shape" />
                </li>
            </ul>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!--=====================================-->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="edu-about-area about-style-3 language-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <img class="main-img-1" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800"
                            src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/cuc-01.webp') }}" alt="About Image" />
                        <div class="main-img-wrapper">
                            <div class="main-img-inner" data-sal-delay="100" data-sal="fade-in" data-sal-duration="800">
                                <img class="main-img-2" src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/cuc-02.webp') }}"
                                    alt="About Image" />
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{ asset('front/images/about/shape-13.png') }}"
                                    alt="Shape" />
                            </li>
                            <li class="shape-2" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img class="rotateit" src="{{ asset('front/images/faq/shape-04.png') }}"
                                    alt="Shape" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-content">
                        <div class="section-title section-left">
                            <span class="pre-title">About Us</span>
                            <h2 class="title">
                                Empowering Leaders through
                                <span class="color-primary">Faith</span> and Excellence
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu"
                                    type="button" role="tab" aria-selected="true">
                                    About CUC
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission"
                                    type="button" role="tab" aria-selected="false">
                                    Our Mission
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision"
                                    type="button" role="tab" aria-selected="false">
                                    Our Vision
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                <p>Concordia University Chicago (CUC) is a distinguished institution offering a wide array
                                    of undergraduate and graduate programs. Located in River Forest, Illinois, CUC provides
                                    students with a supportive and engaging learning environment, focusing on academic
                                    excellence, personal growth, and practical skills. With a commitment to faith,
                                    community, and service, CUC prepares students to lead with purpose in their careers and
                                    communities.</p>
                            </div>
                            <div class="tab-pane fade" id="about-mission" role="tabpanel">
                                <p>Our mission is to provide a Christ-centered, student-focused education that empowers
                                    individuals to develop their intellectual, professional, and spiritual potential. We are
                                    dedicated to fostering a learning environment that encourages critical thinking,
                                    leadership, and service to others, preparing students for success in a dynamic and
                                    diverse world.</p>
                            </div>
                            <div class="tab-pane fade" id="about-vision" role="tabpanel">
                                <p>Our vision is to be a premier institution that nurtures the development of well-rounded
                                    leaders who are equipped to transform the world. We aim to create a diverse and
                                    inclusive academic community, focused on excellence, service, and faith, that prepares
                                    students for meaningful lives and careers in a rapidly changing global society.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="edu-course-area course-area-3 section-gap-large bg-lighten04">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Programmes</span>
                <h2 class="title">Academic Programmes</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="isotope-wrapper">
                <div class="isotop-button isotop-filter">
                    <button data-filter=".undergraduate" class="is-checked">
                        <span class="filter-text">Undergraduate Programmes</span>
                    </button>
                    <button data-filter=".graduate">
                        <span class="filter-text">Postgraduate Programmes</span>
                    </button>
                </div>
                <div class="row g-5 isotope-list">
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-arts.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Art
                                    </h5>
                                    <p>BA in Art focusing on creative expression and artistic techniques.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-christian-ministry.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                            BA Christian Ministry
                                    </h5>
                                    <p>BA in Christian Ministry emphasizing pastoral leadership and theological education.
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-classical-liberal-studies.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Classical Liberal Studies
                                    </h5>
                                    <p>BA in Classical Liberal Studies, exploring history, philosophy, and literature.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-biology.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">

                                    <h5 class="title">
                                        BA Biology
                                    </h5>
                                    <p>BA in Biology studying life, ecosystems, and scientific research methods.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-computer-information-systems.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                            BA Computer Information Systems
                                    </h5>
                                    <p>BA focusing on practical applications of information technology in business.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-computer-science.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Computer Science
                                    </h5>
                                    <p>BA in Computer Science, developing programming and computational problem-solving
                                        skills.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-accounting.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Accounting
                                    </h5>
                                    <p>BA in Accounting, mastering financial reporting, auditing, and fiscal analysis.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-communications.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                            BA Communications
                                    </h5>
                                    <p>BA in Communications exploring media, public relations, and digital communication.
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-entrepreneurship-and-innovation.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Entrepreneurship & Innovation
                                    </h5>
                                    <p>BA in Entrepreneurship, fostering business creation and innovative thinking skills.
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-director-of-christian-education.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Director of Christian Education (DCE)
                                    </h5>
                                    <p>BA for developing educational leaders in Christian community settings.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-director-of-christian-education-certification.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                            BA Director of Christian Education Certification
                                            with Elementary Education Licensure (DCED)
                                    </h5>
                                    <p>BA certifying Christian educators with a focus on elementary education.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/ba-spanish-education.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BA Spanish Education PK-12
                                    </h5>
                                    <p>BA in Spanish Education, preparing teachers for pre-kindergarten to 12th grade.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-biology.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BS Biology
                                    </h5>
                                    <p>BS in Biology, providing extensive scientific understanding and laboratory
                                        experience.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-computer-science.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                            BS Computer Science
                                    </h5>
                                    <p>BS in Computer Science, advanced study in algorithms and systems.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-health-science.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BS Health Science
                                    </h5>
                                    <p>BS in Health Science, focusing on healthcare systems and patient care.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-accounting.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BS Accounting
                                    </h5>
                                    <p>BS in Accounting, focusing on comprehensive accounting skills and ethics.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-business-intelligence-and-analytics.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">                                       
                                            BS Business Intelligence & Analytics
                                    </h5>
                                    <p>BS in analyzing data trends for strategic business decision-making.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-management.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BS Management
                                    </h5>
                                    <p>BS in Management, developing leadership skills for business operations.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-early-childhood-education.webp')}}" alt="Course Meta"/>
                                    </a>
                                </div>
                                <div class="content">

                                    <h5 class="title">
                                        BS Early Childhood Education
                                    </h5>
                                    <p>BS specializing in educational strategies for early childhood development.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(5.0 /7 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-elementary-education.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">                                      
                                            BS Elementary Education
                                    </h5>
                                    <p>BS in Elementary Education, training teachers for grades K-6.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.9 /5 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item undergraduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/bs-middle-grades-education.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        BS Middle Grades Education - English/Language Arts
                                    </h5>
                                    <p>BS focusing on teaching English and Language Arts in middle grades.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /9 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/mba-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level">Business </span>
                                    <h5 class="title">
                                        MBA (Master of Business Administration)
                                    </h5>
                                    <p>MBA program enhancing strategic leadership and business management skills globally.
                                    </p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.7 /94 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                    <!-- Start Single Course  -->
                    <div class="col-md-6 col-lg-4 isotope-item graduate">
                        <div class="edu-course course-style-3" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('front/img/study-abroad/exclusive-programs/concordia-university/programmes/msc-pg.webp') }}" alt="Course Meta" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="course-level"> Science</span>
                                    <h5 class="title">
                                        MS (Master of Science)
                                    </h5>
                                    <p>MS program emphasizing specialized knowledge, research skills, and technical
                                        expertise.</p>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">(4.0 /15 Rating)</span>
                                    </div>
                                    <div class="read-more-btn">
                                        <button type="button" class="rn-btn edu-btn btn-small submit-btn "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Apply Now <i class="icon-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2" src="{{ asset('front/images/others/3-Home-1.png') }}"
                    alt="Shape" />
            </li>
            <li class="shape-2">
                <img class="d-block-shape-light" data-depth="2" src="{{ asset('front/images/others/map-shape-3.png') }}"
                    alt="Shape" />
                <img class="d-none-shape-dark" data-depth="2"
                    src="{{ asset('front/images/others/dark-map-shape-3.png') }}" alt="Shape" />
            </li>
        </ul>
    </div>
    <!-- End Course Area -->
    <!--=====================================-->

     <!--=====================================-->
     <div class="gap-top-equal">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Requirements</span>
                <h2 class="title">Admission Requirements</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h6 class="title">Undergraduate</h6>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="icon-20"></i>Signed Application Form</li>
                                <li><i class="icon-20"></i>Proof of English Proficiency: </li>
                                <li> - TOEFL Overall Score 72 Minimum</li>
                                <li> - IELTS Overall Score 6.0</li>
                                <li> - Duolingo 95</li>
                                <li> - Michigan test score 85</li>
                                <li><i class="icon-20"></i>High School/ Secondary Transcripts</li>
                                <li><i class="icon-20"></i>Certificate of Finance (UG $51,954)</li>
                                <li><i class="icon-20"></i>Copy of Passport ID Page</li>
                                <li><i class="icon-20"></i>Official US College Transcripts
                                    (for Transfer Students)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h6 class="title">Graduate</h6>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="icon-20"></i>Signed Application Form</li>
                                <li><i class="icon-20"></i>Proof of English Proficiency: </li>
                                <li> - TOEFL Overall Score 72 Minimum</li>
                                <li> - IELTS Overall Score 6.0</li>
                                <li> - Pearson's PTE score of 61</li>
                                <li> - Michigan test score 85</li>
                                <li><i class="icon-20"></i>Undergraduate Transcripts</li>
                                <li><i class="icon-20"></i>Bachelor's Degree</li>
                                <li><i class="icon-20"></i>Certificate of Finance (MS $44,812, MBA $40,438)</li>
                                <li><i class="icon-20"></i>Copy of Passport ID Page</li>
                                <li><i class="icon-20"></i>Official US College Transcripts
                                    (for Transfer Students)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->

     <!--=====================================-->
     <div class="gap-top-equal">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Tuition</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h6 class="title">Undergraduate</h6>
                            <div class="price-wrap">
                                <span class="amount">$145,720*</span>
                                <span class="duration">Approximately 4 years</span>
                            </div>
                            <p>*Additional Fees not included</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h6 class="title">Graduate</h6>
                            <div class="price-wrap">
                                <span class="amount">$34,992</span>
                                <span class="duration">Approximately 2 years</span>
                            </div>
                            <p>*Additional Fees not included</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <x-studyabroad-contact />
    <!--=====================================-->
    <!--=       Counterup Area Start       	=-->
    <!--=====================================-->
    <div class="counterup-area-12 gap-bottom-equal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number primary-color">
                            <span class="odometer" data-odometer-final="5">.</span><span>K+</span>
                        </h2>
                        <h6 class="title">Total Enrollment</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number secondary-color">
                            <span class="odometer" data-odometer-final="90">.</span><span>%</span>
                        </h2>
                        <h6 class="title">Students employed or enrolled in grad
                            programmes</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12">
                        <h2 class="counter-item count-number extra02-color">
                            <span class="odometer" data-odometer-final="45">.</span><span>+</span>
                        </h2>
                        <h6 class="title">Student
                            Clubs &
                            Organizations</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-12 border-none">
                        <h2 class="counter-item count-number extra05-color">
                            <span class="odometer" data-odometer-final="26">.</span><span>+</span>
                        </h2>
                        <h6 class="title">Master's Programmes</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=       CTA Banner Area Start      =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="modern-schooling-cta-wrapper edu-cta-banner-area-6 bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="{{ asset('front/images/cta/cta-girl-bg.webp') }}" alt="girl image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="2.5" src="{{ asset('front/images/cta/shape-43.png') }}" alt="shape">
                            </li>
                            <li class="shape-02" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img src="{{ asset('front/images/cta/shape-42.png') }}" alt="shape">
                            </li>
                            <li class="shape-03 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="-2" src="{{ asset('front/images/cta/shape-40.png') }}" alt="shape">
                            </li>
                            <li class="shape-04 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                                <img data-depth="2" src="{{ asset('front/images/cta/shape-38.png') }}" alt="shape">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">Visit the Concordia University <br> Official Website for More <br> Information</h2>
                            <a href="https://www.cuchicago.edu/" target="_blank" class="edu-btn btn-primary">Explore CUC <i
                                    class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-05 scene" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                        <img data-depth="1.5" src="{{ asset('front/images/cta/shape-39.png') }}" alt="shape">
                    </li>
                    <li class="shape-06" data-sal-delay="50" data-sal="fade" data-sal-duration="800">
                        <img src="{{ asset('front/images/cta/cta-round.svg') }}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
@endsection
