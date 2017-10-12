
@extends('layout.allapp')

@section('juduldata')
	Dokter
@endsection

@section('contentcreate')
<a href="/dokter/create" class="btn btn-primary">CREATE</a>
@endsection
@section('content')
  <th>Kode Dokter</th>
  <th>Nama Dokter</th>
  <th>Alamat Dokter</th>
  <th>Telepon</th>
  <th>Nama Poliklinik</th>
  <th>Tarif</th>
  <th>Action</th>
@endsection

@section('data')
@foreach($b as $d)
<tr>
  <td>{{$d->KodeDkt}}</td>
  <td>{{$d->NamaDkt}}</td>
  <td>{{$d->AlamatDkt}}</td>
  <td>{{$d->TeleponDkt}}</td>
  <td>{{$d->poliklinik['NamaPlk']}}</td>
  <td>{{$d->Tarif}}</td>
  <td>
  <a href="/dokter/{{$d->KodeDkt}}/edit" class="btn btn-primary">EDIT</a>
  <a href="{{url('dokter/delete',$d->KodeDkt)}}"  class="btn btn-danger">Delete</a>
  </td>
</tr>

@endforeach
@endsection
