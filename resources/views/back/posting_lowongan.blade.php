@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posting Lowongan</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url ('store_jobs') }}" method="POST" >
                @csrf
                    <div class="form-group">
                        <label for="">Kode Lowongan</label>
                        <input required type="text" name="job_kode" id="job_kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input required type="text" name="title_job" id="title_job" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tempat Dan Tanggal</label>
                        <textarea class="form-control" name="place_and_date" id="place_and_date" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'place_and_date' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Persyaratan</label>
                        <textarea class="form-control"name="other_requirement"  id="other_requirement" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'other_requirement' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Catatan</label>
                        <textarea class="form-control" name="notes"  id="notes" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'notes' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="">Switch</label><br>
                        <input required type="radio" name="switch" value="1" id=""> Published <br>
                        <input required type="radio" name="switch" value="0" id=""> Unpublished
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Posting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection