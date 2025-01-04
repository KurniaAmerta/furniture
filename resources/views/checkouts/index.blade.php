@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="pt-9 pb-16">
        <form action="{{ route('checkoutCart') }}" method="POST">
            @csrf
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center gap-2 mb-14">
                    <a href="{{ route('carts') }}" class="group">
                        <div class="flex flex-wrap items-center">
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition duration-200">Keranjang</span>
                            <div class="text-gray-500 group-hover:text-gray-900 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M12.9465 9.40832L8.22986 4.69999C8.15239 4.62188 8.06022 4.55989 7.95867 4.51758C7.85712 4.47527 7.7482 4.45349 7.63819 4.45349C7.52818 4.45349 7.41926 4.47527 7.31771 4.51758C7.21616 4.55989 7.124 4.62188 7.04653 4.69999C6.89132 4.85613 6.8042 5.06734 6.8042 5.28749C6.8042 5.50764 6.89132 5.71885 7.04653 5.87499L11.1715 10.0417L7.04653 14.1667C6.89132 14.3228 6.8042 14.534 6.8042 14.7542C6.8042 14.9743 6.89132 15.1855 7.04653 15.3417C7.12371 15.4204 7.21574 15.483 7.31731 15.526C7.41887 15.5689 7.52794 15.5912 7.63819 15.5917C7.74845 15.5912 7.85752 15.5689 7.95908 15.526C8.06064 15.483 8.15268 15.4204 8.22986 15.3417L12.9465 10.6333C13.0311 10.5553 13.0986 10.4606 13.1448 10.3552C13.191 10.2497 13.2148 10.1359 13.2148 10.0208C13.2148 9.90574 13.191 9.7919 13.1448 9.68648C13.0986 9.58107 13.0311 9.48636 12.9465 9.40832Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('checkouts') }}" class="group">
                        <div class="flex flex-wrap items-center">
                            <span class="text-xs text-gray-900 transition duration-200 font-semibold">Checkout</span>
                            <div class="text-gray-500 group-hover:text-gray-900 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M12.9465 9.40832L8.22986 4.69999C8.15239 4.62188 8.06022 4.55989 7.95867 4.51758C7.85712 4.47527 7.7482 4.45349 7.63819 4.45349C7.52818 4.45349 7.41926 4.47527 7.31771 4.51758C7.21616 4.55989 7.124 4.62188 7.04653 4.69999C6.89132 4.85613 6.8042 5.06734 6.8042 5.28749C6.8042 5.50764 6.89132 5.71885 7.04653 5.87499L11.1715 10.0417L7.04653 14.1667C6.89132 14.3228 6.8042 14.534 6.8042 14.7542C6.8042 14.9743 6.89132 15.1855 7.04653 15.3417C7.12371 15.4204 7.21574 15.483 7.31731 15.526C7.41887 15.5689 7.52794 15.5912 7.63819 15.5917C7.74845 15.5912 7.85752 15.5689 7.95908 15.526C8.06064 15.483 8.15268 15.4204 8.22986 15.3417L12.9465 10.6333C13.0311 10.5553 13.0986 10.4606 13.1448 10.3552C13.191 10.2497 13.2148 10.1359 13.2148 10.0208C13.2148 9.90574 13.191 9.7919 13.1448 9.68648C13.0986 9.58107 13.0311 9.48636 12.9465 9.40832Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('payment') }}"
                        class="text-xs text-gray-500 hover:text-gray-900 transition duration-200">Pembayaran</a>
                </div>
                <div class="flex flex-wrap -m-8 xl:-m-16">
                    <div class="w-full md:w-7/12 p-8 xl:p-16">

                        <h6 class="mb-4 text-lg font-semibold">1. Pilih negara pengiriman</h6>
                        <div class="relative mb-8">
                            <select name="country_code" id="select-01-2"
                                class="appearance-none block py-3 px-4 w-full text-sm text-gray-500 placeholder-gray-500 outline-none border border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200">
                                <option value="" selected disabled hidden="">Select country</option>
                                @foreach ($countries as $code => $name)
                                    <option value="{{ $code }}"
                                        {{ $code == $cart->country_code ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @endforeach
                            </select>
                            <svg class="absolute top-1/2 right-5 transform -translate-y-1/2" width="12" height="8"
                                viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0002 1.16994C10.8128 0.983692 10.5594 0.87915 10.2952 0.87915C10.031 0.87915 9.77756 0.983692 9.59019 1.16994L6.00019 4.70994L2.46019 1.16994C2.27283 0.983692 2.01938 0.87915 1.75519 0.87915C1.49101 0.87915 1.23756 0.983692 1.05019 1.16994C0.956464 1.26291 0.88207 1.37351 0.831301 1.49537C0.780533 1.61723 0.754395 1.74793 0.754395 1.87994C0.754395 2.01195 0.780533 2.14266 0.831301 2.26452C0.88207 2.38638 0.956464 2.49698 1.05019 2.58994L5.29019 6.82994C5.38316 6.92367 5.49376 6.99806 5.61562 7.04883C5.73747 7.0996 5.86818 7.12574 6.00019 7.12574C6.1322 7.12574 6.26291 7.0996 6.38477 7.04883C6.50663 6.99806 6.61723 6.92367 6.71019 6.82994L11.0002 2.58994C11.0939 2.49698 11.1683 2.38638 11.2191 2.26452C11.2699 2.14266 11.296 2.01195 11.296 1.87994C11.296 1.74793 11.2699 1.61723 11.2191 1.49537C11.1683 1.37351 11.0939 1.26291 11.0002 1.16994Z"
                                    fill="#787A88"></path>
                            </svg>
                        </div>
                        <h6 class="mb-8 text-lg font-semibold">2. Alamat pengiriman</h6>
                        <div class="flex flex-wrap -m-4 mb-2">
                            <div class="w-full p-4">
                                <div>
                                    <label for="input-07-1" class="mb-1.5 inline-block text-sm font-semibold">Nama</label>
                                    <input id="input-07-1" name="name" type="text" value="{{ $user->name }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your name" disabled>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-4">
                                <div class="mb-6">
                                    <label for="input-02-2" class="mb-1.5 inline-block text-sm font-semibold">Email</label>
                                    <input id="input-02-2" name="email" type="text" value="{{ $user->email }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your email" disabled>
                                </div>
                                <div>
                                    <label for="input-02-3" class="mb-1.5 inline-block text-sm font-semibold">Kota</label>
                                    <input id="input-02-3" name="city" type="text" value="{{ $cart->city }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your city">
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-4">
                                <div class="mb-6">
                                    <label for="input-05-1" class="mb-1.5 inline-block text-sm font-semibold">Telpon
                                        number</label>
                                    <input id="input-05-1" name="phone" type="text" value="{{ $cart->phone }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your phone">
                                </div>
                                <div>
                                    <label for="input-06-1" class="mb-1.5 inline-block text-sm font-semibold">Kode pos</label>
                                    <input id="input-06-1" name="zip-code" type="text" value="{{ $cart->zip_code }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your ZIP code">
                                </div>
                            </div>
                            <div class="w-full p-4">
                                <div>
                                    <label for="input-07-1"
                                        class="mb-1.5 inline-block text-sm font-semibold">Alamat</label>
                                    <input id="input-07-1" name="address" type="text" value="{{ $cart->address }}"
                                        class="py-3 px-4 w-full text-sm placeholder-gray-500 outline-none border border-gray-100 focus:border-gray-300 focus:ring focus:ring-gray-100 rounded-md transition duration-200"
                                        placeholder="Enter your address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-5/12 p-8 xl:p-16">
                        <h6 class="mb-4 text-lg font-semibold">Alamat Penagihan</h6>
                        @php
                            $totalPrice = 0;
                        @endphp
                        @foreach ($cartItems as $item)
                            @php
                                $product = $item->product();
                                $totalPrice += $product->price_after_discount();
                            @endphp
                            <div class="pb-6 border-b border-dashed border-gray-300">
                                <div class="flex flex-wrap -m-2 mb-2">
                                    <div class="w-full md:w-3/4 p-2">
                                        <div class="flex flex-wrap -m-2">
                                            <div class="w-auto p-2">
                                                <img class="w-24 h-24 object-cover rounded-lg"
                                                    src="{{ asset('img/furnitures/table.jpg') }}" alt="">
                                            </div>
                                            <div class="flex-1 p-2">
                                                <p class="mb-1.5">{{ $product->name }}</p>
                                                <p class="mb-1.5">{{ $product->color()->name }}</p>
                                                <p>x{{ $item->amount }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/4 p-2">
                                        <p class="flex justify-end font-semibold">Rp{{ number_format($product->price_after_discount(), 0, ',', '.') }},00</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pt-2.5 mb-9">
                            <div class="flex flex-wrap items-center justify-between -m-2">
                                <div class="w-auto p-2">
                                    <p class="font-semibold">Total keseluruhan</p>
                                </div>
                                <div class="w-auto p-2">
                                    <p class="text-2xl font-semibold">Rp{{ number_format($totalPrice, 0, ',', '.') }},00</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="py-3 px-7 w-full text-sm text-white font-semibold bg-gray-900 hover:bg-gray-800 focus:bg-gray-800 focus:ring-4 focus:ring-gray-200 rounded-4xl transition duration-300">Lanjutkan ke pembayaran</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
