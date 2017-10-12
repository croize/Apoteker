@extends('layout.allapp')

@section('contentcreate')
<form class="" action="/resep/{{$su->NomorResep}}" method="post">
{{csrf_field()}}

<input type="hidden" name="_method" value="put">
    <div class="form-group">
        <label for="">Nomor Resep</label>
        <input type="text" name="NomorResep" value="{{$su->NomorResep}}" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="">Tanggal Resep</label>
        <input type="text" name="TanggalResep" value="{{$su->TanggalResep}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama Dokter</label>
        <select class="form-control" name="KodeDkt">
          <option value="">--SELECT--</option>
          @foreach($as as $dok)
            <option value="{{$dok->KodeDkt}}"@if(($su->KodeDkt)==($dok->KodeDkt))selected @endif>{{$dok->NamaDkt}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nama Pasien</label>
        <select class="form-control" name="KodePsn">
          <option value="">--SELECT--</option>
          @foreach($bs as $pas)
            <option value="{{$pas->kode_psn}}"@if(($su->KodePsn)==($pas->kode_psn))selected @endif>{{$pas->nama_psn}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nama Poliklinik</label>
        <select class="form-control" name="KodePlk">
          <option value="">--SELECT--</option>
          @foreach($cs as $pol)
            <option value="{{$pol->KodePlk}}"@if(($su->KodePlk)==($pol->KodePlk))selected @endif>{{$pol->NamaPlk}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Total Harga</label>
        <input type="text" name="TotalHarga" value="{{$su->TotalHarga}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Bayar</label>
        <input type="text" name="Bayar" value="{{$su->Bayar}}" class="form-control">
    </div>
<input class="btn btn-primary" type="submit" name="" value="Submit">
</form>
@endsection
