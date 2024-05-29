<?php

namespace App\Livewire\Partials;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function logoutUser() {
        Auth::logout();
        $this->redirect(route('auth.index','login'),navigate:true);
    }
    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
