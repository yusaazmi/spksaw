<?php include 'header.php';
$sql1 = "SELECT * FROM tbl_kriteria,tbl_himpunankriteria WHERE tbl_himpunankriteria.id_hk = '$_GET[id]' AND tbl_himpunankriteria.id_kriteria = tbl_kriteria.id_kriteria";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Data Himpunan Kriteria <?php $data['kriteria']; ?></h4>
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
                            <form class="form-horizontal" method="POST" action="simpan_edit_hk.php">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Himpunan Kriteria</h4>
                                    <div class="form-group row">
                                        <label for="nama"
                                            class="col-sm-3 text-end control-label col-form-label">Masukan Data</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="nama" value="<?php echo $data['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <input type="hidden" name="id_kriteria" id="id_kriteria" value="<?php echo $data['id_kriteria'];?>">
                                        <label for="keterangan"
                                            class="col-sm-3 text-end control-label col-form-label">Keterangan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Nomor Induk Siswa" value="<?php echo $data['keterangan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <input type="hidden" class="form-control" id="id_hk" name="id_hk"
                                                placeholder="id_hk" value="<?php echo $data['id_hk']; ?>">
                                        <label for="nilai"
                                            class="col-sm-3 text-end control-label col-form-label">Nilai</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nilai" name="nilai"
                                                placeholder="nilai" value="<?php echo $data['nilai']; ?>">
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