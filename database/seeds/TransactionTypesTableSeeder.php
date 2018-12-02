<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_types')->insert([
            'name' => 'Income',
            'created_at' => Carbon::now(),
        ]);
        DB::table('transaction_types')->insert([
            'name' => 'Expense',
            'created_at' => Carbon::now(),
        ]);
    }
}
