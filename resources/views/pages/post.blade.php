@extends('app')

@section('title', $post->title)
@section('description', $post->meta['description'])
@section('canonical_link', $post->meta['canonical_link'])

@section('content')
    <div class="container mx-auto px-4 lg:max-w-screen-lg">
        <h1 class="mb-5 text-3xl">{{ $post->title }}</h1>

        <div class="flex items-center mb-10">
            <a href="#" class="hidden md:block">
                <img src="{{ asset($post->user->avatar) }}" alt="{{ $post->user->name }}" class="rounded-full w-10 h-w-10 object-cover mr-5">
            </a>
            <div>
                <p class="hidden md:block">{{ $post->user->name }}</p>
                <p class="text-gray-500 text-sm">
                    {{ $post->published_at->format('M, j Y') }} — {{ $post->read_time }} <span class="hidden md:inline">—</span>
                    <span class="block md:inline-block">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('tag', $tag->slug) }}" class="text-yellow-800">#{{ $tag->name }}</a>
                        @endforeach
                    </span>
                </p>
            </div>
        </div>

        @if ($post->featured_image)
            <div class="mb-10">
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_caption }}" class="rounded-xl">
                <p class="text-gray-500">{{ $post->featured_image_caption }}</p>
            </div>
        @endif

        <div class="leading-10 mb-10 post-body font-serif">
            {!! $post->body !!}
        </div>

        <x-back-to-home />
    </div>
@endsection
