@extends('layouts.app-frontend')

@section('content')

    <div class="main-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://{{$link->link_gfom}}" style="width:100%;height:100%;" title="description"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection