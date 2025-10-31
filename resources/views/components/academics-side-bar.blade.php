<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold border-b pb-2 mb-3 text-blue-800">Academics</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('academics.academic-calendar') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.academic-calendar') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Academic Calendar
            </a>
        </li>
        <li>
            <a href="{{ route('academics.rules-regulations') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.rules-regulations') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Rules & Regulations
            </a>
        </li>
        <li>
            <a href="{{ route('academics.nep') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.nep') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                NEP (New Education Policy)
            </a>
        </li>
        <li>
            <a href="{{ route('academics.nptel-courses') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.nptel-courses') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                NPTEL Courses
            </a>
        </li>
        <li>
            <a href="{{ route('academics.gate-competitive-exams') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.gate-competitive-exams') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                GATE / Competitive Exams
            </a>
        </li>
        <li>
            <a href="{{ route('academics.results') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.results') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Results
            </a>
        </li>
        <li>
            <a href="{{ route('academics.online-results') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('academics.online-results') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Online Results
            </a>
        </li>
    </ul>
</aside>
