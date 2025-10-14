@props([
    'slug' => '',
    'blog_title' => '',
    'body' => '',
    'author' => 'Anonim',
    'created_at' => '',
    'category' => '',
    'single' => '',
    'author_link' => '',
])

{{-- <a href="/post/{{ $slug }}"
    class="group cursor-pointer w-full border border-gray-300 rounded-2xl p-5 transition-all duration-300 hover:border-indigo-600">
    <div class="flex items-center mb-6">
        <img src="https://placehold.co/600x400" alt="Harsh image" class="rounded-lg w-full object-cover">
    </div>
    <div class="block">
        <h4 class="text-gray-900 font-medium leading-8 mb-5 truncate">{{ $blog_title }}</h4>
        <p class="mb-5 text-base text-slate-800 line-clamp-2">{{ $body }}</p>
        <div class="flex items-center justify-between  font-medium">
            <h6 class="text-sm text-gray-500 hover:underline">{{ $author }}</h6>
            <span class="text-sm text-indigo-600">{{ $created_at }}</span>
        </div>
    </div>
</a> --}}
<article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <a href="/single-category/{{ $single }}"
            class="text-violet-500 text-xs font-medium hover:underline hover:cursor-pointer">
            {{ $category }}
        </a>
        <span class="text-sm">{{ $created_at }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 truncate hover:underline"><a
            href="/post/{{ $slug }}">{{ $blog_title }}</a></h2>
    <p class="mb-5 font-light text-gray-500 line-clamp-2">{{ $body }}</p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <a href="/author/{{ $author_link }}"
                class="font-medium hover:underline text-gray-500 hover:cursor-pointer">
                {{ $author }}
            </a>
        </div>
        <a href="/post/{{ $slug }}"
            class="inline-flex items-center font-medium text-primary-600 hover:underline">
            Read more
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>
