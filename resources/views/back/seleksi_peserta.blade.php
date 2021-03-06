@extends('layouts.app-backend')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manual</h1>
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
                        <form action="{{ url ('select_loker') }}" method="GET">
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
                                <button class="btn btn-primary">Pilih</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                @if($pilih_loker == null)
                <p class="text-danger">Pilih Loker Terlebih Dulu</p>
                @else
                <button type="button" class="btn btn-warning mr-5" data-toggle="modal" data-target="#importpeserta">
                    IMPORT DATA PESERTA
                </button>
                <!-- Import peserta -->
                <div class="modal fade" id="importpeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="{{ url ('peserta/import_excel') }}" enctype="multipart/form-data">
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

                <p><b>Daftar Peserta {{$vacancy2->title_vacancy}}</b></p>
                <form action="{{url('seleksi')}}" method="POST">
                    @csrf
                    <div style="overflow-x:auto;">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="select-all" id="select-all" />
                                    </th>
                                    <th>No</th>
                                    <td>Status</td>
                                    <th>Nama_Lengkap</th>
                                    <th>Jenis_Kelamin</th>
                                    <th>Email</th>
                                    <th>NIK</th>
                                    <th>Kabupaten</th>
                                    <th>Alamat</th>
                                    <th>TTL</th>
                                    <th>Umur</th>
                                    <th>Tinggi_Badan</th>
                                    <th>Berat_Badan</th>
                                    <th>Asal_Sekolah</th>
                                    <th>Tahun_lulus</th>
                                    <th>Pengalaman</th>
                                    <th>No_Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($get_attendances as $key=>$get_attendance)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id_peserta[]" value="{{$get_attendance->id}}" id="checked">
                                    </td>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <ul>
                                            @foreach($get_attendance->Seleksi_r as $kal)
                                                @if($get_attendance->Seleksi_r == null)
                                                <li>
                                                    <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-secondary">&nbsp;Belum Di Sortir</small>
                                                </li>
                                                @elseif($kal->status_tes == "lolos")
                                                <li>
                                                <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-success">&nbsp;{{$kal->status_tes}} {{$kal->kategori_tes}}</small>
                                                </li>
                                                @else
                                                <li>
                                                <a href="{{ url ('delete_kategori_test/'.$kal->id) }}" class="text-danger" style="border-radius:15px;"><i class="far fa-times-circle"></i></a><small class="badge badge-danger">&nbsp;{{$kal->status_tes}} {{$kal->kategori_tes}}</small>
                                                </li>
                                                @endif
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
                    <hr>
                    <div class="form-group">
                        <label for="">Tes Apa?</label>
                        <input type="text" required name="tes_apa" id="tes_apa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status Peserta</label>
                        <select name="status_tes" id="" class="form-control">
                            <option value="lolos">Lolos</option>
                            <option value="gagal">Gagal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'catatan' );
                        </script>
                    </div>
                    <div class="form-group">
                        <button class="btn btn btn-primary">Seleksi</button>
                    </div>
                </form>
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
    $('#dataTable').DataTable();
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