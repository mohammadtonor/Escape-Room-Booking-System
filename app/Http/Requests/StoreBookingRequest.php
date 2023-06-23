<?php

namespace App\Http\Requests;

use App\Rules\CheckResrvedTimeSlotRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'time_slot_id'=> ['required', 'exists:time_slots,id', new CheckResrvedTimeSlotRule()],
            'max_participants'=> ['required']
        ];
    }
}
