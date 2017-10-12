@extends('layout.allapp')

@section('contentcreate')
<form action="/pasien" method="post">
	{{csrf_field()}}
	<div class="form-group">
    <label for="">Kode Pasien</label>
    <input type="text" name="kode_psn" class="form-control" value="">
  </div>
	<div class="form-group">
    <label for="">Nama Pasien</label>
    <input type="text" name="nama_psn" class="form-control" value="">
  </div>
	<div class="form-group">
    <label for="">ALamat</label>
    <input type="text" name="alamat_psn" class="form-control" value="">
  </div>
	<div class="form-group">
    <label for="">Gender</label>
    <input type="text" name="gender_psn" class="form-control" value="">
  </div>
	<div class="form-group">
    <label for="">Umur</label>
    <input type="text" name="umur_psn" class="form-control" value="">
  </div>
	<div class="form-group">
    <label for="">Telepon</label>
    <input type="text" name="telepon_psn" class="form-control" value="">
  </div>

	<input type="submit" class="btn btn-primary" name="" value="submit">
	</table>
</form>
@endsection
