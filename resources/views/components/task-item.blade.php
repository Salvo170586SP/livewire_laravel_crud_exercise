<div class="flex   items-center justify-between">
    <div class="flex">
        {{-- chekbox --}}
        @if($task->completed)
        <input type="checkbox" wire:click="toggle({{$task->id}})" checked>
        @else
        <input type="checkbox" wire:click="toggle({{$task->id}})">
        @endif

        {{-- nome task + edit --}}
        @if($editingTaskId === $task->id)
        <input type="text" wire:model="name"
            class="px-4 text-white rounded-lg bg-slate-500  focus:outline-none focus:shadow-lg mx-3">
        @else
        <h2 class="mx-3">{{ $task->name }} </h2>
        @endif

        {{-- bottoni edit --}}
        @if($editingTaskId === $task->id)
        <div class="flex">
            <button wire:click="update({{$task->id}})" class="mx-3 px-4 py-1 rounded-lg bg-slate-600 text-white">
                modifica
            </button>
            <button wire:click="closeEdit" class="px-4 py-1 rounded-lg bg-red-600 text-white mx-3">chiudi</button>
        </div>
        @endif
    </div>

    {{-- bottoni task --}}
    <div>
        <button class="bg-slate-700 hover:bg-slate-600 text-white rounded-xl px-5 py-2" wire:navigate
            href="/tasks/{{ $task->id }}">vedi</button>
        <button class="bg-slate-700 hover:bg-slate-600 text-white rounded-xl px-5 py-2"
            wire:click="edit({{$task->id}})">modifica</button>
        <button class="bg-red-700 hover:bg-red-600 text-white rounded-xl px-5 py-2"
            wire:click="delete({{ $task->id }})">elimina</button>
    </div>
</div>