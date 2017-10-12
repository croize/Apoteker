@extends('layout.allapp')

@section('juduldata')
	Poliklinik
@endsection

@section('contentcreate')
	<a href="/poli/create" class="btn btn-primary">CREATE</a>
@endsection

@section('content')
    <th>Kode Poliklinik</th>
    <th>Nama Poliklinik</th>
    <th>Action</th>
@endsection

@section('data')
  @foreach($as as $uy)
  <tr>
    <td>{{$uy->KodePlk}}</td>
    <td>{{$uy->NamaPlk}}</td>
    <td><a href="/poli/{{$uy->KodePlk}}/edit" class="btn btn-primary">Edit</a> <a href="{{url('poli/delete',$uy->KodePlk)}}" class="btn btn-danger">Delete</a></td>
  </tr>
  @endforeach
@endsection
