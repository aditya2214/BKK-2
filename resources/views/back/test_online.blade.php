@extends('layouts.app-backend')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tes Online</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ url ('select_loker_test') }}" method="GET">
                            @csrf
                            <div class="form-group">
                                <label for="">Pilih Loker</label>
                                <select name="select" class="form-control">
                                        <option class="bg-primary text-white" value="">Pilih</option>
                                        @foreach($vacancy as $vac)
                                            <option value="{{$vac->id}}">{{$vac->title_vacancy}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Select</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br> 
        @if($pilih_loker == null)

        @else
        <div class="form-row">
            @foreach($LinkGform as $lg)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><b>{{$vacancy2->title_vacancy}}</b></p>
                        <small>Link Tes|{{$lg->created_at}}</small><br>
                        <a target="_blank" href="https://{{$lg->link_gfom}}">{{$lg->link_gfom}}</a>
                        <div class="float-right"><a href="{{ url ('delete_link_test/'.$lg->id) }}" onclick="return confirm('Yakin Ambil Langkah Ini?')" class="btn btn-danger btn-sm">Hapus</a href="{{ url ('') }}"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <form action="{{ url ('storeLinkGform/'.$pilih_loker) }}" method="get">
            <div class="form-group">
                <label for="">Tambah Link Tes {{$vacancy2->title_vacancy}}</label>
                <input type="text" name="link" id="link" required class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success form-control">Simpan Link</button>
            </div>
        </form>
        @endif
    </div>
</div>
@endsection


<!-- Content Row -->

<!-- /.container-fluid -->
