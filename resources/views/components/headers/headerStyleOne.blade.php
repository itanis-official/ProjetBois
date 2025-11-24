<header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__logo">
                                <div class="section-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                            </div>
                            <div class="main-menu__top">
                                <div class="main-menu__top-inner">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="icon-telephone"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:15502505260">+1 (550) 250 5260</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-envelope-2"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:info@tecture.com">info@tecture.com</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="main-menu__top-right">
                                        <div class="main-menu__top-time">
                                            <div class="main-menu__top-time-icon">
                                                <span class="far fa-clock"></span>
                                            </div>
                                            <p class="main-menu__top-text">Mon - Fri: 09:00 - 05:00</p>
                                        </div>
                                        <div class="main-menu__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__bottom">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <x-menuList />
                                </div>

                                <div class="main-menu__search-and-btn-box">
                                    <div class="main-menu__search-box">
                                        <a href="#"
                                            class="main-menu__search search-toggler icon-search-interface-symbol">
                                        </a>
                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="{{ route('contact') }}" class="thm-btn main-menu__btn">
                                            Free Quote <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>