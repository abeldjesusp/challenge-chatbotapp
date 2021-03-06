<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'balance',
        'balance',
        'description',
        'account_id'
    ];

    public function account() {
        return $this->belongsTo('account');
    }
}
