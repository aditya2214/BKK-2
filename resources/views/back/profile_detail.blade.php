@extends('layouts.app-backend')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<style>
    body {
    background: #eee
}

.card {
    border: none;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer
}

.card:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #E1BEE7;
    transform: scaleY(1);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #6495ED;
    transform: scaleY(0);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:hover::after {
    transform: scaleY(1)
}

.fonts {
    font-size: 11px
}

.social-list {
    display: flex;
    list-style: none;
    justify-content: center;
    padding: 0
}

.social-list li {
    padding: 10px;
    color:#6495ED;
    font-size: 19px
}

.buttons button:nth-child(1) {
    border: 1px solid#6495ED !important;
    color:#6495ED;
    height: 40px
}

.buttons button:nth-child(1):hover {
    border: 1px solid#6495ED !important;
    color: #fff;
    height: 40px;
    background-color:#6495ED
}

.buttons button:nth-child(2) {
    border: 1px solid #6495ED !important;
    background-color:#6495ED;
    color: #fff;
    height: 40px
}
</style>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">{{Auth::user()->email}}</span>
                    <h5 class="mt-2 mb-0">{{Auth::user()->name}}</h5>
                    <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    <div class="buttons">
                        <a class="btn btn-primary px-4"><i class="fab fa-whatsapp fa-3x"></i></a> 
                        <a class="btn btn-primary px-4 ms-3"><i class="fab fa-facebook-f fa-3x"></i></a>
                        <a class="btn btn-primary px-4 ms-3"><i class="fab fa-instagram fa-3x"></i></a>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection


<!-- Content Row -->

<!-- /.container-fluid -->
