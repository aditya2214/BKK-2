@extends('layouts.app-backend')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Otomatis</h1>
    <a href="javascript:location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-refresh fa-sm text-white-50"></i> Refresh</a>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ url ('upload_seleksi') }}" method="GET">
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
                <hr>
                @if($pilih_loker == null)
                <p class="text-danger">Pilih Loker Terlebih Dulu</p>
                @else

                <div class="float-right">
                <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                    IMPORT EXCEL
                </button>
                </div>
                <p><b>Daftar Peserta</b></p>

                <!-- Import Excel -->
                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
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
 
                    <div style="overflow-x:auto;">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>status</th>
                                    <th>kategori_tes</th>
                                    <th>catatan</th>
                                    <th>nama_lengkap</th>
                                    <th>jenis_kelamin</th>
                                    <th>email</th>
                                    <th>nik</th>
                                    <th>kabupaten</th>
                                    <th>alamat</th>
                                    <th>ttl</th>
                                    <th>umur</th>
                                    <th>tinggi_badan</th>
                                    <th>berat_badan</th>
                                    <th>asal_sekolah</th>
                                    <th>tahun_lulus</th>
                                    <th>pengalaman</th>
                                    <th>no_handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($get_attendances as $key=>$get_attendance)
                                <tr>
                                    <td>{{$get_attendance->id}}</td>
                                    <td class="bg-warning">
                                        <ul>
                                            @foreach($get_attendance->Seleksi_r as $kal)
                                                @if($get_attendance->Seleksi_r == null)
                                                <li>
                                                    <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-secondary">&nbsp;Belum Di Sortir</small>
                                                </li>
                                                @elseif($kal->status_tes == "lolos")
                                                <li>
                                                <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-success">&nbsp;{{$kal->status_tes}}</small>
                                                </li>
                                                @else
                                                <li>
                                                <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-danger">&nbsp;{{$kal->status_tes}}</small>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="bg-warning">
                                        <ul>
                                            @foreach($get_attendance->Seleksi_r as $kal)
                                                @if($get_attendance->Seleksi_r == null)
                                                <li>
                                                    <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-secondary">&nbsp;Belum Di Sortir</small>
                                                </li>
                                                @elseif($kal->status_tes == "lolos")
                                                <li>
                                                <small class="badge badge-success">&nbsp;{{$kal->kategori_tes}}</small>
                                                </li>
                                                @else
                                                <li>
                                                <small class="badge badge-danger">&nbsp;{{$kal->kategori_tes}}</small>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="bg-warning">
                                        <ul>
                                            @foreach($get_attendance->Seleksi_r as $kal)
                                                <li>{!!$kal->notes2!!}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{$get_attendance->full_name}}</td>
                                    <td>{{$get_attendance->gender}}</td>
                                    <td>{{$get_attendance->active_email}}</td>
                                    <td>{{$get_attendance->nik}}</td>
                                    <td>{{$get_attendance->kabupaten}}</td>
                                    <td>{!!$get_attendance->address!!}</td>
                                    <td>{{$get_attendance->place}},{{$get_attendance->date_and_place}}</td>
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
                @endif
            </div>
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
        buttons: [{
            extend : 'excelHtml5',
            title : 'DatabExport'
        }
        ]
    } );
} );

// Listen for click on toggle checkbox
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
}); 
</script>
@endsection