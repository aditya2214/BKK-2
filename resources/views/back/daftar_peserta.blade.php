@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Peserta</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<button type="button" class="btn btn-warning mr-5" data-toggle="modal" data-target="#importpeserta">
    IMPORT DATA PESERTA
</button>
<!-- Import peserta -->
<div class="modal fade" id="importpeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="/peserta/import_excel" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data Peserta</h5>
                </div>
                <div class="modal-body">

                    @csrf
                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="card">
        <div class="card-body" style="overflow-x:auto;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama_lengkap</th>
                        <th>jenis_kelamin</th>
                        <th>email</th>
                        <th>nik</th>
                        <th>kabupaten</th>
                        <th>alamat</th>
                        <th>tempat</th>
                        <th>tgl</th>
                        <th>umur</th>
                        <th>berat_badan</th>
                        <th>tinggi_badan</th>
                        <th>asal_sekolah</th>
                        <th>tahun_lulus</th>
                        <th>pengalaman</th>
                        <th>no_handphone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($get_attendances as $key=>$get_attendance)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$get_attendance->full_name}}</td>
                        <td>{{$get_attendance->gender}}</td>
                        <td>{{$get_attendance->active_email}}</td>
                        <td>{{$get_attendance->nik}}</td>
                        <td>{{$get_attendance->kabupaten}}</td>
                        <td>{!!$get_attendance->address!!}</td>
                        <td>{{$get_attendance->place}}</td>
                        <td>{{$get_attendance->date_and_place}}</td>
                        <td>{{$get_attendance->age}}</td>
                        <td>{{$get_attendance->height}}</td>
                        <td>{{$get_attendance->weight}}</td>
                        <td>{{$get_attendance->school}}</td>
                        <td>{{date('Y m',strtotime($get_attendance->graduation_year))}}</td>
                        <td>{!!$get_attendance->experience!!}</td>
                        <td>{{$get_attendance->no_handphone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection
@section('scripts')
<script>
   $(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ]
    } );
} );
</script>
@endsection