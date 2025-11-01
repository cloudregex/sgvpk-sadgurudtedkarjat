@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16 space-y-16">

        <!-- 🔹 About Section -->
        <section
            class="relative mb-5 bg-gradient-to-br from-blue-50 via-white to-blue-100 p-10 rounded-3xl shadow-lg overflow-hidden">
            <!-- Decorative Circle -->
            <div class="absolute top-10 right-10 w-48 h-48 bg-blue-200/40 rounded-full blur-3xl -z-10"></div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="text-4xl font-extrabold text-blue-900 flex items-center gap-2 mb-4">
                        <i class="bi bi-info-circle text-blue-600 text-4xl"></i>
                        About Us
                    </h2>
                    <h3 class="text-lg font-semibold text-gray-700 uppercase tracking-wide mb-2">
                        SADGURU D.ED COLLEGE KARJAT
                    </h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Sadguru D.Ed. College is a professional institution in the field of education aimed at training
                        young men
                        and women to be leaders of quality in all walks of life and serve their fellowmen with justice,
                        truth, and love.
                    </p>
                    <h4 class="text-blue-800 font-semibold text-lg mb-2 flex items-center gap-2">
                        <i class="bi bi-journal-check text-blue-500"></i>
                        Principal’s Affirmations
                    </h4>
                    <p class="text-gray-700 leading-relaxed">
                        Teachers are the pillars of a Nation. Society is shaped by the contribution of teachers.
                        Our college strives to produce professionally competent, and committed teachers who can bring
                        positive
                        change to society through education, values, and knowledge.
                    </p>

                    <p class="mt-4 font-semibold text-blue-700">– Mrs. Varsha Dhayare, Principal</p>
                </div>

                <!-- Image Section -->
                <div class="relative">
                    <img src="{{ asset('asset/about-college.jpg') }}" alt="College Building"
                        class="rounded-3xl shadow-xl hover:scale-105 transition-transform duration-700">

                </div>
            </div>
        </section>

        <!-- 🔹 Trustee Members Table -->
        <section class="bg-white p-10 mb-4 rounded-3xl shadow-lg border border-blue-100">
            <h3 class="text-3xl font-bold text-blue-900 mb-6 flex items-center gap-2">
                <i class="bi bi-people-fill text-blue-600 text-3xl"></i>
                Trustee Members
            </h3>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-blue-200 rounded-lg">
                    <thead class="bg-blue-100 text-blue-800 uppercase text-sm font-semibold">
                        <tr>
                            <th class="py-3 px-4 text-left">Sr. No</th>
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">Designation</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-100 text-gray-700">
                        <tr>
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Shri. Phalke Jayasingrao Rajendra Anandrao</td>
                            <td class="py-2 px-4">President</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Shri. Godewar Devdatta Maruti</td>
                            <td class="py-2 px-4">Vice President</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">3</td>
                            <td class="py-2 px-4">Shri. Abdul Demodar Dhorkar</td>
                            <td class="py-2 px-4">Secretary</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">4</td>
                            <td class="py-2 px-4">Shri. Tondwalkar Anandrao Sahebrao</td>
                            <td class="py-2 px-4">Treasurer</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">5</td>
                            <td class="py-2 px-4">Smt. Phalke Shailaja Anandrao</td>
                            <td class="py-2 px-4">Trustee</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- 🔹 Founder & Principal Section -->
        <section class="bg-gradient-to-br from-blue-50 to-white py-16 px-6 md:px-20 rounded-3xl shadow-lg">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-blue-900 flex justify-center items-center gap-3">
                    <i class="bi bi-chat-left-quote-fill text-blue-600 text-4xl"></i>
                    From The Desk
                </h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                    Words of wisdom and inspiration from our Founder and Principal.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto">
                <!-- Founder -->
                <div
                    class="relative bg-white/80 backdrop-blur-lg border-2 border-blue-300 rounded-3xl shadow-md hover:shadow-blue-200/70 transition duration-700 p-10 text-center hover:-translate-y-2">
                    <div
                        class="relative w-28 h-28 mx-auto rounded-2xl overflow-hidden shadow-lg ring-4 ring-blue-200 -mt-20">
                        <img src="{{ asset('asset/founder.png') }}"
                            class="object-cover w-full h-full hover:scale-110 transition-transform duration-700">
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mt-8 mb-1">Mr. Rajendra Phalke</h3>
                    <p class="text-sm text-blue-600 italic mb-4">Founder, President</p>
                    <p class="text-gray-700 italic leading-relaxed">
                        “A good head and a good heart are always a formidable combination.
                        But when you add to that a literate tongue or pen, you have something very special.”
                    </p>
                </div>

                <!-- Principal -->
                <div
                    class="relative bg-white/80 backdrop-blur-lg border-2 border-blue-300 rounded-3xl shadow-md hover:shadow-blue-200/70 transition duration-700 p-10 text-center hover:-translate-y-2">
                    <div
                        class="relative w-28 h-28 mx-auto rounded-2xl overflow-hidden shadow-lg ring-4 ring-blue-200 -mt-20">
                        <img src="{{ asset('asset/principal.png') }}"
                            class="object-cover w-full h-full hover:scale-110 transition-transform duration-700">
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mt-8 mb-1">Mrs. Varsha Dhayare</h3>
                    <p class="text-sm text-blue-600 italic mb-4">Principal</p>
                    <p class="text-gray-700 italic leading-relaxed">
                        “The function of education is to teach one to think intensively and critically.
                        Intelligence plus character — that is the goal of true education.”
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
