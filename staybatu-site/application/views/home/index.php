<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-2" data-slide-to="1"></li>
		<li data-target="#carousel-example-2" data-slide-to="2"></li>
	</ol>
	<!--/.Indicators-->
	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div class="view">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
					alt="First slide">
				<div class="mask rgba-black-light"></div>
			</div>
			<div class="carousel-caption">
				<h3 class="h3-responsive">StayBatu</h3>
				<p>Website penyedia layanan homestay di Kota Batu.</p>
			</div>
		</div>
		<div class="carousel-item">
			<!--Mask color-->
			<div class="view">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
					alt="Second slide">
				<div class="mask rgba-black-strong"></div>
			</div>
			<div class="carousel-caption">
				<h3 class="h3-responsive">Berkualitas</h3>
				<p>Homestay yang terdaftar di website ini telah lulus tahap screening kami.</p>
			</div>
		</div>
		<div class="carousel-item">
			<!--Mask color-->
			<div class="view">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
					alt="Third slide">
				<div class="mask rgba-black-slight"></div>
			</div>
			<div class="carousel-caption">
				<h3 class="h3-responsive">Terjamin</h3>
				<p>Garansi 100% dari penipuan.</p>
			</div>
		</div>
	</div>
	<!--/.Slides-->
	<!--Controls-->
	<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!-- Cards Carousel -->
<div class="container">
	<h2>Rekomendasi Homestay</h2><div class="float-right">
		<a href="<?php echo base_url(); ?>all">Lihat lebih banyak</a></div><br>

	<div class="row">
		<?php foreach($homestay as $home) : ?>

		<div class="homestay-column col-lg-4 col-md-6">

			<div class="card">
				<!--<img class="image-thumbnail card-img-top" src="<?= base_url()?>assets/images/thumbnail.jpg" alt="Card image cap">-->
				<embed class="image-thumbnail card-img-top" src="data:image/jpeg;base64,<?= base64_encode($home['gambar']); ?>" />
				<!--<?php /*echo "<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='200'/>" */?>-->
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