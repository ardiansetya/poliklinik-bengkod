@extends('layout.app')

@section('sidebar-menu')
    <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                  <a href={{ route('dokter.dashboard') }} class="nav-link {{ request()->is('dokter/dashboard') ? '' : 'active' }}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
                <a href={{ route('dokter.periksa') }} class="nav-link {{ request()->is('dokter/periksa') ? '' : 'active' }}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Periksa
                  </p>
                </a>
                <a href={{ route('dokter.obat') }} class="nav-link {{ request()->is('dokter/obat') ? '' : 'active' }}">
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
           <!-- Tabel Periksa -->
        <div class="card">
            <div class="card-header bg-primary text-white d-flex  align-items-center">
                <span>Periksa</span>
                <form class="d-flex ms-auto" style="max-width: 200px;">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-sm btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>NO</th>
                            <th>ID Periksa</th>
                            <th>Pasien</th>
                            <th>Tanggal Periksa</th>
                            <th>Catatan</th>
                            <th>Biaya Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Isna</td>
                            <td>2023-01-01</td>
                            <td>Pasien mengalami demam tinggi dan batuk</td>
                            <td>
                                150000
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
          <!--end::Container-->
        </div>
@endsection