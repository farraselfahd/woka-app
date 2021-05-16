@extends('layout/main')

@section('container')

<div class="row bottom mt-5 flex">
		<div class="card-clr">
			<h5 style="color: #08A0F7;"><b>Data berhasil dikirim</b></h5>
			<p>Formulir sedang dalam tahap verifikasi.</p>
			<p>No Pendaftaran : MT3430202108</p>
		</div>
	</div>

	<div class="row bottom mt-5 flex">
		<div class="card-clr2">
			<p>Kami sedang melakukan verifikasi dan validasi data yang telah anda kirimkan.</p>
			<p>Setelah data anda lolos verifikasi dan validasi, kami akan mengirimkan pemberitahuan melalui email atau SMS.</p>
			<p>Jika dinyatakan lolos akun anda sebagai mitra penyedia jasa akan segera aktif dan anda dapat segera mencari pelanggan dan bertransaksi dengan aman dan nyaman.</p>
			<p>Proses verifikasi dan validasi memakan waktu maksimal 3 x 24 jam di hari kerja.</p>
		</div>
	</div>

	<div class="row top bottom">
		<a class="btn btn-home flex" href="{{ url('/profil') }}">Halaman Profil</a>
	</div>
@endsection