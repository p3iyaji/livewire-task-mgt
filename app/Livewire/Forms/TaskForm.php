<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    #[Validate('required|min:5')]
    public $title = '';
    #[Validate('required')]
    public $slug = '';
    #[Validate('required')]
    public $description;

    #[Validate('required')]
    public $status;
    #[Validate('required')]
    public $priority;
    #[Validate('required')]
    public $deadline;


    public function createTask()
    {
        auth()->user()->tasks()->create($this->all());

        request()->session()->flash('success', 'Task added successfully');
    }

    public function editTask()
    {
        auth()->user()->tasks()->update($this->all());
    }
}
