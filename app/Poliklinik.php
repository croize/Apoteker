<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $table = 'poliklinik';
    protected $primaryKey = 'KodePlk';
    public $timestamps = false;
    public $incrementing = false;

    public function resep()
    {
        return $this->hasMany('App\Resep');
    }

    public function dokter()
    {
        return $this->hasMany('App\Dokter');
    }

    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran');
    }

}
