<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscapeRoom extends Model
{
    use HasFactory;

    protected $fillable = [
                'name' ,
           'description','story','duration',
                'participants_number', 'difficulty',
                 'Scary_degree','phone_number','address'
                ];

    public function timeSlots(){
        return $this->hasMany(TimeSlot::class);
    }
}
