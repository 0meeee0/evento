<?php

namespace App\Models;

use App\Models\User;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'number_places',
        'categories_id',
        'users_id',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class,'users_id');
    }

    public function category() {
        return $this->belongsTo(category::class,'categories_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'event_id');
    }
}
