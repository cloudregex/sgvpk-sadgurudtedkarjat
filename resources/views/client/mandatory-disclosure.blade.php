@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 flex items-center gap-3">
            <i class="bi bi-file-earmark-text text-blue-600"></i>
            Mandatory Disclosure & Affadavit
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Card 1 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                <div class="p-8 flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <i class="bi bi-journal-check text-2xl text-blue-600"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Mandatory Disclosure</h3>
                        </div>
                        <p class="text-gray-500 text-sm">
                            View the official mandatory disclosure document for our institution.
                        </p>
                    </div>
                    <a href="#" target="_blank"
                        class="mt-6 inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-all">
                        <i class="bi bi-download"></i> View & Download
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                <div class="p-8 flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <i class="bi bi-file-earmark-lock text-2xl text-blue-600"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Affadavit</h3>
                        </div>
                        <p class="text-gray-500 text-sm">
                            View and download the affidavit document submitted by our institution.
                        </p>
                    </div>
                    <a href="#" target="_blank"
                        class="mt-6 inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-all">
                        <i class="bi bi-download"></i> View & Download
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
