@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-4 md:px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-[#140f64] mb-4 border-b-2 border-gray-200 pb-2">
                Statutory Reports
            </h2>

            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-[#140f64] text-white text-left">
                            <th class="py-3 px-4 w-16">Sr.No.</th>
                            <th class="py-3 px-4">Title</th>
                            <th class="py-3 px-4 text-center w-20">Download</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 text-gray-700">1</td>
                            <td class="py-3 px-4 text-gray-700">Statutory Report 2023-24</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ asset('files/statutory-report-2023.pdf') }}" target="_blank"
                                    class="text-red-600 hover:text-red-700">
                                    <i class="bi bi-file-earmark-pdf text-2xl"></i>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 text-gray-700">2</td>
                            <td class="py-3 px-4 text-gray-700">Annual Quality Assurance Report (AQAR)</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ asset('files/aqar-2023.pdf') }}" target="_blank"
                                    class="text-red-600 hover:text-red-700">
                                    <i class="bi bi-file-earmark-pdf text-2xl"></i>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 text-gray-700">3</td>
                            <td class="py-3 px-4 text-gray-700">Internal Academic Audit Report</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ asset('files/academic-audit.pdf') }}" target="_blank"
                                    class="text-red-600 hover:text-red-700">
                                    <i class="bi bi-file-earmark-pdf text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
