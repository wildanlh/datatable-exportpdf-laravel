@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-5 fw-bold">Selamat Datang!</h1>
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/home') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Home</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4 me-sm-3">Register</a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </div>
</div>
@endsection