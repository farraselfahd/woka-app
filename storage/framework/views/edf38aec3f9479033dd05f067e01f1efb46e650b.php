

<?php $__env->startSection('container'); ?>
<div class="row bar flex">
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i> 
            <b>1. </b>
			&nbsp;Gambaran
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
            <b>2. </b>
			&nbsp;Harga
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
			<b>3. </b>
			&nbsp;Deskripsi
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
			<b>4. </b>
			&nbsp;Galeri
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
			<b>5. </b>
			&nbsp;Selesai
		</div>
	</div>

<div class="container mt-5">
	<form action="/new/description" method="post">
		<?php echo csrf_field(); ?>
		<div class="row flex">
			<div class="card">
				<div class="card-body">
					<form action="" method="post">
						<?php echo csrf_field(); ?>
						<div class="row mt-3">
							<label>Jelaskan jasa yang anda tawarkan</label>
							<textarea name="description" id="description"></textarea>
							<p style="font-size: 12px;  color: #a0a0aa;">Minimal 120 Karakter <span class="float-end">Maksimal 1200 Karakter</span></p>
						</div>
						<div class="row mt-4">
							<label>Beritahu calon pelanggan apa saja yang diperlukan sebelum memesan</label>
							<textarea name="requirements" id="requirements"></textarea>
							<p style="font-size: 12px; color: #a0a0a0; text-align: right;">Maksimal 450 Karakter</p>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row btn-area mt-5 mb-5 flex">
			<div class="col-lg col-sm-12">
                <button class="btn btn-batal" action="<?php echo e(url('/new/pricing')); ?>">Kembali</button>
                <button class="btn btn-pesan float-end" type="submit">Simpan & Lanjutkan</button>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/new/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/new/description.blade.php ENDPATH**/ ?>