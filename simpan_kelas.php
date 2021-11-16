<?php
include 'koneksi.php';

$kelas = $_POST['kelas'];


    $query = "INSERT INTO kelas (kelas) values ('$kelas')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='kelas.php';</script>";
    }
    else
    {
        echo "gagal";
        $query->error;
    }
    ?>