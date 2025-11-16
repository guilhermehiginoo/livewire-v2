<div>
    <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded">-</button>
    <span class="mx-4 text-xl">{{ $count }}</span>
    <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded">+</button>

    <div class="mt-4">
        <x-text-input wire:model="name" class="mt-2" />
        <p class="mt-2">Hello, {{ $name }}</p>
    </div>
</div>
