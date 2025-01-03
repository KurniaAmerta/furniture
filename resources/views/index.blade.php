@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/2 p-4">
                    <div class="group relative overflow-hidden rounded-2xl" style="height: 569px;">
                        <div class="absolute z-10 bottom-0 left-0 p-6">
                            <h3 class="font-heading text-6xl text-white">Discover the Latest Trends</h3>
                        </div>
                        <img class="absolute w-full h-full transform group-hover:scale-105 rounded-2xl object-cover transition duration-200"
                            src="https://images.unsplash.com/photo-1620315598506-d8a62871ce94?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMzIzMzB8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MjQ0NjY5OTZ8&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920"
                            alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <div class="p-8 flex flex-col justify-between h-full border border-gray-100 rounded-2xl">
                        <div class="w-full mb-16">
                            <h3 class="mb-4 font-heading text-6xl text-gray-900">Upgrade Gaya Anda dengan Koleksi Eksklusif Kami
                                Designs</h3>
                            <p class="text-lg text-gray-900 font-semibold">Jelajahi Tren Fashion dari Panggung Mode hingga Gaya Jalanan
                                Style</p>
                        </div>
                        <div class="w-full">
                            <a href="{{ route('products') }}"
                                class="bg-green-900 rounded-full hover:bg-green-800 focus:ring-4 focus:ring-gray-200 text-sm text-white font-semibold px-8 h-12 inline-flex items-center transition duration-200">Jelajahi Koleksi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-10">
            <div class="flex flex-wrap -m-4">
                <div class="w-full lg:w-7/12 p-4">
                    <div class="rounded-2xl border border-gray-200 p-8 mb-4">
                        <h2 class="font-heading text-6xl md:text-8xl uppercase mb-20 max-w-2xl">Temukan Gaya Modis untuk Setiap Kesempatan</h2>
                        <p class="text-gray-500 text-lg font-semibold mb-6 max-w-lg">Temukan Beragam Pilihan Fashion, Termasuk Pakaian, Sepatu, Aksesori, dan Lainnya</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-8 h-12 transition duration-200">
                            <span>Belanja Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M15.5402 11.29L9.88023 5.64004C9.78726 5.54631 9.67666 5.47191 9.5548 5.42115C9.43294 5.37038 9.30224 5.34424 9.17023 5.34424C9.03821 5.34424 8.90751 5.37038 8.78565 5.42115C8.66379 5.47191 8.55319 5.54631 8.46023 5.64004C8.27398 5.8274 8.16943 6.08085 8.16943 6.34504C8.16943 6.60922 8.27398 6.86267 8.46023 7.05004L13.4102 12.05L8.46023 17C8.27398 17.1874 8.16943 17.4409 8.16943 17.705C8.16943 17.9692 8.27398 18.2227 8.46023 18.41C8.55284 18.5045 8.66329 18.5797 8.78516 18.6312C8.90704 18.6827 9.03792 18.7095 9.17023 18.71C9.30253 18.7095 9.43342 18.6827 9.55529 18.6312C9.67717 18.5797 9.78761 18.5045 9.88023 18.41L15.5402 12.76C15.6417 12.6664 15.7227 12.5527 15.7781 12.4262C15.8336 12.2997 15.8622 12.1631 15.8622 12.025C15.8622 11.8869 15.8336 11.7503 15.7781 11.6238C15.7227 11.4973 15.6417 11.3837 15.5402 11.29Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="w-full lg:w-1/2 p-4">
                            <a href="#" class="group">
                                <div class="relative overflow-hidden rounded-2xl mb-4" style="height:260px;">
                                    <img class="absolute inset-0 rounded-2xl w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                        src="https://images.unsplash.com/photo-1603376728541-6e1906a300e6?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMzIzMzB8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MjQ0NjY5OTZ8&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920"
                                        alt="">
                                    <div class="absolute top-4 left-4">
                                        <p class="font-semibold text-gray-500 max-w-xs">15 Produk -
                                            Tersedia</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="w-full lg:w-1/2 p-4">
                            <a href="#" class="group">
                                <div class="relative overflow-hidden rounded-2xl mb-4" style="height:260px;">
                                    <img class="absolute inset-0 rounded-2xl w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                        src="https://images.unsplash.com/photo-1506898667547-42e22a46e125?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMzIzMzB8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MjQ0NjY5OTZ8&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920"
                                        alt="">
                                    <div class="absolute top-4 left-4">
                                        <p class="font-semibold text-gray-500 max-w-xs">15 Produk -
                                            Tersedia</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-5/12 p-4">
                    <a href="#" class="group">
                        <div class="relative overflow-hidden rounded-2xl" style="height:745px;">
                            <img class="absolute inset-0 rounded-2xl w-full h-full object-cover transform group-hover:scale-105 transition duration-200"
                                src="https://images.unsplash.com/photo-1511974212900-b42a18e19eb8?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMzIzMzB8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MjQ0NjY5OTZ8&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920"
                                alt="">
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white rounded-2xl p-6">
                                    <h2 class="font-heading text-5xl md:text-7xl mb-2 max-w-md md:max-w-lg">Inspirasi Gaya dan Fashion"</h2>
                                    <p class="text-gray-500 text-lg font-semibold max-w-md">Jelajahi Gaya Terbaru dari Desainer dan Merek Ternama, Dipilih Secara Khusus oleh Ahli Fashion Kami</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <p class="text-2xl font-semibold text-white max-w-xs">15 Produk -
                                    Tersedia</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
