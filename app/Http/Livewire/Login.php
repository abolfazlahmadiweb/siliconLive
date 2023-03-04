<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validateFrom();

        if(Auth::attempt(array($this->username() => $this->email, 'password' => $this->password))){
            return redirect('tickets');
        }
        session()->flash('error', 'email and password are wrong.');
    }

    public function logout()
    {
        dd('logout');
    }

    public function username()
    {
        return 'email';
    }

    public function validateFrom()
    {
        $this->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
    }

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.app')
            ->section('content');
    }
}
