<form wire:submit="submit"
  class="col-start-3 my-auto flex flex-col gap-3">

  <div>
    <x-text-input placeholder="Username" wire:model.live="form.name" />
    @error('form.name')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input placeholder="Email" wire:model.live="form.email" />
    @error('form.email')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input
      placeholder="Password"
      wire:model.live="form.password"
      type="password" />
    @error('form.password')
      <p class="text-sm italic text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <x-text-input
      placeholder="Password confirmation"
      wire:model.live="form.password_confirmation"
      type="password" />
  </div>

  <x-primary-button class="w-fit">Save user</x-primary-button>
</form>
