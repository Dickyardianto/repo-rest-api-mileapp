<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Transaction extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'transaction';

    protected $fillable = [
        'transaction_id', 
        'customer_name', 
        'customer_code', 
        'transaction_amount', 
        'transaction_discount' , 
        'transaction_additional_field',
        'transaction_payment_type',
        'transaction_state',
        'transaction_code',
        'transaction_order',
        'location_id',
        'organization_id',
        'transaction_payment_type_name',
        'transaction_cash_amount',
        'transaction_cash_change'
    ];
}
