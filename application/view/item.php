<div class="container-fluid mt-4">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col" style="width: 10%;">Name</th>
                <th scope="col" style="width: 70%;">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 10; $i++) :
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>Tissue</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nisi soluta nobis ex cupiditate facilis asperiores nostrum vero. Ducimus amet quidem quisquam ex itaque voluptate ratione iste cumque vero omnis.</td>
                    <td>Rp. 30.000</td>
                    <td class="d-flex justify-content-between row-2">
                        <button class="btn btn-primary mr-2">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php
            endfor;
            ?>
        </tbody>
    </table>
</div>