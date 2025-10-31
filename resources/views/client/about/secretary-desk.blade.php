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
                       <img src="{{ asset('/asset/secretary.jpg') }}" alt="Secretary" class="rounded-lg mx-auto mb-4">
                       <h3 class="text-lg font-bold text-gray-900">Hon.Mrs. Maya Ramdas Zol</h3>
                       <p class="text-sm text-gray-600 uppercase">Founder, Secretary</p>
                   </div>

                   <!-- Text Section -->
                   <div class="md:w-2/3 text-gray-700 leading-relaxed text-justify">
                       <p class="mb-4">
                           Under the guidance of <strong>Secretary, Mrs. Maya Ramdas Zol</strong>, Dattakala Shikshan
                           Sanstha has
                           improved academically, socially, culturally and the placements of this institution are comparable
                           with
                           many well-known educational institutes in Maharashtra. Professionally Mrs. Maya Ramdas Zol is a
                           Social
                           Worker, currently working as Secretary of Dattakala Shikshan Sanstha. She is a Friend,
                           Philosopher and
                           Guide. She supports in all aspects of the Institutions. She takes care of all Government-related
                           permissions, approvals and has dedicated controlled financial condition of trust.
                       </p>
                       <p class="mb-4">
                           She, with our President sir, devotes her time to get the work done in a very disciplined and
                           systematic
                           manner. She gives her heart and soul to any task; she undertakes and looks into grassroots level
                           to make
                           the task accomplished successfully. She seems to us like an eagle, who flies high in the horizon
                           but is
                           connected to the ground firmly.
                       </p>
                       <p class="mb-4">
                           We see in her the lighthouse in the ocean. The lighthouse which not only guides the ships to
                           their
                           destination but also saves drowning ships in stormy seas to their destination. She is ever alert
                           and
                           gives importance to every minute detail of any issue she faces.
                       </p>
                       <p class="mb-4">
                           Hon’ Mrs. Maya Ramdas Zol has kept interest in day-to-day administration. She can see through the
                           ability
                           and knows how to deal with each and every aspect of the task efficiently. She is an epitome of
                           patience.
                           She patiently looks into the matter, understands it to its core and then gives her decision. Her
                           acquaintance with the institutions has brought additional discipline and enthusiasm in all the
                           staff.
                       </p>
                       <p class="mb-4">
                           Hon’ Mrs. Maya Ramdas Zol is very strict but she is kind as well. Hon’ Mrs. Maya Ramdas Zol is a
                           great
                           human being with vision, integrity, courage, understanding, the power of articulation and
                           profundity of
                           character. Her distinguished addition to the Institutions has surely added the laurels of
                           Dattakala
                           Shikshan Sanstha and will take our institution to the peak of success and hard work.
                       </p>
                       <p class="mb-4">
                           She knows how to handle any situation tactfully. She possesses the knowledge of psychology of
                           students and
                           knows the way to touch the minds of people. Her dignified presence adds to the grandeur of the
                           place.
                           Hon’ Mrs. Maya Ramdas Zol is a good leader. She has vision and inspires others to help them turn
                           into
                           reality. She bears a positive mindset which helps us to be innovative and creative. She inspires
                           everyone
                           around to pursue dreams, conquer goals and walk in purpose.
                       </p>
                       <p class="mb-4 italic">
                           The quote suits her the best: “Make silent moves as a quiet conqueror and let the results of your
                           action
                           speak for you.”
                       </p>

                       <h3 class="text-lg font-bold text-gray-900 mt-6">Hon.Mrs. Maya Ramdas Zol</h3>
                       <p class="text-sm text-gray-700 font-semibold">
                           Founder, Secretary, Dattakala Shikshan Sanstha
                       </p>
                   </div>
               </div>
           </main>
       </div>
   @endsection
