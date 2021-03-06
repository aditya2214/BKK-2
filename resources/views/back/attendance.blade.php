@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Absensi</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    @foreach ($vacancy as $key=>$vac)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            {{$vac->title_vacancy}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        <p><b>{{$vac->kode_vacancy}}</b></p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i><br>
                        @if($vac->switch == 1)
                        <a href="{{ url ('switch_01/'.$vac->id) }}"><span class="badge badge-success">Published</span></a>
                        <a href="{{ url ('switch_02/'.$vac->id) }}"><span class="badge badge-secondary">Unpublished</span></a>
                        @else
                        <a href="{{ url ('switch_01/'.$vac->id) }}"> <span class="badge badge-secondary">Published</span></a>
                        <a href="{{ url ('switch_02/'.$vac->id) }}"><span class="badge badge-danger">Unpublished</span></a>
                        @endif
                    </div>
                </div>
                <div class="btn-group">
                    <a href="{{ url ('daftar_peserta/'.$vac->id) }}" class="btn btn-outline-primary btn-sm">Daftar Peserta</a>
                    <a href="{{ url ('hapus_vac/'.$vac->id) }}" onclick="return confirm('Yakin Ambil Langkah Ini?')" class="btn btn-outline-danger">Hapus</a>
                    <a href="{{ url ('update_vac/'.$vac->id) }}" onclick="return confirm('Yakin Ambil Langkah Ini?')" class="btn btn-outline-warning btn-sm">Update</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection