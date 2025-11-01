@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16">
        <h2 class="text-4xl font-bold text-blue-700 mb-8">🎓 Student Details</h2>

        <div class="bg-white rounded-xl shadow-md hover:shadow-xl border border-blue-100 transition duration-300">
            <div class="flex flex-col md:flex-row justify-between items-center px-6 py-5 space-y-4 md:space-y-0">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Student Details 2nd Year</h3>
                    <p class="text-sm text-gray-500 mt-1">View and download your academic information</p>
                </div>

                <a href="{{ asset('asset/StudentDetails2024.xlsx') }}" target="_blank"
                    class="flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow-sm transition">
                    <i class="bi bi-download mr-2 text-lg"></i>
                    Click Here to Download
                </a>
            </div>
        </div>
    </div>
@endsection
