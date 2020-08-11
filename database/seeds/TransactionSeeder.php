<?php

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create(
            [
                "amount" => 350, 
                "balance" => 15000, 
                "description" => "Some description",
                "account_id" => 1
            ]
        );
    }
}
