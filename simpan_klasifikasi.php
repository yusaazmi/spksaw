<?php
include 'koneksi.php';

$jml_kriteria = $_POST['jml_kriteria'];

for($i=1; $i<=$jml_kriteria; $i++){

    $id_hk = $_POST['id_hk'.$i];
    
    $query = "INSERT INTO tbl_klasifikasi (kode_siswa,id_hk) values ('$_POST[kode_siswa]','$id_hk')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='hasil_analisa.php';</script>";
    }
    else
    {
        echo "gagal";
        $query->error;
    }
}
    ?>