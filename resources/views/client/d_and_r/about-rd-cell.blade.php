@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.dr-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed">
            <div class="flex flex-col md:flex-row gap-6 mb-6">
                <div class="w-full md:w-1/3 flex justify-center">
                    <img src="https://via.placeholder.com/200x250" alt="Dr. B. V. Anarase" class="rounded-lg shadow-md">
                </div>
                <div class="w-full md:w-2/3">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. B. V. Anarase</h3>
                    <p class="text-gray-600">Ph.D. Electrical Engineering</p>
                    <p class="text-gray-600 mb-4">DEAN - R & D</p>

                    <p class="text-justify text-gray-700 mb-2">
                        Research is the backbone of academics in Dattakala Group of Institutions.
                        The R & D Cell of the institute streamlines the concept building and transforms new ideas into
                        innovations
                        in pursuance of a new era of passion for research.
                    </p>

                    <p class="text-justify text-gray-700 mb-2">
                        Each finding gives immense pleasure and multiplies enthusiasm towards achieving the target.
                        The R & D Cell aims to nurture research culture in the College by promoting research in newly
                        emerging
                        and challenging areas of Engineering, Technology, Science, and Humanities.
                        It encourages the students and faculty to undertake research in frontier areas of Engineering and
                        Technology.
                    </p>

                    <p class="text-justify text-gray-700 mb-2">
                        This enhances the general research capability of budding technocrats by way of participating in
                        conferences,
                        seminars, workshops, project competitions, etc.
                    </p>

                    <p class="text-justify text-gray-700">
                        I welcome you to be part of our endeavor to offer you an excellent platform to actively participate
                        in
                        Research and Innovation activities while pursuing your BE, ME, MBA & MCA degree at Dattakala Group
                        of Institutions.
                    </p>
                </div>
            </div>

            <h3 class="text-xl font-bold text-blue-900 mb-3">
                The R & D Cell is functioning with the following objectives:
            </h3>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>To create awareness and opportunities in R & D among students and faculty.</li>
                <li>To create interest and atmosphere among staff members to take up research projects and improve their
                    knowledge, skills, and qualifications.</li>
                <li>To motivate faculty members of the group for R&D activities in their specialization.</li>
                <li>To encourage faculty and students to publish papers in national and international conferences/journals.
                </li>
                <li>To assist students in applying for funding for conducting research under student project schemes.</li>
                <li>To assist in applying and getting funds for conducting seminars/workshops/FDPs from various funding
                    agencies.</li>
                <li>To facilitate research activity among departments and define mechanisms and targets to achieve this.
                </li>
                <li>To maintain and disseminate current information about relevant research policy areas and external
                    funding opportunities.</li>
                <li>To develop strategies to foster research collaborations between faculty, students, and other
                    institutions.</li>
                <li>To work with departments to establish and develop research priorities on interdisciplinary areas.</li>
            </ul>
        </main>
    </div>
@endsection
