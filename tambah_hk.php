<?php include 'header.php';
$sql1 = "SELECT * FROM tbl_kriteria,tbl_himpunankriteria WHERE tbl_kriteria.id_kriteria='$_GET[id]' AND tbl_himpunankriteria.id_kriteria = '$_GET[id]'";
$query = mysqli_query($dbc,$sql1);
$x = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah Data Himpunan Kriteria <?php echo $x['kriteria']; ?></h4>
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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="simpan_hk.php">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Himpunan Kriteria</h4>
                                    <input type="hidden" name="id_kriteria" id="id_kriteria" value="<?php echo $x['id_kriteria']; ?>">
                                    <div class="form-group row">
                                        <label for="nama"
                                            class="col-sm-3 text-end control-label col-form-label">Masukan Data</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Data">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan"
                                            class="col-sm-3 text-end control-label col-form-label">Keterangan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Keterangan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Nilai"
                                            class="col-sm-3 text-end control-label col-form-label">Nilai</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="nilai" name="nilai"
                                                placeholder="Nilai">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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
<?php include 'footer.php';?>