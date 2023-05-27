<?php

namespace App\Http\Controllers;

use App\Models\Dormitory;
use App\Http\Requests\StoreDormitoryRequest;
use App\Http\Requests\UpdateDormitoryRequest;

class DormitoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public const DORMITORY_ROUTE = [
        "index" => "dormitory.index",
        "store" => "dormitory.store",
        "create" => "dormitory.create",
        "show" => "dormitory.show",
        "edit" => "dormitory.edit",
        "update" => "dormitory.update",
        "delete" => "dormitory.destroy",
        "trashIndex" => "dormitory.trash.index",
        "trashDetail" => "dormitory.trash.detail",
        "trashRestore" => "dormitory.trash.restore",
        "trashDelete" => "dormitory.trash.delete"
    ];

    public const DORMITORY_VIEW = [
        "index" => "dashboard.dormitory.index",
        "create" => "dashboard.dormitory.create",
        "detail" => "dashboard.dormitory.detail",
        "edit" => "dashboard.dormitory.edit",
        "trashIndex" => "dashboard.dormitory.trashIndex",
        "trashDetail" => "dashboard.dormitory.trashDetail",
    ];
    public function index()
    {
        return view(DormitoryController::DORMITORY_VIEW["index"], [
            'title' => 'Data Penghuni',
            'dormitories' => Dormitory::with(["rooms"])->orderBy("name")->paginate(10),
            'dormitory_route' => DormitoryController::DORMITORY_ROUTE
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
    public function store(StoreDormitoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dormitory $dormitory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dormitory $dormitory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDormitoryRequest $request, Dormitory $dormitory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dormitory $dormitory)
    {
        //
    }
}
