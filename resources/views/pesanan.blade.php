@extends('layout/search/main')

@section('container')
<div class="container">
		<div class="row mt-5">
			<div class="col-lg col-sm-12">
				<div class="row ms-3 me-3">
					<a href="{{ url('/new') }}" style="color: black;">
						<div class="box flex">
							<p><b><i class="bi bi-plus-circle-fill" style="font-size: larger;"></i> Tawarkan jasa baru</b></p>   
						</div>
					</a>
				</div>
				<div class="row mt-5 ms-3 me-3">
					<div class="box">
						<h6><b>Terima Pesanan Baru</b></h6>
						<div class="row mt-5">
							<p>Pesanan Selesai</p>
							<div class="progress">
								<div class="progress-bar bg-proses1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="row mt-4">
							<p>Pesanan Selesai Tepat Waktu</p>
							<div class="progress">
								<div class="progress-bar bg-proses2" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="row mt-4">
							<p>Kecepatan Respon</p>
							<div class="progress">
								<div class="progress-bar bg-proses3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<h6><b>Kotak Masuk</b></h6>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Karen</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 01
									</span>
								</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Ulrich</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 02
									</span>
								</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Luigi</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 03
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg col-sm-12">
				<div class="row ms-3 me-3">
					<div class="box">
						<table width="100%" cellpadding="5" class="mt-4 mb-2" style="font-size: 12px; text-align: center;">
							<thead>
								<th>Dalam antrean</th>
								<th>Sedang diproses</th>
								<th>Menunggu konfirmasi</th>
							</thead>
							<tr>
								<td>2</td>
								<td>1</td>
								<td>1</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<p><b>Menunggu Konfirmasi</b></p>
						<div class="row mt-5 me-3">
							<div class="col-lg col-sm-2">
								<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
							</div>
							<div class="col-lg col-sm">
								<p style="font-size: 13px;">
									<b>Jasa tebang pohon</b> <br>
									3x Pohon Sedang <br>
									No. 2021039124560
								</p>
							</div>
							<div class="col-lg col-sm">
								<button class="btn bg-proses2 float-end" style="font-size: 13px;">Terima</button>
								<br><br>
								<button class="btn btn-danger float-end" style="font-size: 13px;">Tolak</button>
							</div>
						</div>

					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<p><b>Dalam antrean</b></p>
						<div class="row mt-5 me-3">
							<div class="col-lg col-sm-2">
								<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
							</div>
							<div class="col-lg col-sm">
								<p style="font-size: 13px;">
									<b>Jasa tebang pohon</b> <br>
									2x Pohon Sedang <br>
									No. 2021039124560
								</p>
							</div>
							<div class="col-lg col-sm">
								<button class="btn bg-proses1 float-end" style="font-size: 13px;">Proses</button>
							</div>
						</div>
						<hr>
						<div class="row me-3">
							<div class="col-lg col-sm-2">
								<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
							</div>
							<div class="col-lg col-sm">
								<p style="font-size: 13px;">
									<b>Jasa tebang pohon</b> <br>
									3x Pohon Sedang <br>
									No. 20210391241120
								</p>
							</div>
							<div class="col-lg col-sm">
								<button class="btn bg-proses1 float-end" style="font-size: 13px;">Proses</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<p><b>Sedang diproses</b></p>
						<div class="row mt-5 me-3">
							<div class="col-lg col-sm-2">
								<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
							</div>
							<div class="col-lg col-sm">
								<p style="font-size: 13px;">
									<b>Jasa tebang pohon</b> <br>
									3x Pohon Sedang <br>
									No. 2021039124560
								</p>
							</div>
                            <div class="col-lg col-sm">
								<button class="btn bg-proses2 float-end" style="font-size: 13px;" disabled>Selesai</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection