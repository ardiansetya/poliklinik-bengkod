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
             <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    {{-- FORM --}}
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Periksa Edit</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_pasien">Pasien</label>
                                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien"
                                            value="{{ $periksa->pasien->name }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="tgl_periksa">Tanggal Periksa</label>
                                        <input type="date" class="form-control" name="tgl_periksa"
                                            value="{{ $periksa->tgl_periksa }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="catatan">Catatan</label>
                                        <textarea class="form-control" name="catatan" rows="3">{{ $periksa->catatan }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="obat">Obat</label>
                                        <select name="obat[]" class="form-control" multiple>
                                            @foreach ($obats as $obat)
                                                <option value="{{ $obat->id }}"
                                                    @if ($periksa->detailPeriksa->pluck('id_obat')->contains($obat->id)) selected @endif>
                                                    {{ $obat->nama_obat }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <small>* Tekan Ctrl (Windows) / Cmd (Mac) untuk pilih lebih dari satu</small>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Pemeriksaan</button>
                                </div>
                            </form>


                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
            <!--end::Container-->
        </div>
    @endsection
