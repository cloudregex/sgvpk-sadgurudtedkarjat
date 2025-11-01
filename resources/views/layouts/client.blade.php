<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dattakala Group of Institutions</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/favicon.ico') }}">

    <!-- ✅ Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ✅ Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper.js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #0b0b66;
        }

        .swiper-slide img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .swiper-slide img {
                height: 250px;
            }
        }
    </style>
</head>

<body class="font-sans">

    <!-- 🔵 Top Header -->
    <div class="bg-sky-600 text-white text-sm">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center px-4 py-2">
            <div class="flex flex-wrap items-center space-x-4">
                <span class="flex items-center space-x-2">
                    <i class="bi bi-envelope-fill"></i>
                    <span>dkcom.edu@rediffmail.com</span>
                </span>
                <span class="flex items-center space-x-2">
                    <i class="bi bi-telephone-fill"></i>
                    <span>02489 223 875 / 02589 223 775</span>
                </span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-yellow-300"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="bi bi-facebook"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="bi bi-google"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- 🏫 Logo and Title Section -->
    <div class="bg-white py-4 border-b">
        <div
            class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between px-4 text-center md:text-left space-y-3 md:space-y-0">
            <div class="flex flex-col md:flex-row items-center md:space-x-4">
                <!-- Dummy logo -->
                <img src="{{ asset('asset/logo.png') }}" alt="DK Logo" class="w-28 h-28 object-contain">
                <div>
                    <h5>Sadguru Gramvikas Pratishthan's</h5>
                    <h1 class="text-2xl md:text-3xl font-bold text-blue-900">SADGURU
                        D.Ed COLLEGE KARJAT</h1>
                    <p class="text-sm text-gray-700 leading-tight">
                        Gat No-541/2, Off Pune-Solapur Highway, Swami-Chincholi (Bhigwan), Tal-Daund,
                        Dist-Pune-413130<br>
                        <i class="bi bi-telephone-fill"></i> 9673002299 &nbsp; | &nbsp;
                        <i class="bi bi-envelope-fill"></i> dkcom.edu@rediffmail.com
                    </p>
                    <p class="text-sm font-semibold mt-1 text-gray-800">
                        NAAC Accredited | ISO Certified
                    </p>
                    <p class="text-sm text-gray-700">
                        Affiliated to Savitribai Phule Pune University (SPPU), Approved by AICTE, Recognised by Govt. of
                        Maharashtra, MSBTE, DTE Mumbai.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔷 Navigation Bar -->
    <nav class="bg-blue-900 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-3 md:py-0">
                <!-- Hamburger Button -->
                <button id="menu-btn" class="text-white text-2xl md:hidden focus:outline-none">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Menu -->
                @php
                    $current = request()->path();
                @endphp

                <ul id="menu"
                    class="hidden md:flex flex-col md:flex-row absolute md:relative top-0 left-0 w-full h-screen md:h-auto bg-blue-900 md:bg-transparent justify-center items-center md:justify-start space-y-4 md:space-y-0 z-40">

                    <button id="close-menu-btn"
                        class="absolute top-4 right-4 text-white text-3xl md:hidden">&times;</button>

                    @foreach ([
        '/' => 'HOME',
        'about' => 'ABOUT',
        'finance' => 'FINANCE',
        'deled' => 'D.EL.ED',
        'mandatory-disclosure' => 'MANDATORY DISCLOSURE',
        'facilities' => 'FACILITIES',
        'biomatric' => "BIOMETRIC'S",
        'gallery' => 'GALLERY',
        'impsite' => "IMP SITE'S",
        'student-details' => 'STUDENT DETAILS',
        'contact' => 'CONTACT US',
    ] as $url => $label)
                        <li>
                            <a href="{{ url($url) }}"
                                class="block font-semibold px-2 py-4 uppercase transition-all duration-200
                    {{ $current === trim($url, '/') ? 'bg-blue-700 border-b-4 border-yellow-400 text-white' : 'text-white hover:bg-blue-700' }}">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- 🔵 Footer Section -->
    <footer class="bg-[#2f3a6a] text-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

            <!-- About Section -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-white">About Us</h3>
                <p class="text-sm leading-relaxed">
                    Sadguru D.Ed. College is a professional institution in the field of education
                    aiming to train young men and women to be leaders of quality in all walks of life
                    and serve their fellowmen with justice, truth, and love.
                </p>
            </div>

            <!-- Menu 1 -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-white">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-blue-400 transition">Home</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">About Us</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">Finance</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">Mandatory Disclosure</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">Biometric's</a></li>
                </ul>
            </div>

            <!-- Menu 2 -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-white">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-blue-400 transition">Admission</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">Facilities</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">News</a></li>
                    <li><a href="/" class="hover:text-blue-400 transition">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-white">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2">
                        <i class="bi bi-geo-alt text-blue-300 text-lg"></i>
                        <span>At.Post. Karjat, Opp Dada Patil College, Tal-Karjat, Dist-Ahmednagar</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="bi bi-telephone text-blue-300"></i>
                        <span>02489 223 875 / 02589 223 775</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="bi bi-phone text-blue-300"></i>
                        <span>+91 9423733427 / +91 9423788326</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="bi bi-envelope text-blue-300"></i>
                        <span>sadgure@gmail.com</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-blue-400/30 mt-10 pt-4 text-center text-sm text-gray-300">
            © 2025 <span class="font-semibold text-white">Sadguru D.Ed College, Karjat</span> — All Rights
            Reserved.<br>
            <span class="text-blue-300">Developed by CloudRegex Pvt. Ltd.</span>
        </div>
    </footer>




    <script>
        // 🔧 Swiper Init Script
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        // ✅ Mobile Menu Toggle
        const menuBtn = document.getElementById("menu-btn");
        const closeMenuBtn = document.getElementById("close-menu-btn");
        const menu = document.getElementById("menu");
        const dropdownButtons = menu.querySelectorAll('.group > button');

        menuBtn.addEventListener("click", () => {
            menu.classList.remove("hidden");
        });

        closeMenuBtn.addEventListener("click", () => {
            menu.classList.add("hidden");
        });

        // Handle dropdowns on mobile
        dropdownButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                if (window.innerWidth < 768) {
                    const dropdown = button.nextElementSibling;

                    // Hide all other open dropdowns
                    menu.querySelectorAll('.group > ul, .group > div').forEach(d => {
                        if (d !== dropdown) {
                            d.classList.add('hidden');
                        }
                    });

                    // Toggle current dropdown
                    dropdown.classList.toggle('hidden');
                }
            });
        });
    </script>
    @stack('Scripts')

</body>

</html>
