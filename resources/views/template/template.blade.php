    <!DOCTYPE html>
    <html class="no-js" lang="zxx">

    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Antai Fintech Global | Inspires students from across the world</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('front/img/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('front/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('front/img/favicon/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('front/img/favicon/browserconfig.xml') }}">

        <meta name="theme-color" content="#ffffff">
        @include('template.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css"
            integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
            integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="sticky-header">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

        {{-- <div id="edublink-preloader">
            <div class="loading-spinner">
                <div class="preloader-spin-1"></div>
                <div class="preloader-spin-2"></div>
            </div>
            <div class="preloader-close-btn-wraper">
                <span class="btn btn-primary preloader-close-btn">
                    Cancel Preloader</span>
            </div>
        </div> --}}

        <div id="main-wrapper" class="main-wrapper">
            @include('template.header')
            @yield('content')
            @include('template.footer')
            @include('template.js')
        </div>

        <div class="rn-progress-parent">
            <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <x-enquiry-form />
        <x-modal-success />
        <x-modal-error />
        <script>
            $(document).ready(function() {
                $('#enquiry-form').on('submit', function(event) {
                    event.preventDefault();

                    // Clear previous error messages
                    $('.error-message').remove();

                    // Gather form data
                    var formData = {
                        first_name: $('#first_name').val(),
                        last_name: $('#last_name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        interested_program: $('#interested_program').val(),
                        message: $('#message').val()
                    };

                    // Send AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '/api/enquiries',
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // Success Message
                            // alert(response.success); // Show success message
                            $('#enquiry-form')[0].reset(); // Reset the form
                            $('#exampleModal').modal('hide'); // Hide the modal
                            $('#formSuccess').modal('show'); // Show the success modal
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) { // Laravel Validation Error
                                var errors = xhr.responseJSON.errors;

                                // Display errors under each field
                                $.each(errors, function(field, messages) {
                                    var input = $('[name="' + field +
                                    '"]'); // Find input by name
                                    input.after('<span class="error-message text-danger">' +
                                        messages[0] + '</span>'); // Display error
                                });
                            } else {
                                // General error message
                                // alert('An error occurred. Please try again later.');
                                $('#formError').modal('show');
                            }
                        }
                    });
                });
            });
        </script>
    </body>

    </html>
