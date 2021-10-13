@extends('layouts.app-frontend')

@section('content')
    <div class="container mt-3 mb-4 text-center">
        <h2 class="text-white">BKK-Karawang</h2>
    </div>

    <div class="main-container">
        <div class="container">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="row">
                        <div class="col pl-0 align-self-center">
                            <h6 class="mb-1">{$vacancy_detail->title_vacancy}} </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-secondary">
                        {!!$vacancy_detail->place_and_date!!}
                    </p>
                    <p class="text-secondary">
                        {!!$vacancy_detail->recruitment!!}
                    </p>
                    <p class="text-secondary">
                        {!!$vacancy_detail->notes!!}
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn btn-primary">Daftar</div>
                    <div class="btn btn btn-warning">Absen</div>
                </div>
            </div>
        </div>
    </div>
@endsection