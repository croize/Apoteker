@extends('layout.allapp')

@section('juduldata')
	Pasien
@endsection

@section('contentcreate')
  <a href="/pasien/create" class="btn btn-primary">CREATE</a>
@endsection

@section('content')
  <th>Kode Pasien</th>
  <th>Nama Pasien</th>
  <th>Alamat</th>
  <th>Gender</th>
  <th>Telepon</th>
  <th>Umur</th>
  <th>Action</th>
@endsection

@section('data')
@foreach($b as $x)
<tr>
  <td>{{$x->kode_psn}}</td>
  <td>{{$x->nama_psn}}</td>
  <td>{{$x->alamat_psn}}</td>
  <td>{{$x->gender_psn}}</td>
  <td>{{$x->telepon_psn}}</td>
  <td>{{$x->umur_psn}}</td>
  <td><a href="/pasien/{{$x->kode_psn}}/edit" class="btn btn-primary">Edit</a>
  <a href="{{url('pasien/delete',$x->kode_psn)}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
@endsection
