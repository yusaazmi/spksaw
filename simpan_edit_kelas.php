<?php
include 'koneksi.php';

$jumlah = mysqli_fetch_array(mysqli_query($dbc,"SELECT count(kode_siswa) as jml from siswa WHERE id_kelas = '$_POST[id_kelas]'"));
$query=("UPDATE kelas SET 
kelas='$_POST[kelas]',
jumlah_siswa = '$jumlah[jml]' WHERE id_kelas='$_POST[id_kelas]'");
$update = mysqli_query($dbc,$query);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='kelas.php';</script>";
}
else
    {
       echo $dbc->error;
    }

?>