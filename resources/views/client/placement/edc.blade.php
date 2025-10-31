@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">
                Entrepreneurship Development Cell [EDC]
            </h2>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left border w-20">Sr. No.</th>
                            <th class="px-4 py-2 text-left border">Particular</th>
                            <th class="px-4 py-2 text-center border w-24">View</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="hover:bg-gray-100 transition">
                            <td class="px-4 py-2 border">1</td>
                            <td class="px-4 py-2 border">Entrepreneurship Development Cell [EDC]</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
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
