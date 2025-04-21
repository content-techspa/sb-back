@extends('template.template')
@section('content')
    <div class="hero-banner hero-style-2 bg-image">
        <div class="container">
            <div class="row row--45 align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">First Aid <span
                                class="color-primary">Initiatives</span> at Antai Fintech Global </h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Antai Fintech Global
                            prioritizes safety with a robust first aid program. Equipped with trained personnel and
                            essential medical supplies, the company ensures prompt and effective response to emergencies,
                            reinforcing a safe and caring work environment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-gallery">
                        <div class="thumbnail thumbnail-1" data-sal-delay="500" data-sal="slide-up"
                            data-sal-duration="1000">
                            <img src="{{ asset('front/images/banner/girl-2.webp') }}" alt="Girl Image">
                        </div>
                        <div class="thumbnail thumbnail-2" data-sal-delay="500" data-sal="slide-down"
                            data-sal-duration="1000">
                            <img src="{{ asset('front/images/banner/man-1.webp') }}" alt="Girl Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene shape-light" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-1 scene shape-dark" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/dark-shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{ asset('front/images/faq/shape-12.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-light" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/shape-09.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-dark" data-sal-delay="1000" data-sal="fade"
                                data-sal-duration="1000">
                                <img data-depth="2" src="{{ asset('front/images/faq/dark-shape-09.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{ asset('front/images/cta/shape-04.png') }}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Area -->
    <div class="edu-course-area course-area-2 gap-tb-text">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Popular Courses</span>
                <h2 class="title">Pick A Course To Get Started</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                @foreach ($firstAidPrograms as $index => $program)
                    <!-- Start Single Course -->
                    <div class="col-md-6 col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-3 course-box-shadow">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#courseModal-{{ $index }}">
                                        <img src="{{ asset('front/img/programs/first-aid/' . $program['image']) }}" alt="Course Image">
                                    </a>
                                    <div class="time-top">
                                        <span class="duration"><i class="icon-61"></i> {{ $program['duration'] ?? '1 day' }}</span>
                                    </div>
                                </div>
                                <div class="content">
                                    {{-- <span class="course-level">First Aid</span> --}}
                                    <h5 class="title">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#courseModal-{{ $index }}">{{ $program['title'] }}</a>
                                    </h5>
                                    
                                        <ul class="course-meta">
                                            @foreach ($program['features'] as $feature)
                                                <li><i class="icon-24"></i> {{ $feature }}</li>
                                            @endforeach
                                        </ul>
                                    
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#courseModal-{{ $index }}">Know More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course -->

                    <!-- Modal -->
                    <div class="modal fade" id="courseModal-{{ $index }}" tabindex="-1" aria-labelledby="courseModalLabel-{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="courseModalLabel-{{ $index }}">{{ $program['title'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="course-feature">
                                        <h6 class="title">{{ $program['courseOverview']['question'] ?? 'Course Overview' }}</h6>
                                        <p>{!! $program['courseOverview']['answer'] ?? 'No overview available.' !!}</p>
                                    </div>
                                    <ul class="course-meta">
                                        @foreach ($program['features'] as $feature)
                                            <li><i class="icon-24"></i> {{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Course Area -->

    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <h2 class="title">
                                Become a Proactive <br><span class="color-primary">First Aid Responder</span> at Antai Fintech Global
                            </h2>
                            <p>Join us in making safety a priority at Antai Fintech Global. Enroll in our comprehensive first aid program to ensure you're prepared for any emergency. With a team of trained professionals and essential medical supplies, we foster a safe and supportive work environment for everyone.</p>
                            <button type="button" class="rn-btn edu-btn submit-btn btn-large" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
