         
    <div id="content-wrapper">
      <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>
      <div class="container-fluid">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Judul</th>
                      <th>Harga</th>
                      <th>Kapasitas</th>
                      <th>Kamar_tidur</th>
                      <th>Kamar_mandi</th>
                      <th>Wifi</th>
                      <th>TV</th>
                      <th>AC</th>
                      <th>Dapur</th>
                      <th>Parkir</th>
                      <th>Host Id</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach( $tabel as $homestay ): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $homestay['id_homestay']; ?></td>
                      <td><?= $homestay['judul']; ?></td>
                      <td><?= $homestay['harga']; ?></td>
                      <td><?= $homestay['kapasitas']; ?></td>
                      <td><?= $homestay['kamar_tidur']; ?></td>
                      <td><?= $homestay['kamar_mandi']; ?></td>
                      <td><?= $homestay['wifi']; ?></td>
                      <td><?= $homestay['tv']; ?></td>
                      <td><?= $homestay['ac']; ?></td>
                      <td><?= $homestay['dapur']; ?></td>
                      <td><?= $homestay['parkir']; ?></td>
                      <td><?= $homestay['id_pemilik']; ?></td>
                      <td><?= $homestay['status']; ?></td>
                      <td>
                        <center>
                          <a href="<?= base_url('admin/deleteHomestay/'). $homestay['id_homestay']; ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                        </center>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
