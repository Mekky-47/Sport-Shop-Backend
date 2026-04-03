<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Fields that can be mass-assigned
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'total_price',
    ];
}
