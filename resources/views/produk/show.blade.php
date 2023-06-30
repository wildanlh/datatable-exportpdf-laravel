@extends('layouts.app')

@section('content')
<div class="container mx-auto lg:px-96">
    <div class="shadow-lg p-10 rounded">
        <div class="flex justify-between mb-5">
            <a href="{{ route('produk.index') }}" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Kembali</a>
        </div>
        <hr>
        <h2 class="text-2xl font-bold justify-start mt-5">Produk &#x1F4E6;</h2><br />

        <div>
            <img src="{{ asset('storage/produks/' . $produk->image) }}" class="w-100 rounded">
            <hr>
            <h4>{{ $produk->nama }}</h4>
            <p class="my-3">
                Harga : Rp.{{ number_format($produk->harga  ) }}
            </p>
            <p class="my-3">
                {!! $produk->deskripsi !!}
            </p>
        </div>
    </div>
</div>
@endsection