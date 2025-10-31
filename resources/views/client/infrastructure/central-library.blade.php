@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-4 md:px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <div class="flex flex-col md:flex-row gap-6 mb-6">
                <div class="w-full md:w-1/3 flex justify-center">
                    <img src="{{ asset('images/library-incharge.jpg') }}" alt="Library Incharge"
                        class="rounded-lg shadow-md border border-gray-300 object-cover w-48 h-56">
                </div>

                <div class="w-full md:w-2/3">
                    <p class="mb-2">It gives me great pleasure to welcome you to DSD College Group of Institutions’ Faculty
                        of Engineering,
                        Nanded. The <strong>Central Library</strong> serves as the heart of our academic resources and
                        learning environment.</p>

                    <p class="mb-2">Our College Library has a vast and rich collection of printed as well as digital
                        resources.
                        It provides seamless access to learning and research materials to all faculty and students.</p>

                    <p class="mb-2">We constantly update our resources to meet the needs of modern education and research.
                        A dedicated and skilled library team ensures easy access to information and efficient support for
                        every student and faculty member.</p>

                    <p class="mt-4 font-semibold text-blue-800">Prof. Chandrakant D. Bahane</p>
                    <p class="text-gray-600">Librarian</p>
                </div>
            </div>

            <!-- About Section -->
            <section class="mt-6">
                <h3 class="text-xl font-bold text-blue-900 mb-2 border-b pb-1">About DSDC Central Library</h3>
                <p class="mb-2">
                    The DSDC Central Library is committed to developing students with comprehensive technical knowledge and
                    an integrated personality.
                    It supports the institution’s mission by providing learning resources and services that encourage
                    innovation and academic excellence.
                </p>
                <p>
                    The library offers access to both printed and digital materials and supports independent learning and
                    research activities of students and staff.
                </p>
            </section>

            <!-- Vision & Mission -->
            <section class="mt-6">
                <h3 class="text-xl font-bold text-blue-900 mb-2 border-b pb-1">Vision</h3>
                <p>To provide personalized educational experiences and lifelong learning opportunities that meet the needs
                    of the academic community.</p>

                <h3 class="text-xl font-bold text-blue-900 mt-6 mb-2 border-b pb-1">Mission</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>To support teaching, learning, and research activities.</li>
                    <li>To provide resources for academic excellence.</li>
                    <li>To promote the habit of lifelong learning.</li>
                    <li>To create a knowledge-sharing environment.</li>
                </ul>
            </section>

            <!-- Objectives -->
            <section class="mt-6">
                <h3 class="text-xl font-bold text-blue-900 mb-2 border-b pb-1">Objectives</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>To enhance academic excellence and research capabilities.</li>
                    <li>To provide timely access to books, journals, and digital resources.</li>
                    <li>To encourage innovation and curiosity among students.</li>
                    <li>To ensure effective utilization of library resources.</li>
                </ul>
            </section>

            <!-- Library Collection -->
            <section class="mt-6">
                <h3 class="text-xl font-bold text-blue-900 mb-2 border-b pb-1">Library Collection at a Glance</h3>
                <p class="mb-4">Our library maintains an extensive collection of books, journals, and digital resources
                    across multiple departments.</p>

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 text-sm text-left">
                        <thead class="bg-blue-900 text-white">
                            <tr>
                                <th class="border px-3 py-2">Sr. No</th>
                                <th class="border px-3 py-2">Department</th>
                                <th class="border px-3 py-2">Titles</th>
                                <th class="border px-3 py-2">Volumes</th>
                                <th class="border px-3 py-2">National Journals</th>
                                <th class="border px-3 py-2">International Journals</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-3 py-2">1</td>
                                <td class="border px-3 py-2">Bachelor of Engineering</td>
                                <td class="border px-3 py-2">3930</td>
                                <td class="border px-3 py-2">17083</td>
                                <td class="border px-3 py-2">37</td>
                                <td class="border px-3 py-2">21</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">2</td>
                                <td class="border px-3 py-2">Master of Engineering</td>
                                <td class="border px-3 py-2">216</td>
                                <td class="border px-3 py-2">1533</td>
                                <td class="border px-3 py-2">12</td>
                                <td class="border px-3 py-2">07</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">3</td>
                                <td class="border px-3 py-2">Master of Computer Application</td>
                                <td class="border px-3 py-2">334</td>
                                <td class="border px-3 py-2">2340</td>
                                <td class="border px-3 py-2">08</td>
                                <td class="border px-3 py-2">02</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">4</td>
                                <td class="border px-3 py-2">Master of Business Administration</td>
                                <td class="border px-3 py-2">411</td>
                                <td class="border px-3 py-2">3583</td>
                                <td class="border px-3 py-2">12</td>
                                <td class="border px-3 py-2">04</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">5</td>
                                <td class="border px-3 py-2">Civil Engineering</td>
                                <td class="border px-3 py-2">887</td>
                                <td class="border px-3 py-2">2761</td>
                                <td class="border px-3 py-2">10</td>
                                <td class="border px-3 py-2">05</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Library Timing -->
            <section class="mt-6">
                <h3 class="text-xl font-bold text-blue-900 mb-2 border-b pb-1">Library Timings</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>Monday to Friday: 8:00 AM – 8:00 PM</li>
                    <li>Saturday: 8:00 AM – 4:00 PM</li>
                    <li>Sunday: Closed</li>
                </ul>
            </section>
        </main>
    </div>
@endsection
