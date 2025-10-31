@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">
                Industry Institute Interaction (MOU's)
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-sm">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-4 py-2 border text-left w-20">Sr. No.</th>
                            <th class="px-4 py-2 border text-left">Name of the Institution / Industry with whom the MoU /
                                Linkage is made,
                                with contact details
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        <!-- 2023-24 Section -->
                        <tr class="bg-blue-100 font-semibold">
                            <td colspan="2" class="px-4 py-2 border text-blue-900">2023-2024</td>
                        </tr>
                        @php
                            $mous_2024 = [
                                'Infocloud System (Pune)',
                                'M/S Mechatronics System Pvt. Ltd',
                                'VR Infotech System (Pune)',
                                'APC Electricals Pvt. Ltd',
                                'Hi Tech Electro Controls (Pune)',
                                'Autocluster Development Corporation (Pune)',
                            ];
                        @endphp
                        @foreach ($mous_2024 as $index => $mou)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                                <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $mou }}</td>
                            </tr>
                        @endforeach

                        <!-- 2022-23 Section -->
                        <tr class="bg-blue-100 font-semibold">
                            <td colspan="2" class="px-4 py-2 border text-blue-900">2022-2023</td>
                        </tr>
                        @php
                            $mous_2023 = ['Softlink Solutions Pvt. Ltd. Pune', 'M/S Kodemint, Nagpur'];
                        @endphp
                        @foreach ($mous_2023 as $index => $mou)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                                <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $mou }}</td>
                            </tr>
                        @endforeach

                        <!-- 2021-22 Section -->
                        <tr class="bg-blue-100 font-semibold">
                            <td colspan="2" class="px-4 py-2 border text-blue-900">2021-2022</td>
                        </tr>
                        @php
                            $mous_2022 = [
                                'CADD Centre (Kolhapur)',
                                'CII-Confederation of Indian Industries (Pune)',
                                'Industry Guru Automation Solutions Pvt. Ltd.',
                                'Cognizance Training Pvt. Ltd.',
                                'Codebit Pvt. Ltd.',
                                'IC Solutions Pvt. Ltd.',
                            ];
                        @endphp
                        @foreach ($mous_2022 as $index => $mou)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                                <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $mou }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
