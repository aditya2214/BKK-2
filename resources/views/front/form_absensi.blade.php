@extends('layouts.app-frontend')

@section('content')
   

    <div class="main-container">
        <div class="container">
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="mb-0">Form Absensi | {{$cek_kode_vacancy->title_vacancy}}</h6>
                </div>
                <div class="card-body">
                    <form action="{{url ('storeAbsensi/'.$cek_kode_vacancy->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input required type="text" name="full_name" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jenis Kelamin</label>
                            <input required type="text" name="gender" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email (Aktif)</label>
                            <input required type="email" name="active_email" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIK KTP</label>
                            <input required type="number" name="nik" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kabupaten</label>
                            <input required type="text" name="kabupaten" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea  required class="form-control" name="address" id="address" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace( 'address' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tempat Lahir</label>
                            <input required type="text" name="place" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Lahir</label>
                            <input required type="date" name="date_and_place" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Usia</label>
                            <input required type="number" name="age" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Berat Badan</label>
                            <input required type="number" name="height" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tinggi Badan</label>
                            <input required type="number" name="weight" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Asal Sekolah</label>
                            <input required type="text" name="school" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tahun Lulus</label>
                            <input required type="date" name="graduation_year" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pengalaman Kerja</label>
                            <textarea required class="form-control" name="experience" id="experience" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace( 'experience' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Hp</label>
                            <input required type="text" name="no_handphone" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Absen Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection