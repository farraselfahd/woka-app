

<?php $__env->startSection('progress'); ?>
<div class="row bar flex">
		<div class="col-lg col-sm-12 flex" style="color: #0d6efd">
			<b>1. </b>
			&nbsp;Informasi Pribadi
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: grey">
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

	<p>Beritahu calon pelanggan tentang diri anda. Informasi ini akan <br>
	kami tampilkan di halaman profil anda sebagai penyedia jasa.</p>
</div>

<div class="row mt-4 bottom form-set">
		<form method="POST" action="/gabung">
        <?php echo csrf_field(); ?>
			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b>No Identitas </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Identitas" name="no_identitas" value="<?php echo e(old('no_identitas')); ?>" autofocus>
					<!-- <?php $__errorArgs = ['no_identitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div id="noIdentitasFeedback" class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Jenis Identitas" name="jenisIdentitas" value="<?php echo e(old('jenisIdentitas')); ?>">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Nama Lengkap </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Depan" name="fname" value="<?php echo e(old('fname')); ?>">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Belakang" name="lname" value="<?php echo e(old('lname')); ?>">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Alamat </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo e(old('alamat')); ?>">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> No Ponsel </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Ponsel" name="no_hp" value="<?php echo e(old('no_hp')); ?>">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Jenis Kelamin </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria"> Pria &emsp;
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita"> Wanita
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Deskripsi Diri </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<textarea type="text" class="form-control" rows="5" placeholder="Ceritakan pengalaman bekerja anda, apa saja yang pernah anda kerjakan dan keahlian anda." name="description" value="<?php echo e(old('description')); ?>"></textarea>
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
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/gabung/index.blade.php ENDPATH**/ ?>