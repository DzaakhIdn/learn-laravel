@props([
    'slug' => '',
    'blog_title' => '',
    'body' => '',
    'author' => 'Anonim',
    'created_at' => '',
])

<div id="card"
    class="group cursor-pointer w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl p-5 transition-all duration-300 hover:border-indigo-600">
    <div class="flex items-center mb-6">
        <img src="https://placehold.co/600x400" alt="Harsh image" class="rounded-lg w-full object-cover">
    </div>
    <div class="block">
        <h4 class="text-gray-900 font-medium leading-8 mb-5">{{ $blog_title }}</h4>
        <p class="mb-5 text-base text-slate-800 truncate">{{ $body }}</p>
        <div class="flex items-center justify-between  font-medium">
            <h6 class="text-sm text-gray-500">{{ $author }}</h6>
            <span class="text-sm text-indigo-600">{{ $created_at }}</span>
        </div>
    </div>
</div>

<script>
    var card = document.getElementById('card');

    card.addEventListener('click', function() {
        window.location.href = '/post/{{ $slug }}'
    })
</script>
