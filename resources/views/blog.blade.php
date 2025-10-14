<x-layout :title="$title">
    <section>
        <div class="mx-auto max-w-7xl">
            <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-14">
                Our popular blogs
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
                @foreach ($posts as $blog)
                    <x-card-blog :slug="$blog['slug']" :blog_title="$blog['blog_title']" :body="$blog['body']" :author="$blog->author->name"
                        :created_at="$blog['created_at']->format('d M Y')" :category="$blog->category->name_category" :single="$blog->category->slug" :author_link="$blog->author->username" />
                @endforeach
            </div>

            <a href="javascript:;"
                class="cursor-pointer border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-gray-900 font-semibold mx-auto transition-all duration-300 hover:bg-gray-100">
                View All
            </a>
        </div>
    </section>
</x-layout>
