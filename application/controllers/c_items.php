<?php
namespace App\Controllers;
use App\Models\M_Items;
<<<<<<< HEAD
=======

>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
class C_Items
{
    public function get_all()
    {
        return M_Items::all();
    }
<<<<<<< HEAD
    public function insert($data)
    {
        $items = new M_Items();
        $items->description = $data->description;
        $items->name = $data->name;
        $items->price = $data->price;
        // $items->save();
        var_dump($items);
        return $items;
    }
    public function update($data)
    {
    }
=======

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

    public function update($data)
    {

    }

>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
    public function delete($id)
    {
        $data = M_Items::find($id);
        $data->delete();
<<<<<<< HEAD
        return $data;
    }
    public function get_update($id)
    {
        $data = M_Items::find($id);
        return $data;
    }
}
=======

        return $data;
    }

    public function get_update($id)
    {
        $data = M_Items::find($id);

        return $data;
    }
}


>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
?>