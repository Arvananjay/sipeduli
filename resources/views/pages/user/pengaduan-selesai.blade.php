{{-- resources/views/pages/user/pengaduan-selesai.blade.php --}}
@extends('layouts.apps')

@section('title', 'Pengaduan Selesai')

@section('content')

    <style>
        body {
            background: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }

        /* HEADER */
        .page-header {
            padding: 110px 0 70px;
            background: linear-gradient(135deg, #0d6efd, #52a9d8);
            color: #fff;
            text-align: center;
        }

        .page-header h1 {
            font-size: 46px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 18px;
            opacity: .95;
            margin: 0;
        }

        /* BOX */
        .main-box {
            background: #fff;
            margin-top: -35px;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
        }

        /* ACTION */
        .top-action {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .search-box {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .search-box input {
            min-width: 260px;
            border-radius: 12px;
            padding: 11px 14px;
            border: 1px solid #dbe3ee;
        }

        /* TABLE */
        .table-wrap {
            overflow-x: auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .custom-table thead th {
            font-size: 14px;
            color: #64748b;
            font-weight: 700;
            border: none;
            padding: 0 14px 10px;
        }

        .custom-table tbody tr {
            background: #f8fafc;
            transition: .3s;
        }

        .custom-table tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, .06);
        }

        .custom-table tbody td {
            padding: 16px 14px;
            vertical-align: middle;
            border: none;
        }

        .custom-table tbody tr td:first-child {
            border-radius: 14px 0 0 14px;
        }

        .custom-table tbody tr td:last-child {
            border-radius: 0 14px 14px 0;
        }

        /* BADGE */
        .badge-status {
            padding: 8px 14px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            background: #dbeafe;
            color: #1e40af;
        }

        /* FOTO */
        .foto-thumb {
            width: 70px;
            height: 55px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        /* EMPTY */
        .empty-box {
            text-align: center;
            padding: 60px 20px;
            color: #64748b;
        }

        /* PAGINATION */
        .pagination-box {
            margin-top: 25px;
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .page-header h1 {
                font-size: 34px;
            }

            .main-box {
                padding: 20px;
            }

            .search-box input {
                min-width: 100%;
            }

            .top-action {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>

    <section class="page-header">
        <div class="container">
            <h1>Pengaduan Selesai</h1>
            <p>Daftar laporan masyarakat yang telah selesai ditangani</p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="main-box">

                <div class="top-action">

                    <a href="/" class="btn btn-primary px-4 py-2 rounded-pill">
                        ← Kembali ke Home
                    </a>

                    <form action="" method="GET" class="search-box">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari judul laporan...">

                        <button class="btn btn-primary rounded-pill px-4">
                            Search
                        </button>
                    </form>

                </div>

                <div class="table-wrap">

                    <table class="custom-table">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul Laporan</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="foto-thumb"
                                            onerror="this.src='https://via.placeholder.com/70x55';">
                                    </td>

                                    <td>
                                        <strong>{{ $item->judul_laporan }}</strong>
                                        <br>
                                        <small class="text-muted">
                                            {{ Str::limit($item->isi_laporan, 55) }}
                                        </small>
                                    </td>

                                    <td>{{ $item->lokasi_kejadian }}</td>

                                    <td>
                                        {{ \Carbon\Carbon::parse($item->tgl_pengaduan)->format('d M Y') }}
                                    </td>

                                    <td>
                                        <span class="badge-status">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="empty-box">
                                            Belum ada laporan selesai.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="pagination-box">
                    {{ $data->links() }}
                </div>

            </div>
        </div>
    </section>

@endsection