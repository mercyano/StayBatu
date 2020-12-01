<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menyewakan Properti</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/host/css/host_sewa.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&family=Ubuntu&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/3839e22e11.js" crossorigin="anonymous"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>/assets/host/images/logo-wisatabatu.png" type="image/x-icon">


</head>

<body>

	<!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg  navbar-light">
		<a class="navbar-brand" href="<?= base_url('host_login'); ?>">
			<i class="fas fa-long-arrow-alt-left fa-lg"></i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav ml-auto">
				<li>
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
						<i class="fas fa-fw fa-user-circle"></i>
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
						aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?= base_url('user'); ?>">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							My Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
							data-target="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
		</div>

	</nav>

	<div class="host-sewa-box">
		<h3>Form Menyewakan Homestay</h3>
		<?= form_open_multipart('host/tambah')  ?>
		<div class="form-group">
			<label for="judul">Judul Penginapan <span style="color: red;">*</span></label></label>
			<input type="text" class="form-control" name="judul" id="judul" placeholder="Tulis judul" required>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text">Rp<span style="color: red;">*</span></label></span>
			</div>
			<input type="number" min="50000" max="2000000" step="50000" name="harga" id="harga" class="form-control"
				placeholder="Harga per Malam" required>
		</div>
		<div class="form-group">
			<label for="kapasitas">Kapasitas Maksimal <span style="color: red;">*</span></label></label>
			<select class="form-control" name="kapasitas" id="kapasitas" required>
				<option disabled>Pilih..</option>
				<option value="1">1 Orang</option>
				<option value="2">2 Orang</option>
				<option value="3">3 Orang</option>
				<option value="4">4 Orang</option>
				<option value="5">5 Orang</option>
				<option value="6">6 Orang</option>
				<option value="7">7 Orang</option>
				<option value="8">8 Orang</option>
				<option value="9">9 Orang</option>
				<option value="10">10 Orang</option>
				<option value="11">11 Orang</option>
				<option value="12">12 Orang</option>
				<option value="13">13 Orang</option>
				<option value="14">14 Orang</option>
				<option value="15">15 Orang</option>
			</select>
		</div>
		<div class="form-group">
			<label for="jml_kamar">Jumlah Kamar Tidur <span style="color: red;">*</span></label></label>
			<input type="number" min="1" max="50" step="1" class="form-control" name="jml_kamar" id="jml_kamar"
				placeholder="Kamar Tidur" required>
		</div>
		<div class="form-group">
			<label for="jml_kamarmandi">Jumlah Kamar Mandi <span style="color: red;">*</span></label></label>
			<input type="number" min="1" max="50" step="1" class="form-control" name="jml_kamarmandi"
				id="jml_kamarmandi" placeholder="Kamar Mandi" required>
		</div>
		<label for="form-check">Fasilitas</label>

		<!-- <div class="form-check">
                <?php echo form_checkbox('wifi', '1', FALSE);?>
                <label class="form-check-label" for="wifi">
                    Wifi
                </label>
            </div>
            <div class="form-check">
            <?php echo form_checkbox('tv', '1', FALSE);?>
                <label class="form-check-label" for="tv">
                    TV
                </label>
            </div>
            <div class="form-check">
                <?php echo form_checkbox('ac', '1', FALSE);?>
                <label class="form-check-label" for="ac">
                    AC
                </label>
            </div>
                <div class="form-check">
                <?php echo form_checkbox('dapur', '1', FALSE);?>
                <label class="form-check-label" for="dapur">
                    Dapur
                </label>
            </div>
            <div class="form-check">
            <?php echo form_checkbox('parkir', '1', FALSE);?>
                <label class="form-check-label" for="parkir">
                    Parkir
                </label>
            </div> -->
		<div class="form-check">
			<input class="form-check-input" type="hidden" name="wifi" value="0">
			<input class="form-check-input" type="checkbox" name="wifi" value="1">
			<label class="form-check-label" for="wifi">
				Wifi
			</label>
		</div>
		<div class="form-check">
        <input class="form-check-input" type="hidden" name="tv" value="0">
			<input class="form-check-input" type="checkbox" name="tv" value="1">
			<label class="form-check-label" for="tv">
				TV
			</label>
		</div>
		<div class="form-check">
        <input class="form-check-input" type="hidden" name="ac" value="0">
			<input class="form-check-input" type="checkbox" name="ac" value="1">
			<label class="form-check-label" for="ac">
				AC
			</label>
		</div>
		<div class="form-check">
        <input class="form-check-input" type="hidden" name="dapur" value="0">
			<input class="form-check-input" type="checkbox" name="dapur" value="1">
			<label class="form-check-label" for="dapur">
				Dapur
			</label>
		</div>
		<div class="form-check">
        <input class="form-check-input" type="hidden" name="parkir" value="0">
			<input class="form-check-input" type="checkbox" name="parkir" value="1">
			<label class="form-check-label" for="parkir">
				Parkir
			</label>
		</div>
		<br>
		<div class="form-group">
			<label for="deskripsi">Deskripsi Homestay <span style="color: red;">*</span></label></label>
			<textarea class="form-control" name="deskripsi" id="deskripsi" minlength="100" maxlength="1000" rows="5"
				placeholder="Tulis Deskripsi" required></textarea>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fab fa-whatsapp"></i> <span
						style="color: red;">*</span></label></span>
			</div>
			<input type="tel" class="form-control" name="no_wa" placeholder="Nomor WA" id="no_wa" required>
		</div>
		<div class="custom-file">
			<input type="file" accept=".jpg, .jpeg, .png" multiple class="custom-file-input" name="gambar" id="gambar"
				required>
			<label class="custom-file-label" for="gambar">Pilih Gambar <span
					style="color: red;">*</span></label></label>
			<small id="gambar" class="text-muted">
				Upload Gambar Homestay (JPG, JPEG, PNG)
			</small>
		</div>
		<button type="submit" name="submit" class="btn btn-primary btn-md submit-button">Submit</button>
		<?= form_close() ?>
	</div>

	<!-- Footer -->
	<footer id="footer">
		<i class="fab fa-facebook-f"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-instagram"></i>
		<i class="far fa-envelope"></i>
		<p>© Copyright 2020 StayBatu</p>
	</footer>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

</body>

</html>