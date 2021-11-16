<?php
include 'koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $kelas= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM kelas WHERE id_kelas=$kelas";
    $update = mysqli_query($dbc,"UPDATE siswa SET id_kelas = NULL WHERE id_kelas = '$kelas'");
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='kelas.php';</script>";
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>