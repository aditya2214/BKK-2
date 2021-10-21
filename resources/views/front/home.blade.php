@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <!-- page content start -->

        <div class="container mb-4 text-center">
            <div class="card bg-default-secondary shadow-default">
                <div class="card-body">
                    <!-- Swiper -->
                    <div class="swiper-container addsendcarousel text-center">
                        <div class="swiper-wrapper mb-4">
                            <a href="add_money.html" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">add</span></div>
                                <p><small>Add Fund</small></p>
                            </a>
                            <a href="send_money.html" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">call_made</span></div>
                                <p><small>Send</small></p>
                            </a>
                            <a href="withdraw.html" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">call_received</span></div>
                                <p><small>Withdraw</small></p>
                            </a>
                            <a href="change_currency.html" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">swap_horiz</span></div>
                                <p><small>Change</small></p>
                            </a>
                            <a href="transactions.html" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">class</span></div>
                                <p><small>Passbuk</small></p>
                            </a>
                            <a href="" class="swiper-slide text-white">
                                <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">receipt</span></div>
                                <p><small>Receipt</small></p>
                            </a>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cv -->
        <div class="container mb-4">
            <div class="swiper-container swiper-users text-center ">
                <div class="swiper-wrapper">
                    <!-- <div class="swiper-slide">
                        <div class="card ">
                            <div class="card-body p-2">
                                <a href="send_money.html" class="avatar avatar-60 rounded mb-1 bg-default-light">
                                    <span class="material-icons">add</span>
                                </a>
                                <p class="text-secondary"><small>Send</small></p>
                            </div>
                        </div>
                    </div> -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/1.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Errica</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/2.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Alisia</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/3.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Maxsmith</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/4.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Jenelia</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/5.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Errica</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/6.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Errica</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/7.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Alisia</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/8.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Maxsmith</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/9.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Jenelia</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/10.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Errica</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="avatar avatar-60 rounded mb-1">
                                    <div class="background"><img src="/img/cv/11.jfif" alt=""></div>
                                </div>
                                <p class="text-secondary"><small>Errica</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-4">
            <div class="card">
                <div class="card-body text-center ">
                    <div class="row justify-content-equal no-gutters">
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/kiic.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>KIIC</small></p>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/kim.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>KIM</small></p>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/surcip.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>SURYA CIPTA</small></p>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/indotaisei.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>INDOTAISEI</small></p>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/bic.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>BIC</small></p>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><img src="/img/mm2100.jpg" style="width:100px;" alt=""></div>
                            <p class="text-secondary"><small>MM2100</small></p>
                        </div>
                    </div>
                    <!-- <button class="btn btn-sm btn-outline-secondary rounded" id="more-expand-btn">Show more <span class="ml-2 small material-icons">expand_more</span></button>
                    <div class="row justify-content-equal no-gutters" id="more-expand">
                        <div class="col-4 col-md-2">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">beach_access</span></div>
                            <p class="text-secondary"><small>Insurance</small></p>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">drive_eta</span></div>
                            <p class="text-secondary"><small>Car</small></p>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">flight</span></div>
                            <p class="text-secondary"><small>Flight</small></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <h6 class="subtitle mb-3">Lowongan Tersedia </h6>
                </div>
                <!-- <div class="col-auto"><a href="" class="text-default">View all</a></div> -->
            </div>
            <div class="row">
                @foreach($vacancy as $key=>$vac)
                <div class="col-12 col-md-6">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12 align-self-center">
                                    <h6 class="mb-1">{{$vac->title_vacancy}}</h6>
                                    <p class="small text-secondary"></p>
                                </div>
                                <br>
                                <div class="col-12 align-self-center">
                                    <a href="{{ url ('job_details/'.$vac->id) }}" class="btn btn-outline-primary">Detail</a href="{{ url ('job_detail/'.$vac->id) }}">
                                    <p class="small text-secondary">Di Post Tgl : {{$vac->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- PWA add to home display -->
        <div class="container mb-4">
            <div class="card" id="addtodevice">
                <div class="card-body text-center">
                    <div class="row mb-3">
                        <div class="col-10 col-md-4 mx-auto"><img src="/frontend/img/install-app.png" alt="" class="mw-100"></div>
                    </div>

                    <h5 class="text-dark">Add to <span class="font-weight-bold">Home screen</span></h5>
                    <p class="text-secondary">See PWA app as in fullscreen on your device.</p>
                    <button class="btn btn-sm btn-default px-4 rounded" id="addtohome">Install</button>
                </div>
            </div>
        </div>
        <!-- PWA add to home display -->

        <div class="container mb-4">
            <div class="card border-0 mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                <i class="material-icons vm text-template">card_giftcard</i>
                            </div>
                        </div>
                        <div class="col-auto align-self-center">
                            <h6 class="mb-1">3 Gift Cards</h6>
                            <p class="small text-secondary">Click here to see gift cards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row mb-3">
                <div class="col">
                    <h6 class="subtitle mb-0">Upcoming Payments </h6>
                </div>
                <div class="col-auto"><a href="allpayment.html" class="float-right small">View All</a></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="mb-1">$ 1548.00 </h5>
                                    <p class="text-secondary">20d to pay electricity bill</p>

                                </div>
                                <div class="col-auto pl-0">
                                    <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                        <i class="material-icons">local_atm</i>
                                    </button>
                                </div>
                            </div>
                            <div class="progress h-5 mt-3">
                                <div class="progress-bar bg-default" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="mb-1">$ 106.00</h5>
                                    <p class="text-secondary">33 days to pay gas bill</p>
                                </div>
                                <div class="col-auto pl-0">
                                    <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                        <i class="material-icons">local_atm</i>
                                    </button>
                                </div>
                            </div>
                            <div class="progress h-5 mt-3">
                                <div class="progress-bar bg-default" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-1">Select Menu Type</h6>
                    <p class="text-secondary small">Open menu after selecting style</p>
                    <div class="row">
                        <div class="col-6 col-md-auto">
                            <div class="custom-control custom-switch">
                                <input type="radio" name="menustyle" class="custom-control-input" id="menu-overlay" checked="">
                                <label class="custom-control-label" for="menu-overlay">Overlay</label>
                            </div>
                        </div>
                        <div class="col-6 col-md-auto">
                            <div class="custom-control custom-switch">
                                <input type="radio" name="menustyle" class="custom-control-input" id="menu-pushcontent">
                                <label class="custom-control-label" for="menu-pushcontent">Reveal</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle">MITRA BKK</h5>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-6 col-md-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                <img src="/img/1.jpg" style="width:100px" alt="">
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal">2015</h3>
                            <p class="text-secondary small">PT EXEDY INDONESIA</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                <img src="/img/2.jpg" style="width:100px" alt="">
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal">2015</h3>
                            <p class="text-secondary small">PT Yamaha Motor Manufacturing West Java</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                <img src="/img/3.jpg" style="width:100px" alt="">
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal">2015</h3>
                            <p class="text-secondary small">PT MUSASHI AUTO PART INDONESIA</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                <img src="/img/4.jpg" style="width:100px" alt="">
                            </div>
                            <h3 class="mt-3 mb-0 font-weight-normal">2021</h3>
                            <p class="text-secondary small">PT JVC ELECTRONIK INDONESIA</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="card">
                <div class="card-body text-left text-md-center">
                    <p class="text-secondary">About us</p>
                    <h4 class="mb-3">Finance is not only income and expense. Its about more than that.</h4>
                    <h4 class="text-secondary font-weight-normal">We are at our best</h4>
                    <div class="row my-3 justify-content-center">
                        <div class="col-10 col-md-4 mx-auto"><img src="/frontend/img/about.png" alt="" class="mw-100"></div>
                    </div>
                    <p class="text-secondary mt-3">User experienced user interfaces with HTML and CSS also providing flexibility of style color customization. We have created specific website template demos and component library which be used across any demo.</p>
                    <a href="about.html" class="btn btn-sm btn-default rounded">Read more</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Pages</h6>
                </div>
                <div class="card-body px-0 pt-0">
                    <div class="list-group list-group-flush border-top border-color">
                        <a href="about.html" class="list-group-item list-group-item-action border-color">About</a>
                        <a href="analytics.html" class="list-group-item list-group-item-action border-color">Analytics</a>
                        <a href="transactions.html" class="list-group-item list-group-item-action border-color">Transactions</a>
                        <a href="gift_cards.html" class="list-group-item list-group-item-action border-color">Gift Cards</a>
                        <a href="error.html" class="list-group-item list-group-item-action border-color">Error</a>
                        <a href="pages.html" class="list-group-item list-group-item-action border-color text-primary text-center">More 20+ pages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection