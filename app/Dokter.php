<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table='dokter';
    public $timestamps=false;
    protected $primaryKey = 'KodeDkt';
    public $incrementing = false;

    public function resep()
    {
        return $this->hasMany('App\Resep');
    }

    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran');
    }

    public function poliklinik()
    {
        return $this->belongsTo('App\Poliklinik','KodePIk','KodePlk');
    }

}
