<div class="pt-8 flex flex-col justify-center items-center">
    @if($task->img_url)
    <figure class="w-[300px]">
        <img class="w-full rounded-md" src="{{ asset('storage/'. $task->img_url) }}" alt="img">
    </figure>
    @else
    <span class="text-white">NO IMAGE</span>
    @endif
    <h1 class="font-bold text-6xl tracking-tight text-white text-center">
        {{ $task->name }}
    </h1>
    <div class="mt-5">
        <small class="text-white">Contenuto:</small>
        <p class="font-bold text-2xl tracking-tight text-white text-center"> {{ $task->paragraph }}</p>
    </div>
    <button wire:navigate href="/" class="bg-slate-400 text-white px-6 py-3 rounded-xl mt-5">torna alla index</button>
</div>