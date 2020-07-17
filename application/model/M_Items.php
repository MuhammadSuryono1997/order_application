<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class M_Items extends Model
{
    protected $table = 't_items';
    protected $guarded = ["id"];
    protected $fillable = ["id", "name", "description", "price"];
    public $timestamps = false;
}
