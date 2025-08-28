<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create News</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <x-navbar />
    <!-- Dashboard Section -->
    <section class="h-screen flex items-center justify-center">
        <div class="w-full max-w-3xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white mb-6">
                Create News Post
            </h2>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Judul -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 dark:text-gray-200 mb-2">
                        Title
                    </label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        value="{{ old('title') }}"
                        placeholder="Enter news title"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border @error('title') border-red-500 @else border-gray-300 @enderror rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"
                        required />
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konten -->
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 dark:text-gray-200 mb-2">
                        Content
                    </label>
                    <textarea
                        id="content"
                        name="content"
                        rows="6"
                        placeholder="Enter news content here..."
                        class="block w-full px-4 py-2 text-gray-700 bg-white border @error('content') border-red-500 @else border-gray-300 @enderror rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"
                        required>{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Upload Gambar -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 dark:text-gray-200 mb-2">
                        Image
                    </label>
                    <input
                        id="image"
                        name="image"
                        type="file"
                        accept="image/*"
                        class="block w-full text-gray-700 bg-white border @error('image') border-red-500 @else border-gray-300 @enderror rounded-md cursor-pointer dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 focus:outline-none" />
                    @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        Publish
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>