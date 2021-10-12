@extends('welcome')

@section('content')

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$vacancy_detail->title_vacancy}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                       
                        <div class="job-post-details">
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Tempat Dan Tanggal</h4>
                                </div>
                                <p>
                                    {!!$vacancy_detail->place_and_date!!}
                                </p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Persyaratan</h4>
                                </div>
                                <p>
                                {!!$vacancy_detail->recruitment!!}
                                </p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Catatan</h4>
                                </div>
                                <p>
                                {!!$vacancy_detail->notes!!}
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                         <div class="apply-btn2">
                            <a href="#" data-toggle="modal" data-target="#daftar" class="btn btn-primary">Daftar</a>>
                         </div>
                         <div class="apply-btn2">
                            <a href="{{ url ('masukan_kode/'.$vacancy_detail->id) }}" class="btn btn-warning">Absen</a>
                         </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->


        <!-- Modal -->
        <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Online</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url ('daftar') }}" method="post">
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
@endsection