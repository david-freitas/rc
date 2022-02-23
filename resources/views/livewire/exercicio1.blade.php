<div>
    <input wire:model="name" type="text" class="border bg-blue-50 px-2 py-1">
    <br>
        
    @if ($visible)
        Olá {{ $name }}    
    @endif
</div>
