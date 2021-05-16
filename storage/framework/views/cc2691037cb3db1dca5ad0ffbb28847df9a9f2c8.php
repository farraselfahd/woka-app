

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
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #0d6efd">
			<b>3. </b>
			&nbsp;Keamanan
		</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
<h3> <b> <?php echo e($header); ?> </b> </h3>
<p>Pastikan akun anda aman</p> 
	</div>

	<div class="row mt-4 bottom form-set">
		<form method="post" action="/gabung/security">
        <?php echo csrf_field(); ?>
			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Pertanyaan Keamanan </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Masukan Pertanyaan" name="sec_question">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Jawaban" name="sec_answer">
				</div>
			</div>

			<div class="row mt-5 mb-5">
            <button type="submit" class="btn btn-next ms-auto">Gabung</button>
			</div>
		</form>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/gabung/security.blade.php ENDPATH**/ ?>