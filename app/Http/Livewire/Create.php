<?php

namespace App\Http\Livewire;

use App\Models\Media;
use App\Models\Plan;
use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $planId;
    public $body;
    public $files = [];

    public function create()
    {
        $this->validateFrom();

        $ticket = auth()->user()->tickets()->create([
            'plan_id' => $this->planId,
            'title' => $this->title,
            'body' => $this->body
        ]);

        foreach ($this->files as $photo) {

            Media::create([
                'ticket_id' => $ticket->id,
                'file' => $photo->store('photos')
            ]);

        }

        $this->resetInputs();

        session()->flash('success', __('tr.ticket created successfully'));
        return redirect('/tickets');
    }

    public function update()
    {

    }

    public function resetInputs()
    {
        $this->title = null;
        $this->planId = null;
        $this->body = null;
        $this->files =  null;
    }



    public function validateFrom()
    {
        $this->validate([
            'planId' => 'required|integer|numeric|exists:plans,id',
            'title' => 'required|string|min:8|max:1000',
            'body' => 'required|string|min:30|max:5000',
            'files.*' => 'nullable|max:2048'
        ]);
    }

    public function render()
    {
        return view('livewire.create')
            ->with('plans', Plan::all())
            ->extends('layouts.app')
            ->section('content');
    }
}
