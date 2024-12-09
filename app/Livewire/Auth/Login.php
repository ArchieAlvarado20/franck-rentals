<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    Public function save(){
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:4|max:255'
        ]);

        if(!auth()->attempt(['email'=> $this->email, 'password' => $this->password])){
            session()->flash('error','Invalid credentials');
            return;
        }
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
