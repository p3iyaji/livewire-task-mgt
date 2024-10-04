<?php

namespace App\Livewire;

use Livewire\Component;

class GittestComponent extends Component
{

    public $product;

    public function mount()
    {
        $this->product = "Right here Ok!";
    }
    public function render()
    {
        return view('livewire.gittest-component')->layout('layouts.app');
    }
}
