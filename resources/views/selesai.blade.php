{{-- resources/views/selesai.blade.php --}}
@extends('layouts.apps')

@section('title', 'Selesai')

@section('content')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

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

        .main-box {
            background: #fff;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .done-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            height: 100%;
            border: 1px solid #eef2f7;
            transition: .3s;
        }

        .done-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(34, 197, 94, .14);
        }

        .icon-box {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            color: #fff;
            font-size: 34px;
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
        }

        .done-card h4 {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .done-card p {
            margin: 0;
            color: #64748b;
            line-height: 1.7;
        }

        .success-box {
            margin-top: 35px;
            padding: 28px;
            border-radius: 20px;
            background: #ecfdf5;
            text-align: center;
        }

        /* BUTTON */
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

        .btn-report {
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
            <h1>Laporan Selesai</h1>
            <p>
                Pengaduan telah ditangani dan status laporan
                dinyatakan selesai oleh petugas.
            </p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="main-box">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="done-card">
                            <div class="icon-box">
                                <i class="bx bx-check-circle"></i>
                            </div>
                            <h4>Masalah Ditangani</h4>
                            <p>
                                Permasalahan yang dilaporkan sudah
                                diperbaiki atau ditindak sesuai kebutuhan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="done-card">
                            <div class="icon-box">
                                <i class="bx bx-camera"></i>
                            </div>
                            <h4>Bukti Selesai</h4>
                            <p>
                                Petugas dapat menambahkan dokumentasi
                                hasil pekerjaan ke sistem.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="done-card">
                            <div class="icon-box">
                                <i class="bx bx-smile"></i>
                            </div>
                            <h4>Layanan Tuntas</h4>
                            <p>
                                Masyarakat dapat melihat bahwa laporan
                                sudah selesai diproses.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="success-box">
                    <h4 class="mb-2">Terima Kasih</h4>
                    <p class="mb-0">
                        Partisipasi masyarakat membantu menciptakan
                        lingkungan Kabupaten Brebes yang lebih baik.
                    </p>
                </div>

                {{-- TOMBOL BAWAH --}}
                <div class="row nav-btn align-items-center text-center">

                    <div class="col-md-4 text-left">
                        <a href="{{ url('/tindaklanjut') }}" class="btn-nav btn-prev">
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
                        <a href="{{ route('pengaduan') }}" class="btn-nav btn-report">
                            <i class="bx bx-edit"></i>
                            Buat Laporan
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection