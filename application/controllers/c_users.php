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
        // echo "test";
    }

    public function get_by_id($data)
    {
        return M_User::find($data);
    }

    public function insert($data)
    {
        // $user = new M_User($data);
        // $user->name = $data->name;
        // $user->email = $data->email;
        // $user-save();
    }

    public function update($object)
    {
        $user = M_User::find($object);
        $user->name = $object->name;
        $user->email = $object->email;
        $user->save();
    }

    public function delete($data)
    {
        $user = M_User::find(1);
        $user->delete();
    }
}