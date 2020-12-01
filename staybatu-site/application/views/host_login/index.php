<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewakan Propertimu di Sini!</title>
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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/host/css/styles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3839e22e11.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
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
        <a class="navbar-brand" href="<?= base_url('home'); ?>">StayBatu</a><span class="navbar-text">Properti</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#tatacara">Tata Cara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#keamanan">Keamanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#keuangan">Pembayaran</a>
                </li>
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <i class="fas fa-fw fa-user-circle"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('user'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Section Title -->
    <section id="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Sewakan rumahmu menjadi Homestay.</h1>
                    <a role="button" href="<?= base_url('host_login/sewakan'); ?>" class="sewa-button btn btn-primary btn-lg"><i class="fas fa-home"></i>
                        Sewakan!</a>
                </div>
                <div class="col-lg-6">
                    <img class="title-image" src="<?= base_url(); ?>/assets/host/images/sewa-homestay.jpg" alt="homestay-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Tata Cara -->
    <section id="tatacara">

        <h1 class="black-heading">Tata Cara</h1>
        <div class="row">
            <div class="tatacara-box col-lg-3">
                <a class="fas fa-home fa-4x icon" href="#title"></a>
                <h3>Sewakan!</h3>
                <p>Anda bisa langsung klik tombol Sewakan!</p>
            </div>
            <div class="tatacara-box col-lg-3">
                <i class="fas fa-user-edit fa-4x icon"></i>
                <h3>Isi Form</h3>
                <p>Isi Form hanya dalam 2 menit!</p>
            </div>
            <div class="tatacara-box col-lg-3">
                <i class="fas fa-clock fa-4x icon"></i>
                <h3>Tunggu Konfirmasi</h3>
                <p>Pihak kami akan segera mengkonfirmasi.</p>
            </div>
            <div class="tatacara-box col-lg-3">
                <i class="fas fa-check-circle fa-4x icon"></i>
                <h3>Selesai</h3>
                <p>Selamat, rumah Anda siap untuk disewakan!</p>
            </div>
        </div>

    </section>

    <!-- Keamanan -->
    <section id="keamanan">
        <h1 class="white-heading">Bagaimana kami melindungi keamanan tuan rumah</h1>
        <div class="row">
            <div class="keamanan-box col-lg-6">
                <a class="fas fa-user-friends fa-4x keamanan-icon"></a>
                <h3>Ulasan dua arah yang adil</h3>
                <p>Untuk membantu membangun kepercayaan dan reputasi di StayBatu, tamu dan tuan rumah saling memberi
                    ulasan satu sama lain setelah setiap reservasi selesai.</p>
                <p>Sebelum menerima tamu, Anda dapat memeriksa ulasan yang didapat tamu dari tuan rumah lain.</p>
            </div>
            <div class="keamanan-box col-lg-6">
                <i class="fas fa-comments fa-4x keamanan-icon"></i>
                <h3>Komunikasi mudah dengan tamu</h3>
                <p>Jika Anda ingin mengajukan pertanyaan atau mengatur ekspektasi sebelum menginap, Anda dapat mengenal
                    tamu terlebih dahulu menggunakan fitur pengiriman pesan StayBatu yang aman</p>
            </div>
            <div class="keamanan-box col-lg-6">
                <i class="fas fa-user-shield fa-4x keamanan-icon"></i>
                <h3>Persyaratan untuk memesan</h3>
                <p>Anda dapat meminta agar setiap tamu memberikan dokumen identitas kepada StayBatu sebelum memesan
                    dengan
                    Anda. Anda juga akan memiliki kesempatan untuk meninjau pemesanan terlebih dahulu atau menambahkan
                    kendali ekstra atas siapa yang dapat memesan.</p>
                <p>Sebagai pemeriksaan lebih lanjut, setiap pemesanan StayBatu diperhitungkan risikonya dan kami
                    membatalkan semua pemesanan yang tampak mencurigakan.</p>
            </div>
            <div class="keamanan-box col-lg-6">
                <i class="fas fa-ban fa-4x keamanan-icon"></i>
                <h3>Tempat Anda, peraturan Anda</h3>
                <p>Untuk membantu mengatur ekspektasi, Anda dapat menambahkan Peraturan Rumah yang harus disetujui oleh
                    para tamu sebelum memesan, misalnya larangan merokok dan penyelenggaraan acara.</p>
                <p>Jika tamu melanggar salah satu peraturan ini setelah memesan, Anda dapat membatalkan pemesanan.</p>
            </div>
        </div>
    </section>

    <!-- Keuangan -->
    <section id="keuangan">
        <h1 class="black-heading">Pembayaran mudah dan lancar</h1>
        <h3 class="keuangan-heading3">Dapatkan bayaran dengan cara yang Anda inginkan — ATM, OVO, GoPay, DANA dll.
        </h3>
        <div class="row">
            <div class="keuangan-box col-lg-4">
                <a class="far fa-flag fa-4x icon"></a>
                <h3>1. Daftarkan tempat anda gratis</h3>
                <p>Anda dapat mengiklankan rumah Anda kepada jutaan wisatawan tanpa biaya tersembunyi — tidak ada biaya
                    pendaftaran atau biaya keanggotaan.</p>
            </div>
            <div class="keuangan-box col-lg-4">
                <i class="far fa-envelope fa-4x icon"></i>
                <h3>2. Dapatkan pesanan</h3>
                <p>Kami menarik biaya dari setiap tamu sebelum kedatangan untuk memastikan Anda dibayar tepat waktu
                    saat Anda menerima tamu. Anda tidak perlu menangani pembayaran secara langsung.</p>
            </div>
            <div class="keuangan-box col-lg-4">
                <i class="fas fa-money-bill-wave-alt fa-4x icon"></i>
                <h3>3. Dapatkan bayaran setelah check-in</h3>
                <p>Kami akan mengirimkan uang Anda sekitar 24 jam setelah tamu dijadwalkan tiba untuk memastikan
                    proses check-in berjalan lancar.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="far fa-envelope"></i>
        <p>© Copyright 2020 StayBatu</p>
    </footer>

    <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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