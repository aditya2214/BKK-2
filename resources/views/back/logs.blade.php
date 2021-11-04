@extends('layouts.app-backend')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Logs</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-sync-alt fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    <div class="card">
        <div class="card-body" style="overflow-x:auto;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $key=>$log)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$log->id_user}}</td>
                        <td>{{$log->aksi}}</td>
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