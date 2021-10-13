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
                            <label for="exampleFormControlInput2">Jenis Kelamin</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Email (Aktif)</label>
                            <input type="email" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">NIK KTP</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Kabupaten</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Tempat Lahir</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Tanggal Lahir</label>
                            <input type="date" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Usia</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Berat Badan</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Tinggi Badan</label>
                            <input type="number" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Asal Sekolah</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Jurusan</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pengalaman Kerja</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">No Hp</label>
                            <input type="text" class="form-control is-invalid" id="exampleFormControlInput2" placeholder="">
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