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
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
                <h1>pasien</h1>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
@endsection