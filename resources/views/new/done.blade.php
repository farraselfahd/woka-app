@extends('layout/new/main')

@section('container')
<div class="row bar flex">
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i> 
			&nbsp;Gambaran
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
			&nbsp;Harga
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
			&nbsp;Deskripsi
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
			&nbsp;Galeri
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i>
			&nbsp;Selesai
		</div>
	</div>

	<div class="container mt-5">
		<div class="row flex">		
            <div class="row mt-3" style="text-align: center;">
                <h2 style="color: #1778B0;" class="mt-3"><b>Berhasil!</b></h2>
                <p class="mt-3">Jasa yang anda tawarkan berhasil disimpan dan akan segera muncul dihalaman pencarian</p>
                <p class="mt-3">Pantau terus perkembangan jasa yang anda tawarkan</p>
            </div>
		</div>

		<div class="row btn-area mt-5 flex">
			<div class="col-lg col-sm-12">
				<form>
					@csrf
                    <button class="btn btn-batal flex" formaction="{{url('/pesanan')}}">Lihat Jasa Saya</button>
                </form>
			</div>
		</div>
	</div>
@endsection