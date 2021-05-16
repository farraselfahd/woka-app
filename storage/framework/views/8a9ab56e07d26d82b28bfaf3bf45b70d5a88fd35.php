<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo e(asset('css/')); ?>/checkout.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<title>Checkout</title>
</head>
<body>

	<nav class="navbar navbar-light navbar-clr">
		<div class="container-fluid ms-3">
			<a class="navbar-brand" style="color: #11BCC7;" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('img/')); ?>/logo.png" width="20%" alt=""> <b>Woka</b></a>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row mt-4 bottom">
			<div class="col-lg-8 col-sm-12 mb-5">
				<h5>Pesanan anda</h5>
				<div class="row mt-4">
					<div class="col-lg-1 col-sm">
						<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
					</div>
					<div class="col-lg col-sm">
						<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Maman Woodman</b></a>
						<p style="color: red;">Bandung</p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-5 col-sm-12">
						<img src="assets/20191122_01.png" alt="" width="100%">
					</div>
					<div class="col-lg col-sm-12 mt-2">
						<p>
							<b>Perbaikan furniture kayu</b>
							<br>
							Lemari besar
							<br>
						</p>
						<p>Catatan :</p>
						
						<textarea name="" id="" rows="3" cols="35"></textarea>
					</div>
				</div>
			</div>
			<div class="col-lg col-sm-12 mb-5">
				<div class="card">
					<div class="card-body">
						<b>&nbsp;&nbsp;Ringkasan Pesanan</b>
						<table width="100%" cellpadding="10" class="mt-4">
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
						</table>
						<hr class="mt-4 mb-4">
						<table width="100%" cellpadding="10" class="mt-4">
							<tr>
								<td>Total</td>
								<td style="text-align: right;"><b>Rp260.000</b></td>
							</tr>
							<tr>
								<td>Perkiraan pengerjaan</td>
								<td style="text-align: right;">3 Hari</td>
							</tr>
						</table>
						<div">
							<form method="post">
                                <?php echo csrf_field(); ?>
								<button type="submit" formaction="<?php echo e(url('pesan/2/')); ?>" class="btn btn-pesan mt-3 flex">Lanjut ke Pembayaran</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/pesan/1.blade.php ENDPATH**/ ?>