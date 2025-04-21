        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->

        <header class="edu-header header-style-1 header-fullwidth">
            <div class="header-top-bar">
                <div class="container-fluid">
                    <div class="header-top">
                        <div class="header-top-left">
                            <ul class="header-info">
                                {{-- <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li> --}}
                                <li><a href="tel: 02037613775"><i class="icon-phone"></i>Call: 02037613775</a></li>
                            </ul>
                            {{-- <div class="header-notify">
                                First 20 students get 50% discount. <a href="#">Hurry up!</a>
                            </div> --}}
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                {{-- <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li> --}}
                                {{-- <li><a href="tel: 02037613775"><i class="icon-phone"></i>Call: 02037613775</a></li> --}}
                                <li><a href="mailto: admin@antaifintechglobal.com" target="_blank"><i
                                            class="icon-envelope"></i>Email: admin@antaifintechglobal.com</a></li>
                                <li class="social-icon">
                                    <a href="https://www.facebook.com/antaifintechgloballtd"><i
                                            class="icon-facebook"></i></a>
                                    <a href="https://www.instagram.com/antaifintechglobal/"><i
                                            class="icon-instagram"></i></a>
                                    <a href="https://twitter.com/AntaiGlobal"><i class="icon-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/antai-fintech-global/"><i
                                            class="icon-linkedin2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img class="logo-light" src="{{ asset('front/img/logo/logo-main.webp') }}"
                                        alt="Corporate Logo">
                                    <img class="logo-dark" src="{{ asset('front/img/logo/logo-main.webp') }}"
                                        alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="header-category">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown" >
                                            <a href="#"><i class="icon-1"></i>Our Offerings</a>
                                            <ul class="submenu">
                                                <li class="has-droupdown"><a href="#">Programmes</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('/') }}/coding-multiverse">Coding Multiverse</a>
                                                        </li>
                                                        <li class="has-droupdown">
                                                            <a href="#">UK Regulated Qualifications</a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ url('business-and-management') }}">Business and
                                                                        Management</a></li>
                                                                <li><a href="{{ url('accounting-and-finance') }}">Accounting and
                                                                        Finance</a></li>
                                                                <li><a href="{{ url('health-and-social-care') }}">Health and Social
                                                                        care</a></li>
                                                                <li><a href="{{ url('education-and-training') }}">Education and
                                                                        Training</a></li>
                                                                <li><a href="{{ url('computing-IT-and-data-science') }}">Computing/IT
                                                                        and Data Science</a></li>
                                                                <li><a href="{{ url('cyber-security') }}">Cyber Security</a></li>
                                                                <li><a href="{{ url('child-care') }}">Child Care</a></li>
                                                                <li><a href="{{ url('adult-care') }}">Adult Care</a></li>
                                                                <li><a href="{{ url('first-aid') }}">First Aid</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-droupdown"><a href="#">Study Abroad</a>
                                                    <ul class="submenu">
                                                        <li class="has-droupdown"><a href="#">Exclusive Programs</a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ url('exclusive-programmes/mcast') }}">MCAST</a>
                                                                </li>
                                                                <li><a href="{{ url('exclusive-programmes/mahe-dubai') }}">MAHE
                                                                        Dubai</a></li>
                                                                <li><a
                                                                        href="{{ url('exclusive-programmes/university-of-bolton') }}">University
                                                                        of
                                                                        Bolton</a></li>
                                                                <li><a
                                                                        href="{{ url('exclusive-programmes/anglia-ruskin-university') }}">Anglia
                                                                        Ruskin
                                                                        University</a></li>
                                                                <li><a
                                                                        href="{{ url('exclusive-programmes/university-of-gloucestershire') }}">University
                                                                        of Gloucestershire</a></li>
                                                                <li><a
                                                                        href="{{ url('exclusive-programmes/girne-american-university') }}">Girne
                                                                        American University</a></li>
                                                                <li><a href="{{ url('exclusive-programs/avila-university') }}">Avila
                                                                        University</a></li>
                                                                <li><a href="{{ url('exclusive-programs/ibat') }}">IBAT College</a>
                                                                </li>
                                                                <li><a href="{{ url('exclusive-programs/LIGMR') }}">Lyon
                                                                        Institute</a></li>
                                                                <li><a
                                                                        href="{{ url('exclusive-programs/concordia-university-chicago') }}">Concordia
                                                                        University Chicago</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-droupdown"><a href="#">Distance Learning</a>
                                                            <ul class="submenu">
                                                                <li><a
                                                                        href="{{ url('/dintance-learning/anglia-ruskin-university') }}">Anglia
                                                                        Ruskin University</a></li>
                                                                <li><a
                                                                        href="{{ url('/dintance-learning/gloucestershire-university') }}">University
                                                                        of Gloucestershire</a></li>
                                                                <li><a
                                                                        href="{{ url('/dintance-learning/girne-american-university') }}">Girne
                                                                        American University</a></li>
                                                                <li><a href="{{ url('/dintance-learning/derby-university') }}">University
                                                                        of Derby</a></li>
                                                                <li><a
                                                                        href="{{ url('/dintance-learning/central-lancashire-university') }}">University
                                                                        of Central Lancashire</a></li>
                                                                <li><a href="{{ url('/dintance-learning/buck-new-university') }}">
                                                                        Buckinghamshire New University
                                                                    </a></li>
                                                                <li><a
                                                                        href="{{ url('/dintance-learning/northampton-university') }}">University
                                                                        of Northampton</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-droupdown"><a href="#">On-Campus</a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ url('/on-campus/study-in-canada') }}">Study in
                                                                        Canada</a></li>
                                                                <li><a href="{{ url('/on-campus/study-in-uae') }}">Study in
                                                                        UAE</a>
                                                                </li>
                                                                <li><a href="{{ url('/on-campus/study-in-ireland') }}">Study in
                                                                        Ireland</a></li>
                                                                <li><a href="{{ url('/on-campus/study-in-usa') }}">Study in
                                                                        USA</a>
                                                                </li>
                                                                <li><a href="{{ url('/on-campus/study-in-uk') }}">Study in UK</a>
                                                                </li>
                                                                <li><a href="{{ url('/on-campus/study-in-malta') }}">Study in
                                                                        Malta</a></li>
                                                                <li><a href="{{ url('/on-campus/study-in-australia') }}">Study in
                                                                        Australia</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-droupdown"><a href="#">Chartered Membership</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('/ILM') }}">ILM</a></li>
                                                        <li><a href="{{ url('/BCS') }}">BCS</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/') }}/about-us">About Us</a></li>
                                    {{-- <li><a href="https://certificateglobal.com/user/login" target="_blank">Study Portal</a></li> --}}
                                    <li><a href="{{ url('news') }}">News</a></li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action py-3">
                                <li class="header-btn">
                                    <a href="{{ url('partner-with-us') }}" class="edu-btn btn-medium">Partner
                                        with Us<i class="icon-4"></i></a>
                                </li>
                                <li class="mobile-menu-bar d-block d-lg-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.menu')
        </header>

        <!--=====================================-->
        <!--=        Header Area End       	=-->
        <!--=====================================-->
