<div>
    <input class="border bg-green-300" type="text" wire:model="search"> {{ $search }}
    <div class="grid grid-cols-2 gap-2">
        @foreach ($stories as $story)
            <x-story :story="$story"></x-story>
        @endforeach
    </div>
    {{ $stories->links() }}
</div>
