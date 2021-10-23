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
                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn btn-primary">Daftar</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$vacancy_detail->title_vacancy}} </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url ('daftarStore/'.$vacancy_detail->id) }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" required name="nama_lengkap" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">No Handphone</label>
                                    <input type="text" required name="no_handphone" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Daftar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <a href="{{url ('masukan_kode/'.$vacancy_detail->id) }}" class="btn btn btn-warning">Absen</a>
                </div>
            </div>
        </div>
    </div>
@endsection