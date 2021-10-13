@extends('layouts.app-frontend')

@section('content')
    <div class="container mt-3 mb-4 text-center">
        <h2 class="text-white">BKK-Karawang</h2>
    </div>

    <div class="main-container">
        <div class="container">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="row">
                        <div class="col-auto">
                            <div class="icon icon-40 rounded bg-default-light"><i class="material-icons text-default">local_mall</i></div>
                        </div>
                        <div class="col pl-0 align-self-center">
                            <h6 class="mb-1">New Order Received </h6>
                            <p class="text-secondary ">At home London, UK <small class="float-right text-secondary">3 days ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media mb-4">
                        <div class="icon icon-60 mr-3 rounded">
                            <figure class="background" style="background-image: url(&quot;img/image3.jpg&quot;);">
                                <img src="img/image3.jpg" alt="Generic placeholder image" style="display: none;">
                            </figure>
                        </div>
                        <div class="media-body">
                            <small class="text-secondary">Adididas</small>
                            <h6 class="mb-1 text-default">Women Jacket Black</h6>
                            <p>$ 49.99</p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <div class="icon icon-60 mr-3 rounded">
                            <figure class="background" style="background-image: url(&quot;img/image5.jpg&quot;);">
                                <img src="img/image5.jpg" alt="Generic placeholder image" style="display: none;">
                            </figure>
                        </div>
                        <div class="media-body">
                            <small class="text-secondary">Rockstar</small>
                            <h6 class="mb-1 text-default">Shorts Uunisex</h6>
                            <p>$ 28.99</p>
                        </div>
                    </div>
                    <p>Order from Anand Mhatva recieved for Electronics with 6 quanity.</p>
                    <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection