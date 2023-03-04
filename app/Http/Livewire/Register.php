<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validateFrom();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect('tickets');
    }

    public function validateFrom()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'regex:/(09)[0-9]{9}/','digits:11', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:password_confirmation'],
        ]);
    }

    public function render()
    {
        return view('livewire.register')
            ->extends('layouts.app')
            ->section('content');
    }
}
