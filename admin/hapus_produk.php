<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "SELECT * FROM product WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM product WHERE id='$id'";
$sql2 = mysqli_query($koneksi, $query2);

if ($sql2) {
    header("location: produk.php");
} else {
    echo "gagal delete";
}
