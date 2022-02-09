<x-guestLayout>
    <form class="border m-4 p-4" action="/stories" method="POST">
        @csrf
        <div>
            Título <input class="border px-1 py-0.5 w-32 mx-2 rounded-xl bg-green-50" type="text" name="title">
        </div>
        <div class="mt-4">
            Descrição <input class="border px-1 py-0.5 w-32 mx-2 rounded-xl bg-green-50" type="text" name="description">
        </div>
        <input type="submit" class="border bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded" value="Submeter">
    </form>
</x-guestLayout>