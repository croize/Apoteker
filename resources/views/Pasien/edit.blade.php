<form action="/pasien/{{$sa->kode_psn}}" method="post">
	{{csrf_field()}}
	<table>
	kode_psn
	<input type="text" name="kode_psn" value="{{$sa->kode_psn}}">
	nama_psn
	<input type="text" name="nama_psn" value="{{$sa->nama_psn}}">
	alamat_psn
	<input type="text" name="alamat_psn" value="{{$sa->alamat_psn}}">
	gender_psn
	<input type="text" name="gender_psn" value="{{$sa->gender_psn}}">
	umur_psn
	<input type="text" name="umur_psn" value="{{$sa->umur_psn}}">
	telepon_psn
	<input type="text" name="telepon_psn" value="{{$sa->telepon_psn}}">
	

	<input type="hidden" name="_method" value="put">
	<input type="submit" name="" value="submit">
	</table>
</form>