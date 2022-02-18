<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;
use Livewire\WithPagination;

class StoriesIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        if ($this->search != null) {
            $stories = Story::where('title', 'like', '%' . $this->search . '%')->paginate(4);            
        }
        else
            $stories = Story::paginate(4);

        $this->resetPage();
        
        return view('livewire.stories-index', ['stories' => $stories]);
    }
}
