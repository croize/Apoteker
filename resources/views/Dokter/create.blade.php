@extends('layout.allapp')

@section('contentcreate')
<form class="" action="/dokter" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="">Kode Dokter</label>
    <input type="text" name="KodeDkt" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="">Nama Dokter</label>
    <input type="text" name="NamaDkt" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="">Spesialis</label>
    <input type="text" name="Spesialis" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="">Alamat</label>
    <input type="text" name="AlamatDkt" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="">Telepon</label>
    <input type="text" name="TeleponDkt" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="">Nama Poliklinik</label>
    <select class="form-control" name="KodePIK">
      @foreach($sa as $pol)
        <option value="{{$pol->KodePlk}}">{{$pol->NamaPlk}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Tarif</label>
    <input type="text" name="Tarif" class="form-control" value="">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="submit">
</form>
@endsection
