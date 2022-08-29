<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$account_id = $_POST['account_id'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$creator_field = $_POST['creator_field'];
// query SQL untuk insert data
$query="INSERT INTO creators SET account_id='$account_id',username='$username',gender='$gender'
    ,creator_field='$creator_field'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>