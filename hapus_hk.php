<?php
include 'koneksi.php';

if( isset($_GET['id']) ){

    // ambil id dari query string
    $hk= $_GET['id'];
    // buat query hapus
    $sql = "SELECT * from tbl_himpunankriteria,tbl_kriteria WHERE tbl_himpunankriteria.id_hk = $hk";
    $query = mysqli_query($dbc, $sql);
    $ambil = mysqli_fetch_array($query);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Menghapus!');window.location='himpunan_kriteria.php?id=$ambil[id_kriteria]';</script>";
       
        $sql1 = "DELETE FROM tbl_himpunankriteria WHERE id_hk = $hk";
        $q1 = mysqli_query($dbc, $sql1);
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>