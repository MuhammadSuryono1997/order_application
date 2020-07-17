<?php

namespace App\Controllers;
use App\Models\M_User;
// use Illuminate\Support\Facades\Response;

class C_users
{
    public function __construct()
    {
        $this->users = new M_User();
    }

    public function get_all()
    {
        return M_User::all();
    }

    public function get_by_id($data)
    {
        return M_User::find($data);
    }

    public function insert($data)
    {
        $user = new M_User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user-save();

        return $user;
    }

    public function update($data)
    {
        $user = M_User::find($id);
        $user->name = $data->name;
        $user->email = $data->email;
        return $user->save();
        // return $user;
    }

    public function delete($data)
    {
        $user = M_User::find($data);
        $user->delete();
    }
}