@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.daac-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2">DVV (Data Validation and Verification)</h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full border border-gray-200 text-sm text-gray-700">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Cr-1</th>
                            <th class="px-4 py-2 text-left">Cr-2</th>
                            <th class="px-4 py-2 text-left">Cr-3</th>
                            <th class="px-4 py-2 text-left">Cr-4</th>
                            <th class="px-4 py-2 text-left">Cr-5</th>
                            <th class="px-4 py-2 text-left">Cr-6</th>
                            <th class="px-4 py-2 text-left">Cr-7</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2">1.2.1</td>
                            <td class="px-4 py-2">2.1.1</td>
                            <td class="px-4 py-2">3.1.1</td>
                            <td class="px-4 py-2">4.1.2</td>
                            <td class="px-4 py-2">5.1.1</td>
                            <td class="px-4 py-2">6.2.2</td>
                            <td class="px-4 py-2">7.1.2</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">1.2.2</td>
                            <td class="px-4 py-2">2.1.2</td>
                            <td class="px-4 py-2">3.2.2</td>
                            <td class="px-4 py-2">4.3.2</td>
                            <td class="px-4 py-2">5.1.2</td>
                            <td class="px-4 py-2">6.3.2</td>
                            <td class="px-4 py-2">7.1.3</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2">1.3.2</td>
                            <td class="px-4 py-2">2.2.1</td>
                            <td class="px-4 py-2">3.3.1</td>
                            <td class="px-4 py-2">4.4.1</td>
                            <td class="px-4 py-2">5.1.3</td>
                            <td class="px-4 py-2">6.3.3</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">1.4.1</td>
                            <td class="px-4 py-2">2.4.1</td>
                            <td class="px-4 py-2">3.3.2</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">5.1.4</td>
                            <td class="px-4 py-2">6.5.2</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">2.4.2</td>
                            <td class="px-4 py-2">3.4.3</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">5.2.1</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">2.6.3</td>
                            <td class="px-4 py-2">3.5.1</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">5.2.2</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">5.3.1</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">5.3.2</td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
