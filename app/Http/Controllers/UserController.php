<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public const USER_ROUTE = [
        "index" => "user.index",
        "store" => "user.store",
        "create" => "user.create",
        "show" => "user.show",
        "edit" => "user.edit",
        "update" => "user.update",
        "delete" => "user.destroy",
    ];

    public const USER_VIEW = [
        "index" => "dashboard.user.index",
        "create" => "dashboard.user.create",
        "detail" => "dashboard.user.detail",
        "edit" => "dashboard.user.edit",
    ];


    public function index(Request $request)
    {
        if (Gate::denies('index-user')) {
            abort(403, 'You do not have permission to access this page');
        }

        $users = DB::table('users')
        ->when($request->input('search'), function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
        })
        ->paginate(5);
        return view('dashboard.user.index', compact('users'));
        // return view('users.index', compact('users'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
