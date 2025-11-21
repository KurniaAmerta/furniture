@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h2 class="mb-4 font-heading text-3xl text-gray-900">Histori pesanan</h2>
                <p class="text-sm text-gray-400 font-semibold">Periksa status pesanan terbaru, kelola pengembalian pesanan, dan temukan produk serupa.</p>
            </div>
            <div class="border border-gray-50 rounded-2xl">
                <div class="p-12">
                    @foreach ($orders as $item)
                        <div class="pb-14 mb-12 border-b border-gray-50">
                            <div class="flex flex-wrap -m-2 mb-6">
                                <div class="w-full md:flex-1 p-2">
                                    <div class="flex flex-wrap -m-3">
                                        <div class="w-full md:w-auto p-3">
                                            @php
                                                $firstProduct = $item->cart->cartItems->first()->product();
                                                $photo = $firstProduct->photos->first();
                                            @endphp
                                            <img class="rounded-2xl object-cover" style="height: 131px;"
                                                src="{{ $photo ? asset('storage/' . $photo->directory) : asset('images/default-product.jpg') }}" alt="">
                                        </div>
                                        <div class="w-full md:flex-1 p-3">
                                            @php
                                                $cart = $item->cart;
                                                $body = "Address: {$cart->address}, {$cart->city}, {$cart->zip_code}, {$cart->country_code}\n\n";

                                            @endphp
                                            <h2 class="mb-3 font-heading text-3xl text-gray-900">
                                                {{ $cart->cart_code }}</h2>
                                            <p class="text-gray-400">{{ $body }}</p>
                                            @php
                                                $body = "Items:\n";

                                            @endphp
                                            <p class="text-gray-400">{{ $body }}</p>
                                            @foreach ($cart->cartItems as $cartItem)
                                                @php
                                                    $product = $cartItem->product();
                                                @endphp
                                                @if ($product)
                                                    @php
                                                        $body =
                                                            "- {$product->name} (x{$cartItem->amount}): Rp" .
                                                            number_format($product->price_after_discount(), 2) .
                                                            " each\n";
                                                    @endphp
                                                    <p class="text-gray-400">{{ $body }}</p>
                                                @endif
                                            @endforeach
                                            @php
                                                $totalPrice = $cart->total_price();
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                                <div class="w-auto p-2">
                                    <p class="font-semibold text-green-900">
                                        Rp{{ number_format($totalPrice, 0, ',', '.') }},00</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center -m-2">
                                <div class="w-full md:w-1/2 p-2">
                                    <div class="flex items-center">
                                        <svg class="mr-2" width="20" height="20" viewbox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 19.6C15.302 19.6 19.6 15.302 19.6 10C19.6 4.69809 15.302 0.400024 10 0.400024C4.69809 0.400024 0.400024 4.69809 0.400024 10C0.400024 15.302 4.69809 19.6 10 19.6ZM14.4486 8.44855C14.9172 7.97992 14.9172 7.22013 14.4486 6.7515C13.9799 6.28287 13.2201 6.28287 12.7515 6.7515L8.80002 10.703L7.24855 9.1515C6.77992 8.68287 6.02013 8.68287 5.5515 9.1515C5.08287 9.62013 5.08287 10.3799 5.5515 10.8486L7.9515 13.2486C8.42013 13.7172 9.17992 13.7172 9.64855 13.2486L14.4486 8.44855Z"
                                                fill="#78B449"></path>
                                        </svg>
                                        @if ($item->status == 'delivery')
                                            <p class="text-sm text-gray-400">{{ $item->shipping_code }} {{ $item->shipping_companny }} {{ $item->status }} on {{ $item->updated_at }}</p>
                                        @else
                                            <p class="text-sm text-gray-400">{{ $item->status }} on {{ $item->updated_at }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 p-2">
                                    <div class="flex flex-wrap md:justify-end -m-2">
                                        <div class="p-2">
                                            <a href="{{ route('products') }}"
                                                class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">View
                                                product</a>
                                        </div>
                                        <div class="p-2">
                                            @if ($item->status != 'success')
                                                <button type="button" onclick="openModal('modal-example')" class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Transfer Payment</button>
                                                <button type="button" onclick="openModal('qris-example')" class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Transfer QRIS</button>
                                                <a href="{{ route('order.email', $item->id) }}"
                                                    class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Send
                                                    Email</a>
                                                <a href="{{ route('order.whatsapp', $item->id) }}"
                                                    class="bg-gray-50 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-gray-900 text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">Send
                                                    WhatsApp</a>
                                            @endif
                                        </div>
                                        <div class="p-2">
                                            @if ($item->status != 'success')
                                                <form action="{{ route('order.success', $item->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf <!-- Include CSRF token -->
                                                    <button type="submit"
                                                        class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-4 h-9 inline-flex items-center transition duration-200">
                                                        Finish Purchase
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @php
            $footer = '<button onclick="closeModal(\'modal-example\')" class="bg-blue-500 text-white px-4 py-2 rounded">Tutup</button>';
            $footerQris = '<button onclick="closeModal(\'qris-example\')" class="bg-blue-500 text-white px-4 py-2 rounded">Tutup</button>';
        @endphp

        <x-modal 
            id="modal-example"
            title="Transfer Bank BCA"
            content="Sri indah yati - 0222377453"
            :footer="$footer"
        />

        <x-modal 
            id="qris-example"
            title="QRIS"
            content=""
            :footer="$footerQris"
        />
    </section>
@endsection
