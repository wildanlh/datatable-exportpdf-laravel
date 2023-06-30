@extends('layouts.app')

@section('content')
<div class="container mx-auto lg:px-96">
    <div class="shadow-lg p-10 rounded">
        <div class="flex justify-between mb-5">
            <a href="/" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Beranda</a>
        </div>
        <hr>
        <h2 class="text-2xl font-bold justify-start mt-5">Register</h2><br />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-1 gap-5">
                <div class="relative">
                    <input id="name" name="name" type="text" name="name" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                    <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Nama Lengkap
                    </label>
                </div>

                <div class="relative">
                    <input id="email" name="email" type="email" name="email" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                    <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Email
                    </label>
                </div>

                <div class="relative">
                    <input id="password" name="password" type="password" required autocomplete="new-password" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                    <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Password
                    </label>
                </div>

                <div class="relative">
                    <input id="password-confirm" name="password_confirmation" required autocomplete="new-password" type="password" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                    <label for="password-confirm" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Confirm Password
                    </label>
                </div>
            </div>
            @error('name')
            <div class="text-red-500 font-medium mt-5">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            @error('email')
            <div class="text-red-500 font-medium mt-5">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            @error('password')
            <div class="text-red-500 font-medium mt-5">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            <button type="submit" class="text-[#007AFF] mt-10 font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                Register
            </button>
        </form>
    </div>
</div>
@endsection