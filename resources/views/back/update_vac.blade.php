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
                <form action="{{ url ('update_jobs/'.$update_vac->id ) }}" method="POST" >
                @csrf
                    <div class="form-group">
                        <label for="">Kode Lowongan</label>
                        <input type="text" name="job_kode" value="{{$update_vac->kode_vacancy}}" id="job_kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Judul Lowongan</label>
                        <input type="text" name="title_job" value="{{$update_vac->title_vacancy}}" id="title_job" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tempat Dan Tanggal</label>
                        <textarea class="form-control" name="place_and_date" id="place_and_date" rows="3">{{$update_vac->place_and_date}}</textarea>
                        <script>
                            CKEDITOR.replace( 'place_and_date' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Persyaratan</label>
                        <textarea class="form-control"name="other_requirement"  id="other_requirement" rows="3">{{$update_vac->recruitment}}</textarea>
                        <script>
                            CKEDITOR.replace( 'other_requirement' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Catatan</label>
                        <textarea class="form-control" name="notes" id="notes" rows="3">{{$update_vac->notes}}</textarea>
                        <script>
                            CKEDITOR.replace( 'notes' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="">Switch</label><br>
                        <input type="radio" name="switch" value="1" id=""> Published <br>
                        <input type="radio" name="switch" value="0" id=""> Unpublished
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Update & Posting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection