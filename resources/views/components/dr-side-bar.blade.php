<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold border-b pb-2 mt-6 mb-3 text-blue-800">Research & Development</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('client.rd-cell') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('client.rd-cell') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                About Research & Development Cell
            </a>
        </li>
        <li>
            <a href="{{ route('client.edc') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('client.edc') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Research & Development Policy
            </a>
        </li>
        <li>
            <a href="{{ route('client.research-papers') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('client.research-papers') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Research Papers & Publications
            </a>
        </li>
        <li>
            <a href="{{ route('client.patents') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100
                {{ request()->routeIs('client.patents') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Patents
            </a>
        </li>

    </ul>
</aside>
