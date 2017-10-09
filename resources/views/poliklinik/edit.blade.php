@extends('layout.allapp')

@section('contentcreate')
<form class="" action="/poli/{{$as->KodePlk}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
  <div class="form-group">
    <label for="KodePlk">Kode Poliklinik</label>
    <input type="text" class="form-control" name="KodePlk" id="KodePlk" value="{{$as->KodePlk}}" placeholder="Kode Poliklinik" disabled>
  </div>
  <div class="form-group">
    <label for="NamaPlk">Nama Poliklinik</label>
    <input type="text" class="form-control" name="NamaPlk" id="NamaPlk" value="{{$as->NamaPlk}}" placeholder="Nama Poliklinik">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="Submit">

</form>
@endsection
