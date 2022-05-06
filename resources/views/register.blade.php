<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('style/home/img/icon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('style/auth/assets/css/bootstrap.min.css')}}">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{asset('style/auth/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('style/auth/assets/css/uf-style.css')}}">
        <title>Daftar Akun Minerva Academy</title>
      </head>
  <body>
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="#"><img src="{{asset('style/auth/assets/img/person.png')}}" alt="" width="100" height="100"></a>
      <h1 class="text-white h3"><b>Daftar Akun Minerva</b></h1>
      </div>
      <form action="/registeradmin" method="POST" class="mt-4">
       @csrf
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-envelope"></span>
          <input type="text" name="email" class="form-control" placeholder="Alamat Email">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" name="password" class="form-control" placeholder="Kata sandi">
        </div>
        <div class="d-grid mb-4">
          <button type="submit" class="btn uf-btn-primary btn-lg">Daftar</button>
        </div>
        <div class="mt-4 text-center">
          <span class="text-white">Sudah punya akun?</span>
          <a href="/login">Login</a>
        </div>
      </form>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{asset('style/auth/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/auth/assets/js/bootstrap.min.js')}}"></script>
  </body>
</html>