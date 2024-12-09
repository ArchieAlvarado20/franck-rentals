<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Register extends Component
{
    use LivewireAlert;

    Public $name;
    Public $email;
    Public $password;

    Public function save(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:4|max:255'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        $this->alert('success', 'Succefully registered', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'icon' =>'success',
        ]);

        return redirect('/login');  
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
