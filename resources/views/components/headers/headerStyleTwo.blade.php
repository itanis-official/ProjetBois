<header class="main-header-two">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                              <a href="{{ url('/index2') }}">

                                    <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <x-menuList />
                            </div>
                            <div class="main-menu-two__search-and-nav-sidebar-icon">
                                <a href="#" class="main-menu-two__search search-toggler"><span
                                        class="icon-search-interface-symbol"></span></a>
                                <div class="main-menu-two__nav-sidebar-icon">
                                    <a class="navSidebar-button" href="#">
                                        <span class="icon-text"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>