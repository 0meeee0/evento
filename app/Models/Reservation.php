<?php

namespace App\Models;

use App\Models\events;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'Event_id', 'accepted'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

       public function Event()
    {
        return $this->belongsTo(events::class, 'Event_id');
    }
}
