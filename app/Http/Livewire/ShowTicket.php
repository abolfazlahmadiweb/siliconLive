<?php

namespace App\Http\Livewire;

use App\Models\Active;
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

    public function supervisor()
    {
        $actives = Active::where('ticket_id', $this->ticket->id)->first();
        if ($actives == null) {
            Active::create([
                'ticket_id' => $this->ticket->id,
                'supervisor_id' => 1
            ]);
        } else {
            if ($actives->supervisor_id == null){
                $actives->update([
                    'supervisor_id' => 1
                ]);
            } else {
                $actives->update([
                    'supervisor_id' => null
                ]);
            }

        }
        session()->flash('success', __('tr.activate changed by supervisor'));
        return redirect('/tickets');
    }

    public function ceo()
    {
        $actives = Active::where('ticket_id', $this->ticket->id)->first();
        if ($actives == null) {
            Active::create([
                'ticket_id' => $this->ticket->id,
                'ceo_id' => 1
            ]);
        } else {
            if ($actives->ceo_id == null){
                $actives->update([
                    'ceo_id' => 1
                ]);
            } else {
                $actives->update([
                    'ceo_id' => null
                ]);
            }

        }
        session()->flash('success', __('tr.activate changed by ceo'));
        return redirect('/tickets');
    }

    public function render()
    {
        return view('livewire.show-ticket')
            ->with('plans', Plan::all())
            ->extends('layouts.app')
            ->section('content');
    }
}
