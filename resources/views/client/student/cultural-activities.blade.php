@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.student-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Cultural Activities</h2>

            <!-- cultural activities Section -->
            <div id="content-nss" class="tab-content grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <img src="{{ asset('images/nss1.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 1">
                <img src="{{ asset('images/nss2.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 2">
                <img src="{{ asset('images/nss3.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 3">
                <img src="{{ asset('images/nss4.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 4">
                <img src="{{ asset('images/nss5.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 5">
                <img src="{{ asset('images/nss6.jpg') }}" class="rounded-xl shadow-md" alt="cultural activities 6">
            </div>
        </main>
    </div>
@endsection
