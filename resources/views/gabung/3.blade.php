@extends('layout/main')

@section('container')
<h3> <b> {{ $header }} </b> </h3>
<p>Pastikan akun anda aman</p> 
	</div>

	<div class="row mt-4 bottom form-set">
		<form method="post" action="{{ url('/gabung/4') }}">
        @csrf
			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Kata Sandi </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Masukan Kata Sandi" name="password">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Konfirmasi Kata Sandi" name="passwordConfirm">
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg col-sm-12">
					<h6> <b> Pertanyaan Keamanan </b> </h6>
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Masukan Pertanyaan" name="secQuestion">
				</div>
				<div class="col-lg col-sm-12">
					<input type="text" class="form-control" placeholder="Jawaban" name="secAnswer">
				</div>
			</div>

			<div class="row mt-5 mb-5">
            <button type="submit" class="btn btn-next ms-auto">Gabung</button>
			</div>
		</form>
        
@endsection