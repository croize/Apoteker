<form action="{{url('obat/update',$tampiledit->Kode_Obat)}}" method="POST">
{{ csrf_field () }}

	Nama_Obat : <input type="text" name="Nama_Obat" value="{{$tampiledit->Nama_Obat}}"><br>
	Jenis_Obat : <input type="text" name="Jenis_Obat" value="{{$tampiledit->Jenis_Obat}}"><br>
	Katagori : <input type="text" name="Katagori" value="{{$tampiledit->Katagori}}"><br>
	Harga_Obat : <input type="text" name="Harga_Obat" value="{{$tampiledit->Harga_Obat}}"><br>
	Jumlah_Obat : <input type="text" name="Jumlah_Obat" value="{{$tampiledit->Jumlah_Obat}}"><br>
	<input type="submit">

</form>
