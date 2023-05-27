<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public const ROOM_ROUTE = [
        "index" => "rooms.index",
        "store" => "rooms.store",
        "create" => "rooms.create",
        "show" => "rooms.show",
        "edit" => "rooms.edit",
        "update" => "rooms.update",
        "delete" => "rooms.destroy",
        "trashIndex" => "rooms.trash.index",
        "trashDetail" => "rooms.trash.detail",
        "trashRestore" => "rooms.trash.restore",
        "trashDelete" => "rooms.trash.delete",
    ];

    public const ROOM_VIEW = [
        "index" => "dashboard.room.index",
        "create" => "dashboard.room.create",
        "detail" => "dashboard.room.detail",
        "edit" => "dashboard.room.edit",
        "trashIndex" => "dashboard.room.trashIndex",
        "trashDetail" => "dashboard.room.trashDetail",
    ];
    public function index()
    {
        return view(RoomController::ROOM_VIEW["index"], [
            'title' => 'Room',
            'rooms' => Room::with(["dormitory"])->orderByRaw("CAST(room_number AS UNSIGNED) ASC")->paginate(10),
            'rooms_route' => RoomController::ROOM_ROUTE
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
    public function store(StoreRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
