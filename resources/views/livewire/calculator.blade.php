<form
  wire:submit.throttle.5s='calculate'
  class="mx-auto flex w-3/12 flex-col bg-slate-700 p-3 [&>button[wire\:click]]:mt-6 [&>button[wire\:click]]:w-fit [&>button[wire\:click]]:self-center [&>button[wire\:click]]:bg-green-500">
  <x-text-input autofocus placeholder="primeiro número"
    wire:model='num1' />

  <select class="text-black" wire:model='operator'>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>

  <x-text-input placeholder="segundo número" wire:model='num2' />

  <x-primary-button type='submit'>Calcular</x-primary-button>

  <p class="mt-10 rounded-lg bg-sky-900 p-2 text-xl">
    Resultado: <span class="text-2xl">{{ $result }}</span>
  </p>
</form>
