<?php

namespace App\Http\Resources;

use App\Models\TimeSlot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'time_slot' => new TimeSlotResource(TimeSlot::where('id',$this->time_slot_id)->first()),
            'user_name' =>User::find($this->user_id)->name,
            'amount' => $this->amount,
            'max_participants_number' =>$this->max_participants,
        ];
    }
}
