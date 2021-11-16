<?php include 'header.php';
$sql1 = "SELECT * FROM siswa,kelas WHERE kelas.id_kelas='$_GET[id]' AND siswa.id_kelas = kelas.id_kelas";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Kelas <?php echo $data['kelas']; ?></h4>
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
                                                <th>Kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM siswa,kelas WHERE kelas.id_kelas='$_GET[id]' AND siswa.id_kelas = kelas.id_kelas";
                                                $query= mysqli_query($dbc,$sql);
                                                $i = 1;
                                                while($siswa = mysqli_fetch_array($query))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i."</td>";
                                                    echo "<td>".$siswa['nis']."</td>";
                                                    echo "<td>".$siswa['nama_lengkap']."</td>";
                                                    echo "<td>".$siswa['kelas']."</td>";
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include 'footer.php';?>