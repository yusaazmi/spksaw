<?php include 'header.php';?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Pembobotan Kriteria</h4>
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
                                    <a href="tambah_kriteria.php" class="btn btn-success">Tambah kriteria</a> 
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kriteria</th>
                                                <th>Bobot</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql= "SELECT * FROM tbl_kriteria";
                                                $query= mysqli_query($dbc,$sql);
                                                $i = 1;
                                                while($kriteria = mysqli_fetch_array($query))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i++."</td>";
                                                    echo "<td>".$kriteria['kriteria']."</td>";
                                                    echo "<td>".$kriteria['bobot']."</td>";
                                                    echo "<td>";
                                                    echo "
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='update_kriteria.php?id=".$kriteria['id_kriteria']."' aria-expanded='false'>
                                                    <i class='mdi mdi-grease-pencil'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='hapus_kriteria.php?id=".$kriteria['id_kriteria']."'onclick=\"return  confirm('Apakah yakin akan menghapus? Y/N');\" aria-expanded='false'>
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