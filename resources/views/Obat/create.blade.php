<form action="{{url('obat/store')}}" method="POST">
{{ csrf_field () }}
	Kode_Obat : <input type="text" name="Kode_Obat"><br>
	Nama_Obat : <input type="text" name="Nama_Obat"><br>
	Jenis_Obat : <input type="text" name="Jenis_Obat"><br>
	Katagori : <input type="text" name="Katagori"><br>
	Harga_Obat : <input type="text" name="Harga_Obat"><br>
	Jumlah_Obat : <input type="text" name="Jumlah_Obat"><br>
	<input type="submit">

</form>
