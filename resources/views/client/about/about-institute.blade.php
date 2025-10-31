   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <h2 class="text-2xl font-bold text-blue-900 mb-4">DATTAKALA GROUP OF INSTITUTIONS</h2>
               <img src="{{ asset('/asset/dattakala-banner-1.png') }}" alt="Institute" class="w-full rounded-lg mb-5">

               <p class="text-gray-700 text-justify mb-4">
                   Dattakala Group of Institutions is a premier educational institute located in Swami-Chincholi, Taluka
                   Daund, Pune
                   District. Established with a vision to provide quality technical education to students primarily from
                   rural
                   backgrounds, the institute is dedicated to fostering academic excellence and skill development in the
                   field of
                   diploma engineering.
               </p>

               <p class="text-gray-700 text-justify mb-4">
                   Our institute offers a range of diploma courses designed to equip students with both theoretical
                   knowledge and
                   practical skills essential for today’s competitive industrial environment. We emphasize a modern
                   student-centered
                   learning approach, integrating modern teaching methods, advanced laboratory facilities, and
                   industry-aligned
                   training programs.
               </p>

               <p class="text-gray-700 text-justify mb-4">
                   Committed to holistic development, Dattakala Group of Institutions promotes a nurturing and inclusive
                   environment
                   that encourages innovation, teamwork, leadership, and ethical values. Our experienced faculty members
                   are devoted
                   to mentoring students to realize their full potential and succeed in their careers.
               </p>

               <!-- Mission Section -->
               <h3 class="text-xl font-semibold text-blue-900 mt-6 mb-3 border-b border-blue-800 pb-1">Our Mission :</h3>
               <ul class="list-disc ml-6 text-gray-700 space-y-2">
                   <li>Impart technical education to create able & competent engineers.</li>
                   <li>Entrepreneurship development.</li>
                   <li>All-round personality development.</li>
                   <li>Training & placement in prominent corporates.</li>
                   <li>Institute-Industry interaction.</li>
               </ul>

               <!-- Core Values -->
               <h3 class="text-xl font-semibold text-blue-900 mt-6 mb-3 border-b border-blue-800 pb-1">Core Values :</h3>
               <ul class="list-disc ml-6 text-gray-700 space-y-2">
                   <li>Integrity, Upholding honesty, transparency, and ethical practices in all endeavors.</li>
                   <li>Excellence, Striving for the highest standards in education, research, and service.</li>
                   <li>Inclusiveness, Providing equal opportunities to students from diverse backgrounds.</li>
                   <li>Innovation, Encouraging creativity, problem-solving, and discovery of new knowledge.</li>
                   <li>Collaboration, Seeking strong partnerships with industry, academia, and society.</li>
                   <li>Social Responsibility, Commitment towards societal welfare and environmental sustainability.</li>
               </ul>
           </main>
       </div>
   @endsection
