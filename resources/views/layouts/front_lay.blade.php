<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Consulting Business Consulting Finance Html5 Template">
    <link href="assets/images/favicon/favicon-16x16.png" rel="icon">
    <link
        href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700"
        rel="stylesheet" type="text/css">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <title>Innovative Leisure</title>
</head>
<body>
<div class="preloader">
    <div class="reverse-spinner"></div>
</div>
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent">
        <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo logo-light" src="assets/images/logo/logo-plain.png" alt="Innovative Leisure">
                    <img class="logo logo-dark" src="assets/images/logo/logo-dark.png" alt="Innovative Leisure">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="home-li">
                            <a href="{{ url('/') }}" class="menu-item">Home</a>
                        </li>
                        <li class="about-li">
                            <a href="{{ url('about-us') }}" class="menu-item">About Us</a>
                        </li>
                        <li class="service-li">
                            <a href="{{ url('service') }}" class="menu-item">Services</a>
                        </li>
                        <li class="business-li">
                            <a href="{{ url('business-model') }}" class="menu-item">Business Models</a>
                        </li>
                        <li class="contact-li">
                            <a href="{{ url('contact-us') }}" class="menu-item">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer id="footer" class="footer footer-1">
        <!-- Widget Section
        ============================================= -->
        <div class="footer-widget">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-6 col-lg-4 footer--widget widget-about">
                        <div class="widget-content">
                            <img class="footer-logo" src="assets/images/logo/logo-plain.png" width="200" alt="logo">
                            <p class="color-white">Innovative Leisure: Your turnkey business realization partner for
                                profitable leisure ventures across UAE and GCC</p>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/company/innovativeleisure/"
                                   class="linkedin color-white"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/innovativeleisure2025/"
                                   class="instagram color-white"><i class="fa fa-instagram"></i></a>
                                <a href="https://wa.me/+971525662703?text=Hello%20I%20am%20interested%20in%20your%20services"
                                   target="_blank" class="whatsapp color-white"><i class="fa fa-whatsapp"></i></a>
                                <a href="#" class="facebook color-white "><i class="fa fa-facebook"></i></a>


                            </div>
                        </div>
                    </div><!-- .col-md-3 end -->
                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 offset-lg-1 footer--widget widget-links">
                        <div class="widget-title">
                            <h5>Quick Links</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a class="color-white" href="{{ url('/') }}">Home</a></li>
                                <li><a class="color-white" href="{{ url('service') }}">Services</a></li>
                                <li><a class="color-white" href="{{ url('business-model') }}">Business Models</a></li>
                                <li><a class="color-white" href="{{ url('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div><!-- .col-md-2 end -->


                    <div class="col-12 col-md-3 col-lg-4 footer--widget widget-newsletter">
                        <div class="widget-title">
                            <h5>Services</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a class="color-white" href="javascript:void(0)">Advisory & Investment Modeling</a>
                                </li>
                                <li><a class="color-white" href="javascript:void(0)">Location & ROI Planning</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Design & Consultancy</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Civil Works</a></li>
                                <li><a class="color-white" href="javascript:void(0)">MEP Works</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Fit-out Works</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Supply & Installation</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Operation & Maintenance</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Revenue-based Partnership</a></li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 end -->
                    <div class="col-12 col-md-3 col-lg-4 footer--widget widget-newsletter">
                        <div class="widget-title">
                            <h5>Business Models</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a class="color-white" href="javascript:void(0)">Family Entertainment Center Large Scale (FEC)</a>
                                </li>
                                <li><a class="color-white" href="javascript:void(0)">PopUp Kids Play</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Waterplay Villa</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Fine Dining/Premium Restaurant</a></li>
                                <li><a class="color-white" href="javascript:void(0)">Upscale Dining & Bar Venue</a></li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 end -->
                    <div class="clearfix"></div>
                </div>
            </div><!-- .container end -->
        </div><!-- .footer-widget end -->

        <!-- Copyrights
        ============================================= -->
        <div class="footer--bar">
            <div class="row">
                <div class="col-12 col-md-12 col-md-12 text--center footer--copyright">
                    <div class="copyright">
                        <span class="color-white">© {{date('Y')}}, All Rights Reserved.</span>
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div><!-- .footer-copyright end -->
    </footer>
    <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
</div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="assets/js/rsconfig.js"></script>
@yield('page-script')
</body>
</html>
