@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')


        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-trophy text-blue-700"></i>
                Sports Ground
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img1.jpg') }}" alt="Sports Ground 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img2.jpg') }}" alt="Sports Ground 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img3.jpg') }}" alt="Sports Ground 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img4.jpg') }}" alt="Sports Ground 4"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img5.jpg') }}" alt="Sports Ground 5"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img6.jpg') }}" alt="Sports Ground 6"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img7.jpg') }}" alt="Sports Ground 7"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img8.jpg') }}" alt="Sports Ground 8"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/sports-ground/img9.jpg') }}" alt="Sports Ground 9"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    The institute provides a spacious <strong>Sports Ground</strong> equipped for outdoor games such as
                    <strong>Volleyball, Kabaddi, Cricket, and Athletics</strong>.
                </li>
                <li>
                    Regular sports activities and tournaments are conducted to encourage teamwork, discipline, and physical
                    fitness
                    among students.
                </li>
                <li>
                    The sports ground also serves as a venue for annual sports meets and inter-college competitions.
                </li>
                <li>
                    Coaches and faculty members actively guide students to participate at <strong>District, State, and
                        National</strong>
                    level events.
                </li>
                <li>
                    Sports and physical training are integral parts of our educational philosophy, promoting a healthy body
                    and mind.
                </li>
            </ul>
        </main>
    </div>
@endsection
