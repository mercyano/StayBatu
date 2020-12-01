<div class="container">
	<h2>Daftar Homestay</h2>

	<div class="row">
		<?php foreach($homestay as $home) : ?>

		<div class="homestay-column col-lg-4 col-md-6">

			<div class="card">
				<embed class="image-thumbnail card-img-top"
					src="data:image/jpeg;base64,<?= base64_encode($home['gambar']); ?>" />
				<!-- <img class="card-img-top" src="<?= base_url()?>assets/images/rimbono-homestay.jpg" alt="Card image cap"> -->
				<div class="card-body">
					<h5 class="card-title"><?php echo $home['judul'] ?></h5>

				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><span style="font-weight: bold;">Harga per Malam: </span>Rp.
						<?php echo $home['harga'] ?></li>
				</ul>
				<div class="card-body">
					<a href="<?php echo site_url('home/'.$home['id'])?>"><button
							class="btn btn-primary btn-block">Selengkapnya</button></a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>


</div>