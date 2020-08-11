<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Apis\Currency;
use App\Models\Account;

class CurrencyController extends Controller
{
    public function index() {
        $currency = Account::where('user_id', Auth::user()->id)->first()->currency;
        return view('currency.index', compact('currency'));
    }

    public function convert(Request $request)
    {
        $currency = new Currency();
        $data = $currency->convertFromTo($request->fromCurrency, $request->toCurrency, $request->amount);

        if($data->error == 0) {
            $value = $data->amount;
            return back()->with(compact('value'));
        } else {
            $error_message = $data->error_message;
            return back()->with(compact('error_message'));
        }
    }
}
