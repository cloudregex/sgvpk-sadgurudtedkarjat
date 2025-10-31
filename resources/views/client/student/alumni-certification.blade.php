@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.student-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Alumni Certification</h2>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 rounded-lg">
                    <thead>
                        <tr class="bg-blue-900 text-white text-sm uppercase">
                            <th class="px-4 py-2 text-left border border-gray-300 w-20">Sr.No.</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Title</th>
                            <th class="px-4 py-2 text-center border border-gray-300 w-32">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-200">
                            <td class="px-4 py-2 border border-gray-300 text-sm">1</td>
                            <td class="px-4 py-2 border border-gray-300 text-sm text-blue-700">
                                Alumni Certification
                            </td>
                            <td class="px-4 py-2 border border-gray-300 text-center">
                                <a href="{{ asset('pdfs/alumni-association.pdf') }}" target="_blank"
                                    class="text-blue-900 hover:text-red-600">
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
