@extends('layouts.custom')

@section('title', 'Form Member')

@section('content')
    <div class="card-header">
        <h4 class="card-title">Form Room</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Name</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Room Number">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Member Name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="Phone" placeholder="Phone Number">
            </div>
            {{-- form tanggal --}}
            <div class="mb-3">
                <label for="date" class="form-label">Date of Entry</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="Date of Entry">
            </div>
            <a href="{{ route('dashboard.home') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
