   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-semibold text-blue-700 mb-4 border-b pb-2">
                   Approvals and Affiliations :
               </h2>

               <div class="text-gray-700 leading-relaxed text-justify space-y-4">
                   <p>
                       The <span class="font-semibold">Dattakala Group of Institutions (Diploma Section)</span> operates
                       under the aegis of
                       <span class="font-semibold">Dattakala Shikshan Sanstha</span>, a registered educational trust
                       committed to quality technical education.
                   </p>

                   <p class="font-semibold">Approved By:</p>

                   <ul class="list-disc pl-5 space-y-2">
                       <li>
                           <span class="font-semibold">All India Council for Technical Education (AICTE), New
                               Delhi</span><br>
                           Approval granted under AICTE Letter No.:
                           <span class="font-semibold">Western/1-44638125083/2025/EOA</span>,
                           dated <span class="font-semibold">10/04/2025</span>.<br>
                           Valid for the Academic Year <span class="font-semibold">2025–26</span>.
                       </li>

                       <li>
                           <span class="font-semibold">Affiliated To:</span><br>
                           <span class="font-semibold">Maharashtra State Board of Technical Education (MSBTE),
                               Mumbai</span><br>
                           Permanent MSBTE Code: <span class="font-semibold">1712</span><br>
                           Affiliation granted for the academic year <span class="font-semibold">2025–26</span>.<br>
                           Courses are conducted in accordance with the semester pattern and curriculum prescribed by MSBTE.
                       </li>

                       <li>
                           <span class="font-semibold">Recognized By:</span><br>
                           <span class="font-semibold">Directorate of Technical Education (DTE), Government of
                               Maharashtra</span><br>
                           Government Resolution No.: <span class="font-semibold">2013/(81/13)/Tech.Edu.-5</span>, dated
                           <span class="font-semibold">15/05/2013</span><br>
                           DTE Sanction Letter No.: <span
                               class="font-semibold">10/AICTE/DIPLOMA/MANYATA/PR.VA/2013/459</span>, dated
                           <span class="font-semibold">17/06/2013</span>.
                       </li>
                   </ul>
               </div>
           </main>

       </div>
   @endsection
