@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">IQAC Committee</h2>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-blue-900 text-white text-left">
                            <th class="px-4 py-2 border border-gray-300 w-16">Sr.No.</th>
                            <th class="px-4 py-2 border border-gray-300">Title</th>
                            <th class="px-4 py-2 border border-gray-300 text-center w-24">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-200 transition">
                            <td class="px-4 py-2 border border-gray-300 text-center">1</td>
                            <td class="px-4 py-2 border border-gray-300">IQAC</td>
                            <td class="px-4 py-2 border border-gray-300 text-center">
                                <a href="{{ asset('pdf/iqac.pdf') }}" target="_blank"
                                    class="text-blue-800 hover:text-blue-600">
                                    <i class="fas fa-file-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
