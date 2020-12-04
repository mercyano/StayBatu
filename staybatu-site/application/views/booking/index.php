<center>
    <div class="host-sewa-box">
    <h3>Booking <?php echo $homestay['judul'] ?></h3>
        <hr>
        <?= form_open_multipart('home/bayar/' . $homestay['id_homestay'])  ?>

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
	</div>
<hr>
<div class="text-center">
    <button type=" submit" class="btn btn-success">Submit</button>
    </a>
    </center>
    <br>
    </br>
</div>
<?= form_close() ?>
</div>
