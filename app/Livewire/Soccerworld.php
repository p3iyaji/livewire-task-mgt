<?php

namespace App\Livewire;

use Livewire\Component;

class Soccerworld extends Component
{
    public function render()
    {
        return view('livewire.soccerworld')->layout('layouts.app');
    }
}
