@extends('layouts.app')

@section('title', 'Data Transaksi The Kost')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tabel Transaksi</h1>
        </div>

        <div class="section-body">
            <p class="section-lead">
                This page is just an example for you to create your own page.
            </p>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th class="col-md-2">Tanggal Bayar</th>
                            <th class="col-md-3">Kamar & Penghuni</th>
                            <th class="col-md-2">Jumlah Bayar</th>
                            <th class="col-md-3">Durasi Bulan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25 Desember</td>
                            <td>
                                <a href="#"> Kamar 1 (Rofid)</a>
                            </td>
                            <td>2 Bulan</td>
                            <td>Januari - Desember</td>
                            <td>
                                <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                        class="fas fa-binoculars"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>25 Desember</td>
                            <td>
                                <a href="#"> Kamar 1 (Rofid)</a>
                            </td>
                            <td>2 Bulan</td>
                            <td>Januari - Desember</td>
                            <td>
                                <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                        class="fas fa-binoculars"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
