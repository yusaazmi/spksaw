<?php include 'header.php';?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Kriteria</h4>
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
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kriteria</th>
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
                                                    echo "<td>";
                                                    echo "<a class='btn btn-primary btn-sm' href='himpunan_kriteria.php?id=".$kriteria['id_kriteria']."'>Input Data Kriteria</a>";
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