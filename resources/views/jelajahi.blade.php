<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/') }}/jelajahi.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<title>Woka: Best Worker for Best Service</title>
</head>
<body>

	<nav class="navbar navbar-light navbar-clr">
		<div class="container-fluid ms-3">
			<a class="navbar-brand" style="color: #11BCC7;" href="{{ url('/') }}"> <img src="{{ asset('img/') }}/logo.png" width="20%" alt=""> <b>Woka</b></a>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<h3 style="text-align: center;">3 Langkah mudah mendapatkan <br> jasa sesuai kebutuhan Anda.</h3>
		</div>

		<div class="row top">
			<div class="col-lg col-sm-12 flex">
				<p>
					<span style="font-size: 30px; font-weight: bold;">1. Cari</span>
					<br>
					Temukan jenis jasa yang anda butuhkan dengan <br> mencari tawaran yang paling sesuai.
				</p>
			</div>
			<div class="col-lg col-sm-12 flex">
				<img src="{{ asset('img/') }}/cari.PNG" alt="" class="rounded float-end">
			</div>
		</div>

		<div class="row top reverse">
			<div class="col-lg col-sm-12 flex">
				<img src="{{ asset('img/') }}/cari.PNG" alt="" class="rounded">
			</div>
			<div class="col-lg col-sm-12 flex">
				<p>
					<span style="font-size: 30px; font-weight: bold;">2. Pesan</span>
					<br>
					Setelah menemukan jasa yang sesuai, anda bisa langsung memilih rincian jasa atau bernegosiasi dengan penyedia jasa.
				</p>
			</div>
		</div>

		<div class="row top">
			<div class="col-lg col-sm-12 flex">
				<p>
					<span style="font-size: 30px; font-weight: bold;">3. Selesai</span>
					<br>
					Checkout dan tunggu konfirmasi dari penyedia jasa. Setelah diproses jasa yang anda butuhkan akan segera dikerjakan.
				</p>
			</div>
			<div class="col-lg col-sm-12 flex">
				<img src="{{ asset('img/') }}/cari.PNG" alt="" class="rounded float-end">
			</div>
		</div>

		<div class="row mt-5">
			<div class="card-clr">
				<h3>
					Sudah Siap Memesan?
					<br>
					<form>
						<button type="submit" formaction="{{ url('/search') }}" class="btn btn-outline-dark mt-4">Pesan Sekarang</button>
					</form>
				</h3>
			</div>
		</div>

		<div class="footer">
		<p>
			<img src="{{ asset('img/') }}/logofooter.png" width="25px" alt="">
			Woka &emsp;&emsp;
			@ 2021, PT. Woka.
		</p>
		</div>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>