<x-layout :title="$title">
    <main class="min-h-screen flex flex-col items-center py-16 px-4">

        <!-- Header Kategori -->
        <section class="w-full max-w-3xl text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900">Kategori: <span
                    class="text-gray-700">{{ $category['name_category'] }}</span></h1>
            <p class="mt-3 text-gray-600 text-sm max-w-lg mx-auto">
                {{ $category['description'] }}
            </p>
        </section>

        <!-- Daftar Postingan -->
        <section class="w-full max-w-6xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
                @foreach ($posts as $blog)
                    <x-card-blog :slug="$blog['slug']" :blog_title="$blog['blog_title']" :body="$blog['body']" :author="$blog->author->name"
                        :created_at="$blog['created_at']->format('d M Y')" :category="$blog->category->name_category" :single="$blog->category->slug" :author_link="$blog->author->username" />
                @endforeach
            </div>

            <!-- Tombol Lihat Semua -->
            <div class="mt-12 flex justify-center">
                <a href="javascript:;"
                    class="border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-gray-900 font-semibold transition-all duration-300 hover:bg-gray-100">
                    Lihat Semua
                </a>
            </div>
        </section>
    </main>
</x-layout>
