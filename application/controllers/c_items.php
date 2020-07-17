<?php
namespace App\Controllers;
use App\Models\M_Items;
class C_Items
{
    public function get_all()
    {
        return M_Items::all();
    }

    public function insert($object)
    {
        $items = new M_Items();
        $items->description = $object->description;
        $items->name = $object->name;
        $items->price = $object->price;
        $items->save();
        // var_dump($items);

        return $items;

    }

    public function update($object)
    {
        $user = M_Items::find($id);
        $user->name = $object->name;
        $user->email = $object->email;
        return $user->save();
    }

    public function delete($id)
    {
        $data = M_Items::find($id);
        $data->delete();

        return $data;
    }

    public function get_update($id)
    {
        $data = M_Items::find($id);

        return $data;
    }
}


?>