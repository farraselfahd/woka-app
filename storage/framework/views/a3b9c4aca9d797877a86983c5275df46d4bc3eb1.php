

<?php $__env->startSection('container'); ?>
<div class="container">
		<div class="row mt-5">
			<div class="col-lg col-sm-12">
				<div class="row ms-3 me-3">
					<div class="box">
						<p style="font-size: 30px;">
							<i class="bi bi-envelope"></i>
						</p>
						<!-- <p style="margin:0; text-align: right;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-fill"></i></button></p> -->
						<img src="<?php echo e(asset('img/')); ?>/profile.PNG" width="30%" class="rounded-circle flex mb-3" alt="">
						<p style="text-align: center;"><b>Ucup Rodriguez</b></p>
						<p style="text-align: center;">Depok, Jawa Barat</p>
						<p style="text-align: center;">Ahli Pahat Kayu</p>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<h6><b>Tentang Ucup</b></h6>
						<div class="row mt-4">
							<p style="text-align: justify;">
								Berpengalaman dalam bidang memahat selama lebih dari 20 tahun. Memahat berbagai jenis kerajinan kayu, mulai dari bingkai cermin, patung, cinderamata dll.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg col-sm-12">
				<div class="row  ms-3 me-3">
					<div class="box">
						<h6 style="text-align: center;"><b>Statistik Mitra</b></h6>
						<table width="100%" cellpadding="10" class="mt-4 mb-2">
							<tr>
								<td>Pekerjaan dalam antrean</td>
								<td style="text-align: right;">3</td>
							</tr>
							<tr>
								<td>Pekerjaan selesai</td>
								<td style="text-align: right;">140</td>
							</tr>
							<!-- <tr>
								<td>Kinerja</td>
								<td style="text-align: right;">9/10</td>
							</tr> -->
						</table>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<h6 style="text-align: center;"><b>Hasil Pekerjaan</b></h6>
						<div class="row mt-4">
							<p style="text-align: center;">
								<img src="<?php echo e(asset('img/')); ?>/il_1140xN.1623396501_6860.jpg" width="100px" alt="">
								<img src="<?php echo e(asset('img/')); ?>/elephant-head-bronzed-wood-wall-art-600x600.jpg" width="100px" alt="">
								<img src="<?php echo e(asset('img/')); ?>/painted-green-family-tree-wooden-wall-hanging-600x601.jpg"  width="100px" alt="">
								<img src="<?php echo e(asset('img/')); ?>/wedding-sign-wooden-wall-signs-600x450.jpg" width="135px" alt="">
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
        			</button>
      			</div>
      			<div class="modal-body">
      				<table>
      					<tr>
      						<td>Nama</td>
      						<td>:</td>
      						<td><input type="text" :value="old('name')"/></td>
      					</tr>
      					<tr>
      						<td>Alamat</td>
      						<td>:</td>
      						<td><input type="text" :value="old('address')"/></td>
      					</tr>
      					<tr>
      						<td>Foto Profil</td>
      						<td>:</td>
      						<td><input type="file" value="UpFoto"/></td>
      					</tr>
      				</table>
     			</div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        			<button type="button" class="btn btn-primary">Simpan Perubahan</button>
      			</div>
    		</div>
  		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/search/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\woka-app - Copy\resources\views/profil/worker.blade.php ENDPATH**/ ?>