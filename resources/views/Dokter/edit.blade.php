<form class="" action="/dokter/{{$b->KodeDkt}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
  KodeDkt
  <input type="text" name="KodeDkt" value="{{$b->KodeDkt}}"><br>
  NamaDkt
  <input type="text" name="NamaDkt" value="{{$b->NamaDkt}}"><br>
  Spesialis
  <input type="text" name="Spesialis" value="{{$b->Spesialis}}"><br>
  AlamatDkt
  <input type="text" name="AlamatDkt" value="{{$b->AlamatDkt}}"><br>
  TeleponDkt
  <input type="text" name="TeleponDkt" value="{{$b->TeleponDkt}}"><br>
  KodePIK
  <input type="text" name="KodePIK" value="{{$b->KodePIK}}"><br>
  Tarif
  <input type="text" name="Tarif" value="{{$b->Tarif}}"><br>
  <input type="submit" name="" value="submit">
</form>
