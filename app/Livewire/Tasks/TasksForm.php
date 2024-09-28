<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;
use function Livewire\Volt\title;

class TasksForm extends Component
{

    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->createTask();
        //$this->dispatch('task-created');
        $this->dispatch('task-created', title: $this->form->title); //Adding parameter to the dispatch method
        $this->form->reset();


    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
