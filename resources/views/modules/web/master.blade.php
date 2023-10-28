<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Corporacion ADT</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="https://rstheme.com/products/html/reobiz/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="assets/css/rsmenu-transitions.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>

<body class="defult-home">

    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->

    <!--Full width header Start-->
    <div class="full-width-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="flaticon-email"></i><a
                                        href="mailto:info@yourwebsite.com">info@corporacionadt.com</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:+123456789">(+51) 000000000</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li class="opening"> <i class="flaticon-clock"></i> Lunes - Sabado: 9:00 am - 08.00pm
                                </li>
                                <li><a href="index.html#"><i class="lab la-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-area">
                                <a href="{{ route('web.index') }}"><img src="assets/images/logo-adt.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu pr-65">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu">
                                                <a href="{{ route('web.index') }}">Inicio</a>
                                            </li>
                                            <li class="rs-mega-menu">
                                                <a href="{{ route('web.about') }}">Nosotros</a>
                                            </li>
                                            <li class="rs-mega-menu">
                                                <a href="{{ route('web.blog') }}">Blog</a>
                                            </li>
                                            <li class="rs-mega-menu">
                                                <a href="{{ route('web.contact') }}">Contacto</a>
                                            </li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-target=".search-modal"
                                                data-toggle="modal" href="index.html#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->


        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    @yield('content')
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="container">

            <div class="footer-content pt-62 pb-79 md-pb-64 sm-pt-48">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-39">
                        <div class="about-widget pr-15">
                            <div class="logo-part">
                                <a href="index.html"><img src="assets/images/logo-adt-black.png"
                                        alt="Footer Logo"></a>
                            </div>
                            <p class="desc">Somos un equipo de empresarios, profesionales y técnicos, con 25 años de
                                trayectoria en la creación, planificación y desarrollo de productos y programas para el
                                sector de transporte de vehículos menores.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 md-mb-32 footer-widget">
                        <h4 class="widget-title">Informacion</h4>
                        <ul class="address-widget pr-40">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">Mz. 55 Lt. 11 Sector Buenos Milagros , San Juan de Miraflores, Lima
                                    ,
                                    Perú</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:+8801739753105">(+51)00000000</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:support@rstheme.com">soporte@corporacionadt.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock"></i>
                                <div class="desc">
                                    Lunes - Sabado: 9:00 am - 08.00pm
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                        <h4 class="widget-title">Latest Posts</h4>
                        <div class="footer-post">
                            <div class="post-wrap mb-15">
                                <div class="post-img">
                                    <a href="blog-single.html"><img src="assets/images/blog/small/1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post-desc">
                                    <a href="blog-single.html">Covid-19 threatens the next generation of
                                        smartphones</a>
                                    <div class="date-post">
                                        <i class="fa fa-calendar"></i>
                                        September 6, 2019
                                    </div>
                                </div>
                            </div>
                            <div class="post-wrap mb-15">
                                <div class="post-img">
                                    <a href="blog-single.html"><img src="assets/images/blog/small/2.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post-desc">
                                    <a href="blog-single.html">Soundtrack filma Lady Exclusive Music</a>
                                    <div class="date-post">
                                        <i class="fa fa-calendar"></i>
                                        April 15, 2019
                                    </div>
                                </div>
                            </div>
                            <div class="post-wrap">
                                <div class="post-img">
                                    <a href="blog-single.html"><img src="assets/images/blog/small/3.jpg"
                                            alt=""></a>
                                </div>
                                <div class="post-desc">
                                    <a href="blog-single.html">Winged moved stars, fruit creature seed night.</a>
                                    <div class="date-post">
                                        <i class="fa fa-calendar"></i>
                                        October 9, 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row y-middle">
                    <div class="col-lg-6 col-md-8 sm-mb-21">
                        <div class="copyright">
                            <p>© Copyright 2023. Todos los derechos reservados.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 text-right sm-text-center">
                        <ul class="footer-social">
                            <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text" required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>    
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- aos js -->
    <script src="assets/js/aos.js"></script>
    <!-- Skill bar js -->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- video js -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nivo slider js -->
    <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>
