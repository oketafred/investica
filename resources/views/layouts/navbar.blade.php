<header id="header-container">

    <!-- Topbar -->
    <div id="top-bar">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Top bar -->
                <ul class="top-bar-menu">
                    <li><i class="fa fa-phone"></i> (+256) 312800670 </li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:info@investicaglobal.com"><span class="__cf_email__">info@investicagloballimited.com</span></a></li>
                </ul>

            </div>
            <!-- Left Side Content / End -->


            <!-- Left Side Content -->
            <div class="right-side">

                <!-- Social Icons -->
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
                </ul>

            </div>
            <!-- Left Side Content / End -->

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Topbar / End -->


    <!-- Header -->
    <div id="header">
        <div class="container">
            
            <!-- Left Side Content -->
            <div class="left-side">
                
                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route("index") }}"><img src="{{ asset("plugins/images/logo_2.png") }}" alt=""></a>
                </div>


                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>


                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">

                        <li><a class="@if(Request::is('/')) current @endif" href="{{
                            route("index")
                        }}">Home</a></li>

                        <li>
                            <a class="@if(Request::is('list-of-properties')) current @endif" href="{{ route("list-of-properties") }}">List of Properties</a>
                        </li>

                        <li><a class="@if(Request::is('faq')) current @endif" href="{{ route("faq") }}">FAQ</a>
                        </li>

                        <li>
                            <a class="@if(Request::is('contact')) current @endif" href="{{ route("contact") }}">Contact Us</a>
                        </li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
            </div>
            <!-- Left Side Content / End -->
            @if(Sentinel::check())
                
            <!-- Right Side Content / End -->
            @include('layouts.sidebar')
            <!-- Right Side Content / End -->

            @else
            <!-- Right Side Content / End -->
            <div class="right-side">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{ route("login") }}" class="sign-in"><i class="fa fa-user"></i> Log In</a>
                    <a href="{{ route("register") }}" class="button border">Register</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            @endif

        </div>
    </div>
    <!-- Header / End -->

</header>