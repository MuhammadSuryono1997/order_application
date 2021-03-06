<?php
use App\Controllers\C_Items;

?>
<div class="row mt-5" style="margin-bottom: 20px;">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 d-flex justify-content">
                    <a href="dashboard" class="btn btn-flat btn-secondary btn-md button-add" style="margin-right: 5px">Kembali</a>
                <!-- </divdashbo>
                <div class="col-md-4"> -->
                    <a href="form-items" class="btn btn-flat btn-success btn-md button-add">Add New Item</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="card" style="box-shadow: 0 7px 12px #888">
            <div class="card-body p-0">
                <table class="table table-hover table-info table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" style="width: 10%;">Name</th>
                            <th scope="col" style="width: 70%;">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-items">
                        <?php
                        $data = C_Items::get_all();
                        $no = 1;
                        foreach($data as $item)
                        {
                        ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$item->name?></td>
                            <td class="text-center"><?=$item->description?></td>
                            <td>Rp. <?=$item->price?></td>
                            <td class="d-flex justify-content-between row-2">
                                <a href="http://localhost/illuminate_php/index.php/form-items/<?=$item->id?>" class="btn btn-flat btn-primary mr-2">Edit</a>
                                <a href="http://localhost/illuminate_php/index.php/items/delete/<?=$item->id?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table-items').load("http://localhost/illuminate_php/application/view/table_items.php");
    })
</script>