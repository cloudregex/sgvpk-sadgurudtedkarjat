   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.admission-side-bar')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-4">Documents Required for Admission :</h2>

               <p class="text-gray-700 text-justify mb-4">
                   At the time of <strong>admission confirmation</strong>, all candidates must produce original documents
                   along with
                   one set of <strong>self-attested photocopies</strong>.
                   These documents are required for both First Year and Direct Second Year Diploma admissions,
                   whether through <strong>CAP or Institute Level Admission (ILA)</strong>.
               </p>

               <!-- First Year Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">
                   For First Year Diploma Admission (Post-SSC) :
               </h3>

               <div class="overflow-x-auto mb-6">
                   <table class="min-w-full border border-gray-300 bg-white text-sm">
                       <thead class="bg-blue-900 text-white">
                           <tr>
                               <th class="px-4 py-2 text-left w-16">Sr. No.</th>
                               <th class="px-4 py-2 text-left">Document Name</th>
                           </tr>
                       </thead>
                       <tbody class="divide-y divide-gray-300">
                           @foreach (['SSC (10th) Marksheet & Passing Certificate', 'School Leaving Certificate (SLC) / Transfer Certificate', 'Domicile Certificate', 'Nationality Certificate / Mention in SLC', 'Caste Certificate (for reserved category candidates)', 'Non-Creamy Layer Certificate (VJNT, OBC, SBC)', 'Aadhaar Card', 'Passport-size Photographs (4 copies)', 'CAP Application Form Printout & Provisional Allotment Letter', 'Seat Acceptance Receipt', 'Gap Certificate (if applicable)'] as $index => $doc)
                               <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : '' }}">
                                   <td class="px-4 py-2 font-medium">{{ $index + 1 }}</td>
                                   <td class="px-4 py-2">{{ $doc }}</td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>

               <!-- Second Year Section -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">
                   For Direct Second Year Admission (Lateral Entry) :
               </h3>

               <div class="overflow-x-auto mb-6">
                   <table class="min-w-full border border-gray-300 bg-white text-sm">
                       <thead class="bg-blue-900 text-white">
                           <tr>
                               <th class="px-4 py-2 text-left w-16">Sr. No.</th>
                               <th class="px-4 py-2 text-left">Document Name</th>
                           </tr>
                       </thead>
                       <tbody class="divide-y divide-gray-300">
                           @foreach (['SSC (10th) Marksheet & Passing Certificate', 'HSC (10+2 Science) Marksheet OR ITI Final Marksheet', 'Provisional Certificate (MCVC/ITI) if applicable', 'School Leaving / Transfer Certificate', 'Domicile Certificate (if applicable)', 'Nationality Certificate / Mention in SLC', 'Caste Certificate (if applicable)', 'Non-Creamy Layer Certificate (if applicable)', 'Aadhaar Card', 'Passport-size Photographs (4 copies)', 'Gap Certificate (if applicable)', 'CAP Application Form Printout & Provisional Allotment Letter', 'Seat Acceptance Receipt'] as $index => $doc)
                               <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : '' }}">
                                   <td class="px-4 py-2 font-medium">{{ $index + 1 }}</td>
                                   <td class="px-4 py-2">{{ $doc }}</td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>

               <!-- Important Instructions -->
               <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3 border-b border-blue-700 pb-1">Important
                   Instructions :</h3>
               <ul class="list-disc ml-6 text-gray-700 space-y-2">
                   <li>Candidates must carry <strong>original documents</strong> for verification during admission.</li>
                   <li>Photocopies must be <strong>self-attested</strong> by the candidate.</li>
                   <li>Incomplete documents may result in cancellation of admission.</li>
                   <li>Final admission is subject to <strong>DTE office confirmation and approval</strong>.</li>
               </ul>
           </main>
       </div>
   @endsection
