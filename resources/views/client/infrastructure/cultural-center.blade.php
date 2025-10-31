@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-people-fill text-blue-700"></i>
                Cultural Center
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img1.jpg') }}" alt="Cultural Event 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img2.jpg') }}" alt="Cultural Event 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img3.jpg') }}" alt="Cultural Event 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img4.jpg') }}" alt="Cultural Event 4"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img5.jpg') }}" alt="Cultural Event 5"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/cultural-center/img6.jpg') }}" alt="Cultural Event 6"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    The Cultural Center serves as a vibrant hub for creativity, talent, and tradition — offering students an
                    opportunity
                    to express themselves through dance, drama, music, and art.
                </li>
                <li>
                    Every year, the institute hosts various cultural programs, annual gatherings, and traditional
                    celebrations
                    that foster team spirit and unity among students.
                </li>
                <li>
                    The center encourages participation in inter-college cultural competitions and state-level events,
                    enhancing confidence and leadership skills.
                </li>
                <li>
                    Festivals such as <strong>Ganesh Utsav, Independence Day, Republic Day, and Annual Cultural
                        Fest</strong>
                    are celebrated with great enthusiasm and student involvement.
                </li>
                <li>
                    The Cultural Center reflects our commitment to holistic education — nurturing both academic excellence
                    and artistic growth.
                </li>
            </ul>
        </main>
    </div>
@endsection
