@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <div class="container">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="row">
                        <div class="col pl-0 align-self-center">
                            <h6 class="mb-1">&nbsp;&nbsp;{{$vacancy_detail->title_vacancy}} </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-secondary">
                        {!!$vacancy_detail->place_and_date!!}
                    </p>
                    <br><br>
                    <p class="text-secondary">
                        {!!$vacancy_detail->recruitment!!}
                    </p>
                    <br><br>
                    <p class="text-secondary">
                        {!!$vacancy_detail->notes!!}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn btn-primary">Daftar</a>
                    <a href="{{url ('masukan_kode/'.$vacancy_detail->id) }}" class="btn btn btn-warning">Absen</a>
                </div>
            </div>
        </div>
    </div>
@endsection