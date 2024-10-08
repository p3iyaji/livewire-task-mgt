<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class TotalTaskCount extends Component
{
    #[Reactive]
    public $count;
    public function render()
    {
        return view('livewire.total-task-count');
    }
}

