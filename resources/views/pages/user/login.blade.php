<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | SIPEDULI</title>

  @stack('prepend-style')
  @include('includes.admin.style')
  @stack('addon-style')

  <style>
    body {
      min-height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background:
        linear-gradient(135deg, rgba(13, 110, 253, .92), rgba(26, 116, 157, 0.88)),
        url('/assets/img/bg.jpg') center center/cover no-repeat;
      position: relative;
    }

    body::before {
      content: '';
      position: absolute;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .08);
      top: -120px;
      right: -100px;
    }

    body::after {
      content: '';
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .06);
      bottom: -100px;
      left: -80px;
    }

    .navbar {
      background: transparent !important;
      padding: 20px 0;
      position: relative;
      z-index: 5;
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
      font-weight: 600;
    }

    .main-content {
      min-height: calc(100vh - 80px);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      z-index: 5;
      padding: 30px 15px;
    }

    .login-wrapper {
      width: 100%;
      max-width: 460px;
    }

    .login-header {
      text-align: center;
      margin-bottom: 28px;
      color: #fff;
    }

    .login-header h1 {
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .login-header p {
      font-size: 16px;
      opacity: .95;
      margin: 0;
    }

    .login-card {
      background: rgba(255, 255, 255, .96);
      border-radius: 24px;
      padding: 38px;
      box-shadow: 0 25px 60px rgba(0, 0, 0, .18);
      border: 1px solid rgba(255, 255, 255, .4);
    }

    .form-group label {
      font-weight: 600;
      color: #334155;
      margin-bottom: 8px;
    }

    .form-control {
      height: 54px;
      border-radius: 14px;
      border: 1px solid #dbe3ee;
      padding: 0 18px;
      font-size: 15px;
      box-shadow: none !important;
    }

    .form-control:focus {
      border-color: #0d6efd;
    }

    .btn-login {
      width: 100%;
      height: 54px;
      border: 0;
      border-radius: 14px;
      background: linear-gradient(135deg, #0d6efd, #1b0a7cff);
      color: #fff;
      font-weight: 700;
      font-size: 16px;
      transition: .3s;
    }

    .btn-login:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(13, 110, 253, .25);
    }

    .bottom-link {
      text-align: center;
      margin-top: 22px;
      font-size: 15px;
      color: #64748b;
    }

    .bottom-link a {
      color: #0d6efd;
      font-weight: 700;
      text-decoration: none;
    }

    footer {
      text-align: center;
      color: rgba(255, 255, 255, .9);
      padding: 0 0 20px;
      position: relative;
      z-index: 5;
    }

    @media(max-width:576px) {
      .login-card {
        padding: 28px 22px;
      }

      .login-header h1 {
        font-size: 34px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">SIPEDULI</a>

      <div class="ml-auto">
        <a href="/" class="nav-link d-inline-block">Home</a>
      </div>
    </div>
  </nav>

  <!-- Main -->
  <div class="main-content">
    <div class="login-wrapper">

      <div class="login-header">
        <h1>Selamat Datang</h1>
        <p>Login untuk mengakses sistem pengaduan masyarakat.</p>
      </div>

      <div class="login-card">
        <form action="{{ route('user.login') }}" method="POST">
          @csrf

          <div class="form-group mb-3">
            <label>Username / Email</label>
            <input type="text" name="username" value="{{ old('username') }}"
              class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan username atau email">

            @error('username')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="form-group mb-4">
            <label>Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="Masukkan password">

            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="btn-login">
            Login Sekarang
          </button>

          <div class="bottom-link">
            Belum punya akun?
            <a href="{{ url('register') }}">Daftar Sekarang</a>
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer>
    © Copyright Brebes Beres
  </footer>

  @stack('prepend-script')
  @include('includes.admin.script')
  @stack('addon-script')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (session()->has('pesan'))
    <script>
      Swal.fire(
        'Pemberitahuan!',
        '{{ session()->get('pesan') }}',
        'error'
      );
    </script>
  @endif

</body>

</html>