<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="max-w-4xl m-auto grid-cols-2 grid gap-4">
            @foreach ($stories as $story)
                <div class="border px-2 py-4 rounded">                
                    <div class="text-xl font-bold">{{ $story->title }}</div>
                    <div class="text-xl">{{ $story->description }}</div>
                </div>
            @endforeach
        </div>


    </body>
</html>