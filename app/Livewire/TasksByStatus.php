<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class TasksByStatus extends Component
{

    #[Reactive]
    public $tasksByStatus;

    public function render()
    {
        return view('livewire.tasks-by-status');
    }
}
