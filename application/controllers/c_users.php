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
        $idUser = $user->id;
        $user->save();
        $this->get_by_id($idUser);
        return $user;
    }

    public function update($object)
    {
        $user = M_User::find($object->id);
        $user->name = $object->name;
        $user->email = $object->email;
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        $user = M_User::find($id);
        $user->delete();

        return $user;
    }
}
