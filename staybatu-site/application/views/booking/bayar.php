<?php
function dateDiffInDays($date1, $date2)
{
    // Calculating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1);

    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400));
}
?>
    <center>
        <div class="host-sewa-box">

        <h3>Verifikasi Bukti Pembayaran</h3>
        <hr>
        <h4 style="color: #d2f6c5;">7624556384756 : StayBatu (BRI)</h4><hr>
        <h5 style="color: white;">Check In pada : <?= $check_in; ?></h5>
        <h5 style="color: white;">Check Out pada : <?= $check_out; ?></h5>
        <h5 style="color: white;">Biaya per Malam : Rp. <?= $harga ?></h5>
        <h5 style="color: white;">Total yang harus dibayar : Rp. <?= $harga * (dateDiffInDays($check_in, $check_out)) ?></h5>
        <br>
        <?= form_open_multipart('home/transaksi/' . $homestay['id_homestay'])?>
        
        <div class="custom-file">
        <input type="hidden" name='id_transaksi' value="<?php echo $id_pemesan?>"> 
            <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" name="bukti_transaksi" id="bukti_transaksi" required>
            <label class="custom-file-label" for="bukti_transaksi">Upload Bukti Pembayaran<span style="color: red;">*</span></label></label>
            <small id="bukti_transaksi" class="text-muted">
                Pembayaran juga dapat dilakukan dengan menghubungi nomor whatsapp berikut : <strong><?php echo $homestay['no_wa'] ?></strong>
            </small>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <?= form_close() ?>
    </center>
    </div>
    <br> 