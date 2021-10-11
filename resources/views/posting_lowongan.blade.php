@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posting Lowongan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Title Jobs</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Place And Date</label>
                        <textarea class="form-control" id="place_and_date" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'place_and_date' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Other Requirement</label>
                        <textarea class="form-control" id="other_requirement" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'other_requirement' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Notes</label>
                        <textarea class="form-control" id="notes" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'notes' );
                        </script>
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