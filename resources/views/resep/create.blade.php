@extends('layout.allapp')

@section('juduldata')
  CREATE RESEP
@endsection

@section('contentcreate')
<form class="" action="/resep" method="post">
{{csrf_field()}}
    <div class="from-group">
      <label for="">Nomor Resep</label><br>
      <input type="text" name="NomorResep" class="form-control" value="" placeholder="NomorResep">
    </div>

    <div class="from-group">
      <label for="">Tanggal Resep</label><br>
      <input type="text" name="TanggalResep" class="form-control" value="" placeholder="TanggalResep">
    </div>

    <div class="from-group">
      <label for="">Nama Dokter</label>
      <select class="form-control" name="KodeDkt">
        <option value="">--Select--</option>
        @foreach($as as $dok)
          <option value="{{$dok->KodeDkt}}">{{$dok->NamaDkt}}</option>
        @endforeach
      </select>
    </div>

    <div class="from-group">
      <label for="">Nama Pasien</label>
      <select class="form-control" name="KodePsn">
        <option value="">--Select--</option>
        @foreach($bs as $pas)
          <option value="{{$pas->kode_psn}}">{{$pas->nama_psn}}</option>
        @endforeach
      </select>
    </div>

    <div class="from-group">
      <label for="">Nama Poliklinik</label>
      <select class="form-control" name="KodePlk">
        <option value="">--Select--</option>
        @foreach($cs as $pol)
          <option value="{{$pol->KodePlk}}">{{$pol->NamaPlk}}</option>
        @endforeach
      </select>
    </div>

    <div class="from-group">
      <label for="">Total Harga</label><br>
      <input type="text" name="TotalHarga" class="form-control" value="" placeholder="Total Harga">
    </div>

    <div class="from-group">
      <label for="">Bayar</label><br>
      <input type="text" name="Bayar" class="form-control" value="" placeholder="Bayar">
    </div>
<input type="submit" class="btn btn-primary" name="" value="Submit">
</form>
@endsection
