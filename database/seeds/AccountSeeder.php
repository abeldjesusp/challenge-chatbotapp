<?php

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create(
            [
                "account_name" => "Savings", 
                "account_number" => "23659874985632100", 
                "balance" => 700,
                "opening_balance" => 1000,
                "type" => "Bank",
                "currency" => "USD",
                "user_id" => 1
            ]
        );

        Account::create(
            [
                "account_name" => "Checking", 
                "account_number" => "0369874589654123", 
                "balance" => 570,
                "opening_balance" => 2000,
                "type" => "Bank",
                "currency" => "USD",
                "user_id" => 1
            ]
        );

        Account::create(
            [
                "account_name" => "Savings", 
                "account_number" => "7896321005897456", 
                "balance" => 20000,
                "opening_balance" => 10000,
                "type" => "Bank",
                "currency" => "DOP",
                "user_id" => 2
            ]
        );
    }
}
