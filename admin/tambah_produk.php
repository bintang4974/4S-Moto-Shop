<?php include "header_admin.php" ?>

<div class="container my-5">
    <h3 class="mb-3">Form Tambah Produk</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="product_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Harga Produk</label>
            <input type="number" name="product_price" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar Produk</label>
            <input type="text" name="product_image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </form>
</div>

<?php include "footer_admin.php" ?>