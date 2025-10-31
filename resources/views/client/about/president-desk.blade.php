   @extends('layouts.client')

   @section('content')
       <!-- Main Section -->
       <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

           <!-- Sidebar -->
           @include('components.about-institute')

           <!-- Content -->
           <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
               <div class="flex flex-col md:flex-row items-start gap-6">
                   <!-- Image -->
                   <div class="md:w-1/3 w-full text-center">
                       <img src="{{ asset('/asset/president.jpg') }}" alt="President" class="rounded-lg mx-auto mb-4">
                       <h3 class="text-lg font-bold text-gray-900">Hon.Prof. Ramdas M. Zol</h3>
                       <p class="text-sm text-gray-600 uppercase">Founder, President</p>
                   </div>

                   <!-- Text -->
                   <div class="md:w-2/3 text-gray-700 leading-relaxed text-justify">
                       <p class="mb-4">
                           The Founder President is <strong>Prof. Ramdas Madhukar Zol</strong>, a visionary man with an aim
                           of
                           building an education hub for the betterment of society and to contribute to the provision of an
                           excellent
                           learning environment.
                       </p>
                       <p class="mb-4">
                           Under the leadership of <strong>Founder President Prof. Mr. Ramdas Madhukar Zol</strong>,
                           Dattakala Shikshan Sanstha is emerging as a leading educational institute in a 50 Acres area.
                           Professionally Hon’ Prof. Ramdas Zol is a Professor in Mathematics.
                       </p>
                       <p class="mb-4">
                           Hon’ Prof. Ramdas Zol having brilliant skill and interest in academic teaching as well as
                           educational
                           sector started his working career with Sinhgad Institute, Pune from June 2001 to Aug 2007.
                           During his service tenure he has obtained all knowledge and skill of running and establishing
                           various
                           professional educational institutes. Being a student from the rural area he knows how difficult
                           it is to
                           take higher education in the urban area. Hon’ Prof. Ramdas Zol somewhere has been thinking in his
                           mind
                           that about rural educational system and overlooked his past life and he realized that he
                           struggled to get
                           the education he wanted and then the journey started.
                       </p>
                       <p class="mb-4">
                           Hon’ Prof. Ramdas Zol decided to establish an elite educational institute in rural areas with all
                           colleges
                           UG, PG in Engineering, Management, Pharmacy, Medical, SSC & CBSE School and Jr. College. As we
                           know,
                           “Well begun is half done”, Hon’ Prof. Ramdas Zol took the first step and started Primary school
                           in 2009.
                           Only sir can take this credit and started every year a new institute in Dattakala Shikshan
                           Sanstha from
                           2009 to 2024 like School, CBSE, Junior College, Polytechnic, Engineering (UG, PG), MBA, MCA,
                           Pharmacy and
                           Medical respectively.
                       </p>
                       <p class="mb-4">
                           In only 15 years Dattakala Shikshan Sanstha is clearly and professionally emerging as one of the
                           leading
                           educational institutes in rural areas. Currently, Dattakala Shikshan Sanstha has nearly 4500
                           student’s
                           strength and 450 Teaching-Non teaching working faculties.
                       </p>
                       <p class="mb-4">
                           Prof. Ramdas Zol always has been a progressive educator and student motivator. He always wants to
                           bring
                           new techniques and technology to teach new things to the students. He has a desire to bring about
                           an
                           intellectual awakening by a balanced combination of knowledge and preservation of our culture
                           with this
                           Prof. Ramdas Zol also looking forward to focus on to empowerment and supporting students to
                           become leaders
                           of the Society.
                       </p>
                       <p class="mb-4">
                           For his Pioneering, Devotional and Dedicating work Hon’ Prof. Ramdas Zol has received more than
                           15
                           prestigious awards from Cultural, Social, Public, Private and Industrial bodies.
                       </p>
                       <h3 class="text-lg font-bold text-gray-900 mt-6">Hon.Prof. Ramdas M. Zol</h3>
                       <p class="text-sm text-gray-700 font-semibold">
                           Founder, President, Dattakala Shikshan Sanstha<br>
                           (M.Sc. Maths)
                       </p>
                   </div>
               </div>
           </main>
       </div>
   @endsection
