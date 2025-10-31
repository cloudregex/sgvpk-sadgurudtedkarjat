<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold border-b pb-2 mb-3 text-blue-800">Admission</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('admission.cell') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.cell') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Admission Cell
            </a>
        </li>
        <li>
            <a href="{{ route('admission.policy') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.policy') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Admission Policy & Process
            </a>
        </li>
        <li>
            <a href="{{ route('admission.course-offered') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.course-offered') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Course Offered
            </a>
        </li>
        <li>
            <a href="{{ route('admission.documents') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.documents') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Documents Required
            </a>
        </li>
        <li>
            <a href="{{ route('admission.eligibility') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.eligibility') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Eligibility Criteria
            </a>
        </li>
        <li>
            <a href="{{ route('admission.fee') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.fee') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Fee Structure
            </a>
        </li>
        <li>
            <a href="{{ route('admission.quota') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.quota') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Institutional Quota / Vacant Seats
            </a>
        </li>
        <li>
            <a href="{{ route('admission.scholarship') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('admission.scholarship') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Scholarship
            </a>
        </li>
    </ul>
</aside>
