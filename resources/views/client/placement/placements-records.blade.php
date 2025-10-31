@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Placed Students</h2>

            <!-- Placement Records Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left border">Sr. No.</th>
                            <th class="px-4 py-2 text-left border">Particular</th>
                            <th class="px-4 py-2 text-center border">View</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @php
                            $placements = [
                                'Placement Year 2023-2024',
                                'Placement Year 2021-2022',
                                'Placement Year 2020-2021',
                                'Placement Year 2019-2020',
                                'Placement Year 2018-2019',
                                'Placement Year 2017-2018',
                            ];
                        @endphp

                        @foreach ($placements as $index => $year)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                                <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $year }}</td>
                                <td class="px-4 py-2 border text-center">
                                    <a href="#" class="text-blue-700 hover:text-blue-900">
                                        <i class="bi bi-file-earmark-pdf text-xl"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
