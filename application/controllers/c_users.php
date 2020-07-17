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
        // echo "test";
    }

    public function get_by_id($data)
    {
        return M_User::find($data);
    }

    public function insert($data)
    {
<<<<<<< HEAD
        // $user = new M_User($data);
        // $user->name = $data->name;
        // $user->email = $data->email;
        // $user-save();
=======
        $user = new M_User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user-save();

        return $user;
>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
    }

    public function update($object)
    {
<<<<<<< HEAD
        $user = M_User::find($object);
        $user->name = $object->name;
        $user->email = $object->email;
        $user->save();
=======
        $user = M_User::find($id);
        $user->name = $data->name;
        $user->email = $data->email;
        return $user->save();
        // return $user;
>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
    }

    public function delete($data)
    {
<<<<<<< HEAD
        $user = M_User::find(1);
=======
        $user = M_User::find($data);
>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
        $user->delete();
    }
}