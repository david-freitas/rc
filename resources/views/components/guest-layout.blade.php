<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-menu/>
    <div class="max-w-3xl m-auto">
        {{ $slot }}
    </div>
    <div class="text-white h-12 w-full absolute bottom-0 bg-blue-400">
        Rodapé
    </div>

</body>
</html>
<html>
