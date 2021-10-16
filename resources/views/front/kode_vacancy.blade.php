@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ url ('absen/'.$cek_kode_vacancy->id) }}" method="post">
                            @csrf
                            <label class="text-center" for=""><b>KODE LOWONGAN</b></label><br>
                            <input type="text" name="search" class="form-control" id="">
                            <br>
                            <button class="btn btn-primary form-control btn-sm">Searching</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection