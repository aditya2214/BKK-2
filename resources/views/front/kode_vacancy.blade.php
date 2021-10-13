@extends('layouts.app-frontend')

@section('content')
    <div class="container mt-3 mb-4 text-center">
        <h2 class="text-white">BKK-Karawang</h2>
    </div>

    <div class="main-container">
        <div class="container">
            <form action="{{ url ('absen/'.$cek_kode_vacancy->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row">
                            <div class="col pl-0 align-self-center">
                                <label class="text-center" for=""><b>Kode Loker</b></label>
                                <input type="password" placeholder="Masukan Kode Loker" name="kode_loker" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn btn-warning">Masuk</button>
                    </div>
                </div>
                        
            </form>
        </div>
    </div>
@endsection