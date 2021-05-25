<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo e(asset('css/')); ?>/homepage.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?php echo e(asset('css/')); ?>/pesanan.css">
	<link rel="stylesheet" href="<?php echo e(asset('css/')); ?>/profile.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<title>Woka: Best Worker for Best Service</title>
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid ms-3">
			<a class="navbar-brand" style="color: #11BCC7;" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('img/')); ?>/logo.png" width="20%" alt=""> <b>Woka</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Temukan Jasa" aria-label="Search" style="width: 550px">
				</form>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item me-5">
						<a class="nav-link" href="<?php echo e(url('/jelajahi')); ?>">Jelajahi</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="<?php echo e(url('/gabung')); ?>">Gabung Mitra</a>
					</li>

					</li>
					<li class="nav-item me-5">
						<div class="dropdown dropstart">
							<a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo e(asset('img/')); ?>/profile.PNG" class="rounded-circle" width="25px" alt=""></a>

							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<li><a class="dropdown-item mb-2" href="<?php echo e(url('/profil')); ?>">Profil</a></li>
								<li>
									<a  class="dropdown-item mb-2" href="<?php echo e(url('/pesanan')); ?>">Pesanan</a>
								</li>
								<li><a class="dropdown-item mb-2" href="<?php echo e(url('/profil')); ?>">Pemesanan</a></li>
								
								<li>
									<div class="ms-3 mt-2 mb-2 space-y-1">
										<!-- Authentication -->
										<form method="POST" action="<?php echo e(route('logout')); ?>">
											<?php echo csrf_field(); ?>

											<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
																this.closest(\'form\').submit();']]); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
																this.closest(\'form\').submit();']); ?>
												<?php echo e(__('Keluar')); ?>

											 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
										</form>
									</div>
								</li>
							</ul>
						</div>
						
					</li>
				


				</ul>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light bar">
		<div class="container-fluid">
		<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent2">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="text-align: center; font-size: 0.9rem">
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Jasa Las</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Tukang Kebun</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Tukang Kayu</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Jasa Ketik</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Jasa Montir</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Jasa Cleaning</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Tukang Masak</a>
					</li>
					<li class="nav-item me-5">
						<a class="nav-link" href="#">Tukang Dekor</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    <?php echo $__env->yieldContent('container'); ?>

    <div class="bar mt-5"></div>
	<div class="footer">
		<p>
			<img src="<?php echo e(asset('img/')); ?>/logofooter.png" width="25px" alt="">
			Woka &emsp;&emsp;
			@ 2021, PT. Woka.
		</p>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
	</html><?php /**PATH F:\my document\computer science\SourceCode\RPL\TUBES\woka-app\resources\views/layout/search/main.blade.php ENDPATH**/ ?>