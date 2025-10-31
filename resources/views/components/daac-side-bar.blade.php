<aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold border-b pb-2 mb-3 text-blue-800">NAAC</h2>
    <ul class="space-y-2 text-gray-700">
        <li>
            <a href="{{ route('client.iqac-committee') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.iqac-committee') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                IQAC Committee
            </a>
        </li>
        <li>
            <a href="{{ route('client.composition-of-iqac') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.composition-of-iqac') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Composition of IQAC
            </a>
        </li>
        <li>
            <a href="{{ route('client.minutes-of-meeting') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.minutes-of-meeting') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Minutes of Meeting & Action Taken Report
            </a>
        </li>
        <li>
            <a href="{{ route('client.aqar') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.aqar') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                AQAR
            </a>
        </li>
        <li>
            <a href="{{ route('client.best-practices') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.best-practices') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Best Practices
            </a>
        </li>
        <li>
            <a href="{{ route('client.dvv') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.dvv') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                DVV
            </a>
        </li>
        <li>
            <a href="{{ route('client.feedback') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.feedback') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Feedback
            </a>
        </li>
        <li>
            <a href="{{ route('client.iiqa') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.iiqa') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                IIQA
            </a>
        </li>
        <li>
            <a href="{{ route('client.institutional-distinctiveness') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.institutional-distinctiveness') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Institutional Distinctiveness
            </a>
        </li>
        <li>
            <a href="{{ route('client.ssr-report') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.ssr-report') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                SSR Report
            </a>
        </li>
        <li>
            <a href="{{ route('client.statutory-report') }}"
                class="block px-3 py-2 rounded-md hover:bg-blue-100 {{ request()->routeIs('client.statutory-report') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                Statutory Report
            </a>
        </li>
    </ul>
</aside>
