@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.academics-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Academic Calendar</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm text-left">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-300 w-20 text-center">Sr. No.</th>
                            <th class="py-2 px-4 border-b border-gray-300">Particular</th>
                            <th class="py-2 px-4 border-b border-gray-300 text-center w-32">Download</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                            <td class="py-2 px-4 border-b text-center">1</td>
                            <td class="py-2 px-4 border-b">Academic Calendar Diploma</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download PDF">
                                    <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                            <td class="py-2 px-4 border-b text-center">2</td>
                            <td class="py-2 px-4 border-b">Academic Calendar Management UG</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download PDF">
                                    <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                            <td class="py-2 px-4 border-b text-center">3</td>
                            <td class="py-2 px-4 border-b">Academic Calendar Engineering UG</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download PDF">
                                    <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                            <td class="py-2 px-4 border-b text-center">4</td>
                            <td class="py-2 px-4 border-b">Academic Calendar Engineering PG</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download PDF">
                                    <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                            <td class="py-2 px-4 border-b text-center">5</td>
                            <td class="py-2 px-4 border-b">Academic Calendar Management PG</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download PDF">
                                    <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
