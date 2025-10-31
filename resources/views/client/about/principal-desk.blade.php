   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <div class="flex flex-col md:flex-row items-start gap-6">
                   <!-- Image Section -->
                   <div class="md:w-1/3 w-full text-center">
                       <img src="{{ asset('/asset/principal.jpg') }}" alt="Principal" class="rounded-lg mx-auto mb-4 shadow">
                       <h3 class="text-lg font-bold text-gray-900">Dr. S. A. Patil</h3>
                       <p class="text-sm text-gray-600 uppercase mb-4">Principal</p>
                       <div class="flex justify-center gap-3">
                           <a href="#" class="p-2 border rounded-md hover:bg-blue-100">
                               <i class="fab fa-facebook-f text-blue-600"></i>
                           </a>
                           <a href="#" class="p-2 border rounded-md hover:bg-blue-100">
                               <i class="fab fa-twitter text-blue-400"></i>
                           </a>
                           <a href="#" class="p-2 border rounded-md hover:bg-blue-100">
                               <i class="fab fa-linkedin-in text-blue-700"></i>
                           </a>
                       </div>
                   </div>

                   <!-- Text Section -->
                   <div class="md:w-2/3 text-gray-700 leading-relaxed text-justify">
                       <p class="font-semibold text-gray-900 mb-3">
                           Dear parents & students, Greetings!!
                       </p>

                       <p class="mb-4">
                           It is observed that the students who are taking admission in the college are especially from
                           rural areas.
                           It is our duty to provide them skills and knowledge to empower and enhance them to meet their
                           goals and achieve grand success in their career.
                       </p>

                       <p class="mb-4">
                           We have already started such efforts in this direction. So, I confidently welcome the students
                           and promise them
                           that their future shall be bright if they are ready to take challenges to become successful
                           professionals,
                           giant leaders, and entrepreneurs. Our team is ready to enhance their qualities which are required
                           to be the
                           best Indian professionals and also encourage them to face rigors in the corporate sector.
                       </p>

                       <p class="mb-4">
                           I always motivate the students by saying, <em>“Try to climb high, wings are waiting for
                               you.”</em>
                           Dattakala group of institutions provides a student-centered learning environment with close
                           student-faculty
                           interaction and constant participation of the industry. The emphasis is purposive curriculum,
                           tailored to the
                           needs of the industry and practical training to enable the young graduate to easily cope with
                           challenges as
                           they get into industries through periodic seminars, symposia, workshops, industrial visits and
                           internships as
                           an integral part of the courses.
                       </p>

                       <p class="mb-4">
                           So, gear up for the hard work and I am sure you will enjoy your learning years.
                       </p>

                       <p class="mt-4 font-semibold text-gray-900">
                           With lots of Best Wishes,
                       </p>
                       <p class="font-bold text-gray-900">
                           Dr. S. A. Patil<br>
                           Principal
                       </p>
                   </div>
               </div>
           </main>

       </div>
   @endsection
