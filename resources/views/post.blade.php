<style>
    /* kecilkan font di layar sangat kecil */
    @media (max-width: 420px) {
        .content {
            font-size: 0.95rem;
        }
    }
</style>
<x-layout :title="$title">
    <main class="h-full">
        <article class="w-full bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 overflow-hidden">
            <!-- Header -->
            <header class="px-8 py-8 md:py-10 border-b border-gray-100">
                <h1 class="text-2xl md:text-3xl font-extrabold leading-tight text-gray-900">{{ $post['blog_title'] }}
                </h1>

                <div class="mt-4 flex items-center gap-3">
                    <!-- Avatar sederhana -->
                    <div
                        class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-sm font-medium text-gray-600">
                        AD</div>
                    <div class="text-sm">
                        <a href="/author/{{ $post->author->username }}"
                            class="font-medium text-gray-800 hover:underline hover:cursor-pointer">{{ $post->author->name }}</a>
                        <div class="text-gray-500">{{ $post['created_at']->format('d F Y') }} • <a class="text-indigo-600 hover:underline"
                                href="/single-category/{{ $post->category->slug }}">{{ $post->category->name_category }}</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="px-8 py-10 content text-gray-700 leading-relaxed prose max-w-none">
                <p>{{ $post['body'] }}</p>

                <!-- Footer kecil di dalam article -->
                <footer class="mt-8 border-t border-gray-100 pt-6 text-sm text-gray-600">
                    <div>Ditulis oleh <span class="font-medium text-gray-800">{{ $post->author->name }}</span>. Terima
                        kasih
                        sudah
                        membaca.</div>
                </footer>
            </div>
        </article>
    </main>
</x-layout>
