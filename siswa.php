<?php include 'header.php';?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Siswa</h4>
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
                                <div class="card-title">
                                    <a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a> 
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>ID Kelas</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql= "SELECT * FROM siswa";
                                                $query= mysqli_query($dbc,$sql);
                                                $i = 1;
                                                while($siswa = mysqli_fetch_array($query))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i++."</td>";
                                                    echo "<td>".$siswa['nis']."</td>";
                                                    echo "<td>".$siswa['nama_lengkap']."</td>";
                                                    echo "<td>".$siswa['id_kelas']."</td>";
                                                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                                                    echo "<td>";
                                                    echo "
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='detail_siswa.php?id=".$siswa['kode_siswa']."' aria-expanded='false'>
                                                    <i class='mdi mdi-account-card-details'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='update_siswa.php?id=".$siswa['kode_siswa']."' aria-expanded='false'>
                                                    <i class='mdi mdi-grease-pencil'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='hapus_siswa.php?id=".$siswa['kode_siswa']."'onclick=\"return  confirm('Apakah yakin akan menghapus? Y/N');\" aria-expanded='false'>
                                                    <i class='mdi mdi-delete'></i>
                                                    <span class='hide-menu'></span></a>";
                                                    echo "</tr>";
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