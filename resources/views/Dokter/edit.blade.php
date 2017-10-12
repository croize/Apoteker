@extends('layout.allapp')

@section('contentcreate')
<form class="" action="/dokter/{{$b->KodeDkt}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
  <div class="from-group">
    <label for="">Kode Dokter</label>
    <input type="text" name="KodeDkt" class="form-control" disabled value="{{$b->KodeDkt}}">
  </div>
  <div class="from-group">
    <label for="">Nama Dokter</label>
    <input type="text" name="NamaDkt" class="form-control" value="{{$b->NamaDkt}}">
  </div>
  <div class="from-group">
    <label for="">Spesialis</label>
    <input type="text" name="Spesialis" class="form-control" value="{{$b->Spesialis}}">
  </div>
  <div class="from-group">
    <label for="">Alamat</label>
    <input type="text" name="AlamatDkt" class="form-control" value="{{$b->AlamatDkt}}">
  </div>
  <div class="from-group">
    <label for="">Telepon</label>
    <input type="text" name="TeleponDkt" class="form-control" value="{{$b->TeleponDkt}}">
  </div>
  <div class="from-group">
    <label for="">Nama Poliklinik</label>
    <select class="form-control" name="KodePIK">
      @foreach($c as $pol)
        <option value="{{$pol->KodePlk}}" @if(($pol->KodePlk)==($b->KodePIK)) selected @endif>{{$pol->NamaPlk}}</option>
      @endforeach
    </select>
  </div>
  <div class="from-group">
    <label for="">Tarif</label>
    <input type="text" name="Tarif" class="form-control" value="{{$b->Tarif}}">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="submit">
</form>
@endsection
