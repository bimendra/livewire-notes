<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    private $user;

    private $columnCount = 2;
    public $columns = [];

    public function mount()
    {
        $this->user = User::first();
    }

    public function render()
    {        
        return view('livewire.dashboard', [
            'notes' => $this->user->notes()->paginate(8),
        ]);
    }
}
