@extends('app')

@section('title', 'Topics')

@section('content')
    <div class="container mx-auto px-4 lg:max-w-screen-lg">
        <x-page-title>
            Topics ({{ $topics->count() }})
        </x-page-title>

        <div class="flex flex-wrap gap-4 mb-10">
            @foreach ($topics as $topic)
                <a href="{{ route('topics.show', $topic->slug) }}" class="no-underline block transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none flex-auto w-full md:w-1/4">
                    <div class="p-5 mb-5 rounded border shadow-sm">
                        {{ $topic->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
