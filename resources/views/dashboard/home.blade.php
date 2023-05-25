@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="page-heading">
        <h3>Data Statistics The Kost</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Rooms Data
                                        </h6>
                                        <h6 class="font-extrabold mb-0">
                                            21 Rooms
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Members Data
                                        </h6>
                                        <h6 class="font-extrabold mb-0">
                                            15 Members
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Deals Data
                                        </h6>
                                        <h6 class="font-extrabold mb-0">
                                            112 Deals
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Users Data
                                        </h6>
                                        <h6 class="font-extrabold mb-0">
                                            17 Users
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pricing</h3>
                    <p class="text-subtitle text-muted">Present your plans to your users </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="pricing">
                        <div class="row align-items-center">
                            <div class="col-md-4 px-0">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Basic</h4>
                                        <p class="text-center">A standart features you can get</p>
                                    </div>
                                    <h1 class="price">$100</h1>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                    </ul>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-block">Order Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Highlighted Pricing -->
                            <div class="col-md-4 px-0  position-relative z-1">
                                <div class="card card-highlighted shadow-lg">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Enterpreneur</h4>
                                        <p></p>
                                    </div>
                                    <h1 class="price text-white">$150</h1>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    </ul>
                                    <div class="card-footer">
                                        <button class="btn btn-outline-white btn-block">Order Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-0">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Professional</h4>
                                        <p class="text-center">A higher features you will need</p>
                                    </div>
                                    <h1 class="price">$100</h1>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                        <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                    </ul>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-block">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
