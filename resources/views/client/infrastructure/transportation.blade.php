@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-bus-front text-blue-700"></i>
                Transportation
            </h2>

            <!-- Image Section -->
            <div class="overflow-hidden rounded-lg shadow mb-6">
                <img src="{{ asset('assets/images/transport/transport1.jpg') }}" alt="College Transport"
                    class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    A full-fledged Transport department functions in the college with buses to provide transport facility to
                    students from various local places.
                    This service is offered ensuring a hassle-free and safe transportation.
                </li>
                <li>
                    The college runs 01 bus for providing transport facility to students from various places in the local
                    areas.
                </li>
            </ul>
        </main>

    </div>
@endsection
