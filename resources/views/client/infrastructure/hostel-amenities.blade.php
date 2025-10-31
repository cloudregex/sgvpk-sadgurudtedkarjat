@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-building text-blue-700"></i>
                Hostel Facilities
            </h2>

            <!-- Facilities List -->
            <ul class="list-disc pl-6 grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-2 text-gray-800 mb-8">
                <li>Mess</li>
                <li>Study Room</li>
                <li>24/7 Water & Electricity</li>
                <li>Play Ground</li>
                <li>Generator Facility</li>
                <li>Ample Parking Area</li>
                <li>Wi-Fi Internet</li>
                <li>Smoking, Tobacco & Alcohol Strictly Prohibited</li>
            </ul>

            <!-- Boy's Hostel Section -->
            <h3 class="text-xl font-semibold text-blue-800 mb-3">Boy's Hostel:</h3>
            <div class="overflow-hidden rounded-lg shadow mb-4">
                <img src="{{ asset('assets/images/hostel/boys-hostel.jpg') }}" alt="Boy's Hostel"
                    class="w-full h-72 object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <p class="text-gray-700 leading-relaxed mb-8">
                Taking a brief view of the boys' hostel — it consists of 36 rooms in all, with 12 rooms on each floor
                accommodating
                2 students each. Hostel rooms are well-equipped with modern furniture. There is 1 T.V. room and one water
                cooler
                apart from this. The boys' hostel is also provided with facilities like Wi-Fi, 24-hour electricity,
                mineralized water, cameras, solar heaters, fire and room huge playground.
            </p>

            <!-- Girl's Hostel Section -->
            <h3 class="text-xl font-semibold text-blue-800 mb-3">Girl's Hostel:</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="overflow-hidden rounded-lg shadow">
                    <img src="{{ asset('assets/images/hostel/girls-hostel1.jpg') }}" alt="Girl's Hostel Common Room"
                        class="w-full h-60 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow">
                    <img src="{{ asset('assets/images/hostel/girls-hostel2.jpg') }}" alt="Girl's Hostel Room"
                        class="w-full h-60 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
            <p class="text-gray-700 leading-relaxed">
                Even the girls' hostel has 26 rooms accommodating 2 students each, one reading room and a water cooler,
                including all other facilities like Wi-Fi, 24-hour electricity, mineralized water, cameras, solar heaters,
                fire and iron. The playground too has a well-maintained area and has all facilities available for girls.
                The girls' hostel has a well-maintained boarder system for better discipline.
                Smoking & drinking is restricted.
                Ample space is given for the students’ mobility inside the campus.
                Both hostels are equipped with a new fire and smoke alarm system for safety.
            </p>
        </main>
    </div>
@endsection
