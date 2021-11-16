<?php include 'header.php';
$kelas1 = "SELECT * FROM kelas WHERE id_kelas = '$_GET[id]'";
$query12 = mysqli_query($dbc,$kelas1);
$kelas12 = mysqli_fetch_array($query12);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                <h4 class="page-title">Ranking Kelas <?php echo $kelas12['kelas']; ?></h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                
                                <select class="form-select" style="width: 20%;" aria-label="Default select example" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                    <option value="">Select...</option>
                                    <?php 
                                        $query = mysqli_query($dbc,"SELECT * FROM kelas");
                                        while($x = mysqli_fetch_array($query))
                                        {
                                            echo "<option value='ranking_kelas.php?id=".$x['id_kelas']."'>".$x['kelas']."</option>";
                                        }
                                    ?>
                                </select>
                                    <br>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Total Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tampil_siswa = mysqli_query($dbc,"SELECT * FROM siswa");
                                        $tampil_kriteria = mysqli_query($dbc,"SELECT * FROM tbl_kriteria");
                                        $tampil_klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi,siswa WHERE id_kelas = $_GET[id] GROUP by nama_lengkap");
                                        $i = 1;
                                        while($r = mysqli_fetch_array($tampil_klasifikasi))
                                        {
                                            $h = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from siswa,kelas WHERE kode_siswa ='$r[kode_siswa]' AND siswa.id_kelas = kelas.id_kelas"));
                                            echo "<td>".$i."</td>";
                                            echo "<td>".$h['nis']."</td>";
                                            echo "<td>".$h['nama_lengkap']."</td>";
                                            echo "<td>".$h['kelas']."</td>";
                                            $totalnilai = 0;
                                            $klasifikasi = mysqli_query($dbc,"SELECT * FROM v_analisa WHERE kode_siswa = '$r[kode_siswa]'");
                                            while($n = mysqli_fetch_array($klasifikasi)){
                                                $crmax = mysqli_fetch_array(mysqli_query($dbc,"SELECT max(nilai) as nilaimax FROM v_analisa WHERE id_kriteria = '$n[id_kriteria]'"));
                                                $himpunan_kriteria = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from tbl_himpunankriteria WHERE id_hk = '$n[id_hk]'"));
                                                $bobot = mysqli_fetch_array(mysqli_query($dbc,"SELECT * from tbl_kriteria WHERE id_kriteria = '$n[id_kriteria]'"));
                                                $nilaiok = $himpunan_kriteria['nilai'] / $crmax['nilaimax'];
                                                $rank = $nilaiok * $bobot['bobot'];
                                                $totalnilai = $totalnilai + $rank;  
                                        }           
                                        echo "<td>$totalnilai</td>";
                                        echo "</tr>";
                                        $i++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->


<?php include 'footer.php';?>