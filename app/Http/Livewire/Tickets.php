<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class Tickets extends Component
{
    public function render()
    {
        $tickets = Ticket::with(['pelan', 'user', 'files'])->get();
        return view('livewire.tickets', compact('tickets'));
    }
}
