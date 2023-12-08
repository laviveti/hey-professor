<form
  wire:submit.throttle.5s='calculate'
  class="relative mx-auto flex w-3/12 flex-col gap-2 bg-slate-700 p-3 [&>button[wire\:click]]:mt-6 [&>button[wire\:click]]:w-fit [&>button[wire\:click]]:self-center [&>button[wire\:click]]:bg-green-500">

  <x-text-input autofocus placeholder="primeiro número"
    wire:model='num1' />

  <select class="text-black" wire:model='operator'>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>

  <x-text-input placeholder="segundo número"
    wire:model='num2' />

  <x-primary-button
    class="disabled:bg-zinc-500 disabled:text-zinc-400 disabled:hover:bg-zinc-500"
    type='submit'>
    <span wire:loading.class='hidden'
      wire:target="calculate">Calcular</span>
    <span wire:loading wire:target="calculate">Calculando...</span>
  </x-primary-button>

  <div class="flex justify-between py-4">
    <x-primary-button type="button" wire:click="add10('num1')">
      add 10 num 1
    </x-primary-button>
    <x-primary-button type="button" wire:click="add10('num2')">
      add 10 num 2
    </x-primary-button>
  </div>

  <x-primary-button type="button" @click="$wire.calculate()">
    Calculando pelo Alpine
  </x-primary-button>

  <x-primary-button
    class="w-fit !bg-yellow-300"
    type="button"
    wire:click="toLogando()">
    <span wire:loading.class='hidden' wire:target="toLogando">
      Fake Login
    </span>
    <span wire:loading wire:target="toLogando">Awaiting...</span>
  </x-primary-button>

  <p class="mt-10 rounded-lg bg-sky-900 p-2 text-xl">
    Resultado: <span class="text-2xl">{{ $result }}</span>
  </p>
</form>
