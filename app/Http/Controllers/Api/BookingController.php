<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Resources\BookingResource;
use App\Http\Resources\EscapeRoomResource;
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
        $booking = Booking::where('user_id',\auth()->id())->get();
        return BookingResource::collection(Booking::where('user_id',\auth()->id())->get());
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
        $time_slot = TimeSlot::find($request->time_slot_id);
        $first_amount = $time_slot->price;
        if ( Carbon::parse(User::find(auth()->id())->birthday)->isBirthday()){
            $discount = $first_amount * 0.10;
            $final_amount = $first_amount - $discount;
        }else{
            $final_amount = $first_amount;
        }

        $time_slot->update([
            'is_reserved' => 1
        ]);

        $booking = Booking::create([
            'time_slot_id' =>$request->time_slot_id,
            'user_id' =>auth()->id(),
            'amount' =>$final_amount,
            'max_participants_number' =>$request->max_participants,
        ]);

        return new BookingResource($booking);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
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
    public function destroy($id)
    {
        $booking = Booking::find($id);
        if ($booking->user_id != auth()->id()) {
            abort(403);
        }

        $booking->delete();

        return response()->noContent();
    }
}
