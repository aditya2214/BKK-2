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
                <form action="{{url('seleksi')}}" method="POST">
                    @csrf
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>
                                    *
                                </th>
                                <td>Status</td>
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
                        <style>
                        // COMPASS
                        @import "compass";
                        // FONT
                        @import url("https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700");

                        // CONFIG
                        $SPACER_XS: 0.5rem;
                        $SPACER_SM: 0.75rem;
                        $SPACER: 1rem;
                        $SPACER_MD: 1.5rem;
                        $SPACER_LG: 2rem;
                        $BORDER_RADIUS: 3px;
                        $PROGRESS_HEIGHT: 600px;
                        $PROGRESS_LIST_HEIGHT: 75px;
                        $PROGRESS_COUNTER_WIDTH: 26px;
                        $LIST_ITEM_WIDTH: 100px;
                        $PROGRESS_BG: #392A60;
                        $BODY_BG: #2E1F47;
                        $ICON_COLOR: #F3597D;

                        // BASE
                        html {
                        font-size: 13px;
                        font-family: "Roboto Slab", serif;
                        font-weight: 400;
                        line-height: 13px;
                        -webkit-font-smoothing: auto;
                        text-rendering: optimizeLegibility;
                        color: #fff;
                        overflow: hidden;
                        }

                        body {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background:$BODY_BG;
                        letter-spacing: 0.6px;

                        }

                        p {
                        font-size: 13px;
                        margin: 0 0 11px;
                        }

                        a {
                        color: #fff;
                        text-decoration: none;
                        }

                        header {
                        text-align: center;
                        margin-bottom: $SPACER_LG*2;
                        h1 {
                            font-size: 1.8rem;
                            line-height: 2.1rem;
                        }
                        p {
                            margin-top: $SPACER;
                        }
                        .icon {
                            color: $ICON_COLOR; 
                        }
                        }

                        // THE GOOD STUFF
                        .progressContainer {
                        position: relative;
                        width: 300px;
                        height: 100vh;
                        margin: 0 auto;
                        overflow: hidden;
                        padding: $SPACER_LG;
                        color: #fff;
                        background: $PROGRESS_BG;
                        @include box-shadow(0 0 15px rgba(0, 0, 0, 0.3));
                        }

                        .progress {
                        position: relative;
                        padding: 0 $SPACER 0 3.5rem;
                        margin: $SPACER_LG 0 0;
                        list-style: none;
                        }

                        .progress__item {
                        position: relative;
                        min-height: $PROGRESS_LIST_HEIGHT;
                        counter-increment: list;
                        padding-left: $SPACER_XS;
                        &:before {
                            content: "";
                            position: absolute;
                            left: -1.5rem;
                            top: 33px;
                            height: 60%;
                            width: 1px;
                            border-left: 1px solid #fff;
                        }
                        &:after {
                            content: counter(list);
                            position: absolute;
                            top: 0;
                            left: -2.5rem;
                            width: $PROGRESS_COUNTER_WIDTH;
                            height: $PROGRESS_COUNTER_WIDTH;
                            border-radius: 50%;
                            background: transparent;
                            color: #fff;
                            font-weight: 400;
                            font-size: 13px;
                            line-height: 2rem;
                            text-align: center;
                            border: 1px solid #fff;
                        }
                        //Hide border for Last Step
                        &:last-child {
                            &:before {
                            border: none;
                            }
                        }
                        //Completed
                        &.progress__item--completed {
                            opacity: 0.6;
                            color: #fff;
                            &:after {
                            content: "\2713";
                            font-weight: 400;
                            background: #fff;
                            color: $PROGRESS_BG;
                            }
                        }
                        //Active
                        &.progress__item--active {
                            &:after {
                            background: #fff;
                            color: $PROGRESS_BG;
                            }
                        }
                        }

                        .progress__title {
                        padding: 0.4rem 0 $SPACER_XS;
                        margin: 0;
                        font-size: 1.5rem;
                        }

                        .progress__info {
                        font-size: 13px;
                        }

                        </style>
                        <tbody>
                            @foreach($get_attendances as $key=>$get_attendance)
                            <tr>
                                <td>
                                    <input type="checkbox" name="id_peserta[]" value="{{$get_attendance->id}}" id="checked">
                                </td>
                                <td>
                                    <div class="progressContainer">

                                    <ul class="progress">
                                    @foreach($get_attendance->Seleksi_r as $kal)
                                        @if($kal == null)
                                        <li class="progress__item progress__item--completed">
                                            <p class="progress__title">Belum Di Sortir </p>
                                        </li>
                                        @elseif($kal->status_tes == "lolos")
                                        
                                                <li class="progress__item progress__item--completed">
                                                <p class="progress__title">{{$kal->status_tes}} </p>
                                                <p class="progress__info">{{$kal->kategori_tes}}</p>
                                                </li>
                                        @else
                                        <li class="progress__item progress__item--completed">
                                        <p class="progress__title">{{$kal->status_tes}} </p>
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>

                                    </div>
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
                    <hr>
                    <div class="form-group">
                        <label for="">Tes Apa?</label>
                        <input type="text" name="tes_apa" id="tes_apa" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="status_tes" id="" class="form-control">
                            <option value="lolos">Lolos</option>
                            <option value="gagal">Gagal</option>
                        </select>
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