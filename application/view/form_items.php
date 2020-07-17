<div class="container">
<div class="row">
    <div class="col-md-6" style="margin-top: 80px;margin-left: auto;margin-right:auto">
        <div class="card" style="box-shadow: 0 7px 12px #888">
        <div class="card-body">
        <form action="http://localhost/illuminate_php/index.php/form-items/action" method="POST">
            <div class="form-group">
                <input name='id' value="<?=$data->id;?>" type='hidden' />
                <label for="email">Nama Items</label>
                <input id="email" type="text" class="form-control" name="name" tabindex="1" required autofocus value="<?=$items_name;?>" />
                <div class="invalid-feedback">
                    Please fill in your email
                </div>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Deskripsi Items</label>
                </div>
                <textarea id="password" class="form-control" name="deskripsi" tabindex="2" required><?=$items_description;?></textarea>
                <div class="invalid-feedback">
                    please fill in your password
                </div>
            </div>
            <div class="form-group">
                <label for="harga">Harga Items</label>
                <input type="text" id="harga" class="form-control" name="price" tabindex="1" required autofocus value="<?=$items_price;?>" />
                <div class="invalid-feedback">
                    Please fill in your email
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-md btn-icon btn-block icon-right" tabindex="7">
                    TAMBAHKAN ITEM BARU
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>