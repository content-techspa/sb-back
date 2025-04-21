<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="#">
                    <img class="logo-light" src="{{ asset('front/img/logo/logo-main.webp') }}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{ asset('front/img/logo/logo-main.webp') }}" alt="Corporate Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="icon-73"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about-us') }}">About Us</a></li>
            <li class="has-droupdown" >
                <a href="#">Our Offerings</a>
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

            <li><a href="{{ url('news') }}">News</a></li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('partner-with-us') }}">Partner with Us</a></li>
            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
        </ul>
    </div>
</div>
