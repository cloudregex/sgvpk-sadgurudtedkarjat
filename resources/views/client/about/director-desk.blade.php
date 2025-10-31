   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 mx-auto bg-white rounded-lg shadow p-6 mt-10">

               <!-- Image and Details -->
               <div class="flex flex-col md:flex-row gap-6">
                   <div class="w-full md:w-1/3">
                       <img src="director.jpg" alt="Director Photo" class="rounded-lg shadow w-full h-auto object-cover">
                       <div class="mt-3">
                           <h3 class="font-semibold text-lg text-gray-800">Dr. Sharad Karne</h3>
                           <p class="uppercase text-sm text-gray-500">Director</p>
                           <div class="flex gap-3 mt-3">
                               <a href="#"
                                   class="border border-gray-400 rounded p-2 hover:bg-blue-600 hover:text-white transition">
                                   <i class="bi bi-facebook"></i>
                               </a>
                               <a href="#"
                                   class="border border-gray-400 rounded p-2 hover:bg-red-600 hover:text-white transition">
                                   <i class="bi bi-youtube"></i>
                               </a>
                               <a href="#"
                                   class="border border-gray-400 rounded p-2 hover:bg-pink-600 hover:text-white transition">
                                   <i class="bi bi-instagram"></i>
                               </a>
                           </div>
                       </div>
                   </div>

                   <!-- Text Content -->
                   <div class="w-full md:w-2/3">
                       <h2 class="text-xl font-bold text-blue-900 mb-4">Dear Students,</h2>
                       <p class="text-gray-700 leading-relaxed mb-3">
                           Welcome to Dattakala Shikshan Sanstha, a multi-faculty premier Institution with highly qualified
                           academicians imparting education in different professional fields. Through an eventful four
                           years, Dattakala
                           Shikshan Sanstha has pursued the quest for expanding the horizons of learning.
                       </p>
                       <p class="text-gray-700 leading-relaxed mb-3">
                           Today Dattakala Group of Institutions are well-recognized as a centre of excellence which
                           nurtures
                           intellectual & academic striving, energetic extra and co-curricular activities & social
                           engagement.
                       </p>
                       <p class="text-gray-700 leading-relaxed mb-3">
                           Ever since its inception, the primary motto of the Institute has been to deliver an
                           industry-oriented
                           curriculum. In order to capture the changing demands of the industry, these institutes are
                           maintaining
                           regular interaction with the industries & strive to provide suitable value additions to the
                           curriculum to
                           equip all students in latest managerial skills.
                       </p>
                       <p class="text-gray-700 leading-relaxed mb-3">
                           Finally, I would like to assure that Dattakala Polytechnic is a continuous possibilities, a
                           unique &
                           empowering space for the students to develop themselves.
                       </p>

                       <p class="mt-4 font-semibold text-gray-900">With a lot of Best Wishes,</p>
                       <p class="font-bold text-gray-900">Dr. Sharad Karne</p>
                       <p class="text-sm text-gray-700">Director</p>
                   </div>
               </div>
           </main>
       </div>
   @endsection
