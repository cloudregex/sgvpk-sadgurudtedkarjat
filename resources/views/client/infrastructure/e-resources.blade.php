@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">e-Resources</h2>

            <p class="mb-4">
                We are the member of <strong>DELNET (Developing Library Network)</strong>. It helps the library users for an
                exhaustive search for literature and gets
                the required documents on loan through this library.
            </p>

            <p class="mb-4">
                We have access to <strong>NPTEL teaching learning material</strong>.
            </p>

            <p class="mb-4">
                Our institute has a membership in the <strong>National Digital Library</strong>.
            </p>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded mb-6">
                <p class="text-sm">
                    We are glad to inform you that we have remote access to the following e-journals packages on a college
                    campus from any desktop.
                </p>
            </div>

            <h3 class="text-xl font-semibold text-blue-800 mb-2">DELNET:</h3>
            <p class="mb-4">
                DELNET provides an array of facilities. DELNET’s relentless efforts in resource sharing have proved
                extremely effective.
                It provides access to <strong>books, e-journals, theses/dissertations, useful links, databases</strong> from
                the various domains
                (including engineering and technology). It has contributed a lot towards the modernization of libraries in
                India.
            </p>

            <p class="mb-4">
                Click on the following link to access and know more about DELNET:
            </p>
            <a href="https://delnet.in" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                https://delnet.in
            </a>

            <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-2">e-ShodhSindhu:</h3>
            <p class="mb-4">
                The project entitled <strong>“National Library and Information Services Infrastructure for Scholarly Content
                    (N-LIST)”</strong>
                being jointly executed by the e-ShodhSindhu Consortium, INFLIBNET Centre and the INDEST-AICTE Consortium.
                It provides for (i) cross subscription to e-resources subscribed by the two Consortia, i.e. subscription to
                INDEST-AICTE resources for universities
                and e-ShodhSindhu resources for technical institutions; and (ii) access to selected e-resources to colleges.
            </p>

            <p class="mb-4">
                The N-LIST project provides access to e-resources to students, researchers and faculty from colleges and
                other beneficiary institutions.
                Through annual membership, authorized users from colleges can now access e-resources and download articles
                and e-books directly from
                the publisher’s websites wherever they are authenticated and authorized through servers deployed at the
                INFLIBNET Centre.
            </p>

            <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-2">Shodhganga:</h3>
            <p class="mb-4">
                Shodhganga is an Open Access Repository of full-text theses submitted to universities in India. Membership
                is not required to browse,
                search, and view content available in Shodhganga. However, INFLIBNET urges MoUs with universities to
                facilitate submission and
                archiving of theses in Shodhganga and to register approved research proposals in Shodhgangotri.
            </p>

            <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-2">National Digital Library (NDL):</h3>
            <p class="mb-4">
                It is a pilot project to develop a framework of a virtual repository of learning resources with a
                single-window search facility.
                It includes contents from multiple learning domains for primary to post-graduate levels.
            </p>

            <a href="https://ndl.iitkgp.ac.in" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                National Digital Library (NDL) Click Here
            </a>

            <p class="mt-6">
                <strong>Our Library has got free Pass Key from NDL Club.</strong>
            </p>
        </main>
    </div>
@endsection
