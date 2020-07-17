<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class M_User extends Model
{
    protected $table = 'T_users';
    protected $guarded = ["id","name","email"];
    // protected $timestamp = true;
}