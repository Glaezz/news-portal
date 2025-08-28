<!-- resources/views/components/navbar.blade.php -->
<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('home') }}">
                        <h1 class="text-xl font-bold text-gray-800 dark:text-white lg:text-2xl">
                            News Portal
                        </h1>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button
                        x-cloak
                        @click="isOpen = !isOpen"
                        type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg
                            x-show="!isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 8h16M4 16h16" />
                        </svg>

                        <svg
                            x-show="isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menu -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full px-6 py-2 transition-all duration-300 ease-in-out bg-white top-24 
               dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent 
               md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">

                <div class="flex flex-col md:flex-row md:mx-1">
                    @guest
                    <a href="{{ route('login') }}"
                        class="my-2 text-sm text-gray-700 dark:text-gray-200 hover:text-blue-600 hover:underline md:mx-4">
                        Login
                    </a>
                    @else
                    @auth
                    @if (Auth::user()->role === 'admin')
                    <a href="{{ route('posts.index') }}" class="my-2 text-sm text-gray-700 dark:text-gray-200 hover:text-blue-600 hover:underline md:mx-4">Dashboard</a>
                    @endif
                    @endauth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="my-2 text-sm text-gray-700 dark:text-gray-200 hover:text-blue-600 hover:underline md:mx-4">
                            Logout
                        </button>
                    </form>
                    @endguest
                </div>
            </div>
        </div>

        <div
            class="py-3 mt-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">News</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Politic</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Law</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Economy</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Technology</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Investigation</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Sport</a>
            <a
                class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                href="#">Science</a>
        </div>
    </div>
</nav>