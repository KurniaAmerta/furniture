@extends('layouts.user')

@section('title', 'Login')

@section('content')
<div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-3xl font-semibold text-center text-gray-700">Login</h2>

            @if ($errors->any())
            <div class="p-4 mb-4 text-red-500 bg-red-100 border border-red-300 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required autofocus
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" />
            </div>

        </form>

        <div class="text-center">
            <span>Do not account?</span>
        </div>
        <div class="flex justify-center w-full">
            <button
                class="flex items-center px-6 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 rounded-lg shadow-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <span>Register!</span>
            </button>
        </div>
    </div>
</div>
@endsection
