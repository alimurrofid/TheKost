<?php

namespace App\Http\Controllers;

use App\Models\KindPaymentLogs;
use Illuminate\Http\Request;

class KindPaymentLogsController extends Controller
{
    public const KINDPAYMENT_ROUTE = [
        "index" => "transactions.index",
        "store" => "transactions.store",
        "create" => "transactions.create",
        "show" => "transactions.show",
        "edit" => "transactions.edit",
        "update" => "transactions.update",
        "delete" => "transactions.destroy",
        "trashIndex" => "transactions.trash.index",
        "trashDetail" => "transactions.trash.detail",
        "trashRestore" => "transactions.trash.restore",
        "trashDelete" => "transactions.trash.delete"
    ];

    public const KINDPAYMENT_VIEW = [
        "index" => "dashboard.transaction.index",
        "create" => "dashboard.transaction.create",
        "detail" => "dashboard.transaction.detail",
        "edit" => "dashboard.transaction.edit",
        "trashIndex" => "dashboard.transaction.trashIndex",
        "trashDetail" => "dashboard.transaction.trashDetail",
    ];

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KindPaymentLogs $kindPaymentLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KindPaymentLogs $kindPaymentLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KindPaymentLogs $kindPaymentLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KindPaymentLogs $kindPaymentLogs)
    {
        //
    }
}
