<?php
include 'koneksi.php';

$query=("UPDATE tbl_kriteria SET 
kriteria='$_POST[kriteria]',
bobot='$_POST[bobot]'
WHERE id_kriteria='$_POST[id_kriteria]'");
$update = mysqli_query($dbc,$query);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='kriteria.php';</script>";
    }
else
    {
       echo $dbc->error;
    }

?>