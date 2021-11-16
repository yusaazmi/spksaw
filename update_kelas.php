<?php include 'header.php';
$sql1 = "SELECT * FROM kelas WHERE id_kelas='$_GET[id]'";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Update Data Kelas</h4>
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
                            <form class="form-horizontal" method="POST" action="simpan_edit_kelas.php">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Kelas <?php echo $data['kelas']; ?></h4>
                                    <div class="form-group row">
                                    <input type="hidden" name="id_kelas" id="id_kelas" value="<?php echo $data['id_kelas'];?>">
                                        <label for="kelas"
                                            class="col-sm-3 text-end control-label col-form-label">Nama Kelas</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="kelas" name="kelas"
                                                placeholder="Nomor Induk Siswa" value="<?php echo $data['kelas']; ?>">
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