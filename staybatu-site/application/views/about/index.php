
<div class="container-fluid">
  <h2>Layanan</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
    <i class="fas fa-bed" style="font-size: 100px;"></i>		
      <h4>Menyewa Homestay</h4>
      <p>Kami menawarkan informasi tentang homestay dan jika anda berminat, anda dapat menyewa homestay yang kami tawarkan</p>
    </div>
    <div class="col-sm-4">
    <i class="fas fa-home" style="font-size: 100px;"></i>
      <h4>Sewakan Homestaymu</h4>
      <p>Kalian dapat meyewakan homestay yang kalian miliki di website kami</p>
    </div>
    <div class="col-sm-4">
	<i class="fas fa-cogs" style="font-size: 100px;"></i>
      <h4>Operasikan Homestaymu</h4>
      <p>Kalian dapat mengoperasikan homestay yang telah kalian daftarkan kepada website kami</p>
    </div>
  </div>
</div>
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-8">
      <h2>About</h2><br>
      <h4>Tentang Website Ini.</h4><br>
      <p>Website ini dibuat untuk menyediakan informasi kepada masyarakat tentang homestay yang ada di Batu. Homestay adalah salah satu bentuk penginapan yang populer. Para pengunjung atau tamu menginap di kediaman penduduk setempat di kota tempat mereka bepergian. Lama tinggal dapat bervariasi dari satu malam hingga lebih dari setahun. Penginapan dapat diberikan secara gratis, dan sebagai ganti untuk kompensasi uangnya dapat saling menginap (bertukar) pada rumah asal si penginap, atau sebagai gantinya dapat pula berupa membantu membersihkan rumah atau bekerja di properti tuan rumah. Inap keluarga adalah contoh dari konsumsi dan pembagian kolaboratif. </p>

    </div>
    <div class="col-sm-4">
      <i class="fas fa-chart-bar" style="font-size: 250px; "></i>
    </div>
  </div>
  <br/><br>
  <div class="row">
    <div class="col-sm-4">
      <i class="fas fa-globe-asia" style="font-size: 250px; "></i>
    </div>
    <div class="col-sm-8">
      <h2>Visi Misi</h2><br>
      <h4><strong>VISI:</strong> Visi kami adalah untuk menyediakan informasi homestay kepada masyarakat yang ingin menyewa homestay di Batu.</h4><br>
      <p><strong>MISI:</strong> a. Misi kami adalah menyediakan tempat untuk menaruh informasi itu kedalam sebuah media elektronik yang dapat diakses oleh siapa saja b. Mewujudkan Service Quality dengan integritas yang tinggi c. Menjadikan diferensiasi sebagai kekuatan untuk berkembang d. Berkolaborasi dengan para pelaku bisnis demi memperkuat pondasi bisnis yang telah dibangun.</p>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="container-fluid" style="background-color: #F0F0F0;">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 mr-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><i class="fas fa-map-marker-alt"></i></span> Malang, Jawa Timur</p>
      <p><i class="fas fa-phone"></i> +62 896-9178-9050</p>
      <p><i class="fas fa-envelope"></i>  noreply.staybatu@gmail.com</p>
    </div>
    <form action="<?= base_url(); ?>home/saran/2" method="post">
    <div class="col">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit">Kirim</button>
        </div>
      </div>
    </div>
   </form>
  </div>
</div>
