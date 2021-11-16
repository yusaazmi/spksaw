<?php include 'header.php';
$sql1 = "SELECT * FROM siswa,kelas WHERE kode_siswa='$_GET[id]'";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Data Siswa</h4>
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
                            <form class="form-horizontal" method="POST" action="simpan_edit_siswa.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Siswa <?php echo $data['nis']; ?></h4>
                                    <div class="form-group row">
                                    <input type="hidden" name="kode_siswa" id="kode_siswa" value="<?php echo $data['kode_siswa'];?>">
                                        <label for="nis"
                                            class="col-sm-3 text-end control-label col-form-label">NIS</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nis" name="nis"
                                                placeholder="Nomor Induk Siswa" value="<?php echo $data['nis']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_lengkap"
                                            class="col-sm-3 text-end control-label col-form-label">Nama lengkap</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                                placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-3 text-end control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-md-6">
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="btn btn-secondary dropdown-toggle" style="width: 100%; height:36px;" require>                                           
                                            <option type="button" class="btn btn-secondary btn-sm" value="">Pilihan</option>
                                                    <option value="l">Laki-laki</option>
                                                    <option value="p">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_kelas" class="col-sm-3 text-end control-label col-form-label">Kelas</label>                                   
                                        <div class="col-md-6">
                                            <select name="id_kelas" id="id_kelas" class="btn btn-secondary dropdown-toggle" style="width: 100%; height:36px;" require>                                           
                                            <option type="button" class="btn btn-secondary btn-sm" value="">Pilihan</option>
                                            <?php 
                                            $sql = "SELECT * from kelas";
                                            $query = mysqli_query($dbc,$sql);
                                            while($kelas = mysqli_fetch_array($query)){
                                                echo "<option value='$kelas[id_kelas]'>".$kelas['kelas']."</option>"; 
                                            }
                                                ?>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat"
                                            class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                placeholder="Alamat" value="<?php echo $data['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir"
                                            class="col-sm-3 text-end control-label col-form-label">Tempat lahir</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                                placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_lahir"
                                            class="col-sm-3 text-end control-label col-form-label">Tanggal lahir</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                                placeholder="" value="<?php echo $data['tgl_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto"
                                            class="col-sm-3 text-end control-label col-form-label">Foto</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                placeholder="">
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