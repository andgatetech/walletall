<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->insert([
            'name' => 'Checking Accounts',
            'created_at' => Carbon::now(),
        ]);
        DB::table('account_types')->insert([
            'name' => 'Savings Accounts',
            'created_at' => Carbon::now(),
        ]);
        DB::table('account_types')->insert([
            'name' => 'Credit Cards',
            'created_at' => Carbon::now(),
        ]);
        DB::table('account_types')->insert([
            'name' => 'Assets',
            'created_at' => Carbon::now(),
        ]);
        DB::table('account_types')->insert([
            'name' => 'Liabilities',
            'created_at' => Carbon::now(),
        ]);
        DB::table('account_types')->insert([
            'name' => 'Petty Cash',
            'created_at' => Carbon::now(),
        ]);
    }
}
