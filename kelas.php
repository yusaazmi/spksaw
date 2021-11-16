<?php include 'header.php';?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Kelas</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
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
                                    <a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a> 
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kelas</th>
                                                <th>Jumlah Siswa</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql= "SELECT * FROM kelas";
                                                $query= mysqli_query($dbc,$sql);
                                                $i = 1;
                                                while($kelas = mysqli_fetch_array($query))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i++."</td>";
                                                    echo "<td>".$kelas['kelas']."</td>";
                                                    echo "<td>".$kelas['jumlah_siswa']."</td>";
                                                    echo "<td>";
                                                    echo "
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='detail_kelas.php?id=".$kelas['id_kelas']."' aria-expanded='false'>
                                                    <i class='mdi mdi-account-card-details'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='update_kelas.php?id=".$kelas['id_kelas']."' aria-expanded='false'>
                                                    <i class='mdi mdi-grease-pencil'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='hapus_kelas.php?id=".$kelas['id_kelas']."'onclick=\"return  confirm('Apakah yakin akan menghapus? Y/N');\" aria-expanded='false'>
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