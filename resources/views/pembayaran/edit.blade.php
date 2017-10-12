@extends('layout.allapp')

@section('contentcreate')
  <form class="" action="/pembayaran/{{$susu->NomorByr}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
    <div class="form-group">
      <label for="">Nomor Bayar</label>
      <input type="text" name="NomorByr" class="form-control" value="{{$susu->NomorByr}}" disabled>
    </div>
    <div class="form-group">
      <label for="">Kode Pasien</label>
      <select class="form-control" name="KodePsn">
        <option value="">--Select--</option>
        @foreach($asa as $pas)
        <option value="{{$pas->kode_psn}}"@if(($pas->kode_psn)==($susu->KodePsn)) selected @endif>{{$pas->nama_psn}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="">Tanggal Bayar</label>
      <input type="text" name="TanggalByr" class="form-control" value="{{$susu->TanggalByr}}">
    </div>
    <div class="form-group">
      <label for="">Jumlah Bayar</label>
      <input type="text" name="JumlahByr" class="form-control" value="{{$susu->JumlahByr}}">
    </div>
    <input type="submit" name="" value="Submit" class="btn btn-primary">

  </form>
@endsection
