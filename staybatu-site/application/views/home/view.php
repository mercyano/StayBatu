<div class="container">
    <h2><?php echo $homestay['judul'] ?></h2>
    <embed class="image-view rounded border border-dark" src="data:image/jpeg;base64,<?= base64_encode($homestay['gambar']); ?>" />
    <!-- <img class="image-view rounded border border-dark" src="<?= base_url() ?>assets/images/rimbono-homestay.jpg" alt=""> -->
    <div class="float-right">
        <h3>Rp. <?= $homestay['harga'] ?></h3>
    </div><br>
    <hr>
    <h3>Deskripsi Homestay</h3>
    <h5 class=""><?= $homestay['deskripsi'] ?></h5>
    <br><br>
    <h4 class=""><strong>Kapasitas Maksimum: </strong> <?= $homestay['kapasitas'] ?> Orang</h4>

    <h4 class=""><strong>Kamar Tidur: </strong><?= $homestay['kamar_tidur'] ?></h4>

    <h4 class=""><strong>Kamar Mandi: </strong> <?= $homestay['kamar_mandi'] ?></h4>

    <hr>
    <!-- Fasilitas -->
    <h3>Fasilitas</h3>
    <ul>
        <?php echo ($homestay['wifi'] == 1) ? ('<li><h4><i class="fas fa-wifi"></i> Wifi</h4></li>') : '' ?>
        <?php echo ($homestay['tv'] == 1) ? ('<li><h4><i class="fas fa-tv"></i> TV</h4></li>') : '' ?>
        <?php echo ($homestay['ac'] == 1) ? ('<li><h4>Air Conditioner</h4></li>') : '' ?>
        <?php echo ($homestay['dapur'] == 1) ? ('<li><h4><i class="fas fa-utensils"></i> Dapur</h4></li>') : '' ?>
        <?php echo ($homestay['parkir'] == 1) ? ('<li><h4><i class="fas fa-parking"></i> Tempat Parkir</h4></li>') : '' ?>
    </ul>


    <div class="text-center">
        <a href="<?php echo site_url('home/booking/' . $homestay['id']) ?>">
            <button class="btn btn-success btn-lg">Booking Homestay</button></a> </div>
    <br><br>


</div>