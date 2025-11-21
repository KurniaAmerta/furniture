@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="pt-10">
        <form id="filter-form" action="{{ route('products') }}" method="GET">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center gap-6 mb-16 px-4">
                <span class="font-semibold">Kategori Produk :</span>
                <div class="flex flex-wrap gap-4">
                    @foreach ($categories as $item)
                        <label>
                            <input type="checkbox" name="categories[]" value="{{ $item->id }}" 
                                {{ in_array($item->id, request()->categories ?? []) ? 'checked' : '' }}>
                            {{ $item->name }}
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/4 p-4">
                    <div class="border-l border-transparent md:border-gray-200 md:pl-6 pb-10 h-full">
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Dimensi</span>
                        </div>
                        <div class="flex flex-wrap gap-4 mb-10">
                            @foreach (['Kecil' => 'small', 'Sedang' => 'medium', 'Besar' => 'large'] as $label => $value)
                                <label>
                                    <input type="checkbox" name="dimensions[]" value="{{ $value }}" 
                                        {{ in_array($value, request()->dimensions ?? []) ? 'checked' : '' }}>
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Warna</span>
                        </div>
                        <div class="flex flex-wrap gap-8 mb-10">
                            @foreach ($colors as $item)
                                <label>
                                    <input type="checkbox" name="colors[]" value="{{ $item->id }}" 
                                        {{ in_array($item->id, request()->colors ?? []) ? 'checked' : '' }}>
                                    <span class="inline-block rounded-md w-6 h-6 border" style="background-color: {{ $item->hex }};"></span>
                                </label>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Merek</span>
                        </div>
                        <div class="flex flex-col gap-4 mb-6">
                            @foreach ($brands as $item)
                                <label>
                                    <input type="checkbox" name="brands[]" value="{{ $item->id }}" 
                                        {{ in_array($item->id, request()->brands ?? []) ? 'checked' : '' }}>
                                    {{ $item->name }}
                                </label>
                            @endforeach
                        </div>
                        <button type="submit" class="text-white inline-block px-7 py-2 my-3 rounded-full bg-orange-700 hover:bg-orange-800 transition duration-200">Filter</button>
                        <a href="{{ route('products') }}" class="text-white inline-block px-7 py-2 my-3 rounded-full bg-red-700 hover:bg-red-800 transition duration-200">Clear</a>
                    </div>
                </div>
                <div class="w-full md:w-3/4 p-4 overflow-y-auto" style="height:1000px;">
                    <div id="product-list" class="flex flex-wrap -m-4 pb-10">
                        @foreach ($products as $item)
                            <div class="w-full lg:w-1/2 p-4">
                                <a href="#" class="group">
                                    <div class="relative overflow-hidden mb-4" style="height:400px;">
                                        @php
                                            $photo = $item->photos->first();
                                        @endphp
                                        <img class="object-cover w-full h-full transform group-hover:scale-105 transition duration-200"
                                            src="{{ $photo ? asset('storage/' . $photo->directory) : asset('images/default-product.jpg') }}" alt="">
                                    </div>
                                </a>
                                <div class="flex flex-wrap justify-between gap-4 mb-2">
                                    <h2 class="font-heading text-3xl">{{ $item->name }}</h2>
                                    @if ($item->discount > 0)
                                        <div>
                                            <p class="text-gray-500 text-sm font-semibold">Sale
                                                {{ $item->discount_type == 'percentage' ? $item->discount . '%' : 'Rp' . number_format($item->discount, 0, ',', '.') . ',00' }}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex flex-wrap justify-between">
                                    <div>
                                        @if ($item->discount > 0)
                                            <p class="text-red-700 text-2xl font-semibold mb-1">
                                                Rp{{ number_format($item->price_after_discount(), 0, ',', '.') }},00
                                            </p>
                                        @else
                                            <p class="text-red-700 text-2xl font-semibold mb-1">
                                                Rp{{ number_format($item->price, 0, ',', '.') }},00
                                            </p>
                                        @endif
                                        @if ($item->discount > 0)
                                            <p class="text-gray-500 text-sm line-through mb-2">
                                                Rp{{ number_format($item->price, 0, ',', '.') }},00
                                            </p>
                                        @endif
                                        <p class="text-gray-500 text-sm font-semibold">Tersisa {{ $item->stock }}</p>
                                    </div>
                                    <div>
                                        <form action="{{ route('cart.add', ['productId' => $item->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="text-white inline-block px-7 py-2 my-3 rounded-full transition duration-200 
                                                {{ $item->stock > 0 ? 'bg-orange-700 hover:bg-orange-800' : 'bg-gray-500 cursor-not-allowed' }}"
                                                {{ $item->stock > 0 ? '' : 'disabled' }}>
                                                {{ $item->stock > 0 ? 'Tambahkan ke keranjang' : 'Stok Habis' }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
        </form>
    </section>
@endsection
