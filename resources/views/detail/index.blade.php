@extends('layout.allapp')

@section('content')
	<td>Nomor Resep</td>
	<td>Kode Obat</td>
	<td>Harga</td>
	<td>Dosis</td>
	<td>Sub Total</td>
	<td> Aksi </td>
@endsection
@section('data')

</tr>
@foreach($datas as $data)
	<td>{{$data->resep['TanggalResep']}}</td>
	<td>{{$data->obat['Nama_Obat']}}</td>
	<td>{{$data->Harga}}</td>
	<td>{{$data->Dosis}}</td>
	<td>{{$data->SubTotal}}</td>
	<td><a href="/detail/{{$data->id}}/edit"> Edit</a> <form action="/detail/{{$data->id}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="delete">
		<input type="submit" value="Delete" name="">
	
</table>
</body>
</html>d>
@endforeach
@endsection
