<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- LINK -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="{{ asset('css/') }}/index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<title>Woka: Best Worker for Best Service</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light navbar-clr">
		<div class="container-fluid me-5 ms-5">
			<a class="navbar-brand" style="color: #11BCC7;" href="{{ url('/') }}"> <img src="{{ asset('img/') }}/logo.png" width="20%" alt=""> <b>Woka</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item pe-5">
						<a class="nav-link" href="{{ url('/jelajahi') }}">Jelajahi</a>
					</li>
					<li class="nav-item pe-5">
						<a class="nav-link" href="{{ url('/gabung') }}">Gabung Mitra</a>
					</li>
					<li class="nav-item pe-5">
						<a class="nav-link" data-bs-toggle="modal" formaction="#" data-bs-target="#exampleModal1" href="{{ url('/gabung') }}">Masuk</a>
					</li>
				</ul>

				<!-- <a class="nav-link btn me-5" data-bs-toggle="modal" formaction="#" data-bs-target="#exampleModal1"">Masuk</a> -->
				<!-- <button class="btn me-5" type="submit" data-bs-toggle="modal" formaction="#" data-bs-target="#exampleModal1">Masuk</button> -->
				<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<form method="post" action="{{ url('/') }}">
								@csrf
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									<h2 class="headT mb-4">Masuk</h2>
									<div class="form-outline mb-4 pe-5 ps-5">
										<input type="text" class="form-control" placeholder="Email/Nama Pengguna"/>
									</div>
									<div class="form-outline mb-4 pe-5 ps-5">
										<input type="password" class="form-control" placeholder="Kata Sandi"/>
									</div>
									<div class="form-outline pe-5 ps-5">
										<button type="submit" class="btn mb-4 btn-gabung">Lanjut</button>
										<input type="checkbox" name="" id=""> Ingat Saya
										<a href="#" class="float-end">Lupa Kata Sandi?</a>
									</div>
								</form>
							</div>

							<div class="modal-footer mx-auto">
								<p>Belum Bergabung? <a href="#">Daftar</a></p>
							</div>
						</div>
					</div>
				</div>

				<button class="btn btn-outline-primary" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<form>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									<h2 class="headT mb-4">Daftar</h2>
									<div class="form-outline mb-4 pe-5 ps-5">
										<input type="email" class="form-control" placeholder="Email"/>
									</div>
									<div class="form-outline mb-4 pe-5 ps-5">
										<input type="text" class="form-control" placeholder="Nama Pengguna"/>
									</div>
									<div class="form-outline mb-2 pe-5 ps-5">
										<input type="password" class="form-control" placeholder="Kata Sandi"/>
									</div>
									<div class="form-outline mb-4 pe-5 ps-5">
										<p class="mb-4" style="font-size: 13px;">8 karakter atau lebih. Kombinasi huruf besar dan kecil dan angka.</p>
										<button type="submit" class="btn mb-4 btn-gabung">Gabung</button>
										<p class="mb-4" style="font-size: 13px;">Dengan bergabung, anda menyetujui <a href="#">Persyaratan Layanan</a> kami.</p>
									</div>
								</form>
							</div>

							<div class="modal-footer mx-auto">
								<p>Sudah Bergabung? <a href="#">Masuk</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg col-sm-12">
				<img src="{{ asset('img/') }}/woka1.png" alt="" width="82%">
			</div>
			<div class="col-lg col-sm-12" style="margin-top: 15%;">
				<div class="card">
					<div class="card-body">
						<form action="">
							<input type="text" class="search-box" placeholder="Temukan Jasa" name="" id="">
							<button class="find-btn" type="submit">Cari Jasa</button>
						</form>
				  	</div>
				</div>
				<b class="slogan">Simple and Trusted</b>
				<p>Temukan jasa tukang terbaik dan terpercaya dengan mudah, sesuai keinginan Anda</p>
			</div>
		</div>
	</div>

	<div class="footer fixed-bottom">
		<p>Woka @ 2021, PT. Woka.</p>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>
		var myModal = document.getElementById('myModal')
		var myInput = document.getElementById('myInput')
		myModal.addEventListener('shown.bs.modal', function () {
		myInput.focus()
		})

		var myModal1 = document.getElementById('myModal1')
		var myInput1 = document.getElementById('myInput1')
		myModal1.addEventListener('shown.bs.modal', function () {
		myInput1.focus()
		})
	</script>	

</body>
</html>