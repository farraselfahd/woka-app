@extends('layout/main')

@section('progress')
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
@endsection

@section('container')
<h3> <b> {{ $header }} </b> </h3>

	<p>Beritahu calon pelanggan tentang diri anda. Informasi ini akan <br>
	kami tampilkan di halaman profil anda sebagai penyedia jasa.</p>
</div>

<div class="row mt-4 bottom form-set">
		<form method="POST" action="/gabung">
        @csrf
			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b>No Identitas </b> </h6>
					<p>Informasi ini tidak akan kami tampilkan ke publik</p>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Identitas" name="no_identitas" value="{{ old('no_identitas') }}" autofocus>
					<!-- @error('no_identitas')
                        <div id="noIdentitasFeedback" class="invalid-feedback">{{$message}}</div>
                    @enderror -->
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Jenis Identitas" name="jenisIdentitas" value="{{ old('jenisIdentitas') }}">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Nama Lengkap </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Depan" name="fname" value="{{ old('fname') }}">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Nama Belakang" name="lname" value="{{ old('lname') }}">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Alamat </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> No Ponsel </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="No Ponsel" name="no_hp" value="{{ old('no_hp') }}">
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
					<textarea type="text" class="form-control" rows="5" placeholder="Ceritakan pengalaman bekerja anda, apa saja yang pernah anda kerjakan dan keahlian anda." name="description" value="{{ old('description') }}"></textarea>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-4 col-sm-12">
					<h6> <b> Foto Profile </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="15%" alt="avatar">
					<br>
					<input type="file" class="text-center center-block file-upload mt-3" name="profilePicture"> 
				</div>
			</div>

            <div class="row mt-5">
				<button type="submit" class="btn btn-next ms-auto">Lanjutkan</button>
			</div>
		</form>
        </div>
@endsection