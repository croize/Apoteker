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
      <select class="form-control" id="KodeDkt" name="KodeDkt">
        @foreach($b as $u)
          <option value="">--Select--</option>
          <option value="{{$u->KodeDkt}}">{{$u->NamaDkt}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Nama Pasien</label>
    <input type="text" class="form-control" name="KodePsn" id="Pendaftaran" placeholder="Nama Pasien">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Kode Poliklinik</label>
    <input type="text" class="form-control" name="KodePlk" id="Pendaftaran" placeholder="Kode Poliklinik">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Biaya</label>
    <input type="text" class="form-control" name="Biaya" id="Pendaftaran" placeholder="Biaya">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Keterangan</label>
    <input type="text" class="form-control" name="Ket" id="Pendaftaran" placeholder="Keterangan">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="Submit">
  </form>
@endsection
