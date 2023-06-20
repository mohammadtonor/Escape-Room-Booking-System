<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EscapeRoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' =>$this->name,
            'description' => $this->description,
            'story' => $this->story,
            'duration'=> $this->duration,
            'participants_number'=> $this->participants_number,
            'difficulty'=> $this->difficulty,
            'Scary_degree'=> $this->Scary_degree,
            'phone_number'=> $this->phone_number,
            'address'=> $this->address,
            'timeslots' => TimeSlotResource::collection($this->timeSlots)
        ];
    }
}
