@props(['story'])

<div class="border rounded hover:bg-gray-50 hover:shadow">
    <a href="/stories/{{ $story->id }}">
        <div class="bg-gray-200 text-xl px-2 py-2  font-bold">{{ $story->title }}</div>
    </a>

    <div class="flex w-full">
        <div class="m-auto px-1">
            @if ($story->image)
                <img class="w-full m-auto  object-scale-down h-48" src="/img/stories/{{ $story->image }}">
            @else
                <img class="w-full object-scale-down h-48" src="/img/stories/corrolaries.jpg">
            @endif
        </div>
        <div class="w-full px-4 py-1">
            <div class="text-xl">{{ $story->description }}</div>
        </div>
    </div>                
</div>