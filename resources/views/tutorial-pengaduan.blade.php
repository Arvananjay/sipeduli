{{-- resources/views/tutorial-pengaduan.blade.php --}}
@extends('layouts.apps')

@section('title', 'Tutorial Pengaduan')

@section('content')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

        /* HERO */
        .page-hero {
            padding: 110px 0 80px;
            background: linear-gradient(135deg, #0d6efd, #4f8cff);
            color: #fff;
            text-align: center;
        }

        .page-hero h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .page-hero p {
            font-size: 18px;
            opacity: .95;
            max-width: 700px;
            margin: auto;
        }

        /* CONTENT BOX */
        .section-box {
            background: #fff;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        /* STEP CARD */
        .step-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 25px;
            height: 100%;
            border: 1px solid #eef2f7;
            transition: .3s;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(13, 110, 253, .12);
        }

        .step-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            color: #fff;
            font-size: 28px;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
        }

        .step-card h4 {
            font-size: 20px;
            font-weight: 700;
        }

        .step-card p {
            color: #64748b;
            margin: 0;
        }

        /* LIST */
        .list-box {
            margin-top: 30px;
            padding: 25px;
            border-radius: 18px;
            background: #eef4ff;
        }

        .list-box li {
            margin-bottom: 10px;
        }

        /* BUTTON AREA */
        .bottom-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 35px;
            gap: 15px;
        }

        /* BUTTON */
        .btn-nav {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;
        }

        /* kiri */
        .btn-home {
            background: #eef2f7;
            color: #0f172a;
        }

        /* kanan */
        .btn-next {
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
            color: #fff;
            box-shadow: 0 10px 25px rgba(13, 110, 253, .18);
        }

        .btn-nav:hover {
            transform: translateY(-3px);
            text-decoration: none;
            color: inherit;
        }

        /* MOBILE */
        @media(max-width:768px) {

            .page-hero h1 {
                font-size: 34px;
            }

            .section-box {
                padding: 25px;
            }

            .bottom-action {
                flex-direction: column;
            }

            .btn-nav {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <!-- HERO -->
    <section class="page-hero">
        <div class="container">
            <h1>Tutorial Pengaduan</h1>
            <p>Panduan lengkap cara membuat laporan pengaduan masyarakat di SIPEDULI.</p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="pb-5">
        <div class="container">

            <div class="section-box">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><i class="bx bx-user"></i></div>
                            <h4>1. Login Akun</h4>
                            <p>Masuk menggunakan akun masyarakat yang sudah terdaftar.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><i class="bx bx-edit"></i></div>
                            <h4>2. Isi Form Pengaduan</h4>
                            <p>Tulis judul, isi laporan, lokasi, dan unggah bukti foto.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="step-icon"><i class="bx bx-send"></i></div>
                            <h4>3. Kirim Laporan</h4>
                            <p>Setelah lengkap, klik kirim dan tunggu verifikasi admin.</p>
                        </div>
                    </div>

                </div>

                <div class="list-box">
                    <h4 class="mb-3">Contoh Aduan</h4>
                    <ul>
                        <li>Jalan rusak / berlubang</li>
                        <li>Lampu jalan mati</li>
                        <li>Sampah menumpuk</li>
                        <li>Drainase mampet</li>
                        <li>Fasilitas umum rusak</li>
                    </ul>
                </div>

                <!-- tombol bawah -->
                <div class="bottom-action">

                    <!-- kiri -->
                    <a href="/" class="btn-nav btn-home">
                        <i class="bx bx-arrow-back"></i> Kembali ke Home
                    </a>

                    <!-- kanan -->
                    <a href="/verifikasi" class="btn-nav btn-next">
                        Lanjut ke Verifikasi <i class="bx bx-right-arrow-alt"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>

@endsection