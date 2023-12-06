<div>
  <div>{{ $counter }}</div>
  <x-primary-button wire:click="count">
    + 1
  </x-primary-button>
  <br><br>

  <x-text-input wire:model.live="counter" />
  <x-primary-button wire:click="refresh">Refresh</x-primary-button>

  <br><br>
  <div>
    <p>Name: {{ $name }}</p>
    <p>Last Name: {{ $lastName }}</p>
  </div>
</div>
