<form class="" action="/resep/{{$su->NomorResep}}" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="put">
<input type="text" name="NomorResep" value="{{$su->NomorResep}}" placeholder="TanggalResep"><br>
<input type="text" name="TanggalResep" value="{{$su->TanggalResep}}" placeholder="TanggalResep"><br>
<input type="text" name="KodeDkt" value="{{$su->KodeDkt}}" placeholder="KodeDkt"><br>
<input type="text" name="KodePsn" value="{{$su->KodePsn}}" placeholder="KodePsn"><br>
<input type="text" name="KodePlk" value="{{$su->KodePlk}}" placeholder="KodePlk"><br>
<input type="text" name="TotalHarga" value="{{$su->TotalHarga}}" placeholder="TotalHarga"><br>
<input type="text" name="Bayar" value="{{$su->Bayar}}" placeholder="Bayar"><br>
<input type="submit" name="" value="Submit">
</form>
