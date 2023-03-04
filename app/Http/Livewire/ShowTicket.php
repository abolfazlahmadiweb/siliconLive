<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use App\Models\Ticket;
use Livewire\Component;

class ShowTicket extends Component
{
    public $ticket;
    public $title;
    public $planId;
    public $body;
    public $files;

    public function mount(Ticket $ticket)
    {
        $this->ticket = $ticket;
        $this->title = $ticket->title;
        $this->planId = $ticket->pelan->id;
        $this->body = $ticket->body;
        $this->files = $ticket->files;
    }

    public function update()
    {

    }

    public function render()
    {
        return view('livewire.show-ticket')
            ->with('plans', Plan::all())
            ->extends('layouts.app')
            ->section('content');
    }
}
