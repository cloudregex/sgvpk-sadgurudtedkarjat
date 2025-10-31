@extends('layouts.client')

@section('content')
    <div class="container mx-auto my-10 px-4 flex flex-col md:flex-row gap-6">
        {{-- Sidebar --}}
        @include('components.academics-side-bar')

        {{-- Main Content --}}
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                <i class="bi bi-journal-text me-2 text-blue-600"></i> National Education Policy (NEP)
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm text-left">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="py-2 px-4 border-b">Sr. No.</th>
                            <th class="py-2 px-4 border-b">Particular</th>
                            <th class="py-2 px-4 border-b text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">NEP</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="#" class="text-blue-700 hover:text-blue-900" title="Download PDF">
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
