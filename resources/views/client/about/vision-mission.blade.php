   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-6">Vision :</h2>
               <div class="border-b-2 border-blue-500 w-16 mb-4"></div>
               <p class="text-gray-700 font-semibold mb-6">
                   The vision of the institution is to provide pre-eminent educational experiences that are stimulating,
                   responsive to the needs of the present century and prepare the students for leadership in their
                   profession
                   and society, and also to address critical needs of industry and foster economic development.
               </p>

               <h2 class="text-2xl font-bold text-blue-900 mb-4">Mission :</h2>
               <div class="border-b-2 border-blue-500 w-16 mb-4"></div>
               <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-6">
                   <li>Impart technical education to create able & competent engineers.</li>
                   <li>Entrepreneurship development.</li>
                   <li>All round personality development.</li>
                   <li>Training & placement in prominent corporate.</li>
                   <li>Institute-Industry interaction.</li>
               </ul>

               <h2 class="text-2xl font-bold text-blue-900 mb-4">Goals :</h2>
               <div class="border-b-2 border-blue-500 w-16 mb-4"></div>
               <ul class="list-disc ml-6 text-gray-700 space-y-2">
                   <li><strong>Moral Goal:</strong> To enable the students to cultivate certain moral values.</li>
                   <li><strong>Knowledge Goal:</strong> To strengthen the intellectual side of personality.</li>
                   <li><strong>Social Goal:</strong> To activate and foster a sense of obligation, loyalty, self-discipline,
                       and a spirit of sacrifice for society among students.</li>
                   <li><strong>Physical Development Goal:</strong> To provide relevant facilities for the development of a
                       good physique.</li>
               </ul>
           </main>

       </div>
   @endsection
