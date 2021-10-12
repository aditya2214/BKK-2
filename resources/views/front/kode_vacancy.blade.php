@extends('welcome')

@section('content')

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <form action="{{ url ('absen/'.$cek_kode_vacancy->id) }}" method="post">
                                <h1>Masukan Kode Loker/</h1>
                                <i><small class="text-danger">Kode loker akan di berikan oleh admin saat tes</small></i>
                                <input type="password" name="kode_loker" id="kode_loker" placeholder="Kode Loker" class="form-control">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection