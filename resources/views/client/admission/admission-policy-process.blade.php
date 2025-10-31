   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.admission-side-bar')

           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-2xl p-6">
                   <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-600 pb-2 mb-4">
                       Rules of Admission through Centralized Admission Process (CAP) :
                   </h2>

                   <p class="text-sm text-gray-700 leading-relaxed mb-6">
                       This section briefly explains the various stages and procedures adopted for the CAP candidates
                       seeking admission to
                       Engineering/Technology courses as per norms specified by the State CET Cell, Maharashtra. For the
                       academic year
                       2025–2026, admissions shall be conducted through the Centralized Admission Process (CAP). The CAP
                       shall consist of
                       three rounds of allotment based on candidate merit and preferences filled during online registration.
                   </p>

                   <h3 class="text-lg font-semibold text-gray-700 mb-3">
                       Major Steps in the Admission through CAP are summarized below :
                   </h3>

                   <ol class="list-decimal pl-6 space-y-2 text-sm text-gray-700 mb-8">
                       <li>Filling of Online Application Form for Centralized Admission by eligible candidates.</li>
                       <li>Confirmation of Online Application Form at Facilitation Center (FC) as per schedule.</li>
                       <li>Display of Provisional Merit List on the official website.</li>
                       <li>Submission of Grievances (if any) at FC.</li>
                       <li>Display of Final Merit List on the website.</li>
                       <li>Filling and Confirmation of Option Form for Round I through candidate login.</li>
                       <li>Display of Allotment of CAP Round I on website.</li>
                       <li>Reporting to respective Institutes as per allotment of CAP Round I.</li>
                       <li>Filling of Online Option Form for CAP Round II by candidates through their login.</li>
                       <li>Display of Allotment of CAP Round II on website.</li>
                       <li>Reporting to respective Institutes as per allotment of CAP Round II.</li>
                       <li>CAP Round III (if applicable) and reporting to respective institutes.</li>
                   </ol>

                   <h3 class="text-lg font-semibold text-blue-800 mb-2">Note :</h3>
                   <p class="text-sm text-gray-700 leading-relaxed">
                       A notification giving details such as schedule, procedure for Centralized Admission will be displayed
                       on the website
                       and published in leading newspapers. Candidates are advised to read all instructions carefully before
                       filling the
                       form and follow the schedule strictly. The candidate failing to confirm the online application or
                       report to the
                       allotted institute within given time shall lose claim on the allotted seat.
                   </p>
               </div>
           </main>

       </div>
   @endsection
