@extends('layouts.app')

@section('title', 'Data Penghuni The Kost')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tabel Penghuni</h1>
        </div>

        <div class="section-body">
            <p class="section-lead">
                This page is just an example for you to create your own page.
            </p>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th class="col-md-1">Number</th>
                            <th class="col-md-3">Name</th>
                            <th class="col-md-4">Adress</th>
                            <th class="col-md-2">No. Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png"
                                        alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>Sukarno Hata, Tajinan</td>
                            <td>+62 Nomer Kamu</td>
                            <td>
                                <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                        class="fas fa-binoculars"></i></a>
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png"
                                        alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>Sukarno Hata, Tajinan</td>
                            <td>+62 Nomer Kamu</td>
                            <td>
                                <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                        class="fas fa-binoculars"></i></a>
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                        class="fas fa-pencil-alt"></i></a>
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
