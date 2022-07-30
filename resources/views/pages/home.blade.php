@extends('app')

@section('content')
    <div class="container mx-auto px-4 lg:max-w-screen-lg">
        @forelse ($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @empty

        @endforelse

        {{ $posts->links() }}
    </div>
@endsection
