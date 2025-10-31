<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <!-- Placement Section -->
    <h2 class="text-xl font-semibold border-b pb-2 mt-6 mb-3 text-blue-800">Placement</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('placement.training') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.training') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                About Training
            </a>
        </li>
        <li>
            <a href="{{ route('placement.edc') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.edc') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Development Cell [EDC]
            </a>
        </li>

        <li>
            <a href="{{ route('placement.major-recruiters') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.major-recruiters') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Major Recruiters
            </a>
        </li>

        <li>
            <a href="{{ route('placement.mou') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.mou') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Industry Institute Interaction [MOU'S]
            </a>
        </li>

        <li>
            <a href="{{ route('placement.placements-records') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.placements-records') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Placement Records
            </a>
        </li>

        <li>
            <a href="{{ route('placement.tpo-member-secretary') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
               {{ request()->routeIs('placement.tpo-member-secretary') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                TPO Member Secretary
            </a>
        </li>
    </ul>
</aside>
