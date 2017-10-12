@extends('layout.allapp')

@section('juduldata')
	Pendaftaran
@endsection

@section('contentcreate')
	<a href="/pendaftaran/create" class="btn btn-primary">CREATE</a>
@endsection

@section('content')
  <th>Nomor Pendaftaran</th>
  <th>Tanggal Pendaftaran</th>
  <th>Nama Dokter</th>
  <th>Nama Pasien</th>
  <th>Nama Poliklinik</th>
  <th>Biaya</th>
  <th>Keterangan</th>
  <th>Action</th>
@endsection

@section('data')
  @foreach($n as $yyu)
    <td>{{$yyu->NomorPendf}}</td>
    <td>{{$yyu->TanggalPendf}}</td>
    <td>{{$yyu->dokter['NamaDkt']}}</td>
    <td>{{$yyu->pasien['nama_psn']}}</td>
    <td>{{$yyu->poliklinik['NamaPlk']}}</td>
    <td>{{$yyu->Biaya}}</td>
    <td>{{$yyu->Ket}}</td>
    <td><a href="/pendaftaran/{{$yyu->NomorPendf}}/edit" class="btn btn-primary">Edit</a> <a href="{{url('pendaftaran/delete',$yyu->NomorPendf)}}" class="btn btn-danger">Delete</a></td>
  @endforeach
@endsection
