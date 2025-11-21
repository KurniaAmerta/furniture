@props(['id', 'title' => '', 'content' => '', 'footer' => ''])

<div id="{{ $id }}" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 relative">
        <button onclick="closeModal('{{ $id }}')" class="top-3 right-3 text-gray-400 hover:text-red-500 text-5xl">&times;</button>
        <h2 class="mt-6 text-xl font-semibold mb-4">{{ $title }}</h2>
        @if ($id == "qris-example")
            <img src="{{ asset('img/qris.svg') }}" alt="">
        @else
            <div class="mb-4">
                {{ $content }}
            </div>
        @endif
    </div>
</div>
