@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2">Best Practices</h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full border border-gray-200 text-sm text-gray-700">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 w-20">Sr.No.</th>
                            <th class="px-4 py-2 text-left">Title</th>
                            <th class="px-4 py-2 w-32 text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 text-center">1</td>
                            <td class="px-4 py-2">Best Practices</td>
                            <td class="px-4 py-2 text-center">
                                <a href="#" class="text-blue-700 hover:text-blue-900" target="_blank">
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
