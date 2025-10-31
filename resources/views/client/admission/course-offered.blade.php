   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.admission-side-bar')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-4 border-b pb-2">Diploma Engineering :</h2>

               <div class="overflow-x-auto">
                   <table class="min-w-full border border-gray-300 text-sm">
                       <thead>
                           <tr class="bg-blue-900 text-white text-left">
                               <th class="px-4 py-2 border">Sr. No.</th>
                               <th class="px-4 py-2 border">Course Code</th>
                               <th class="px-4 py-2 border">Course Name</th>
                               <th class="px-4 py-2 border">Intake</th>
                               <th class="px-4 py-2 border">Duration</th>
                               <th class="px-4 py-2 border">Course Pattern</th>
                               <th class="px-4 py-2 border">Eligibility</th>
                           </tr>
                       </thead>
                       <tbody class="text-gray-700">
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">1</td>
                               <td class="border px-4 py-2">CE</td>
                               <td class="border px-4 py-2">Civil Engineering</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">2</td>
                               <td class="border px-4 py-2">CO</td>
                               <td class="border px-4 py-2">Computer Engineering</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">3</td>
                               <td class="border px-4 py-2">EE</td>
                               <td class="border px-4 py-2">Electrical Engineering</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">4</td>
                               <td class="border px-4 py-2">EJ</td>
                               <td class="border px-4 py-2">Electronics & Telecommunication Engineering</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">5</td>
                               <td class="border px-4 py-2">IF</td>
                               <td class="border px-4 py-2">Information Technology</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                           <tr class="hover:bg-blue-50">
                               <td class="border px-4 py-2">6</td>
                               <td class="border px-4 py-2">ME</td>
                               <td class="border px-4 py-2">Mechanical Engineering</td>
                               <td class="border px-4 py-2 text-center">30</td>
                               <td class="border px-4 py-2">3 Years</td>
                               <td class="border px-4 py-2">Semester</td>
                               <td class="border px-4 py-2">Passed SSC (10th) with minimum 35% marks</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </main>
       </div>
   @endsection
