<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="security guard" />
    <meta name="keywords" content="Naval building & Construction Company Limited/Navy Hotels & Suites Limited/Nigerian Navy Microfinance Bank Limited/Naval Engineering Services Limited/Navy Maritime Services Limited/Nigeria Navy Multipurpose Cooperative Society Limited/Navy Clearing and Forwarding Services Limited/Naval Dockyard Limited/The Navy shipyard Limited/Admiralty University of Nigeria" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="/css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/js/plugin/rs_slider/layers.css" />
    <link rel="stylesheet" type="text/css" href="/js/plugin/rs_slider/navigation.css" />
    <link rel="stylesheet" type="text/css" href="/js/plugin/rs_slider/settings.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/icon.png" />
<script src='/../../google_analytics_auto.js'></script></head>

<body>

    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="/images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div>

    <!-- Header wrapper start -->

    @include('inc.pagesnavbar')

    @yield('content')
    
    @include('inc.footer')

    <!--main js files-->
    <script src="/js/jquery_min.js"></script>
    <script src="/js/jqu_menu.js"></script>
    <script src="/js/jqu_slickmenu.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/venobox/js/venobox.min.js"></script>
    <script src="/js/jquery.easypiechart.min.js"></script>
    <script src="/js/progress-script.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/jquery.inview.min.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="/js/plugin/rs_slider/revolution.extension.video.min.js"></script>
    <script src="/js/responsive_header.js"></script>
    <script src="/js/custom.js"></script>
    <!--js code-->
    @yield('scripts')
</body>

</html>