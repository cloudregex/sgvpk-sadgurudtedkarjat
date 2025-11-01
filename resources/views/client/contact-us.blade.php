@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-10 space-y-12">

        <!-- Map Section -->
        <div class="w-full h-96 rounded-lg overflow-hidden shadow">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968193.6604373759!2d73.84743963343394!3d18.57374631837839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc49fa21e709ca7%3A0x8df2f626d8383c59!2sSadguru%20Gram%20Vikas%20Pratishthan&#39;s%20Dynamic%20English%20School!5e0!3m2!1sen!2sin!4v1578292440684!5m2!1sen!2sin"
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
                    Address: Karjat :
                    At.Post. Karjat ,Near Petrol Pump.
                    Tal-Karjat , Dist-Ahmednagar.
                </p>
                <p class="flex items-center gap-2">
                    <i class="bi bi-telephone-fill text-blue-300 text-lg"></i>
                    02489 223 875 / 02589 223 775 / +91 9423733427 / +91 9423788326
                </p>
                <p class="flex items-center gap-2">
                    <i class="bi bi-envelope-fill text-blue-300 text-lg"></i>
                    sadgure@gmail.com
                </p>
            </div>
        </div>
    </div>
@endsection
