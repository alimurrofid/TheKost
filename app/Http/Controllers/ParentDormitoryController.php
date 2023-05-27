<?php

namespace App\Http\Controllers;

use App\Models\ParentDormitory;
use App\Http\Requests\StoreParentDormitoryRequest;
use App\Http\Requests\UpdateParentDormitoryRequest;

class ParentDormitoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parentDormitoryData = ParentDormitory::all();
        return view('parentDormitory.index', [
            'title' => 'Parent Dormitory',
            'parentDormitoryData' => $parentDormitoryData,
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
    public function store(StoreParentDormitoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ParentDormitory $parentDormitory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentDormitory $parentDormitory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParentDormitoryRequest $request, ParentDormitory $parentDormitory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentDormitory $parentDormitory)
    {
        //
    }
}
