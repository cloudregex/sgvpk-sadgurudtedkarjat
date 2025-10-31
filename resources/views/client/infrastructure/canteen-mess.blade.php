@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-cup-hot text-blue-700"></i>
                Mess Facilities
            </h2>

            <!-- Mess Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/mess1.jpg') }}" alt="Mess Facility 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/mess2.jpg') }}" alt="Mess Facility 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/mess3.jpg') }}" alt="Mess Facility 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-cup-straw text-blue-700"></i>
                Cafeteria Facilities
            </h2>

            <!-- Cafeteria Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/cafeteria1.jpg') }}" alt="Cafeteria 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/cafeteria2.jpg') }}" alt="Cafeteria 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/canteen-mess/cafeteria3.jpg') }}" alt="Cafeteria 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>Mess</li>
                <li>24/7 Water & Electricity</li>
                <li>Wi-Fi Internet</li>
                <li>Gutkha, tobacco, and alcohol strictly prohibited</li>
                <li>CCTV Surveillance in all canteens</li>
                <li>Four well-maintained cafeterias serving South & North Indian dishes, fruit juice, and soft drinks at
                    reasonable rates</li>
                <li>Subsidized cafeteria facilities located in a scenic, peaceful environment for relaxation</li>
                <li>Hygiene and cleanliness maintained daily</li>
                <li>All canteens are monitored under CCTV for safety</li>
            </ul>
        </main>
    </div>
@endsection
