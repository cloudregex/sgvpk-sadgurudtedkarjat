@extends('layouts.client')

@section('content')
    <!-- 🖼️ Image Slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="./asset/Dattakala-banner.png" alt="Slide 1">
            </div>

            <!-- Slide 2 (replace with your next image) -->
            <div class="swiper-slide">
                <img src="./asset/Dattakala-banner.png" alt="Slide 2">
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="./asset/Dattakala-banner.png" alt="Slide 3">
            </div>
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination dots -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- about -->
    <section id="printable-area"
        class="max-w-6xl mx-auto my-10 bg-white shadow-lg rounded-2xl flex flex-col md:flex-row items-center gap-8 p-8">
        <!-- Left Image -->
        <div class="w-full md:w-1/2">
            <img src="/asset/Dattakala-index.jpeg" alt="Dattakala Institution"
                class="rounded-xl shadow-md w-full object-cover" />
        </div>

        <!-- Right Content -->
        <div class="w-full md:w-1/2">
            <h2
                class="text-2xl md:text-3xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-4 uppercase">
                Dattakala Group of Institution
            </h2>
            <p class="text-base md:text-lg leading-relaxed text-justify mb-3">
                Dattakala Shikshan Sanstha is situated on a picturesque hilltop with a
                panoramic view of the Sahyadri Ranges. The students have a
                pollution-free environment where they can breathe fresh air & play on
                spacious playfields. The entire enchanting atmosphere is conducive to
                the overall development of the student.
            </p>
            <p class="text-base md:text-lg leading-relaxed text-justify">
                To achieve this, Dattakala Shikshan Sanstha ensures the highest quality
                of faculty who are not only highly qualified and trained but also work
                with a missionary zeal of shaping the students’ personality.
            </p>
        </div>
    </section>

    <!-- Main Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Campus Tour -->
        <div>
            <h2
                class="text-xl md:text-2xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-4 uppercase">
                Dattakala Campus Tour
            </h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="rounded-lg shadow-md w-full h-64 md:h-72" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="Dattakala Shikshan Sanstha" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Approved & Affiliated -->
        <div>
            <h2
                class="text-xl md:text-2xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-4 uppercase">
                Approved & Affiliated By
            </h2>
            <div class="grid grid-cols-2 gap-4">
                <img src="./asset/aicte-logo.png" alt="NAAC" class="rounded-lg shadow-md object-contain h-32 mx-auto" />
                <img src="./asset/sppu-logo.png" alt="MSBTE" class="rounded-lg shadow-md object-contain h-32 mx-auto" />
                <img src="./asset/mrtsm-mumbai-logo.png" alt="SPPU"
                    class="rounded-lg shadow-md object-contain h-32 mx-auto" />
                <img src="./asset/naac-logo.png" alt="AICTE" class="rounded-lg shadow-md object-contain h-32 mx-auto" />
                <img src="./asset/sppu-logo.png" alt="MSBTE" class="rounded-lg shadow-md object-contain h-32 mx-auto" />
                <img src="./asset/mrtsm-mumbai-logo.png" alt="SPPU"
                    class="rounded-lg shadow-md object-contain h-32 mx-auto" />

            </div>
        </div>

        <!-- Vision and Mission -->
        <div class="space-y-6">
            <div>
                <h2
                    class="text-xl md:text-2xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-4 uppercase">
                    Our Vision
                </h2>
                <p class="text-sm md:text-base leading-relaxed text-justify">
                    The vision of the institution is to provide pre-eminent educational experiences that are
                    stimulating,
                    responsive to the needs of the present century and prepare students for leadership in their
                    profession
                    and society. It also aims to address the critical needs of industry and foster economic development.
                </p>
            </div>

            <div>
                <h2
                    class="text-xl md:text-2xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-4 uppercase">
                    Our Mission
                </h2>
                <ul class="list-disc ml-6 text-sm md:text-base space-y-1">
                    <li>Impart technical education to create able & competent engineers.</li>
                    <li>Encourage entrepreneurship development.</li>
                    <li>Ensure all-round personality development.</li>
                    <li>Provide training & placement in reputed industries.</li>
                    <li>Promote institute-industry interaction.</li>
                </ul>
            </div>

            <div class="pt-2">
                <a href="#"
                    class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                    New Education Policy (NEP)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Highlights + Placed Students Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Highlights -->
        <div>
            <h2
                class="text-2xl md:text-3xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-6 uppercase">
                Highlights
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div
                    class="bg-gradient-to-br from-blue-500 to-sky-400 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">50+</h3>
                    <p class="text-sm">Companies Visiting</p>
                </div>
                <div
                    class="bg-gradient-to-br from-indigo-900 to-indigo-700 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">2100+</h3>
                    <p class="text-sm">Placed Students</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-500 to-cyan-400 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">15 LPA</h3>
                    <p class="text-sm">Highest Package</p>
                </div>
                <div
                    class="bg-gradient-to-br from-indigo-900 to-purple-800 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">30,000+</h3>
                    <p class="text-sm">Books in Library</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-500 to-sky-400 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">150+</h3>
                    <p class="text-sm">Students Placed / Year</p>
                </div>
                <div
                    class="bg-gradient-to-br from-indigo-900 to-indigo-700 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">30+</h3>
                    <p class="text-sm">Laboratories</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-500 to-cyan-400 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">90+</h3>
                    <p class="text-sm">Faculty</p>
                </div>
                <div
                    class="bg-gradient-to-br from-indigo-900 to-purple-700 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">5,000+</h3>
                    <p class="text-sm">Students</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-500 to-sky-400 text-white rounded-xl shadow p-4 text-center hover:scale-105 transition">
                    <h3 class="text-2xl font-bold">25,000+</h3>
                    <p class="text-sm">Alumni</p>
                </div>
            </div>
        </div>

        <!-- Placed Students -->
        <div>
            <h2
                class="text-2xl md:text-3xl font-bold text-indigo-900 border-b-2 border-dotted border-indigo-900 pb-2 mb-6 uppercase">
                Placed Students
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Student 1 -->
                <div
                    class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4 hover:shadow-lg hover:-translate-y-1 transition">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-16 h-16 rounded-full object-cover"
                        alt="">
                    <div>
                        <h3 class="font-bold text-indigo-900">Ranjit Dhanaji Waghmode</h3>
                        <p class="text-sm text-gray-600">Technogem Consultant</p>
                        <p class="text-xs text-blue-600 font-semibold">7.2 LPA</p>
                    </div>
                </div>

                <!-- Student 2 -->
                <div
                    class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4 hover:shadow-lg hover:-translate-y-1 transition">
                    <img src="https://randomuser.me/api/portraits/women/47.jpg"
                        class="w-16 h-16 rounded-full object-cover" alt="">
                    <div>
                        <h3 class="font-bold text-indigo-900">Gaikwad Amrapali Dinesh</h3>
                        <p class="text-sm text-gray-600">Dattakala Group of Institutes</p>
                        <p class="text-xs text-blue-600 font-semibold">2.4 LPA</p>
                    </div>
                </div>

                <!-- Student 3 -->
                <div
                    class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4 hover:shadow-lg hover:-translate-y-1 transition">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg"
                        class="w-16 h-16 rounded-full object-cover" alt="">
                    <div>
                        <h3 class="font-bold text-indigo-900">Mane Vanita Dnyandeo</h3>
                        <p class="text-sm text-gray-600">Phadtare Polytechnic Kalamb</p>
                        <p class="text-xs text-blue-600 font-semibold">2.4 LPA</p>
                    </div>
                </div>

                <!-- Student 4 -->
                <div
                    class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4 hover:shadow-lg hover:-translate-y-1 transition">
                    <img src="https://randomuser.me/api/portraits/men/90.jpg" class="w-16 h-16 rounded-full object-cover"
                        alt="">
                    <div>
                        <h3 class="font-bold text-indigo-900">Ghanwat Sachin Sanjay</h3>
                        <p class="text-sm text-gray-600">SWM Jal Jeevan Mission</p>
                        <p class="text-xs text-blue-600 font-semibold">3 LPA</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="w-full max-w-12xl px-4 py-10 bg-sky-800 mx-auto">
        <h2 class="text-center text-white text-2xl md:text-12xl font-bold uppercase tracking-wider mb-8 inline-block pb-2">
            Our Students Working
        </h2>

        <div class="relative overflow-hidden">
            <!-- Slides wrapper -->
            <div id="logoCarousel" class="flex transition-transform duration-700 ease-in-out">

                <!-- Repeat your logos -->
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <div
                    class="min-w-[50%] sm:min-w-[33.33%] md:min-w-[25%] lg:min-w-[16.66%] flex justify-center items-center px-4">
                    <img src="./asset/Dattakalalogo.png" class="w-48 h-28 object-contain bg-white p-2 rounded-lg shadow">
                </div>
                <!-- Add more logos as needed -->
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn"
                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow hover:bg-gray-200">
                &#10094;
            </button>
            <button id="nextBtn"
                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow hover:bg-gray-200">
                &#10095;
            </button>
        </div>




        <!-- Dots -->
        <div class="flex justify-center mt-4 space-x-2">
            <span class="dot w-3 h-3 bg-white rounded-full opacity-70"></span>
            <span class="dot w-3 h-3 bg-white rounded-full opacity-30"></span>
            <span class="dot w-3 h-3 bg-white rounded-full opacity-30"></span>
        </div>
    </div>
    @push('Scripts')
        <script>
            const carousel = document.getElementById('logoCarousel');
            const slides = carousel.children.length;
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            let index = 0;

            function getVisible() {
                if (window.innerWidth >= 1024) return 6; // lg+
                if (window.innerWidth >= 768) return 4; // md
                if (window.innerWidth >= 640) return 3; // sm
                return 2; // default mobile
            }

            function showSlide(i) {
                const visible = getVisible();
                carousel.style.transform = `translateX(-${i * 100}%)`;
            }

            nextBtn.addEventListener('click', () => {
                const visible = getVisible();
                index = (index + 1) % Math.ceil(slides / visible);
                showSlide(index);
            });

            prevBtn.addEventListener('click', () => {
                const visible = getVisible();
                index = (index - 1 + Math.ceil(slides / visible)) % Math.ceil(slides / visible);
                showSlide(index);
            });

            // Auto-slide
            setInterval(() => {
                const visible = getVisible();
                index = (index + 1) % Math.ceil(slides / visible);
                showSlide(index);
            }, 3000);
        </script>
    @endpush
@endsection
