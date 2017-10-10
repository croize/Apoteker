@extends('layout.allapp')

@section('contentcreate')
  <form class="" action="/pembayaran/{{$susu->NomorByr}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="">Nomor Bayar</label>
      <input type="text" name="NomorByr" class="form-control" value="{{$susu->NomorByr}}" disabled>
    </div>
    <div class="form-group">
      <label for="">Kode Pasien</label>
      <input type="text" name="KodePsn" class="form-control" value="{{$susu->KodePsn}}">
    </div>
    <div class="form-group">
      <label for="">Tanggal Bayar</label>
      <input type="text" name="TanggalByr" class="form-control" value="{{$susu->TanggalByr}}">
    </div>
    <div class="form-group">
      <label for="">Jumlah Bayar</label>
      <input type="text" name="JumlahByr" class="form-control" value="{{$susu->JumlahByr}}">
    </div>
    <input type="submit" name="" value="Submit">

  </form>
@endsection
