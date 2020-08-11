<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Transaction;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_name',
        'account_number',
        'balance',
        'opening_balance',
        'type',
        'currency',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function transactions()
    {
        return $this->hasMany('Transaction');
    }
}
