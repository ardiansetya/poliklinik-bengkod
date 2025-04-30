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
                    <h3 class="mb-0">Periksa </h3>
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
            <!-- Form Periksa -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Periksa
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.periksa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Anda</label>
                            <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="exampleInputEmail1"
                                placeholder="Input your name" readonly>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleSelectRounded0">Pilih Dokter</label>
                            <select name="id_dokter" class="appearance-none custom-select ms-2 border border-primary rounded-xl px-4 py-1 bg-white text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-200 ease-in-out hover:shadow-md" id="exampleSelectRounded0">
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--end::Container-->
        </div>
    @endsection
