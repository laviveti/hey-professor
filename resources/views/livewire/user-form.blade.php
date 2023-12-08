<form wire:submit="submit"
  class="col-start-3 my-auto flex flex-col gap-3">

  <div>
    <x-text-input placeholder="Username" wire:model.live="name" />
    @error('name')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input placeholder="Email" wire:model.live="email" />
    @error('email')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input
      placeholder="Password"
      wire:model.live="password"
      type="password" />
    @error('password')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input
      placeholder="Password confirmation"
      wire:model.live="password_confirmation"
      type="password" />
  </div>

  <x-primary-button class="w-fit">Save user</x-primary-button>
</form>
