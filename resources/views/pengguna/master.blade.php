<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wisata Tegal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/Travelo/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/Travelo/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Travelo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Travelo/css/magnific-popup.css">
    <link rel="stylesheet" href="/Travelo/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Travelo/css/themify-icons.css">
    <link rel="stylesheet" href="/Travelo/css/nice-select.css">
    <link rel="stylesheet" href="/Travelo/css/flaticon.css">
    <link rel="stylesheet" href="/Travelo/css/gijgo.css">
    <link rel="stylesheet" href="/Travelo/css/animate.css">
    <link rel="stylesheet" href="/Travelo/css/slick.css">
    <link rel="stylesheet" href="/Travelo/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="/Travelo/css/style.css">
    <link rel="stylesheet" href="/Travelo/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="/Travelo/img/logo1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav style="float: right; ">
                                        <ul id="navigation" >
                                            <li><a class="active" href="{{ url('/') }}">home</a></li>
                                            <li><a href="{{ route('destination') }}">Destination</a></li>
                                            <li><a class="" href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('login') }}">Admin</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    {{--  content  --}}
    @yield('content')

    <!-- /testimonial_area  -->


    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                              Template is licensed under CC BY 3.0.
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- link that opens popup -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="/Travelo/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/Travelo/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/Travelo/js/popper.min.js"></script>
    <script src="/Travelo/js/bootstrap.min.js"></script>
    <script src="/Travelo/js/owl.carousel.min.js"></script>
    <script src="/Travelo/js/isotope.pkgd.min.js"></script>
    <script src="/Travelo/js/ajax-form.js"></script>
    <script src="/Travelo/js/waypoints.min.js"></script>
    <script src="/Travelo/js/jquery.counterup.min.js"></script>
    <script src="/Travelo/js/imagesloaded.pkgd.min.js"></script>
    <script src="/Travelo/js/scrollIt.js"></script>
    <script src="/Travelo/js/jquery.scrollUp.min.js"></script>
    <script src="/Travelo/js/wow.min.js"></script>
    <script src="/Travelo/js/nice-select.min.js"></script>
    <script src="/Travelo/js/jquery.slicknav.min.js"></script>
    <script src="/Travelo/js/jquery.magnific-popup.min.js"></script>
    <script src="/Travelo/js/plugins.js"></script>
    <script src="/Travelo/js/gijgo.min.js"></script>
    <script src="/Travelo/js/slick.min.js"></script>



    <!--contact js-->
    <script src="/Travelo/js/contact.js"></script>
    <script src="/Travelo/js/jquery.ajaxchimp.min.js"></script>
    <script src="/Travelo/js/jquery.form.js"></script>
    <script src="/Travelo/js/jquery.validate.min.js"></script>
    <script src="/Travelo/js/mail-script.js"></script>


    <script src="/Travelo/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>
