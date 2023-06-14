@extends('layouts.custom')

@section('title', 'Form Member')

@section('content')
    {{-- start logo and back --}}
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route($dormitory_route['index']) }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route($dormitory_route['index']) }}">
                <img src="{{ asset('assets/img/logo-blue.svg') }}">
            </a>
        </div>
    </nav>
    {{-- endt logo and back --}}

    <div class="card-header">
        <h4 class="card-title">Form Members</h4>
    </div>
    <div class="card-body">
        <form action="{{ route($dormitory_route['store']) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Room Number" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                    name="address" placeholder="Member Name" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                    id="phone_number" value="{{ old('phone_number') }}">
                @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- form tanggal --}}
            <div class="mb-3">
                <label for="checkin_date" class="form-label">Date Of Entry</label>
                <input type="date" name="checkin_date" class="form-control @error('checkin_date') is-invalid @enderror"
                    id="checkin_date" value="{{ old('checkin_date', date('m/d/Y')) }}">
                @error('checkin_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Image Identity Card</label>
                <span>
                    <img class="img-preview img-fluid col-lg-10 col-xl-8 mb-3 p-0 border-1 border-primary d-none"
                        id="image-preview" style="border: solid">
                </span>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" placeholder="Image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <a href="{{ route($dormitory_route["index"]) }}" class="btn btn-secondary">Back</a> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        const inputImage = document.querySelector("#image");
        const previewImage = document.querySelector("#image-preview.img-preview");

        const displayInputImage = () => {
            previewImage.classList.remove("d-none")
            previewImage.style.display = "block";
            // previewImage.style.height = "350px";
            previewImage.style.aspectRatio = "16/9";
            previewImage.style.objectFit = "cover";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(inputImage.files[0]);

            oFReader.onload = function(oFREvent) {
                previewImage.src = oFREvent.target.result;
            }
        }

        if (inputImage.files[0] != null) {
            displayInputImage()
        }

        inputImage.addEventListener("change", displayInputImage)
    </script>
@endsection
