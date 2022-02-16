<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;

class Teste extends Component
{
    public $story_id;
    public $story;

    public function mount()
    {
        $this->story_id = 1;
        $this->story = Story::find($this->story_id); 
    }

    public function render()
    {
        $this->story = Story::find($this->story_id);
        return view('livewire.teste');
    }

}
