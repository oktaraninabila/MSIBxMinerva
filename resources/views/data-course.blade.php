@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Daftar Course yang Tersedia</h3>
          </div>
<div class="row g-4">
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
            <div class="overflow-hidden m-4">
                <img class="img-fluid" src="{{asset('style/home/img/soon1.jpg')}}" alt="">
            </div>
            <h5 class="mb-0">International Webinar Center of Data Science 2022</h5>
            <small>Data Intelligent</small>
            <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-primary mx-1" href="/peserta/1"><small><b>Lihat Peserta</b></small></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
            <div class="overflow-hidden m-4">
                <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
            </div>
            <h5 class="mb-0">Coming Soon</h5>
            <small>Data Intelligent</small>
            <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-primary mx-1" href="#"><small><b>Lihat Peserta</b></small></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
            <div class="overflow-hidden m-4">
                <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
            </div>
            <h5 class="mb-0">Coming Soon</h5>
            <small>Data Intelligent</small>
            <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-primary mx-1" href="#"><small><b>Lihat Peserta</b></small></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
            <div class="overflow-hidden m-4">
                <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
            </div>
            <h5 class="mb-0">Coming Soon</h5>
            <small>Data Intelligent</small>
            <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-primary mx-1" href="#"><small><b>Lihat Peserta</b></small></a>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>

@endsection