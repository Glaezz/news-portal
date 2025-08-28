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
            /* make scrollbar transparent */
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- Require css -->

    <x-navbar />

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1
                class="mb-6 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                Trending Posts
            </h1>
            <div class="lg:flex lg:-mx-6">
                <div class="lg:w-3/4 lg:px-6">
                    <img
                        class="object-cover object-center w-full h-80 xl:h-[28rem] rounded-xl"
                        src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" />

                    <div>
                        <p class="mt-6 text-sm text-blue-500">Technology</p>

                        <h1
                            class="max-w-lg mt-4 text-2xl font-semibold leading-tight text-gray-800 dark:text-white">
                            What do you want to know about Tech?
                        </h1>

                        <div class="flex items-center mt-2">

                            <h1 class="text-sm text-gray-700 dark:text-gray-200">
                                Amelia. Anderson
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="mt-8 lg:w-1/4 lg:mt-0 lg:px-6">
                    <div>
                        <h3 class="text-blue-500 capitalize">Sport</h3>

                        <a
                            href="#"
                            class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, rerum!
                        </a>
                    </div>

                    <hr class="my-6 border-gray-200 dark:border-gray-700" />

                    <div>
                        <h3 class="text-blue-500 capitalize">Politic</h3>

                        <a
                            href="#"
                            class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400">
                            Lorem, ipsum dolor sit amet consectetur adipisicing...
                        </a>
                    </div>

                    <hr class="my-6 border-gray-200 dark:border-gray-700" />

                    <div>
                        <h3 class="text-blue-500 capitalize">Science</h3>

                        <a
                            href="#"
                            class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                        </a>
                    </div>

                    <hr class="my-6 border-gray-200 dark:border-gray-700" />

                    <div>
                        <h3 class="text-blue-500 capitalize">Economy</h3>

                        <a
                            href="#"
                            class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1
                class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                Newest Posts
            </h1>

            <div class="grid grid-cols-1 gap-6 mt-6 md:mt-12 md:grid-cols-2">
                @foreach ($posts as $post)
                <div class="lg:flex">
                    <img
                        class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/150' }}"
                        alt="" />

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a
                            href="{{ route('posts.show', $post) }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white">
                            {{ $post->title }}
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: {{ $post->created_at->format('d F Y') }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</body>

</html>