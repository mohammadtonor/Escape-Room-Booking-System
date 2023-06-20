<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'escape_room_id',
        'start_time_slot',
        'price',
        'is_reserved'
    ];

    public function timeSlots()
    {
        return $this->belongsTo(EscapeRoom::class);
    }
}
