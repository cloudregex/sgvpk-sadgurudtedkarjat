@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-car-front text-blue-700"></i>
                Parking
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/parking/img1.jpg') }}" alt="Parking Area 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/parking/img2.jpg') }}" alt="Parking Area 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/parking/img3.jpg') }}" alt="Parking Area 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    Visitors and guests will receive parking instructions from the security staff members upon their
                    arrival.
                </li>
                <li>
                    Dedicated parking spots are available for both two-wheelers and four-wheelers, ensuring organized and
                    safe vehicle management.
                </li>
                <li>
                    Visitors/guests must obtain a parking permit from the executive assistant before entering the premises.
                </li>
                <li>
                    Parking spaces are allotted on a <strong>first-come, first-served</strong> basis to ensure fair access
                    for all.
                </li>
                <li>
                    Permanent employees may apply for regular parking permits through the administration or transportation
                    department.
                </li>
            </ul>
        </main>

    </div>
@endsection
