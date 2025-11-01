@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
            College Infrastructure & Facilities
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ([['title' => 'Infrastructure', 'image' => 'asset/infrastructure/infrastructure.jpg'], ['title' => 'Experienced Teachers', 'image' => 'asset/infrastructure/teachers.jpg'], ['title' => 'Sports', 'image' => 'asset/infrastructure/sports.jpg'], ['title' => 'Reading Room', 'image' => 'asset/infrastructure/reading-room.jpg'], ['title' => 'Library', 'image' => 'asset/infrastructure/library.jpg'], ['title' => 'Computer Lab', 'image' => 'asset/infrastructure/computer-lab.jpg']] as $item)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-500">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <h3 class="text-white text-xl font-semibold mb-2">{{ $item['title'] }}</h3>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 flex items-center gap-2">
                            <i class="bi bi-eye"></i> View More
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Library Statistics Section -->
        <div class="mt-20 text-center">
            <h3 class="text-2xl font-semibold text-blue-900 mb-10">📚 Library Statistics</h3>
            <div class="grid md:grid-cols-3 gap-10">
                @foreach ([['number' => '5200', 'label' => 'Books'], ['number' => '15', 'label' => 'Journals'], ['number' => '150', 'label' => 'Sandharbh Granth']] as $stat)
                    <div
                        class="bg-blue-800 text-white rounded-full h-40 w-40 flex flex-col justify-center items-center mx-auto shadow-md hover:scale-105 transition">
                        <span class="text-3xl font-bold">{{ $stat['number'] }}</span>
                        <span class="text-sm uppercase mt-2 tracking-wider">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
