<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <title>Sign In | Seeding Brains - Admin & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SeedingBrains Admin Section" name="description" />
    <meta content="techspa" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('backend/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('backend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-0">
                                <!-- Left Column (Image/Info) -->
                                <div class="col-lg-5">
                                    <div class="card auth-card bg-success h-100 border-0 shadow-none p-sm-3 overflow-hidden mb-0">
                                        <div class="card-body p-4 d-flex justify-content-between flex-column">
                                            <div class="auth-image mb-3">
                                                <img src="{{ asset('backend/img/logo-main.png') }}" alt="" height="50" />
                                                <img src="{{ asset('backend/images/effect-pattern/auth-effect-2.png') }}" alt="" class="auth-effect-2" />
                                                <img src="{{ asset('backend/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect" />
                                                <img src="{{ asset('backend/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect-3" />
                                            </div>
                                            <div>
                                                <h3 class="text-white">Start your journey with us.</h3>
                                                <p class="text-white-75 fs-15">It brings together your tasks, projects, timelines, files and more</p>
                                            </div>
                                            <div class="text-center text-white-75">
                                                <p class="mb-0">
                                                    &copy; <script>document.write(new Date().getFullYear())</script> Seeding Brains. Crafted with <i class="mdi mdi-heart text-danger"></i> by Techspa Central
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column (Login Form) -->
                                <div class="col-lg-7">
                                    <div class="card mb-0 border-0 shadow-none">
                                        <div class="card-body px-0 p-sm-5 m-lg-4">
                                            <div class="text-center mt-2">
                                                <h5 class="text-success fs-20">Welcome Back !</h5>
                                                <p class="text-muted">Sign in to continue to Seeding Brains.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form id="loginForm" method="POST" action="{{ route('authentication.login.submit') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                                <i class="ri-eye-fill align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1" id="auth-remember-check" name="remember">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                                                    </div>
                                                </form>
                                                <div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-soft-primary btn-icon"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-danger btn-icon"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-dark btn-icon"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-info btn-icon"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5">
                                                {{-- <p class="mb-0">Don't have an account? 
                                                    <a href="{{ route('authentication.register') }}" class="fw-semibold text-secondary text-decoration-underline">Sign Up</a>
                                                </p> --}}
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    
    <!-- JAVASCRIPT -->
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/js/pages/password-addon.init.js') }}"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function(){
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if(response.success) {
                        window.location.href = response.data.redirect;
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '';
                    $.each(errors, function(key, error){
                        errorMessage += error[0] + "\n";
                    });
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMessage,
                    });
                }
            });
        });
    });
    </script>
</body>
</html>
