@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">About Training & Placement</h2>

            <!-- Officer Section -->
            <div class="flex flex-col md:flex-row items-center gap-6 mb-6">
                <img src="{{ asset('images/tpo-officer.jpg') }}" alt="Training and Placement Officer"
                    class="w-40 h-48 object-cover rounded-md border shadow-sm">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Dr. S.M. Dhobale</h3>
                    <p class="text-blue-800 font-medium">TRAINING AND PLACEMENT OFFICER</p>
                </div>
            </div>

            <!-- Description -->
            <div class="text-gray-700 space-y-4 leading-relaxed mb-6">
                <p>
                    Welcome to the <strong>Training and Placement Cell!</strong>
                    As the Training and Placement office of our esteemed engineering institute, we are dedicated to bridging
                    the gap between industry and academia by facilitating the placement of our hardworking and talented
                    students
                    in top-notch companies.
                </p>
                <p>
                    At the TPO desk, we strive to provide comprehensive support to both students and recruiters,
                    ensuring seamless interaction and successful placements. Our team works tirelessly to organize
                    various career development programs, workshops, and industry interactions to enhance the employability
                    skills of our students.
                </p>
                <p>
                    For recruiters, we offer a hassle-free recruitment process, providing access to a pool of
                    highly skilled and motivated candidates through our campus placement drives, internships,
                    and job postings.
                </p>
                <p>
                    Whether you are a student seeking exciting career opportunities or a recruiter looking for top talent,
                    the TPO Desk is here to assist you every step of the way. Explore our services, connect with us, and
                    let us help you shape a promising future!
                </p>
            </div>

            <!-- Staff Coordinators Table -->
            <h3 class="text-xl font-semibold text-blue-900 mb-4 border-b pb-1">Staff Coordinators :</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left border">Sr. No.</th>
                            <th class="px-4 py-2 text-left border">Name</th>
                            <th class="px-4 py-2 text-center border">View</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border">1</td>
                            <td class="px-4 py-2 border">Training & Placement</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-red-600 text-lg"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border">2</td>
                            <td class="px-4 py-2 border">Office Order</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-red-600 text-lg"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border">3</td>
                            <td class="px-4 py-2 border">TPO Overview</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-red-600 text-lg"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
