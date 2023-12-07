<div>
  User: {{ $user->name }} - {{ $user->email }}

  <x-secondary-button wire:click="refresh">Refresh</x-secondary-button>
</div>
