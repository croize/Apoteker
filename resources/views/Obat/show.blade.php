<!DOCTYPE html>
<html>
<head>
	<title>Table Obat </title>
</head>
<body>
<table border="1">
<tr>
	<td>Nama Obat </td>
	<td>Jenis Obat</td>
	<td>Katagori</td>
	<td>Harga Obat</td>
	<td>Jumlah Obat</td>
	<td align="center" colspan="3" > Aksi </td>
</tr>
@foreach($datas as $data)

<tr>
	<td>{{$data->Nama_Obat}}</td>
	<td>{{$data->Jenis_Obat}}</td>
	<td>{{$data->Katagori}}</td>
	<td>{{$data->Harga_Obat}}</td>
	<td>{{$data->Jumlah_Obat}}</td>
	<td><a href="{{url('obat/edit',$data->Kode_Obat)}}"> Edit</a> <a href="{{url('obat/delete',$data->Kode_Obat)}}"> Delete</a> </td>



</tr>
@endforeach


</table>

</body>
</html>
