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
              <div class="col-sm-6"><h3 class="mb-0">Obat </h3></div>
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
    
        <!-- Form Tambah Obat -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Input Obat
            </div>
            <div class="card-body">
                <form >
                    <div class="mb-3">
                        <label for="nama_obat" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Input obat's name">
                    </div>
                    <div class="mb-3">
                        <label for="kemasan" class="form-label">Kemasan</label>
                        <input type="text" class="form-control" id="kemasan" name="kemasan" placeholder="Input kemasan's name">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Input the price">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Obat</button>
                </form>
            </div>
        </div>

        <!-- Tabel Obat -->
        <div class="card">
            <div class="card-header bg-primary text-white d-flex  align-items-center">
                <span>List Obat</span>
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
                            <th>ID Obat</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>B001</td>
                            <td>Paracetamol</td>
                            <td>Dus</td>
                            <td>20000</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>B002</td>
                            <td>Obat Tidur</td>
                            <td>Pil</td>
                            <td>10000</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>B003</td>
                            <td>Actived</td>
                            <td>Sirup</td>
                            <td>50000</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
