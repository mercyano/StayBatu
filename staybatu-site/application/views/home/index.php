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
				<p class="carousel-paragraph">Website penyedia layanan homestay di Kota Batu.</p>
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
				<p class="carousel-paragraph">Homestay yang terdaftar di website ini telah lulus tahap screening kami.</p>
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
				<p class="carousel-paragraph">Garansi 100% dari penipuan.</p>
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
	<hr>
	<h2 class="text-center" style="padding: 3% 3%;">Rekomendasi Homestay Termurah</h2>
	<br>
	
	<div class="row justify-content-center">
		<?php foreach($homestay as $home) : ?>

		<div class="homestay-column col-lg-4 col-md-6">

			<div class="card rounded" style="width: 21rem; height: 42rem; text-align:center; border:3px solid #61b15a;">
				<!--<img class="image-thumbnail card-img-top" src="<?= base_url()?>assets/images/thumbnail.jpg" alt="Card image cap">-->
				<embed class="image-thumbnail img-fluid card-img-top"
					src="data:image/jpeg;base64,<?= base64_encode($home['gambar']); ?>" style="min-height: 11rem;
    		max-height: 16rem;"/>
				<!--<?php /*echo "<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='200'/>" */?>-->
				<div class="card-body" style="padding-bottom: 12px;">
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
		<hr><br>

		<a href="<?php echo base_url(); ?>all"><button class="btn btn-success btn-lg">Lihat homestay lainnya</button></a>
	</div>
	<br><br>
</div>

