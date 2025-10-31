@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-heart-pulse text-blue-700"></i>
                Gymkhana
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/gymkhana/gym1.jpg') }}" alt="Gymkhana 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/gymkhana/gym2.jpg') }}" alt="Gymkhana 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/gymkhana/gym3.jpg') }}" alt="Gymkhana 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <h3 class="text-xl font-semibold text-blue-900 mb-4 border-b pb-2">
                DATTAKALA Provides For Student Gymkhana Facility As Follows :
            </h3>

            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>Variety of Training</li>
                <li>High-Quality Exercise Equipment</li>
                <li>Thriving Community</li>
                <li>Well-Designed Space and Facility</li>
                <li>Personal Training Services</li>
                <li>Cleanliness and Maintenance</li>
            </ul>
        </main>
    </div>
@endsection
