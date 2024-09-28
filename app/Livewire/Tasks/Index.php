<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.tasks.index')->layout('layouts.app');

    }
}
