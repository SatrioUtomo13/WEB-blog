<nav class="bg-red-500 dark:bg-gray-700">
    <div class="max-w-screen-xl px-16 py-3 mx-auto">
        <div class="flex items-center justify-between">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                <li>
                    <a href="/" class="text-white dark:text-white font-bold">Satrio Utomo</a>
                </li>
                <li>
                    <a href="/" class="text-white dark:text-white {{ ($title === 'Home') ? 'underline' : '' }}">Home</a>
                </li>
                <li>
                    <a href="/about" class="text-white dark:text-white {{ ($title === 'About') ? 'underline' : '' }} ">About</a>
                </li>
                <li>
                    <a href="/blog" class="text-white dark:text-white {{ ($title === 'All Post') ? 'underline' : '' }}">Blog</a>
                </li>
                <li>
                    <a href="/categories" class="text-white dark:text-white {{ ($title === 'Post Categories') ? 'underline' : '' }}">Categories</a>
                </li>
            </ul>
            <ul>
                @auth
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white  font-medium text-sm px-4 text-center inline-flex items-center" type="button">Welcome back, {{ auth()->user()->name }} 
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                                </form>
                            </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="/login" class="text-white dark:text-white flex {{ ($title === 'Login') ? 'underline' : '' }}">
                            <svg class="w-5 h-5 dark:text-white self-center" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>