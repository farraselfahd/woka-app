@extends('layout/new/main')

@section('container')
<div class="row bar flex">
		<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
			<i class="bi bi-check-circle"></i> 
			<b>1. </b>
			&nbsp;Gambaran
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
			<b>2. </b>
			&nbsp;Harga
		</div>
		<div class="col-lg-1 col-sm-1 flex">
			<b><i class="bi bi-chevron-double-right"></i></b>
		</div>
		<div class="col-lg col-sm-12 flex">
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
	<form action="/new/pricing" method="post">
		@csrf
		<div class="row flex">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg col-sm-12 mt-3">
                            <p><b>Pilihan 1</b></p>
                            <label>Nama Pilihan</label>
                            <input type="text" class="form-control" name="nama_pil1" autofocus required>
                            <label>Jelaskan pilihan</label>
                            <textarea name="ket_pil1" required></textarea>
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga_pil_1" required>
                        </div>
						<div class="col-lg col-sm-12 mt-3">
                            <p><b>Pilihan 2</b></p>
                            <label>Nama Pilihan</label>
                            <input type="text" class="form-control" name="nama_pil2">
                            <label>Jelaskan pilihan</label>
                            <textarea name="ket_pil2"></textarea>
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga_pil_2">
                        </div>
                        <div class="col-lg col-sm-12 mt-3">
                            <p><b>Pilihan 3</b></p>
                            <label>Nama Pilihan</label>
                            <input type="text" class="form-control" name="nama_pil3">
                            <label>Jelaskan pilihan</label>
                            <textarea name="ket_pil3"></textarea>
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga_pil_3">
                        </div>
					</div>
				</div>
			</div>
		</div>

		<div class="row btn-area mt-5 flex">
			<div class="col-lg col-sm-12">
				<button class="btn btn-batal" action="{{ url('/new/overview') }}">Batalkan</button>
				<button class="btn btn-pesan float-end" type="submit">Simpan & Lanjutkan</button>
			</div>
		</div>
	</form>
</div>
@endsection