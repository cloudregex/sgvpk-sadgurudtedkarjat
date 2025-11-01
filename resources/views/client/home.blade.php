@extends('layouts.client')

@section('content')
    <!-- 🖼️ Image Slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/1.jpg') }}" alt="Slide 1">
            </div>

            <!-- Slide 2 (replace with your next image) -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/2.jpg') }}" alt="Slide 2">
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/3.jpg') }}" alt="Slide 3">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/4.jpg') }}" alt="Slide 3">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/5.jpg') }}" alt="Slide 3">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/6.jpg') }}" alt="Slide 3">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('asset/sidebar/7.jpg') }}" alt="Slide 3">
            </div>
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination dots -->
        <div class="swiper-pagination"></div>
    </div>

    <section class="bg-gradient-to-r from-blue-50 to-white py-12 px-6 md:px-20 rounded-xl shadow-lg mt-10">
        <div class="grid md:grid-cols-2 gap-8 items-center">

            <!-- Principal Image -->
            <div class="relative group overflow-hidden rounded-2xl shadow-xl">
                <img src="{{ asset('asset/sidebar/principal.jpg') }}" alt="Principal"
                    class="rounded-2xl transform group-hover:scale-105 transition duration-700 ease-in-out">
                <div
                    class="absolute inset-0 bg-black/40 flex flex-col justify-end text-white p-6 opacity-0 group-hover:opacity-100 transition duration-500">
                    <h3 class="text-lg font-semibold">Mrs. Varsha Dhayare</h3>
                    <p class="text-sm italic">Principal</p>
                </div>
            </div>

            <!-- Principal Message -->
            <div class="space-y-5">
                <h2 class="text-3xl font-bold text-blue-800 flex items-center gap-2">
                    <i class="bi bi-person-circle text-blue-600 text-3xl"></i>
                    From the Principal
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    <span class="text-blue-800 font-semibold">Sadguru D.Ed. College</span> is a professional institution
                    committed to excellence in education.
                    Our goal is to prepare young men and women to become leaders of quality in every walk of life, serving
                    humanity with justice, truth, and love.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    We take pride in nurturing the next generation of teachers with the cherished values of Indian culture,
                    discipline, and moral strength.
                </p>
                <a href="#"
                    class="inline-flex items-center gap-2 px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full shadow-md transition duration-300">
                    Read More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="relative bg-gradient-to-br from-blue-50 via-white to-blue-100 py-20 px-6 md:px-20 overflow-hidden">
        <!-- Decorative Blurs -->
        <div class="absolute top-10 left-10 w-64 h-64 bg-blue-200/40 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 right-10 w-64 h-64 bg-pink-200/40 rounded-full blur-3xl -z-10"></div>

        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-blue-900 flex justify-center items-center gap-3">
                <i class="bi bi-chat-quote-fill text-blue-600 text-4xl"></i>
                From The Desk
            </h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Words of wisdom and inspiration from our Founder and Principal.
            </p>
        </div>

        <!-- Desk Cards -->
        <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto">
            <!-- Founder -->
            <div
                class="relative bg-white/80 backdrop-blur-lg border-2 border-blue-300 rounded-3xl shadow-lg hover:shadow-blue-200/70 transition duration-700 p-10 text-center hover:-translate-y-3">
                <div
                    class="absolute -top-10 left-1/2 -translate-x-1/2 w-28 h-28 rounded-2xl overflow-hidden shadow-lg ring-4 ring-blue-200">
                    <img src="{{ asset('asset/founder.png') }}" alt="Founder"
                        class="object-cover w-full h-full hover:scale-110 transition-transform duration-700 ease-in-out">
                </div>
                <div class="mt-20">
                    <h3 class="text-2xl font-bold text-blue-900 mb-1">Mr. Rajendra Phalke</h3>
                    <p class="text-sm text-blue-600 italic mb-4">Founder, President</p>
                    <blockquote class="relative text-gray-700 italic leading-relaxed">
                        <i class="bi bi-quote text-blue-400 text-3xl absolute -top-2 -left-3 opacity-60"></i>
                        A good head and a good heart are always a formidable combination. But when you add to that a
                        literate tongue or pen, then you have something very special.
                    </blockquote>
                </div>
            </div>

            <!-- Principal -->
            <div
                class="relative bg-white/80 backdrop-blur-lg border-2 border-blue-300 rounded-3xl shadow-lg hover:shadow-blue-200/70 transition duration-700 p-10 text-center hover:-translate-y-3">
                <div
                    class="absolute -top-10 left-1/2 -translate-x-1/2 w-28 h-28 rounded-2xl overflow-hidden shadow-lg ring-4 ring-blue-200">
                    <img src="{{ asset('asset/principal.png') }}" alt="Principal"
                        class="object-cover w-full h-full hover:scale-110 transition-transform duration-700 ease-in-out">
                </div>
                <div class="mt-20">
                    <h3 class="text-2xl font-bold text-blue-900 mb-1">Mrs. Varsha Dhayare</h3>
                    <p class="text-sm text-blue-600 italic mb-4">Principal</p>
                    <blockquote class="relative text-gray-700 italic leading-relaxed">
                        <i class="bi bi-quote text-blue-400 text-3xl absolute -top-2 -left-3 opacity-60"></i>
                        The function of education is to teach one to think intensively and critically.
                        Intelligence plus character — that is the goal of true education.
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Bottom Decorative Line -->
        <div class="mt-20 flex justify-center">
            <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-pink-500 rounded-full"></div>
        </div>
    </section>


    <section class="bg-gradient-to-b from-white to-blue-50 py-16 px-6 md:px-20">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10 border-b-2 border-blue-200 inline-block">
            <i class="bi bi-images text-blue-600 mr-2"></i> Photo Gallery
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Image Card 1 -->
            <div
                class="relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:rotate-1 group">
                <img src="./asset/gallery/a1.jpg" alt="Library"
                    class="object-cover w-full h-64 group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                    {{-- <p class="text-white text-sm font-semibold">Library Section</p> --}}
                </div>
            </div>

            <!-- Image Card 2 -->
            <div
                class="relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <img src="./asset/gallery/a2.jpg" alt="Computer Lab"
                    class="object-cover w-full h-64 group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                    {{-- <p class="text-white text-sm font-semibold">Computer Lab</p> --}}
                </div>
            </div>

            <!-- Image Card 3 -->
            <div
                class="relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:-rotate-1 group">
                <img src="./asset/gallery/a3.jpg" alt="Staff Group"
                    class="object-cover w-full h-64 group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                    {{-- <p class="text-white text-sm font-semibold">Staff & Events</p> --}}
                </div>
            </div>

        </div>

        <div class="text-center mt-10">
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full shadow-md transition-all duration-300">
                View More
            </button>
        </div>
    </section>

    <section class="relative bg-gradient-to-r from-blue-50 to-white py-20 px-6 md:px-20 overflow-hidden">
        <!-- Decorative shapes -->
        <div class="absolute top-10 left-10 w-60 h-60 bg-blue-200/30 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 bg-pink-200/30 rounded-full blur-3xl -z-10"></div>

        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-blue-900 flex justify-center items-center gap-3">
                <i class="bi bi-building text-blue-600 text-4xl"></i>
                Our Facilities
            </h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                We provide modern infrastructure and a nurturing environment for holistic education.
            </p>
        </div>

        <!-- Facility Cards -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">

            <!-- Library -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-journal-bookmark text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Library</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    A well-stocked library with reference books, journals, and digital resources for students and faculty.
                </p>
            </div>

            <!-- Computer Lab -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-pc-display text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Computer Lab</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Equipped with modern computers and internet connectivity to enhance learning and research.
                </p>
            </div>

            <!-- Science Lab -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-lightbulb text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Science Lab</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    A well-equipped science lab for hands-on experiments and practical learning experiences.
                </p>
            </div>

            <!-- Playground -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-trophy text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Playground</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Spacious and well-maintained playground for sports, fitness, and recreational activities.
                </p>
            </div>

            <!-- Hostel -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-house-door text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Hostel</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Comfortable hostel facilities ensuring a safe and homely atmosphere for students.
                </p>
            </div>

            <!-- Seminar Hall -->
            <div
                class="bg-white/80 backdrop-blur-lg rounded-2xl border-2 border-blue-300 p-8 text-center shadow-md hover:shadow-blue-200 hover:-translate-y-2 transition duration-500">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="bi bi-easel text-blue-600 text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-2">Seminar Hall</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    A modern seminar hall with audio-visual equipment for lectures, workshops, and events.
                </p>
            </div>
        </div>

        <!-- Bottom Decorative Line -->
        <div class="mt-16 flex justify-center">
            <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-pink-500 rounded-full"></div>
        </div>
    </section>



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
