@extends('layouts.client')

@section('content')
    <div class="container mx-auto my-10 px-4 flex flex-col md:flex-row gap-6">
        {{-- Sidebar --}}
        @include('components.academics-side-bar')

        {{-- Main Content --}}
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                <i class="bi bi-laptop me-2 text-blue-600"></i> NPTEL Courses :
            </h2>
            <p class="text-sm mb-3">
                NPTEL is an acronym for <strong>National Programme on Technology Enhanced Learning</strong> which is an
                initiative by seven
                Indian Institutes of Technology (IIT Bombay, Delhi, Guwahati, Kanpur, Kharagpur, Madras and Roorkee) and
                Indian Institute of Science (IISc) for creating course contents in engineering and science.
            </p>
            <p class="text-sm mb-3">
                NPTEL includes five engineering branches (Civil, Computer Science, Electrical, Electronics and Communication
                and Mechanical)
                for NPTEL programme in which they provide video content each course delivered by respective expertise
                persons
                from IIT, NIT or IISc. Using NPTEL we will get benefit of expert persons from IIT, NIT or IISc.
            </p>

            <h3 class="text-xl font-semibold text-blue-700 mt-6 mb-3">
                <i class="bi bi-bullseye me-2 text-blue-600"></i>
                In this context, the focus areas for NPTEL project have been :
            </h3>
            <ul class="list-disc ps-6 space-y-1 text-sm">
                <li>Higher education</li>
                <li>Professional education</li>
                <li>Distance education</li>
                <li>Continuous and open learning, roughly in that order of preference</li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-800 mt-10 mb-4 flex items-center">
                <i class="bi bi-building-fill-check me-2 text-blue-600"></i> NPTEL Local Chapter :
            </h2>
            <p class="text-sm mb-3">
                NPTEL has been offering Open online courses along with certification courses. Through this online portal,
                10hr, 20hr and
                30hr courses of 4, 8, and 12 weeks duration respectively in various engineering disciplines and research
                that includes relevant
                exposure to tools and technologies, are currently being offered by NPTEL.
            </p>
            <p class="text-sm">
                Our <strong>DATTAKALA Campus</strong> is establishing of NPTEL Local Chapter and form Single Point of
                Contact (SPOC).
                Also under this SPOC, we are registering students and faculties for different courses and examination which
                will help to
                continuous improvement in our knowledge.
            </p>
        </main>
    </div>
@endsection
