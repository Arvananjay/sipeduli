{{-- resources/views/verifikasi.blade.php --}}
@extends('layouts.apps')

@section('title', 'Verifikasi')

@section('content')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

        /* HERO */
        .page-hero {
            padding: 110px 0 80px;
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
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
            max-width: 720px;
            margin: auto;
            opacity: .95;
        }

        /* CONTENT BOX */
        .main-box {
            background: #fff;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .info-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 28px;
            height: 100%;
            border: 1px solid #eef2f7;
            transition: .3s;
        }

        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, .12);
        }

        .icon-box {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 30px;
            margin-bottom: 18px;
            background: linear-gradient(135deg, #0d6efd, #2563eb);
        }

        .info-card h4 {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #0f172a;
        }

        .info-card p {
            margin: 0;
            color: #64748b;
            line-height: 1.7;
        }

        .timeline {
            margin-top: 35px;
            padding: 28px;
            border-radius: 20px;
            background: #eef4ff;
        }

        .timeline h4 {
            font-weight: 700;
            margin-bottom: 18px;
        }

        .timeline ul {
            padding-left: 18px;
            margin: 0;
        }

        .timeline li {
            margin-bottom: 12px;
            color: #475569;
        }

        /* BUTTON NAV */
        .nav-btn {
            margin-top: 35px;
        }

        .btn-nav {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 22px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-prev {
            background: #e2e8f0;
            color: #0f172a;
        }

        .btn-home {
            background: #0f172a;
            color: #fff;
        }

        .btn-next {
            background: linear-gradient(135deg, #0d6efd, #2563eb);
            color: #fff;
        }

        .btn-nav:hover {
            transform: translateY(-3px);
            color: #fff;
            text-decoration: none;
        }

        .btn-prev:hover {
            color: #0f172a;
        }

        @media(max-width:768px) {
            .page-hero h1 {
                font-size: 34px;
            }

            .nav-btn .col-md-4 {
                margin-bottom: 12px;
                text-align: center !important;
            }
        }
    </style>

    <section class="page-hero">
        <div class="container">
            <h1>Proses Verifikasi</h1>
            <p>
                Setiap laporan masyarakat akan diperiksa terlebih dahulu oleh petugas
                agar data valid, jelas, dan dapat segera ditindaklanjuti.
            </p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="main-box">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bx bx-file"></i>
                            </div>
                            <h4>Cek Kelengkapan</h4>
                            <p>
                                Petugas memeriksa isi laporan, lokasi kejadian, kategori,
                                dan bukti foto yang diunggah.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bx bx-search-alt"></i>
                            </div>
                            <h4>Validasi Data</h4>
                            <p>
                                Laporan dicek agar tidak duplikat, tidak palsu,
                                dan sesuai dengan kondisi lapangan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bx bx-check-shield"></i>
                            </div>
                            <h4>Disetujui Sistem</h4>
                            <p>
                                Jika memenuhi syarat, laporan akan diteruskan
                                ke instansi terkait untuk diproses.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="timeline">
                    <h4>Status Verifikasi</h4>
                    <ul>
                        <li><strong>Menunggu:</strong> laporan baru masuk dan antre dicek.</li>
                        <li><strong>Diverifikasi:</strong> laporan valid dan siap diproses.</li>
                        <li><strong>Ditolak:</strong> data kurang lengkap atau tidak sesuai.</li>
                    </ul>
                </div>

                {{-- TOMBOL BAWAH --}}
                <div class="row nav-btn align-items-center text-center">

                    <div class="col-md-4 text-left">
                        <a href="{{ url('/tutorial-pengaduan') }}" class="btn-nav btn-prev">
                            <i class="bx bx-left-arrow-alt"></i>
                            Sebelumnya
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="{{ url('/') }}" class="btn-nav btn-home">
                            <i class="bx bx-home"></i>
                            Home
                        </a>
                    </div>

                    <div class="col-md-4 text-right">
                        <a href="{{ url('/tindaklanjut') }}" class="btn-nav btn-next">
                            Lanjut
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection