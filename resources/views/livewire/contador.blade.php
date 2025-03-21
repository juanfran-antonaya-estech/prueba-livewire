<div wire:poll.keep-alive class="text-white flex flex-col">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    Número: {{ $this->numero }}
    <button wire:click="incrementar()" class="bg-slate-700 rounded px-4">Subir numero en 1</button>
    {{ $this->tarea }}
</div>
