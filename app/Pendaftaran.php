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
        return $this->belongsTo('App\Pasien');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Dokter');
    }

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik');
    }

}
