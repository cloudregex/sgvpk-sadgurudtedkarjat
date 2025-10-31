@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Minutes of Meeting & Action Taken Report</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="py-2 px-4 border border-gray-300 w-16 text-center">Sr. No.</th>
                            <th class="py-2 px-4 border border-gray-300 text-left">Title</th>
                            <th class="py-2 px-4 border border-gray-300 w-24 text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">1</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 01-2018</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">2</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 02-2018</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">3</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 17-06-2019</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">4</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 10-10-2020</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">5</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 15-02-2021</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">6</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 20-06-2021</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">7</td>
                            <td class="py-2 px-4 border border-gray-300">IQAC Meeting 28-01-2022</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="bi bi-file-earmark-pdf-fill text-xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
