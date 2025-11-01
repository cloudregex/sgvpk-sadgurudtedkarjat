@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16 space-y-16">

        <!-- Student Attendance -->
        <div class="bg-white shadow-lg rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-blue-700 mb-6 flex items-center gap-2">
                <i class="bi bi-person-lines-fill"></i>
                Student Attendance
            </h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full text-sm text-gray-700">
                    <thead class="bg-blue-100 text-left">
                        <tr>
                            <th class="p-3">Month</th>
                            <th class="p-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (['August 2019', 'September 2019', 'October 2019 (1st Year)', 'October 2019 (2nd Year)'] as $month)
                            <tr class="border-b hover:bg-blue-50 transition">
                                <td class="p-3">{{ $month }}</td>
                                <td class="p-3 text-right">
                                    <button
                                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow">
                                        <i class="bi bi-download"></i> Click Here to Download
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Teaching Staff Attendance -->
        <div class="bg-white shadow-lg rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-green-700 mb-6 flex items-center gap-2">
                <i class="bi bi-person-workspace"></i>
                Teaching Staff’s Attendance
            </h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full text-sm text-gray-700">
                    <thead class="bg-green-100 text-left">
                        <tr>
                            <th class="p-3">Month</th>
                            <th class="p-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (['August 2019', 'September 2019', 'October 2019'] as $month)
                            <tr class="border-b hover:bg-green-50 transition">
                                <td class="p-3">{{ $month }}</td>
                                <td class="p-3 text-right">
                                    <button
                                        class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow">
                                        <i class="bi bi-download"></i> Click Here to Download
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Non Teaching Staff Attendance -->
        <div class="bg-white shadow-lg rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-purple-700 mb-6 flex items-center gap-2">
                <i class="bi bi-people-fill"></i>
                Non Teaching Staff’s Attendance
            </h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full text-sm text-gray-700">
                    <thead class="bg-purple-100 text-left">
                        <tr>
                            <th class="p-3">Month</th>
                            <th class="p-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (['August 2019', 'September 2019', 'October 2019'] as $month)
                            <tr class="border-b hover:bg-purple-50 transition">
                                <td class="p-3">{{ $month }}</td>
                                <td class="p-3 text-right">
                                    <button
                                        class="inline-flex items-center gap-2 bg-purple-600 hover:bg-purple-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow">
                                        <i class="bi bi-download"></i> Click Here to Download
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
