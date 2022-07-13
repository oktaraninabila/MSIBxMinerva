@extends('layouts.layouts-public')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header2 mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Minerva Academy</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#"><b>International Webinar Center of Data Science 2022</b>
                    </a></li>                
            </ol>
        </nav>
    </div>
</div>
</div>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kontak Kami</h5>
                <h1 class="mb-5">Hubungi Untuk Setiap Pertanyaan</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Alamat</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>Jl. Asem Kranji Blok K-7 Universitas Gadjah Mada Sekip, Bulaksumur, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">No. Telephone</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>+62 822 2888 7882</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>official@gamainovasi.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1668086776763!2d110.3730836140151!3d-7.7721296943986555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584baeab3adf%3A0xa3bf7b37dfcb712c!2sEDS%20Building%20-%20Universitas%20Gadjah%20Mada!5e0!3m2!1sen!2sid!4v1654143990274!5m2!1sen!2sid"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection