@extends('layout.allapp')
    @section('juduldata')
    Resep
    @endsection

@section('contentcreate')
  <a href="/resep/create" class="btn btn-primary">CREATE</a>
@endsection

      @section('content')
      <th>Nomor Resep</th>
      <th>Tanggal</th>
      <th>Nama Pasien</th>
      <th>Nama Dokter</th>
      <th>Nama Poliklinik</th>
      <th>Total Harga</th>
      <th>Bayar</th>
      <th>Kembali</th>
      <th>Action</th>
      @endsection

      @section('pencarian')
      <form class="form-inline mt-2 mt-md-0" method="get" action="/resep">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="q">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      @endsection

      @if(count($vala))
        @if($query != NULL)
                @section('alert')
                <div class="alert alert-success" role="alert">Hasil untuk data {{$query}} :</div>
                @endsection
            @else
                @section('alert')
                <div class="alert alert-success" role="alert" style="display:none;">Hasil untuk data {{$query}} :</div>
                @endsection
        @endif

      @section('data')
          @foreach($vala as $uy)
          <tr>
            <td>{{$uy->NomorResep}}</td>
            <td>{{$uy->TanggalResep}}</td>
            <td>{{$uy->pasien['nama_psn']}}</td>
            <td>{{$uy->dokter['NamaDkt']}}</td>
            <td>{{$uy->poliklinik['NamaPlk']}}</td>
            <td>{{$uy->TotalHarga}}</td>
            <td>{{$uy->Bayar}}</td>
            <td>{{$uy->Kembali}}</td>
            <td><a href="/resep/{{$uy->NomorResep}}/edit" class="btn btn-primary">EDIT</a> <a href="{{url('resep/delete',$uy->NomorResep)}}" class="btn btn-danger">DELETE</a></td>
            </tr>
          @endforeach
      @endsection

      @else
      @section('alert')
      <div class="alert alert-danger" role="alert">Data {{$query}} tidak ada.</div>
      @endsection
      @endif
