<?php include 'header.php';
$sql1 = "SELECT * FROM siswa,kelas WHERE kode_siswa='$_GET[id]' AND siswa.id_kelas = kelas.id_kelas";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Detail Siswa</h4>
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
                            <div class="card-body">
                                <h4 class="card-title mb-0">Detail Siswa</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="img/<?php echo $data['foto'];?>" alt="user" width="100"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h3 class="font-medium"><?php echo $data['nama_lengkap']; ?></h3>
                                        <dl class="row">
                                            <dt class="col-sm-3">NIS</dt>
                                            <dd class="col-sm-9"><?php echo $data['nis']; ?></dd>
                                            <dt class="col-sm-3">kelas</dt>
                                            <dd class="col-sm-9"><?php echo $data['kelas']; ?></dd>
                                            <dt class="col-sm-3">alamat</dt>
                                            <dd class="col-sm-9"><?php echo $data['alamat']; ?></dd>
                                            <dt class="col-sm-3">tempat_lahir</dt>
                                            <dd class="col-sm-9"><?php echo $data['tempat_lahir']; ?></dd>
                                            <dt class="col-sm-3">tgl_lahir</dt>
                                            <dd class="col-sm-9"><?php echo $data['tgl_lahir']; ?></dd>
                                            <dt class="col-sm-3">jenis_kelamin</dt>
                                            <dd class="col-sm-9"><?php echo $data['jenis_kelamin']; ?></dd>
                                        </dl>
                                        <span class="mb-5 d-block"></span>
                                        <div class="comment-footer">
                                            <!-- <span class="text-muted float-end">April 14, 2021</span> -->
                                            <a href="update_siswa.php?id=<?php echo $data['kode_siswa']; ?>" class="btn btn-cyan btn-sm text-white">Edit</a>
                                            <a href="hapus_siswa.php?id=<?php echo $data['kode_siswa'];?>" class="btn btn-danger btn-sm text-white">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
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
<?php include 'footer.php';?>