<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold border-b pb-2 mb-3 text-blue-800">Students</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('student.notice') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.notice') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Notice
            </a>
        </li>

        <li>
            <a href="{{ route('student.nss') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.nss') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                NSS
            </a>
        </li>

        <li>
            <a href="{{ route('student.sports') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.sports') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Sports
            </a>
        </li>

        <li>
            <a href="{{ route('student.cultural-activities') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.cultural-activities') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Cultural Activities
            </a>
        </li>

        <li>
            <a href="{{ route('student.alumni-association') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.alumni-association') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Alumni Association
            </a>
        </li>

        <li>
            <a href="{{ route('student.alumni-certification') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('student.alumni-certification') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Alumni Certification
            </a>
        </li>
    </ul>
</aside>
