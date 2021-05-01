@extends('layout/main')

@section('container')
<h3> <b> {{ $header }} </b> </h3>
<p>Perlihatkan keahlian anda kepada calon pelanggan, <br>
		kemampuan terbaik, sertifikasi dll.</p> 
	</div>

	<div class="row mt-4 bottom form-set">
		<form method="post" action="{{ url('/gabung/3') }}">
        @csrf
			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Keahlian </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Keahlian" name="keahlian">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Pendidikan </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Sertifikasi </b> </h6>
				</div>
				<div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" placeholder="Sertifikasi" name="sertifikat">
				</div>
				<div class="col-lg col-sm-12">
					<button class="btn" style="background-color: #7784EE; color: white;">Tambah</button>
				</div>
			</div>

			<div class="row top">
				<button type="submit" class="btn btn-next ms-auto">Lanjutkan</button>
			</div>
		</form>
	</div>

@endsection