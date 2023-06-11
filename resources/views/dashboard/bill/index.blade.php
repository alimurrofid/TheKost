@extends('layouts.app')

@section('title', 'Bill')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Bill</h3>
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
                                            <th>Amount</th>
                                            <th>Due To</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($bills as $index => $bill)
                                            <tr>
                                                <td class="text-bold-500">
                                                    {{ $index + 1 }}
                                                    {{-- {{ $index + $bill->firstItem() }} --}}
                                                </td>
                                                <td class="text-bold-500">
                                                    {{ $bill->amount }}
                                                </td>
                                                <td class="text-bold-500">
                                                    {{ $bill->due_date }}
                                                </td>
                                                <td>
                                                    {{ $bill->status }}
                                                </td>
                                                <td>
                                                    <a href="#" class="btn icon btn-primary" title="Detail"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn icon btn-warning" title="Edit"><i
                                                            class="bi bi-exclamation-triangle"></i></a>
                                                    <a href="#" class="btn icon btn-danger" title="Delete"><i
                                                            class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Data Found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-3 pagination pagination-primary">
                                {{-- {{ $bills->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Table head options end -->
    </div>
@endsection
