<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class M_User extends Model
{
    protected $table = 'users';
    protected $guarded = ['id'];
    protected $fillable = ['id', 'name', 'email'];
    public $timestamps = false;
}
