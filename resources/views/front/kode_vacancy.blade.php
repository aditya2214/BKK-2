@extends('layouts.app-frontend')

@section('content')
    <div class="container mt-3 mb-4 text-center">
        <h2 class="text-white">BKK-Karawang</h2>
    </div>

    <div class="main-container">
        <div class="container">
            <form action="" method="post">
        
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row">
                            <div class="col pl-0 align-self-center">
                                <input type="password" name="kode_loker" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url ('masukan_kode/'.$cek_kode_vacancy->id) }}" class="btn btn btn-warning">Masuk</a>
                    </div>
                </div>
                        
            </form>
        </div>
    </div>
@endsection