<aside class="w-64 bg-gray-800 text-white h-screen">
    <div class="p-4">
        <h2 class="text-xl font-bold">Menu</h2>
    </div>
    <nav class="mt-4">
        <ul>
            <!-- Common Menu Items -->
            <li class="px-4 py-2 {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('dashboard') }}" class="block flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="px-4 py-2 {{ request()->routeIs('profile') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('profile') }}" class="block flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Profile
                </a>
            </li>
        </ul>
    </nav>
</aside> 