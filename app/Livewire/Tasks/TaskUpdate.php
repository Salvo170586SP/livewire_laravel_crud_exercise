<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskUpdate extends Component
{
    /*  #[On('task-updated')] */
    public Task $task;
    public $name;

    /*   public function updateTimestamp()
    {
        Task::query()->update([
            'updated_at' => now(),
        ]);
    } */

    public function mount(Task $task)
    {
        $this->task = $task;
        $this->name = $task->name;
    }

    public function update()
    {
        $this->task->update([
            'name' => $this->name
        ]);

        session()->flash('message', 'Task aggiornato con successo.');

        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-update')->layout('layouts.app');
    }
}
