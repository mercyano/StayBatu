          
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
                      <th>Id Pemesan</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telphone</th>
                      <th>Check In</th>
                      <th>Check Out</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach( $tabel as $pemesan ): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $pemesan['id_pemesan']; ?></td>
                      <td><?= $pemesan['nama']; ?></td>
                      <td><?= $pemesan['email']; ?></td>
                      <td><?= $pemesan['no_telp']; ?></td>
                      <td><?= $pemesan['check_in']; ?></td>
                      <td><?= $pemesan['check_out']; ?></td>
                      <td>
                        <center>
                          <a href="<?= base_url('admin/deleteBooking/'). $pemesan['id_pemesan']; ?>">
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