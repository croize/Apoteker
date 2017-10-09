

@extends('layout.allapp')

@section('contentcreate')
<form action="{{url('obat/store')}}" method="POST">
{{ csrf_field ()}}
<div class="form-group">
	<label for="Kode_Obat1">Kode Obat</label>
	<input type="text" name="Kode_Obat" class="form-control">
</div>
<div class="form-group">
	<label for="Nama_Obat1">Nama Obat</label>
	<input type="text" name="Nama_Obat" class="form-control">
</div>
<div class="form-group">
	<label for="Jenis_Obat1">Jenis Obat</label>
	<input type="text" name="Jenis_Obat" class="form-control">
</div>
<div class="form-group">
	<label for="Kategori1">Kategori</label>
	<input type="text" name="Katagori" class="form-control">
</div>
<div class="form-group">
	<label for="Harga_Obat1">Harga Obat</label>
	<input type="text" name="Harga_Obat" class="form-control">
</div>
<div class="form-group">
	<label for="Jumlah_Obat1">Jumlah Obat</label>
	<input type="text" name="Jumlah_Obat" class="form-control">
</div>
	<input type="submit" class="btn btn-primary" name="" value="Submit">
</form>
@endsection
