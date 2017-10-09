@extends('layout.allapp')

@section('contentcreate')
<form action="{{url('obat/update',$tampiledit->Kode_Obat)}}" method="POST">
{{ csrf_field ()}}
<div class="form-group">
	<label for="Nama_Obat">Nama Obat</label>
	<input type="text" class="form-control" name="Nama_Obat" value="{{$tampiledit->Nama_Obat}}">
</div>
<div class="form-group">
	<label for="Jenis_Obat">Jenis Obat</label>
	<input type="text" class="form-control" name="Jenis_Obat" value="{{$tampiledit->Jenis_Obat}}">
</div>
<div class="form-group">
	<label for="Kategori">Kategori</label>
	<input type="text" class="form-control" name="Katagori" value="{{$tampiledit->Katagori}}">
</div>
<div class="form-group">
	<label for="Harga_Obat">Harga Obat</label>
	<input type="text" class="form-control" name="Harga_Obat" value="{{$tampiledit->Harga_Obat}}">
</div>
<div class="form-group">
	<label for="Jumlah_Obat">Jumlah Obat</label>
	<input type="text" class="form-control" name="Jumlah_Obat" value="{{$tampiledit->Jumlah_Obat}}">
</div>
	<input type="submit" class="btn btn-primary" name="" value="Submit">

</form>
@endsection
