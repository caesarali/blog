<div class="flex mb-10">
    <div class="border-b border-gray-900 text-2xl pb-3">
        {{ $slot }}
    </div>
    <div class="border-b flex-grow text-gray-600">
        {{ $caption ?? '' }}
    </div>
</div>
