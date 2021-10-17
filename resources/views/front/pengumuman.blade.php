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
                      // COMPASS
@import "compass";
// FONT
@import url("https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700");

// CONFIG
$SPACER_XS: 0.5rem;
$SPACER_SM: 0.75rem;
$SPACER: 1rem;
$SPACER_MD: 1.5rem;
$SPACER_LG: 2rem;
$BORDER_RADIUS: 3px;
$PROGRESS_HEIGHT: 600px;
$PROGRESS_LIST_HEIGHT: 75px;
$PROGRESS_COUNTER_WIDTH: 26px;
$LIST_ITEM_WIDTH: 100px;
$PROGRESS_BG: #392A60;
$BODY_BG: #2E1F47;
$ICON_COLOR: #F3597D;

// BASE
html {
  font-size: 13px;
  font-family: "Roboto Slab", serif;
  font-weight: 400;
  line-height: 13px;
  -webkit-font-smoothing: auto;
  text-rendering: optimizeLegibility;
  color: #fff;
  overflow: hidden;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  background:$BODY_BG;
  letter-spacing: 0.6px;

}

p {
  font-size: 13px;
  margin: 0 0 11px;
}

a {
  color: #fff;
  text-decoration: none;
}

header {
  text-align: center;
  margin-bottom: $SPACER_LG*2;
  h1 {
    font-size: 1.8rem;
    line-height: 2.1rem;
  }
  p {
    margin-top: $SPACER;
  }
  .icon {
    color: $ICON_COLOR; 
  }
}

// THE GOOD STUFF
.progressContainer {
  position: relative;
  width: 300px;
  height: 100vh;
  margin: 0 auto;
  overflow: hidden;
  padding: $SPACER_LG;
  color: #fff;
  background: $PROGRESS_BG;
  @include box-shadow(0 0 15px rgba(0, 0, 0, 0.3));
}

.progress {
  position: relative;
  padding: 0 $SPACER 0 3.5rem;
  margin: $SPACER_LG 0 0;
  list-style: none;
}

.progress__item {
  position: relative;
  min-height: $PROGRESS_LIST_HEIGHT;
  counter-increment: list;
  padding-left: $SPACER_XS;
  &:before {
    content: "";
    position: absolute;
    left: -1.5rem;
    top: 33px;
    height: 60%;
    width: 1px;
    border-left: 1px solid #fff;
  }
  &:after {
    content: counter(list);
    position: absolute;
    top: 0;
    left: -2.5rem;
    width: $PROGRESS_COUNTER_WIDTH;
    height: $PROGRESS_COUNTER_WIDTH;
    border-radius: 50%;
    background: transparent;
    color: #fff;
    font-weight: 400;
    font-size: 13px;
    line-height: 2rem;
    text-align: center;
    border: 1px solid #fff;
  }
  //Hide border for Last Step
  &:last-child {
    &:before {
      border: none;
    }
  }
  //Completed
  &.progress__item--completed {
    opacity: 0.6;
    color: #fff;
    &:after {
      content: "\2713";
      font-weight: 400;
      background: #fff;
      color: $PROGRESS_BG;
    }
  }
  //Active
  &.progress__item--active {
    &:after {
      background: #fff;
      color: $PROGRESS_BG;
    }
  }
}

.progress__title {
  padding: 0.4rem 0 $SPACER_XS;
  margin: 0;
  font-size: 1.5rem;
}

.progress__info {
  font-size: 13px;
}

                    </style>
                    <div class="progressContainer">

                      <header>
                        <h1>CSS Vertical Progress Steps Tracker</h1>
                        <p>Made with <i class="fa fa-heart icon" aria-hidden="true"></i> at <a href="https://goo.gl/jQbwCk">Later.com</a></p>
                      </header>

                      <ul class="progress">
                        <li class="progress__item progress__item--completed">
                          <p class="progress__title">Step 1</p>
                          <p class="progress__info">Completed</p>
                        </li>
                        <li class="progress__item progress__item--active">
                          <p class="progress__title">Step 2</p>
                          <p class="progress__info">Current or Active</p>
                        </li>
                        <li class="progress__item">
                          <p class="progress__title">Step 3</p>
                          <p class="progress__info">Next Step</p>
                        </li>
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