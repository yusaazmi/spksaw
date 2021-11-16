<?php
include 'koneksi.php';
// kode siswa
$max = mysqli_query($dbc,"SELECT max(kode_siswa) as maxkode from siswa");
$data = mysqli_fetch_array($max);
$kode_siswa = $data['maxkode'];

$urutan = (int) substr($kode_siswa,3,3);
$urutan++;

$huruf = "SIS";
$kode_siswa = $huruf . sprintf("%03s",$urutan);


$nis = $_POST['nis'];
$nama_lengkap = $_POST['nama_lengkap'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'img/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "INSERT INTO siswa (kode_siswa,nis,nama_lengkap,id_kelas,alamat,tempat_lahir,tgl_lahir,jenis_kelamin,foto) values ('$kode_siswa','$nis','$nama_lengkap','$id_kelas','$alamat','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$gambar')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        $jml_kelas = mysqli_query($dbc,"SELECT count(id_kelas) as jml from siswa WHERE id_kelas = '$id_kelas'");
        $kelas = mysqli_fetch_array($jml_kelas);
        $jumlah = $kelas['jml'];
        
        $update_kelas = "UPDATE kelas SET jumlah_siswa = '$jumlah' WHERE id_kelas = '$id_kelas'";
        $update = mysqli_query($dbc,$update_kelas);
        if($update){
            echo "<script>alert('Berhasil Menambahkan!');window.location='siswa.php';</script>";
        }
        else{
            echo $dbc->error;
        }
    }
    else
    {
        echo "gagal";
    }
}
else{
    //  echo "<script>alert('Gagal Menambahkan!');window.location='';</script>";
    $query->error;
}
    ?>