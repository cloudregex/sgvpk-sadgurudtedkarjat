@extends('layouts.client')

@section('content')
    <div class="container mx-auto my-10 px-4 flex flex-col md:flex-row gap-6">
        {{-- Sidebar --}}
        @include('components.academics-side-bar')

        {{-- Main Content --}}
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                <i class="bi bi-trophy-fill me-2 text-blue-600"></i> GATE & Competitive Exams :
            </h2>
            <p class="text-sm mb-3">
                The <strong>Graduate Aptitude Test in Engineering (GATE)</strong> is an all-India examination that primarily
                tests
                the comprehensive understanding of various undergraduate subjects in engineering and science.
                The GATE score of a candidate reflects the relative performance level of a candidate.
            </p>
            <p class="text-sm mb-3">
                The score is used for admissions to various post-graduate education programs
                (e.g. Master of Engineering, Master of Technology, Doctor of Philosophy).
                It is one of the most competitive examinations in India.
            </p>

            <h3 class="text-xl font-semibold text-blue-700 mt-8 mb-3 flex items-center">
                <i class="bi bi-mortarboard-fill me-2 text-blue-600"></i> College Status In Exam :
            </h3>
            <p class="text-sm mb-3">
                The students from our college also appeared for this graduate-level aptitude exam and also qualified
                with qualifying marks given by respective IITs.
            </p>
            <p class="text-sm">
                Every year on an average, around <strong>100 students</strong> have been appearing for this exam
                from various departments in the college.
            </p>
        </main>
    </div>
@endsection
