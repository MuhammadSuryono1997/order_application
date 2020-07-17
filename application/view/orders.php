<!-- TINGGAL MASUKAN KE TABLE -->

<?php
// session_destroy();
use App\Controllers\C_order;

$c_order = new C_order();

if(isset($_POST['user']))
{
    $_SESSION['create'] = $_POST['user'];
    $id_order = $c_order->insert_customer((object)['user'=>$_POST['user'], 'id_customer' => $_POST['id_customer']]);
    $_SESSION['id_order'] = $id_order;
}

if(isset($_POST['item']))
{
    $_SESSION['item'] = $_POST['item'];
    $id_item = $c_order->update_items((object)['name'=>$_POST['item'], 'amount' => $_POST['qty'], 'id_order' => $_POST['id']]);
    $_SESSION['id_item'] = $id_item;
}

if(!isset($_SESSION['create']))
{
    $disable_order = "disabled";
    $disable_user = "";
}
elseif(isset($_SESSION['create'])){
    $disable_order = "";
    $disable_user = "disabled";
}


// echo $_SESSION['create']."\n";
// echo $_SESSION['id_Order']."\n";
// echo $id_customer;
?>

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card" style="box-shadow: 0 7px 12px #888">
            <div class="card-body">
                <form action="http://localhost/illuminate_php/index.php/orders/".$id_customer method="POST">    
                <div class="row">
                        <input type="hidden" name="id_customer" value="<?=$id_customer?>">
                        <div class="col-md-2">
                            <select name="user" class="form-control" <?=$disable_user?>>
                                <option>Select User</option>
                            <?php
                                foreach($user as $us)
                                {
                                    echo "<option value='$us->id'>$us->name</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-md btn-success btn-flat">Buat Order</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-4">
        <div class="card" style="box-shadow: 0 7px 12px #888">
            <div class="card-body">
                <!-- <div class="row"> -->
                <form action="http://localhost/illuminate_php/index.php/orders/".$id_customer method="POST">    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $_SESSION['id_order'] ?>">
                            <select name="item" class="form-control" id="" <?=$disable_order?>>

                                <option>Pilih Items</option >
                                <?php 
                                    foreach ($data as $item) 
                                    {
                                        echo "<option value='".$item->id."'>".$item->name."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" name="qty" placeholder="Banyak Barang" class="form-control form-control-sm"/ <?=$disable_order?>>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button class="btn btn-sm btn-success btn-flat" <?=$disable_order?>>Add Item</button>
                    </div>
                </form>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card" style="box-shadow: 0 7px 12px #888">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover table-striped">
                            <thead class="table-warning text-center">
                                <th width=5>No</th>
                                <th>Items</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php var_dump($item['name']) ?>
                                <?php $i = 1; foreach($item as $it): ?>
                                <tr class="text-center">
                                    <td><?= $i++; ?></td>
                                    <td><?= $it['name'] ?></td>
                                    <td>2</td>
                                    <td><?= $it['price']; ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-flat btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-flat btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card" style="box-shadow: 0 7px 12px #888">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-sm btn-primary btn-flat">Checkout Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>