{{-- TOPBAR  --}}
<div class="header-top">
    <div class="themeflat-container">
        <div class="header-top-inner">
            <div class="address">
                <a href="mailto:cs@tapaklari.com"><i class="icon-Vector"></i>cs@tapaklari.com</a>
                <address><i class="icon-Vector-22"></i>710 1st St. Easton, PA 18042 | Chester County</address>
            </div>
            <div class="social-icon">
                <a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-youtube"></i></a>
                <a href="#"><i class="icon-twitter"></i></a>
                <a href="#"><i class="icon-pinterest"></i></a>
            </div>
        </div>
    </div>
</div>
{{-- TOPBAR  --}}

{{-- TOP MENU  --}}
<header id="header" class="header style1 clearfix">
    <div class="themeflat-container">
        <div class="header-inner">
            <!-- LOGO -->
            <div id="logo" class="logo">
                <a href="{{ route('home') }}" rel="home">
                    <img id="a2" src="{{ asset('portal/images/logo.png') }}" alt="image">
                </a>
            </div>
            <!-- LOGO -->

            <div class="nav-wrap">
                <!-- MOBILE MENU BUTTON -->
                <div class="btn-menu text-white">
                    <span class="line-1"></span> X
                </div>
                <!-- MOBILE MENU BUTTON -->

                <!-- MAIN NAV -->
                <nav id="mainnav" class="mainnav">
                    <!-- LOGO_MOBILE -->
                    <div id="logo-mobie" class="logo">
                        <a href="{{ route('home') }}" rel="home">
                            <img src="{{ asset('portal/images/logo.png') }}" alt="image">
                        </a>
                    </div>
                    <!-- LOGO_MOBILE -->

                    <!-- DEKSTOP_MENU -->
                    <ul class="menu">
                        <li>
                            <a href="{{ route('home') }}">Home page</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About us</a>
                        </li>
                        <li>
                            <a href="#">Our Events</a>
                            <ul class="submenu">
                                <li><a href="{{ route('event') }}">Marathon</a></li>
                                <li><a href="{{ route('event') }}">Half Marathon</a></li>
                                <li><a href="{{ route('event') }}">10K</a></li>
                                <li><a href="{{ route('event') }}">5K</a></li>
                                <li><a href="{{ route('event') }}">Ultramarathon</a></li>
                                <li><a href="{{ route('event') }}">Trail Running</a></li>
                                <li><a href="{{ route('event') }}">Fun Run</a></li>
                                <li><a href="{{ route('event') }}">Charity Run</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">Latest News</a>
                        </li>
                        {{-- <li>
                            <a href="#">CAREERS</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('contact-us') }}">Contact us</a>
                        </li>
                    </ul>
                    <!-- DEKSTOP_MENU -->

                </nav>
                <!-- MAIN NAV -->
            </div>

            <div class="header-right">
                <!-- SEARCH -->
                {{-- @include('_layouts._component._atom.portal_search') --}}
                <!-- SEARCH -->

                <!-- CART BUTTON -->
                {{-- @include('_layouts._component._atom.portal_cart') --}}
                <!-- CART BUTTON -->

                <!-- LOGIN BUTTON -->
                <button class="btn-contact" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                    <i class="fas fa-user"></i> &nbsp;
                    Login/Register
                </button>
                <!-- LOGIN BUTTON -->

            </div>
        </div>
    </div>
</header>

<!-- MODAL AUTH -->
@include('_layouts._component.portal_modal')

{{-- TOP MENU  --}}
