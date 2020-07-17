<?php

namespace App\Controllers;

use App\Models\M_Order;
use App\Models\M_items;
use App\Models\M_OrderDetail;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Response;

class C_order
{
    public function __construct()
    {
        $this->order = new M_Order();
        $this->detail = new M_OrderDetail();
    }

    public function get_order_detail()
    {

        return $this->detail->find();
    }

    public function insert_customer($data)
    {
        $order = new M_Order();
        $order->user_id = $data->user;
        $order->customer_id = $data->id_customer;
        $order->save();
        $idInsert = $order->id;
        return $idInsert;
    }

    // public function get_by_id($data)
    // {
    //     return M_User::find($data);
    // }

    // public function insert_items($data)
    // {
    //     $order = new M_Order();
    //     $order->amount = $order->qty;
    //     $order->save();
    //     $this->get_by_id($idUser);
    //     return $order;
    // }

    public function update_items($data) {
        $order = M_Order::find($data->id_order);
        $order->amount = $data->amount;
        $this->detail->order_id = $data->id_order;
        $this->detail->item_id = $data->name;
        $order->save();
        return $order;
    }

    // public function update($object)
    // {
    //     $user = M_User::find($object->id);
    //     $user->name = $object->name;
    //     $user->email = $object->email;
    //     $user->save();
    //     return $user;
    // }

    // public function delete($id)
    // {
    //     $user = M_User::find($id);
    //     $user->delete();

    //     return $user;
    // }
}
