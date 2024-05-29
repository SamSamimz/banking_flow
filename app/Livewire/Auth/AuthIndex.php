<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthIndex extends Component
{
    public $account_type;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $page = '';
    public function mount($page) {
        $this->page = $page;
        if($this->page == 'login') {
            $this->page = 'login';
        }elseif($this->page == 'register') {
            $this->page = 'register';
        }else {
            abort(404);
        }
    }

    protected $rules = [
        'account_type' => 'required|in:Individual,Business',
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4|max:25|confirmed',
        
    ];
    public function registerUser() {
        $this->validate();
        $user = User::create([
            'account_type' => $this->account_type,
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        if($user) {
            Auth::login($user);
            $this->reset();
            $this->redirect(route('dashboard'),navigate:true);
        }
    }
    
    public function loginUser() {
        if(Auth::attempt(['email' => $this->email,'password' =>  $this->password])) {
            session()->flash('success','Login successful');
            $this->reset();
            $this->redirect(route('dashboard'),navigate:true);
        }else {
            $this->redirect(route('auth.index','login'),navigate:true);
            $this->reset();
            session()->flash('error','Invalid login credentials');
        }
    }


    public function render()
    {
        return view('livewire.auth.auth-index')->layout('layouts.auth');
    }
}
