@extends('layouts.app')

@section('content')
<div class="container mx-auto lg:px-96">
    <div class="shadow-lg p-10 rounded">
        <div class="flex justify-between mb-5">
            <a href="{{ route('produk.index') }}" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Kembali</a>
        </div>
        <hr>
        <h2 class="text-2xl font-bold justify-start mt-5">Tambah Produk &#x1F4E6;</h2><br />

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-5">
                <div class="relative">
                    <input id="nama" name="nama" type="text" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="nama" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Nama Produk
                    </label>
                    @error('nama')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <input id="harga" name="harga" type="number" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                    <label for="harga" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Harga Produk
                    </label>
                    @error('harga')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="relative">
                    <textarea id="deskripsi" name="deskripsi" rows="3" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required></textarea>
                    <label for="deskirpsi" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                        Deskripsi
                    </label>
                    @error('deskripsi')
                    <div class="text-red-500 font-medium">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div>
            </div>

            <div class="relative">
                <input id="image" name="image" type="file" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" required />
                <label for="image" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">

                </label>
                @error('image')
                <div class="text-red-500 font-medium">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
            </div>

            <button type="submit" class="text-[#007AFF] mt-10 font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                Tambahkan Produk
            </button>
            <button type="reset" class="text-red-500 mt-10 font-medium py-2 px-4 relative border border-red-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-red-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                Reset
            </button>
        </form>
    </div>
</div>
@endsection