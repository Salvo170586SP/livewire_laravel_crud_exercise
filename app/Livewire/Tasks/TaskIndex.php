<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class TaskIndex extends Component
{
    use WithFileUploads; // Utilizza il trait WithFileUploads

    #[Title('Homepage Tasks')]

    public $taskID;
    public $editingTaskId;
    public $name;
    public $paragraph;
    public $img_url;
    public $current_task;


    public function save()
    {
        $this->validate([
            'name' => 'required|max:10|string',
            'paragraph' => 'max:100',
        ]);

        $task = new Task();
        $task->user_id = 1;
        $task->name = $this->name;
        $task->paragraph = $this->paragraph;

        if ($this->img_url) {

            $path = Storage::put('/fileUploads', $this->img_url);

            $task->img_url = $path;
        }

        $task->save();

        $this->reset(['name', 'paragraph']);

        session()->flash('message', 'Task aggiunta correttamente');
    }


    public function delete(Task $task)
    {
        if ($task->img_url) {
            Storage::delete($task->img_url);
        }

        $task->delete();
    }


    public function deleteSelected()
    {
        $taskSelected = Task::where('completed', true)->get();

        foreach ($taskSelected as $task) {
            $task->delete();
        }
    }

  
    public function toggle(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
 
    }

    public function edit($taskID)
    {

        $this->editingTaskId = $taskID;
        $this->name =  Task::find($taskID)->name;
    }

    public function closeEdit()
    {
        $this->reset('editingTaskId', 'name');
    }

    public function update($taskID)
    {
        $this->validate([
            'name' => 'required|max:10|string',
            'paragraph' => 'max:100',
        ]);

        $task =  Task::find($taskID);

        $task->update([
            'name' => $this->name,
            'paragraph' => $this->paragraph,
        ]);


        $this->closeEdit();
    }

    public function render()
    {
        return view('livewire.tasks.task-index', ['tasks' => Task::latest()->get()])->layout('layouts.app')->with([
            'button' => 'New Task'
        ]);
    }
}
