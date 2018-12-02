<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->integer('category_id');
            $table->integer('account_id');
            $table->string('description');
            $table->date('date');
            $table->float('amount');
            $table->string('payee');
            $table->string('check_no');
            $table->integer('recur_transaction_info_id');
            $table->string('note');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
