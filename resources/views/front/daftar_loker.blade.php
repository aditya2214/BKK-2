@extends('layouts.app-frontend')

@section('content')

 <div class="main-container">
    <div class="container">
        <div class="card">
            <div class="card-body px-0">
                <div class="list-group list-group-flush">
                 @foreach($vacancies as $vacancy)
                        <div class="list-group-item" href="">
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
                                    <button class="btn btn-warning btn-sm " data-toggle="modal" data-target="#Kode_Tes_Online">Ikuti Tes</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Kode_Tes_Online" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukan Kode Tes</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url ('storeKodeTes/'.$vacancy->id) }}" method="get">
                                        @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" name="Kode_tes" id="Kode_tes" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button class="btn btn-primary">Masuk</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection