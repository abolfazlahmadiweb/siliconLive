<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class Tickets extends Component
{
    public function render()
    {
        if (!auth()->user()->is_user()) {
            $tickets = Ticket::with(['pelan', 'user', 'files'])->get();
        } else {
            $tickets = auth()->user()->tickets;
        }
        return view('livewire.tickets', compact('tickets'));
    }
}
