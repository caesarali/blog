<a href="{{ route('post', $post->slug) }}" class="no-underline block transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
    <div class="rounded-lg mb-8 border flex">
        @if ($post->featured_image)
            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_caption }}" class="w-3/12 rounded-l-lg hidden md:block object-cover">
        @endif
        <div class="p-4 flex-1 w-9/12">
            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
            <p class="mb-3 truncate">{{ $post->summary }}</p>
            <p class="text-gray-600">{{ $post->user->name }}</p>
            <p class="text-gray-600">
                {{ $post->published_at->format('M, j Y') }} — {{ $post->read_time }}
            </p>
        </div>
    </div>
</a>
