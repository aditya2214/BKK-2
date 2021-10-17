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
                      .wrapper {
  width: 330px;
  font-family: 'Helvetica';
  font-size: 14px;
  border: 1px solid #CCC;
}

.StepProgress {
  position: relative;
  padding-left: 45px;
  list-style: none;
  
  &::before {
    display: inline-block;
    content: '';
    position: absolute;
    top: 0;
    left: 15px;
    width: 10px;
    height: 100%;
    border-left: 2px solid #CCC;
  }
  
  &-item {
    position: relative;
    counter-increment: list;
    
    &:not(:last-child) {
      padding-bottom: 20px;
    }
    
    &::before {
      display: inline-block;
      content: '';
      position: absolute;
      left: -30px;
      height: 100%;
      width: 10px;
    }
    
    &::after {
      content: '';
      display: inline-block;
      position: absolute;
      top: 0;
      left: -37px;
      width: 12px;
      height: 12px;
      border: 2px solid #CCC;
      border-radius: 50%;
      background-color: #FFF;
    }
    
    &.is-done {
      &::before {
        border-left: 2px solid green;
      }
      &::after {
        content: "✔";
        font-size: 10px;
        color: #FFF;
        text-align: center;
        border: 2px solid green;
        background-color: green;
      }
    }
    
    &.current {
      &::before {
        border-left: 2px solid green;
      }
      
      &::after {
        content: counter(list);
        padding-top: 1px;
        width: 19px;
        height: 18px;
        top: -4px;
        left: -40px;
        font-size: 14px;
        text-align: center;
        color: green;
        border: 2px solid green;
        background-color: white;
      }
    }
  }
  
  strong {
    display: block;
  }
}
                    </style>
                    <div class="wrapper">
                    <ul class="StepProgress">
                      <li class="StepProgress-item is-done"><strong>Post a contest</strong></li>
                      <li class="StepProgress-item is-done"><strong>Award an entry</strong>
                        Got more entries that you love? Buy more entries anytime! Just hover on your favorite entry and click the Buy button
                      </li>
                      <li class="StepProgress-item current"><strong>Post a contest</strong></li>
                      <li class="StepProgress-item"><strong>Handover</strong></li>
                      <li class="StepProgress-item"><strong>Provide feedback</strong></li>
                    </ul>
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