<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dattakala Group of Institutions</title>
    <link rel="icon" href="asset/Dattakalalogo.png" type="image/png">

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
                    <span>02117-203183/84</span>
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
                <img src="{{ asset('asset/Dattakalalogo.png') }}" alt="DK Logo" class="w-28 h-28 object-contain">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-blue-900">DATTAKALA GROUP OF INSTITUTIONS</h1>
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
                <ul id="menu"
                    class="hidden md:flex flex-col md:flex-row absolute md:relative top-0 left-0 w-full h-screen md:h-auto bg-blue-900 md:bg-transparent justify-center items-center md:justify-start space-y-4 md:space-y-0 z-40">
                    <button id="close-menu-btn"
                        class="absolute top-4 right-4 text-white text-3xl md:hidden">&times;</button>
                    <!-- HOME -->
                    <li>
                        <a href="/" class="block text-white font-semibold px-1 py-4 hover:bg-blue-700">HOME</a>
                    </li>

                    <!-- ABOUT (Dropdown) -->
                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            ABOUT
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-56">
                            <li>
                                <a href="{{ route('about.institute') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    About Institute
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.vision') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Vision & Mission
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.president') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    President Desk
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.secretary') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Secretary Desk
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.director') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Director Desk
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.principal') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Principal Desk
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.approvals') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Approvals & Affiliation
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.committee') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Committees
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.trust') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Trust Body
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.structure') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Organizational Structure
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            ADMISSION
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-56">
                            <li>
                                <a href="{{ route('admission.cell') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Admission Cell
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.course-offered') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Course Offered
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.eligibility') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Eligibility Criteria
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.documents') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Documents Required
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.fee') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Fee Structure
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.policy') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Admission Policy & Process
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admission.quota') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Institutional Quota & Vacant Seats
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admission.scholarship') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Scholarship
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            ACADEMICS
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-56">
                            <li><a href="{{ route('academics.academic-calendar') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">Academic Calendar</a></li>
                            <li><a href="{{ route('academics.rules-regulations') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">Rules & Regulations</a></li>
                            <li><a href="{{ route('academics.nptel-courses') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">NPTEL Courses</a></li>
                            <li><a href="{{ route('academics.gate-competitive-exams') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">Gate & Competitive Exams</a></li>
                            <li><a href="{{ route('academics.results') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">Results</a></li>
                            <li><a href="{{ route('academics.online-results') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">Online Results</a></li>
                            <li><a href="{{ route('academics.nep') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">NEP</a></li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            DIPLOMA
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:grid grid-cols-1 md:grid-cols-2 gap-0 bg-black text-white rounded-md shadow-lg z-50 w-96 p-1">
                            <li><a href="{{ route('diploma.academic-calendar') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Academic Calendar</a></li>
                            <li><a href="{{ route('diploma.activities') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Activities</a></li>
                            <li><a href="{{ route('diploma.engineering-information') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Engineering Information</a>
                            </li>
                            <li><a href="{{ route('diploma.faculty-achievements') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Faculty Achievements</a></li>
                            <li><a href="{{ route('diploma.faculty-profile') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Faculty Profile</a></li>
                            <li><a href="{{ route('diploma.industrial-visit') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Industrial Visit</a></li>
                            <li><a href="{{ route('diploma.infrastructure-and-facilities') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Infrastructure &
                                    Facilities</a></li>
                            <li><a href="{{ route('diploma.mous') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">MOUs</a></li>
                            <li><a href="{{ route('diploma.notice-circulars') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Notice / Circulars</a></li>
                            <li><a href="{{ route('diploma.peo-po') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">PEO / PO</a></li>
                            <li><a href="{{ route('diploma.placement') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Placement</a></li>
                            <li><a href="{{ route('diploma.research-and-development') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Research & Development</a>
                            </li>
                            <li><a href="{{ route('diploma.result-analysis') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Result Analysis</a></li>
                            <li><a href="{{ route('diploma.student-achievements') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Student Achievements</a></li>
                            <li><a href="{{ route('diploma.student-association') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Student Association</a></li>
                            <li><a href="{{ route('diploma.syllabus') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Syllabus</a></li>
                            <li><a href="{{ route('diploma.technical-supporting-staff') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Technical Supporting Staff</a>
                            </li>
                            <li><a href="{{ route('diploma.time-table') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Time Table</a></li>
                            <li><a href="{{ route('diploma.workshop-guest-lectures') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 rounded-md">Workshop / Guest Lectures</a>
                            </li>
                        </ul>
                    </li>


                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            INFRASTRUCTURE
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div
                            class="absolute left-0 mt-0 hidden group-hover:flex bg-black text-white rounded-md shadow-lg z-50 p-6 w-[520px] justify-between">

                            <!-- Column 1 -->
                            <div class="w-1/2 pr-4 border-r border-gray-700">
                                <h3 class="font-bold text-lg mb-2">Central Facilities</h3>
                                <ul class="space-y-1">
                                    <li><a href="{{ route('infrastructure.central-library') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Central Library</a></li>
                                    <li><a href="{{ route('infrastructure.library-staff') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Library Staff</a></li>
                                    <li><a href="{{ route('infrastructure.library-books-circulation-policy') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Library Books Circulation
                                            Policy</a></li>
                                    <li><a href="{{ route('infrastructure.library-journals') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Library Journals</a></li>
                                    <li><a href="{{ route('infrastructure.e-journals') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">E-Journals</a></li>
                                    <li><a href="{{ route('infrastructure.e-resources') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">E-Resources</a></li>
                                    <li><a href="{{ route('infrastructure.computer-center') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Computer Center</a></li>
                                    <li><a href="{{ route('infrastructure.reading-hall') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Reading Hall</a></li>
                                    <li><a href="{{ route('infrastructure.premises') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Premises</a></li>
                                    <li><a href="{{ route('infrastructure.sports-ground') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Sports Ground</a></li>
                                    <li><a href="{{ route('infrastructure.parking') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Parking</a></li>
                                    <li><a href="{{ route('infrastructure.cultural-center') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Cultural Center</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div class="w-1/2 pl-4">
                                <h3 class="font-bold text-lg mb-2">Student Amenities</h3>
                                <ul class="space-y-1">
                                    <li><a href="{{ route('infrastructure.hostel-amenities') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Hostel Amenities</a></li>
                                    <li><a href="{{ route('infrastructure.canteen-mess') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Canteen &amp; Mess</a>
                                    </li>
                                    <li><a href="{{ route('infrastructure.gymkhana') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Gymkhana</a></li>
                                    <li><a href="{{ route('infrastructure.transportation') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Transportation</a></li>
                                    <li><a href="{{ route('infrastructure.shops') }}"
                                            class="block px-2 py-1 hover:bg-gray-800 rounded">Shops</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            STUDENTS
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Main Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-56">

                            <!-- Notice -->
                            <li>
                                <a href="{{ route('student.notice') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Notice
                                </a>
                            </li>

                            <!-- Activities with Submenu -->
                            <li class="relative group/activities">
                                <button
                                    class="w-full text-left flex justify-between items-center px-4 py-2 hover:bg-blue-700">
                                    Activities
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                                <!-- Submenu -->
                                <ul
                                    class="absolute top-0 left-full mt-0 hidden group-hover/activities:block bg-black text-white rounded-md shadow-lg w-56">
                                    <li><a href="{{ route('student.nss') }}"
                                            class="block px-4 py-2 hover:bg-gray-800">NSS</a></li>
                                    <li><a href="{{ route('student.sports') }}"
                                            class="block px-4 py-2 hover:bg-gray-800">Sports</a></li>
                                    <li><a href="{{ route('student.cultural-activities') }}"
                                            class="block px-4 py-2 hover:bg-gray-800">Cultural Activities</a></li>
                                </ul>
                            </li>

                            <!-- Alumni with Submenu -->
                            <li class="relative group/alumni">
                                <button
                                    class="w-full text-left flex justify-between items-center px-4 py-2 hover:bg-blue-700">
                                    Alumni
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                                <!-- Submenu -->
                                <ul
                                    class="absolute top-0 left-full mt-0 hidden group-hover/alumni:block bg-black text-white rounded-md shadow-lg w-56">
                                    <li><a href="{{ route('student.alumni-association') }}"
                                            class="block px-4 py-2 hover:bg-gray-800">Alumni Association</a></li>
                                    <li><a href="{{ route('student.alumni-certification') }}"
                                            class="block px-4 py-2 hover:bg-gray-800">Alumni Certification</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            PLACEMENT
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-64">

                            <li>
                                <a href="{{ route('placement.training') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    About Training & Placement
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('placement.major-recruiters') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Major Recruiters
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('placement.placements-records') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Placements Records
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('placement.mou') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Industry Institute Interaction [MOU'S]
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('placement.edc') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Development Cell [EDC]
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            R & D
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-64">
                            <li>
                                <a href="{{ route('client.rd-cell') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    About R & D Cell
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('client.research-papers') }}"
                                    class="block px-4 py-2 hover:bg-gray-800 ">
                                    Research Papers & Publications
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('client.patents') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Patents
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('client.edc') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Research Development Policy
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="flex items-center text-white font-semibold pl-3 py-3 hover:bg-blue-700 focus:outline-none">
                            NAAC
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <ul
                            class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white rounded-md shadow-lg z-50 w-72">
                            <li>
                                <a href="{{ route('client.iqac-committee') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    IQAC Committee
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.iiqa') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    IIQA
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.aqar') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    AQAR
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.feedback') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    Feedback
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.ssr-report') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    SSR Report
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.dvv') }}" class="block px-4 py-2 hover:bg-gray-800">
                                    DVV
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.best-practices') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Best Practices
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.statutory-report') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Statutory Report
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.institutional-distinctiveness') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Institutional Distinctiveness
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.composition-of-iqac') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Composition of IQAC
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.minutes-of-meeting') }}"
                                    class="block px-4 py-2 hover:bg-gray-800">
                                    Minutes of Meeting & Action Taken Report
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact-us') }}"
                            class="block text-white font-semibold pl-3 py-3 hover:bg-blue-700">CONTACT
                            US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- 🔵 Footer Section -->
    <footer class="bg-[#1c1e21] text-gray-300 pt-10 pb-6 text-sm">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- About -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4 uppercase">Dattakala Group of Institutions</h3>
                <p class="text-gray-400 leading-relaxed">
                    Dattakala Shikshan Sanstha is situated on a picturesque hilltop with a panoramic view of the
                    Sahyadri Ranges.
                    The students have a pollution-free environment where they can breathe fresh air & play on spacious
                    play fields.
                </p>

                <!-- Social Icons -->
                <div class="flex space-x-3 mt-4">
                    <a href="#"
                        class="bg-white text-blue-700 p-2 rounded-sm hover:bg-blue-600 hover:text-white transition">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#"
                        class="bg-white text-blue-700 p-2 rounded-sm hover:bg-blue-600 hover:text-white transition">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#"
                        class="bg-white text-blue-700 p-2 rounded-sm hover:bg-blue-600 hover:text-white transition">
                        <i class="bi bi-google"></i>
                    </a>
                    <a href="#"
                        class="bg-white text-blue-700 p-2 rounded-sm hover:bg-blue-600 hover:text-white transition">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4 uppercase">Quick Links</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-white">AICTE</a></li>
                    <li><a href="#" class="hover:text-white">DTE</a></li>
                    <li><a href="#" class="hover:text-white">SPPU University</a></li>
                    <li><a href="#" class="hover:text-white">AICTE Feedback</a></li>
                    <li><a href="#" class="hover:text-white">Social Welfare</a></li>
                    <li><a href="#" class="hover:text-white">Grievance</a></li>
                    <li><a href="#" class="hover:text-white">RTI</a></li>
                    <li><a href="#" class="hover:text-white">NIRF</a></li>
                    <li><a href="#" class="hover:text-white">MSBTE</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4 uppercase">Important Links</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-white">MahaDBT</a></li>
                    <li><a href="#" class="hover:text-white">National Scholarship Portal</a></li>
                    <li><a href="#" class="hover:text-white">NPTEL</a></li>
                    <li><a href="#" class="hover:text-white">Placement</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                    <li><a href="#" class="hover:text-white">Alumni</a></li>
                    <li><a href="#" class="hover:text-white">ERP</a></li>
                    <li><a href="#" class="hover:text-white">Webmail</a></li>
                    <li><a href="#" class="hover:text-white">Mandatory Disclosure</a></li>
                    <li><a href="#" class="hover:text-white">Academic Events</a></li>
                    <li><a href="#" class="hover:text-white">Cultural Events</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4 uppercase">Contact</h3>
                <p class="text-gray-400 mb-2"><span class="font-semibold text-white">Address:</span><br>
                    At Gate No: 541/2, 527 Off Pune-Solapur Highway,<br>
                    Swami-Chincholi (Bhigwan), Tal-Daund, Dist-Pune 413130
                </p>
                <p class="text-gray-400 mb-2">
                    <span class="font-semibold text-white">Email:</span><br>
                    dkcom.edu@rediffmail.com
                </p>
                <p class="text-gray-400">
                    <span class="font-semibold text-white">Telephone:</span><br>
                    +91 96730 02929, +91 99220 51144, 02117-203183/84
                </p>
            </div>
        </div>

        <!-- Bottom Line -->
        <div class="border-t border-gray-700 mt-10 pt-4 text-center text-gray-400 text-xs">
            <p>Copyright © 2024 <span class="text-white">Dattakala Group of Institutions</span>. All Rights Reserved.
                <span class="text-gray-500">| Powered By: Avis Pixel</span>
            </p>

            <div class="mt-2 space-x-3">
                <a href="#" class="hover:text-white">Privacy Policy</a> |
                <a href="#" class="hover:text-white">Refund & Cancellation</a> |
                <a href="#" class="hover:text-white">Terms & Conditions</a> |
                <a href="#" class="hover:text-white">Career</a>
            </div>
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
