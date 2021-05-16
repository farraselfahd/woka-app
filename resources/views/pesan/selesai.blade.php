<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/') }}/checkout.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<title>Checkout</title>
</head>
<body>

	<nav class="navbar navbar-light navbar-clr">
		<div class="container-fluid ms-3">
			<a class="navbar-brand" style="color: #11BCC7;" href="{{ url('/') }}"> <img src="{{ asset('img/') }}/logo.png" width="20%" alt=""> <b>Woka</b></a>
		</div>
	</nav>

	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-7 col-sm-12">
				<div class="card mt-4 d-flex align-items-center justify-content-center">
					<div class="card-body">
						<div class="success-box top">
							<p><b>Success</b></p>
							<p>Pesanan anda berhasil dibuat & sedang diproses</p>
							<p>No Pesanan : 202131031920470</p>
						</div>
						<div class="mt-5 mb-5">
							<form>
								<button type="submit" formaction="{{ url('/profil') }}" class="btn btn-pesan mt-3 flex">Lihat Pesanan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg col-sm-12">
				<div class="card mt-4">
					<div class="card-body">
						<p class="mt-4"><b>&nbsp;&nbsp;Ringkasan Pesanan</b></p>
						<table width="100%" cellpadding="10" class="mt-4 mb-2">
							<tr>
								<td>Subtotal Harga</td>
								<td style="text-align: right;">Rp250.000</td>
							</tr>
							<tr>
								<td>Tambahan Harga</td>
								<td style="text-align: right;">-</td>
							</tr>
							<tr>
								<td>Biaya Admin</td>
								<td style="text-align: right;">Rp10.000</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>Total</td>
								<td style="text-align: right;"><b>Rp260.000</b></td>
							</tr>
							<tr>
								<td>Perkiraan pengerjaan</td>
								<td style="text-align: right;">3 Hari</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>