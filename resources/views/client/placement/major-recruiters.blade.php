@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.placement-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Major Recruiters</h2>

            <!-- Recruiters Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
                <!-- Row 1 -->
                <img src="{{ asset('images/recruiters/mitsubishi.png') }}" alt="Mitsubishi Electric"
                    class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/electrical.png') }}" alt="Electrical" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/electrohub.png') }}" alt="ElectroHub" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/schneider.png') }}" alt="Schneider Electric"
                    class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/kalyani.png') }}" alt="Kalyani Bharat Forge"
                    class="h-12 object-contain">

                <!-- Row 2 -->
                <img src="{{ asset('images/recruiters/lt.png') }}" alt="Larsen & Toubro" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/electrical-contractor.png') }}" alt="Electrical Contractor"
                    class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/mahapareshan.png') }}" alt="Mahapareshan" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/apc.png') }}" alt="APC" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/cipla.png') }}" alt="Cipla" class="h-12 object-contain">

                <!-- Row 3 -->
                <img src="{{ asset('images/recruiters/mahavitaran.png') }}" alt="Mahavitaran" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/arcticwolf.png') }}" alt="Arctic Wolf" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/gmr.png') }}" alt="GMR" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/vinci.png') }}" alt="Vinci Energies" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/skanska.png') }}" alt="Skanska" class="h-12 object-contain">

                <!-- Row 4 -->
                <img src="{{ asset('images/recruiters/cimic.png') }}" alt="CIMIC" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/tata.png') }}" alt="TATA Projects" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/arabtec.png') }}" alt="Arabtec" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/pcl.png') }}" alt="PCL" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/hochtief.png') }}" alt="Hochtief" class="h-12 object-contain">

                <!-- Row 5 -->
                <img src="{{ asset('images/recruiters/adco.png') }}" alt="ADCO" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/hcc.png') }}" alt="HCC" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/datto.png') }}" alt="Datto" class="h-12 object-contain">
                <img src="{{ asset('images/recruiters/dell.png') }}" alt="Dell EMC" class="h-12 object-contain">
            </div>
        </main>
    </div>
@endsection
