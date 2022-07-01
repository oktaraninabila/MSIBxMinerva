@extends('layouts.layouts-public')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Minerva Indonesia</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#"><b>Gali potensi yang selama ini kamu yakini bersama mentor yang ahli di bidangnya,<br/>bakal
                    dipandu sampai paham.</b>
                    </a></li>                
            </ol>
        </nav>
    </div>
</div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                            src="{{asset('style/home/img/about-1.jpg')}}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                            src="{{asset('style/home/img/about-2.jpg')}}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                            src="{{asset('style/home/img/about-3.jpg')}}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                            src="{{asset('style/home/img/about-4.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang kami</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-user-tie text-primary me-2"></i>Minerva</h1>
                <p class="mb-4">Minerva Indonesia adalah sebuah platform yang menawarkan berbagai program yang menarik, up-to-date dan tentunya mengikuti perkembangan teknologi dengan didukung narasumber yang expert di bidangnya. </p>
                <p class="mb-4">Program di Minerva diklasifikasikan menjadi 3 bidang yaitu General Event, Mini Course dan Corporate Innovation. General Event merupakan program yang berisi berbagai event yang mencangkup lingkup yang luas tidak terbatas pada satu hal tertentu. Mini Course menawarkan program yang ditujukan untuk meningkatkan suatu skill secara mendalam dengan menawarkan pelatihan yang berkelanjutan. Sedangkan Corporate Innovation berisi berbagai program yang berhubungan dengan peluang inovasi baru dari sisi bisnis maupun perusahaan.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Tahun</p>
                                <h6 class="text-uppercase mb-0">Pengalaman</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0">10+
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Mentor</p>
                                <h6 class="text-uppercase mb-0">Populer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Selengkapnya...</a>-->
            </div>
        </div>
    </div>
    </div>
<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Pembicara</h5>
        <h1 class="mb-5">Ahli Di Bidangnya</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="{{asset('style/home/img/narsum-setiawan.png')}}" alt="">
                </div>
                <h5 class="mb-0">Setiawan Adhiputro</h5>
                <small>Direktur OVO (PT Visionet Internasional) 2017 – 2019</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="{{asset('style/home/img/narsum-nayoko.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Nayoko Wicaksono</h5>
                <small>CEO dan Co Founder Algoritma Data Science School</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="{{asset('style/home/img/narsum-lucky.png')}}" alt="">
                </div>
                <h5 class="mb-0">Lucky Esa</h5>
                <small>Coach & Trainer di Asia Entrepreneurship Training Program (AETP)</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="{{asset('style/home/img/narsum-anugrah1.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Anugrah Pratama</h5>
                <small>Associate Partner<br>at EY-Parthenon</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team End -->
@endsection