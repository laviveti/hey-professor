<div>
  <div>{{ $counter }}</div>
  <x-primary-button wire:click="count">
    + 1
  </x-primary-button>
  <br><br>

  <x-text-input wire:model.live="name" />
  <x-primary-button wire:click="refresh">Refresh</x-primary-button>

  <br><br>
  <div class="mt-10 rounded-md bg-zinc-700 p-3">
    <p>Name: {{ $name }}</p>
    <p>Last Name: {{ $lastName }}</p>
  </div>

  <div class="mt-10 rounded-md bg-zinc-700 p-3">
    <span x-text="$wire.name"></span>
    <x-secondary-button
      @click="$wire.name = 'Chapolin'">Change</x-secondary-button>
  </div>
</div>
