@extends('app')

@section('title', "Topic: $topic->name")

@section('content')
    <div class="container mx-auto px-4 lg:max-w-screen-lg">
        <x-page-title>
            Topic: {{ $topic->name }} ({{ $posts->total() }})
        </x-page-title>

        @foreach ($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
