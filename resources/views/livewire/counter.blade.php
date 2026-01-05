<div>
    Count = {{ $count }}

    <button wire:click="increment">+</button>
    <button wire:mouseenter="hoverIncrement">hover +10</button>
    <button wire:click="incrementBy(3)">+3</button>
    <button wire:click="decrement">-</button>
    <button wire:click="backToZero">reset</button>
</div>
