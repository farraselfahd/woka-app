

<?php $__env->startSection('container'); ?>
	
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">

				<img src="<?php echo e(asset('img/')); ?>/20191122_01.png" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-scrollable">
							<div class="modal-content">
								<div class="modal-body">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-8 col-sm-12 thumb-post">
												<img src="<?php echo e(asset('img/')); ?>/20191122_01.png" class="rounded" width="100%" alt="">
											</div>
											<div class="col-lg col-sm-12">
												<b>Pilih jasa</b>
												<div class="box mt-3">
													<select class="form-select" aria-label="Default select example">
														<option selected>Pilihan Lemari</option>
														<option value="Lemari besar">Lemari besar</option>
														<option value="Lemari Kecil">Lemari kecil</option>
													</select>
													<br>
													<p>Harga <span class="float-end">Rp.250.000</span></p>
													<hr>
													<p class="mt-2">Biaya tambahan</p>
													<div class="box">
														Rp.0
													</div>
													<br>
													<p>Total <span class="float-end">Rp.250.000</span></p>
													<form method="post" action="<?php echo e(url('/order')); ?>">
														<?php echo csrf_field(); ?>
														<input type="text" class="form-control" id="service_id" name="service_id" value="1" hidden>
														<button type="submit" class="btn btn-pesan mt-3 flex">Pesan Jasa</button>
													</form>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-lg col-sm-12 thumb-post">
												<p>
													<span style="color: #40B2C9;">Tukang kayu</span><br>
													<b>Perbaikan furniture kayu</b>
												</p>
											</div>
											<div class="col-lg col-sm-12 thumb-post">
												<button class="btn btn-hub">Hubungi Saya</button>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-lg-8 col-sm-12">
												<p style="text-align: justify;">Menerima jasa perbaikan segala jenis furniture dan peralatan rumah tangga berbahan dasar kayu. Mulai dari pintu, meja, lemari, kitchen set dll. Berpengalaman lebih dari 15 tahun dibidang furniture kayu.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer me-auto mt-3">
									<div class="row">
										<div class="col-lg-2">
											<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
										</div>
										<div class="col-lg">
											<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Maman Woodman</b></a>
											<p style="color: red;">Bandung</p>
										</div>
										<div class="col-lg">
											<p style="font-size: 14px;">- 2 Pesanan sedang dikerjakan</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Maman Woodman</b></a>
								<p style="color: red;">Bandung</p>
							</div>
						</div>
						<p class="card-text">
							Perbaikan furniture kayu                
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.100.000</li>
					</ul>
				</div>
			</div>
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo e(asset('img/')); ?>/Chainsaw-Wood-Cutting-Tools.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Edi Chainsaw</b></a>
								<p style="color: red;">Cilacap</p>
							</div>
						</div>
						<p class="card-text">
							Jasa tebang pohon                
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.50.000</li>
					</ul>
				</div>
			</div>
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo e(asset('img/')); ?>/lathe-wood-082318-Copy-min.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Tanto Yoshimura</b></a>
								<p style="color: red;">Sleman</p>
							</div>
						</div>
						<p class="card-text">
							Kerajinan kayu                
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.100.000</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo e(asset('img/')); ?>/carpenter-lead-image-082318-min.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Ojak Lumberjack</b></a>
								<p style="color: red;">Garut</p>
							</div>
						</div>
						<p class="card-text">
							Perbaikan Furniture kayu                
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.100.000</li>
					</ul>
				</div>
			</div>
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo e(asset('img/')); ?>/Ax-Wood-Cutting-Tools.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Beben Carpenter</b></a>
								<p style="color: red;">Purwerejo</p>
							</div>
						</div>
						<p class="card-text">
							Jasa tebang pohon               
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.50.000</li>
					</ul>				
				</div>
			</div>
			<div class="col-lg col-sm-12 flex">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo e(asset('img/')); ?>/IMG_1378.JPG" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<a href="#" class="card-title" style="font-size: 15px; color: black;"><b>Hendro Doikuno</b></a>
								<p style="color: red;">Bantul</p>
							</div>
						</div>
						<p class="card-text">
							Pembuatan Furniture kayu                
						</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" style="text-align: right;">Mulai dari Rp.100.000</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/search/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\my document\computer science\SourceCode\RPL\TUBES\woka-app\resources\views/search/index.blade.php ENDPATH**/ ?>