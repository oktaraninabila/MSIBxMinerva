@extends('layouts.layouts-public')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Minerva Bootcamp</h1>
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
    <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-10 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                            src="{{asset('style/home/img/soon1.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Data Intelligence Course</h5>
                <h1 class="mb-4">International Webinar Center of Data Science 2022</h1>
                <p class="mb-4">Center of Data Science (CDS) UII mengadakan agenda webinar bertaraf internasional pada 10-11 Desember 2021 lalu dengan tema “Data Science for Human Life”. Kegiatan ini dilaksanakan secara virtual melalui Zoom. Acara webinar internasional ini diisi oleh 4 orang pembicara, 2 dari internal Jurusan Informatika UII dan 2 pembicara eksternal.  </p>
                <p class="mb-4">Pembicara pertama disampaikan oleh Dr. Ahmad Luthfi dari Universitas Islam Indonesia. Beliau adalah salah satu dosen Jurusan Informatika UII yang baru saja meraih gelar doktor di Delft University of Technology, Belanda. Beliau menyampaikan materi dengan topik “Data Science for Opening Government Data Decision Making”. Pada sesi pembicara kedua, materi disampaikan oleh Dr. Atika Qazi dari Universiti Brunei Darussalam dengan topik “Covid-19 and Applications of Data Analytics”.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Mei</p>
                                <h6 class="text-uppercase mb-0">2022</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" >09:00
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Waktu</p>
                                <h6 class="text-uppercase mb-0">Indonesia Barat</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="/1/daftar-webinar">Daftar Course</a>
                <a class="btn btn-secondary py-3 px-5 mt-2" href="/jelajah">Lain Kali</a>
            </div>
        </div>
    </div>
    </div>
    <!-- About End -->
@include('sweetalert::alert')
@endsection