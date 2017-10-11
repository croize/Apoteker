@extends('layout.allapp')

@section('content')
  <th>Nomor Pembayaran</th>
  <th>Nama Pasien</th>
  <th>Tanggal Pembayaran</th>
  <th>Jumlah Pembayaran</th>
  <th>Action</th>
@endsection

@section('data')
  @foreach($susu as $ay)
    <td>{{$ay->NomorByr}}</td>
    <td>{{$ay->KodePsn}}</td>
    <td>{{$ay->TanggalByr}}</td>
    <td>{{$ay->JumlahByr}}</td>
    <td><a href="/pembayaran/{{$ay->NomorByr}}/edit" class="btn btn-primary">Edit</a> <a href="{{url('pembayaran/delete', $ay->NomorByr)}}" class="btn btn-danger">Delete</a></td>
  @endforeach
@endsection
