@extends('layouts.authorisation')
@section('title','login')
@section('content')
<div class="auth-logo">
    <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
</div>
<h1 class="auth-title">Log in.</h1>
<p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

<form action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group position-relative has-icon-left mb-4">
        {{-- <input type="text" class="form-control form-control-xl" placeholder="Username"> --}}
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" autofocus>
        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        {{-- <input type="password" class="form-control form-control-xl" placeholder="Password"> --}}
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2">
        @error('password')
        <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-check form-check-lg d-flex align-items-end">
        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label text-gray-600" for="flexCheckDefault">
            Keep me logged in
        </label>
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
</form>
<div class="text-center mt-5 text-lg fs-4">
    <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
            up</a>.</p>
    <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
</div>
@endsection