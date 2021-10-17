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
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ url ('searching') }}" method="post">
                            @csrf
                            <label class="text-center" for=""><b>KODE UNIK</b></label><br>
                            <input type="text" name="search" class="form-control" id="">
                            <br>
                            <button class="btn btn-primary form-control btn-sm">Searching</button>
                        </form>
                    </div>

                    <div class="card-body px-0">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item bg-default-light" href="notification_details.html">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-default">local_mall</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <p class="mb-0">New Order received</p>
                                            </div>
                                            <div class="col-auto pl-0">
                                                <p class="small text-secondary">2/12/2020</p>
                                            </div>
                                        </div>
                                        <p class="small text-secondary">Order from Anand Mhatva recieved for Electronics with 6 quanity.</p>
                                    </div>

                                </div>
                            </a>
                          </div>
                      </div>
                    @if($search_cek == null)

                    @else
                    <hr>
                    @foreach($get_attendances as $get_attendance)
                    <table>
                        <tr>
                          <td>*</td>
                          <td>Nama</td>
                          <td>:</td>
                          <td>{{$get_attendance->full_name}}</td>
                        </tr>
                        <tr>
                         <td>*</td>
                          <td>TTL </td>
                          <td>:</td>
                          <td>{{$get_attendance->place}},{{$get_attendance->date_and_place}}</td>
                        </tr>
                        <tr>
                         <td>*</td>
                          <td>No HP</td>
                          <td>:</td>
                          <td>{{$get_attendance->no_handphone}}</td>
                        </tr>
                    </table>
                    <br><br>
                    <div class="container">
                        <ul class="progressbar">
                            @foreach($get_attendance->Seleksi_r as $kal)
                            @if($kal->status_tes == "gagal")
                            <li><a href="#" class="text-danger" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="Some content inside the popover">{{$kal->status_tes}}: {{$kal->kategori_tes}}</a></li>
                            @else
                            <div class="card">
                              <div class="card-header">
                                  <li><a href="#" class="active" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="Some content inside the popover">{{$kal->status_tes}}: {{$kal->kategori_tes}}</a></li>
                              </div>
                              <div class="card-body">
                                  <p><b>{!!$kal->notes2!!}</b></p>
                              </div>
                            </div>
                            <br>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body ">
                        <p class="mb-0 text-mute f-sm"><b>{{$get_attendance->vacancy_r->title_vacancy}}</b></p>
                    </div>
                    <hr>
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