@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Library Journals</h2>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm text-gray-800">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 border">Sr. No.</th>
                            <th class="px-4 py-2 border">Title</th>
                            <th class="px-4 py-2 border">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-200 transition">
                            <td class="border px-4 py-2 text-center">1</td>
                            <td class="border px-4 py-2">
                                <a href="#" class="text-blue-700 hover:underline">
                                    List of Print Journals 2024–25
                                </a>
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <a href="{{ asset('documents/print-journals-2024-25.pdf') }}" target="_blank"
                                    class="text-blue-800 hover:text-blue-500">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
