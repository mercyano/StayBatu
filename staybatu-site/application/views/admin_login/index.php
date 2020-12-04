<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row my-3 text-white">
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-info">
                    <i class="fas fa-users d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Pengguna</h5>
                    <h6 class="display-4"><?= $pengguna ?></h6>
                    <a href="<?= base_url('admin/data_user') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-success">
                    <i class="fas fa-hotel d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Homestay</h5>
                    <h6 class="display-4"><?= $homestay ?></h6>
                    <a href="<?= base_url('admin/homestay') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
        </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 