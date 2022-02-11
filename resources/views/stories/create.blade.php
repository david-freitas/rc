<x-guestLayout>
    <div class="h-24"></div>
    <form class="border p-4" action="/stories" method="POST">
        @csrf
        <div>
            Título <input class="border px-1 py-0.5 w-32 mx-2 rounded-xl bg-green-50" 
                type="text" 
                name="title" 
                
                value="{{ old('title') }}"
                >
            @error('title')
                <div class="text-red-900">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4">
            Descrição <input 
                            class="border px-1 py-0.5 w-32 mx-2 rounded-xl bg-green-50" 
                            type="text" 
                            
                            value="{{ old('description') }}"
                            name="description">
            @error('description')
                <div class="text-red-900">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="mt-8 border bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded" value="Submeter">

        @if (Session::get('status'))
            {{ Session::get('status') }}
        @endif
    </form>
</x-guestLayout>