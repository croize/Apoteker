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
      <label>Nama Dokter:</label>
      <select class="form-control"  name="KodeDkt">
        <option value="">--Select--</option>
        @foreach($b as $u)
          <option value="{{$u->KodeDkt}}">{{$u->NamaDkt}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label >Nama Pasien</label>
    <select class="form-control"  name="KodePsn">
      <option value="">--Select--</option>
      @foreach($bs as $pas)
        <option value="{{$pas->kode_psn}}">{{$pas->nama_psn}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label >Kode Poliklinik</label>
    <select class="form-control"  name="KodePlk">
      <option value="">--Select--</option>
      @foreach($cs as $pol)
        <option value="{{$pol->KodePlk}}">{{$pol->NamaPlk}}</option>
      @endforeach
    </select>
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
