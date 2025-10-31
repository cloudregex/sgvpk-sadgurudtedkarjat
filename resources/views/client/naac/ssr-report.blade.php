@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2">SSR Report</h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full border border-gray-200 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left w-16">Sr.No.</th>
                            <th class="px-4 py-2 text-left">Title</th>
                            <th class="px-4 py-2 text-center w-24">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b bg-gray-50 hover:bg-gray-100">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">NAAC Cycle-II SSR Report</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ asset('storage/naac/NAAC_Cycle_II_SSR_Report.pdf') }}" target="_blank"
                                    class="text-red-600 hover:text-red-800">
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
