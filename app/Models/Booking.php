<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookings',
        'time_slot_id',
        'user_id',
        'amount',
        'has_discount',
        'cancel',
        'participants_number'
    ];

    public function booking()
    {
        return $this->belongsTo(User::class);
    }
}
