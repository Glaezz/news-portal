<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
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
    <section class="bg-white dark:bg-gray-900 min-h-screen py-6">
        <div class="container px-4 mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">
                        Your News Articles
                    </h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                        Manage all the news articles you have published
                    </p>
                </div>
                <!-- Tombol Tambah Berita -->
                <a
                    href="{{ route('posts.create') }}"
                    class="flex items-center px-4 py-2 text-sm font-medium text-white transition-colors duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-4 h-4 mr-2">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add News
                </a>
            </div>

            <!-- Table Container -->
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div
                            class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table
                                class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <!-- Table Header -->
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <!-- Judul Column -->
                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-gray-500 dark:text-gray-400">
                                            Gambar
                                        </th>
                                        <th
                                            scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <div class="flex items-center gap-x-3">
                                                <span>Judul Berita</span>
                                                <svg
                                                    class="h-3"
                                                    viewBox="0 0 10 11"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.3" />
                                                </svg>
                                            </div>
                                        </th>

                                        <!-- Tanggal Column -->
                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Tanggal Publikasi
                                        </th>

                                        <!-- Action Column -->
                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                <!-- Table Body -->
                                <tbody
                                    class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    <!-- Row 1 -->
                                    @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                                        <td
                                            class="px-4 py-4 text-sm flex justify-center font-medium whitespace-nowrap">
                                            <img
                                                class="object-cover w-20 h-10 rounded-lg "
                                                src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/150' }}"
                                                alt="" />
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                            <div class="max-w-xs">
                                                <h2
                                                    class="font-medium text-gray-800 dark:text-white truncate">
                                                    {{ $post->title }}
                                                </h2>
                                                <p
                                                    class="text-sm text-gray-500 dark:text-gray-400 mt-1 truncate">
                                                    {{ $post->content }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div class="text-gray-700 dark:text-gray-200">
                                                <div class="font-medium">{{ $post->created_at->format('d M Y') }}</div>
                                                <div class="text-gray-500 dark:text-gray-400 text-xs">
                                                    {{ $post->created_at->format('H:i') }} WIB
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div class="flex items-center justify-center gap-x-2">
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="px-3 py-1.5 text-xs font-medium text-blue-600 transition-colors duration-200 bg-blue-100 rounded-lg hover:bg-blue-200 dark:bg-blue-800/30 dark:text-blue-400 dark:hover:bg-blue-800/50">
                                                    Edit
                                                </a>
                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="px-3 py-1.5 text-xs font-medium text-red-600 transition-colors duration-200 bg-red-100 rounded-lg hover:bg-red-200 dark:bg-red-800/30 dark:text-red-400 dark:hover:bg-red-800/50"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                        Delete </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                    <!-- Empty State (jika tidak ada berita) -->
                                    <!-- Uncomment untuk tampilan kosong -->
                                    <!--
                    <tr>
                      <td colspan="3" class="px-4 py-12 text-center">
                        <div class="flex flex-col items-center">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-12 h-12 text-gray-400 mb-4"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0-1.125.504-1.125 1.125V11.25a9 9 0 00-9-9z"
                            />
                          </svg>
                          <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                            Belum Ada Berita
                          </h3>
                          <p class="text-gray-500 dark:text-gray-400 mb-4">
                            Anda belum mempublikasikan berita apapun. Mulai menulis berita pertama Anda!
                          </p>
                          <a
                            href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              class="w-4 h-4 mr-2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"
                              />
                            </svg>
                            Tulis Berita Pertama
                          </a>
                        </div>
                      </td>
                    </tr>
                    -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</body>

</html>