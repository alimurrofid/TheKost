<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
//use Database\Seeders\Bill
use App\Models\Bill;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Bill::create ([
            'user_id' => 1,
            'amount' => 100000,
            'due_date' => '2021-08-01',
            'status' => 'unpaid',
        ]);
    }
}
