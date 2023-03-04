<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'persian_name'];
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'plan_id');
    }
}
