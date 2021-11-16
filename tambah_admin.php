<?php include 'header.php';?>

<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah Data Admin</h4>
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
                            <form class="form-horizontal" method="POST" action="simpan_admin.php">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Admin</h4>
                                    <div class="form-group row">
                                        <label for="username"
                                            class="col-sm-3 text-end control-label col-form-label">Username</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
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