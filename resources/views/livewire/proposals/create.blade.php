<div>

    <button
        class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
        hover:bg-[#1f20a6] transition duration-300 ease-in-out"
        wire:click="$set('modal', true)">
        Enviar uma proposta
    </button>
    <x-proposals.form />

</div>
