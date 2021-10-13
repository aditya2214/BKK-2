@extends('layouts.app-frontend')

@section('content')
    <div class="container mt-3 mb-4 text-center">
        <h2 class="text-white">BKK-Karawang</h2>
    </div>

    <div class="main-container">
        <div class="container">
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="mb-0">Form Absensi</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" class="form-control is-valid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jenis Kelamin</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email (Aktif)</label>
                            <input type="email" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIK KTP</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kabupaten</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tempat Lahir</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Lahir</label>
                            <input type="date" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Usia</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Berat Badan</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tinggi Badan</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Asal Sekolah</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jurusan</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pengalaman Kerja</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Hp</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="">
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