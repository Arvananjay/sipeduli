@extends('layouts.apps')

@section('title', $judul)

@section('content')

    <style>
        body {
            background: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }

        .page-header {
            padding: 110px 0 65px;
            text-align: center;
            color: #fff;
            background: linear-gradient(135deg, #0d6efd, #52a9d8);
        }

        .page-header h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 17px;
            opacity: .95;
        }

        .main-box {
            background: #fff;
            margin-top: -30px;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
        }

        .search-box {
            background: #f8fafc;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .table thead th {
            background: #0d6efd;
            color: #fff;
            border: none;
            vertical-align: middle;
        }

        .table td {
            vertical-align: middle;
        }

        .badge-status {
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
        }

        .bg-proses {
            background: #fff3cd;
            color: #856404;
        }

        .bg-selesai {
            background: #d1fae5;
            color: #065f46;
        }

        .bg-menunggu {
            background: #e2e8f0;
            color: #334155;
        }

        .img-bukti {
            width: 75px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #eee;
        }

        .btn-detail {
            border-radius: 30px;
            padding: 8px 14px;
        }

        .empty-box {
            text-align: center;
            padding: 45px 20px;
            color: #64748b;
        }

        .pagination {
            justify-content: center;
        }

        @media(max-width:768px) {
            .page-header h1 {
                font-size: 32px;
            }

            .main-box {
                padding: 18px;
            }

            .table-responsive {
                font-size: 14px;
            }
        }
    </style>

    <section class="page-header">
        <div class="container">
            <h1>{{ $judul }}</h1>
            <p>Data laporan masyarakat secara terbuka dan transparan</p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">

            <div class="main-box">

                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                    <a href="/" class="btn btn-primary rounded-pill px-4">
                        ← Kembali ke Home
                    </a>

                    <span class="text-muted">
                        Total Data: <strong>{{ $data->total() }}</strong>
                    </span>
                </div>

                <!-- SEARCH -->
                <div class="search-box">
                    <form method="GET">
                        <div class="row g-2">
                            <div class="col-md-10">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari judul, isi laporan, lokasi..." value="{{ request('search') }}">
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-primary w-100">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th width="60">No</th>
                                <th>Judul Laporan</th>
                                <th>Lokasi</th>
                                <th width="120">Foto</th>
                                <th width="130">Tanggal</th>
                                <th width="140">Status</th>
                                <th width="100">Detail</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($data as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <strong>{{ $item->judul_laporan }}</strong>
                                        <br>
                                        <small class="text-muted">
                                            {{ Str::limit($item->isi_laporan, 55) }}
                                        </small>
                                    </td>

                                    <td>{{ $item->lokasi_kejadian }}</td>

                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-bukti">
                                    </td>

                                    <td>
                                        {{ date('d-m-Y', strtotime($item->tgl_pengaduan)) }}
                                    </td>

                                    <td>
                                        @if($item->status == 'proses')
                                            <span class="badge-status bg-proses">Diproses</span>
                                        @elseif($item->status == 'selesai')
                                            <span class="badge-status bg-selesai">Selesai</span>
                                        @else
                                            <span class="badge-status bg-menunggu">Menunggu</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary btn-detail" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $item->id_pengaduan }}">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>

                                <!-- MODAL DETAIL -->
                                <div class="modal fade" id="detail{{ $item->id_pengaduan }}" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Detail Laporan
                                                </h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">

                                                <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid rounded mb-3">

                                                <h5>{{ $item->judul_laporan }}</h5>

                                                <p>{{ $item->isi_laporan }}</p>

                                                <hr>

                                                <p><strong>Lokasi:</strong> {{ $item->lokasi_kejadian }}</p>
                                                <p><strong>Tanggal:</strong>
                                                    {{ date('d-m-Y', strtotime($item->tgl_pengaduan)) }}</p>
                                                <p><strong>Status:</strong> {{ $item->status }}</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @empty

                                <tr>
                                    <td colspan="7">
                                        <div class="empty-box">
                                            Tidak ada data laporan ditemukan.
                                        </div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="mt-4">
                    {{ $data->withQueryString()->links() }}
                </div>

            </div>
        </div>
    </section>

@endsection