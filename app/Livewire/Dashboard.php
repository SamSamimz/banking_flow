<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public function render()
    {
        $transactions = auth()
        ->user()
        ->transactions()
        ->paginate(10);
        return view('livewire.dashboard',compact('transactions'));
    }
}
