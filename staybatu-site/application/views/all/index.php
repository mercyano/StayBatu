<div class="container">
	<hr>
	<h2 class="text-center" style="padding: 3% 3%;">Daftar Homestay</h2>
	<br>

	<div class="row justify-content-center">
		<?php foreach($homestay as $home) : ?>

		<div class="homestay-column col-lg-4 col-md-6">

			<div class="card rounded" style="width: 21rem; height: 42rem; text-align:center; border:3px solid #61b15a;">
				<embed class="image-thumbnail img-fluid card-img-top"
					src="data:image/jpeg;base64,<?= base64_encode($home['gambar']); ?>" style="min-height: 11rem;
    		max-height: 16rem;"/>
				<!-- <img class="card-img-top" src="<?= base_url()?>assets/images/rimbono-homestay.jpg" alt="Card image cap"> -->
				<div class="card-body">
					<h5 class="card-title"><?php echo character_limiter($home['judul'], 80)?></h5>

				</div>
				<div class="card">
					<div class="card-body" style="padding-bottom: 12px;">
						<ul style="padding-inline-start: 0;">
							<?php echo ($home['wifi'] == 1) ? ('<h5><i class="fas fa-wifi"></i> Wifi</h5>' ) : '' ?>
							<?php echo ($home['tv'] == 1) ? ('<h5><i class="fas fa-tv"></i> TV</h5>' ) : '' ?>
							<?php echo ($home['ac'] == 1) ? ('<h5><i class="far fa-snowflake"></i> AC</h5>' ) : '' ?>
							<?php echo ($home['dapur'] == 1) ? ('<h5><i class="fas fa-utensils"></i> Dapur</h5>' ) : '' ?>
							<?php echo ($home['parkir'] == 1) ? ('<h5><i class="fas fa-parking"></i> Tempat Parkir</h5>' ) : '' ?>
						</ul>
					</div>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><span style="font-weight: bold;">Harga per Malam: </span>Rp.
						<?php echo $home['harga'] ?></li>
				</ul>
				<div class="card-body">
					<a style="text-decoration : none" href="<?php echo site_url('home/view/'.$home['id_homestay'])?>"><button
							class="btn btn-success btn-block">Selengkapnya</button></a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>


</div>
