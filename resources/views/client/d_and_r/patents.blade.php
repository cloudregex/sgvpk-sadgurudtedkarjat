@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.dr-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Patents</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm text-left">
                    <thead>
                        <tr class="bg-blue-900 text-white">
                            <th class="border border-gray-300 px-4 py-2 w-16">Sr. No.</th>
                            <th class="border border-gray-300 px-4 py-2">Name of Faculty</th>
                            <th class="border border-gray-300 px-4 py-2">Name of Patent Published</th>
                            <th class="border border-gray-300 px-4 py-2 w-28">Year</th>
                            <th class="border border-gray-300 px-4 py-2 w-40">Application No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"></td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
