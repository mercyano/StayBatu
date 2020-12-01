<div class="container">

    <center>
        <h3>Booking <?php echo $homestay['judul'] ?></h3>
        <hr>
        <form action="<?= base_url('Booking/addTransaksi1/') ?>" method="post">

            <div class="form-group">
                <label>Nama : <input type="text" class="form-control" name="nama" id="nama" placeholder="Tulis nama" required> </label>
            </div>
            <div class="form-group">
                <label>Email : <input type="text" class="form-control" name="email" id="email" placeholder="Tulis Email" required></label>
            </div>
            <div class="form-group">
                <label>No Telepon : <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No telepon" required></label>
            </div>
            <div class="form-group">
                <label>Check in : <input type="date" class="form-control" name="check_in" id="check_out" required></label>
            </div>
            <div class="form-group">
                <label>Check out : <input type="date" class="form-control" name="check_out" id="check_out" required></label>
            </div>
            <div class="custom-file">
                <input type="file" accept=".jpg, .jpeg, .png" multiple class="custom-file-input" name="gambar" id="gambar" required>
                <label class="custom-file-label" for="gambar">Screenshoot Bukti Pembayaran <span style="color: red;">*</span></label></label>
                <small id="gambar" class="text-muted">
                    Pembayaran dapat dilakukan dengan menghubungi nomor whatsapp berikut :<?php echo $homestay['no_wa'] ?>
                </small>
            </div>

</div>
<br>

<hr>
<div class="text-center">
    <button type=" submit" class="btn btn-success">Submit</button>
    </a>
    </center>
    <br>
    </br>
</div>
</form>
</div>

</div>
