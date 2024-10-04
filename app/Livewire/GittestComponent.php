<?php

namespace App\Livewire;

use Livewire\Component;

class GittestComponent extends Component
{

    public $product, $anotherthing;

    public function mount()
    {
        $this->product = "Right here Ok!";
        $this->anotherthing = "Lost is also a very good movie";
    }
    public function render()
    {
        return view('livewire.gittest-component')->layout('layouts.app');
    }
}
