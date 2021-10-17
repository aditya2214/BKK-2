@extends('layouts.app-frontend')

@section('content')
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
                    <style>
         .events li { 
  display: flex; 
  color: #999;
}

.events time { 
  position: relative;
  padding: 0 1.5em;  }

.events time::after { 
   content: "";
   position: absolute;
   z-index: 2;
   right: 0;
   top: 0;
   transform: translateX(50%);
   border-radius: 50%;
   background: #fff;
   border: 1px #ccc solid;
   width: .8em;
   height: .8em;
}


.events span {
  padding: 0 1.5em 1.5em 1.5em;
  position: relative;
}

.events span::before {
   content: "";
   position: absolute;
   z-index: 1;
   left: 0;
   height: 100%;
   border-left: 1px #ccc solid;
}

.events strong {
   display: block;
   font-weight: bolder;
}

.events { margin: 1em; width: 50%; }
.events, 
.events *::before, 
.events *::after { box-sizing: border-box; font-family: arial; }

                    </style>
                    <ul class="events">
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time</span></li>
    
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time</span></li>
  
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time and other text that may span over 2 lines</span></li>
  
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time</span></li>
  
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time</span></li>
  
  <li>
    <time datetime="10:03">10:03</time> 
    <span><strong>Bat &amp; Ball</strong> On time</span></li>
</ul>
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
                        color:green;
                      }

                      .stepper-item.unactive {
                        font-weight: bold;
                        color:red;
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
                      @foreach($get_attendance->Seleksi_r as $key=>$kal)
                      @if($kal->status_tes == "gagal")
                      <div class="stepper-item unactive">
                        <div class="step-counter">{{$key+1}}</div>
                        <div class="step-name">{{$kal->status_tes}}: {{$kal->kategori_tes}}</div>
                      </div>
                      @else
                      <div class="stepper-item active">
                        <div class="step-counter">{{$key+1}}</div>
                        <div class="step-name">{{$kal->status_tes}}: {{$kal->kategori_tes}}</div>
                      </div>
                      @endif
                      @endforeach
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