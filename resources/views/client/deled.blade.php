@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16 space-y-16">

        <!-- Header -->
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-900 mb-4 tracking-wide">D.EL.ED</h1>
            <p class="text-gray-500 text-lg">Diploma in Elementary Education</p>
        </div>

        <!-- Stats Section -->
        <div class="grid md:grid-cols-3 gap-8 text-center mt-10">
            <div
                class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-600 hover:shadow-2xl transition-all duration-500">
                <i class="bi bi-calendar3 text-4xl text-blue-600 mb-3"></i>
                <h3 class="text-gray-600 text-sm font-semibold tracking-wide uppercase">Establishment Year</h3>
                <p class="text-2xl font-bold text-blue-900 mt-2">2007 - 2008</p>
            </div>

            <div
                class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-indigo-600 hover:shadow-2xl transition-all duration-500">
                <i class="bi bi-people-fill text-4xl text-indigo-600 mb-3"></i>
                <h3 class="text-gray-600 text-sm font-semibold tracking-wide uppercase">College Intake</h3>
                <p class="text-2xl font-bold text-indigo-900 mt-2">50</p>
            </div>

            <div
                class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-500 hover:shadow-2xl transition-all duration-500">
                <i class="bi bi-currency-rupee text-4xl text-blue-500 mb-3"></i>
                <h3 class="text-gray-600 text-sm font-semibold tracking-wide uppercase">College Fee</h3>
                <p class="text-2xl font-bold text-blue-900 mt-2">12,000</p>
            </div>
        </div>

        <!-- Codes Section -->
        <div class="text-center mt-12 space-y-2">
            <p class="text-lg font-semibold text-gray-700">NCTE CODE: <span class="text-blue-700 font-bold">122655</span>
            </p>
            <p class="text-lg font-semibold text-gray-700">MSCERT CODE: <span class="text-blue-700 font-bold">22.40</span>
            </p>
            <p class="text-lg font-semibold text-gray-700">MSCE CODE: <span class="text-blue-700 font-bold">2235</span></p>
        </div>

        <!-- Organization Section -->
        <div class="bg-gradient-to-r from-blue-50 to-white rounded-3xl shadow-md p-10 text-center border border-blue-100">
            <h2 class="text-2xl font-bold text-blue-800 mb-4">Our Organization</h2>
            <p class="text-gray-700 mb-2"><strong>Organization Name:</strong> Sadguru Gramvikas Pratishthan, Karjat.</p>
            <p class="text-gray-700 mb-2"><strong>College Name:</strong> Sadguru Gramvikas Pratishthan's D.Ed. College,
                Karjat.</p>
            <p class="text-gray-700"><strong>Postal Address:</strong> Front of Dada Patil College, Nagar Road, Tal - Karjat,
                Dist - Ahmednagar, Pin - 414402.</p>
        </div>

        <!-- Faculty Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center">Our Faculty</h2>
            <div class="overflow-x-auto bg-white rounded-2xl shadow-lg border border-gray-200">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="bg-blue-100 text-blue-900 uppercase text-xs font-semibold">
                        <tr>
                            <th class="py-3 px-4 text-left">Sr.No.</th>
                            <th class="py-3 px-4 text-left">Staff</th>
                            <th class="py-3 px-4 text-left">Designation</th>
                            <th class="py-3 px-4 text-left">Education</th>
                            <th class="py-3 px-4 text-left">Scale</th>
                            <th class="py-3 px-4 text-left">Joined / Left</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-blue-50 transition">
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">Mrs. Varsha Dhayare</td>
                            <td class="py-3 px-4">Principal</td>
                            <td class="py-3 px-4">M.Sc, M.Ed, M.Phil</td>
                            <td class="py-3 px-4">9300-34800</td>
                            <td class="py-3 px-4 text-green-600 font-semibold">Joined</td>
                        </tr>
                        <tr class="border-b hover:bg-blue-50 transition">
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">Ramdas Patkar</td>
                            <td class="py-3 px-4">Lecturer</td>
                            <td class="py-3 px-4">M.A, B.Ed</td>
                            <td class="py-3 px-4">9300-34800</td>
                            <td class="py-3 px-4 text-green-600 font-semibold">Joined</td>
                        </tr>
                        <tr class="border-b hover:bg-blue-50 transition">
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4">Dada Khairnar</td>
                            <td class="py-3 px-4">Lecturer</td>
                            <td class="py-3 px-4">B.Ed</td>
                            <td class="py-3 px-4">9300-34800</td>
                            <td class="py-3 px-4 text-red-500 font-semibold">Left</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
