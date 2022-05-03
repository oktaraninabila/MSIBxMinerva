<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Minerva: Bootcamp Online dan Kelas Online Bersertifikat">
    <meta name="author" content="Agus Bayu Pamungkas">
    <title>Minerva: Bootcamp Online dan Kelas Online Bersertifikat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

    <link rel="stylesheet" href="{{asset('style/plugins/themefisher-font/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/slick-carousel/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">

</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- 
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav navigation-menu">
                    <li><a data-scroll href="index.html">Home</a></li>
                    <li><a data-scroll href="course.html">Program Minerva</a></li>
                    <li><a data-scroll href="#services">Minerva untuk Startup</a></li>
                    <li><a data-scroll href="#pricing">Promo & Diskon</a></li>
                    <li><a data-scroll href="#blog">Blog</a></li>
                    <li><a data-scroll href="#contact-us">Tentang Minerva</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--
  End Fixed Navigation
  ==================================== -->
@yield('content')
    <footer id="footer" class="bg-one bg-dark">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">
                    <!-- copyright -->
                    <div class="copyright text-center">
                        <a href="index.html">
                            <!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
                            <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC"
                                        stroke-width="3">
                                        <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                        <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                        <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <br />
                        <p><a href="#"> Minerva Academy Team</a>. <br>Copyright
                            &copy; <script>
                                document.write(new Date().getFullYear())
                            </script>. All Rights Reserved.
                        </p>
                    </div>
                    <!-- /copyright -->

                </div> <!-- end col lg 12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </footer> <!-- end footer -->


    <!-- 
		Essential Scripts
		=====================================-->

    <!-- Main jQuery -->
    <script type="text/javascript" src="{{asset('style/')}}plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script type="text/javascript" src="{{asset('style/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="{{asset('style/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Portfolio Filtering -->
    <script type="text/javascript" src="{{asset('style/plugins/mixitup/dist/mixitup.min.js')}}"></script>
    <!-- Smooth Scroll -->
    <script type="text/javascript" src="{{asset('style/plugins/smooth-scroll/dist/js/smooth-scroll.min.js')}}"></script>
    <!-- Magnific popup -->
    <script type="text/javascript" src="{{asset('style/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}">
    </script>
    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Sticky Nav -->
    <script type="text/javascript" src="{{asset('style/plugins/Sticky/jquery.sticky.js')}}"></script>
    <!-- Number Counter Script -->
    <script type="text/javascript" src="{{asset('style/plugins/count-to/jquery.countTo.js')}}"></script>
    <!-- wow.min Script -->
    <script type="text/javascript" src="{{asset('style/plugins/wow/dist/wow.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('style/js/script.js')}}"></script>

</body>

</html>