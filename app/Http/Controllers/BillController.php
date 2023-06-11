<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;


class BillController extends Controller
{
    public const BILL_ROUTE = [
        "index" => "bill.index",
        "store" => "bill.store",
        "create" => "bill.create",
        "show" => "bill.show",
        "edit" => "bill.edit",
        "update" => "bill.update",
        "delete" => "bill.destroy",
    ];

    public const BILL_VIEW = [
        "index" => "dashboard.bill.index",
        "create" => "dashboard.bill.create",
        "detail" => "dashboard.bill.detail",
        "edit" => "dashboard.bill.edit",
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $bill = Bill::all();
        $bill = DB::table('bills')->paginate(5);
        return view (BillController::BILL_VIEW['index'], [
            'title' => 'Data Tagihan',
            'bills' => $bill,
            'bills_route' => BillController::BILL_ROUTE,
        ]);
        // return view('bill.index', compact('bill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view (BillController::BILL_VIEW['create'], [
            'title' => 'Tambah Tagihan',
            'bills_route' => BillController::BILL_ROUTE,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBillRequest $request)
    {
        //
        $request->validate([
            'amount' => 'required',
            'due_date' => 'required',
            'status' => 'required',
        ]);

        // Membuat tagihan hanya pada pengguna dengan peran 'user'
        $userRole = Role::where('name', 'user')->first();
        $users = $userRole->users;

        foreach ($users as $user) {
            $billData = [
                'user_id' => $user->id,
                'amount' => $request->input('amount'),
                'due_date' => $request->input('due_date'),
                'status' => $request->input('status'),
            ];

            Bill::create($billData);
        }

        return redirect(route(BillController::BILL_ROUTE['index']))
        ->with('success', 'Tagihan berhasil dibuat untuk pengguna dengan peran \'user\'.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Bill $bill)
    {
        //
        return view (BillContreoller::BILL_VIEW['detail'], [
            'title' => 'Detail Tagihan',
            'bill' => $bill,
            'bills_route' => BillController::BILL_ROUTE,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bill $bill)
    {
        //
        return view (BillController::BILL_VIEW['edit'], [
            'title' => 'Edit Tagihan',
            'bill' => $bill,
            'bills_route' => BillController::BILL_ROUTE,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        //
        $request->validate([
            'amount' => 'required',
            'due_date' => 'required',
            'status' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        //
        $bill->delete();
        return redirect(route(BillController::BILL_ROUTE['index']))->with('success', 'Tagihan berhasil dihapus.');
    }
}
