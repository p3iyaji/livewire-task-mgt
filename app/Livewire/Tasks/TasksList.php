<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;


class TasksList extends Component
{
//    public $tasks;
//
//    public function mount($tasks)
//    {
//        $this->tasks = $tasks;
//    }

//LISTENING TO DISPATCH EVENT FROM THE TASKSFORM AND PASSING THE ARGUMENT IT COMES WITH
//    #[On('task-created')]
//    public function test($title)
//    {
//        dd('tis Working on '. $title);
//    }

    use WithPagination;

    //public $tasks;

   // #[On('task-created')]
//    public function mount()
//    {
//        $this->tasks = auth()->user()->tasks()->paginate(5);
//    }
    public function placeholder()
    {
       return view('skeleton');
    }

    #[On('task_created')]
    public function render()
    {
        return view('livewire.tasks.tasks-list',[
            'tasks' =>  auth()->user()->tasks()->paginate(4),
            'count' => auth()->user()->tasks->count(),]);
    }
}
