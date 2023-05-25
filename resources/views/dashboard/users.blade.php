@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Users</h3>
                    <p class="text-subtitle text-muted">
                        Who does not love The Kost
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Table</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Table head options start -->
        <section class="section">
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Table Data Users
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    "Welcome to our web page showcasing the user data of our boarding house, where comfort
                                    and convenience come together in one place."
                                </p>
                                <a href="#" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                    Add Data</a>
                            </div>

                            <!-- table head dark -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">
                                                1
                                            </td>
                                            <td class="text-bold-500">
                                                Michael Right
                                            </td>
                                            <td class="text-bold-500">
                                                Michel@gmail.com
                                            </td>
                                            <td class="text-bold-500">
                                                User
                                            <td>
                                                <a href="#" class="btn icon btn-primary" title="Detail"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a href="#" class="btn icon btn-warning" title="Edit"><i
                                                        class="bi bi-exclamation-triangle"></i></a>
                                                <a href="#" class="btn icon btn-danger" title="Delete"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">
                                                1
                                            </td>
                                            <td class="text-bold-500">
                                                Michael Right
                                            </td>
                                            <td class="text-bold-500">
                                                Michel@gmail.com
                                            </td>
                                            <td class="text-bold-500">
                                                User
                                            <td>
                                                <a href="#" class="btn icon btn-primary" title="Detail"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a href="#" class="btn icon btn-warning" title="Edit"><i
                                                        class="bi bi-exclamation-triangle"></i></a>
                                                <a href="#" class="btn icon btn-danger" title="Delete"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Table head options end -->
    </div>
@endsection
