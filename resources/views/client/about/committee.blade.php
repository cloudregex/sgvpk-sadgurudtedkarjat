   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-4">Committed</h2>

           </main>
       </div>
   @endsection
