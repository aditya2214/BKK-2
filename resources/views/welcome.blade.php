<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Finwallapp - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
    <link rel="icon" href="img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="frontend/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/frontend/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="/frontend/img/favicon144.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">Finwallapp</h4>
                    <p class="text-secondary">Mobile HTML template</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- menu main -->
    <div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-40 rounded-circle position-relative">
                    <figure class="background">
                        <img src="/frontend/img/user1.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h6 class="mb-1">Errica Johnson</h6>
                <p class="small text-default-secondary">London, UK</p>
            </div>
        </div>
        <div class="menu-container">
            <div class="row mb-4">
                <div class="col">
                    <h4 class="mb-1 font-weight-normal">$ 1548.00</h4>
                    <p class="text-default-secondary">My Balance</p>
                </div>
                <div class="col-auto">
                    <button class="btn btn-default btn-40 rounded-circle" data-toggle="modal" data-target="#addmoney"><i class="material-icons">add</i></button>
                </div>
            </div>

            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            Home
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.html">
                        <div>
                            <span class="material-icons icon">insert_chart</span>
                            Analytics
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="refer_friends.html">
                        <div>
                            <span class="material-icons icon">perm_contact_calendar</span>
                            Refer Friends
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gift_cards.html">
                        <div>
                            <span class="material-icons icon">card_giftcard</span>
                            Gift Cards
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_orders.html">
                        <div>
                            <span class="material-icons icon">shopping_bag</span>
                            My Orders
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting.html">
                        <div>
                            <span class="material-icons icon">settings</span>
                            Settings
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages.html">
                        <div>
                            <span class="material-icons icon">layers</span>
                            Pages
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="controls.html">
                        <div>
                            <span class="material-icons icon">widgets</span>
                            Controls
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="login.html" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
    

    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0">Finwallapp</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <button type="button" class="btn btn-link btn-40 colorsettings">
                        <span class="material-icons">color_lens</span>
                    </button>

                    <a href="notification.html" class="menu-btn btn btn-40 btn-link" >
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>
                    </a>
                    <a href="profile.html" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="/frontend/img/user1.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>

        <div class="container mt-3 mb-4 text-center">
            <h2 class="text-white">$ 1,050.00</h2>
            <p class="text-white mb-4">Total Balance</p>
        </div>

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
            <!-- Swiper -->
            <div class="container mb-4">
                <div class="swiper-container swiper-users text-center ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <a href="send_money.html" class="avatar avatar-60 rounded mb-1 bg-default-light">
                                        <span class="material-icons">add</span>
                                    </a>
                                    <p class="text-secondary"><small>Send</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user2.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Alisia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user3.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Maxsmith</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user4.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Jenelia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user2.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Alisia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user3.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Maxsmith</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user4.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Jenelia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="/frontend/img/user1.png" alt=""></div>
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
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">qr_code_2</span></div>
                                <p class="text-secondary"><small>Pay</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">swap_horiz</span></div>
                                <p class="text-secondary"><small>Transfer</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">sim_card</span></div>
                                <p class="text-secondary"><small>Reacharge</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">account_circle</span></div>
                                <p class="text-secondary"><small>Send</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                                <p class="text-secondary"><small>Bill</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">wb_incandescent</span></div>
                                <p class="text-secondary"><small>Electricity</small></p>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary rounded" id="more-expand-btn">Show more <span class="ml-2 small material-icons">expand_more</span></button>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-4">
                <div class="row">
                    <div class="col">
                        <h6 class="subtitle mb-3">Status </h6>
                    </div>
                    <div class="col-auto"><a href="" class="text-default">View all</a></div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                            <i class="material-icons vm text-template">local_atm</i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <h6 class="mb-1">EMI</h6>
                                        <p class="small text-secondary">Home Loan</p>
                                    </div>
                                    <div class="col-auto align-self-center border-left">
                                        <h6 class="mb-1">$ 1548.00</h6>
                                        <p class="small text-secondary">Due: 15-12-2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                            <i class="material-icons vm text-template">local_atm</i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <h6 class="mb-1">EMI</h6>
                                        <p class="small text-secondary">Car Loan</p>
                                    </div>
                                    <div class="col-auto align-self-center border-left">
                                        <h6 class="mb-1">$ 658.00</h6>
                                        <p class="small text-secondary">Due: 18-12-2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h5 class="subtitle">Most Exciting Feature</h5>
                        <p class="text-secondary">Take a look at our services</p>
                    </div>
                </div>
                <div class="row text-center mt-3">
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">card_giftcard</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal">2546</h3>
                                <p class="text-secondary small">Gift it out</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">subscriptions</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal">635</h3>
                                <p class="text-secondary small">Monthly Billed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">local_florist</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal">1542</h3>
                                <p class="text-secondary small">Eco environment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">location_city</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal">154</h3>
                                <p class="text-secondary small">Four Offices</p>
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
    </main>

    <!-- footer-->
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="index.html" class="active">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="analytics.html" class="">
                    <i class="material-icons">insert_chart_outline</i>
                    <p>Analytics</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="wallet.html" class="">
                    <i class="material-icons">account_balance_wallet</i>
                    <p>Wallet</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="shop.html" class="">
                    <i class="material-icons">shopping_bag</i>
                    <p>Shop</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="profile.html" class="">
                    <i class="material-icons">account_circle</i>
                    <p>Profile</p>
                </a>
            </div>
        </div>
    </div>


    <!-- color settings style switcher -->
    <div class="color-picker">
        <div class="row">
            <div class="col text-left">
                <div class="selectoption">
                    <input type="checkbox" id="darklayout" name="darkmode">
                    <label for="darklayout">Dark</label>
                </div>
                <div class="selectoption mb-0">
                    <input type="checkbox" id="rtllayout" name="layoutrtl">
                    <label for="rtllayout">RTL</label>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary btn-round colorsettings2"><span class="material-icons">close</span></button>
            </div>
        </div>

        <hr class="mt-2">
        <div class="colorselect">
            <input type="radio" id="templatecolor1" name="sidebarcolorselect">
            <label for="templatecolor1" class="bg-dark-blue" data-title="dark-blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor2" name="sidebarcolorselect">
            <label for="templatecolor2" class="bg-dark-purple" data-title="dark-purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor4" name="sidebarcolorselect">
            <label for="templatecolor4" class="bg-dark-gray" data-title="dark-gray"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor6" name="sidebarcolorselect">
            <label for="templatecolor6" class="bg-dark-brown" data-title="dark-brown"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor3" name="sidebarcolorselect">
            <label for="templatecolor3" class="bg-maroon" data-title="maroon"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor5" name="sidebarcolorselect">
            <label for="templatecolor5" class="bg-dark-pink" data-title="dark-pink"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor8" name="sidebarcolorselect">
            <label for="templatecolor8" class="bg-red" data-title="red"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor13" name="sidebarcolorselect">
            <label for="templatecolor13" class="bg-amber" data-title="amber"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor7" name="sidebarcolorselect">
            <label for="templatecolor7" class="bg-dark-green" data-title="dark-green"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor11" name="sidebarcolorselect">
            <label for="templatecolor11" class="bg-teal" data-title="teal"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor12" name="sidebarcolorselect">
            <label for="templatecolor12" class="bg-skyblue" data-title="skyblue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor10" name="sidebarcolorselect">
            <label for="templatecolor10" class="bg-blue" data-title="blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor9" name="sidebarcolorselect">
            <label for="templatecolor9" class="bg-purple" data-title="purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor14" name="sidebarcolorselect">
            <label for="templatecolor14" class="bg-gray" data-title="gray"></label>
        </div>
    </div>




    <!-- Required jquery and libraries -->
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="/frontend/js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="/frontend/vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="/frontend/js/main.js"></script>
    <script src="/frontend/js/color-scheme-demo.js"></script>

    <!-- PWA app service registration and works -->
    <script src="/frontend/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="/frontend/js/app.js"></script>
</body>

</html>
