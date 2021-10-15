@extends('layouts.app-frontend')

@section('content')
<style>
    .container {
  width: 100%;
}

.progressbar {
  counter-reset: step;
}

.progressbar li a{
  list-style-type: none;
  float: left;
  width: 33.33%;
  position: relative;
  text-align: center;
}

.progressbar li a:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height: 30px;
  border: 2px solid #ddd;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  background-color: white;
}

.progressbar li a:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 5px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index: -1;
}

.progressbar li:first-child a:after {
  content: none;
}

.progressbar li a.active {
  color: green;
}

.progressbar li a.active:before {
  border-color: green;
}

.progressbar li a.none-active:after {
  background-color:green !important;
}
li {
  list-style:none;
    text-align: -webkit-match-parent;
}
</style>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <form action="{{ url ('searching') }}" method="post">
                            @csrf
                            <label for="">Kode Unik</label><br>
                            <small><i>NIK,NO HP,EMAIL</i></small>
                            <input type="text" name="search" class="form-control" id="">
                            <br>
                            <button class="btn btn-primary btn-sm">Searching</button>
                        </form>
                    </div>
                    @if($search_cek == null)
                        <p><i>Masukan Kode Unik</i></p>
                    @else
                    @foreach($get_attendances as $get_attendance)
                    <div class="container">
                        <ul class="progressbar">
                            @foreach($get_attendance->Seleksi_r as $kal)
                            @if($kal->status_test == "gagal")
                            <li><a href="#" class="text-danger" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="Some content inside the popover">{{$kal->status_tes}}: {{$kal->kategori_tes}}</a></li>
                            @else
                            <li><a href="#" class="active" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="Some content inside the popover">{{$kal->status_tes}}: {{$kal->kategori_tes}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body ">
                        <p class="mb-0 text-mute f-sm"><b>{{$get_attendance->vacancy_r->title_vacancy}}</b></p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
@endsection