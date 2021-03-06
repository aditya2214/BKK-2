<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>BKK-Karawang</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="{{ asset ('frontend/manifest.json') }}" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset ('frontend/img/favicon180.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset ('frontend/img/favicon32.png" sizes="32x32') }}" type="image/png">
    <link rel="icon" href="{{ asset ('frontend/img/favicon16.png" sizes="16x16') }}" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="{{ asset ('frontend/vendor/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('frontend/css/style.css') }}" rel="stylesheet" id="style">
    <script src="{{ asset ('ckeditor/ckeditor.js') }}"></script>
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    @include('sweetalert::alert')
    <!-- screen loader -->
    <!-- <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="/frontend/img/favicon144.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">BKK-Karawang</h4>
                    <p class="text-secondary">Mobile BKK</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    
    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        
        
        <div class="container mt-3 mb-4 text-center">
            <a href="{{ url ('/') }}"><h2 class="text-white">BKK-KARAWANG</h2></a>
        </div>
        @yield('content')

    </main>

    <!-- footer-->
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="{{ url ('/')}}" class="">
                <i class="fas fa-home"></i>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url ('front_test_online') }}" class="">
                <i class="fas fa-signal"></i>
                    <p>Tes Online</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url ('pengumuman') }}" class="">
                <i class="fas fa-bullhorn"></i>
                    <p>Pengumuman</p>
                </a>
            </div>
            <div class="col-auto">
                <a  href="https://api.whatsapp.com/send?phone=6283816336097&text=Ada Yang bisa Saya Bantu. Salam Hormat Admin BKK!!!" class="">
                <i class="far fa-comments"></i>
                    <p>Chat</p>
                </a>
            </div>
            <!-- <div class="col-auto">
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
            </div> -->
        </div>
    </div>




    <!-- <script src="/blueimp-load-image/js/load-image.all.min.js"></script> -->

    <!-- Required jquery and libraries -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- cookie js -->
    <script src="{{ asset('frontend/js/jquery.cookie.js') }}"></script>

    <!-- Swiper slider  js-->
    <script src="{{ asset('frontend/vendor/swiper/js/swiper.min.js') }}"></script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/color-scheme-demo.js') }}"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('frontend/js/pwa-services.js') }}"></script>

    <!-- page level custom script -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>
