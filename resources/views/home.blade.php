@extends('layouts.layouts-public')

@section('popup')
<style>
    .hide{
        display:none;
        visibility:hidden;
    }
    .popbox{
        position:fixed;
        top:0;
        left:0;
        bottom:0;
        width:100%;
        z-index:1000000;
    }
    .pop-content{
        width:350px;
        height:450px;
        text-align:center;
        display:block;
        position:absolute;
        top:50%;
        left:50%;
        margin:-225px 0 0 -125px;
        z-index:2;
        box-shadow:0 3px 20px 0 rgba(0,0,0,.5);
    }
    .popcontent{
        width:100%;
        height:100%;d
        display:block;
        background:#fff;
        border-radius:5px;
        overflow:hidden
    }
    .pop-overlay{
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        width:100%;
        z-index:1;
        background:rgba(0,0,0,.7)
    }
    .popbox-close-button{
        position:absolute;
        width:28px;
        height:28px;
        line-height:28px;
        text-align:center;
        top:-14px;
        right:-14px;
        background-color:#fff;
        box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);
        border:none;
        border-radius:50%;
        cursor:pointer;
        font-size:34px;
        font-weight:lighter;
        padding:0}
    .popcontent img{width:100%;height:100%;display:block}
    .flowbox{position:relative;overflow:hidden}
    @media screen and (max-width:840px){.pop-content{width:90%;height:auto;top:20%;margin:0 0 0 -45%}
    .popcontent img{height:auto}
    }
    </style>
    
    <script>
    //<![CDATA[
    setTimeout(function(){
     document.getElementById('popbox').classList.remove('hide');
     document.body.className+=" flowbox"
     }, 2000);
    function removeClassonBody(){var element=document.body;element.className=element.className.replace(/\bflowbox\b/g,"")}
    //]]>
     </script>
@endsection

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Belajar IT?
                    <br>Gabungnya Di Minerva</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Kita akan ajarin kamu sampai bener-bener paham dan mendapat keahlian siap kerja untuk karier masa depan kamu.</p>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Daftar Course</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="{{asset('style/home/img/hero.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->



<!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h5>Kuasai Materi Belajar Dari Awam</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-coffee text-primary mb-4"></i>
                    <h5>Sertifikat Belajar Resmi</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                    <h5>Dicariin Kerja</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h5>24/7 Service</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Service End -->


<!-- About Start -->
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
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                dolore erat amet</p>
            <div class="row g-4 mb-4">
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15
                        </h1>
                        <div class="ps-4">
                            <p class="mb-0">Tahun</p>
                            <h6 class="text-uppercase mb-0">Pengalaman</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                        </h1>
                        <div class="ps-4">
                            <p class="mb-0">Mentor</p>
                            <h6 class="text-uppercase mb-0">Populer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary py-3 px-5 mt-2" href="">Selengkapnya...</a>
        </div>
    </div>
</div>
</div>
<!-- About End -->


<!-- Course Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Jelajahi Course</h5>
            <h1 class="mb-5">Course Terbaru</h1>
        </div>
        <ul class="container center nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                    href="{{ route('jelajah')}}">
                    <i class="fa fa-user fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Semua</small>
                        <h6 class="mt-n1 mb-0">Program</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3"
                    href="{{ route('category-1')}}">
                    <i class="fa fa-coffee fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">General</small>
                        <h6 class="mt-n1 mb-0">Event</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 pb-3" 
                    href="{{ route('category-2')}}">
                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Mini</small>
                        <h6 class="mt-n1 mb-0">Course</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" 
                    href="{{ route('category-3')}}">
                    <i class="fa fa-user-tie fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Corporate</small>
                        <h6 class="mt-n1 mb-0">Innovation</h6>
                    </div>
                </a>
            </li>
        </ul>
            <div class="row g-4">

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/about-1.jpg')}}" alt="#">
                    </div>
                    <h5 class="mb-0">International Webinar Center of Data Science 2022</h5>
                    <br>
                    <small><a class="section-title ff-secondary" href="{{ route('category-1')}}"> General Course</a></small>
                    <p>Rp. 10.000</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="{{ route('detail-course-7')}}"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/about-2.jpg')}}" alt="#">
                    </div>
                    <h5 class="mb-0">Event Selanjutnya Masih Coming Soon pada Bulan Juni</h5>
                    <br>
                    <small><a class="section-title ff-secondary" href="#"> Corporate Innovation</a></small>
                    <p>Rp. 10.000</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="{{ route('detail-course-11')}}"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/about-1.jpg')}}" alt="#">
                    </div>
                    <h5 class="mb-0">Event Selanjutnya Masih Coming Soon pada Bulan Juni</h5>
                    <br>
                    <small><a class="section-title ff-secondary" href="#">Corporate Innovation</a></small>
                    <p>Rp. 10.000</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="#"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/about-2.jpg')}}" alt="#">
                    </div>
                    <h5 class="mb-0">Event Selanjutnya Masih Coming Soon pada Bulan Juni</h5>
                    <br>
                    <small><a class="section-title ff-secondary" href="#">Mini Course</a></small>
                    <p>Rp. 10.000</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="#"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>

            <div class="col-4 text-center">
                    
            </div>
            <div class="col-4 text-center">
                    <a class="btn btn-primary w-100 py-3" href="{{ route('jelajah')}}" >Course Lainnya</a>
            </div>
        </div>
    </div>
    </div>
        <!-- Team End -->


