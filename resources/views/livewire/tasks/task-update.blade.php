<div class="text-center h-screen  flex flex-col justify-center  items-center">
    {{-- <button type="submit" wire:click="updateTimestamp"
        class="whitespace-nowrap font-medium text-white bg-slate-700 hover:bg-slate-600">
        ricarica
    </button> --}}

    <form wire:submit.prevent="update">
        <div>
            <label for="name" class="text-white">Nome Task:</label>
            <input type="text" wire:model.defer="name" id="name" class="p-2 rounded-lg">
        </div>
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        <div>
            <label for="paragraph" class="text-white">Contenuto:</label>
            <textarea   wire:model.defer="paragraph" id="paragraph" class="p-2 rounded-lg">
        </div>
        @error('paragraph') <span class="text-red-500">{{ $message }}</span> @enderror


        <button type="submit" class="bg-slate-500 hover:bg-slate-600 text-white rounded-xl mt-3 px-5 py-2">
            modifica
        </button>
    </form>
</div>