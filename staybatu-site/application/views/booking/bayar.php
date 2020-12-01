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

<div class="container">
    <center>
        <p>Check In pada : <?= $check_in;?></p><br>
        <p>Check Out pada : <?= $check_out;?></p>
        <p>Biaya per Malam : Rp. <?= $harga?></p>
        <p>Total yang harus  dibayar : Rp. <?= $harga * (dateDiffInDays($check_in, $check_out))?></p>
        <!-- <?php form_open_multipart('home/uploadpembayaran'); ?> -->
        <div class="custom-file">
                <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" name="bukti_transaksi" id="bukti_transaksi" required>
                <label class="custom-file-label" for="bukti_transaksi">Screenshoot Bukti Pembayaran <span style="color: red;">*</span></label></label>
                <small id="bukti_transaksi" class="text-muted">
                    Pembayaran dapat dilakukan dengan menghubungi nomor whatsapp berikut : <strong><?php echo $homestay['no_wa'] ?></strong>
                </small>
        </div>
            <button type=" submit" class="btn btn-success">Submit</button>
        </form>
    </center>
</div>

