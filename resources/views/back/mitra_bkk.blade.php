@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mitra BKK</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Mitra
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url ('store_mitra') }}" method="POST" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="">Nama Perusahaan</label>
                <input class=" form-control " type="text" name="nama_perusahaan" id="nama_perusahaan">
            </div>
            <div class="form-group">
                <label for="">Img</label>
                <input class=" form-control " type="File" name="images" id="images">
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control ">Post</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
    @foreach($mitra_bkk as $key=>$mitra)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <p><b>{{$mitra->nama_perusahaan}}</b></p>
            </div>
            <div class="card-body">
                <img src="/storage/{{$mitra->images}}" alt="">
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection