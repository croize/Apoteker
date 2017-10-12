@extends('layout.allapp')

@section('contentcreate')
<form action="/pasien/{{$sa->kode_psn}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
    <label for="">Kode Pasien</label>
    <input type="text" name="kode_psn" disabled class="form-control" value="{{$sa->kode_psn}}">
  </div>
	<div class="form-group">
    <label for="">Nama Pasien</label>
    <input type="text" name="nama_psn" class="form-control" value="{{$sa->nama_psn}}">
  </div>
	<div class="form-group">
    <label for="">Alamat Pasien</label>
    <input type="text" name="alamat_psn" class="form-control" value="{{$sa->alamat_psn}}">
  </div>
	<div class="form-group">
    <label for="">Gender Pasien</label>
    <input type="text" name="gender_psn" class="form-control" value="{{$sa->gender_psn}}">
  </div>
	<div class="form-group">
    <label for="">Umur Pasien</label>
    <input type="text" name="umur_psn" class="form-control" value="{{$sa->umur_psn}}">
  </div>
	<div class="form-group">
    <label for="">Telepon Pasien</label>
    <input type="text" name="telepon_psn" class="form-control" value="{{$sa->telepon_psn}}">
  </div>


	<input type="hidden" name="_method" value="put">
	<input type="submit" name="" value="submit">
	</table>
</form>
@endsection
