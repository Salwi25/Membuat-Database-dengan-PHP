<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$account_id = $_GET['account_id'];
// query SQL untuk insert data
$query="DELETE from creators where account_id='$account_id'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>