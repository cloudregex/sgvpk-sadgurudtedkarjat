   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.admission-side-bar')

           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-6">
                   <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-600 pb-2 mb-4">
                       Institutional Quota & Vacant Seat :
                   </h2>

                   <div class="overflow-x-auto">
                       <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                           <thead class="bg-blue-900 text-white">
                               <tr>
                                   <th class="py-3 px-4 text-left text-sm font-semibold">Sr. No.</th>
                                   <th class="py-3 px-4 text-left text-sm font-semibold">Admission Type</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Advertisements</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Information Brochure</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Vacant Seats</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Admission Schedule</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Fees Structure</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Provisional Merit List</th>
                                   <th class="py-3 px-4 text-center text-sm font-semibold">Required Documents</th>
                               </tr>
                           </thead>
                           <tbody class="bg-white divide-y divide-gray-200">
                               <tr class="hover:bg-gray-50 transition">
                                   <td class="py-3 px-4 text-sm text-gray-700">1</td>
                                   <td class="py-3 px-4 text-sm text-gray-700">First Year Diploma Engineering</td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                                   <td class="py-3 px-4 text-center">
                                       <a href="#"
                                           class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="M12 16v-8m0 8l-3-3m3 3l3-3M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                                           </svg>
                                       </a>
                                   </td>
                               </tr>

                               <tr class="hover:bg-gray-50 transition">
                                   <td class="py-3 px-4 text-sm text-gray-700">2</td>
                                   <td class="py-3 px-4 text-sm text-gray-700">Direct Second Year Diploma Engineering</td>
                                   <td colspan="7" class="py-3 px-4 text-center text-gray-500 italic">Documents will be
                                       updated soon</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </main>
       </div>
   @endsection
