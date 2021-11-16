<?php
include 'koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $kriteria= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tbl_kriteria WHERE id_kriteria=$kriteria";
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='kriteria.php';</script>";
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>