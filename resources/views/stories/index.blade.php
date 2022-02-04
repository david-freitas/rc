<x-guestLayout>
    <div class="max-w-4xl m-auto grid-cols-2 grid gap-4">        
        @foreach ($stories as $story)
            <x-story :story="$story"/>
        @endforeach
    </div>
</x-guestLayout>