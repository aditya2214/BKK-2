@extends('layouts.app-backend')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tes Online</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
        <form action="{{ url ('storeLinkGform/'.$pilih_loker) }}" method="get">
            <div class="form-group">
                <label for="">Masukan Link G-Form</label>
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
