@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 fw-bold">{{ __('Dashboard') }}</h1>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('Kamu Sudah Login!') }} &#9989;
        </div>
    </div>
</div>
@endsection