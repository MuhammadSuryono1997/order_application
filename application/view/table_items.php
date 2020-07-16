<?php
for ($i = 0; $i < 10; $i++) :
    ?>
    <tr>
        <td><?= $i+1; ?></td>
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