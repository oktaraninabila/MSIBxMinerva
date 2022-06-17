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
            @foreach ($post as $item)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset($item->featured)}}" alt="{{ $item->title }}">
                    </div>
                    <h5 class="mb-0">{{ $item->title }}</h5>
                    <br>
                    <small><a class="section-title ff-secondary" href="{{ route('category-course', ['id' => $item->category_id])}}"> {{ $item->category->name }}</a></small>
                    <p>Rp. {{ $item->price }}</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="{{ route('detail-course', ['id' => $item->id])}}"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/soon1.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">International Webinar Center of Data Science 2022</h5>
                    <small>Data Intelligent</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href="/detail-course"><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">The Next Course</h5>
                    <h5 class="mb-0">is Coming</h5>
                    <h5 class="mb-0">Soon</h5>
                    <small>Data Intelligent</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href=""><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">The Next Course</h5>
                    <h5 class="mb-0">is Coming</h5>
                    <h5 class="mb-0">Soon</h5>
                    <small>Data Intelligent</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href=""><small><b>More...</b></small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('style/home/img/soon.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">The Next Course</h5>
                    <h5 class="mb-0">is Coming</h5>
                    <h5 class="mb-0">Soon</h5>
                    <small>Data Intelligent</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-primary mx-1" href=""><small><b>More...</b></small></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
<!-- Course End -->
@endsection