<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TimeSlotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'escape_room_id' => $this->escape_room_id,
            'start_time_slot' => $this->start_time_slot,
            'price' => $this->price,
        ];
    }
}
