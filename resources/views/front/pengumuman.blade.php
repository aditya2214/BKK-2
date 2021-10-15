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
                            <input type="tel" name="search" class="form-control" id="">
                            <br>
                            <button class="btn btn-primary btn-sm">Searching</button>
                        </form>
                    </div>
                    @if($search_cek == null)
                        <p><i>Masukan Kode Unik</i></p>
                    @else
                    <div class="container">
                        <ul class="progressbar">
                            <li><a href="#" class="active" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="Some content inside the popover">Step 1</a></li>
                            <li><a href="#" class="none-active" >Step 2</a></li>
                            <li><a href="#">Step 3</a></li>
                        </ul>
                    </div>
                    <div class="card-body ">
                        <p class="mb-0 text-mute f-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary"> Footer Button</button>
                    </div>
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