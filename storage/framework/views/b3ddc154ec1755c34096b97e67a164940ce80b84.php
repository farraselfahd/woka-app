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
			<div class="col-lg-8 col-sm-12">
				<h5>Pilihan Pembayaran</h5>
				<div class="card mt-4">
					<div class="card-body">
						<div class="form-check mt-3">
							<input class="form-check-input" type="radio" name="bayar" id="bayar1" value="KartuDebit">
							<label class="form-check-label" for="bayar1">
								Kartu Debit
							</label>
						</div>
						<div class="KartuDebit box" style="font-size: 14px;">
							<div class="row">
								<div class="col-lg col-sm-12">
									<label for="">Nomor Kartu</label>
									<input type="text" class="form-control">
								</div>
								<div class="col-lg-3 col-sm-12">
									<label for="">Expiration Date</label>
									<input type="text" class="form-control">
								</div>
								<div class="col-lg-3 col-sm-12">
									<label for="">Security Code</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-lg col-sm-12">
									<label for="">Nama Depan</label>
									<input type="text" class="form-control">
								</div>
								<div class="col-lg col-sm-12">
									<label for="">Nama Belakang</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="form-check mt-3">
							<input class="form-check-input" type="radio" name="bayar" id="bayar2" value="Paypal">
							<label class="form-check-label" for="bayar2">
								Paypal
							</label>
						</div>
						<div class="Paypal box" style="font-size: 14px;">
							<label for="">Username</label>
							<input type="text" class="form-control mb-3">
							<label for="">Password</label>
							<input type="password" class="form-control mb-3">
							<button class="btn btn-pesan" style="font-size: 14px;">Submit</button>
						</div>

						<div class="form-check mt-3">
							<input class="form-check-input" type="radio" name="bayar" id="bayar3" value="Indomaret">
							<label class="form-check-label" for="bayar3">
								Indomaret
							</label>
						</div>
						<div class="Indomaret box" style="font-size: 14px;">
							<label for="">Indomaret Code</label>
							<input type="text" class="form-control" placeholder="IND18X3K680L" disabled>
						</div>
						
						<div class="form-check mt-3">
							<input class="form-check-input" type="radio" name="bayar" id="bayar4" value="Alfamart">
							<label class="form-check-label" for="bayar4">
								Alfamart
							</label>
						</div>
						<div class="Alfamart box" style="font-size: 14px;">
							<label for="">Alfamart Code</label>
							<input type="text" class="form-control" placeholder="ALF18X3K680L" disabled>
						</div>

						<div class="form-check mt-3">
							<input class="form-check-input" type="radio" name="bayar" id="bayar5" value="TransferBank">
							<label class="form-check-label" for="bayar5">
								Transfer Bank
							</label>
						</div>
						<div class="TransferBank box" style="font-size: 14px;">
							<h5 class="mb-3">
								Virtual Account Billing
							</h5>
							<label for="">BNI Code</label>
							<input type="text" class="form-control mb-3" placeholder="BNI18X3K680L" disabled>
							<label for="">BCA Code</label>
							<input type="text" class="form-control mb-3" placeholder="BCA18X3K680L" disabled>
							<label for="">BRI Code</label>
							<input type="text" class="form-control mb-3" placeholder="BRI18X3K680L" disabled>
							<label for="">Mandiri Code</label>
							<input type="text" class="form-control mb-3" placeholder="MAN18X3K680L" disabled>
							<label for="">Bank Syariah Indonesia Code</label>
							<input type="text" class="form-control mb-3" placeholder="BSI18X3K680L" disabled>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg col-sm-12 mt-5">
				<div class="card">
					<div class="card-body">
						<div class="row mt-3">
							<div class="col-lg col-sm-12">
								<img src="<?php echo e(asset('img/')); ?>/20191122_01.png" alt="" width="100%">
							</div>
							<div class="col-lg col-sm-12" style="font-size: 12px;">
								<p>
									<b>Perbaikan furniture kayu</b>
									<br>
									Lemari besar
									<br>
									Catatan :
								</p>
								<textarea name="" id="" rows="2" cols="20"></textarea>
							</div>
						</div>
						<hr class="mt-2 mb-2">
						<div class="row">
							<table width="100%" cellpadding="10" class="mt-2 mb-2">
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
									<td>Total</td>
									<td style="text-align: right;"><b>Rp260.000</b></td>
								</tr>
								<tr>
									<td>Perkiraan pengerjaan</td>
									<td style="text-align: right;">3 Hari</td>
								</tr>
							</table>
							<div>
								<form method="post">
                                    <?php echo csrf_field(); ?>
									<button type="submit" formaction="<?php echo e(url('pesan/3/')); ?>" class="btn btn-pesan mt-3 flex">Konfirmasi & Bayar</button>
								</form>
								<p style="text-align: center; font-size: 10px;" class="mt-3">SSL Security Payment</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/pesan/2.blade.php ENDPATH**/ ?>