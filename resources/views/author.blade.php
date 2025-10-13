<x-layout :title="$title">
    <section class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-8 w-full text-center">
        <div
            class="w-20 h-20 mx-auto rounded-full bg-gray-200 flex items-center justify-center text-xl font-semibold text-gray-700">
            AD</div>
        <h1 class="mt-4 text-2xl font-bold text-gray-900">{{ $author['name'] }}</h1>
        <p class="mt-2 text-gray-500 text-sm">{{ $author['email'] }}</p>
    </section>


    <!-- Postingan Author -->
    <section class="w-full mt-12">

        <div class="flex justify-center mb-14 gap-5 flex-wrap">
            @foreach ($posts as $blog)
                <x-card-blog :slug="$blog['slug']" :blog_title="$blog['blog_title']" :body="$blog['body']" :author="$blog->author->name"
                    :created_at="$blog['created_at']" />
            @endforeach
        </div>
    </section>
</x-layout>
