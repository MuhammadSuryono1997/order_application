<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class M_OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $guarded = ['order_id','item_id'];
    // protected $fillable = ['id', 'customer_id', 'order_date', 'amount', 'user_id'];
    public $timestamps = false;
}
