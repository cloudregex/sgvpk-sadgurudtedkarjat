@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">TPO Member Secretary</h2>

            <!-- Officer Section -->
            <div class="flex flex-col md:flex-row items-start gap-6">
                <img src="{{ asset('images/tpo-member-secretary.jpg') }}" alt="TPO Member Secretary"
                    class="w-56 h-64 object-cover rounded-md border shadow-sm">

                <div class="text-gray-700 leading-relaxed">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Mr. D. B. Walke</h3>
                    <p class="text-blue-800 font-medium mb-4">TRAINING AND PLACEMENT CELL MEMBER SECRETARY</p>

                    <p>Welcome to Training and Placement Cell!</p>
                    <p class="mt-3">
                        As the Secretary of the T&amp;P Cell, I see our role as essential in shaping the future of students
                        by
                        providing them with opportunities to succeed professionally.
                    </p>
                    <p class="mt-3">
                        We strive to create a platform that connects academic learning with real-world industry demands.
                        Our primary goal is to ensure that every student is equipped with the skills, knowledge, and
                        confidence
                        to excel during their placements.
                    </p>
                    <p class="mt-3">
                        We work closely with industry partners to bring in the best opportunities for our students.
                        The cell also focuses on offering training and development sessions to enhance both technical and
                        soft skills.
                    </p>
                    <p class="mt-3">
                        It’s a fulfilling experience to witness students growing from eager learners to confident
                        professionals.
                        We constantly aim to improve and adapt our strategies to meet the ever-evolving job market trends.
                    </p>
                    <p class="mt-3">
                        The collaboration among students, faculty, and industry professionals is key to our success.
                        We are committed to building a strong support system for students, helping them at every stage of
                        their placement journey.
                    </p>
                    <p class="mt-3">
                        It’s a rewarding responsibility to play a part in their future achievements.
                    </p>
                </div>
            </div>
        </main>
    </div>
@endsection
