<!-- Footer -->
<footer id="footer">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="far fa-envelope"></i>
        <p>© Copyright 2020 StayBatu</p>
</footer>

<!-- Upload Gambar js -->
	<script type="application/javascript">
		$('input[type="file"]').change(function (e) {
			var fileName = e.target.files[0].name;
			$('.custom-file-label').html(fileName);
		});
	</script>
</body>

</html>
