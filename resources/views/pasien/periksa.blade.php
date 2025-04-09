@extends('layout.app')


@section('sidebar-menu')
    <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href={{ route('pasien.dashboard') }} class="nav-link {{ request()->is('pasien/dashboard') ? '' : 'active' }}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
                <a href={{ route('pasien.periksa') }} class="nav-link {{ request()->is('pasien/periksa') ? '' : 'active' }}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Periksa
                  </p>
                </a>
                <a href={{ route('pasien.riwayat') }} class="nav-link {{ request()->is('pasien/riwayat') ? '' : 'active' }}">
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
              <div class="col-sm-6"><h3 class="mb-0">Periksa </h3></div>
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
                <form >
                    <div class="mb-3">
                        <label for="nama_obat" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Input your name">
                    </div>
                    <div class="mb-3">
                        <label for="kemasan" class="form-label">Dokter</label>
                        <input type="" class="form-control" id="kemasan" name="kemasan">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
          <!--end::Container-->
        </div>
@endsection