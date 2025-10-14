<x-layout :title="$title">
    <section class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-8 w-full text-center">
        <div
            class="w-20 h-20 mx-auto rounded-full bg-gray-200 flex items-center justify-center text-xl font-semibold text-gray-700">
            AD</div>
        <h1 class="mt-4 text-2xl font-bold text-gray-900">{{ $author['username'] }}</h1>
        <p class="mt-2 text-gray-500 text-sm">{{ $author['email'] }}</p>
        <p class="mt-5 font-semibold text-slate-800">"{{ $author['about me'] }}</p>
    </section>


    <!-- Postingan Author -->
    <section class="w-full mt-12">
        <p class="mb-5 text-2xl font-bold text-slate-700">Total Post : {{ count($author->posts) }}</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
            @foreach ($posts as $blog)
                <x-card-blog :slug="$blog['slug']" :blog_title="$blog['blog_title']" :body="$blog['body']" :author="$blog->author->name" :created_at="$blog['created_at']->format('d M Y')"
                    :category="$blog->category->name_category" :single="$blog->category->slug" :author_link="$blog->author->username" />
            @endforeach
        </div>
    </section>
</x-layout>
