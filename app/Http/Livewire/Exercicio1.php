<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercicio1 extends Component
{
    public $name;
    public $visible;

    public function mount()
    {
        $this->visible = true;
    }

    public function render()
    {
        if ($this->name == "")
            $this->visible = false;
        else
            $this->visible = true;
        return view('livewire.exercicio1');
    }
}
