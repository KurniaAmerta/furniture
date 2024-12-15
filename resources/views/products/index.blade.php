@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="pt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center gap-6 mb-16 px-4">
                <span class="font-semibold">Product Categories :</span>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="inline-block text-sm font-semibold">All</a>
                    @foreach ($categories as $item)
                        <a href="#"
                            class="inline-block text-gray-500 text-sm hover:text-gray-900 transition duration-200">
                            {{ $item->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/4 p-4">
                    <div class="border-l border-transparent md:border-gray-200 md:pl-6 pb-10 h-full">
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Dimensions</span>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M5.8333 11.175L9.4083 7.64164C9.48576 7.56353 9.57793 7.50154 9.67948 7.45923C9.78103 7.41692 9.88995 7.39514 9.99996 7.39514C10.11 7.39514 10.2189 7.41692 10.3204 7.45923C10.422 7.50154 10.5142 7.56353 10.5916 7.64164L14.125 11.175C14.2031 11.2524 14.2651 11.3446 14.3074 11.4462C14.3497 11.5477 14.3715 11.6566 14.3715 11.7666C14.3715 11.8766 14.3497 11.9856 14.3074 12.0871C14.2651 12.1887 14.2031 12.2808 14.125 12.3583C13.9688 12.5135 13.7576 12.6006 13.5375 12.6006C13.3173 12.6006 13.1061 12.5135 12.95 12.3583L9.99996 9.40831L7.04996 12.3583C6.89474 12.5123 6.68525 12.5991 6.46663 12.6C6.35696 12.6006 6.24824 12.5796 6.14671 12.5381C6.04518 12.4966 5.95283 12.4355 5.87496 12.3583C5.79407 12.2836 5.72877 12.1937 5.68285 12.0936C5.63693 11.9935 5.61129 11.8854 5.60741 11.7753C5.60354 11.6653 5.62151 11.5556 5.66028 11.4525C5.69905 11.3495 5.75785 11.2552 5.8333 11.175Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-4 mb-10">
                            <a href="#"
                                class="inline-block px-7 py-1 rounded-full bg-orange-700 hover:bg-orange-800 transition duration-200">Small</a>
                            <a href="#"
                                class="inline-block px-7 py-1 rounded-full bg-gray-100 hover:bg-gray-200 transition duration-200">Medium</a>
                            <a href="#"
                                class="inline-block px-7 py-1 rounded-full bg-gray-100 hover:bg-gray-200 transition duration-200">Larga</a>
                        </div>
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Color</span>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M5.8333 11.175L9.4083 7.64164C9.48576 7.56353 9.57793 7.50154 9.67948 7.45923C9.78103 7.41692 9.88995 7.39514 9.99996 7.39514C10.11 7.39514 10.2189 7.41692 10.3204 7.45923C10.422 7.50154 10.5142 7.56353 10.5916 7.64164L14.125 11.175C14.2031 11.2524 14.2651 11.3446 14.3074 11.4462C14.3497 11.5477 14.3715 11.6566 14.3715 11.7666C14.3715 11.8766 14.3497 11.9856 14.3074 12.0871C14.2651 12.1887 14.2031 12.2808 14.125 12.3583C13.9688 12.5135 13.7576 12.6006 13.5375 12.6006C13.3173 12.6006 13.1061 12.5135 12.95 12.3583L9.99996 9.40831L7.04996 12.3583C6.89474 12.5123 6.68525 12.5991 6.46663 12.6C6.35696 12.6006 6.24824 12.5796 6.14671 12.5381C6.04518 12.4966 5.95283 12.4355 5.87496 12.3583C5.79407 12.2836 5.72877 12.1937 5.68285 12.0936C5.63693 11.9935 5.61129 11.8854 5.60741 11.7753C5.60354 11.6653 5.62151 11.5556 5.66028 11.4525C5.69905 11.3495 5.75785 11.2552 5.8333 11.175Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-8 mb-10">
                            @foreach ($colors as $item)
                                <a href="#" class="inline-block rounded-md w-6 h-6 border" style="background-color: {{ $item->hex }};"></a>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-center flex-wrap gap-2 mb-6">
                            <span class="font-semibold">Brands</span>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M14.1667 8.82503L10.5917 12.3584C10.5142 12.4365 10.4221 12.4985 10.3205 12.5408C10.219 12.5831 10.11 12.6049 10 12.6049C9.89003 12.6049 9.78111 12.5831 9.67956 12.5408C9.57801 12.4985 9.48584 12.4365 9.40837 12.3584L5.87504 8.82503C5.79693 8.74756 5.73494 8.65539 5.69263 8.55384C5.65032 8.45229 5.62854 8.34337 5.62854 8.23336C5.62854 8.12335 5.65032 8.01443 5.69263 7.91288C5.73494 7.81133 5.79693 7.71916 5.87504 7.64169C6.03117 7.48648 6.24238 7.39937 6.46254 7.39937C6.68269 7.39937 6.8939 7.48648 7.05004 7.64169L10 10.5917L12.95 7.64169C13.1053 7.48774 13.3148 7.40095 13.5334 7.40003C13.643 7.39939 13.7518 7.42041 13.8533 7.46188C13.9548 7.50335 14.0472 7.56446 14.125 7.64169C14.2059 7.71637 14.2712 7.80635 14.3172 7.90641C14.3631 8.00647 14.3887 8.11464 14.3926 8.22467C14.3965 8.3347 14.3785 8.44441 14.3397 8.54745C14.301 8.6505 14.2421 8.74484 14.1667 8.82503Z"
                                        fill="#1E2238"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex flex-col gap-4">
                            @foreach ($brands as $item)
                                <label class="relative flex items-center max-w-max gap-2">
                                    <input class="custom-checkbox-1 opacity-0 absolute h-5 w-5" type="checkbox">
                                    <span
                                        class="border border-gray-900 bg-gray-50 w-5 h-5 flex justify-center items-center rounded-md">
                                        <svg class="fill-current hidden" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewbox="0 0 16 16" fill="none">
                                            <path
                                                d="M12.4736 4.80668C12.4117 4.7442 12.3379 4.6946 12.2567 4.66075C12.1754 4.62691 12.0883 4.60948 12.0003 4.60948C11.9123 4.60948 11.8252 4.62691 11.7439 4.66075C11.6627 4.6946 11.5889 4.7442 11.527 4.80668L6.5603 9.78001L4.47363 7.68668C4.40928 7.62452 4.33332 7.57565 4.25009 7.54284C4.16685 7.51004 4.07797 7.49395 3.98851 7.4955C3.89906 7.49705 3.81079 7.5162 3.72873 7.55186C3.64668 7.58753 3.57246 7.639 3.5103 7.70335C3.44814 7.7677 3.39926 7.84366 3.36646 7.92689C3.33366 8.01013 3.31757 8.09901 3.31912 8.18847C3.32067 8.27792 3.33982 8.36619 3.37548 8.44824C3.41114 8.5303 3.46262 8.60452 3.52696 8.66668L6.08696 11.2267C6.14894 11.2892 6.22267 11.3388 6.30391 11.3726C6.38515 11.4065 6.47229 11.4239 6.5603 11.4239C6.6483 11.4239 6.73544 11.4065 6.81668 11.3726C6.89792 11.3388 6.97166 11.2892 7.03363 11.2267L12.4736 5.78668C12.5413 5.72425 12.5953 5.64848 12.6322 5.56415C12.6692 5.47982 12.6883 5.38875 12.6883 5.29668C12.6883 5.20461 12.6692 5.11354 12.6322 5.02921C12.5953 4.94488 12.5413 4.86911 12.4736 4.80668Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm">{{ $item->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-3/4 p-4 overflow-y-auto" style="height:1000px;">
                    <div class="flex flex-wrap -m-4 pb-10">
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
                                        <p class="text-gray-500 text-sm font-semibold">Remaining {{ $item->stock }}</p>
                                    </div>
                                    <div>
                                        <form action="{{ route('cart.add', ['productId' => $item->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="inline-block px-7 py-2 my-3 rounded-full bg-orange-700 hover:bg-orange-800 transition duration-200">
                                                Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
