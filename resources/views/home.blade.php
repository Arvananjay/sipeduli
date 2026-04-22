@extends('layouts.apps')

@section('title', 'Home')

@section('content')

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8fafc;
    }

    /* ================= HERO ================= */
    #hero {
      min-height: 95vh;
      display: flex;
      align-items: flex-start;
      padding-top: 140px;
      padding-bottom: 140px;
      position: relative;
      overflow: hidden;
      background: url('/assets/img/bg2.png') center center/cover no-repeat;
    }

    #hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg,
          rgba(9, 83, 168, .45),
          rgba(44, 159, 191, .35));
      z-index: 1;
    }

    #hero .container {
      position: relative;
      z-index: 3;
    }

    #hero h1 {
      color: #fff;
      font-size: 62px;
      font-weight: 800;
      line-height: 1.15;
      margin-bottom: 20px;
      max-width: 760px;
    }

    #hero p {
      color: rgba(255, 255, 255, .92);
      font-size: 20px;
      line-height: 1.7;
      max-width: 620px;
      margin-bottom: 35px;
    }

    #hero .btn-get-started {
      display: inline-block;
      padding: 16px 40px;
      background: #fff;
      color: #0d6efd;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 15px 35px rgba(0, 0, 0, .18);
      transition: .3s;
    }

    #hero .btn-get-started:hover {
      transform: translateY(-5px);
      color: #0d6efd;
    }

    /* ================= WHY US ================= */
    #why-us {
      position: relative;
      margin-top: -110px;
      z-index: 20;
      padding-bottom: 70px;
    }

    .menu-box {
      text-decoration: none !important;
    }

    #why-us .icon-box {
      background: #fff;
      border-radius: 24px;
      padding: 40px 25px;
      text-align: center;
      box-shadow: 0 20px 50px rgba(0, 0, 0, .10);
      border: 1px solid #eef2f7;
      transition: .3s;
      height: 100%;
    }

    #why-us .icon-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 25px 55px rgba(9, 83, 168, .18);
    }

    #why-us .icon-box i {
      width: 78px;
      height: 78px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: auto;
      border-radius: 50%;
      font-size: 34px;
      color: #fff;
      background: linear-gradient(135deg, #2972df, #52a9d8);
      margin-bottom: 24px;
    }

    #why-us .icon-box h4 {
      font-size: 21px;
      font-weight: 700;
      color: #0f172a;
      margin: 0;
    }

    /* ================= COUNTS ================= */
    #counts {
      padding: 40px 0 90px;
      background: linear-gradient(135deg, #f8fafc, #eef4ff);
    }

    #counts .count-box {
      background: #fff;
      border-radius: 24px;
      padding: 45px 35px;
      text-align: center;
      box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
      border: 1px solid #eef2f7;
      transition: .3s;
      min-height: 250px;
    }

    #counts .count-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px rgba(13, 110, 253, .14);
    }

    #counts .count-box i {
      width: 65px;
      height: 65px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      border-radius: 50%;
      font-size: 32px;
      color: #fff;
      background: linear-gradient(135deg, #4478cb, #52a9d8);
    }

    #counts .count-box span {
      display: block;
      font-size: 46px;
      font-weight: 800;
      color: #0f172a;
      line-height: 1;
    }

    #counts .count-box p {
      margin-top: 14px;
      font-size: 17px;
      color: #64748b;
      font-weight: 600;
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width:992px) {

      #hero {
        min-height: 70vh;
        text-align: center;
        align-items: center;
        padding-top: 120px;
        padding-bottom: 120px;
      }

      #hero h1 {
        font-size: 44px;
      }

      #hero p {
        font-size: 18px;
      }

      #why-us {
        margin-top: -80px;
      }

      #counts .count-box {
        min-height: auto;
      }

    }

    @media(max-width:576px) {

      #hero {
        min-height: 65vh;
        padding-top: 100px;
        padding-bottom: 100px;
      }

      #hero h1 {
        font-size: 34px;
      }

      #hero p {
        font-size: 16px;
      }

      #hero .btn-get-started {
        padding: 14px 28px;
        font-size: 15px;
      }

      #why-us {
        margin-top: -60px;
      }

    }
  </style>

  <!-- HERO -->
  <section id="hero">
    <div class="container">

      <h1>Pengaduan Masyarakat Digital</h1>

      <p>
        Laporkan permasalahan lingkungan, fasilitas umum,
        dan layanan publik dengan cepat, transparan,
        dan mudah diakses kapan saja.
      </p>

      <a href="{{ route('pengaduan') }}" class="btn-get-started">
        Buat Pengaduan
      </a>

    </div>
  </section>

  <main id="main">

    <!-- WHY US -->
    <section id="why-us">
      <div class="container">
        <div class="row g-4 justify-content-center">

          <div class="col-lg-3 col-md-6">
            <a href="{{ url('tutorial-pengaduan') }}" class="menu-box">
              <div class="icon-box">
                <i class="bx bxs-megaphone"></i>
                <h4> Pengaduan</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="{{ url('verifikasi') }}" class="menu-box">
              <div class="icon-box">
                <i class="bx bx-analyse"></i>
                <h4>Verifikasi</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="{{ url('tindaklanjut') }}" class="menu-box">
              <div class="icon-box">
                <i class="bx bx-cube-alt"></i>
                <h4>Tindak Lanjut</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="{{ url('selesai') }}" class="menu-box">
              <div class="icon-box">
                <i class="bx bx-check-circle"></i>
                <h4>Selesai</h4>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- COUNTS -->
    <section id="counts">
      <div class="container">
        <div class="row g-4 justify-content-center">

          <!-- Semua -->
          <div class="col-lg-4 col-md-6">
            <a href="{{ url('data-pengaduan/semua') }}" class="menu-box">
              <div class="count-box">
                <i class="bx bx-list-check"></i>

                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $pengaduan }}"
                  data-purecounter-duration="1"></span>

                <p>Semua Pengaduan</p>
              </div>
            </a>
          </div>

          <!-- Proses -->
          <div class="col-lg-4 col-md-6">
            <a href="{{ url('data-pengaduan/proses') }}" class="menu-box">
              <div class="count-box">
                <i class="bx bx-loader"></i>

                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $proses }}"
                  data-purecounter-duration="1"></span>

                <p>Sedang Diproses</p>
              </div>
            </a>
          </div>

          <!-- Selesai -->
          <div class="col-lg-4 col-md-6">
            <a href="{{ url('data-pengaduan/selesai') }}" class="menu-box">
              <div class="count-box">
                <i class="bx bx-check-circle"></i>

                <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $selesai }}"
                  data-purecounter-duration="1"></span>

                <p>Selesai</p>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

  </main>

@endsection