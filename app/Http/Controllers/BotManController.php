<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

use Auth;
use App\Apis\Currency;
use App\Models\Account;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message) {
            if($message == '1') {
                $this->askFromCurrency($botman);
            } else if($message == '2'){
                $this->convertCurrency($botman);
            } else {
                $botman->reply("Sorry! Invalid option...");
            }
        });
        $botman->listen();
    }

    public function askFromCurrency($botman)
    {
        $currency = Account::where('user_id', Auth::user()->id)->first()->currency;
        $botman->ask('<b>... convert from?</b><br/><br/>Your default currency ('.$currency.') or write a new currency', function(Answer $answer) {
            $this->say($answer->getText());
            $this->askToCurrency($botman);
        });
    }

    public function askToCurrency($botman)
    {
        $botman->reply("Sorry! Invalid option...");
    }

    public function askAmount($botman)
    {
        $botman->ask('Hello! How can I help you?', function(Answer $answer) {
            $name = $answer->getText();
            $this->say('Nice to meet you '.$name);
        });
    }

    public function convertCurrency($botman)
    {
        $currency = new Currency();
        $data = $currency->convertFromTo('USD', 'DOP', '1');

        if($data->error == 0) {
            $botman->reply($data->amount);
        } else {
            $botman->reply($data->error_message);
        }        
    }

    public function makeTransaction($botman) {

    }
}
