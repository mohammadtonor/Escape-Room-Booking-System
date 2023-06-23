<?php

namespace App\Rules;

use App\Models\TimeSlot;
use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckResrvedTimeSlotRule implements ValidationRule,DataAwareRule
{
    protected array $data = [];

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $time_slot = TimeSlot::find($this->data['time_slot_id']);

        if ($time_slot->is_reserved){
            $fail('Sorry :( the escape room at this time slot is reserved ');
        }
        if($this->data['max_participants'] <= $time_slot->escapeRoom->participants_number){
            $fail('sory :( The participants_number grater than max participants_number');
        }

    }

    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
