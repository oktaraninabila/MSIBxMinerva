<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Minerva: Event Online dan Kelas Online Bersertifikat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <style>
        .btn-floating {
            position: fixed;
            right: 25px;
            z-index: 9999;
            color: 0;
            transition: 0.2s;
            bottom: 30px;
        }
    
        .btn-floating:hover {
            width: auto;
            padding: 0 20px;
            cursor: pointer;
        }
    </style>

    <!-- Favicon -->
    <link href="{{asset('style/home/img/icon.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('style/home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('style/home/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('style/home/css/style.css')}}" rel="stylesheet">
</head>
@yield ('popup')
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="{{asset('style/home/img/logo.png')}}" alt="Logo"></i> Minerva</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Minerva</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('jelajah')}}" class="dropdown-item">Semua Program</a>
                                <a href="{{ route('category-1')}}" class="dropdown-item">General Event</a>
                                <a href="{{ route('category-2')}}" class="dropdown-item">Mini Course</a>
                                <a href="{{ route('category-3')}}" class="dropdown-item">Corporate Innovation</a>
                            </div>
                        </div>
                        {{-- <a href="/jelajah" class="nav-item nav-link">Program Minerva</a> --}}
                        <a href="{{ route('tentang-kami')}}" class="nav-item nav-link">Tentang Kami</a>
                        <a href="{{ route('kontak')}}" class="nav-item nav-link">Kontak</a>
                        
                        {{-- <a href="/jelajah" class="nav-item nav-link">Daftar</a> --}}
                    </div>
                    {{-- <a href="/login" class="btn btn-primary py-2 px-4">Login</a> --}}
                </div>
            </nav>

@yield('content')
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Layanan</h4>
                        <a class="btn btn-link" href="{{ route('home') }}">Beranda</a>
                        <a class="btn btn-link" href="{{ route('jelajah')}}">Program Minerva</a>
                        <a class="btn btn-link" href="{{ route('jelajah')}}">Pendaftaran</a>
                        <a class="btn btn-link" href="{{ route('tentang-kami')}}">Tentang kami</a>
                        <a class="btn btn-link" href="{{ route('kontak')}}">Kontak</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontak</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Asem Kranji Blok K-7 Universitas Gadjah Mada Sekip, Bulaksumur, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 822 2888 7882</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>official@gamainovasi.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Ikuti kami dan dapatkan info menarik!</p>
                        <form action="{{route('category.store')}}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group">
                              <label for="name">Nama Kategori</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Kategori">
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>Nama Kategori harus diisi.</strong>
                                  </span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                          </form>

                        {{-- <form action="{{ route('newsletter')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email"></label>
                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Email">
                                    {{-- <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">daftar</button> --}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form> --}}
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Media Sosial</h4>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/gama.inovasi/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/gama.berdikari"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UC39qg08CawTSEKe2-aPN8lA"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/pt-gama-inovasi-berdikari/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-9 text-center text-md-start ">
                            &copy; <a>Minerva Academy</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By Minerva Dev Team and <a class="" href="https://htmlcodex.com">HTML Codex.</a>
                            Distributed By <a class="" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        
                        <div class="col-md-3 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ route('home') }}">Home</a>
                               <!-- <a href="">Cookies</a> -->
                                <a href="{{ route('kontak')}}">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        {{-- <a href="https://wa.me/6282228887882" class="back-to-top">
            <img src="{{asset('style/home/img/WhatsApp3.png')}}" alt="WhatsApp">
        </a> --}}
        <a href="https://wa.me/6282228887882" class="btn-floating" target="WhatsApp">
            <img src="{{asset('style/home/img/WhatsApp3.png')}}" alt="WhatsApp">
        </a>
    </div>
    
    @yield('popupbanner')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('style/home/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('style/home/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('style/home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('style/home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('style/home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('style/home/js/main.js')}}"></script>
</body>

</html>