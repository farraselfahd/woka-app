

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
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
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
	<form action="/new/gallery" method="post">
		<?php echo csrf_field(); ?>
		<div class="row flex">
			<div class="card">
				<div class="card-body">
					<div class="row mt-3">
						<p><b>Berikan foto contoh hasil pekerjaan anda</b></p>
						<div class="row-lg col-sm-12">
							<p>Unggah minimal 1 foto</p><br>
						</div>
						<div class="col-lg col-sm-12">
							<label for="image">
								<img src="<?php echo e(asset('img/')); ?>/foto.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;"/>
								<br>
								<input type="file" name="pic_1"/>
							</label>    
						</div>
						<div class="col-lg col-sm-12">
							<label for="image">
								<input type="file" name="pic_2" id="pic_2" style="display:none;"/>
								<img src="<?php echo e(asset('img/')); ?>/foto.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;"/>
							</label> 
						</div>
						<div class="col-lg col-sm-12">
							<label for="image">
								<input type="file" name="pic_3" id="pic_3" style="display:none;"/>
								<img src="<?php echo e(asset('img/')); ?>/foto.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;"/>
							</label> 
						</div>
					</div>
					<div class="row mt-5">
						<p><b>Berikan video contoh hasil pekerjaan anda</b></p>
						<div class="col-lg-3 col-sm-12">
							<label for="image">
								<input type="file" name="vid_4" id="vid_4" style=""/>
								<img src="<?php echo e(asset('img/')); ?>/video.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;"/>
							</label>    
						</div>
						<div class="col-lg col-sm-12">
							<p>Durasi video tidak boleh lebih dari 75 detik dan harus dibawah 50 MB</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row btn-area mt-5 mb-5 flex">
			<div class="col-lg col-sm-12">
				<a href="<?php echo e(url('/new/description')); ?>"><button class="btn btn-batal" oncl="">Kembali</button></a>
				<button class="btn btn-pesan float-end" type="submit">Simpan & Lanjutkan</button>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/new/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/new/gallery.blade.php ENDPATH**/ ?>