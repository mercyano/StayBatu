<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul;?></title>

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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&family=Ubuntu&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/3839e22e11.js" crossorigin="anonymous"></script>

	<!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/host/images/logo-wisatabatu.png" type="image/x-icon">
	<style>
		body {
			padding-top: 90px;
		}
	</style>

</head>

<body>
	<!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo base_url() ?>">StayBatu</a><span class="navbar-text">Properti</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
							class="fas fa-user-circle fa-2x"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('auth'); ?>">Login</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('auth/registration'); ?>">Sign Up</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>