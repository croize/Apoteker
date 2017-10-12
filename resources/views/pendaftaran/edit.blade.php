@extends('layout.allapp')

@section('contentcreate')
  <form class="" action="/pendaftaran/{{$yu->NomorPendf}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
  <div class="form-group">
    <label for="Pendaftaran">Nomor Pendaftaran</label>
    <input type="text" class="form-control" name="NomorPendf" id="Pendaftaran" placeholder="Nomor Pendaftaran" value="{{$yu->NomorPendf}}" disabled>
  </div>
  <div class="form-group">
    <label for="TanggalPendf">Tanggal Pendaftaran</label>
    <input type="text" class="form-control" name="TanggalPendf" id="TanggalPendf" placeholder="Tanggal Pendaftaran" value="{{$yu->TanggalPendf}}">
  </div>
  <div class="form-group">
      <label for="KodeDkt">Nama Dokter:</label>
      <select class="form-control" id="KodeDkt" name="KodeDkt">
        <option value="">--Select--</option>
        @foreach($b as $u)
          <option value="{{$u->KodeDkt}}" @if($yu->KodeDkt == $u->KodeDkt)selected @else @endif>{{$u->NamaDkt}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Nama Pasien</label>
    <select class="form-control" id="KodeDkt" name="KodePsn">
      <option value="">--Select--</option>
      @foreach($bs as $pasi)
        <option value="{{$pasi->kode_psn}}" @if($yu->KodePsn == $pasi->kode_psn)selected @else @endif>{{$pasi->nama_psn}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Kode Poliklinik</label>
    <select class="form-control" id="KodeDkt" name="KodePlk">
      <option value="">--Select--</option>
      @foreach($cs as $poli)
        <option value="{{$poli->KodePlk}}" @if($yu->KodePlk == $poli->KodePlk)selected @else @endif>{{$poli->NamaPlk}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Biaya</label>
    <input type="text" class="form-control" name="Biaya" id="Pendaftaran" placeholder="Biaya" value="{{$yu->Biaya}}">
  </div>
  <div class="form-group">
    <label for="Pendaftaran">Keterangan</label>
    <input type="text" class="form-control" name="Ket" id="Pendaftaran" placeholder="Keterangan" value="{{$yu->Ket}}">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="Submit">
  </form>
@endsection
