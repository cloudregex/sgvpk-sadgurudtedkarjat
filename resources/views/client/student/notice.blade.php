@extends('layouts.client')

@section('content')
    <div class="flex flex-col md:flex-row gap-6 mt-6">
        {{-- Sidebar --}}
        @include('components.student-side-bar')

        {{-- Main Content --}}
        <div class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-semibold text-blue-900 border-b-2 border-blue-900 pb-2 mb-4">Notice</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-900 text-white text-left">
                            <th class="px-4 py-2 w-20">Sr.No.</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2 text-center w-24">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-200">
                            <td class="px-4 py-2 border-t">1</td>
                            <td class="px-4 py-2 border-t">Notices</td>
                            <td class="px-4 py-2 border-t text-center">
                                <a href="#" target="_blank" class="text-blue-800 hover:text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4v16m8-8H4m4 8h8a2 2 0 002-2V6a2 2 0 00-2-2H8a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
