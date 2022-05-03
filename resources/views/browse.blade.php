@extends('layouts.main')

@section('content')
<section class="title text-center section-sm bg-dark overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Minerva Bootcamp</h2>

                <h4></br>Gali potensi yang selama ini kamu yakini bersama mentor yang ahli di bidangnya, bakal</h4>
                <h4>dipandu sampai paham.</h4>
            </div>
        </div>
    </div> 
</section>

<section id="counter" class="parallax-section bg-3 section overly">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                <div class="counters-item">
                    <i class="tf-ion-android-happy"></i>
                    <span data-speed="3000" data-to="320">320</span>
                    <h3>Happy Clients</h3>
                </div>
            </div>
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
        </div> <!-- end container -->
    </section> <!-- End section -->


@endsection