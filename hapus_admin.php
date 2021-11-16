<?php
include 'koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $admin= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM admin WHERE id_admin=$admin";
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='admin.php';</script>";
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>