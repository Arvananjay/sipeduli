{{-- resources/views/tindaklanjut.blade.php --}}
@extends('layouts.apps')

@section('title', 'Tindak Lanjut')

@section('content')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

        /* HERO */
        .page-hero {
            padding: 110px 0 80px;
            text-align: center;
            color: #fff;
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
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

        /* BOX */
        .main-box {
            background: #fff;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .step-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 28px;
            height: 100%;
            border: 1px solid #eef2f7;
            transition: .3s;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(79, 70, 229, .14);
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
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
        }

        .step-card h4 {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .step-card p {
            color: #64748b;
            margin: 0;
            line-height: 1.7;
        }

        .note-box {
            margin-top: 35px;
            padding: 28px;
            border-radius: 20px;
            background: #f3f0ff;
        }

        .note-box h4 {
            font-weight: 700;
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
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
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
            <h1>Tindak Lanjut</h1>
            <p>
                Laporan yang telah diverifikasi akan diteruskan kepada dinas
                atau petugas terkait untuk segera ditangani.
            </p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="main-box">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="icon-box">
                                <i class="bx bx-transfer"></i>
                            </div>
                            <h4>Diteruskan</h4>
                            <p>
                                Laporan dikirim ke instansi sesuai jenis
                                permasalahan yang dilaporkan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="icon-box">
                                <i class="bx bx-wrench"></i>
                            </div>
                            <h4>Penanganan</h4>
                            <p>
                                Petugas melakukan survei lapangan,
                                perbaikan, atau tindakan sesuai kebutuhan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="step-card">
                            <div class="icon-box">
                                <i class="bx bx-message-detail"></i>
                            </div>
                            <h4>Update Status</h4>
                            <p>
                                Perkembangan penanganan akan diperbarui
                                pada sistem secara berkala.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="note-box">
                    <h4 class="mb-3">Contoh Tindak Lanjut</h4>
                    <ul class="mb-0">
                        <li>Perbaikan jalan rusak</li>
                        <li>Pengangkutan sampah menumpuk</li>
                        <li>Perbaikan lampu jalan mati</li>
                        <li>Pembersihan saluran air tersumbat</li>
                    </ul>
                </div>

                {{-- TOMBOL BAWAH --}}
                <div class="row nav-btn align-items-center text-center">

                    <div class="col-md-4 text-left">
                        <a href="{{ url('/verifikasi') }}" class="btn-nav btn-prev">
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
                        <a href="{{ url('/selesai') }}" class="btn-nav btn-next">
                            Lanjut
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection