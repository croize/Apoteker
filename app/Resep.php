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
       return $this->belongsTo('App\Dokter');
   }

   public function pasien()
  {
      return $this->belongsTo('App\Pasien');
  }

  public function poliklinik()
 {
     return $this->belongsTo('App\Poliklinik');
 }

}
