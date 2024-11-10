<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'amount',
        'description',
        'category',
        'expense_date',
        'payment_method',
    ];

    //automatically format the data; date and decimal
    protected $casts = [
        'expense_date' => 'date',
        'amount' => 'decimal:2',
    ];
}
