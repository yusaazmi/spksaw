<?php
include 'koneksi.php';
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'img/'.$gambar;

$query=("UPDATE siswa SET 
nis='$_POST[nis]',
nama_lengkap='$_POST[nama_lengkap]',
id_kelas='$_POST[id_kelas]',
alamat='$_POST[alamat]',
tempat_lahir='$_POST[tempat_lahir]',
tgl_lahir='$_POST[tgl_lahir]',
jenis_kelamin='$_POST[jenis_kelamin]',
foto= '$gambar'   
WHERE kode_siswa='$_POST[kode_siswa]'");
if(move_uploaded_file($tmp , $path)){
$update = mysqli_query($dbc,$query);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='siswa.php';</script>";
    }
else
    {
       echo $dbc->error;
    }
}
?>