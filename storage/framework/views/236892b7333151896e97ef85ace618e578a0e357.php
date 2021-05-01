

<?php $__env->startSection('container'); ?>
<h3> <b> <?php echo e($header); ?> </b> </h3>
<p>Perlihatkan keahlian anda kepada calon pelanggan, <br>
		kemampuan terbaik, sertifikasi dll.</p> 
	</div>

	<div class="row mt-4 bottom form-set">
		<form method="post" action="<?php echo e(url('/gabung/3')); ?>">
        <?php echo csrf_field(); ?>
			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Keahlian </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Keahlian">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Pendidikan </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Pendidikan">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Sertifikasi </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Sertifikasi">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div>

			<div class="row top">
				<button type="submit" class="btn btn-next ms-auto">Lanjutkan</button>
			</div>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app\resources\views/gabung/2.blade.php ENDPATH**/ ?>