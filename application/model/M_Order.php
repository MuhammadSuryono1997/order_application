<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class M_Order extends Model
{
    protected $table = 'orders';
    protected $guarded = ['id'];
    protected $fillable = ['id', 'customer_id', 'order_date', 'amount', 'user_id'];
    public $timestamps = false;
}
