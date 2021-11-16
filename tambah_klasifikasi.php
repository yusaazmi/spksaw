<?php include 'header.php';
$sql1 = "SELECT * FROM siswa WHERE siswa.kode_siswa = '$_GET[id]'";
$query = mysqli_query($dbc,$sql1);
$data = mysqli_fetch_array($query);
?>
<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah Klasifikasi Siswa</h4>
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
                                <h4 class="card-title mb-0">Form Klasifikasi</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="img/<?php echo $data['foto'];?>" alt="user" width="100"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h3 class="font-medium"><?php echo $data['nama_lengkap']; ?></h3>
                                        <form class="form-horizontal" method="POST" action="simpan_klasifikasi.php">
                                        <input type="hidden" value="<?php echo $data['kode_siswa'];?>" name="kode_siswa">
                                        <?php 
                                        $sql2 = "SELECT * FROM tbl_kriteria";
                                        $query2 = mysqli_query($dbc,$sql2);
                                        $i = 1;
                                        while($x = mysqli_fetch_array($query2)){
                                            $sql3 = "SELECT * FROM tbl_himpunankriteria WHERE id_kriteria = '$x[id_kriteria]'";
                                            $form = mysqli_query($dbc,$sql3);
                                        ?>
                                        <div class="form-group row">
                                        <label for="" class="col-sm-3 text-end control-label col-form-label"><?php echo $x['kriteria']; ?></label>
                                        <div class="col-md-9">
                                            <select name="id_hk<?php echo $i;?>" id="" class="btn btn-secondary dropdown-toggle" style="width: 100%; height:36px;" require>                                           
                                            <?php 
                                            while($c = mysqli_fetch_array($form)){
                                                echo "<option value='$c[id_hk]'>".$c['nama']."</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                        <?php 
                                    $i++;
                                    } 
                                    $jml_kriteria = mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM tbl_kriteria"));
                                    ?>
                                    <div class="border-top">
                                        <div class="card-body">
                                        <input type="hidden" value="<?php echo $jml_kriteria; ?>" name="jml_kriteria">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    </form>
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