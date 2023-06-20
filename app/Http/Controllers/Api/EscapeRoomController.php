<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EscapeRoomResource;
use App\Http\Resources\TimeSlotResource;
use App\Models\EscapeRoom;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class EscapeRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => [
                'escape_rooms' => EscapeRoomResource::collection(EscapeRoom::with('timeslots')->paginate(5))->response()->getData()
            ],
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        return new EscapeRoomResource(EscapeRoom::find($id));
    }

    public function getTimeSlots($id)
    {
        return new TimeSlotResource(TimeSlot::where('escape_room_id',$id)->first());
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
