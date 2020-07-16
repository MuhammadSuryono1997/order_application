<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class M_Items extends Model
{
    protected $table = 'T_items';
    protected $guarded = ["id","name","description","price"];
    protected $timestamp = true;
}