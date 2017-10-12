@extends('layout.allapp')

@section('contentcreate')
	<a href="/detail/create" class="btn btn-primary">CREATE</a>
@endsection

@section('juduldata')
	DETAIL
@endsection

@section('content')
	<th>Nomor Resep</th>
	<th>Kode Obat</th>
	<th>Harga</th>
	<th>Dosis</th>
	<th>Sub Total</th>
	<th> Aksi </th>
@endsection
@section('data')

</tr>
@foreach($datas as $data)
<tr>
	<td>{{$data->resep['TanggalResep']}}</td>
	<td>{{$data->obat['Nama_Obat']}}</td>
	<td>{{$data->Harga}}</td>
	<td>{{$data->Dosis}}</td>
	<td>{{$data->SubTotal}}</td>
	<td><a href="/detail/{{$data->id}}/edit" class="btn btn-primary"> Edit</a> <a  class="btn btn-danger" href="{{url('detail/delete',$data->id)}}">Delete</a> <td></td>
		</tr>
@endforeach
@endsection
