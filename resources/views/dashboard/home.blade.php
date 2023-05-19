@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Homepage</h1>
        </div>

        <div class="section-body">
            <p class="section-lead">
                Selamat datang di halaman dashboard kost kami.
            </p>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <a href="{{ route('dashboard.rooms') }}">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                        </a>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Rooms</h4>
                            </div>
                            <div class="card-body">
                                42
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Members</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Reports Transaction</h4>
                            </div>
                            <div class="card-body">
                                52
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-angry"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Users</h4>
                            </div>
                            <div class="card-body">
                                12
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
