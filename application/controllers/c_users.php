<?php

namespace App\Controllers;
use App\Models\M_User;
use Illuminate\Support\Facades\Response;

class C_users
{
    public function __construct()
    {
        $this->users = new M_User();
    }

    public function get_all()
    {
        // return Response::json(M_User::all());
        return M_User::all();
    }

    public function get_by_id($data)
    {
        return M_User::find($data);
    }

    public function insert($data)
    {

    }

    public function update($data)
    {

    }

    public function delete($data)
    {

    }
}