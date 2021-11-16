<?php include 'header.php';?>
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
                <h4 class="page-title">Matrik Awal</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                        <?php
                                        $tampil_siswa = mysqli_query($dbc,"SELECT * FROM siswa");
                                        $tampil_kriteria = mysqli_query($dbc,"SELECT * FROM tbl_kriteria");
                                        $tampil_klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi GROUP by kode_siswa");
                                        $i = 1;
                                        while($f = mysqli_fetch_array($tampil_kriteria))
                                        {
                                            echo "<th>C$i</th>";
                                            $i++;
                                        }           
                                        echo "</tr>";
                                        echo "</thead>";
                                        ?>             
                                        <tbody>
                                        <?php
                                        $a = 1;
                                        while($r = mysqli_fetch_array($tampil_klasifikasi)){
                                        $h = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM siswa WHERE kode_siswa = '$r[kode_siswa]'"));
                                        echo "<tr>";
                                            echo "<td>".$a."</td>";
                                            echo "<td>".$h['nis']."</td>";
                                            echo "<td>".$h['nama_lengkap']."</td>";
                                            $klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi WHERE kode_siswa = '$r[kode_siswa]'");
                                            while($n = mysqli_fetch_array($klasifikasi)){
                                                $himpunan_kriteria = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from tbl_himpunankriteria WHERE id_hk = '$n[id_hk]'"));
                                                echo "<td>$himpunan_kriteria[nama]</td>";
                                            }
                                            echo "</tr>";
                                            $a++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                <div class="row">
                <h4 class="page-title">Matrik Awal</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                        <?php
                                        $tampil_siswa = mysqli_query($dbc,"SELECT * FROM siswa");
                                        $tampil_kriteria = mysqli_query($dbc,"SELECT * FROM tbl_kriteria");
                                        $tampil_klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi GROUP by kode_siswa");
                                        $i = 1;
                                        while($f = mysqli_fetch_array($tampil_kriteria))
                                        {
                                            echo "<th>C$i</th>";
                                            $i++;
                                        }           
                                        echo "</tr>";
                                        echo "</thead>";
                                        ?>             
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        while($r = mysqli_fetch_array($tampil_klasifikasi)){
                                        $h = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM siswa WHERE kode_siswa = '$r[kode_siswa]'"));
                                        echo "<tr>";
                                            echo "<td>".$no."</td>";
                                            echo "<td>".$h['nis']."</td>";
                                            echo "<td>".$h['nama_lengkap']."</td>";

                                            $klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi WHERE kode_siswa = '$r[kode_siswa]'");
                                            while($n = mysqli_fetch_array($klasifikasi)){
                                                $himpunan_kriteria = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from tbl_himpunankriteria WHERE id_hk = '$n[id_hk]'"));
                                                echo "<td>$himpunan_kriteria[nilai]</td>";
                                            }
                                            echo "</tr>";
                                            $no++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <h4 class="page-title">Normalisasi</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                        <?php
                                        $tampil_siswa = mysqli_query($dbc,"SELECT * FROM siswa");
                                        $tampil_kriteria = mysqli_query($dbc,"SELECT * FROM tbl_kriteria");
                                        $tampil_klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi GROUP by kode_siswa");
                                        $i = 1;
                                        while($f = mysqli_fetch_array($tampil_kriteria))
                                        {
                                            echo "<th>C$i</th>";
                                            $i++;
                                        }           
                                        echo "</tr>";
                                        echo "</thead>";
                                        ?>             
                                        <tbody>
                                        <?php
                                        $a = 1;
                                        while($r = mysqli_fetch_array($tampil_klasifikasi)){
                                        $h = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM siswa WHERE kode_siswa = '$r[kode_siswa]'"));
                                        echo "<tr>";
                                            echo "<td>".$a."</td>";
                                            echo "<td>".$h['nis']."</td>";
                                            echo "<td>".$h['nama_lengkap']."</td>";

                                            $klasifikasi = mysqli_query($dbc,"SELECT * FROM v_analisa WHERE kode_siswa = '$r[kode_siswa]'");
                                            while($n = mysqli_fetch_array($klasifikasi)){
                                                $crmax = mysqli_fetch_array(mysqli_query($dbc,"SELECT max(nilai) as nilaimax FROM v_analisa WHERE id_kriteria = '$n[id_kriteria]'"));
                                                $himpunan_kriteria = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from tbl_himpunankriteria WHERE id_hk = '$n[id_hk]'"));
                                                $nilaiok = $himpunan_kriteria['nilai'] / $crmax['nilaimax'];
                                                echo "<td>$nilaiok</td>";
                                            }
                                            echo "</tr>";
                                            $a++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <h4 class="page-title">Ranking</h4>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Total Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tampil_siswa = mysqli_query($dbc,"SELECT * FROM siswa");
                                        $tampil_kriteria = mysqli_query($dbc,"SELECT * FROM tbl_kriteria");
                                        $tampil_klasifikasi = mysqli_query($dbc,"SELECT * FROM tbl_klasifikasi GROUP by kode_siswa");
                                        $i = 1;
                                        while($r = mysqli_fetch_array($tampil_klasifikasi))
                                        {
                                            $h = mysqli_fetch_array(mysqli_query($dbc, "SELECT * from siswa WHERE kode_siswa ='$r[kode_siswa]'"));
                                            echo "<td>".$i."</td>";
                                            echo "<td>".$h['nis']."</td>";
                                            echo "<td>".$h['nama_lengkap']."</td>";
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