<?php
include 'koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $siswa= $_GET['id'];

    // buat query hapus
    $data = mysqli_query($dbc, "SELECT * from siswa WHERE kode_siswa ='$siswa'");
    $data2 = mysqli_fetch_array($data);
    $id_kelas = $data2['id_kelas'];

    $jml_kelas = mysqli_query($dbc,"SELECT count(id_kelas) as jml from siswa WHERE kode_siswa = '$siswa'");
    $kelas = mysqli_fetch_array($jml_kelas);
    $jumlah = $kelas['jml']-1;

    $update_kelas = "UPDATE kelas SET jumlah_siswa = '$jumlah' WHERE id_kelas = '$id_kelas'";
    $delete_nilai = "DELETE FROM tbl_klasifikasi WHERE kode_siswa ='$siswa'";
    $hapus = mysqli_query($dbc,$delete_nilai);
    $update = mysqli_query($dbc,$update_kelas);
    if($update){
        $sql = "DELETE FROM siswa WHERE kode_siswa='$siswa'";
        $query = mysqli_query($dbc, $sql);
          echo "<script>alert('Berhasil Hapus!');window.location='siswa.php';</script>";
    }
    else{
        echo $dbc->error;
    }
} 

 else {
    die("akses dilarang...");
 }


?>