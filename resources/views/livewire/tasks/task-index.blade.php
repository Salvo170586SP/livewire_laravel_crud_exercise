<div class="  h-screen  flex flex-col justify-center  items-center">

    <x-alert />

    {{-- form --}}
    <x-form-create :button="$button" />

    @if(count($tasks) > 0)
    <div class="w-full text-start">
        <button wire:click="deleteSelected" class="bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-xl">elimina
            selezionati</button>
    </div>
    @endif

    <ul class="w-full mt-5">
        @foreach($tasks as $task)
        <li wire:key="{{$task->id}}"
            class="w-full px-4 py-3 rounded-lg bg-white shadow-md mb-3 hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">

            <x-task-item :task="$task" :editingTaskId="$editingTaskId" />

        </li>
        @endforeach
    </ul>
</div>