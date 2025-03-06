<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Sponto</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/clients.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/funfact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/chooseus.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/industries.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/process.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/team.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/subscribe.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/faq.css') }}" rel="stylesheet">


</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="icon-27"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- main header -->
        <header class="main-header header-style-three">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <ul class="info">
                            <li>
                                <img src="assets/images/icons/icon-6.png" alt="">
                                Call: <a href="tel:(813) 957 9908">(813) 957 9908</a>
                            </li>
                            <li>
                                <img src="assets/images/icons/icon-7.png" alt="">
                                Mail: <a href="mailto:info@sponto.com">info@sponto.com</a>
                            </li>
                        </ul>
                        <div class="right-column">
                            {{-- <div class="language-picker js-language-picker mr_30"
                                data-trigger-class="btn btn--subtle">
                                <form action="index-2.html" class="language-picker__form">
                                    <label for="language-picker-select">Select your language</label>
                                    <select name="language-picker-select" id="language-picker-select">
                                        <option lang="de" value="deutsch">DE</option>
                                        <option lang="en" value="english" selected>EN</option>
                                        <option lang="fr" value="francais">FR</option>
                                        <option lang="it" value="italiano">IT</option>
                                    </select>
                                </form>
                            </div>
                            <ul class="social-links">
                                <li><span>Share:</span></li>
                                <li><a href="index-2.html"><i class="icon-22"></i></a></li>
                                <li><a href="index-2.html"><i class="icon-23"></i></a></li>
                                <li><a href="index-2.html"><i class="icon-24"></i></a></li>
                                <li><a href="index-2.html"><i class="icon-25"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="dd#"><img
                                    src="{{ asset('assets/images/logo/Logo.png') }}" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        {{--<li class=""><a href="{{ route('home') }}">Home</a>

                                        </li>
                                         <li><a href="{{ route('about') }}">About</a></li>
                                        <li class=""><a href="dd#">Solutions</a>

                                        </li>
                                        <li class="dropdown"><a href="dd#">Job Seekers</a>
                                            <ul>
                                                <li class="dropdown"><a href="dd#">Job</a>
                                                    <ul>
                                                        <li><a href="job.html">Place Job</a></li>
                                                        <li><a href="job-2.html">Job Seekers</a></li>
                                                        <li><a href="job-3.html">Job Openings</a></li>
                                                        <li><a href="job-4.html">Job Apply</a></li>
                                                        <li><a href="job-details.html">Job Details</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li class="dropdown"><a href="dd#">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio 3 column</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio 2 column</a></li>
                                                        <li><a href="portfolio-3.html">Portfolio Masonry</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="signup.html">Sing Up</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li> --}}
                                        <!-- <li class="dropdown"><a href="dd#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-2.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>   -->
                                        {{-- <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            {{-- <div class="search-btn mr_20"><button class="search-toggler"><i
                                        class="icon-1"></i></button></div> --}}
                            {{-- <div class="link-box mr_20"><a href="login.html">Log In</a></div> --}}
                            <div class="btn-box mt-1 mb-1"><a href="https://calendly.com/sponto-pk" target="_blank" class="theme-btn btn-one">Book a Discovery
                                    Call</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="dd#"><img src="assets/images/logo/logo.png"
                                    alt=""></a></figure>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            {{-- <div class="search-btn mr_20"><button class="search-toggler"><i
                                        class="icon-1"></i></button></div> --}}
                            {{-- <div class="link-box mr_20"><a href="login.html">Log In</a></div> --}}
                            <div class="btn-box mb-1 mt-1"><a href="https://calendly.com/sponto-pk" class="theme-btn btn-one">Book a Discovery
                                    Call</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="assets/images/logo/Logo.png"
                            alt="" title=""></a></div>
                <div class="menu-outer"></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>312 W 2nd St Casper, WY 82601, USA</li>
                        <li><a href="tel:+(813) 957 9908">+(813) 957 9908</a></li>
                        <li><a href="mailto:info@sponto.com">info@sponto.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        @yield('content')

        <!-- main-footer -->
        <footer class="main-footer light-footer">
            <div class="widget-section p_relative pt_80 pb_100">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget mr_30">
                                <figure class="footer-logo mb_20"><a href="#"><img
                                            src="assets/images/whitelogo.png" alt=""></a></figure>
                                <p>Elite offshore talent. Scale faster, cut costs, and win.</p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="icon-22"></i></a></li>
                                    <li><a href="#"><i class="icon-23"></i></a></li>
                                    <li><a href="#"><i class="icon-24"></i></a></li>
                                    <li><a href="#"><i class="icon-25"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Company</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">Who are we</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Solutions</a></li>
                                        <li><a href="#">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Help & Support</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Specialized Industries</a></li>
                                        <li><a href="#">Marketing & Advertising</a></li>
                                        <li><a href="#">Home Services & Construction</a></li>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Tech Firms</a></li>
                                        <li><a href="#">E-commerce</a></li>
                                        <li><a href="#">Finance & Accounting</a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Contact</h4>
                                </div>
                                <div class="widget-content">
                                  
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Phone: +1 (813) 957 9908</a></li>
                                        <li><a href="#">Email: info@sopnto.co</a></li>
                                        <li><a href="#">Address: 312 W 2nd St Casper, WY 82601, USA</a></li>

                                        {{-- <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="faq.html">General FAQ</a></li>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="bottom-inner d_block">
                        <div class="copyright">
                            <p>Copyright &copy; 2025 <a href="#">Sponto</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltop.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
