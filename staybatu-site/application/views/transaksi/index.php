<div class="container">
    <hr>
    <center>
        <br>
        <br>
        <h3>Verifikasi Transaksi <?php echo $homestay['judul'] ?></h3>
        <br>
        <br>
        <h4>Untuk menyelesaikan proses pemesanan hubungi nomor whatsapp berikut : <?php echo $homestay['no_wa'] ?></h4>
        <?= form_open_multipart('Booking/addTransaksi2')  ?>
        <br>
        <br>
        <br>
        <div class="custom-file">
            <input type="file" accept=".jpg, .jpeg, .png" multiple class="custom-file-input" name="bukti_transaksi" id="bukti_transaksi" required>
            <label class="custom-file-label" for="gambar">Pilih Gambar <span style="color: red;">*</span></label></label>
            <small id="gambar" class="text-muted">
                Upload Bukti Pembayaran (JPG, JPEG, PNG)
            </small>
            <br>
            <br>
            <br>
            <br>

        </div>
        <div class="text-center">
            <button type=" submit" class="btn btn-success">Verifikasi Pembayaran</button>
            <br>
            <br>

            </a>
            <hr>
        </div>
        <?= form_close() ?>
        <br><br>
</div>

</div>