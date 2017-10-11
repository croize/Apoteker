@foreach($b as $x)
{{$x->kode_psn}}<br>
{{$x->nama_psn}}<br>
{{$x->alamat_psn}}<br>
{{$x->gender_psn}}<br>
{{$x->umur_psn}}<br>
{{$x->telepon_psn}}<br>
<a href="/pasien/{{$x->kode_psn}}/edit">Edit</a>
<a href="{{url('pasien/delete',$x->kode_psn)}}">Delete</a>

<hr>
@endforeach