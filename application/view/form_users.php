<div class="container">
<div class="row">
    <div class="col-md-6" style="margin-top: 80px;margin-left: auto;margin-right:auto">
        <div class="card" style="box-shadow: 0 7px 12px #888">
        <div class="card-body">
        <form action="http://localhost/illuminate_php/index.php/form-users/action" method="POST">
            <div class="form-group">
                <input name='id' value="<?=$data->id;?>" type='hidden' />
                <label for="email">Nama Items</label>
                <input id="email" type="text" class="form-control" name="name" tabindex="1" required autofocus value="<?=$items_name;?>" />
                <div class="invalid-feedback">
                    Please fill in your email
                </div>
            </div>
            <div class="form-group">
                <label for="email">Harga Items</label>
                <input type="email" class="form-control" name="email" tabindex="1" required autofocus value="<?=$items_email;?>" />
                <div class="invalid-feedback">
                    Please fill in your email
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-md btn-icon btn-block icon-right" tabindex="7">
                    TAMBAHKAN USER BARU
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>