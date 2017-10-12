<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'NomorResep';
    public $incrementing = false;
    public $timestamps = false;

    public function detail()
    {
        return $this->hasMany('App\Detail');
    }

    public function dokter()
   {
       return $this->belongsTo('App\Dokter','KodeDkt','KodeDkt');
   }

   public function pasien()
  {
      return $this->belongsTo('App\Pasien','KodePsn','kode_psn');
  }

  public function poliklinik()
 {
     return $this->belongsTo('App\Poliklinik','KodePlk','KodePlk');
 }

}
