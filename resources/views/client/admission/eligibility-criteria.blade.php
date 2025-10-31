   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.admission-side-bar')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-4">Eligibility Criteria</h2>

               <p class="text-gray-700 text-justify mb-4">
                   Admission to Diploma in Engineering & Technology are governed under the rules defined by the
                   <strong>Directorate of Technical Education (DTE), Government of Maharashtra</strong> and are applicable
                   for both
                   <strong>First Year (Post-SSC)</strong> and <strong>Direct Second Year (Lateral Entry)</strong> diploma
                   courses.
               </p>

               <!-- First Year Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">
                   Eligibility for First Year Diploma (Post-SSC):
               </h3>

               <div class="overflow-x-auto mb-6">
                   <table class="min-w-full border border-gray-300 bg-white text-sm">
                       <thead class="bg-blue-900 text-white">
                           <tr>
                               <th class="px-4 py-2 text-left">Criteria</th>
                               <th class="px-4 py-2 text-left">Details</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Nationality</td>
                               <td class="px-4 py-2">Candidate must be an Indian National</td>
                           </tr>
                           <tr class="border-t bg-gray-50">
                               <td class="px-4 py-2 font-medium">Qualification</td>
                               <td class="px-4 py-2">Passed 10th Standard / SSC or equivalent examination</td>
                           </tr>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Minimum Marks</td>
                               <td class="px-4 py-2">At least 35% aggregate marks (no rounding off)</td>
                           </tr>
                           <tr class="border-t bg-gray-50">
                               <td class="px-4 py-2 font-medium">Board of Examination</td>
                               <td class="px-4 py-2">Recognized Board (State / CBSE / ICSE / equivalent)</td>
                           </tr>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Other Boards (Outside Maharashtra)</td>
                               <td class="px-4 py-2">Eligible only under Institute Level quota</td>
                           </tr>
                       </tbody>
                   </table>
               </div>

               <p class="text-gray-700 italic mb-6">
                   <strong>Note:</strong> Candidates passing 10th under grade system must obtain an official conversion
                   certificate
                   from their board.
               </p>

               <!-- Second Year Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">
                   Eligibility for Direct Second Year Diploma (Lateral Entry):
               </h3>

               <div class="overflow-x-auto mb-6">
                   <table class="min-w-full border border-gray-300 bg-white text-sm">
                       <thead class="bg-blue-900 text-white">
                           <tr>
                               <th class="px-4 py-2 text-left">Criteria</th>
                               <th class="px-4 py-2 text-left">Details</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Nationality</td>
                               <td class="px-4 py-2">Candidate must be an Indian National</td>
                           </tr>
                           <tr class="border-t bg-gray-50">
                               <td class="px-4 py-2 font-medium">Qualification (Option 1)</td>
                               <td class="px-4 py-2">
                                   Passed 10+2 (Science) with subjects such as Physics, Chemistry, Mathematics, Computer
                                   Science,
                                   Electronics, IT, etc. (as per Schedule of DTE Rules)
                               </td>
                           </tr>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Qualification (Option 2)</td>
                               <td class="px-4 py-2">
                                   Passed 10th + 2 years ITI in relevant trade under NCVT/SCVT
                               </td>
                           </tr>
                           <tr class="border-t bg-gray-50">
                               <td class="px-4 py-2 font-medium">Working Professionals</td>
                               <td class="px-4 py-2">
                                   Must fulfill criteria within 1 year (for admission within 5th or 6th semester for special
                                   supernumerary seats)
                               </td>
                           </tr>
                           <tr class="border-t">
                               <td class="px-4 py-2 font-medium">Minimum Marks</td>
                               <td class="px-4 py-2">No minimum percentage prescribed, but overall passing is mandatory</td>
                           </tr>
                       </tbody>
                   </table>
               </div>

               <!-- Reservation Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">
                   Reservation Category Candidates :
               </h3>
               <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-6">
                   <li>Must submit valid supporting documents such as Caste Certificate, Non-Creamy Layer Certificate (for
                       applicable categories).</li>
                   <li>Reservation is applicable as per Government of Maharashtra rules.</li>
               </ul>

               <!-- Important Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">Important :</h3>
               <ul class="list-disc ml-6 text-gray-700 space-y-2">
                   <li>The eligibility and rules are subject to revisions/amendments by DTE Maharashtra.</li>
                   <li>Candidates must regularly check updates on the
                       <a href="https://dte.maharashtra.gov.in/" target="_blank"
                           class="text-blue-600 underline">https://dte.maharashtra.gov.in/</a> website.
                   </li>
               </ul>
           </main>
       </div>
   @endsection
