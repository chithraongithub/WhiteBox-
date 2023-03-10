<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';

    public function order()
    {
        return $this->belongsTo(Order::class,'orderNumber','orderNumber');
    }
}
