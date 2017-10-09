@foreach($b as $d)
{{$d->KodeDkt}}<br>
{{$d->NamaDkt}}<br>
{{$d->Spesialis}}<br>
{{$d->AlamatDkt}}<br>
{{$d->TeleponDkt}}<br>
{{$d->KodePIK}}<br>
{{$d->Tarif}}<br>
<a href="/dokter/{{$d->KodeDkt}}/edit">edit</a>
<form class="" action="/dokter/{{$d->KodeDkt}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  <input type="submit" name="" value="delete">

</form>
@endforeach
