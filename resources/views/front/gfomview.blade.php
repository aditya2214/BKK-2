@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        {!!$link->link_gfom!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection