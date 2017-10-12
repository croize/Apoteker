@extends('layout.allapp')

@section('juduldata')
	Obat
@endsection

@section('contentcreate')
	<a href="/obat/create" class="btn btn-primary">CREATE</a>
@endsection

@section('content')
	<th>Nama Obat</th>
	<th>Jenis Obat</th>
	<th>Katagori</th>
	<th>Harga Obat</th>
	<th>Jumlah Obat</th>
	<th>Action</th>
@endsection

@section('data')
	@foreach($datas as $data)
	<tr>
		<td>{{$data->Nama_Obat}}</td>
		<td>{{$data->Jenis_Obat}}</td>
		<td>{{$data->Katagori}}</td>
		<td>{{$data->Harga_Obat}}</td>
		<td>{{$data->Jumlah_Obat}}</td>
		<td><a href="{{url('obat/edit',$data->Kode_Obat)}}" class="btn btn-primary"> Edit</a> <a href="{{url('obat/delete',$data->Kode_Obat)}}" class="btn btn-danger" class="btn btn-danger"> Delete</a> </td>
		</tr>
	@endforeach
@endsection
