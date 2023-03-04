<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_id',
        'title',
        'body'
    ];

    public function pelan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function files()
    {
        return $this->hasMany(Media::class, 'ticket_id');
    }

    public function supervisor()
    {
        return Active::where('ticket_id', $this->id)->whereNotNull('supervisor_id')->first();
    }

    public function ceo()
    {
        return Active::where('ticket_id', $this->id)->whereNotNull('ceo_id')->first();
    }

    public function active()
    {
        return $this->hasOne(Active::class, 'ticket_id');
    }
}
