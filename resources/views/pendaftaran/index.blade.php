@extends('layout.allapp')

@section('content')
  <th>Nomor Pendaftaran</th>
  <th>Tanggal Pendaftaran</th>
  <th>Kode Dokter</th>
  <th>Kode Pasien</th>
  <th>Kode Poliklinik</th>
  <th>Biaya</th>
  <th>Keterangan</th>
  <th>Action</th>
@endsection

@section('data')
  @foreach($n as $yyu)
    <td>{{$yyu->NomorPendf}}</td>
    <td>{{$yyu->TanggalPendf}}</td>
    <td>{{$yyu->KodeDkt}}</td>
    <td>{{$yyu->KodeDkt}}</td>
    <td>{{$yyu->KodePlk}}</td>
    <td>{{$yyu->Biaya}}</td>
    <td>{{$yyu->Ket}}</td>
    <td><a href="/pendaftaran/{{$yyu->NomorPendf}}/edit" class="btn btn-primary">Edit</a> <a href="{{url('pendaftaran/delete',$yyu->NomorPendf)}}" class="btn btn-danger">Delete</a></td>
  @endforeach
@endsection
