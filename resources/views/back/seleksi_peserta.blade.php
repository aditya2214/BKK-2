@extends('layouts.app-backend')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Seleksi Peserta</h1>
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
                        <form action="select_loker" method="POST">
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
                <p><b>Daftar Peserta</b></p>
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="" id="">
                            </th>
                            <th>No</th>
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
                                <input type="checkbox" name="checked" value="{{$get_attendance->id}}" id="checked">
                            </td>
                            <td>{{$key+1}}</td>
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
                            <td>{{$get_attendance->graduation_year}}</td>
                            <td>{!!$get_attendance->experience!!}</td>
                            <td>{{$get_attendance->no_handphone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
@endsection