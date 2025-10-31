@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">Library Staff</h2>

            <!-- Staff Cards -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="flex bg-gray-50 border rounded-lg shadow-sm p-4">
                    <img src="{{ asset('images/library/prof-dhumal.jpg') }}" alt="Prof. Dhumal Chandulal Baburao"
                        class="w-16 h-20 object-cover rounded-md border mr-4">
                    <div>
                        <p><span class="font-bold">Name:</span> Prof. Dhumal Chandulal Baburao</p>
                        <p><span class="font-bold">Designation:</span> Librarian</p>
                        <p><span class="font-bold">Qualification:</span> M.Lib. & I. Sci. NET (UGC)</p>
                        <p><span class="font-bold">Email:</span> dhumalc.dkcop@dattaakla.edu.in</p>
                        <p><span class="font-bold">Mobile:</span> 9921810286</p>
                        <p><span class="font-bold">Teaching Experience:</span> 15 Years</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex bg-gray-50 border rounded-lg shadow-sm p-4">
                    <img src="{{ asset('images/library/mr-narute.jpg') }}" alt="Mr. Narute Tanaji Dnyandeo"
                        class="w-16 h-20 object-cover rounded-md border mr-4">
                    <div>
                        <p><span class="font-bold">Name:</span> Mr. Narute Tanaji Dnyandeo</p>
                        <p><span class="font-bold">Designation:</span> Assistant Librarian</p>
                        <p><span class="font-bold">Qualification:</span> M.Lib. & I. Sci.</p>
                        <p><span class="font-bold">Email:</span> narutetanaji@gmail.com</p>
                        <p><span class="font-bold">Mobile:</span> 9921770072</p>
                        <p><span class="font-bold">Teaching Experience:</span> 08 Years</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex bg-gray-50 border rounded-lg shadow-sm p-4">
                    <img src="{{ asset('images/library/default-avatar.png') }}" alt="Mr. Dhahale Rushikesh"
                        class="w-16 h-20 object-cover rounded-md border mr-4">
                    <div>
                        <p><span class="font-bold">Name:</span> Mr. Dhahale Rushikesh</p>
                        <p><span class="font-bold">Designation:</span> Library Assistant</p>
                        <p><span class="font-bold">Qualification:</span> 12th</p>
                        <p><span class="font-bold">Email:</span> —</p>
                        <p><span class="font-bold">Mobile:</span> 7020321465</p>
                        <p><span class="font-bold">Teaching Experience:</span> 01 Year</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
