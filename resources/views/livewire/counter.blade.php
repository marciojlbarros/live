<div id="counter">

    <input type="text" wire:model='counter'>

    <button wire:click="increment"> + </button>
    {{ $counter }}
    <button wire:click="decrement"> - </button>

</div>