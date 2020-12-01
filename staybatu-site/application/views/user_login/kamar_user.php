         
    <div id="content-wrapper">
      <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>
      <div class="container-fluid">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tabel Homestay yang dimiliki</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Harga</th>
                      <th>Kapasitas</th>
                      <th>Kamar tidur</th>
                      <th>Kamar mandi</th>
                      <th>Wifi</th>
                      <th>TV</th>
                      <th>AC</th>
                      <th>Dapur</th>
                      <th>Parkir</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;  
                    foreach($tabel as $ku): ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $ku['judul'] ?></td>
                      <td><?= $ku['harga'] ?></td>
                      <td><?= $ku['kapasitas'] ?></td>
                      <td><?= $ku['kamar_tidur'] ?></td>
                      <td><?= $ku['kamar_mandi'] ?></td>
                      <td><?= $ku['wifi'] ?></td>
                      <td><?= $ku['tv'] ?></td>
                      <td><?= $ku['ac'] ?></td>
                      <td><?= $ku['dapur'] ?></td>
                      <td><?= $ku['parkir'] ?></td>
                      <td>
                        <center>
                          <a href="<?php echo base_url() ?>host_login/edit/<?= $ku['id'];?>" title="Update Record" data-toggle="tooltip">
                            <i class="fas fa-fw fa-edit"></i>
                          </a>
                          <a href="<?= base_url('host_login/deleteHomestay/'). $ku['id']; ?>">
                            <i class="fas fa-fw fa-trash"></i>
                          </a>
                        </center>
                        
                      </td>
                      <!-- <td><a href="<?php /*echo base_url('host_login/sewakan'); ?>?id=<?= $user['id_pemilik']; */ ?>" title="Update Record" data-togglesss="tooltip"><i class="fas fa-fw fa-edit"></i></a></td> -->
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
