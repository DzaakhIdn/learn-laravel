@props([
    'url_img' => null,
    'blog_title' => '',
    'author' => 'Anonim',
    'created_at' => '',
])

<div
    class="group cursor-pointer w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl p-5 transition-all duration-300 hover:border-indigo-600">
    <div class="flex items-center mb-6">
        <img src="{{ $url_img }}" alt="Harsh image" class="rounded-lg w-full object-cover">
    </div>
    <div class="block">
        <h4 class="text-gray-900 font-medium leading-8 mb-9">{{ $blog_title }}</h4>
        <div class="flex items-center justify-between  font-medium">
            <h6 class="text-sm text-gray-500">{{ $author }}</h6>
            <span class="text-sm text-indigo-600">{{ $created_at }}</span>
        </div>
    </div>
</div>
