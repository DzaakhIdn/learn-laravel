@php
    $blogs = [
        [
            'url_img' => 'https://pagedone.io/asset/uploads/1696244553.png',
            'blog_title' => 'Belajar bikin blog gajelas',
            'author' => 'Anomali',
            'created_at' => '2 years ago',
        ],
        [
            'url_img' => 'https://pagedone.io/asset/uploads/1696244579.png',
            'blog_title' => 'Ada orang lagi belajar bikin blog',
            'author' => 'Bebek',
            'created_at' => '2 years ago',
        ],
        [
            'url_img' => 'https://pagedone.io/asset/uploads/1696244619.png',
            'blog_title' => 'Tau ga dia ternyata suka makan pisang loh',
            'author' => 'Anomali',
            'created_at' => '2 years ago',
        ],
    ];
@endphp

<x-layout :title="$title">
    <section>
        <div class="mx-auto max-w-7xl">
            <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-14">Our popular blogs</h2>
            <div
                class="flex justify-center mb-14 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
                @foreach ($blogs as $blog)
                    <x-card-blog :url_img="$blog['url_img']" :blog_title="$blog['blog_title']" :author="$blog['author']" :created_at="$blog['created_at']" />
                @endforeach
            </div>
            <a href="javascript:;"
                class="cursor-pointer border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-gray-900 font-semibold mx-auto transition-all duration-300 hover:bg-gray-100">View
                All</a>
        </div>
    </section>
</x-layout>
