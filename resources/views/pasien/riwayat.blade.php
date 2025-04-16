@extends('layout.app')

@section('sidebar-menu')
    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href={{ route('pasien.dashboard') }} class="nav-link {{ request()->is('pasien/dashboard') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Dashboard
                </p>
            </a>
            <a href={{ route('pasien.periksa.index') }}
                class="nav-link {{ request()->is('pasien/periksa') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Periksa
                </p>
            </a>
            <a href={{ route('pasien.riwayat.index') }}
                class="nav-link {{ request()->is('pasien/riwayat') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Riwayat
                </p>
            </a>
        </li>
    </ul>
@endsection


@section('content-header')
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Riwayat </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Obat</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')
    <div class="app-content">
        <div class="container-fluid">



            <!-- Tabel Riwayat -->
            <div class="card">
                <div class="card-header bg-primary text-white d-flex  align-items-center">
                    <span>Riwayat Periksa</span>
                    <form class="d-flex ms-auto" style="max-width: 200px;">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-sm btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>NO</th>
                                <th>ID Periksa</th>
                                <th>Dokter</th>
                                <th>Tanggal Periksa</th>
                                <th>Catatan</th>
                                <th>Obat</th>
                                <th>Biaya Periksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $periksa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $periksa->id }}</td>
                                    <td>{{ $periksa->dokter->name }}</td>
                                    <td>{{ $periksa->tgl_periksa }}</td>
                                    <td>{{ $periksa->catatan }}</td>
                                    <td>
                                        @foreach ($periksa->detailPeriksa as $detail)
                                            <div>{{ $detail->obat->nama_obat }}</div>
                                        @endforeach
                                    </td>
                                    <td>{{ $periksa->biaya_periksa }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
