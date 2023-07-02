@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="md:shadow-lg p-10 rounded mx-10">
        <h1 class="text-2xl font-bold">{{ __('Dashboard') }}</h1>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('Anda Telah Login!') }} &#9989;
    </div>
</div>
@endsection