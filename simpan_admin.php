<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);



    $query = "INSERT INTO admin (username,password) values ('$username','$password')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='admin.php';</script>";
    }
    else
    {
        echo "gagal";
        $query->error;
    }
    ?>