<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class NoteEdit extends Component
{
    use WithPagination;

    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $content;

    public function create()
    {
        $validated = $this->validate();
        \App\Models\Note::create([
            ...$this->validate(),
            'user_id' => 1,
        ]);
        $this->reset('title', 'content');
        session()->flash('success', 'Note created');
    }
    
    public function render()
    {
        return view('livewire.note-edit');
    }
}
