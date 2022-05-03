<!DOCTYPE html>
<html class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Minerva: Bootcamp Online dan Kelas Online Bersertifikat">

    <meta name="author" content="Agus Bayu Pamungkas">

    <title>@yield('title') | Minerva: Bootcamp Online dan Kelas Online Bersertifikat</title>

    <!-- Mobile Specific Meta
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('style/plugins/themefisher-font/style.css')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('style/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('style/plugins/animate-css/animate.css')}}">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="{{asset('style/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('style/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('style/plugins/slick-carousel/slick/slick-theme.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Welcome Slider ==================================== -->

    <section class="hero-area">
        <div class="block">
            <div class="video-button">
                <i class="tf-ion-play"></i>

            </div>
            <h1>Belajar IT yang Benar</h1>
            <h1>Gabungnya di Minerva</h1>
            <p>Kita akan ajarin kamu sampai bener-bener paham dan mendapat keahlian siap kerja untuk karier masa depan
                kamu.</p>
            <a data-scroll href="#portfolio" class="btn btn-transparent">Mulai Belajar</a>
        </div>
    </section>

    <!-- Fixed Navigation ==================================== -->
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
                    <li><a data-scroll href="#body">Home</a></li>
                    <li><a data-scroll href="course.html">Program Minerva</a></li>
                    <li><a data-scroll href="#services">Minerva untuk Startup</a></li>
                    <!-- /<li><a data-scroll href="#about">About Us</a></li>
					<li><a data-scroll href="#our-team">Team</a></li>-->
                    <li><a data-scroll href="#pricing">Promo & Diskon</a></li>
                    <li><a data-scroll href="#blog">Blog</a></li>
                    <li><a data-scroll href="#contact-us">Tentang Minerva</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
  End Fixed Navigation
  ==================================== -->
    <!-- Jelajahi Course Section
		=========================================== -->

    <section class="portfolio section" id="portfolio">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">

                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Jelajahi <span class="color">Course</span></h2>
                        <div class="border"></div>
                        <h4></br>Berbagai macam pilihan course dengan metode belajar yang cocok buat kamu</h4>
                    </div>
                    <!-- /section title -->
                </div> <!-- /end col-lg-12 -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter">
                        <button type="button" data-filter="all">Semua Topik</button>
                        <button type="button" data-filter=".photography">Data Intelligence</button>
                        <button type="button" data-filter=".design">Startup</button>
                        <button type="button" data-filter=".development">Pajak</button>
                    </div>
                </div>
            </div>
            <div class="row portfolio-items-wrapper">
                <div class="mix col-md-4 design">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-1.jpg')}}" alt="">
                        <div class="caption">

                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-1.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Tag Design</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 design">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-2.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-2.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Sound system</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 design development">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-3.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-3.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Clock Product</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 photography development">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-4.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-4.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Bottol Label</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 design">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-5.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-5.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Shopping Bag</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 photography">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/')}}images/portfolio/portfolio-6.jpg" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-6.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Tag Design</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 design">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-7.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-7.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Business Card</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4 design">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-8.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-8.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Stationary Design</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-4  photography development">
                    <div class="portfolio-block">
                        <img class="img-responsive" src="{{asset('style/images/portfolio/portfolio-1.jpg')}}" alt="">
                        <div class="caption">
                            <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                href="{{asset('style/images/portfolio/portfolio-1.jpg')}}" data-lightbox="image-1">
                                <i class="tf-ion-android-search"></i>
                            </a>
                            <h4><a href="">Tag Design</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 text-center">
                </br>
                <a href="course.html" class="btn btn-main">lihat Semua Course</a>
            </div>
        </div> <!-- end container -->
    </section> <!-- End section -->

    <!--
		Start About Section
		==================================== -->
    <section class="bg-one about section bg-dark">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="1500ms">
                    <h2>Kenapa Pilih <span class="color">Minerva?</span> </h2>
                    <div class="border"></div>
                    <h4></br>Kami sadar bahwa kamu punya potensi besar untuk jadi talenta digital lewat pendidikan yang
                    </h4>
                    <h4>berkualitas dan terintegrasi dengan kebutuhan industri</h4>
                </div>
                <!-- /section title -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
                    <div class="block">
                        <div class="icon-box">
                            <i class="tf-tools"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3 class="ddd">Kuasai Materi Belajar Dari Awam</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero,
                                perspiciatis eos</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                    <div class="block">
                        <div class="icon-box">
                            <i class="tf-strategy"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Sertifikat Belajar Resmi</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero,
                                perspiciatis eos provident laborum eum dignissimos</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="block kill-margin-bottom">
                        <div class="icon-box">
                            <i class="tf-anchor2"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Dicariin Kerja</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero,
                                perspiciatis eos provident laborum eum dignissimos</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->



    <!--
Start Call To Action
==================================== -->
    <section class="call-to-action section-sm bg-1 overly">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Perlu Dicariin Kerja?</h2>
                    <p><b>Untuk alumni dan nonalumni, Binar punya banyak lowongan pekerjaan buat kamu.</b></p>
                    <a href="#" class="btn btn-main">Pelajari lebih lanjut</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    <section class="section about-2 padding-0" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 padding-0 ">
                    <img class="img-responsive" src="images/Sertifikasi.png" alt="">
                </div>
                <div class="col-md-6">
                    <div class="content-block">
                        <h2>Minerva Memiliki Sertifikat
                            Education Alliance Finland 2021</h2>
                        <p>Kurikulum Binar Bootcamp mendapatkan sertifikasi dari Education Alliance Finland (EAF).
                            Keberhasilan ini didasari atas penilaian sempurna dari segi kualitas kurikulum, metode
                            pembelajaran, pendekatan pengajaran kepada siswa, serta keselarasan kelas dengan kebutuhan
                            industri, kini dan nanti.</p>
                        <!--<p> </p>
						<p> </p>
						<p> </p>

						<a href="#" class="btn btn-main">Pelajari lebih lanjut</a>
						-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
Start Counter Section
==================================== -->

    <section id="counter" class="parallax-section bg-1 section overly">
        <div class="container">
            <div class="row">

                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                    <div class="counters-item">
                        <i class="tf-ion-android-happy"></i>
                        <span data-speed="3000" data-to="320">320</span>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <!-- end first count item -->

                <!-- second count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="200ms">
                    <div class="counters-item">
                        <i class="tf-ion-archive"></i>
                        <span data-speed="3000" data-to="565">565</span>
                        <h3>Projects completed</h3>
                    </div>
                </div>
                <!-- end second count item -->

                <!-- third count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="400ms">
                    <div class="counters-item">
                        <i class="tf-ion-thumbsup"></i>
                        <span data-speed="3000" data-to="95">95</span>
                        <h3>Positive feedback</h3>

                    </div>
                </div>
                <!-- end third count item -->

                <!-- fourth count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="counters-item kill-margin-bottom">
                        <i class="tf-ion-coffee"></i>
                        <span data-speed="3000" data-to="2500">2500</span>
                        <h3>Cups of Coffee</h3>
                    </div>
                </div>
                <!-- end fourth count item -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!-- 
Start Our Team
=========================================== -->

    <section id="our-team" class="section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                    <h2>Pembicara Ahli <span class="color">di Bidangnya</span></h2>
                    <div class="border"></div>
                    <h4></br>Mereka adalah pasukan garda terdepan untuk bimbing kamu belajar skills digital di Minerva.
                    </h4>
                </div>
                <!-- /section title -->

                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/team-1.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Abul Mal Muhit</h4>
                            <span>CEO/Founder</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->

                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="200ms">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/team-2.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Frank Miller</h4>
                            <span>Manager</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="400ms">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/team-3.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Michael Jonson</h4>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/team-4.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Mo. Kha. Alamgir</h4>
                            <span>SEO Specialist</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->
                    </div>
                </div>
                <!-- end team member -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Start Apa Kata Alumni?
		=========================================== -->

    <section id="testimonial" class="testimonial overly section bg-2">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeInDown">
                    <h2>Apa Kata<span class="color"> Alumni?</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium minima ex,
                                        quia error, deserunt voluptatibus repellendus? Incidunt eligendi aliquam
                                        repellat molestias, vel sed optio rem odit quis ratione non consequuntur!</p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-2.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel reiciendis qui in
                                        laborum obcaecati expedita blanditiis animi placeat, nemo exercitationem porro.
                                        Consequuntur qui commodi minima molestiae, dolores reprehenderit nemo inventore.
                                    </p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem non
                                        delectus neque, voluptatem accusamus atque expedita doloribus minima iusto nemo,
                                        numquam eos quia maiores harum! Quaerat illum beatae necessitatibus!</p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                    </div> <!-- end testimonial wrapper -->
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section -->


    <!--
Start Blog Section
=========================================== -->

    <section id="blog" class="section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeInDown">
                    <h2> Berita <span class="color">Pilihan Kami</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="clearfix">

                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                        <div class="post-block">
                            <div class="media-wrapper">
                                <img src="images/blog/binar.jpg" alt="amazing caves coverimage" class="img-responsive">
                            </div>

                            <div class="content">
                                <h3><a href="">Minerva Academy Lahirkan Talenta Sesuai Kebutuhan Digital Saat Ini</a>
                                </h3>
                                <p>Tidak ada industri di Indonesia yang tumbuh secepat ekonomi digital. Diperkirakan
                                    pada tahun 2025, ekonomi digital di Indonesia akan mencapai US$124 miliar, naik dari
                                    US$44 miliar pada tahun 2020...</p>
                                <a class="btn btn-transparent" href="single-post.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </article>
                    <!-- /single blog post -->

                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                        data-wow-delay="200ms">
                        <div class="post-block">
                            <div id="gallery-post" class="media-wrapper">
                                <div class="item">
                                    <img src="images/blog/blog-post-2.jpg" alt="blog post" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="images/blog/blog-post-1.jpg" alt="blog post | Meghna"
                                        class="img-responsive">
                                </div>
                            </div>

                            <div class="content">
                                <h3><a href="">Minerva Academy Luncurkan Program Pelatihan Jadi Business Intelligence
                                        Engineer</a></h3>
                                <p>Minerva Academy meluncurkan program pelatihan terbarunya yaitu business intelligence
                                    engineering.</p>
                                <a class="btn btn-transparent" href="single-post.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </article>
                    <!-- end single blog post -->

                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                        data-wow-delay="400ms">
                        <div class="post-block">
                            <div class="media-wrapper">
                                <img src="images/blog/blog-post-3.jpg" alt="amazing caves coverimage"
                                    class="img-responsive">
                            </div>

                            <div class="content">
                                <h3><a href="">Mencetak Talenta Digital Indonesia ala Minerva Academy</a></h3>
                                <p>Gencarnya transformasi digital yang dilakukan banyak perusahaan meningkatkan
                                    kebutuhan talenta digital. Hal ini yang coba dipecahkan oleh Binar Academy.</p>
                                <a class="btn btn-transparent" href="single-post.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </article>
                    <!-- end single blog post -->
                </div>

                <div class="all-post text-center">
                    <a class="btn btn-main" href="#">Lihat Semua Berita</a>
                </div>

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->


    <!-- =====================================
		Start Tentang Minerva
=========================================== -->
    <section id="contact-us" class="contact-us section-bg">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Tentang <span class="color">Minerva</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- Detail Kontak -->
                <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                    <h3>Detail Kontak</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
                        blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel
                        fugiat dicta laboriosam labore adipisci.</p>
                    <div class="contact-details">
                        <div class="con-info clearfix">
                            <i class="tf-map-pin"></i>
                            <span>Jl. Asem Kranji Blok K-7 Universitas Gadjah Mada Sekip, Bulaksumur, Senolowo,</span>
                            <span> Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-telephone-outline"></i>
                            <span>Phone: +62 822-2888-7882</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-email-outline"></i>
                            <span>Email: official@gamainovasi.com</span>
                        </div>
                    </div>
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <form id="contact-form" method="post" action="sendmail.php" role="form">

                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message"
                                id="message"></textarea>
                        </div>

                        <div id="mail-success" class="success">
                            Terima kasih. Pesan telah terkirim :)
                        </div>

                        <div id="mail-fail" class="error">
                            Maaf, Tidak tahu apa yang terjadi. Coba lagi :(
                        </div>

                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Kirim">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->


    <!-- end Contact Area
		========================================== -->

    <footer id="footer" class="bg-one">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">

                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul class="list-inline">
                            <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->

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

                        <p><a href="http://www.themefisher.com"> Minerva Academy Team</a>. <br>Copyright
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

    <div id="scroll-up">
        up
    </div>


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