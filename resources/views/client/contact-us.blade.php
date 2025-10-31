@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-10 space-y-12">

        <!-- Map Section -->
        <div class="w-full h-96 rounded-lg overflow-hidden shadow">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4967305840457!2d75.756!3d18.547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3b09f4b69a72d%3A0x9a8ed8c21a4d04e4!2sDatta%20Shikshan%20Sanstha!5e0!3m2!1sen!2sin!4v1665567890123"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Contact Section -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Form -->
            <div class="w-full md:w-2/3 bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-semibold text-[#140f64] mb-4">Get in Touch</h2>

                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Enter Your Name"
                            class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-500" />
                        <input type="email" placeholder="Enter Your Email"
                            class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Enter Your Phone No."
                            class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-500" />
                        <input type="text" placeholder="Enter Your City"
                            class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <textarea placeholder="Your Message" class="border rounded-md p-2 w-full h-28 focus:ring-2 focus:ring-blue-500"></textarea>
                    <button type="submit" class="bg-[#140f64] hover:bg-blue-800 text-white px-6 py-2 rounded-md">
                        <i class="bi bi-send-fill mr-1"></i> Submit
                    </button>
                </form>
            </div>

            <!-- Right Contact Info -->
            <div class="w-full md:w-1/3 bg-[#140f64] text-white rounded-lg shadow p-6 space-y-4">
                <h3 class="text-lg font-semibold border-b border-gray-400 pb-2 mb-2">Contact Information</h3>

                <p class="flex items-start gap-2">
                    <i class="bi bi-geo-alt-fill text-blue-300 text-xl"></i>
                    Address: At & Post Nagewadi, Tal & Dist. Pune, Maharashtra – 413102
                </p>
                <p class="flex items-center gap-2">
                    <i class="bi bi-telephone-fill text-blue-300 text-lg"></i>
                    02162-250020 / 9892341141
                </p>
                <p class="flex items-center gap-2">
                    <i class="bi bi-envelope-fill text-blue-300 text-lg"></i>
                    dssan.pune@gmail.com
                </p>
            </div>
        </div>

        <!-- How to Reach Section -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-semibold text-[#140f64] mb-4">How to Reach Us</h2>

            <div class="divide-y divide-gray-200">
                <div class="py-3">
                    <h3 class="font-semibold text-blue-700 flex items-center gap-2">
                        <i class="bi bi-car-front-fill"></i> By Car
                    </h3>
                    <p class="text-gray-700 ml-6">You can easily get regular buses to Bhigwan from major cities. The campus
                        is 3 km from Bhigwan Bus Stand.</p>
                </div>
                <div class="py-3">
                    <h3 class="font-semibold text-blue-700 flex items-center gap-2">
                        <i class="bi bi-train-front-fill"></i> By Train
                    </h3>
                    <p class="text-gray-700 ml-6">The nearest railway station is Bhigwan, just 5 km away from the institute.
                    </p>
                </div>
                <div class="py-3">
                    <h3 class="font-semibold text-blue-700 flex items-center gap-2">
                        <i class="bi bi-airplane-fill"></i> By Plane
                    </h3>
                    <p class="text-gray-700 ml-6">The nearest airport is Pune International Airport (110 km from campus).
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Numbers Section -->
        <div class="bg-gray-50 rounded-lg shadow p-6">
            <h2 class="text-2xl font-semibold text-[#140f64] mb-4">Contacts</h2>

            <ul class="space-y-2 text-gray-800">
                <li><i class="bi bi-person-circle text-[#140f64] mr-2"></i> Diploma: 02162-250020</li>
                <li><i class="bi bi-person-circle text-[#140f64] mr-2"></i> Engineering: 02162-250030</li>
                <li><i class="bi bi-person-circle text-[#140f64] mr-2"></i> MBA/MCA: 02162-250040</li>
                <li><i class="bi bi-person-circle text-[#140f64] mr-2"></i> School: 02162-250050</li>
                <li><i class="bi bi-person-circle text-[#140f64] mr-2"></i> Pharmacy: 02162-250060</li>
            </ul>
        </div>
    </div>
@endsection
