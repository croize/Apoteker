<form class="" action="/poli/" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
  Kode Poliklinik :
  <input type="text" name="KodePlk" value=""><br>
  Nama Poliklinik :
  <input type="text" name="NamaPlk" value=""><br>
  <input type="submit" name="" value="Submit">

</form>
