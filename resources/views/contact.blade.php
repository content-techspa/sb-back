@extends('template.template')
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->
    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Contact Us</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

    <!--=====================================-->
    <!--=       Contact Me Area Start       =-->
    <!--=====================================-->
    <section class="contact-us-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-us-info">
                        <h3 class="heading-title">We're Always Eager to Hear From You!</h3>
                        <ul class="address-list">
                            <li>
                                <h5 class="title">Address</h5>
                                <p>Aldgate Beaufort House, 15 St.Botolph Street, Aldgate EC3A 7BB</p>
                            </li>
                            <li>
                                <h5 class="title">Email</h5>
                                <p><a href="mailto:admin@antaifintechglobal.com">admin@antaifintechglobal.com</a></p>
                            </li>
                            <li>
                                <h5 class="title">Phone</h5>
                                <p><a href="tel:02037613775">02037613775</a></p>
                            </li>
                        </ul>
                        <ul class="social-share">
                            <li><a href="https://www.instagram.com/antaifintechglobal/"><i class="icon-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/antaifintechgloballtd"><i class="icon-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/AntaiGlobal"><i class="icon-twitter"></i></a></li>
                            <li><a href=" https://www.linkedin.com/company/antai-fintech-global/"><i
                                        class="icon-linkedin2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-lg-6">
                    <div class="contact-form form-style-2">
                        <div class="section-title">
                            <h4 class="title">Get In Touch</h4>
                            <p>Fill out this form for booking a consultant advising session.</p>
                        </div>
                        <div id="form-response" style="display: none;"></div>
                        {{-- <div id="form-response" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> --}}
                        <form class="rnt-contact-form rwt-dynamic-form" id="contact" method="POST"
                            action="{{ url('/submit-contact') }}">
                            @csrf
                            <div class="row row--10">
                                <div class="form-group col-12">
                                    <input type="text" name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="form-group col-12">
                                    <input type="email" name="email" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group col-12">
                                    <input type="tel" name="phone" id="phone" placeholder="Phone number">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Your message" ></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <button class="rn-btn edu-btn btn-medium submit-btn" name="submit"
                                        type="submit">Submit Message <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#contact').submit(function(e) {
                                    e.preventDefault();

                                    var form = $(this);
                                    var url = form.attr('action');

                                    // Clear previous error messages
                                    $('.error-message').remove();
                                    $('#form-response').hide();

                                    $.ajax({
                                        type: "POST",
                                        url: url,
                                        data: form.serialize(),
                                        success: function(data) {
                                            if (data.success) {
                                                // Success response
                                                $('#form-response')
                                                    .html('<div id="form-response" class="alert alert-success alert-dismissible fade show" role="alert">' + data.message +
                                                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>')
                                                    .show();
                                                form[0].reset(); // Reset the form
                                            } else {
                                                // Display server message (not validation errors)
                                                $('#form-response')
                                                    .html('<div id="form-response" class="alert alert-danger alert-dismissible fade show" role="alert">' + data.message +
                                                        ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>')
                                                    .show();
                                            }
                                        },
                                        error: function(xhr) {
                                            if (xhr.status === 422) { // Validation error
                                                var errors = xhr.responseJSON && xhr.responseJSON.errors;

                                                if (errors) {
                                                    // Loop through each error and show under the relevant field
                                                    $.each(errors, function(field, messages) {
                                                        var input = $('[name="' + field +
                                                            '"]'); // Match input by name
                                                        input.after(
                                                            '<span class="error-message text-danger">' +
                                                            messages[0] + '</span>');
                                                    });
                                                }

                                                // Show general message at the top
                                                $('#form-response')
                                                    .html(
                                                        '<div id="form-response" class="alert alert-danger alert-dismissible fade show" role="alert">Please fix the errors below.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                                                    )
                                                    .show();
                                            } else {
                                                // Handle other errors
                                                $('#form-response')
                                                    .html(
                                                        '<div id="form-response" class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong. Please try again later.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                                                    )
                                                    .show();
                                            }
                                        }
                                    });
                                });
                            });
                        </script>
                        <ul class="shape-group">
                            <li class="shape-1 scene"><img data-depth="1"
                                    src="{{ asset('front/images/about/shape-13.png') }}" alt="Shape"></li>
                            <li class="shape-2 scene"><img data-depth="-1"
                                    src="{{ asset('front/images/counterup/shape-02.png') }}" alt="Shape"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      Google Map Area Start        =-->
    <!--=====================================-->
    <div class="google-map-area">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.899016237047!2d-0.08071790734571913!3d51.515068637477704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb4ac9874c3%3A0x8954c6d288c2fa15!2s15%20St%20Botolph%20St%2C%20London%20EC3A%207BB%2C%20UK!5e0!3m2!1sen!2sin!4v1714741902280!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
