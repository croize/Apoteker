@extends('layout.newapp')

@section('content')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/pembayaran">Pembayaran</a><br>
                    <a href="/pendaftaran">Pendaftaran</a><br>
                    <a href="/dokter">Dokter</a><br>
                    <a href="/pasien">Pasien</a><br>
                    <a href="/poli">Poliklinik</a><br>
                    <a href="/resep">Resep</a><br>
                    <a href="/obat">Obat</a><br>
                    <a href="/detail">Detail</a><br>
                </div>
            </div>
        </div>
@endsection
