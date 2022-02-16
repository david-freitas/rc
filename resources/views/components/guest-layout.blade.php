<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  @livewireStyles
</head>
<body>
    <div>
      <x-menu/>
    </div>
    <div class="m-24 max-w-3xl m-auto">
        {{ $slot }}
    </div>
    {{-- <x-footer/> --}}

    @livewireScripts
</body>
</html>
<html>
