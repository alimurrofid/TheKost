<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\PaymentLogController;
use App\Models\Dormitory;
use App\Models\PaymentLog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('layout.vertical-navbar');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('dashboard.home');

    // Route::get('/rooms', function () {
    //     return view('dashboard.rooms');
    // })->name('dashboard.rooms');

    // Route::get('/members', function () {
    //     return view('dashboard.members');
    // })->name('dashboard.members');

    // Route::get('/transaction', function () {
    //     return view('dashboard.transaction');
    // })->name('dashboard.transaction');

    Route::get('/users', function () {
        return view('dashboard.users');
    })->name('dashboard.users');
});

Route::prefix('form')->group(function () {
    Route::get('/room', function () {
        return view('form.form-room');
    })->name('form.room');

    Route::get('/member', function () {
        return view('form.form-member');
    })->name('form.member');

    Route::get('/transaction', function () {
        return view('form.form-transaction');
    })->name('form.transaction');

    Route::get('/user', function () {
        return view('form.form-user');
    })->name('form.user');
});


// Route::middleware(['auth','verified'])->group(function () {
//     Route::get('home', function () {
//         return view('dashboard.home');
//     })->name('home')->middleware('can:dashboard');
//     Route::get('edit-profile',function(){
//         return view('dashboard.profile');
//     })->name('profile.edit');
// });


Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.home');
    });
    Route::resource('/dashboard/room', RoomController::class);
    Route::resource('/dashboard/dormitory', DormitoryController::class);
    Route::resource('/dashboard/transactions', PaymentLogController::class)->except([ 'edit', 'update']);
});

Route::get('/dashboard/dormitory/payment/{id}/year/{year}', function ($id, $year) {
    $dataDormitory = Dormitory::where("id", $id)->first();

    $dataPayment = PaymentLog::where("fk_id_dormitory", $id)->get();
    
    $date_start_checkin = getdate(strtotime($dataDormitory->checkin_date));
    
    $months_year_checkin = config("app.month.language.indonesian");
    
    foreach ($months_year_checkin as $monthIndex => $month) {
        if ($month["id"] < $date_start_checkin["mon"]) {
            unset($months_year_checkin[$monthIndex]);
        }
    }

    return view("dashboard.dormitory.ajax.monthpayment", [
        'year_checkin'=> $date_start_checkin["year"],
        'year'=> $year,
        'months_year_checkin' => $months_year_checkin,
        'max_year' => config("app.max_year"),
        'months' => config("app.month.language.indonesian"),
    ]);
})->name("dormitory.ajax.payment");