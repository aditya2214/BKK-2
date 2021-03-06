@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>

<!-- Content Row -->
<div class="row">


<a href="{{ url ('pengguna') }}" class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pengguna</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">( {{$count_pengguna}} )</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ url ('posting_lowongan') }}" class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Posting Lowongan</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-plus fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    
    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ url ('attendance') }}" class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Daftar Lowongan</div>
                            <span class="badges badges-success">( {{$count_lowongan}} )</span>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-database fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ url ('import_seleksi') }}" class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Seleksi Peserta
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <!-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                            </div>
                            <div class="col">
                                <!-- <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-people-arrows fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Pending Requests Card Example -->
    <a href="{{ url ('mitra_bkk') }}" class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Mitra BKK</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">18</div> -->
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-handshake fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


</div>
<!-- /.container-fluid -->
@endsection