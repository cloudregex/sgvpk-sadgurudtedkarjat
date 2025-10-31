@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-4 md:px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-[#140f64] mb-4 border-b-2 border-gray-200 pb-2">
                Institutional Distinctiveness
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
                            <td class="py-3 px-4 text-gray-700">Institutional Distinctiveness</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ asset('files/institutional-distinctiveness.pdf') }}" target="_blank"
                                    class="text-[#140f64] hover:text-blue-800">
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
