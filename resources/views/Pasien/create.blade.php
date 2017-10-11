<form action="/pasien" method="post">
	{{csrf_field()}}
	<table>
	kode_psn
	<input type="text" name="kode_psn">
	nama_psn
	<input type="text" name="nama_psn">
	alamat_psn
	<input type="text" name="alamat_psn">
	gender_psn
	<input type="text" name="gender_psn">
	umur_psn
	<input type="text" name="umur_psn">
	telepon_psn
	<input type="text" name="telepon_psn">

	<input type="submit" name="" value="submit">
	</table>
</form>