@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b-2 border-blue-300 pb-2 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7h18M5 7V5a2 2 0 012-2h10a2 2 0 012 2v2m-2 0v12a2 2 0 01-2 2H9a2 2 0 01-2-2V7" />
                </svg>
                Shops
            </h2>

            <!-- Description -->
            <p class="text-gray-700 mb-4 leading-relaxed">
                The college campus provides well-maintained shops for the convenience of students and staff.
                These include stationary, printing, and general stores that cater to daily academic and personal needs.
            </p>
            <p class="text-gray-700 mb-4 leading-relaxed">
                All shops are situated within the campus premises ensuring easy access.
                Students can purchase notebooks, pens, files, and other materials required for studies without leaving the
                campus.
            </p>
            <p class="text-gray-700 mb-6 leading-relaxed">
                The campus also has a photocopy and printing facility to support students with their project reports and
                assignments.
                Clean surroundings and proper waste management are maintained to ensure a pleasant environment.
            </p>

            <!-- Images Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="rounded-lg overflow-hidden shadow">
                    <img src="images/shops1.jpg" alt="College Shops"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="rounded-lg overflow-hidden shadow">
                    <img src="images/shops2.jpg" alt="Stationery Store"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="rounded-lg overflow-hidden shadow">
                    <img src="images/shops3.jpg" alt="Printing Shop"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </main>

    </div>
@endsection
