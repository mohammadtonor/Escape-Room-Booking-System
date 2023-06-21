<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\TimeSlot;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        $final_amount = 0;
        $first_amount = TimeSlot::find($request->time_slot_id)->price;
        if ( Carbon::parse(User::find(auth()->id())->birthday)->isBirthday()){
            $discount = $first_amount * 0.10;
            $final_amount = $first_amount - $discount;
        }else{
            $final_amount = $first_amount;
        }

        $booking = Booking::create([
            'time_slot_id' =>$request->time_slot_id,
            'user_id' =>auth()->id(),
            'amount' =>$final_amount,
            'max_participants_number' =>$request->max_participants,
        ]);

        return $booking;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
