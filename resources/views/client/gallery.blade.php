@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-10 space-y-12">

        <!-- Gallery Header -->
        <div class="flex items-center justify-between">
            <h2 class="text-3xl font-bold text-blue-700 flex items-center gap-2">
                <i class="bi bi-images"></i>
                Photo Gallery
            </h2>
            <button
                class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md transition">
                <i class="bi bi-cloud-upload"></i> Upload New
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach (['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300'] as $image)
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                    <img src="{{ $image }}" alt="Gallery Image"
                        class="w-full h-60 object-cover transform group-hover:scale-110 transition duration-500">

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
