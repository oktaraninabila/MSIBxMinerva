@extends('layouts.layouts-public')

@section('content')

<div class="container-xxl py-5 bg-dark hero-header2 mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Grup Telegram</h1>
        <nav aria-label="breadcrumb">
            {{-- <a href="#"><b>Spirit of Collaboration and Learning</b>
                </a> --}}
            
            <div class="container text-center col-2 text-start">
                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                    src="{{asset('style/home/img/tele.png')}}" style="margin-top: 0%;">
            </div>
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="https://t.me/Grouppeserta"><br><b>Minerva Indonesia</b>
                    <p class="text-white mb-2"><br>*) Peserta yang telah mendaftar silahkan bergabung ke grup telegram di bawah ini</p>
                    <div class="col-12">
                        <a class="btn btn-secondary w-50 py-3" href="https://t.me/Grouppeserta">Gabung Grup Telegram</a>
                    </div>
                    </a>
                </li>                
            </ol>
            <div class="footer">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><br>Kontak Kami
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://wa.me/6282228887882"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/gama.inovasi/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/gama.berdikari"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UC39qg08CawTSEKe2-aPN8lA"><i class="fab fa-youtube"></i></a>
                </div>
            </h4>
            </div>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
        <!-- Reservation Start -->
        
@include('sweetalert::alert')
@endsection
        
