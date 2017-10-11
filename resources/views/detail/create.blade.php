@extends('layout.allapp')

@section('contentcreate')
<h3>Create Detail</h3>
<form action="/detail" method="POST">
{{ csrf_field () }}

	<div class="form-group">
		<label for="">Nomor Resep</label>
		<select class="form-control" name="NomorResep">
			<option value="">--Select--</option>
			@foreach($sa as $yu)
				<option value="{{$yu->NomorResep}}">{{$yu->NomorResep}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Nama Obat</label>
		<select class="form-control" name="KodeObat">
			<option value="">--Select--</option>
			@foreach($ba as $obat)
				<option value="{{$obat->Kode_Obat}}">{{$obat->Nama_Obat}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="text" class="form-control" name="Harga" value="">
	</div>
	<div class="form-group">
		<label for="">Dosis</label>
		<input type="text" class="form-control" name="Dosis" value="">
	</div>
	<div class="form-group">
		<label for="">Sub Total</label>
		<input type="text" class="form-control" name="SubTotal" value="">
	</div>
	<input type="submit" value="Submit" class="btn btn-primary">

</form>
@endsection