<!-- Course End -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
               
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Pendaftaran</h5>
                <h1 class="text-white mb-4">Daftar Webinar</h1>
                <form action="{{ route('insertdaftarwebinar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" name="post_id" value="{{ old('post_id')}}">
                                  <option value=" ">Nama Event</option>
                                    @foreach ($post as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <label for="post_id">Pilih Event Yang Diikuti</label>
                            </div>
                        </div>
                        {{-- <div class="col-12">    
                          <div class="form-group">
                            <label for="post_id"></label>
                            <select name="post_id" class="form-control" value="{{ old('post_id')}}">
                                <option value="">Pilih Event</option>
                                @foreach ($post as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <label for="email">Email Aktif</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="notelp" class="form-control" name="notelp" id="notelp" placeholder="Nomor Whatsapp">
                                <label for="notelp">No. Whatsapp</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="instansi" class="form-control" name="instansi" id="instansi" placeholder="Instansi/Universitas/Perusahaan">
                                <label for="instansi">Instansi/Universitas/Perusahaan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="domisili" class="form-control" name="domisili" id="domisili" placeholder="Domisili">
                                <label for="domisili">Domisili</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Daftar Sekarang</button>
                        </div>
                        {{-- <div class="col-12">
                        <a class="btn btn-secondary w-100 py-3" href="https://t.me/Grouppeserta">Gabung Grup Telegram</a>
                        </div>
                        <p class="text-white mb-2">*) Peserta yang telah mendaftar silahkan bergabung ke grup telegram di atas</p> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->


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
                    <img class="img-fluid" src="{{asset('style/home/img/team-1.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
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
                    <img class="img-fluid" src="{{asset('style/home/img/team-2.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
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
                    <img class="img-fluid" src="{{asset('style/home/img/team-3.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
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
                    <img class="img-fluid" src="{{asset('style/home/img/team-4.jpg')}}" alt="">
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
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


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
    <div class="text-center">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
        <h1 class="mb-5">Apa Kata Alumni?</h1>
    </div>
    <div class="owl-carousel testimonial-carousel">
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                diam</p>
            <div class="d-flex align-items-center">
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('style/home/img/testimonial-1.jpg')}}"
                    style="width: 50px; height: 50px;">
                <div class="ps-3">
                    <h5 class="mb-1">Budi Doremi</h5>
                    <small>Universitas Negeri Semarang</small>
                </div>
            </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                diam</p>
            <div class="d-flex align-items-center">
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('style/home/img/testimonial-2.')}}jpg"
                    style="width: 50px; height: 50px;">
                <div class="ps-3">
                    <h5 class="mb-1">Judika</h5>
                    <small>Universitas Gajah Mada</small>
                </div>
            </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                diam</p>
            <div class="d-flex align-items-center">
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('style/home/img/testimonial-3.jpg')}}"
                    style="width: 50px; height: 50px;">
                <div class="ps-3">
                    <h5 class="mb-1">Client Name</h5>
                    <small>Profession</small>
                </div>
            </div>
        </div>
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                diam</p>
            <div class="d-flex align-items-center">
                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('style/home/img/testimonial-4.jpg')}}"
                    style="width: 50px; height: 50px;">
                <div class="ps-3">
                    <h5 class="mb-1">Xabi Alonso</h5>
                    <small>Universitas Diponegoro</small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->
@include('sweetalert::alert')
@endsection

@section('popupbanner')
<div class="popbox hide" id="popbox">
    <div aria-label='Close' class="pop-overlay" onclick='document.getElementById("popbox").style.display="none";removeClassonBody();' role="button" tabindex="0">
        <div class="pop-content">
            <a href="/7" target="_blank" rel="noopener noreferrer" title="box">
                <div class="popcontent">
                    <img src="{{asset('style/home/img/about-1.jpg')}}" alt="banner" width="100" height="450"/>
                </div>
            </a>
        <button aria-label='Close' class='popbox-close-button' onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>&times;</button>
    </div>
</div>
@endsection
