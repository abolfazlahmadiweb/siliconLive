<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {

    }
    public function render()
    {
        return view('livewire.login');
    }
}
