@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">IIQA</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="py-2 px-4 border border-gray-300 w-16 text-center">Sr. No.</th>
                            <th class="py-2 px-4 border border-gray-300 text-left">Title</th>
                            <th class="py-2 px-4 border border-gray-300 w-24 text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">1</td>
                            <td class="py-2 px-4 border border-gray-300">IIQA</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download IIQA PDF">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">2</td>
                            <td class="py-2 px-4 border border-gray-300">AAA</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download AAA PDF">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">3</td>
                            <td class="py-2 px-4 border border-gray-300">AISHE</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download AISHE PDF">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">4</td>
                            <td class="py-2 px-4 border border-gray-300">Self Declaration</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800"
                                    title="Download Self Declaration PDF">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">5</td>
                            <td class="py-2 px-4 border border-gray-300">Undertaking</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download Undertaking PDF">
                                    <i class="bi bi-file-earmark-pdf text-xl"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-4 border border-gray-300 text-center">6</td>
                            <td class="py-2 px-4 border border-gray-300">Right To Information</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800" title="Download RTI PDF">
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
