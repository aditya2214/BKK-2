@extends('layouts.app-frontend')

@section('content')

 <div class="main-container">
    <div class="container">
        <div class="card">
            <div class="card-body px-0">
                <div class="list-group list-group-flush">
                 @foreach($vacancies as $vacancy)
                    <form action="{{ url ('masukan_kode/'.$vacancy->id) }} " method="get">
                        <input type="hidden" name="tes_ol" value="{{$tes_online}}">
                        <a class="list-group-item" href="">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                <i class="fas fa-thumbtack"></i>
                                </div>
                                <div class="col pl-0">
                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="mb-0">{{$vacancy->title_vacancy}}</p>
                                        </div>
                                        <div class="col-auto pl-0">
                                            <p class="small text-secondary">Di Posting TGL :</p>
                                            <p class="small text-secondary">{{$vacancy->created_at}}</p>
                                        </div>
                                    </div>
                                    <button class="small">Ikuti Tes</button>
                                </div>
                            </div>
                        </a>
                    </form>
                @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection