@extends('layout.allapp')

@section('contentcreate')
  <form class="" action="/pendaftaran" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Pendaftaran">Nomor Pendaftaran</label>
    <input type="text" class="form-control" name="NomorPendf" id="Pendaftaran" placeholder="Nomor Pendaftaran">
  </div>
  <div class="form-group">
    <label for="TanggalPendf">Tanggal Pendaftaran</label>
    <input type="text" class="form-control" name="TanggalPendf" id="TanggalPendf" placeholder="Tanggal Pendaftaran">
  </div>
  <div class="form-group">
      <label for="KodeDkt">Nama Dokter:</label>
      <select class="form-control" id="KodeDkt">
        @foreach($b as $u)
          <option value="{{$u->KodeDkt}}">{{$u->NamaDkt}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Nomor Pendaftaran</label>
    <input type="text" class="form-control" name="NomorPendf" id="Pendaftaran" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Nomor Pendaftaran</label>
    <input type="text" class="form-control" name="NomorPendf" id="Pendaftaran" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Nomor Pendaftaran</label>
    <input type="text" class="form-control" name="NomorPendf" id="Pendaftaran" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="Submit">
  </form>
@endsection
