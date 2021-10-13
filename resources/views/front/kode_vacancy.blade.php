@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <div class="container">
            <form action="{{ url ('absen/'.$cek_kode_vacancy->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col pl-0 align-self-center"  style="text-align:center;" >
                        <labelfor=""><b>Kode Loker</b></label>
                        <input type="password" placeholder="Masukan Kode Loker" name="kode_loker" class="form-control">
                    </div>
                </div>
                <br>
                <button class="btn btn btn-warning">Masuk</button>
            </form>
        </div>
    </div>
@endsection