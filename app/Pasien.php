<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table='pasien';
    protected $primaryKey='kode_psn';
    public $incrementing=false;
    public $timestamps=false;

    public function resep()
    {
        return $this->hasMany('App\Resep');
    }

    public function pembayaran()
    {
        return $this->hasMany('App\Pembayaran');
    }

    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran');
    }

}
