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
                    
                    @if($search_cek == null)

                    @else
                    <hr>
                    @foreach($get_attendances as $get_attendance)
                    <ul>
                      <li>{{$get_attendance->full_name}}</li>
                      <li>{{$get_attendance->place}} , {{$get_attendance->date_and_place}}</li>
                      <li>{{$get_attendance->no_handphone}}</li>
                      <li><p><b>{{$get_attendance->vacancy_r->title_vacancy}}</b></p></li>
                    </ul>
                    <style>
                      .events li { 
                        display: flex; 
                        color: #999;
                      }

                      .events p { 
                        position: relative;
                        padding: 0;  }

                      .events p::after { 
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

                      .events { margin: 1em; width: 100%; }
                      .events, 
                      .events *::before, 
                      .events *::after { box-sizing: border-box; font-family: arial; }

                    </style>
                    <ul class="events">
                      @foreach($get_attendance->Seleksi_r as $key=>$kal)
                        @if($kal->status_tes == "gagal")
                        <li>
                          <p><b class="text-danger"></b></p> 
                          <span><strong class="text-danger">{{$kal->status_tes}}: {{$kal->kategori_tes}}</strong>{!!$kal->notes2!!}</span></li>
                        @else
                          <li>
                          <p><b class="text-success"></b></p> 
                          <span><strong class="text-success">{{$kal->status_tes}}: {{$kal->kategori_tes}}</strong>{!!$kal->notes2!!}</span></li>
                        @endif
                      @endforeach
                    </ul>
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