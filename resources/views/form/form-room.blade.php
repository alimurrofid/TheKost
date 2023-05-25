@extends('layouts.custom')

@section('title', 'Form Room')

@section('content')
    <div class="card-header">
        <h4 class="card-title">Form Room</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Room Number</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Room Number">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Member Name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Room Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <a href="{{ route('dashboard.home') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
