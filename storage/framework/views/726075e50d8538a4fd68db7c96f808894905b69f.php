

<?php $__env->startSection('progress'); ?>
<div class="row bar flex">
		<div class="col-lg col-sm-12 flex" style="color: #0d6efd">
			<b>1. </b>
			&nbsp;Informasi Pribadi
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #0d6efd">
			<b>2.</b>
			&nbsp;Informasi Keahlian
		</div>
		<div class="col-lg-1 col-sm-1 flex" style="color: grey">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
			<b>3. </b>
			&nbsp;Keamanan
		</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
<h3> <b> <?php echo e($header); ?> </b> </h3>
<p>Perlihatkan keahlian anda kepada calon pelanggan, <br>
			kemampuan terbaik, sertifikasi dll.</p> 
		</div>

	<div class="row mt-4 bottom form-set">
		<form method="post" action="/gabung/craftsmanship">
        <?php echo csrf_field(); ?>
			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Keahlian </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Keahlian" name="keahlian">
				</div>
			</div>

			<!-- <div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Pendidikan </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div> -->

			<!-- <div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Sertifikasi </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Sertifikasi" name="sertifikat">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div> -->

			<div class="row top">
				<button type="submit" class="btn btn-next ms-auto">Lanjutkan</button>
			</div>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/gabung/craftsmanship.blade.php ENDPATH**/ ?>