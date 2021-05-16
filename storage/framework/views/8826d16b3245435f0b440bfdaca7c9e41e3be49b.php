

<?php $__env->startSection('container'); ?>
<h3> <b> <?php echo e($header); ?> </b> </h3>

	<p>Beritahu calon pelanggan tentang diri anda. Informasi ini akan <br>
	kami tampilkan di halaman profil anda sebagai penyedia jasa.</p>
</div>

<div class="row mt-4 bottom form-set">
		<form method="post" action="<?php echo e(url('/gabung/2')); ?>">
        <?php echo csrf_field(); ?>
			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b>No Identitas </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Identitas" name="noIdentitas">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Jenis Identitas" name="jenisIdentitas">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Nama Lengkap </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Depan" name="fName">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Belakang" name="lName">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Alamat </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Alamat" name="address">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> No Ponsel </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Ponsel" name="phone">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Jenis Kelamin </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input class="form-check-input" type="radio" name="radioGender"> Pria &emsp;
					<input class="form-check-input" type="radio" name="radioGender"> Wanita
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Deskripsi Diri </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<textarea type="text" class="form-control" rows="5" placeholder="Ceritakan pengalaman bekerja anda, apa saja yang pernah anda kerjakan dan keahlian anda." name="description"></textarea>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Foto Profile </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="15%" alt="avatar">
					<br>
					<input type="file" class="text-center center-block file-upload mt-3" name="profilePicture"> 
				</div>
			</div>

            <div class="row mt-5">
				<button type="submit" class="btn btn-next ms-auto">Lanjutkan</button>
			</div>
		</form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/gabung/1.blade.php ENDPATH**/ ?>