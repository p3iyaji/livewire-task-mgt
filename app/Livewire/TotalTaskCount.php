<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class TotalTaskCount extends Component
{
    public $count;
    public function render()
    {
        return view('livewire.total-task-count');
    }
}

