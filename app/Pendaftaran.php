<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftara';
    protected $primaryKey = 'NomorPendf';
    public $incrementing = false;
    public $timestamps = false;

    public function pasien()
    {
        return $this->belongsTo('App\Pasien','KodePsn','kode_psn');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Dokter','KodeDkt','KodeDkt');
    }

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik','KodePlk','KodePlk');
    }

}
