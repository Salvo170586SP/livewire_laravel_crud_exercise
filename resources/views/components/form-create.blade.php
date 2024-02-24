<div class="text-center rounded-xl bg-gray-400 border border-slate-600 p-5 hover:shadow-xl transition w-[500px]">
    <div class="flex flex-col">
        <input type="text" placeholder="titolo..." name="name" wire:model="name" class="p-2 rounded-lg mb-3">
        <div class="text-red-800 mb-3">
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <textarea wire:model="paragraph" placeholder="contenuto..." id="paragraph" class="p-2 rounded-lg mb-3" rows="3"
            rows="10"></textarea>
        <div class="text-red-800 mb-3">
            @error('paragraph')
            <span>{{$message}}</span>
            @enderror
        </div>

        <input type="file" class="my-3" wire:model="img_url">
    </div>
    <x-button :button="$button" :click="'save'" />
</div>