@extends('layouts.app-frontend')

@section('content')
<div class="main-container">
            <div class="container">
                <div class="card">
                    <div class="card-body px-0">
                        @foreach ($vacancies as $vacancy)
                        <div class="list-group list-group-flush">
                            <a class="list-group-item bg-default-light" href="notification_details.html">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="fas fa-thumbtack"></i>                                    </div>
                                    <div class="col pl-0">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <p class="mb-0">{{$vacancy->title_vacancy}}</p>
                                            </div>
                                            <div class="col-auto pl-0">
                                                <p class="small text-secondary">{{$vacancy->created_at}}</p>
                                            </div>
                                        </div>
                                        <p class=""><a href="">click</a></p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
               
            </div>
        </div>
@endsection