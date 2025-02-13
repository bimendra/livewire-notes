<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Note extends Component
{
    public $title;
    public $content;
    public $bookmarked;
    
    public function render()
    {
        return view('livewire.note');
    }
}
