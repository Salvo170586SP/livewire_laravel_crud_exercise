<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Title;


class TaskShow extends Component
{
    #[Title('Task detail')]
    public Task $task;

    /*   public function mount(Task $task)
    {
        $this->task = $task;
    } */

    public function render(Task $task)
    {
        return view('livewire.tasks.task-show', compact('task'))->layout('layouts.app');
    }
}
