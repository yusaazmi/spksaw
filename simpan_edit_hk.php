<?php
include 'koneksi.php';

$query=("UPDATE tbl_himpunankriteria SET 
nilai='$_POST[nilai]',
keterangan='$_POST[keterangan]',
nama='$_POST[nama]'
WHERE id_kriteria='$_POST[id_kriteria]' AND id_hk ='$_POST[id_hk]'");
$update = mysqli_query($dbc,$query);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='himpunan_kriteria.php?id=$_POST[id_kriteria]';</script>";
    }
else
    {
       echo $dbc->error;
    }

?>