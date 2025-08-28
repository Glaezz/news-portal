<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Portal</title>
    <style>
        .scroll-hidden::-webkit-scrollbar {
            height: 0px;
            background: transparent;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <x-navbar />

    <!-- Dashboard Section -->
    <section class="bg-white dark:bg-gray-900 h-screen flex items-center">
        <div
            class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="px-6 py-4">
                <h3
                    class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">
                    Register Account
                </h3>

                <p class="mt-1 text-center text-gray-500 dark:text-gray-400">
                    welcome to news portal, please register your account.
                </p>

                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300 dark:text-white"
                            type="text"
                            name="name"
                            placeholder="Name"
                            aria-label="Name"
                            required />
                    </div>

                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
            dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 
            focus:border-blue-400 dark:focus:border-blue-300 
            focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300 dark:text-white"
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            aria-label="Email Address"
                            required />
                    </div>

                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
            dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 
            focus:border-blue-400 dark:focus:border-blue-300 
            focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300 dark:text-white"
                            type="password"
                            name="password"
                            placeholder="Password"
                            aria-label="Password"
                            required />
                    </div>

                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
            dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 
            focus:border-blue-400 dark:focus:border-blue-300 
            focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300 dark:text-white"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            aria-label="Confirm Password"
                            required />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <button
                            type="submit"
                            class="w-full px-6 py-2 text-sm font-medium tracking-wide text-white capitalize 
            transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 
            focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50 ">
                            Register
                        </button>
                    </div>
                </form>

            </div>
            <div
                class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
                <span class="text-sm text-gray-600 dark:text-gray-200">Have an account?
                </span>

                <a
                    href="{{ route('login') }}"
                    class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">Login</a>
            </div>
        </div>
    </section>
</body>

</html>