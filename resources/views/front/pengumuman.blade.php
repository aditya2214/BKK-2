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
                    @if($search_cek == null)

                    @else
                    <hr>
                    @foreach($get_attendances as $get_attendance)
                    <ul>
                      <li class="badge badge-primary" >{{$get_attendance->full_name}}</li>
                      <li class="badge badge-primary" >{{$get_attendance->place}} , {{$get_attendance->date_and_place}}</li>
                      <li class="badge badge-primary" >{{$get_attendance->no_handphone}}</li>
                    </ul>
                    <br><br>
                    <style>
                      .stepper-wrapper {
                        margin-top: auto;
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 20px;
                      }
                      .stepper-item {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        flex: 1;

                        @media (max-width: 768px) {
                          font-size: 12px;
                        }
                      }

                      .stepper-item::before {
                        position: absolute;
                        content: "";
                        border-bottom: 2px solid #ccc;
                        width: 100%;
                        top: 20px;
                        left: -50%;
                        z-index: 2;
                      }

                      .stepper-item::after {
                        position: absolute;
                        content: "";
                        border-bottom: 2px solid #ccc;
                        width: 100%;
                        top: 20px;
                        left: 50%;
                        z-index: 2;
                      }

                      .stepper-item .step-counter {
                        position: relative;
                        z-index: 5;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        background: #ccc;
                        margin-bottom: 6px;
                      }

                      .stepper-item.active {
                        font-weight: bold;
                      }

                      .stepper-item.completed .step-counter {
                        background-color: #4bb543;
                      }

                      .stepper-item.completed::after {
                        position: absolute;
                        content: "";
                        border-bottom: 2px solid #4bb543;
                        width: 100%;
                        top: 20px;
                        left: 50%;
                        z-index: 3;
                      }

                      .stepper-item:first-child::before {
                        content: none;
                      }
                      .stepper-item:last-child::after {
                        content: none;
                      }
                    </style>
                    <div class="stepper-wrapper">
                      <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">First</div>
                      </div>
                      <div class="stepper-item completed">
                        <div class="step-counter">2</div>
                        <div class="step-name">Second</div>
                      </div>
                      <div class="stepper-item active">
                        <div class="step-counter">3</div>
                        <div class="step-name">Third</div>
                      </div>
                      <div class="stepper-item">
                        <div class="step-counter">4</div>
                        <div class="step-name">Forth</div>
                      </div>
                    </div>
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