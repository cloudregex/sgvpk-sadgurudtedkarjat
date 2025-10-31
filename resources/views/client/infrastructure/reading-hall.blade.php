@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2 flex items-center gap-2">
                <i class="bi bi-book-half text-blue-700"></i>
                Reading Hall
            </h2>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/reading-hall/img1.jpg') }}" alt="Reading Hall 1"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('assets/images/reading-hall/img2.jpg') }}" alt="Reading Hall 2"
                        class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <!-- Description -->
            <ul class="list-disc pl-6 space-y-3 text-gray-800 leading-relaxed">
                <li>
                    In simple terms, Study-room or Reading-room is a quiet place for studying and reading.
                    These are modern libraries designed for self-study.
                </li>
                <li>
                    Reading rooms provide various facilities like cabins, comfortable chairs, Wi-Fi, AC,
                    charging sockets for your electronics, drinking water, and newspapers — all essential for a comfortable
                    study.
                </li>
                <li>
                    People from regions call these by different names such as Study Halls, Reading Halls, Study Centers,
                    Reading Centers, Studying Library, Co-study spaces, and Study Rooms.
                </li>
                <li>
                    If you are a student struggling to focus on studies at hostels or home, these study rooms can help
                    you stay productive in a quiet environment.
                </li>
                <li>
                    The reading room concept is rapidly growing in India, especially among test-prep students preparing for
                    exams like <strong>CA, Civil Services, NEET, Banking, and Government Exams</strong>.
                </li>
            </ul>
        </main>
    </div>
@endsection
