<?php include 'header.php';?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Klasifikasi</h4>
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql= "SELECT * FROM siswa,kelas WHERE kelas.id_kelas = siswa.id_kelas";
                                                $query= mysqli_query($dbc,$sql);
                                                $i = 1;
                                                while($klasifikasi = mysqli_fetch_array($query))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i."</td>";
                                                    echo "<td>".$klasifikasi['nis']."</td>";
                                                    echo "<td>".$klasifikasi['nama_lengkap']."</td>";
                                                    echo "<td>".$klasifikasi['kelas']."</td>";
                                                    echo "<td>";
                                                    echo "<a class='btn btn-primary btn-sm' href='tambah_klasifikasi.php?id=".$klasifikasi['kode_siswa']."'>Tambah Klasifikasi</a>";
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