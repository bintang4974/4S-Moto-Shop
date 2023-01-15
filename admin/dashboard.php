<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <div class="container my-5">
        <h3>Data Pembayaran</h3>
        <table class="table table-striped table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Item Price</th>
                    <th>Status Transaksi</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                error_reporting(0);
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id ASC");
                while ($data = mysqli_fetch_array($query)) {
                    $status = $data['status_transaksi'];
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['biaya'] . "</td>";
                    if ($status >= 3) {
                        echo "<td><b>Pembayaran Sukses</b></td>";
                    } else if ($status >= 2) {
                        echo "<td><b>Pembayaran Pending</b></td>";
                    } else {
                        echo "<td><b>Pembayaran Belum Dilakukan</b></td>";
                    }
                    echo "<td><a href='hapus.php?id=" . $data['id'] . "' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i> Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>