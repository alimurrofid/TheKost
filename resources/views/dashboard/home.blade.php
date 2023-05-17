@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Home Page</h1>
            <p>This is Homepage</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar</h4>
                    </div>
                    <div class="card-body">
                        <figure class="avatar mr-2 avatar-xl">
                            <img src="assets/images/avatar/avatar-6.png" alt="...">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar Icon</h4>
                    </div>
                    <div class="card-body">
                        <figure class="avatar mr-2 avatar-xl">
                            <img src="assets/images/avatar/avatar-5.png" alt="...">
                            <img src="assets/images/avatar/avatar-5.png" class="avatar-icon" alt="...">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar Presence</h4>
                    </div>
                    <div class="card-body">
                        <figure class="avatar mr-2 avatar-xl">
                            <img src="assets/images/avatar/avatar-2.png" alt="...">
                            <i class="avatar-presence online"></i>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar Initial</h4>
                    </div>
                    <div class="card-body">
                        <figure class="avatar mr-2 avatar-xl" data-initial="UM"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- End Container-->
@endsection
