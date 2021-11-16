<?php include 'header.php';
$sql1 = "SELECT * FROM tbl_kriteria WHERE id_kriteria='$_GET[id]'";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Data Kriteria</h4>
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
                            <form class="form-horizontal" method="POST" action="simpan_edit_kriteria.php">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Kriteria</h4>
                                    <div class="form-group row">
                                    <input type="hidden" name="id_kriteria" id="id_kriteria" value="<?php echo $data['id_kriteria'];?>">
                                        <label for="kriteria"
                                            class="col-sm-3 text-end control-label col-form-label">Kriteria</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kriteria" name="kriteria"
                                                placeholder="Nomor Induk Siswa" value="<?php echo $data['kriteria']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bobot"
                                            class="col-sm-3 text-end control-label col-form-label">Bobot</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bobot" name="bobot"
                                                placeholder="Bobot" value="<?php echo $data['bobot']; ?>">
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