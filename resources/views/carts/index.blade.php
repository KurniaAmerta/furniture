@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="pt-16 pb-20 px-8 md:px-16">
        <div class="flex flex-wrap gap-2 mb-4">
            <a href="{{ route('carts') }}" class="group">
                <div class="flex flex-wrap items-center">
                    <span class="font-semibold text-xs group-hover:text-gray-900 transition duration-200">Keranjang</span>
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
                    <span class="text-xs text-gray-500 group-hover:text-gray-900 transition duration-200">Checkout</span>
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
            <a href="{{ route('payment') }}" class="group">
                <div class="flex flex-wrap items-center">
                    <span class="text-xs text-gray-500 group-hover:text-gray-900 transition duration-200">Pembayaran</span>
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
        </div>
        <h1 class="font-heading uppercase text-5xl mb-10">Keranjang Belanja</h1>
        <div class="flex flex-wrap items-center -m-4">
            <div class="w-full lg:w-1/2 xl:w-2/3 p-4">
                <div class="overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap pb-4 border-b border-gray-200 text-left">
                                        <label class="relative flex items-center gap-2">
                                            <span class="font-heading uppercase text-3xl font-normal">PRODUK</span>
                                        </label>
                                    </th>
                                    <th
                                        class="whitespace-nowrap pb-4 border-b border-gray-200 text-center font-heading uppercase text-3xl font-normal">
                                        Kuantitas</th>
                                    <th
                                        class="whitespace-nowrap pb-4 border-b border-gray-200 text-right font-heading uppercase text-3xl font-normal">
                                        Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($cartItems as $item)
                                    @php
                                        $total += $item->product()->price_after_discount() * $item->amount;
                                    @endphp

                                    <tr>
                                        <td class="py-4 border-b border-gray-200 flex items-center gap-6 h-40 pr-24">
                                            @php
                                                $photo = $item->product()->photos->first();
                                            @endphp
                                            <img class="rounded-2xl object-cover" style="height:130px;"
                                                src="{{ $photo ? asset('storage/' . $photo->directory) : asset('images/default-product.jpg') }}" alt="">
                                            <div>
                                                <p class="text-xl font-semibold mb-2">{{ $item->product()->name }}</p>
                                                <div class="flex items-center gap-2">
                                                    <p class="text-gray-500 text-xl">
                                                        {{ Str::title($item->product()->color()->name) }}
                                                    </p>
                                                    <div class="w-px h-4 bg-gray-500"></div>
                                                    <p class="text-gray-500 text-xl">
                                                        {{ Str::title($item->product()->dimension) }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 border-b border-gray-200 h-40 px-24">
                                            <div class="flex items-center justify-center gap-4 mb-2">
                                                <a href="{{ route('cart.decrease', $item->id) }}"
                                                    class="hover:text-opacity-80 transition duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                        viewbox="0 0 24 25" fill="none">
                                                        <path
                                                            d="M11.29 12.4999L14.83 8.95995C15.0163 8.77259 15.1208 8.51913 15.1208 8.25495C15.1208 7.99076 15.0163 7.73731 14.83 7.54995C14.737 7.45622 14.6264 7.38183 14.5046 7.33106C14.3827 7.28029 14.252 7.25415 14.12 7.25415C13.988 7.25415 13.8573 7.28029 13.7354 7.33106C13.6136 7.38183 13.503 7.45622 13.41 7.54995L9.17 11.7899C9.07628 11.8829 9.00188 11.9935 8.95111 12.1154C8.90035 12.2372 8.87421 12.3679 8.87421 12.4999C8.87421 12.632 8.90035 12.7627 8.95111 12.8845C9.00188 13.0064 9.07628 13.117 9.17 13.2099L13.41 17.4999C13.5034 17.5926 13.6143 17.666 13.7361 17.7157C13.8579 17.7655 13.9884 17.7907 14.12 17.7899C14.2516 17.7907 14.3821 17.7655 14.5039 17.7157C14.6257 17.666 14.7366 17.5926 14.83 17.4999C15.0163 17.3126 15.1208 17.0591 15.1208 16.7949C15.1208 16.5308 15.0163 16.2773 14.83 16.0899L11.29 12.4999Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-xl font-semibold">{{ $item->amount }}</span>
                                                <a href="{{ route('cart.increase', $item->id) }}"
                                                    class="hover:text-opacity-80 transition duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                        viewbox="0 0 24 25" fill="none">
                                                        <path
                                                            d="M15.54 11.79L9.88001 6.14004C9.78705 6.04631 9.67645 5.97191 9.55459 5.92115C9.43273 5.87038 9.30202 5.84424 9.17001 5.84424C9.038 5.84424 8.90729 5.87038 8.78544 5.92115C8.66358 5.97191 8.55298 6.04631 8.46001 6.14004C8.27376 6.3274 8.16922 6.58085 8.16922 6.84504C8.16922 7.10922 8.27376 7.36267 8.46001 7.55004L13.41 12.55L8.46001 17.5C8.27376 17.6874 8.16922 17.9409 8.16922 18.205C8.16922 18.4692 8.27376 18.7227 8.46001 18.91C8.55263 19.0045 8.66307 19.0797 8.78495 19.1312C8.90682 19.1827 9.03771 19.2095 9.17001 19.21C9.30232 19.2095 9.4332 19.1827 9.55508 19.1312C9.67695 19.0797 9.7874 19.0045 9.88001 18.91L15.54 13.26C15.6415 13.1664 15.7225 13.0527 15.7779 12.9262C15.8333 12.7997 15.8619 12.6631 15.8619 12.525C15.8619 12.3869 15.8333 12.2503 15.7779 12.1238C15.7225 11.9973 15.6415 11.8837 15.54 11.79Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="flex justify-center">
                                                <a href="#" class="inline-block group">
                                                    <div class="flex items-center gap-1">
                                                        <div
                                                            class="text-red-700 group-hover:text-red-800 transition duration-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M10 18C10.2652 18 10.5196 17.8946 10.7071 17.7071C10.8946 17.5196 11 17.2652 11 17V11C11 10.7348 10.8946 10.4804 10.7071 10.2929C10.5196 10.1054 10.2652 10 10 10C9.73478 10 9.48043 10.1054 9.29289 10.2929C9.10536 10.4804 9 10.7348 9 11V17C9 17.2652 9.10536 17.5196 9.29289 17.7071C9.48043 17.8946 9.73478 18 10 18ZM20 6H16V5C16 4.20435 15.6839 3.44129 15.1213 2.87868C14.5587 2.31607 13.7956 2 13 2H11C10.2044 2 9.44129 2.31607 8.87868 2.87868C8.31607 3.44129 8 4.20435 8 5V6H4C3.73478 6 3.48043 6.10536 3.29289 6.29289C3.10536 6.48043 3 6.73478 3 7C3 7.26522 3.10536 7.51957 3.29289 7.70711C3.48043 7.89464 3.73478 8 4 8H5V19C5 19.7956 5.31607 20.5587 5.87868 21.1213C6.44129 21.6839 7.20435 22 8 22H16C16.7956 22 17.5587 21.6839 18.1213 21.1213C18.6839 20.5587 19 19.7956 19 19V8H20C20.2652 8 20.5196 7.89464 20.7071 7.70711C20.8946 7.51957 21 7.26522 21 7C21 6.73478 20.8946 6.48043 20.7071 6.29289C20.5196 6.10536 20.2652 6 20 6ZM10 5C10 4.73478 10.1054 4.48043 10.2929 4.29289C10.4804 4.10536 10.7348 4 11 4H13C13.2652 4 13.5196 4.10536 13.7071 4.29289C13.8946 4.48043 14 4.73478 14 5V6H10V5ZM17 19C17 19.2652 16.8946 19.5196 16.7071 19.7071C16.5196 19.8946 16.2652 20 16 20H8C7.73478 20 7.48043 19.8946 7.29289 19.7071C7.10536 19.5196 7 19.2652 7 19V8H17V19ZM14 18C14.2652 18 14.5196 17.8946 14.7071 17.7071C14.8946 17.5196 15 17.2652 15 17V11C15 10.7348 14.8946 10.4804 14.7071 10.2929C14.5196 10.1054 14.2652 10 14 10C13.7348 10 13.4804 10.1054 13.2929 10.2929C13.1054 10.4804 13 10.7348 13 11V17C13 17.2652 13.1054 17.5196 13.2929 17.7071C13.4804 17.8946 13.7348 18 14 18Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                        <a href="{{ route('cart.remove', $item->id) }}"
                                                            class="group-hover:text-red-800 transition duration-200">
                                                            <span class="text-red-700 text-xl">Remove</span>
                                                        </a>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="border-b border-gray-200 py-4 pl-12 h-40">
                                            <p class="text-xl font-semibold text-right">
                                                Rp{{ number_format($item->product()->price_after_discount(), 0, ',', '.') }},00
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-1/3 p-4">
                <div class="border border-gray-200 rounded-2xl py-10 px-6">
                    <h3 class="font-heading uppercase mb-6 text-3xl">Ringkasan Pesanan</h3>
                    <div class="flex justify-between flex-wrap mb-4">
                        <p class="text-xl font-semibold">Total Keseluruhan</p>
                        <p class="font-semibold text-lg">
                            Rp{{ number_format($cart == null ? 0 : $total, 0, ',', '.') }},00</p>
                    </div>
                    @if ($cart != null)
                        <a href="{{ route('checkouts') }}"
                            class="bg-gray-900 rounded-full w-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 h-12 px-4 py-3 text-sm font-semibold text-white inline-flex items-center justify-center transition duration-200">
                            Checkout
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
