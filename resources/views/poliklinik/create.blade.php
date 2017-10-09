@extends('layout.allapp')

@section('contentcreate')
@if(Session::get('message') == NULL)
      <div class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
          <strong>{{ Session::get('message') }}</strong>
      </div>
  @else
  <div class="alert alert-warning" role="alert">
  <strong>{{ Session::get('message') }}</strong>
</div>
@endif
<form class="" action="/poli" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="KodePlk">Kode Poliklinik</label>
    <input type="text" class="form-control" name="KodePlk" id="KodePlk" placeholder="Kode Poliklinik">
  </div>
  <div class="form-group">
    <label for="NamaPlk">Nama Poliklinik</label>
    <input type="text" class="form-control" name="NamaPlk" id="NamaPlk" placeholder="Nama Poliklinik">
  </div>
  <input type="submit" class="btn btn-primary" name="" value="Submit">

</form>
@endsection
