<?php
include 'koneksi.php';

$id_kriteria = $_POST['id_kriteria'];
$keterangan = $_POST['keterangan'];
$nilai = $_POST['nilai'];
$nama = $_POST['nama'];

    $query = "INSERT INTO tbl_himpunankriteria (id_kriteria,nama,keterangan,nilai) values ('$id_kriteria','$nama','$keterangan','$nilai')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='himpunan_kriteria.php?id=$id_kriteria';</script>";
    }
    else
    {
        echo "gagal";
        $query->error;
    }
    ?>