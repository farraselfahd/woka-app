

<?php $__env->startSection('container'); ?>

        <div class="row bar flex">
		<div class="col-lg col-sm-12 flex">
			<b>1. </b> 
			&nbsp;Gambaran
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
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
	<form method="POST" action="/new">
		<?php echo csrf_field(); ?>
		<div class="row flex">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4 col-sm-12">
							<label class="flex">Judul jasa</label>
						</div>
						<div class="col-lg col-sm-12">
							<textarea class="form-control" name="nama" id="nama" required autofocus></textarea>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-4 col-sm-12">
							<label class="flex">Kategori</label>
						</div>
						<div class="col-lg col-sm-12">
							<select class="form-control" name="kategori" required>
								<option value="">Pilih Kategori</option>
								<option value="Jasa Las">Jasa Las</option>
								<option value="Tukang Kebun">Tukang Kebun</option>
								<option value="Tukang Kayu">Tukang Kayu</option>
								<option value="Jasa Ketik">Jasa Ketik</option>
								<option value="Jasa Montir">Jasa Montir</option>
								<option value="Jasa Cleaning">Jasa Cleaning</option>
								<option value="Jasa Masak">Jasa Masak</option>
								<option value="Tukang Dekor">Tukang Dekor</option>
							</select>
							<input type="text" class="form-control" placeholder="Jasa Lainnya" name="jasa_lain">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row btn-area mt-5 mb-5 flex">
			<div class="col-lg col-sm-12">
                <button class="btn btn-batal" formaction="<?php echo e(url('/pesanan')); ?>">Kembali</button>
                <button class="btn btn-pesan float-end" type="submit">Simpan & Lanjutkan</button>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/new/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/new/overview.blade.php ENDPATH**/ ?>