<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_name', 45);
            $table->string('account_number', 25);
            $table->decimal('balance', 18, 2);
            $table->decimal('opening_balance', 18, 2);
            $table->enum('type', ['Bank', 'Cash', 'CrytoCurrencies', 'Credit Card', 'Loans']);
            $table->char('currency');
            $table->foreignId('user_id');
            $table->timestamps();

            // FK
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
