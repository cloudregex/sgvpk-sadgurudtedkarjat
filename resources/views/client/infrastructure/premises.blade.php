@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-building text-blue-700"></i>
                Premises
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img1.jpg') }}" alt="Premises 1"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img2.jpg') }}" alt="Premises 2"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img3.jpg') }}" alt="Premises 3"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img4.jpg') }}" alt="Premises 4"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img5.jpg') }}" alt="Premises 5"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/premises/img6.jpg') }}" alt="Premises 6"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </main>
    </div>
@endsection
