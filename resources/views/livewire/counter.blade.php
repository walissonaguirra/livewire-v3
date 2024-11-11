<div>
    <h1>{{ $count }}</h1>

    <x-primary-button wire:click="increment">+</x-primary-button>
    <x-primary-button wire:click="decrement">-</x-primary-button>

    <p>{{ $firstName }} {{ $lastName }}</p>

    <x-text-input wire:model.live="count"/>
</div>
