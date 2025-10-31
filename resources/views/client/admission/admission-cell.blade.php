@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-12 py-8 flex flex-col md:flex-row gap-6">

        <!-- Sidebar -->
        @include('components.admission-side-bar')

        <!-- Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Admission Cell – 2025–26</h2>
            <p class="text-gray-700 text-justify mb-4">
                The Admission Cell at Dattakala Group of Institutions (Diploma Section) is a dedicated team of faculty and
                administrative staff assigned to assist students and parents with the admission process, documentation,
                counseling, and technical support related to CAP and Institute Level Admissions.
            </p>

            <h3 class="text-xl font-semibold text-blue-900 mt-6 mb-3 border-b border-blue-800 pb-1">Admission Cell Duties :
            </h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li>Guidance for Centralized Admission Process (CAP).</li>
                <li>Support for online registration and option form filling.</li>
                <li>Document verification and admission formalities.</li>
                <li>Counseling on choosing branches and career options.</li>
                <li>Handling Institute Level Admission (ILA) process.</li>
                <li>Coordination with DTE and affiliated institutes.</li>
            </ul>

            <h3 class="text-xl font-semibold text-blue-900 mt-8 mb-3 border-b border-blue-800 pb-1">
                Admission Committee Members (2025–26)
            </h3>

            <div class="overflow-x-auto mb-6">
                <table class="min-w-full border border-gray-300 text-sm text-left">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Designation</th>
                            <th class="py-2 px-4 border-b">Role</th>
                            <th class="py-2 px-4 border-b">Contact</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">Prof. Rajendra Mohan Wable</td>
                            <td class="py-2 px-4 border-b">Principal</td>
                            <td class="py-2 px-4 border-b">Admission Authority</td>
                            <td class="py-2 px-4 border-b">9730221909</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">Mr. Shrikant R. Sakurle</td>
                            <td class="py-2 px-4 border-b">Vice Principal &amp; M.S.B.T.E.</td>
                            <td class="py-2 px-4 border-b">CAP Process &amp; Document Scrutiny</td>
                            <td class="py-2 px-4 border-b">9730221909</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">Mr. Sandeep Shaha</td>
                            <td class="py-2 px-4 border-b">Office Superintendent</td>
                            <td class="py-2 px-4 border-b">Admission &amp; Fee Payment Support</td>
                            <td class="py-2 px-4 border-b">8600418777</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">Admission Cell Support Team</td>
                            <td class="py-2 px-4 border-b">Teaching &amp; Non-Teaching Staff</td>
                            <td class="py-2 px-4 border-b">Student Support &amp; Counseling</td>
                            <td class="py-2 px-4 border-b">Available on-site</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="text-xl font-semibold text-blue-900 mt-6 mb-3 border-b border-blue-800 pb-1">
                Admission Cell Timings
            </h3>
            <ul class="list-disc ml-6 text-gray-700 space-y-1">
                <li><strong>Monday to Saturday:</strong> 9:30 AM to 5:30 PM</li>
                <li><strong>Help Desk Location:</strong> Admission Cell, Main Office, Ground Floor</li>
                <li><strong>Email:</strong> dgip@dattakala.edu.in</li>
                <li><strong>Website:</strong> www.dattakala.edu.in</li>
            </ul>

            <h3 class="text-xl font-semibold text-blue-900 mt-8 mb-3 border-b border-blue-800 pb-1">
                Important Notice to Students &amp; Parents :
            </h3>
            <p class="text-gray-700 leading-relaxed">
                We encourage all candidates to visit the <strong>Admission Cell in person</strong> or contact via
                phone/email
                to receive <strong>verified guidance</strong> only. Do not rely on unauthorized agents or unofficial
                sources.
            </p>
        </main>
    </div>
@endsection
