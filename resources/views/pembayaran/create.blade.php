@extends('layout.allapp')

@section('contentcreate')
  <form class="" action="/pembayaran" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="">Nomor Bayar</label>
      <input type="text" name="NomorByr" class="form-control" value="">
    </div>
    <div class="form-group">
      <label for="">Kode Pasien</label>
      <input type="text" name="KodePsn" class="form-control" value="">
    </div>
    <div class="form-group">
      <label for="">Tanggal Bayar</label>
      <input type="text" name="TanggalByr" class="form-control" value="">
    </div>
    <div class="form-group">
      <label for="">Jumlah Bayar</label>
      <input type="text" name="JumlahByr" class="form-control" value="">
    </div>
    <input type="submit" name="" value="Submit">

  </form>
@endsection
