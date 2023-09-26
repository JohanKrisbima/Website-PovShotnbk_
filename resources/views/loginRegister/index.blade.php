<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('assets/css/loginRegister.css') }}">
</head>
<body>
  @if(session()->has('loginError'))
  <script>alert('Login Gagal')</script>
  @endif

  @if(session()->has('success'))
  <script>alert('Registration Succesfull!! Please Login')</script>
  @endif
 
<div class="wrapper">
      <div class="title-text">
        <div class="title login"></div>
        <div class="title signup"></div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Registrasi</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="/login" method="POST" class="login">
            @csrf
            <pre>
            </pre>
            <div class="field">
              <input type="email" placeholder="Masukan Email " class="@error('email') is-invalid @enderror" required name="email" id="email" autofocus >
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required name="password" id="password">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form action="/register" method="POST" class="signup">
            @csrf
            <div class="field">
              <input type="text" class="@error('name') is-invalid @enderror" placeholder="Masukan Nama" required name="name" value="{{ old('name') }}">
              @error('name')
              <script>alert('{{ $message }} Register Failed!!')</script>
              @enderror
            </div>
            <div class="field">
              <input type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Masukan Email" required value="{{ old('email') }}">
              @error('email')
              <script>alert('{{ $message }} Register Failed!!')</script>
              @enderror
            </div>
            <div class="field">
              <input type="text" name="telpon" class="@error('telpon') is-invalid @enderror" placeholder="Masukan No.Telp" required value="{{ old('telpon') }}">
              @error('telpon')
              <script>alert('{{ $message }} Register Failed!!')</script>
              @enderror
            </div>
            <div class="field">
              <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Masukan password" required >
              @error('password')
              <script>alert('{{ $message }} Register Failed!!')</script>
              @enderror
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Daftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="/login">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
