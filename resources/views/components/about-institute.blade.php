 <aside class="w-full md:w-1/4 bg-white rounded-lg shadow p-4">
     <h2 class="text-xl font-semibold border-b pb-2 mb-3 text-blue-800">About Us</h2>
     <ul class="space-y-2 text-gray-700">
         <li>
             <a href="{{ route('about.institute') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.institute') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 About Institute
             </a>
         </li>
         <li>
             <a href="{{ route('about.vision') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.vision') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Vision & Mission
             </a>
         </li>
         <li>
             <a href="{{ route('about.president') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.president') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 President Desk
             </a>
         </li>
         <li>
             <a href="{{ route('about.director') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.director') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Director Desk
             </a>
         </li>
         <li>
             <a href="{{ route('about.secretary') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.secretary') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Secretary Desk
             </a>
         </li>
         <li>
             <a href="{{ route('about.principal') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.principal') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Principal Desk
             </a>
         </li>
         <li>
             <a href="{{ route('about.approvals') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.approvals') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Approvals & Affiliation
             </a>
         </li>
         <li>
             <a href="{{ route('about.committee') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.committee') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Committee
             </a>
         </li>
         <li>
             <a href="{{ route('about.trust') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.trust') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Trust Body
             </a>
         </li>
         <li>
             <a href="{{ route('about.structure') }}"
                 class="block px-3 py-2 rounded-md hover:bg-blue-100
           {{ request()->routeIs('about.structure') ? 'bg-blue-200 font-semibold text-blue-700' : '' }}">
                 Organizational Structure
             </a>
         </li>
     </ul>
 </aside>
