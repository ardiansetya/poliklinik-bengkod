@extends('layout.app')

@section('sidebar-menu')
    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href={{ route('dokter.dashboard') }} class="nav-link {{ request()->is('dokter/dashboard') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Dashboard
                </p>
            </a>
            <a href={{ route('dokter.periksa.index') }}
                class="nav-link {{ request()->is('dokter/periksa') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Periksa
                </p>
            </a>
            <a href={{ route('dokter.obat.index') }} class="nav-link {{ request()->is('dokter/obat') ? '' : 'active' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Obat
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
                    <h3 class="mb-0">Periksa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Periksa</li>
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
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Tabel Periksa -->
            <div class="card">
                <div class="card-header bg-primary text-white d-flex  align-items-center">
                    <span>Periksa</span>
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
                            <tr>
                                <th>NO</th>
                                <th>Pasien</th>
                                <th>Aksi</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $periksa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $periksa->pasien->name }}</td>
                                  
                                    <td>
                                        <a href="{{ route('dokter.periksa.show', $periksa->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>
                                        <a href="{{ route('dokter.periksa.edit', $periksa->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('dokter.periksa.destroy', $periksa->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Container-->
        </div>
    @endsection
