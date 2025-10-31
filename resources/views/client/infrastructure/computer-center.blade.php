@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-pc-display-horizontal text-blue-700"></i>
                Computer Center
            </h2>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    The Central Computer Centre is running under the aegis of Department of Computer Science and Engineering
                    to provide facilities and support in terms of Computers, Networks and Information Systems to whole of
                    the Institute.
                </li>
                <li>
                    The Computer Center is providing centralized computing facilities to the whole college beyond the
                    college hours.
                    It is operational from 8.30 A.M. to 6.30 P.M.
                </li>
                <li>
                    On week days and from 8.30 A.M. to 4.30 P.M. on Saturday and Sunday.
                    Students and staff from all the branches use the Computer Center facilities for Internet surfing and
                    academic work.
                </li>
                <li>
                    The Computer Center is equipped with 1000 Mbps (1:1 pure) Leased Line Internet Connectivity which
                    provides
                    Internet facilities to the whole college.
                </li>
                <li>
                    Computer Centre also hosts and maintains a portal for interaction with college's alumni.
                    The servers are equipped with latest hardware like NVM Express or Non-Volatile Memory,
                    Host Controller Interface which is logical-device interface specification for accessing
                    a computer's non-volatile storage media.
                </li>
            </ul>

            <!-- Image Gallery -->
            <h3 class="text-xl font-semibold text-blue-900 mt-10 mb-4 flex items-center gap-2">
                <i class="bi bi-images text-blue-700"></i>
                Computer Center Images
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/computer-center/img1.jpg') }}" alt="Computer Center 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/computer-center/img2.jpg') }}" alt="Computer Center 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/computer-center/img3.jpg') }}" alt="Computer Center 3"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </main>
    </div>
@endsection
