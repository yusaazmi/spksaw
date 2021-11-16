<?php include 'header.php';
$sql1 = "SELECT * FROM tbl_kriteria,tbl_himpunankriteria WHERE tbl_himpunankriteria.id_kriteria = tbl_kriteria.id_kriteria AND tbl_kriteria.id_kriteria = '$_GET[id]'";
$z = $_GET['id'];
$query = mysqli_query($dbc,$sql1);
$x = mysqli_fetch_array($query);
?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Himpunan Kriteria <?php echo $x['kriteria']; ?></h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ambil id kriteria -->
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
                                    <a href="tambah_hk.php?id=<?php echo $x['id_kriteria'];?>" class="btn btn-success">Tambah Data</a> 
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>List</th>
                                                <th>Keterangan</th>
                                                <th>Nilai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql2 = "SELECT * FROM tbl_kriteria,tbl_himpunankriteria WHERE tbl_himpunankriteria.id_kriteria = tbl_kriteria.id_kriteria AND tbl_kriteria.id_kriteria = '$_GET[id]'";
                                        $query2 = mysqli_query($dbc,$sql2);
                                                $i = 1;
                                                while($data = mysqli_fetch_array($query2))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$i++."</td>";
                                                    echo "<td>".$data['nama']."</td>";
                                                    echo "<td>".$data['keterangan']."</td>";
                                                    echo "<td>".$data['nilai']."</td>";
                                                    echo "<td>";
                                                    echo "
                                                    <a class='sidebar-link waves-effect waves-dark sidebar-link' href='update_hk.php?id=".$data['id_hk']."' aria-expanded='false'>
                                                    <i class='mdi mdi-grease-pencil'></i>
                                                    <span class='hide-menu'></span>
                                                    </a>
                                                        <button type='submit' style='border:none; background:none;'>
                                                        <a class='sidebar-link waves-effect waves-dark sidebar-link' href='hapus_hk.php?id=".$data['id_hk']."'onclick=\"return  confirm('Apakah yakin akan menghapus? Y/N');\" aria-expanded='false'>
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