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
            <div class="mb-6">
                <p class="text-md xl:text-xl font-medium text-blue-500">
                    {{ $post->created_at->format('d M Y') }}
                </p>
                <h1
                    class="mt-2 mb-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    {{ $post->title }}
                </h1>
                <p class="text-gray-600 dark:text-gray-300">Oleh {{ $post->user->name }}</p>
            </div>

            <img
                class="object-cover object-center w-full h-80 xl:h-[28rem] rounded-xl"
                src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/150' }}"
                alt="" />

            <p class="text-lg mx-auto mt-12 text-gray-500 dark:text-gray-300">
                {{ $post->content }}
            </p>
        </div>
    </section>


</body>

</html>